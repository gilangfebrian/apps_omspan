<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class User {

    public $registry;
    private $_table = "d_user";
    public $_db;
    private $_kd_d_user;
    private $_kd_r_jenis;
    private $_kd_r_unit;
    private $_nama_user;
    private $_pass_user;

    public function __construct($registry) {
        $this->registry = $registry;
        $this->_db = new Database();
    }

    public function login($username, $password) {
        $sql = "SELECT * FROM " . $this->_table . " WHERE nama_user='" . $username . "' AND pass_user='" . $password . "' and aktif = 1";
		//var_dump($sql);
        $result = $this->_db->select($sql);
        $role = 0;
        $return = array();
        foreach ($result as $v) {
            $role = $v['kd_r_jenis'];
            $kd = $v['nama_org'];
            $id = $v['kd_d_user'];
        }
        $return[] = count($result);
        $return[] = $role;
        $return[] = $kd;
        $return[] = $id;
        return $return;
    }

    public function get_kd_d_user() {
        return $this->_kd_d_user;
    }

    public function set_kd_d_user($kd_d_user) {
        $this->_kd_d_user = $kd_d_user;
    }

    public function get_kd_r_jenis() {
        return $this->_kd_r_jenis;
    }

    public function set_kd_r_jenis($kd_r_jenis) {
        $this->_kd_r_jenis = $kd_r_jenis;
    }

    public function get_kd_r_unit() {
        return $this->_kd_r_unit;
    }

    public function set_kd_r_unit($kd_r_unit) {
        $this->_kd_r_unit = $kd_r_unit;
    }

    public function get_nama_user() {
        return $this->_nama_user;
    }

    public function set_nama_user($nama_user) {
        $this->_nama_user = $nama_user;
    }

    public function get_pass_user() {
        return $this->_pass_user;
    }

    public function set_pass_user($pass_user) {
        $this->_pass_user = $pass_user;
    }

}