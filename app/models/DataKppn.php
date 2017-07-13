<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataKppn {

    private $db;
    private $_kd_d_kppn;
    private $_kd_d_user;
    private $_kd_d_tgl;
    private $_kd_d_pc;
    private $_kd_d_pc_mas;
    private $_kd_d_laser;
    private $_kd_d_laser_mas;
    private $_kd_d_dot;
    private $_kd_d_dot_mas;
    private $_kd_d_supplier;
    private $_kd_d_supplier_mas;
    private $_kd_d_kontrak;
    private $_kd_d_kontrak_mas;
    private $_kd_d_saldo;
    private $_kd_d_saldo_mas;
    private $_kd_d_retur;
    private $_kd_d_retur_mas;
    private $_kd_d_konversi;
    private $_kd_d_konversi_mas;
    private $_kd_d_supplier_tim;
    private $_kd_d_supplier_tim_mas;
    private $_kd_d_kontrak_tim;
    private $_kd_d_kontrak_tim_mas;
    
    private $_kd_d_saldo1;
    private $_kd_d_saldo_mas1;
    private $_kd_d_retur1;
    private $_kd_d_retur_mas1;
    private $_kd_d_konversi1;
    private $_kd_d_konversi_mas1;
    
    private $_kd_d_saldo2;
    private $_kd_d_saldo_mas2;
    private $_kd_d_retur2;
    private $_kd_d_retur_mas2;
    private $_kd_d_konversi2;
    private $_kd_d_konversi_mas2;
    private $_kd_d_supplier_tim2;
    private $_kd_d_supplier_tim_mas2;
    private $_kd_d_kontrak_tim2;
    private $_kd_d_kontrak_tim_mas2;
    
    private $_kd_d_user_id;
    private $_kd_d_user_id_mas;
    private $_kd_d_input_by;
    private $_kd_d_waktu_isi;
    private $_error;
    private $_valid = TRUE;
    private $_table = 'd_kppn1';
	private $_table1 = 'd_kppn1';
    private $_table2 = 'd_train';
	
	private $_kd_satker;
	private $_nm_satker;
	private $_user;
	private $_pass;
	private $_unit;
	
	private $_persiapan;
	private $_migrasi;
	private $_finalisasi;
	private $_konversi;
	private $_posting;
	private $_nercob;
	private $_keterangan;
	private $_upload;	
    
    private $_kd_d_room;
    private $_kd_d_room_mas;
    private $_kd_d_room_tgl;
    private $_kd_d_jar;
    private $_kd_d_jar_mas;
    private $_kd_d_jar_tgl;
    private $_kd_d_con;
    private $_kd_d_con_mas;
    private $_kd_d_con_tgl;
    private $_kd_d_meet;
    private $_kd_d_meet_mas;
    private $_kd_d_meet_file;
    private $_kd_d_crew;
    private $_kd_d_crew_mas;
    private $_kd_d_crew_file;
    private $_kd_d_und;
    private $_kd_d_und_mas;
    private $_kd_d_und_file;
    private $_kd_d_book;
    private $_kd_d_book_mas;
    private $_kd_d_book_tgl;
    private $_kd_d_absen;
    private $_kd_d_absen_mas;
    private $_kd_d_absen_file;
    private $_kd_d_absen_crew;
    private $_kd_d_absen_crew_mas;
    private $_kd_d_absen_crew_file;
    private $_kd_d_st;
    private $_kd_d_st_mas;
    private $_kd_d_st_file;
    private $_kd_d_doc;
    private $_kd_d_doc_mas;
    private $_kd_d_doc_file;
    private $_kd_d_eval;
    private $_kd_d_eval_mas;
    private $_kd_d_eval_tgl;
    private $_kd_d_trans;
    private $_kd_d_trans_mas;
    private $_kd_d_trans_tgl;
    private $_kd_d_satker;
    private $_kd_user;
    private $_kd_pass;
    private $_kd_dept;
    private $_kd_unit;
	
	
    public $registry;

    /*
     * konstruktor
     */

    public function __construct($registry = Registry) {
        $this->db = $registry->db;
        $this->registry = $registry;
    }

    /*
     * mengambil Data Semua KPPN, 
     * bisa difilter untuk 1 kppn dengan mengisi parameter @kppn
     */

    public function get_d_kppn_all($filter, $limit = null, $batas = null) {
        $sql = "select a.*, c.nama_org from " . $this->_table . " a
				inner join (
				select kd_d_user, max(kd_d_kppn)as maxid from " . $this->_table . "
				group by kd_d_user
				) b on a.kd_d_user = b.kd_d_user and a.kd_d_kppn = b.maxid
				left join d_user c on a.kd_d_user = c.kd_d_user
				where c.aktif = 1 and " . $filter . "
				order by a.kd_d_user ASC";
		//var_dump($sql);
        $result = $this->db->select($sql);

        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['nama_org']);
            $d_kppn->set_kd_d_user($val['kd_d_user']);
            $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

            $d_kppn->set_kd_d_room($val['kd_d_room']);
            $d_kppn->set_kd_d_room_mas($val['kd_d_room_mas']);
            $d_kppn->set_kd_d_room_tgl($val['kd_d_room_tgl']);
            $d_kppn->set_kd_d_jar($val['kd_d_jar']);
            $d_kppn->set_kd_d_jar_mas($val['kd_d_jar_mas']);
            $d_kppn->set_kd_d_jar_tgl($val['kd_d_jar_tgl']);
            $d_kppn->set_kd_d_con($val['kd_d_con']);
            $d_kppn->set_kd_d_con_mas($val['kd_d_con_mas']);
            $d_kppn->set_kd_d_con_tgl($val['kd_d_con_tgl']);
            $d_kppn->set_kd_d_meet($val['kd_d_meet']);
            $d_kppn->set_kd_d_meet_mas($val['kd_d_meet_mas']);
            $d_kppn->set_kd_d_meet_file($val['kd_d_meet_file']);
            $d_kppn->set_kd_d_crew($val['kd_d_crew']);
            $d_kppn->set_kd_d_crew_mas($val['kd_d_crew_mas']);
            $d_kppn->set_kd_d_crew_file($val['kd_d_crew_file']);
            $d_kppn->set_kd_d_und($val['kd_d_und']);
            $d_kppn->set_kd_d_und_mas($val['kd_d_und_mas']);
            $d_kppn->set_kd_d_und_file($val['kd_d_und_file']);
            $d_kppn->set_kd_d_book($val['kd_d_book']);
            $d_kppn->set_kd_d_book_mas($val['kd_d_book_mas']);
            $d_kppn->set_kd_d_book_tgl($val['kd_d_book_tgl']);
            $d_kppn->set_kd_d_absen($val['kd_d_absen']);
            $d_kppn->set_kd_d_absen_mas($val['kd_d_absen_mas']);
            $d_kppn->set_kd_d_absen_file($val['kd_d_absen_file']);
            $d_kppn->set_kd_d_absen_crew($val['kd_d_absen_crew']);
            $d_kppn->set_kd_d_absen_crew_mas($val['kd_d_absen_crew_mas']);
            $d_kppn->set_kd_d_absen_crew_file($val['kd_d_absen_crew_file']);
            $d_kppn->set_kd_d_st($val['kd_d_st']);
            $d_kppn->set_kd_d_st_mas($val['kd_d_st_mas']);
            $d_kppn->set_kd_d_st_file($val['kd_d_st_file']);
            $d_kppn->set_kd_d_doc($val['kd_d_doc']);
            $d_kppn->set_kd_d_doc_mas($val['kd_d_doc_mas']);
            $d_kppn->set_kd_d_doc_file($val['kd_d_doc_file']);
            $d_kppn->set_kd_d_eval($val['kd_d_eval']);
            $d_kppn->set_kd_d_eval_mas($val['kd_d_eval_mas']);
            $d_kppn->set_kd_d_eval_tgl($val['kd_d_eval_tgl']);
            $d_kppn->set_kd_d_trans($val['kd_d_trans']);
            $d_kppn->set_kd_d_trans_mas($val['kd_d_trans_mas']);
            $d_kppn->set_kd_d_trans_tgl($val['kd_d_trans_tgl']);

            $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);
            $d_kppn->set_kd_d_waktu_isi($val['kd_d_waktu_isi']);

            $data[] = $d_kppn;
        }
        return $data;
    }
    
    public function get_d_user_all() {
        $user = Session::get('id_user');
        $sql = "select * from " . $this->_table2 . "
				where id_kppn = " . $user . "
				";
		//var_dump($sql);
        $result = $this->db->select($sql);

        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
        
            $d_kppn->set_kd_d_satker($val['satker']);
            $d_kppn->set_kd_user($val['user']);
            $d_kppn->set_kd_pass($val['pass']);
            $d_kppn->set_kd_dept($val['kd_dept']);
            $d_kppn->set_kd_unit($val['kd_unit']);
            

            $data[] = $d_kppn;
        }
        return $data;
    }

    public function get_nama_kanwil($id = null) {
        $sql = "SELECT nama_user FROM d_user WHERE kd_d_user = " . $id;
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_user($val['nama_user']);
            $data[] = $d_kppn;
        }
        return $data;
    }

    public function get_nama_kanwil_all($id = null) {
        $sql = "SELECT  SUBSTRING(e.nama_user, 20, 15) nama_user, sum(d.total) jml_sukses, count(e.nama_user) jml_kppn
                from d_user e
                LEFT JOIN
                    (SELECT (IF((
                    `kd_d_pc`+
                    `kd_d_laser`+
                    `kd_d_dot`+
                    `kd_d_supplier`+
                    `kd_d_kontrak`+
                    `kd_d_saldo`+
                    `kd_d_retur`+
                    `kd_d_konversi`+
                    `kd_d_supplier_tim`+
                    `kd_d_kontrak_tim`+
                    `kd_d_user_id`
                    ) = 11, 1, 0)) total, f.kd_d_user FROM
                                    (select a.* , c.nama_user
                            from d_kppn a
                            inner join (
                            select `kd_d_user`, max(`kd_d_waktu_isi`) as MaxDate
                            from d_kppn
                            group by `kd_d_user`
                            ) b on a.`kd_d_user` = b.`kd_d_user` and a.`kd_d_waktu_isi` = b.MaxDate
                            left join d_user c on a.kd_d_user = c.kd_d_user
                            ORDER BY a.`kd_d_user` ASC)f) d 
                on e.kd_d_user = d.kd_d_user
                where e.kd_r_jenis > 1
                group by e.kd_r_unit";
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_user($val['nama_user']);
            $d_kppn->set_kd_d_pc($val['jml_sukses']);
            $d_kppn->set_kd_d_laser($val['jml_kppn']);
            $data[] = $d_kppn;
        }
        return $data;
    }

    public function get_d_kppn_per_kanwil($kanwil = null, $limit = null, $batas = null) {
        $sql_kanwil = "SELECT kd_d_user FROM d_user WHERE kd_r_unit = " . $kanwil;
        $data_kanwil = $this->db->select($sql_kanwil);
        $data = array();
        foreach ($data_kanwil as $dt) {
            $sql = "SELECT a.*, b.nama_user FROM d_kppn a 
                    left join d_user b 
                    on a.kd_d_user = b.kd_d_user
                    WHERE a.kd_d_user = " . $dt['kd_d_user'] . " 
                    order by a.kd_d_waktu_isi 
                    desc LIMIT 1";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $d_kppn = new $this($this->registry);
                $d_kppn->set_kd_d_kppn($val['nama_user']);
                $d_kppn->set_kd_d_user($val['kd_d_user']);
                $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

                $d_kppn->set_kd_d_pc($val['kd_d_pc']);
                $d_kppn->set_kd_d_pc_mas($val['kd_d_pc_mas']);
                $d_kppn->set_kd_d_laser($val['kd_d_laser']);
                $d_kppn->set_kd_d_laser_mas($val['kd_d_laser_mas']);
                $d_kppn->set_kd_d_dot($val['kd_d_dot']);
                $d_kppn->set_kd_d_dot_mas($val['kd_d_dot_mas']);

                $d_kppn->set_kd_d_supplier($val['kd_d_supplier']);
                $d_kppn->set_kd_d_supplier_mas($val['kd_d_supplier_mas']);
                $d_kppn->set_kd_d_kontrak($val['kd_d_kontrak']);
                $d_kppn->set_kd_d_kontrak_mas($val['kd_d_kontrak_mas']);
                $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
                $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
                $d_kppn->set_kd_d_retur($val['kd_d_retur']);
                $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
                $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
                $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

                $d_kppn->set_kd_d_supplier_tim($val['kd_d_supplier_tim']);
                $d_kppn->set_kd_d_supplier_tim_mas($val['kd_d_supplier_tim_mas']);
                $d_kppn->set_kd_d_kontrak_tim($val['kd_d_kontrak_tim']);
                $d_kppn->set_kd_d_kontrak_tim_mas($val['kd_d_kontrak_tim_mas']);
                $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
                $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);

                $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);
                $d_kppn->set_kd_d_waktu_isi($val['kd_d_waktu_isi']);

                $data[] = $d_kppn;
            }
        }

        return $data;
    }

    public function get_d_kppn_per_all($limit = null, $batas = null) {
        $sql_kanwil = "SELECT kd_d_user, nama_user FROM d_user WHERE kd_r_jenis = 3";
        $data_kanwil = $this->db->select($sql_kanwil);
        $data = array();
        foreach ($data_kanwil as $dt) {
            $sql = "SELECT a.*, b.nama_user FROM d_kppn1 a 
                    left join d_user b 
                    on a.kd_d_user = b.kd_d_user
                    WHERE a.kd_d_user = " . $dt['kd_d_user'] . " 
                    order by a.kd_d_waktu_isi 
                    desc LIMIT 1";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $d_kppn = new $this($this->registry);
                $d_kppn->set_kd_d_kppn($val['nama_user']);
                $d_kppn->set_kd_d_user($val['kd_d_user']);
                $d_kppn->set_kd_d_tgl(date("d/m/y", strtotime($val['kd_d_tgl'])));

                $d_kppn->set_kd_d_pc($val['kd_d_pc']);
                $d_kppn->set_kd_d_pc_mas($val['kd_d_pc_mas']);
                $d_kppn->set_kd_d_laser($val['kd_d_laser']);
                $d_kppn->set_kd_d_laser_mas($val['kd_d_laser_mas']);
                $d_kppn->set_kd_d_dot($val['kd_d_dot']);
                $d_kppn->set_kd_d_dot_mas($val['kd_d_dot_mas']);

                $d_kppn->set_kd_d_supplier($val['kd_d_supplier']);
                $d_kppn->set_kd_d_supplier_mas($val['kd_d_supplier_mas']);
                $d_kppn->set_kd_d_kontrak($val['kd_d_kontrak']);
                $d_kppn->set_kd_d_kontrak_mas($val['kd_d_kontrak_mas']);
                $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
                $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
                $d_kppn->set_kd_d_retur($val['kd_d_retur']);
                $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
                $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
                $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

                $d_kppn->set_kd_d_supplier_tim($val['kd_d_supplier_tim']);
                $d_kppn->set_kd_d_supplier_tim_mas($val['kd_d_supplier_tim_mas']);
                $d_kppn->set_kd_d_kontrak_tim($val['kd_d_kontrak_tim']);
                $d_kppn->set_kd_d_kontrak_tim_mas($val['kd_d_kontrak_tim_mas']);
                $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
                $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);

                $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);
                $d_kppn->set_kd_d_waktu_isi($val['kd_d_waktu_isi']);

                $data[] = $d_kppn;
            }
        }

        return $data;
    }
	
	public function get_user_sakti() {
        $sql = "SELECT a.KODE_SATKER kd_satker, b.nama_org nm_satker, a.USER user, a.PASS pass, b.kd_r_unit unit, b.aktif aktif FROM d_usersakti a INNER JOIN d_user b WHERE a.KODE_SATKER = b.nama_user and a.aktif=1";
        $result = $this->db->select($sql);
        $data = array();
        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_satker($val['kd_satker']);
			$d_kppn->set_nm_satker($val['nm_satker']);
			$d_kppn->set_unit($val['unit']);
			$d_kppn->set_user($val['user']);
			$d_kppn->set_pass($val['pass']);
            $data[] = $d_kppn;
        }
        return $data;
    }

    /*
     * mengambil Data KPPN, 
     * bisa difilter untuk 1 kppn dengan mengisi parameter @kppn
     */

    public function get_d_kppn($id = null, $limit = null, $batas = null) {
        if (!$id) {
            $sql = "SELECT * FROM " . $this->_table . " WHERE kd_d_user = " . Session::get('id_user') . " order by kd_d_waktu_isi desc LIMIT 1";
        } else {
            $sql = "SELECT * FROM " . $this->_table . " WHERE kd_d_user = " . $id . " order by kd_d_waktu_isi desc LIMIT 1";
        }

        $result = $this->db->select($sql);

        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['kd_d_kppn']);
            $d_kppn->set_kd_d_user($val['kd_d_user']);
            $d_kppn->set_kd_d_tgl($val['kd_d_tgl']);

            $d_kppn->set_kd_d_pc($val['kd_d_pc']);
            $d_kppn->set_kd_d_pc_mas($val['kd_d_pc_mas']);
            $d_kppn->set_kd_d_laser($val['kd_d_laser']);
            $d_kppn->set_kd_d_laser_mas($val['kd_d_laser_mas']);
            $d_kppn->set_kd_d_dot($val['kd_d_dot']);
            $d_kppn->set_kd_d_dot_mas($val['kd_d_dot_mas']);

            $d_kppn->set_kd_d_supplier($val['kd_d_supplier']);
            $d_kppn->set_kd_d_supplier_mas($val['kd_d_supplier_mas']);
            $d_kppn->set_kd_d_kontrak($val['kd_d_kontrak']);
            $d_kppn->set_kd_d_kontrak_mas($val['kd_d_kontrak_mas']);
            $d_kppn->set_kd_d_saldo($val['kd_d_saldo']);
            $d_kppn->set_kd_d_saldo_mas($val['kd_d_saldo_mas']);
            $d_kppn->set_kd_d_retur($val['kd_d_retur']);
            $d_kppn->set_kd_d_retur_mas($val['kd_d_retur_mas']);
            $d_kppn->set_kd_d_konversi($val['kd_d_konversi']);
            $d_kppn->set_kd_d_konversi_mas($val['kd_d_konversi_mas']);

            $d_kppn->set_kd_d_supplier_tim($val['kd_d_supplier_tim']);
            $d_kppn->set_kd_d_supplier_tim_mas($val['kd_d_supplier_tim_mas']);
            $d_kppn->set_kd_d_kontrak_tim($val['kd_d_kontrak_tim']);
            $d_kppn->set_kd_d_kontrak_tim_mas($val['kd_d_kontrak_tim_mas']);
            $d_kppn->set_kd_d_user_id($val['kd_d_user_id']);
            $d_kppn->set_kd_d_user_id_mas($val['kd_d_user_id_mas']);
            
            $d_kppn->set_kd_d_saldo1($val['kd_d_saldo1']);
            $d_kppn->set_kd_d_saldo_mas1($val['kd_d_saldo_mas1']);
            $d_kppn->set_kd_d_retur1($val['kd_d_retur1']);
            $d_kppn->set_kd_d_retur_mas1($val['kd_d_retur_mas1']);
            $d_kppn->set_kd_d_konversi1($val['kd_d_konversi1']);
            $d_kppn->set_kd_d_konversi_mas1($val['kd_d_konversi_mas1']);
            
            $d_kppn->set_kd_d_saldo2($val['kd_d_saldo2']);
            $d_kppn->set_kd_d_saldo_mas2($val['kd_d_saldo_mas2']);
            $d_kppn->set_kd_d_retur2($val['kd_d_retur2']);
            $d_kppn->set_kd_d_retur_mas2($val['kd_d_retur_mas2']);
            $d_kppn->set_kd_d_konversi2($val['kd_d_konversi2']);
            $d_kppn->set_kd_d_konversi_mas2($val['kd_d_konversi_mas2']);
            $d_kppn->set_kd_d_supplier_tim2($val['kd_d_supplier_tim2']);
            $d_kppn->set_kd_d_supplier_tim_mas2($val['kd_d_supplier_tim_mas2']);
            $d_kppn->set_kd_d_kontrak_tim2($val['kd_d_kontrak_tim2']);
            $d_kppn->set_kd_d_kontrak_tim_mas2($val['kd_d_kontrak_tim_mas2']);

            $d_kppn->set_kd_d_input_by($val['kd_d_input_by']);
            $d_kppn->set_kd_d_waktu_isi($val['kd_d_waktu_isi']);

            $data[] = $d_kppn;
        }

        return $data;
    }
	
	public function get_aset($id = null) {
        if (!$id) {
            $sql = "SELECT * FROM d_kppn1 WHERE kd_d_user = " . Session::get('id_user') . " order by kd_d_kppn desc LIMIT 1";
        } else {
            $sql = "SELECT * FROM d_kppn1 WHERE kd_d_user = " . $id . " order by kd_d_kppn desc LIMIT 1";
        }
		//var_dump($sql);

        $result = $this->db->select($sql);
		
        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['kd_d_kppn']);
            $d_kppn->set_kd_d_user($val['kd_d_user']);
            $d_kppn->set_kd_d_tgl($val['kd_d_tgl']);

            $d_kppn->set_persiapan($val['persiapan']);
            $d_kppn->set_migrasi($val['migrasi']);
            $d_kppn->set_finalisasi($val['finalisasi']);
            $d_kppn->set_konversi($val['konversi']);
            $d_kppn->set_posting($val['posting']);
            $d_kppn->set_nercob($val['nercob']);
            $d_kppn->set_upload($val['upload']);
            $d_kppn->set_keterangan($val['keterangan']);
            $d_kppn->set_kd_d_room($val['kd_d_room']);
            $d_kppn->set_kd_d_room_mas($val['kd_d_room_mas']);
            $d_kppn->set_kd_d_room_tgl($val['kd_d_room_tgl']);
            $d_kppn->set_kd_d_jar($val['kd_d_jar']);
            $d_kppn->set_kd_d_jar_mas($val['kd_d_jar_mas']);
            $d_kppn->set_kd_d_jar_tgl($val['kd_d_jar_tgl']);
            $d_kppn->set_kd_d_con($val['kd_d_con']);
            $d_kppn->set_kd_d_con_mas($val['kd_d_con_mas']);
            $d_kppn->set_kd_d_con_tgl($val['kd_d_con_tgl']);
            $d_kppn->set_kd_d_meet($val['kd_d_meet']);
            $d_kppn->set_kd_d_meet_mas($val['kd_d_meet_mas']);
            $d_kppn->set_kd_d_meet_file($val['kd_d_meet_file']);
            $d_kppn->set_kd_d_crew($val['kd_d_crew']);
            $d_kppn->set_kd_d_crew_mas($val['kd_d_crew_mas']);
            $d_kppn->set_kd_d_crew_file($val['kd_d_crew_file']);
            $d_kppn->set_kd_d_und($val['kd_d_und']);
            $d_kppn->set_kd_d_und_mas($val['kd_d_und_mas']);
            $d_kppn->set_kd_d_und_file($val['kd_d_und_file']);
            $d_kppn->set_kd_d_book($val['kd_d_book']);
            $d_kppn->set_kd_d_book_mas($val['kd_d_book_mas']);
            $d_kppn->set_kd_d_book_tgl($val['kd_d_book_tgl']);
            $d_kppn->set_kd_d_absen($val['kd_d_absen']);
            $d_kppn->set_kd_d_absen_mas($val['kd_d_absen_mas']);
            $d_kppn->set_kd_d_absen_file($val['kd_d_absen_file']);
            $d_kppn->set_kd_d_absen_crew($val['kd_d_absen_crew']);
            $d_kppn->set_kd_d_absen_crew_mas($val['kd_d_absen_crew_mas']);
            $d_kppn->set_kd_d_absen_crew_file($val['kd_d_absen_crew_file']);
            $d_kppn->set_kd_d_st($val['kd_d_st']);
            $d_kppn->set_kd_d_st_mas($val['kd_d_st_mas']);
            $d_kppn->set_kd_d_st_file($val['kd_d_st_file']);
            $d_kppn->set_kd_d_doc($val['kd_d_doc']);
            $d_kppn->set_kd_d_doc_mas($val['kd_d_doc_mas']);
            $d_kppn->set_kd_d_doc_file($val['kd_d_doc_file']);
            $d_kppn->set_kd_d_eval($val['kd_d_eval']);
            $d_kppn->set_kd_d_eval_mas($val['kd_d_eval_mas']);
            $d_kppn->set_kd_d_eval_tgl($val['kd_d_eval_tgl']);
            $d_kppn->set_kd_d_trans($val['kd_d_trans']);
            $d_kppn->set_kd_d_trans_mas($val['kd_d_trans_mas']);
            $d_kppn->set_kd_d_trans_tgl($val['kd_d_trans_tgl']);
            

            $data[] = $d_kppn;
        }

        return $data;
    }
	
	public function get_aset_all() {
		$sql = "select a.*, c.nama_org from d_aset a
				inner join (
				select kd_d_user, max(kd_d_kppn)as maxid from d_aset
				group by kd_d_user
				) b on a.kd_d_user = b.kd_d_user and a.kd_d_kppn = b.maxid
				left join d_user c on a.kd_d_user = c.kd_d_user
				where c.aktif = 1 and a.kd_d_user between 1000 and 16015 
				order by a.kd_d_user ASC";
		$result = $this->db->select($sql);
		//var_dump($sql);
        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['nama_org']);
			$d_kppn->set_kd_d_tgl($val['kd_d_tgl']);
			$d_kppn->set_persiapan($val['persiapan']);
			$d_kppn->set_migrasi($val['migrasi']);
			$d_kppn->set_finalisasi($val['finalisasi']);
			$d_kppn->set_konversi($val['konversi']);
			$d_kppn->set_posting($val['posting']);
			$d_kppn->set_nercob($val['nercob']);
			$d_kppn->set_upload($val['upload']);
			$d_kppn->set_keterangan($val['keterangan']);
			$data[] = $d_kppn;
        }

        return $data;
	}

    /*
     * tambah data Data KPPN
     * param array data array key=>value, nama kolom=>data
     */

    public function add_d_kppn() {
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_pc' => $this->get_kd_d_pc(),
            'kd_d_pc_mas' => $this->get_kd_d_pc_mas(),
            'kd_d_laser' => $this->get_kd_d_laser(),
            'kd_d_laser_mas' => $this->get_kd_d_laser_mas(),
            'kd_d_dot' => $this->get_kd_d_dot(),
            'kd_d_dot_mas' => $this->get_kd_d_dot_mas(),
            'kd_d_supplier' => $this->get_kd_d_supplier(),
            'kd_d_supplier_mas' => $this->get_kd_d_supplier_mas(),
            'kd_d_kontrak' => $this->get_kd_d_kontrak(),
            'kd_d_kontrak_mas' => $this->get_kd_d_kontrak_mas(),
            'kd_d_saldo' => $this->get_kd_d_saldo(),
            'kd_d_saldo_mas' => $this->get_kd_d_saldo_mas(),
            'kd_d_retur' => $this->get_kd_d_retur(),
            'kd_d_retur_mas' => $this->get_kd_d_retur_mas(),
            'kd_d_konversi' => $this->get_kd_d_konversi(),
            'kd_d_konversi_mas' => $this->get_kd_d_konversi_mas(),
            'kd_d_supplier_tim' => $this->get_kd_d_supplier_tim(),
            'kd_d_supplier_tim_mas' => $this->get_kd_d_supplier_tim_mas(),
            'kd_d_kontrak_tim' => $this->get_kd_d_kontrak_tim(),
            'kd_d_kontrak_tim_mas' => $this->get_kd_d_kontrak_tim_mas(),
            
            'kd_d_saldo1' => $this->get_kd_d_saldo1(),
            'kd_d_saldo_mas1' => $this->get_kd_d_saldo_mas1(),
            'kd_d_retur1' => $this->get_kd_d_retur1(),
            'kd_d_retur_mas1' => $this->get_kd_d_retur_mas1(),
            'kd_d_konversi1' => $this->get_kd_d_konversi1(),
            'kd_d_konversi_mas1' => $this->get_kd_d_konversi_mas1(),
            
            'kd_d_saldo2' => $this->get_kd_d_saldo2(),
            'kd_d_saldo_mas2' => $this->get_kd_d_saldo_mas2(),
            'kd_d_retur2' => $this->get_kd_d_retur2(),
            'kd_d_retur_mas2' => $this->get_kd_d_retur_mas2(),
            'kd_d_konversi2' => $this->get_kd_d_konversi2(),
            'kd_d_konversi_mas2' => $this->get_kd_d_konversi_mas2(),
            'kd_d_supplier_tim2' => $this->get_kd_d_supplier_tim2(),
            'kd_d_supplier_tim_mas2' => $this->get_kd_d_supplier_tim_mas2(),
            'kd_d_kontrak_tim2' => $this->get_kd_d_kontrak_tim2(),
            'kd_d_kontrak_tim_mas2' => $this->get_kd_d_kontrak_tim_mas2(),
            
            'kd_d_user_id' => $this->get_kd_d_user_id(),
            'kd_d_user_id_mas' => $this->get_kd_d_user_id_mas(),
            'kd_d_input_by' => $this->get_kd_d_input_by(),
            'kd_d_waktu_isi' => $this->get_kd_d_waktu_isi()
        );
        
        //var_dump($data);

        if (!is_array($data)) {
            return false;
        }
        return $this->db->insert($this->_table, $data);
    }
	
	public function add_aset() {
		//echo 'sukses';
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_room' => $this->get_kd_d_room(),
            'kd_d_room_mas' => $this->get_kd_d_room_mas(),
            'kd_d_room_tgl' => $this->get_kd_d_room_tgl(),
            'kd_d_jar' => $this->get_kd_d_jar(),
            'kd_d_jar_mas' => $this->get_kd_d_jar_mas(),
            'kd_d_jar_tgl' => $this->get_kd_d_jar_tgl(),
            'kd_d_con' => $this->get_kd_d_con(),
            'kd_d_con_mas' => $this->get_kd_d_con_mas(),
            'kd_d_con_tgl' => $this->get_kd_d_con_tgl(),
            'kd_d_meet' => $this->get_kd_d_meet(),
            'kd_d_meet_mas' => $this->get_kd_d_meet_mas(),
            'kd_d_meet_file' => $this->get_kd_d_meet_file(),
            'kd_d_crew' => $this->get_kd_d_crew(),
            'kd_d_crew_mas' => $this->get_kd_d_crew_mas(),
            'kd_d_crew_file' => $this->get_kd_d_crew_file(),
            'kd_d_und' => $this->get_kd_d_meet(),
            'kd_d_und_mas' => $this->get_kd_d_und_mas(),
            'kd_d_und_file' => $this->get_kd_d_und_file(),
            'kd_d_book' => $this->get_kd_d_book(),
            'kd_d_book_mas' => $this->get_kd_d_book_mas(),
            'kd_d_book_tgl' => $this->get_kd_d_book_tgl(),
            'kd_d_absen' => $this->get_kd_d_absen(),
            'kd_d_absen_mas' => $this->get_kd_d_absen_mas(),
            'kd_d_absen_file' => $this->get_kd_d_absen_files(),
            'kd_d_absen_crew' => $this->get_kd_d_absen_crew(),
            'kd_d_absen_crew_mas' => $this->get_kd_d_absen_crew_mas(),
            'kd_d_absen_crew_file' => $this->get_kd_d_absen_crew_file(),
            'kd_d_st' => $this->get_kd_d_st(),
            'kd_d_st_mas' => $this->get_kd_d_st_mas(),
            'kd_d_st_file' => $this->get_kd_d_st_file(),
            'kd_d_doc' => $this->get_kd_d_doc(),
            'kd_d_doc_mas' => $this->get_kd_d_doc_mas(),
            'kd_d_doc_file' => $this->get_kd_d_doc_file(),
            'kd_d_eval' => $this->get_kd_d_eval(),
            'kd_d_eval_mas' => $this->get_kd_d_eval_mas(),
            'kd_d_eval_tgl' => $this->get_kd_d_eval_tgl(),
            'kd_d_trans' => $this->get_kd_d_trans(),
            'kd_d_trans_mas' => $this->get_kd_d_trans_mas(),
            'kd_d_trans_tgl' => $this->get_kd_d_trans_tgl(),
        );
        
        //var_dump($data);
        
        if (!is_array($data)) {
            return false;
        }
        return $this->db->insert($this->_table, $data);

    }

    /*
     * update Data KPPN, id harus di set terlebih dahulu
     * param data array
     */

    public function update_d_kppn() {
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_pc' => $this->get_kd_d_pc(),
            'kd_d_pc_mas' => $this->get_kd_d_pc_mas(),
            'kd_d_laser' => $this->get_kd_d_laser(),
            'kd_d_laser_mas' => $this->get_kd_d_laser_mas(),
            'kd_d_dot' => $this->get_kd_d_dot(),
            'kd_d_dot_mas' => $this->get_kd_d_dot_mas(),
            'kd_d_supplier' => $this->get_kd_d_supplier(),
            'kd_d_supplier_mas' => $this->get_kd_d_supplier_mas(),
            'kd_d_kontrak' => $this->get_kd_d_kontrak(),
            'kd_d_kontrak_mas' => $this->get_kd_d_kontrak_mas(),
            'kd_d_saldo' => $this->get_kd_d_saldo(),
            'kd_d_saldo_mas' => $this->get_kd_d_saldo_mas(),
            'kd_d_retur' => $this->get_kd_d_retur(),
            'kd_d_retur_mas' => $this->get_kd_d_retur_mas(),
            'kd_d_konversi' => $this->get_kd_d_konversi(),
            'kd_d_konversi_mas' => $this->get_kd_d_konversi_mas(),
            'kd_d_supplier_tim' => $this->get_kd_d_supplier_tim(),
            'kd_d_supplier_tim_mas' => $this->get_kd_d_supplier_tim_mas(),
            'kd_d_kontrak_tim' => $this->get_kd_d_kontrak_tim(),
            'kd_d_kontrak_tim_mas' => $this->get_kd_d_kontrak_tim_mas(),
            
            'kd_d_saldo1' => $this->get_kd_d_saldo1(),
            'kd_d_saldo_mas1' => $this->get_kd_d_saldo_mas1(),
            'kd_d_retur1' => $this->get_kd_d_retur1(),
            'kd_d_retur_mas1' => $this->get_kd_d_retur_mas1(),
            'kd_d_konversi1' => $this->get_kd_d_konversi1(),
            'kd_d_konversi_mas1' => $this->get_kd_d_konversi_mas1(),
            
            'kd_d_saldo2' => $this->get_kd_d_saldo2(),
            'kd_d_saldo_mas2' => $this->get_kd_d_saldo_mas2(),
            'kd_d_retur2' => $this->get_kd_d_retur2(),
            'kd_d_retur_mas2' => $this->get_kd_d_retur_mas2(),
            'kd_d_konversi2' => $this->get_kd_d_konversi2(),
            'kd_d_konversi_mas2' => $this->get_kd_d_konversi_mas2(),
            'kd_d_supplier_tim2' => $this->get_kd_d_supplier_tim2(),
            'kd_d_supplier_tim_mas2' => $this->get_kd_d_supplier_tim_mas2(),
            'kd_d_kontrak_tim2' => $this->get_kd_d_kontrak_tim2(),
            'kd_d_kontrak_tim_mas2' => $this->get_kd_d_kontrak_tim_mas2(),
            
            'kd_d_user_id' => $this->get_kd_d_kontrak_tim_mas(),
            'kd_d_user_id_mas' => $this->get_kd_d_user_id_mas_mas(),
            'kd_d_input_by' => $this->get_kd_d_input_by(),
            'kd_d_waktu_isi' => $this->get_kd_d_waktu_isi()
        );
        $this->validate();
        if (!$this->get_valid()) {
            return false;
        }
        if (!is_array($data)) {
            return false;
        }
        $where = ' kd_d_kppn=' . $this->get_kd_d_kppn();
        return $this->db->update($this->_table, $data, $where);
    }
    
    
    
    
    public function get_dak($id = null) {
        if (!$id) {
            $sql = "SELECT * FROM d_kppn1 WHERE kd_d_user = " . Session::get('id_user') . " order by kd_d_kppn desc LIMIT 1";
        } else {
            $sql = "SELECT * FROM d_kppn1 WHERE kd_d_user = " . $id . " order by kd_d_kppn desc LIMIT 1";
        }
		//var_dump($sql);

        $result = $this->db->select($sql);
		
        $data = array();

        foreach ($result as $val) {
            $d_kppn = new $this($this->registry);
            $d_kppn->set_kd_d_kppn($val['kd_d_kppn']);
            $d_kppn->set_kd_d_user($val['kd_d_user']);
            $d_kppn->set_kd_d_tgl($val['kd_d_tgl']);

            $d_kppn->set_persiapan($val['persiapan']);
            $d_kppn->set_migrasi($val['migrasi']);
            $d_kppn->set_finalisasi($val['finalisasi']);
            $d_kppn->set_konversi($val['konversi']);
            $d_kppn->set_posting($val['posting']);
            $d_kppn->set_nercob($val['nercob']);
            $d_kppn->set_upload($val['upload']);
            $d_kppn->set_keterangan($val['keterangan']);
            $d_kppn->set_kd_d_room($val['kd_d_room']);
            $d_kppn->set_kd_d_room_mas($val['kd_d_room_mas']);
            $d_kppn->set_kd_d_room_tgl($val['kd_d_room_tgl']);
            $d_kppn->set_kd_d_jar($val['kd_d_jar']);
            $d_kppn->set_kd_d_jar_mas($val['kd_d_jar_mas']);
            $d_kppn->set_kd_d_jar_tgl($val['kd_d_jar_tgl']);
            $d_kppn->set_kd_d_con($val['kd_d_con']);
            $d_kppn->set_kd_d_con_mas($val['kd_d_con_mas']);
            $d_kppn->set_kd_d_con_tgl($val['kd_d_con_tgl']);
            $d_kppn->set_kd_d_meet($val['kd_d_meet']);
            $d_kppn->set_kd_d_meet_mas($val['kd_d_meet_mas']);
            $d_kppn->set_kd_d_meet_file($val['kd_d_meet_file']);
            $d_kppn->set_kd_d_crew($val['kd_d_crew']);
            $d_kppn->set_kd_d_crew_mas($val['kd_d_crew_mas']);
            $d_kppn->set_kd_d_crew_file($val['kd_d_crew_file']);
            $d_kppn->set_kd_d_und($val['kd_d_und']);
            $d_kppn->set_kd_d_und_mas($val['kd_d_und_mas']);
            $d_kppn->set_kd_d_und_file($val['kd_d_und_file']);
            $d_kppn->set_kd_d_book($val['kd_d_book']);
            $d_kppn->set_kd_d_book_mas($val['kd_d_book_mas']);
            $d_kppn->set_kd_d_book_tgl($val['kd_d_book_tgl']);
            $d_kppn->set_kd_d_absen($val['kd_d_absen']);
            $d_kppn->set_kd_d_absen_mas($val['kd_d_absen_mas']);
            $d_kppn->set_kd_d_absen_file($val['kd_d_absen_file']);
            $d_kppn->set_kd_d_absen_crew($val['kd_d_absen_crew']);
            $d_kppn->set_kd_d_absen_crew_mas($val['kd_d_absen_crew_mas']);
            $d_kppn->set_kd_d_absen_crew_file($val['kd_d_absen_crew_file']);
            $d_kppn->set_kd_d_st($val['kd_d_st']);
            $d_kppn->set_kd_d_st_mas($val['kd_d_st_mas']);
            $d_kppn->set_kd_d_st_file($val['kd_d_st_file']);
            $d_kppn->set_kd_d_doc($val['kd_d_doc']);
            $d_kppn->set_kd_d_doc_mas($val['kd_d_doc_mas']);
            $d_kppn->set_kd_d_doc_file($val['kd_d_doc_file']);
            $d_kppn->set_kd_d_eval($val['kd_d_eval']);
            $d_kppn->set_kd_d_eval_mas($val['kd_d_eval_mas']);
            $d_kppn->set_kd_d_eval_tgl($val['kd_d_eval_tgl']);
            $d_kppn->set_kd_d_trans($val['kd_d_trans']);
            $d_kppn->set_kd_d_trans_mas($val['kd_d_trans_mas']);
            $d_kppn->set_kd_d_trans_tgl($val['kd_d_trans_tgl']);
            

            $data[] = $d_kppn;
        }

        return $data;
    }
    
    public function add_dak() {
		//echo 'sukses';
        $data = array(
            'kd_d_user' => $this->get_kd_d_user(),
            'kd_d_tgl' => $this->get_kd_d_tgl(),
            'kd_d_room' => $this->get_kd_d_room(),
            'kd_d_room_mas' => $this->get_kd_d_room_mas(),
            'kd_d_room_tgl' => $this->get_kd_d_room_tgl(),
            'kd_d_jar' => $this->get_kd_d_jar(),
            'kd_d_jar_mas' => $this->get_kd_d_jar_mas(),
            'kd_d_jar_tgl' => $this->get_kd_d_jar_tgl(),
            'kd_d_con' => $this->get_kd_d_con(),
            'kd_d_con_mas' => $this->get_kd_d_con_mas(),
            'kd_d_con_tgl' => $this->get_kd_d_con_tgl(),
            'kd_d_meet' => $this->get_kd_d_meet(),
            'kd_d_meet_mas' => $this->get_kd_d_meet_mas(),
            'kd_d_meet_file' => $this->get_kd_d_meet_file(),
            'kd_d_crew' => $this->get_kd_d_crew(),
            'kd_d_crew_mas' => $this->get_kd_d_crew_mas(),
            'kd_d_crew_file' => $this->get_kd_d_crew_file(),
            'kd_d_und' => $this->get_kd_d_meet(),
            'kd_d_und_mas' => $this->get_kd_d_und_mas(),
            'kd_d_und_file' => $this->get_kd_d_und_file(),
            'kd_d_book' => $this->get_kd_d_book(),
            'kd_d_book_mas' => $this->get_kd_d_book_mas(),
            'kd_d_book_tgl' => $this->get_kd_d_book_tgl(),
            'kd_d_absen' => $this->get_kd_d_absen(),
            'kd_d_absen_mas' => $this->get_kd_d_absen_mas(),
            'kd_d_absen_file' => $this->get_kd_d_absen_file(),
            'kd_d_absen_crew' => $this->get_kd_d_absen_crew(),
            'kd_d_absen_crew_mas' => $this->get_kd_d_absen_crew_mas(),
            'kd_d_absen_crew_file' => $this->get_kd_d_absen_crew_file(),
            'kd_d_st' => $this->get_kd_d_st(),
            'kd_d_st_mas' => $this->get_kd_d_st_mas(),
            'kd_d_st_file' => $this->get_kd_d_st_file(),
            'kd_d_doc' => $this->get_kd_d_doc(),
            'kd_d_doc_mas' => $this->get_kd_d_doc_mas(),
            'kd_d_doc_file' => $this->get_kd_d_doc_file(),
            'kd_d_eval' => $this->get_kd_d_eval(),
            'kd_d_eval_mas' => $this->get_kd_d_eval_mas(),
            'kd_d_eval_tgl' => $this->get_kd_d_eval_tgl(),
            'kd_d_trans' => $this->get_kd_d_trans(),
            'kd_d_trans_mas' => $this->get_kd_d_trans_mas(),
            'kd_d_trans_tgl' => $this->get_kd_d_trans_tgl(),
        );
        
        //var_dump($data);
        
        if (!is_array($data)) {
            return false;
        }
        return $this->db->insert($this->_table, $data);

    }
    

    /*
     * hapus Data KPPN, id harus di set terlebih dahulu
     */

    public function delete_d_kppn() {
        $where = ' kd_d_kppn=' . $this->get_kd_d_kppn();
        $this->db->delete($this->_table, $where);
    }

    /*
     * validasi server, untukmengecek pengisian
     */

    public function validate() {
        if ($this->get_kd_d_tgl() == "") {
            $this->_error .= "Tangal belum diinput!</br>";
            $this->_valid = FALSE;
        }
    }

    /*
     * getter
     */

    public function get_kd_d_kppn($where = null) {
        if (!is_null($where)) {
            $sql = "SELECT kd_d_kppn FROM '" . $this->_table . "' WHERE '" . $where . "'";
            $result = $this->db->select($sql);
            foreach ($result as $val) {
                $this->set_kd_d_kppn($val['kd_d_kppn']);
            }
        }
        return $this->_kd_d_kppn;
    }

    public function get_kd_d_user() {
        return $this->_kd_d_user;
    }

    public function get_kd_d_tgl() {
        return $this->_kd_d_tgl;
    }

    public function get_kd_d_pc() {
        return $this->_kd_d_pc;
    }

    public function get_kd_d_pc_mas() {
        return $this->_kd_d_pc_mas;
    }

    public function get_kd_d_laser() {
        return $this->_kd_d_laser;
    }

    public function get_kd_d_laser_mas() {
        return $this->_kd_d_laser_mas;
    }

    public function get_kd_d_dot() {
        return $this->_kd_d_dot;
    }

    public function get_kd_d_dot_mas() {
        return $this->_kd_d_dot_mas;
    }

    public function get_kd_d_supplier() {
        return $this->_kd_d_supplier;
    }

    public function get_kd_d_supplier_mas() {
        return $this->_kd_d_supplier_mas;
    }

    public function get_kd_d_kontrak() {
        return $this->_kd_d_kontrak;
    }

    public function get_kd_d_kontrak_mas() {
        return $this->_kd_d_kontrak_mas;
    }

    public function get_kd_d_saldo() {
        return $this->_kd_d_saldo;
    }

    public function get_kd_d_saldo_mas() {
        return $this->_kd_d_saldo_mas;
    }

    public function get_kd_d_retur() {
        return $this->_kd_d_retur;
    }

    public function get_kd_d_retur_mas() {
        return $this->_kd_d_retur_mas;
    }

    public function get_kd_d_konversi() {
        return $this->_kd_d_konversi;
    }

    public function get_kd_d_konversi_mas() {
        return $this->_kd_d_konversi_mas;
    }

    public function get_kd_d_supplier_tim() {
        return $this->_kd_d_supplier_tim;
    }

    public function get_kd_d_supplier_tim_mas() {
        return $this->_kd_d_supplier_tim_mas;
    }

    public function get_kd_d_kontrak_tim() {
        return $this->_kd_d_kontrak_tim;
    }

    public function get_kd_d_kontrak_tim_mas() {
        return $this->_kd_d_kontrak_tim_mas;
    }
    
    

    public function get_kd_d_saldo1() {
        return $this->_kd_d_saldo1;
    }

    public function get_kd_d_saldo_mas1() {
        return $this->_kd_d_saldo_mas1;
    }

    public function get_kd_d_retur1() {
        return $this->_kd_d_retur1;
    }

    public function get_kd_d_retur_mas1() {
        return $this->_kd_d_retur_mas1;
    }

    public function get_kd_d_konversi1() {
        return $this->_kd_d_konversi1;
    }

    public function get_kd_d_konversi_mas1() {
        return $this->_kd_d_konversi_mas1;
    }
    
    

    public function get_kd_d_saldo2() {
        return $this->_kd_d_saldo2;
    }

    public function get_kd_d_saldo_mas2() {
        return $this->_kd_d_saldo_mas2;
    }

    public function get_kd_d_retur2() {
        return $this->_kd_d_retur2;
    }

    public function get_kd_d_retur_mas2() {
        return $this->_kd_d_retur_mas2;
    }

    public function get_kd_d_konversi2() {
        return $this->_kd_d_konversi2;
    }

    public function get_kd_d_konversi_mas2() {
        return $this->_kd_d_konversi_mas2;
    }

    public function get_kd_d_supplier_tim2() {
        return $this->_kd_d_supplier_tim2;
    }

    public function get_kd_d_supplier_tim_mas2() {
        return $this->_kd_d_supplier_tim_mas2;
    }

    public function get_kd_d_kontrak_tim2() {
        return $this->_kd_d_kontrak_tim2;
    }

    public function get_kd_d_kontrak_tim_mas2() {
        return $this->_kd_d_kontrak_tim_mas2;
    }
    

    public function get_kd_d_user_id() {
        return $this->_kd_d_user_id;
    }

    public function get_kd_d_user_id_mas() {
        return $this->_kd_d_user_id_mas;
    }

    public function get_kd_d_input_by() {
        return $this->_kd_d_input_by;
    }

    public function get_error() {
        return $this->_error;
    }

    public function get_valid() {
        return $this->_valid;
    }

    public function get_kd_d_waktu_isi() {
        return $this->_kd_d_waktu_isi;
    }
	
	public function get_kd_satker() {
        return $this->_kd_satker;
    }
	
	public function get_nm_satker() {
        return $this->_nm_satker;
    }
	
	public function get_pass() {
        return $this->_pass;
    }
	
	public function get_user() {
        return $this->_user;
    }
	
	public function get_unit() {
        return $this->_unit;
    }
	
	public function get_persiapan() {
        return $this->_persiapan;
    }
	
	public function get_migrasi() {
        return $this->_migrasi;
    }
	
	public function get_finalisasi() {
        return $this->_finalisasi;
    }
	
	public function get_konversi() {
        return $this->_konversi;
    }
	
	public function get_posting() {
        return $this->_posting;
    }
	
	public function get_nercob() {
        return $this->_nercob;
    }
	
	public function get_keterangan() {
        return $this->_keterangan;
    }
	
	public function get_upload() {
        return $this->_upload;
    }
    
    public function get_kd_d_room() {
        return $this->_kd_d_room;
    }

    public function get_kd_d_room_mas() {
        return $this->_kd_d_room_mas;
    }
    
    public function get_kd_d_room_tgl() {
        return $this->_kd_d_room_tgl;
    }
    
    public function get_kd_d_jar() {
        return $this->_kd_d_jar;
    }

    public function get_kd_d_jar_mas() {
        return $this->_kd_d_jar_mas;
    }
    
    public function get_kd_d_jar_tgl() {
        return $this->_kd_d_jar_tgl;
    }
    
    public function get_kd_d_con() {
        return $this->_kd_d_con;
    }

    public function get_kd_d_con_mas() {
        return $this->_kd_d_con_mas;
    }
    
    public function get_kd_d_con_tgl() {
        return $this->_kd_d_con_tgl;
    }
    
    public function get_kd_d_meet() {
        return $this->_kd_d_meet;
    }

    public function get_kd_d_meet_mas() {
        return $this->_kd_d_meet_mas;
    }
    
    public function get_kd_d_meet_file() {
        return $this->_kd_d_meet_file;
    }
    
    public function get_kd_d_crew() {
        return $this->_kd_d_crew;
    }

    public function get_kd_d_crew_mas() {
        return $this->_kd_d_crew_mas;
    }
    
    public function get_kd_d_crew_file() {
        return $this->_kd_d_crew_file;
    }
    
    public function get_kd_d_und() {
        return $this->_kd_d_und;
    }

    public function get_kd_d_und_mas() {
        return $this->_kd_d_und_mas;
    }
    
    public function get_kd_d_und_file() {
        return $this->_kd_d_und_file;
    }
    
    public function get_kd_d_book() {
        return $this->_kd_d_book;
    }

    public function get_kd_d_book_mas() {
        return $this->_kd_d_book_mas;
    }
    
    public function get_kd_d_book_tgl() {
        return $this->_kd_d_book_tgl;
    }
    
    public function get_kd_d_absen_crew() {
        return $this->_kd_d_absen_crew;
    }

    public function get_kd_d_absen_crew_mas() {
        return $this->_kd_d_absen_crew_mas;
    }
    
    public function get_kd_d_absen_crew_file() {
        return $this->_kd_d_absen_crew_file;
    }
    
    public function get_kd_d_absen() {
        return $this->_kd_d_absen;
    }

    public function get_kd_d_absen_mas() {
        return $this->_kd_d_absen_mas;
    }
    
    public function get_kd_d_absen_file() {
        return $this->_kd_d_absen_file;
    }
    
    public function get_kd_d_st() {
        return $this->_kd_d_st;
    }

    public function get_kd_d_st_mas() {
        return $this->_kd_d_st_mas;
    }
    
    public function get_kd_d_st_file() {
        return $this->_kd_d_st_file;
    }
    
    public function get_kd_d_doc() {
        return $this->_kd_d_doc;
    }

    public function get_kd_d_doc_mas() {
        return $this->_kd_d_doc_mas;
    }
    
    public function get_kd_d_doc_file() {
        return $this->_kd_d_doc_file;
    }
    
    public function get_kd_d_eval() {
        return $this->_kd_d_eval;
    }

    public function get_kd_d_eval_mas() {
        return $this->_kd_d_eval_mas;
    }
    
    public function get_kd_d_eval_tgl() {
        return $this->_kd_d_eval_tgl;
    }
    
    public function get_kd_d_trans() {
        return $this->_kd_d_trans;
    }

    public function get_kd_d_trans_mas() {
        return $this->_kd_d_trans_mas;
    }
    
    public function get_kd_d_trans_tgl() {
        return $this->_kd_d_trans_tgl;
    }
    
    public function get_kd_d_satker() {
        return $this->_kd_satker;
    }
    
    public function get_kd_user() {
        return $this->_kd_user;
    }
    
    public function get_kd_pass() {
        return $this->_kd_pass;
    }
    
    public function get_kd_dept() {
        return $this->_kd_dept;
    }
    
    public function get_kd_unit() {
        return $this->_kd_unit;
    }
    

    /*
     * setter
     */

    public function set_kd_d_kppn($_kd_d_kppn) {
        $this->_kd_d_kppn = $_kd_d_kppn;
    }

    public function set_kd_d_user($_kd_d_user) {
        $this->_kd_d_user = $_kd_d_user;
    }

    public function set_kd_d_tgl($_kd_d_tgl) {
        $this->_kd_d_tgl = $_kd_d_tgl;
    }

    public function set_kd_d_pc($_kd_d_pc) {
        $this->_kd_d_pc = $_kd_d_pc;
    }

    public function set_kd_d_pc_mas($_kd_d_pc_mas) {
        $this->_kd_d_pc_mas = $_kd_d_pc_mas;
    }

    public function set_kd_d_laser($_kd_d_laser) {
        $this->_kd_d_laser = $_kd_d_laser;
    }

    public function set_kd_d_laser_mas($_kd_d_laser_mas) {
        $this->_kd_d_laser_mas = $_kd_d_laser_mas;
    }

    public function set_kd_d_dot($_kd_d_dot) {
        $this->_kd_d_dot = $_kd_d_dot;
    }

    public function set_kd_d_dot_mas($_kd_d_dot_mas) {
        $this->_kd_d_dot_mas = $_kd_d_dot_mas;
    }

    public function set_kd_d_supplier($_kd_d_supplier) {
        $this->_kd_d_supplier = $_kd_d_supplier;
    }

    public function set_kd_d_supplier_mas($_kd_d_supplier_mas) {
        $this->_kd_d_supplier_mas = $_kd_d_supplier_mas;
    }

    public function set_kd_d_kontrak($_kd_d_kontrak) {
        $this->_kd_d_kontrak = $_kd_d_kontrak;
    }

    public function set_kd_d_kontrak_mas($_kd_d_kontrak_mas) {
        $this->_kd_d_kontrak_mas = $_kd_d_kontrak_mas;
    }

    public function set_kd_d_saldo($_kd_d_saldo) {
        $this->_kd_d_saldo = $_kd_d_saldo;
    }

    public function set_kd_d_saldo_mas($_kd_d_saldo_mas) {
        $this->_kd_d_saldo_mas = $_kd_d_saldo_mas;
    }

    public function set_kd_d_retur($_kd_d_retur) {
        $this->_kd_d_retur = $_kd_d_retur;
    }

    public function set_kd_d_retur_mas($_kd_d_retur_mas) {
        $this->_kd_d_retur_mas = $_kd_d_retur_mas;
    }

    public function set_kd_d_konversi($_kd_d_konversi) {
        $this->_kd_d_konversi = $_kd_d_konversi;
    }

    public function set_kd_d_konversi_mas($_kd_d_konversi_mas) {
        $this->_kd_d_konversi_mas = $_kd_d_konversi_mas;
    }

    public function set_kd_d_supplier_tim($_kd_d_supplier_tim) {
        $this->_kd_d_supplier_tim = $_kd_d_supplier_tim;
    }

    public function set_kd_d_supplier_tim_mas($_kd_d_supplier_tim_mas) {
        $this->_kd_d_supplier_tim_mas = $_kd_d_supplier_tim_mas;
    }

    public function set_kd_d_kontrak_tim($_kd_d_kontrak_tim) {
        $this->_kd_d_kontrak_tim = $_kd_d_kontrak_tim;
    }

    public function set_kd_d_kontrak_tim_mas($_kd_d_kontrak_tim_mas) {
        $this->_kd_d_kontrak_tim_mas = $_kd_d_kontrak_tim_mas;
    }
    

    public function set_kd_d_saldo1($_kd_d_saldo1) {
        $this->_kd_d_saldo1 = $_kd_d_saldo1;
    }

    public function set_kd_d_saldo_mas1($_kd_d_saldo_mas1) {
        $this->_kd_d_saldo_mas1 = $_kd_d_saldo_mas1;
    }

    public function set_kd_d_retur1($_kd_d_retur1) {
        $this->_kd_d_retur1 = $_kd_d_retur1;
    }

    public function set_kd_d_retur_mas1($_kd_d_retur_mas1) {
        $this->_kd_d_retur_mas1 = $_kd_d_retur_mas1;
    }

    public function set_kd_d_konversi1($_kd_d_konversi1) {
        $this->_kd_d_konversi1 = $_kd_d_konversi1;
    }

    public function set_kd_d_konversi_mas1($_kd_d_konversi_mas1) {
        $this->_kd_d_konversi_mas1 = $_kd_d_konversi_mas1;
    }
    

    public function set_kd_d_saldo2($_kd_d_saldo2) {
        $this->_kd_d_saldo2 = $_kd_d_saldo2;
    }

    public function set_kd_d_saldo_mas2($_kd_d_saldo_mas2) {
        $this->_kd_d_saldo_mas2 = $_kd_d_saldo_mas2;
    }

    public function set_kd_d_retur2($_kd_d_retur2) {
        $this->_kd_d_retur2 = $_kd_d_retur2;
    }

    public function set_kd_d_retur_mas2($_kd_d_retur_mas2) {
        $this->_kd_d_retur_mas2 = $_kd_d_retur_mas2;
    }

    public function set_kd_d_konversi2($_kd_d_konversi2) {
        $this->_kd_d_konversi2 = $_kd_d_konversi2;
    }

    public function set_kd_d_konversi_mas2($_kd_d_konversi_mas2) {
        $this->_kd_d_konversi_mas2 = $_kd_d_konversi_mas2;
    }

    public function set_kd_d_supplier_tim2($_kd_d_supplier_tim2) {
        $this->_kd_d_supplier_tim2 = $_kd_d_supplier_tim2;
    }

    public function set_kd_d_supplier_tim_mas2($_kd_d_supplier_tim_mas2) {
        $this->_kd_d_supplier_tim_mas2 = $_kd_d_supplier_tim_mas2;
    }

    public function set_kd_d_kontrak_tim2($_kd_d_kontrak_tim2) {
        $this->_kd_d_kontrak_tim2 = $_kd_d_kontrak_tim2;
    }

    public function set_kd_d_kontrak_tim_mas2($_kd_d_kontrak_tim_mas2) {
        $this->_kd_d_kontrak_tim_mas2 = $_kd_d_kontrak_tim_mas2;
    }

    public function set_kd_d_user_id($_kd_d_user_id) {
        $this->_kd_d_user_id = $_kd_d_user_id;
    }

    public function set_kd_d_user_id_mas($_kd_d_user_id_mas) {
        $this->_kd_d_user_id_mas = $_kd_d_user_id_mas;
    }

    public function set_kd_d_input_by($_kd_d_input_by) {
        $this->_kd_d_input_by = $_kd_d_input_by;
    }

    public function set_error($_error) {
        $this->_error = $_error;
    }

    public function set_valid($_valid) {
        $this->_valid = $_valid;
    }

    public function set_kd_d_waktu_isi($_kd_d_waktu_isi) {
        $this->_kd_d_waktu_isi = $_kd_d_waktu_isi;
    }
	
	public function set_kd_satker($_kd_satker) {
        $this->_kd_satker = $_kd_satker;
    }
	
	public function set_nm_satker($_nm_satker) {
        $this->_nm_satker = $_nm_satker;
    }
	
	public function set_user($_user) {
        $this->_user = $_user;
    }
	
	public function set_pass($_pass) {
        $this->_pass = $_pass;
    }
	
	public function set_unit($_unit) {
        $this->_unit = $_unit;
    }
	
	public function set_persiapan($_persiapan) {
        $this->_persiapan = $_persiapan;
    }
	
	public function set_migrasi($_migrasi) {
        $this->_migrasi = $_migrasi;
    }
	
	public function set_finalisasi($_finalisasi) {
        $this->_finalisasi = $_finalisasi;
    }
	
	public function set_konversi($_konversi) {
        $this->_konversi = $_konversi;
    }
	
	public function set_posting($_posting) {
        $this->_posting = $_posting;
    }
	
	public function set_nercob($_nercob) {
        $this->_nercob = $_nercob;
    }
	
	public function set_keterangan($_keterangan) {
        $this->_keterangan = $_keterangan;
    }
	
	public function set_upload($_upload) {
        $this->_upload = $_upload;
    }
    
    public function set_kd_d_room($_kd_d_room) {
        return $this->_kd_d_room = $_kd_d_room;
    }

    public function set_kd_d_room_mas($_kd_d_room_mas) {
        return $this->_kd_d_room_mas = $_kd_d_room_mas;
    }
    
    public function set_kd_d_room_tgl($_kd_d_room_tgl) {
        return $this->_kd_d_room_tgl = $_kd_d_room_tgl;
    }
    
    public function set_kd_d_jar($_kd_d_jar) {
        return $this->_kd_d_jar = $_kd_d_jar;
    }

    public function set_kd_d_jar_mas($_kd_d_jar_mas) {
        return $this->_kd_d_jar_mas = $_kd_d_jar_mas;
    }
    
    public function set_kd_d_jar_tgl($_kd_d_jar_tgl) {
        return $this->_kd_d_jar_tgl = $_kd_d_jar_tgl;
    }
    
    public function set_kd_d_con($_kd_d_con) {
        return $this->_kd_d_con = $_kd_d_con;
    }

    public function set_kd_d_con_mas($_kd_d_con_mas) {
        return $this->_kd_d_con_mas = $_kd_d_con_mas;
    }
    
    public function set_kd_d_con_tgl($_kd_d_con_tgl) {
        return $this->_kd_d_con_tgl = $_kd_d_con_tgl;
    }
    
    public function set_kd_d_meet($_kd_d_meet) {
        return $this->_kd_d_meet = $_kd_d_meet;
    }

    public function set_kd_d_meet_mas($_kd_d_meet_mas) {
        return $this->_kd_d_meet_mas = $_kd_d_meet_mas;
    }
    
    public function set_kd_d_meet_file($_kd_d_meet_file) {
        return $this->_kd_d_meet_file = $_kd_d_meet_file;
    }
    
    public function set_kd_d_crew($_kd_d_crew) {
        return $this->_kd_d_crew = $_kd_d_crew;
    }

    public function set_kd_d_crew_mas($_kd_d_crew_mas) {
        return $this->_kd_d_crew_mas = $_kd_d_crew_mas;
    }
    
    public function set_kd_d_crew_file($_kd_d_crew_file) {
        return $this->_kd_d_crew_file = $_kd_d_crew_file;
    }
    
    public function set_kd_d_und($_kd_d_und) {
        return $this->_kd_d_und = $_kd_d_und;
    }

    public function set_kd_d_und_mas($_kd_d_und_mas) {
        return $this->_kd_d_und_mas = $_kd_d_und_mas;
    }
    
    public function set_kd_d_und_file($_kd_d_und_file) {
        return $this->_kd_d_und_file = $_kd_d_und_file;
    }
    
    public function set_kd_d_book($_kd_d_book) {
        return $this->_kd_d_book = $_kd_d_book;
    }

    public function set_kd_d_book_mas($_kd_d_book_mas) {
        return $this->_kd_d_book_mas = $_kd_d_book_mas;
    }
    public function set_kd_d_book_tgl($_kd_d_book_tgl) {
        return $this->_kd_d_book_tgl = $_kd_d_book_tgl;
    }
    
    public function set_kd_d_absen_crew($_kd_d_absen_crew) {
        return $this->_kd_d_absen_crew = $_kd_d_absen_crew;
    }

    public function set_kd_d_absen_crew_mas($_kd_d_absen_crew_mas) {
        return $this->_kd_d_absen_crew_mas = $_kd_d_absen_crew_mas;
    }
    
    public function set_kd_d_absen_crew_file($_kd_d_absen_crew_file) {
        return $this->_kd_d_absen_crew_file = $_kd_d_absen_crew_file;
    }
    
    public function set_kd_d_absen($_kd_d_absen) {
        return $this->_kd_d_absen = $_kd_d_absen;
    }

    public function set_kd_d_absen_mas($_kd_d_absen_mas) {
        return $this->_kd_d_absen_mas = $_kd_d_absen_mas;
    }
    
    public function set_kd_d_absen_file($_kd_d_absen_file) {
        return $this->_kd_d_absen_file = $_kd_d_absen_file;
    }
    
    public function set_kd_d_st($_kd_d_st) {
        return $this->_kd_d_st = $_kd_d_st;
    }

    public function set_kd_d_st_mas($_kd_d_st_mas) {
        return $this->_kd_d_st_mas = $_kd_d_st_mas;
    }
    
    public function set_kd_d_st_file($_kd_d_st_file) {
        return $this->_kd_d_st_file = $_kd_d_st_file;
    }
    
    public function set_kd_d_doc($_kd_d_doc) {
        return $this->_kd_d_doc = $_kd_d_doc;
    }

    public function set_kd_d_doc_mas($_kd_d_doc_mas) {
        return $this->_kd_d_doc_mas = $_kd_d_doc_mas;
    }
    
    public function set_kd_d_doc_file($_kd_d_doc_file) {
        return $this->_kd_d_doc_file = $_kd_d_doc_file;
    }
    
    public function set_kd_d_eval($_kd_d_eval) {
        return $this->_kd_d_eval = $_kd_d_eval;
    }

    public function set_kd_d_eval_mas($_kd_d_eval_mas) {
        return $this->_kd_d_eval_mas = $_kd_d_eval_mas;
    }
    
    public function set_kd_d_eval_tgl($_kd_d_eval_tgl) {
        return $this->_kd_d_eval_tgl = $_kd_d_eval_tgl;
    }
    
    public function set_kd_d_trans($_kd_d_trans) {
        return $this->_kd_d_trans = $_kd_d_trans;
    }

    public function set_kd_d_trans_mas($_kd_d_trans_mas) {
        return $this->_kd_d_trans_mas = $_kd_d_trans_mas;
    }
    
    public function set_kd_d_trans_tgl($_kd_d_trans_tgl) {
        return $this->_kd_d_trans_tgl = $_kd_d_trans_tgl;
    }
    
    public function set_kd_d_satker($_kd_satker) {
        return $this->_kd_satker = $_kd_satker;
    }
    
    public function set_kd_user($_kd_user) {
        return $this->_kd_user = $_kd_user;
    }
    
    public function set_kd_pass($_kd_pass) {
        return $this->_kd_pass = $_kd_pass;
    }
    
    public function set_kd_dept($_kd_dept) {
        return $this->_kd_dept = $_kd_dept;
    }
    
    public function set_kd_unit($_kd_unit) {
        return $this->_kd_unit = $_kd_unit;
    }

    /*
     * destruktor
     */

    public function __destruct() {
        
    }

}
