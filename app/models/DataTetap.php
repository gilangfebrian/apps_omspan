<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataTetap {

    private $db;
    private $_kd_d_tetap;
    private $_kd_r_unit;
    private $_d_tetap_fo1;
    private $_d_tetap_trainer;
    private $_d_tetap_pendamping;
    private $_d_tetap_dsu;
    private $_error;
    private $_valid = TRUE;
    private $_table = 'd_tetap';
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

    public function get_d_tetap($limit = null, $batas = null) {
        $sql = "SELECT * FROM " . $this->_table . " ORDER BY kd_d_tetap";
        if (!is_null($limit) AND !is_null($batas)) {
            $sql .= " LIMIT " . $limit . "," . $batas;
        }
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $val) {
            $d_tetap = new $this($this->registry);
            $d_tetap->set_kd_d_tetap($val['kd_d_tetap']);
            $d_tetap->set_kd_r_unit($val['kd_r_unit']);
            $d_tetap->set_d_tetap_fo1($val['d_tetap_fo1']);
            $d_tetap->set_d_tetap_trainer($val['d_tetap_trainer']);
            $d_tetap->set_d_tetap_pendamping($val['d_tetap_pendamping']);
            $d_tetap->set_d_tetap_dsu($val['d_tetap_dsu']);

            $data[] = $d_tetap;
        }

        return $data;
    }

    /*
     * mendapatkan Data Tetap sesuai id
     * @param objek Data Tetap
     * return objek Data Tetap
     */

    public function get_d_tetap_by_id($d_tetap = DataTetap) {
        if (is_null($d_tetap->get_kd_d_tetap())) {
            return false;
        }
        $sql = "SELECT * FROM " . $this->_table . " WHERE kd_d_tetap=" . $d_tetap->get_kd_d_tetap();
//        var_dump($sql);
        $result = $this->db->select($sql);
        foreach ($result as $val) {
            $this->set_kd_d_tetap($val['kd_d_tetap']);
            $this->set_kd_r_unit($val['kd_r_unit']);
            $this->set_d_tetap_fo1($val['d_tetap_fo1']);
            $this->set_d_tetap_trainer($val['d_tetap_trainer']);
            $this->set_d_tetap_pendamping($val['d_tetap_pendamping']);
            $this->set_d_tetap_dsu($val['d_tetap_dsu']);
        }
        return $this;
    }

    /*
     * tambah data Data Tetap
     * param array data array key=>value, nama kolom=>data
     */

    public function add_d_tetap() {
        $data = array(
            'kd_r_unit' => $this->get_kd_r_unit(),
            'd_tetap_fo1' => $this->get_d_tetap_fo1(),
            'd_tetap_trainer' => $this->get_d_tetap_trainer(),
            'd_tetap_pendamping' => $this->get_d_tetap_pendamping(),
            'd_tetap_dsu' => $this->get_d_tetap_dsu()
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

    public function update_d_tetap() {
        $data = array(
            'kd_r_unit' => $this->get_kd_r_unit(),
            'd_tetap_fo1' => $this->get_d_tetap_fo1(),
            'd_tetap_trainer' => $this->get_d_tetap_trainer(),
            'd_tetap_pendamping' => $this->get_d_tetap_pendamping(),
            'd_tetap_dsu' => $this->get_d_tetap_dsu()
        );
        $this->validate();
        if (!$this->get_valid()) {
            return false;
        }
        if (!is_array($data)) {
            return false;
        }
        $where = ' kd_d_tetap=' . $this->get_kd_d_tetap();
        return $this->db->update($this->_table, $data, $where);
    }

    /*
     * hapus Data Tetap, id harus di set terlebih dahulu
     */

    public function delete_d_tetap() {
        $where = ' kd_d_tetap=' . $this->get_kd_d_tetap();
        $this->db->delete($this->_table, $where);
    }

    public function validate() {
        if ($this->get_kd_r_unit() == "") {
            $this->_error .= "Unit belum dipilih!</br>";
            $this->_valid = FALSE;
        }
        if ($this->get_d_tetap_fo1() == "") {
            $this->_error .= "FO 1 belum diinput!<?br>";
            $this->_valid = FALSE;
        }
        if ($this->get_d_tetap_trainer() == "") {
            $this->_error .= "Trainer belum diinput!</br>";
            $this->_valid = FALSE;
        }
        if ($this->get_d_tetap_pendamping() == "") {
            $this->_error .= "Pendamping belum diinput!</br>";
            $this->_valid = FALSE;
        }
        if ($this->get_d_tetap_dsu() == "") {
            $this->_error .= "Duta SPAN belum diinput!</br>";
            $this->_valid = FALSE;
        }
    }

    /*
     * setter
     */

    public function set_kd_d_tetap($kode) {
        $this->_kd_d_tetap = $kode;
    }

    public function set_kd_r_unit($unit) {
        $this->_kd_r_unit = $unit;
    }

    public function set_d_tetap_fo1($fo1) {
        $this->_d_tetap_fo1 = $fo1;
    }

    public function set_d_tetap_trainer($trainer) {
        $this->_d_tetap_trainer = $trainer;
    }

    public function set_d_tetap_pendamping($pendamping) {
        $this->_d_tetap_pendamping = $pendamping;
    }

    public function set_d_tetap_dsu($dsu) {
        $this->_d_tetap_dsu = $dsu;
    }

    public function set_table($table) {
        $this->_table = $table;
    }

    /*
     * getter
     */

    public function get_kd_d_tetap($where = null) {
        if (!is_null($where)) {
            $sql = "SELECT kd_d_tetap FROM '" . $this->_table . "' WHERE '" . $where . "'";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $this->set_kd_d_tetap($val['kd_d_tetap']);
            }
        }
        return $this->_kd_d_tetap;
    }

    public function get_kd_r_unit() {
        return $this->_kd_r_unit;
    }

    public function get_d_tetap_fo1() {
        return $this->_d_tetap_fo1;
    }

    public function get_d_tetap_trainer() {
        return $this->_d_tetap_trainer;
    }

    public function get_d_tetap_pendamping() {
        return $this->_d_tetap_pendamping;
    }

    public function get_d_tetap_dsu() {
        return $this->_d_tetap_dsu;
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