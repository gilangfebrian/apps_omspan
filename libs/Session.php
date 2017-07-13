<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Session {

    public static function createSession() {
        @session_start();
    }

    public static function set($name, $value) {
        $_SESSION[$name] = $value;
    }

    public static function get($name) {
        if (isset($_SESSION[$name]))
            return $_SESSION[$name];
    }

    public static function destroySession() {
        session_destroy();
    }

    public static function unsetAll() {
        unset($_SESSION);
    }

    public static function unsetKey($key) {
        unset($_SESSION[$key]);
    }

}