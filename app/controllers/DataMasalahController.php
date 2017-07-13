<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataMasalahController extends BaseController {
    /*
     * Konstruktor
     */

    public function __construct($registry) {
        parent::__construct($registry);
        //$this->kd_d_user = Session::get('kd_d_user');
    }

    /*
     * Index
     */

    public function index() {
        $this->view->render('admin/dataMasalah/addDataMasalah');
    }

    /*
     * tambah data Masalah
     */

    public function addDataMasalah($id = null) {
        $d_mslh = new DataMasalah($this->registry);
        //$d_bobot = new DataBobot($this->registry);
        //$this->view->bobot = $d_bobot->get_bobot_pkn_lvl2();
        if (isset($_POST['add_d_mslh'])) {
            $kd_d_user = Session::get('id_user');
            $tgl_mslh = $_POST['tgl_mslh'];
            $masalah = $_POST['masalah'];

            $d_mslh->set_kd_d_user($kd_d_user);
            $d_mslh->set_tgl_mslh($tgl_mslh);
            $d_mslh->set_masalah($masalah);

            if (!$d_mslh->add_d_mslh()) {
                $this->view->d_rekam = $d_mslh;
                $this->view->error = $d_mslh->get_error();
            }
        }
        //var_dump($d_tetap->get_d_tetap());
        if (!is_null($id)) {
            $d_mslh->set_kd_d_mslh($id);
            $this->view->d_ubah = $d_mslh->get_d_mslh_by_id($d_mslh);
        }


        //$this->view->dasbor = $d_mslh->get_d_pkn_per_tgl();
        $this->view->data = $d_mslh->get_d_mslh();
        $this->view->render('admin/dataMasalah');
    }

    /*
     * ubah data PKN
     * 
     */

    public function updDataMasalah() {
        $d_mslh = new DataMasalah($this->registry);
        //$d_bobot = new DataBobot($this->registry);
        //$this->view->bobot = $d_bobot->get_bobot_pkn_lvl2();
        if (isset($_POST['upd_d_mslh'])) {
            $kd_d_mslh = $_POST['kd_d_mslh'];
            $kd_d_user = Session::get('id_user');
            $tgl_mslh = $_POST['tgl_mslh'];
            $masalah = $_POST['masalah'];

            $d_mslh->set_kd_d_mslh($kd_d_mslh);
            $d_mslh->set_kd_d_user($kd_d_user);
            $d_mslh->set_tgl_mslh($tgl_mslh);
            $d_mslh->set_masalah($masalah);

            if (!$d_mslh->update_d_mslh()) {
                $this->view->d_ubah = $d_mslh;
                //$this->view->dasbor = $d_pkn->get_d_pkn_per_tgl();
                $this->view->error = $d_mslh->get_error();
                $this->view->data = $d_mslh->get_d_mslh();
                $this->view->render('admin/dataMasalah');
            } else {
                //$this->view->dasbor = $d_pkn->get_d_pkn_per_tgl();
                header('location:' . URL . 'dataMasalah/addDataMasalah');
            }
        }
    }

    /*
     * hapus data PKN
     * @param kd_d_pkn
     */

    public function delDataMasalah($id) {
        $d_mslh = new DataMasalah($this->registry);
        if (is_null($id)) {
            throw new Exception;
            echo "id belum dimasukkan!";
            return;
        }
        $d_mslh->set_kd_d_mslh($id);
        $d_mslh->delete_d_mslh();
        header('location:' . URL . 'dataMasalah/addDataMasalah');
    }

    /*
     * DESTRUKTOR
     */

    public function __destruct() {
        
    }

}