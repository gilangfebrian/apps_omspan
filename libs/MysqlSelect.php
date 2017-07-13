<?php

/**
 * Class for SQL SELECT generation and results.
 * clausa FROM, JOIN, WHERE, GROUP, ORDER, USING , LIMIT
 */
class MysqlSelect {

    protected $_adapter;

    const FROM = 'FROM';
    const COLUMNS = 'COLUMNS';
    const JOIN = 'JOIN';
    const WHERE = 'WHERE';
    const GROUP = 'GROUP';
    const ORDER = 'ORDER';
    const USING = 'USING';
    const LIMIT_COUNT = 'LIMITCOUNT';
    const LIMIT_OFFSET = 'LIMITOFFSET';
    const INNER_JOIN = 'INNER JOIN';
    const LEFT_JOIN = 'LEFT JOIN';
    const RIGHT_JOIN = 'RIGHT JOIN';
    const FULL_JOIN = 'FULL JOIN';
    const NATURAL_JOIN = 'NATURAL JOIN';
    const SQL_AND = 'AND';
    const SQL_AS = 'AS';
    const SQL_OR = 'OR';
    const SQL_ON = 'ON';

    protected $_parts = array();
    protected static $_partsInit = array(
        self::FROM => array(),
        self::COLUMNS => array(),
        self::WHERE => array(),
        self::JOIN => array(),
        self::GROUP => array()
    );
    protected $_bind = array();
    private $index = 1;

    /**
     * constructor 
     *
     * @param Mysql_Adapter $adapter
     */
    public function __construct(Mysql_Adapter $adapter) {
        $this->_adapter = $adapter;
        $this->_parts = self::$_partsInit;
    }

    public function from($name, $columns = array()) {
        $this->_join(self::FROM, $name, $columns, null);
    }

    public function join($name, $columns = array(), $using) {
        $this->_join(self::INNER_JOIN, $name, $columns, sprintf('%s (%s)', self::USING, $using));
    }

    public function joinLeft($name, $columns = array(), $using) {
        $this->_join(self::LEFT_JOIN, $name, $columns, sprintf('%s (%s)', self::USING, $using));
    }

    public function joinRight($name, $columns = array(), $using) {
        $this->_join(self::RIGHT_JOIN, $name, $columns, sprintf('%s (%s)', self::USING, $using));
    }

    public function joinFull($name, $columns = array(), $using) {
        $this->_join(self::FULL_JOIN, $name, $columns, sprintf('%s (%s)', self::USING, $using));
    }

    public function joinNatural($name, $columns = array(), $using) {
        $this->_join(self::NATURAL_JOIN, $name, $columns, sprintf('%s (%s)', self::USING, $using));
    }

    protected function _join($type, $name, $columns, $cond) {
        if (is_array($name)) {
            foreach ($name as $alias => $table) {
                $using = array($type, $table, $alias, $cond);
            }

            $this->_parts[self::JOIN][] = implode(' ', $using);
        } else if ($name !== null)
            $this->_parts[self::JOIN][] = $type . ' ' . $name;

        if ($columns)
            $this->_parts[self::COLUMNS][] = implode(', ', $columns);
    }

    public function orWhere($cond, $value = null) {
        $this->_parts[self::WHERE][] = $this->_where($cond, $value, false);
    }

    public function where($cond, $value = null) {
        $this->_parts[self::WHERE][] = $this->_where($cond, $value, true);
    }

    protected function _where($condition, $value = null, $bool) {
        if ($value !== null) {
            if (is_array($value)) {
                $value = implode(',', $value);
                $condition = str_replace('?', $value, $condition);
            } else
                $condition = $this->quote($condition, $value);
        }

        $cond = "";
        if ($this->_parts[self::WHERE]) {
            if ($bool === true) {
                $cond = self::SQL_AND . ' ';
            } else {
                $cond = self::SQL_OR . ' ';
            }
        }

        return $cond . "$condition";
    }

    public function limit($count = null, $offset = null) {
        $this->_parts[self::LIMIT_COUNT] = (int) $count;
        $this->_parts[self::LIMIT_OFFSET] = (int) $offset;
        return $this;
    }

    public function group($group) {
        $this->_parts[self::GROUP] = $group;
        return $this;
    }

    public function order($order) {
        $this->_parts[self::ORDER] = $order;
        return $this;
    }

    /**
     * set bind param
     *
     * @param string $quote
     * @param mixed $value
     * @return string
     */
    public function quote($quote, $value) {
        $quote = str_replace('?', ':col' . $this->index, $quote);
        $this->_bind['col' . $this->index] = $value;
        $this->index++;

        return $quote;
    }

    /**
     * get bind param
     *
     * @return string
     */
    public function getBind() {
        return $this->_bind;
    }

    /**
     * get query sql
     *
     * @return string
     */
    public function getSQL() {
        if ($this->_parts[self::COLUMNS]) {
            $query = sprintf('SELECT %s %s', join(', ', $this->_parts[self::COLUMNS]), join(' ', $this->_parts[self::JOIN]));
        } else {
            $query = sprintf('SELECT * %s', join(' ', $this->_parts[self::JOIN]));
        }

        if ($this->_parts[self::WHERE]) {
            $query .= sprintf(' WHERE %s', join(' ', $this->_parts[self::WHERE]));
        }

        if (!empty($this->_parts[self::GROUP])) {
            $query .= sprintf(' GROUP BY %s', $this->_parts[self::GROUP]);
        }

        if (!empty($this->_parts[self::ORDER])) {
            $query .= sprintf(' ORDER BY %s', $this->_parts[self::ORDER]);
        }

        if (!empty($this->_parts[self::LIMIT_OFFSET]) || !empty($this->_parts[self::LIMIT_COUNT])) {
            $count = 0;
            $offset = 0;
            $offset = (int) ($this->_parts[self::LIMIT_OFFSET]) ? $this->_parts[self::LIMIT_OFFSET] : $offset;
            $count = (int) ($this->_parts[self::LIMIT_COUNT]) ? $this->_parts[self::LIMIT_COUNT] : $count;
            $query .= sprintf(' LIMIT %s, %s', $count, $offset);
        }

        return $query;
    }

    public function __destruct() {
        
    }

}