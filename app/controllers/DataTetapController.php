<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataTetapController extends BaseController {
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
        $this->view->render('admin/dataTetap');
    }

    /*
     * tambah data tetap
     */

    public function addDataTetap($id = null) {
        $d_tetap = new DataTetap($this->registry);
        if (isset($_POST['add_d_tetap'])) {
            $kd_r_unit = $_POST['kd_r_unit'];
            $d_tetap_fo1 = $_POST['d_tetap_fo1'];
            $d_tetap_trainer = $_POST['d_tetap_trainer'];
            $d_tetap_pendamping = $_POST['d_tetap_pendamping'];
            $d_tetap_dsu = $_POST['d_tetap_dsu'];

            $d_tetap->set_kd_r_unit($kd_r_unit);
            $d_tetap->set_d_tetap_fo1($d_tetap_fo1);
            $d_tetap->set_d_tetap_trainer($d_tetap_trainer);
            $d_tetap->set_d_tetap_pendamping($d_tetap_pendamping);
            $d_tetap->set_d_tetap_dsu($d_tetap_dsu);

            if (!$d_tetap->add_d_tetap()) {
                //$this->view->d_rekam = $d_tetap;
                $this->view->error = $d_tetap->get_error();
            }
        }
        if (!is_null($id)) {
            $d_tetap->set_kd_d_tetap($id);
            $this->view->d_ubah = $d_tetap->get_d_tetap_by_id($d_tetap);
        }

        $this->view->data = $d_tetap->get_d_tetap();
        $this->view->render('admin/dataTetap');
    }

    /*
     * ubah data tetap
     */

    public function updDataTetap() {
        $d_tetap = new DataTetap($this->registry);
        if (isset($_POST['upd_d_tetap'])) {
            $kd_d_tetap = $_POST['kd_d_tetap'];
            $kd_r_unit = $_POST['kd_r_unit'];
            $d_tetap_fo1 = $_POST['d_tetap_fo1'];
            $d_tetap__trainer = $_POST['d_tetap_trainer'];
            $d_tetap_pendamping = $_POST['d_tetap_pendamping'];
            $d_tetap_dsu = $_POST['d_tetap_dsu'];

            $d_tetap->set_kd_d_tetap($kd_d_tetap);
            $d_tetap->set_kd_r_unit($kd_r_unit);
            $d_tetap->set_d_tetap_fo1($d_tetap_fo1);
            $d_tetap->set_d_tetap_trainer($d_tetap__trainer);
            $d_tetap->set_d_tetap_pendamping($d_tetap_pendamping);
            $d_tetap->set_d_tetap_dsu($d_tetap_dsu);

            if (!$d_tetap->update_d_tetap()) {
                $this->view->d_ubah = $d_tetap;
                $this->view->error = $d_tetap->get_error();
                $this->view->data = $d_tetap->get_d_tetap();
                $this->view->render('admin/dataTetap');
            } else {
                header('location:' . URL . 'dataTetap/addDataTetap');
            }
        }
    }

    /*
     * hapus data tetap
     * @param kd_d_tetap
     */

    public function delDataTetap($id) {
        $d_tetap = new DataTetap($this->registry);
        if (is_null($id)) {
            throw new Exception;
            echo "id belum dimasukkan!";
            return;
        }
        $d_tetap->set_kd_d_tetap($id);
        $d_tetap->delete_d_tetap();
        header('location:' . URL . 'dataTetap/addDataTetap');
    }

    /*
     * DESTRUKTOR
     */

    public function __destruct() {
        
    }

}
