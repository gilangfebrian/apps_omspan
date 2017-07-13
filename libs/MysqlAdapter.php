<?php

/**
 * Class PDO MySQL for manipulate SQL
 * SELECT, INSERT, UPDATE, DELETE 
 */
class MysqlAdapter {

    public $db;
    public $id;
    public $bind;

    /**
     * default array fetch mode
     */
    protected $_fetchMode = PDO::FETCH_ASSOC;

    /**
     * constructor connect pdo mysql
     *
     * @param string $host
     * @param string $user
     * @param string $password
     * @param string $database
     */
    public function __construct($host, $user, $password, $database) {
        try {
            $this->db = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print 'Kesalahan : ' . $e->getMessage() . '<br/>';
            die();
        }
    }

    /**
     * get table
     *
     */
    public function getDb() {
        return $this->db;
    }

    public function getBind() {
        return $this->bind;
    }

    public function clearBind() {
        unset($this->bind);
    }

    /**
     * set bind param
     *
     * @param string $quote
     * @param mixed $value
     * @return string
     */
    public function quote($query, $value, $key = 'col') {
        $ph = ':' . $key;
        $query = str_replace('?', $ph, $query);
        $this->bind[$key] = $value;

        return $query;
    }

    /**
     * query execute sql
     *
     * @param string $sql
     * @param array $bind
     * @return object
     */
    public function query($sql, $bind = array()) {
        if ($sql instanceof Mysql_Select) {
            if (empty($bind))
                $bind = $sql->getBind();

            $sql = $sql->getSql();
        }
        else {
            if (empty($bind))
                $bind = $this->bind;
        }

        if (!is_array($bind))
            $bind = array($bind);

        $stmt = $this->db->prepare($sql);
        $stmt->execute($bind);
        $stmt->setFetchMode($this->_fetchMode);

        $this->clearBind();

        return $stmt;
    }

    /**
     * insert data
     *
     * @param string $table
     * @param array $row
     * @return int
     */
    public function insert($table, $bind) {
        $vals = array();
        foreach ($bind as $k => $v) {
            $vals[] = ':' . $k;
        }
        $query = sprintf('INSERT INTO %s (%s) VALUES (%s)', $table, implode(',', array_keys($bind)), implode(', ', $vals)
        );

        $stmt = $this->query($query, $bind);
        $result = $stmt->rowCount();
        $this->id = $this->db->lastInsertId();
        return $result;
    }

    /**
     * get last id
     *
     * @return int
     */
    public function lastInsertId() {
        return $this->id;
    }

    /**
     * update data
     *
     * @param string $table
     * @param array $row
     * @param string $where
     * @return int
     */
    public function update($table, $data, $where) {
        $vals = array();
        foreach ($data as $k => $v) {
            $vals[] = $k . ' = :' . $k;
            $this->bind[$k] = $v;
        }

        if (is_array($where))
            $where = implode(' AND ', $where);

        $query = sprintf('UPDATE %s SET %s WHERE %s', $table, implode(',', $vals), $where
        );

        $stmt = $this->query($query);
        $result = $stmt->rowCount();
        return $result;
    }

    /**
     * delete data
     *
     * @param string $table
     * @param string $where
     * @return int
     */
    public function delete($table, $where) {
        if (is_array($where))
            $where = implode(' AND ', $where);

        $query = sprintf('DELETE FROM %s WHERE %s', $table, $where
        );

        $stmt = $this->query($query);
        $result = $stmt->rowCount();
        return $result;
    }

    /**
     * query select sql
     *
     * @return Mysql_Select
     */
    public function select() {
        return new Mysql_Select($this);
    }

    /**
     * fetch data, optional fetch mode. defailt array
     *
     * @param string $query
     * @param array $bind
     * @param string $fetchMode
     * @return array/object
     */
    public function fetchAll($query, $bind = array(), $fetchMode = null) {
        if ($fetchMode === null)
            $fetchMode = $this->_fetchMode;

        $stmt = $this->query($query, $bind);
        return $stmt->fetchAll($fetchMode);
    }

    /**
     * fetch data array
     *
     * @param string $query
     * @param array $bind
     * @return array
     */
    public function fetchAssoc($query, $bind = array()) {
        $stmt = $this->query($query, $bind);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * fetch data object
     *
     * @param string $query
     * @param array $bind
     * @return object
     */
    public function fetchObj($query, $bind = array()) {
        $stmt = $this->query($query, $bind);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function fetchNum($sql, $bind = array()) {
        $stmt = $this->query($sql, $bind);
        return $stmt->fetchAll(PDO::FETCH_NUM);
    }

    public function fetchPairs($sql, $bind = array()) {
        $stmt = $this->query($sql, $bind);
        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $data[$row[0]] = $row[1];
        }
        return $data;
    }

    public function fetchOne($sql, $bind = array()) {
        $stmt = $this->query($sql, $bind);
        return $stmt->fetchColumn(0);
    }

    public function __destruct() {
        ;
    }

}