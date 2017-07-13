<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Auth {

    private static $_instance = null;
    private $_roles = array();
    private $_access = array();
    private $_redirect = array();

    const GUEST = 'guest';

    public function __construct() {
        ;
    }

    public static function get_instance() {
        if (null == self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function add_roles($role) {
        if (!array_key_exists($role, $this->_roles)) {
            $this->_roles[$role] = $role;
            return true;
        }
        return false;
    }

    public function add_access($resource, $role, $action) {
        if (!array_key_exists($role, $this->_access)) {
            $this->_access[$role] = array();
        }
        if (!array_key_exists($resource, $this->_access[$role])) {
            $this->_access[$role][$resource] = array();
            if (!is_array($action)) {
                $action = array($action);
            }
            $this->_access[$role][$resource] = $action;
            return true;
        }
        return false;
    }

    public function add_redirect($role, $controller, $action) {
        if (array_key_exists($role, $this->_roles)) {
            $this->_redirect[$role] = array('controller' => ucfirst($controller) . 'Controller', 'action' => $action);
            return true;
        }
        return false;
    }

    public function is_allowed($role, $resource, $action) {
        if (array_key_exists($role, $this->_access)) {
            if (array_key_exists($resource, $this->_access[$role])) {
                if (in_array($action, $this->_access[$role][$resource])) {
                    return true;
                }
            }
        }

        return false;
    }

    public static function is_role($role) {
        $is_roled = (Session::get('role') == $role);

        return $is_roled;
    }

    public function get_roles() {
        return $this->_roles;
    }

    public function get_redirect($role) {
        if (array_key_exists($role, $this->_redirect)) {
            return $this->_redirect[$role];
        }
        return false;
    }

    public function __destruct() {
        ;
    }

}