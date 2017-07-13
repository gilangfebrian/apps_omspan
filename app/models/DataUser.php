<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataUser {

    private $db;
    private $_kd_d_user;
    private $_kd_r_jenis;
    private $_kd_r_unit;
    private $_nama_user;
    private $_pass_user;
    private $_error;
    private $_valid = TRUE;
    private $_table = 'd_user';
    public $registry;

    /*
     * konstruktor
     */

    public function __construct($registry = Registry) {
        $this->db = $registry->db;
        $this->registry = $registry;
    }

    /*
     * mendapatkan data dari tabel Data Tetap
     * @param limit batas default null
     * return array objek Data Tetap
     */

    public function get_d_user($limit = null, $batas = null) {
        $sql = "SELECT * FROM " . $this->_table . " ORDER BY kd_r_unit";
        if (!is_null($limit) AND !is_null($batas)) {
            $sql .= " LIMIT " . $limit . "," . $batas;
        }
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $val) {
            $d_user = new $this($this->registry);
            $d_user->set_kd_d_user($val['kd_d_user']);
            $d_user->set_kd_r_jenis($val['kd_r_jenis']);
            $d_user->set_kd_r_unit($val['kd_r_unit']);
            $d_user->set_nama_user($val['nama_user']);
            $d_user->set_pass_user($val['pass_user']);

            $data[] = $d_user;
        }

        return $data;
    }

    /*
     * mendapatkan Data Tetap sesuai id
     * @param objek Data Tetap
     * return objek Data Tetap
     */

    public function get_d_user_by_id($d_user = DataUser) {
        if (is_null($d_user->get_kd_d_user())) {
            return false;
        }
        $sql = "SELECT * FROM " . $this->_table . " WHERE kd_d_user=" . $d_user->get_kd_d_user();
//        var_dump($sql);
        $result = $this->db->select($sql);
        foreach ($result as $val) {
            $this->set_kd_d_user($val['kd_d_user']);
            $this->set_kd_r_jenis($val['kd_r_jenis']);
            $this->set_kd_r_unit($val['kd_r_unit']);
            $this->set_nama_user($val['nama_user']);
            $this->set_pass_user($val['pass_user']);
        }
        return $this;
    }

    public function get_kanwil_name() {
        $sql = "SELECT nama_user FROM d_user WHERE kd_r_jenis=3";
        $data = $this->db->select($sql);
        $return = array();
        foreach ($data as $value) {
            $return[] = $value['nama_user'];
        }
        return $return;
    }

    /*
     * tambah data Data Tetap
     * param array data array key=>value, nama kolom=>data
     */

    public function add_d_user() {
        $data = array(
            'kd_r_jenis' => $this->get_kd_r_jenis(),
            'kd_r_unit' => $this->get_kd_r_unit(),
            'nama_user' => $this->get_nama_user(),
            'pass_user' => $this->get_pass_user()
        );
        $this->validate();
        if (!$this->get_valid()) {
            return false;
        }
        if (!is_array($data)) {
            return false;
        }
        return $this->db->insert($this->_table, $data);
    }

    /*
     * update Data Tetap, id harus di set terlebih dahulu
     * param data array
     */

    public function update_d_user() {
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_r_jenis' => $this->get_kd_r_jenis(),
            'kd_r_unit' => $this->get_kd_r_unit(),
            'nama_user' => $this->get_nama_user(),
            'pass_user' => $this->get_pass_user()
        );
        $this->validate();
        if (!$this->get_valid()) {
            return false;
        }
        if (!is_array($data)) {
            return false;
        }
        $where = ' kd_d_user=' . $this->get_kd_d_user();
        return $this->db->update($this->_table, $data, $where);
    }

    /*
     * hapus Data Tetap, id harus di set terlebih dahulu
     */

    public function delete_d_user() {
        $where = ' kd_d_user=' . $this->get_kd_d_user();
        $this->db->delete($this->_table, $where);
    }

    public function validate() {
        if ($this->get_kd_r_jenis() == "") {
            $this->_error .= "Jenis user belum diinput!<?br>";
            $this->_valid = FALSE;
        }
        if ($this->get_kd_r_unit() == "") {
            $this->_error .= "Unit User belum diinput!</br>";
            $this->_valid = FALSE;
        }
        if ($this->get_nama_user() == "") {
            $this->_error .= "Nama belum diinput!</br>";
            $this->_valid = FALSE;
        }
        if ($this->get_pass_user() == "") {
            $this->_error .= "Pass belum diinput!</br>";
            $this->_valid = FALSE;
        }
    }

    /*
     * setter
     */

    public function set_kd_d_user($kode) {
        $this->_kd_d_user = $kode;
    }

    public function set_kd_r_jenis($jenis) {
        $this->_kd_r_jenis = $jenis;
    }

    public function set_kd_r_unit($unit) {
        $this->_kd_r_unit = $unit;
    }

    public function set_nama_user($nama) {
        $this->_nama_user = $nama;
    }

    public function set_pass_user($pass) {
        $this->_pass_user = $pass;
    }

    public function set_table($table) {
        $this->_table = $table;
    }

    /*
     * getter
     */

    public function get_kd_d_user($where = null) {
        if (!is_null($where)) {
            $sql = "SELECT kd_d_user FROM '" . $this->_table . "' WHERE '" . $where . "'";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $this->set_kd_d_user($val['kd_d_user']);
            }
        }
        return $this->_kd_d_user;
    }

    public function get_kd_r_jenis() {
        return $this->_kd_r_jenis;
    }

    public function get_kd_r_unit() {
        return $this->_kd_r_unit;
    }

    public function get_nama_user() {
        return $this->_nama_user;
    }

    public function get_pass_user() {
        return $this->_pass_user;
    }

    public function get_error() {
        return $this->_error;
    }

    public function get_valid() {
        return $this->_valid;
    }

    /*
     * destruktor
     */

    public function __destruct() {
        
    }

}