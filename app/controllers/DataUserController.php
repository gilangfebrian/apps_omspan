<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataUserController extends BaseController {
    /*
     * Konstruktor
     */

    public function __construct($registry) {
        parent::__construct($registry);
    }

    /*
     * Index
     */

    public function index() {
        $this->view->render('admin/dataUser');
    }

    /*
     * tambah data user
     */

    public function addDataUser($id = null) {
        $d_user = new DataUser($this->registry);
        if (isset($_POST['add_d_user'])) {
            $kd_r_jenis = $_POST['kd_r_jenis'];
            $kd_r_unit = $_POST['kd_r_unit'];
            $nama_user = $_POST['nama_user'];
            $pass_user = $_POST['pass_user'];
            $d_user->set_kd_r_jenis($kd_r_jenis);
            $d_user->set_kd_r_unit($kd_r_unit);
            $d_user->set_nama_user($nama_user);
            $d_user->set_pass_user($pass_user);
            if (!$d_user->add_d_user()) {
                $this->view->d_rekam = $d_user;
                $this->view->error = $d_user->get_error();
            }
        }
        if (!is_null($id)) {
            $d_user->set_kd_d_user($id);
            $this->view->d_ubah = $d_user->get_d_user_by_id($d_user);
        }
        $this->view->data = $d_user->get_d_user();
        $this->view->render('admin/dataUser');
    }

    /*
     * ubah data user
     */

    public function updDataUser() {
        $d_user = new DataUser($this->registry);
        if (isset($_POST['upd_d_user'])) {
            $kd_d_user = $_POST['kd_d_user'];
            $kd_r_jenis = $_POST['kd_r_jenis'];
            $kd_r_unit = $_POST['kd_r_unit'];
            $nama_user = $_POST['nama_user'];
            $pass_user = $_POST['pass_user'];
            $d_user->set_kd_d_user($kd_d_user);
            $d_user->set_kd_r_jenis($kd_r_jenis);
            $d_user->set_kd_r_unit($kd_r_unit);
            $d_user->set_nama_user($nama_user);
            $d_user->set_pass_user($pass_user);
            if (!$d_user->update_d_user()) {
                $this->view->d_ubah = $d_user;
                $this->view->error = $d_user->get_error();
                $this->view->data = $d_user->get_d_user();
                $this->view->render('admin/dataUser');
            } else {
                header('location:' . URL . 'dataUser/addDataUser');
            }
        }
    }

    /*
     * hapus data user
     * @param kd_d_user
     */

    public function delDataUser($id) {
        $d_user = new DataUser($this->registry);
        if (is_null($id)) {
            throw new Exception;
            echo "id belum dimasukkan!";
            return;
        }
        $d_user->set_kd_d_user($id);
        $d_user->delete_d_user();
        header('location:' . URL . 'dataUser/addDatauser');
    }

    /*
     * Destruktor
     */

    public function __destruct() {
        
    }

}
