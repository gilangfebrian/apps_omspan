<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class DataKppnController extends BaseController {
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
        
    }

    /*
     * view Data KPPN PER KANWIL
     */

    public function formIsian($id = null) {
        $d_kppn = new DataKppn($this->registry);
        if (isset($_POST['add_d_kppn'])) {
            $kd_d_user = $_POST['kd_d_user'];
            $kd_d_tgl = $_POST['kd_d_tgl'];
            $kd_d_pc = $_POST['kd_d_pc'];
            $kd_d_pc_mas = $_POST['kd_d_pc_mas'];
            $kd_d_laser = $_POST['kd_d_laser'];
            $kd_d_laser_mas = $_POST['kd_d_laser_mas'];
            $kd_d_dot = $_POST['kd_d_dot'];
            $kd_d_dot_mas = $_POST['kd_d_dot_mas'];
            $kd_d_supplier = $_POST['kd_d_supplier'];
            $kd_d_supplier_mas = $_POST['kd_d_supplier_mas'];
            $kd_d_kontrak = $_POST['kd_d_kontrak'];
            $kd_d_kontrak_mas = $_POST['kd_d_kontrak_mas'];
            $kd_d_saldo = $_POST['kd_d_saldo'];
            $kd_d_saldo_mas = $_POST['kd_d_saldo_mas'];
            $kd_d_retur = $_POST['kd_d_retur'];
            $kd_d_retur_mas = $_POST['kd_d_retur_mas'];
            $kd_d_konversi = $_POST['kd_d_konversi'];
            $kd_d_konversi_mas = $_POST['kd_d_konversi_mas'];
            $kd_d_supplier_tim = $_POST['kd_d_supplier_tim'];
            $kd_d_supplier_tim_mas = $_POST['kd_d_supplier_tim_mas'];
            $kd_d_kontrak_tim = $_POST['kd_d_kontrak_tim'];
            $kd_d_kontrak_tim_mas = $_POST['kd_d_kontrak_tim_mas'];
            $kd_d_user_id = $_POST['kd_d_user_id'];
            $kd_d_user_id_mas = $_POST['kd_d_user_id_mas'];
            
            $kd_d_saldo1 = $_POST['kd_d_saldo1'];
            $kd_d_saldo_mas1 = $_POST['kd_d_saldo_mas1'];
            $kd_d_retur1 = $_POST['kd_d_retur1'];
            $kd_d_retur_mas1 = $_POST['kd_d_retur_mas1'];
            $kd_d_konversi1 = $_POST['kd_d_konversi1'];
            $kd_d_konversi_mas1 = $_POST['kd_d_konversi_mas1'];
            
            $kd_d_saldo2 = $_POST['kd_d_saldo2'];
            $kd_d_saldo_mas2 = $_POST['kd_d_saldo_mas2'];
            $kd_d_retur2 = $_POST['kd_d_retur2'];
            $kd_d_retur_mas2 = $_POST['kd_d_retur_mas2'];
            $kd_d_konversi2 = $_POST['kd_d_konversi2'];
            $kd_d_konversi_mas2 = $_POST['kd_d_konversi_mas2'];
            $kd_d_supplier_tim2 = $_POST['kd_d_supplier_tim2'];
            $kd_d_supplier_tim_mas2 = $_POST['kd_d_supplier_tim_mas2'];
            $kd_d_kontrak_tim2 = $_POST['kd_d_kontrak_tim2'];
            $kd_d_kontrak_tim_mas2 = $_POST['kd_d_kontrak_tim_mas2'];
            
            $kd_d_input_by = $_POST['kd_d_input_by'];

            $d_kppn->set_kd_d_user($kd_d_user);
            $d_kppn->set_kd_d_tgl($kd_d_tgl);
            $d_kppn->set_kd_d_pc($kd_d_pc);
            $d_kppn->set_kd_d_pc_mas($kd_d_pc_mas);
            $d_kppn->set_kd_d_laser($kd_d_laser);
            $d_kppn->set_kd_d_laser_mas($kd_d_laser_mas);
            $d_kppn->set_kd_d_dot($kd_d_dot);
            $d_kppn->set_kd_d_dot_mas($kd_d_dot_mas);
            $d_kppn->set_kd_d_supplier($kd_d_supplier);
            $d_kppn->set_kd_d_supplier_mas($kd_d_supplier_mas);
            $d_kppn->set_kd_d_kontrak($kd_d_kontrak);
            $d_kppn->set_kd_d_kontrak_mas($kd_d_kontrak_mas);
            $d_kppn->set_kd_d_saldo($kd_d_saldo);
            $d_kppn->set_kd_d_saldo_mas($kd_d_saldo_mas);
            $d_kppn->set_kd_d_retur($kd_d_retur);
            $d_kppn->set_kd_d_retur_mas($kd_d_retur_mas);
            $d_kppn->set_kd_d_konversi($kd_d_konversi);
            $d_kppn->set_kd_d_konversi_mas($kd_d_konversi_mas);
            $d_kppn->set_kd_d_supplier_tim($kd_d_supplier_tim);
            $d_kppn->set_kd_d_supplier_tim_mas($kd_d_supplier_tim_mas);
            $d_kppn->set_kd_d_kontrak_tim($kd_d_kontrak_tim);
            $d_kppn->set_kd_d_kontrak_tim_mas($kd_d_kontrak_tim_mas);
            $d_kppn->set_kd_d_user_id($kd_d_user_id);
            $d_kppn->set_kd_d_user_id_mas($kd_d_user_id_mas);
            
            $d_kppn->set_kd_d_saldo1($kd_d_saldo1);
            $d_kppn->set_kd_d_saldo_mas1($kd_d_saldo_mas1);
            $d_kppn->set_kd_d_retur1($kd_d_retur1);
            $d_kppn->set_kd_d_retur_mas1($kd_d_retur_mas1);
            $d_kppn->set_kd_d_konversi1($kd_d_konversi1);
            $d_kppn->set_kd_d_konversi_mas1($kd_d_konversi_mas1);
            
            $d_kppn->set_kd_d_saldo2($kd_d_saldo2);
            $d_kppn->set_kd_d_saldo_mas2($kd_d_saldo_mas2);
            $d_kppn->set_kd_d_retur2($kd_d_retur2);
            $d_kppn->set_kd_d_retur_mas2($kd_d_retur_mas2);
            $d_kppn->set_kd_d_konversi2($kd_d_konversi2);
            $d_kppn->set_kd_d_konversi_mas2($kd_d_konversi_mas2);
            $d_kppn->set_kd_d_supplier_tim2($kd_d_supplier_tim2);
            $d_kppn->set_kd_d_supplier_tim_mas2($kd_d_supplier_tim_mas2);
            $d_kppn->set_kd_d_kontrak_tim2($kd_d_kontrak_tim2);
            $d_kppn->set_kd_d_kontrak_tim_mas2($kd_d_kontrak_tim_mas2);
            
            $d_kppn->set_kd_d_input_by($kd_d_input_by);
            //var_dump($d_kppn);

            if (!$d_kppn->add_d_kppn()) {

                $this->view->error = $d_kppn->get_error();
            }
        }

        $this->view->data = $d_kppn->get_d_kppn($id);
        if (Session::get('role') == 'kppn') {
            $this->view->render('kppn/isianKppn');
        } elseif (Session::get('role') == 'kanwil') {
            $this->view->render('kppn/isianKanwil');
        } elseif (Session::get('role') == 'admin') {
            $this->view->render('kppn/isianSpan');
        }
    }
	
	public function formAset($id = null) {
        $d_kppn = new DataKppn($this->registry);
        if (isset($_POST['add_aset'])) {
            $kd_d_user = $_POST['kd_d_user'];
            $kd_d_tgl = $_POST['kd_d_tgl'];
			$persiapan = $_POST['persiapan'];
			$migrasi = $_POST['migrasi'];
			$finalisasi = $_POST['finalisasi'];
			$konversi = $_POST['konversi'];
			$posting = $_POST['posting'];
			$nercob = $_POST['nercob'];
			$keterangan = $_POST['keterangan'];
			$upload = $_POST['upload'];
            
            $kd_d_room = $_POST['kd_d_room'];
            $kd_d_room_mas = $_POST['kd_d_room_mas'];
            $kd_d_room_tgl = $_POST['kd_d_room_tgl'];
            $kd_d_jar = $_POST['kd_d_jar'];
            $kd_d_jar_mas = $_POST['kd_d_jar_mas'];
            $kd_d_jar_tgl = $_POST['kd_d_jar_tgl'];
            $kd_d_con = $_POST['kd_d_con'];
            $kd_d_con_mas = $_POST['kd_d_con_mas'];
            $kd_d_con_tgl = $_POST['kd_d_con_tgl'];
            $kd_d_meet = $_POST['kd_d_meet'];
            $kd_d_meet_mas = $_POST['kd_d_meet_mas'];
            $kd_d_meet_file = $_FILES["kd_d_meet_file"]["name"];
            $kd_d_crew = $_POST['kd_d_crew'];
            $kd_d_crew_mas = $_POST['kd_d_crew_mas'];
            $kd_d_crew_file = $_POST['kd_d_crew_file'];
            $kd_d_und = $_POST['kd_d_und'];
            $kd_d_und_mas = $_POST['kd_d_und_mas'];
            $kd_d_und_file = $_POST['kd_d_und_file'];
            $kd_d_book = $_POST['kd_d_book'];
            $kd_d_book_mas = $_POST['kd_d_book_mas'];
            $kd_d_book_tgl = $_POST['kd_d_book_tgl'];
            $kd_d_absen_crew = $_POST['kd_d_absen_crew'];
            $kd_d_absen_crew_mas = $_POST['kd_d_absen_crew_mas'];
            $kd_d_absen_crew_file = $_POST['kd_d_absen_crew_file'];
            $kd_d_absen = $_POST['kd_d_absen'];
            $kd_d_absen_mas = $_POST['kd_d_absen_mas'];
            $kd_d_absen_file = $_POST['kd_d_absen_file'];
            $kd_d_st = $_POST['kd_d_st'];
            $kd_d_st_mas = $_POST['kd_d_st_mas'];
            $kd_d_st_file = $_POST['kd_d_st_file'];
            $kd_d_doc = $_POST['kd_d_doc'];
            $kd_d_doc_mas = $_POST['kd_d_doc_mas'];
            $kd_d_doc_file = $_POST['kd_d_doc_file'];
            $kd_d_user_id = $_POST['kd_d_user_id'];
            $kd_d_user_id_mas = $_POST['kd_d_user_id_mas'];
            $kd_d_eval = $_POST['kd_d_eval'];
            $kd_d_eval_mas = $_POST['kd_d_eval_mas'];
            $kd_d_eval_tgl = $_POST['kd_d_eval_tgl'];
            $kd_d_trans = $_POST['kd_d_trans'];
            $kd_d_trans_mas = $_POST['kd_d_trans_mas'];
            $kd_d_trans_tgl = $_POST['kd_d_trans_tgl'];
			
			$d_kppn->set_kd_d_user($kd_d_user);
            $d_kppn->set_kd_d_tgl($kd_d_tgl);
			$d_kppn->set_persiapan($persiapan);
			$d_kppn->set_migrasi($migrasi);
			$d_kppn->set_finalisasi($finalisasi);
			$d_kppn->set_konversi($konversi);
			$d_kppn->set_posting($posting);
			$d_kppn->set_nercob($nercob);
			$d_kppn->set_keterangan($keterangan);
			$d_kppn->set_upload($upload);
            
            $d_kppn->set_kd_d_room($kd_d_room);
            $d_kppn->set_kd_d_room_mas($kd_d_room_mas);
            $d_kppn->set_kd_d_room_tgl($kd_d_room_tgl);
            $d_kppn->set_kd_d_jar($kd_d_jar);
            $d_kppn->set_kd_d_jar_mas($kd_d_jar_mas);
            $d_kppn->set_kd_d_jar_tgl($kd_d_jar_tgl);
            $d_kppn->set_kd_d_con($kd_d_con);
            $d_kppn->set_kd_d_con_mas($kd_d_con_mas);
            $d_kppn->set_kd_d_con_tgl($kd_d_con_tgl);
            $d_kppn->set_kd_d_meet($kd_d_meet);
            $d_kppn->set_kd_d_meet_mas($kd_d_meet_mas);
            $d_kppn->set_kd_d_meet_file($kd_d_meet_file);
            $d_kppn->set_kd_d_crew($kd_d_crew);
            $d_kppn->set_kd_d_crew_mas($kd_d_crew_mas);
            $d_kppn->set_kd_d_crew_file($kd_d_crew_file);
            $d_kppn->set_kd_d_und($kd_d_und);
            $d_kppn->set_kd_d_und_mas($kd_d_und_mas);
            $d_kppn->set_kd_d_und_file($kd_d_und_file);
            $d_kppn->set_kd_d_book($kd_d_book);
            $d_kppn->set_kd_d_book_mas($kd_d_book_mas);
            $d_kppn->set_kd_d_book_tgl($kd_d_book_tgl);
            $d_kppn->set_kd_d_absen_crew($kd_d_absen_crew);
            $d_kppn->set_kd_d_absen_crew_mas($kd_d_absen_crew_mas);
            $d_kppn->set_kd_d_absen_crew_file($kd_d_absen_crew_file);
            $d_kppn->set_kd_d_absen($kd_d_absen);
            $d_kppn->set_kd_d_absen_mas($kd_d_absen_mas);
            $d_kppn->set_kd_d_absen_file($kd_d_absen_file);
            $d_kppn->set_kd_d_st($kd_d_st);
            $d_kppn->set_kd_d_st_mas($kd_d_st_mas);
            $d_kppn->set_kd_d_st_file($kd_d_st_file);
            $d_kppn->set_kd_d_doc($kd_d_doc);
            $d_kppn->set_kd_d_doc_mas($kd_d_doc_mas);
            $d_kppn->set_kd_d_doc_file($kd_d_doc_file);
            $d_kppn->set_kd_d_user_id($kd_d_user_id);
            $d_kppn->set_kd_d_user_id_mas($kd_d_user_id_mas);
            $d_kppn->set_kd_d_eval($kd_d_eval);
            $d_kppn->set_kd_d_eval_mas($kd_d_eval_mas);
            $d_kppn->set_kd_d_eval_tgl($kd_d_eval_tgl);
            $d_kppn->set_kd_d_trans($kd_d_trans);
            $d_kppn->set_kd_d_trans_mas($kd_d_trans_mas);
            $d_kppn->set_kd_d_trans_tgl($kd_d_trans_tgl);
			
			if (!$d_kppn->add_aset()) {

                $this->view->error = $d_kppn->get_error();
            }
		}
        		
		$this->view->data = $d_kppn->get_aset($id);
		$this->view->render('kppn/formAset');
	}

    public function rekapKppn($pilot = null) {
        $d_kppn = new DataKppn($this->registry);
		if($pilot == "I"){
			$filter = "c.kd_d_user between 1000 and 8018";
		} else if ($pilot == "II"){
			$filter = "c.kd_d_user between 9000 and 19010";
		} else if ($pilot == "III"){
			$filter = "c.kd_d_user between 20000 and 230062";
		} else {
			$filter = "c.kd_d_user >= 0";
		}
        $this->view->data = $d_kppn->get_d_kppn_all($filter);
        $this->view->render('kppn/hasilKppn');
    }
	
	public function rekapAset(){
		$d_kppn = new DataKppn($this->registry);
		$this->view->data = $d_kppn->get_aset_all();
		$this->view->render('kppn/hasilAset');
	}

    public function rekapAll($id = null) {
        $d_kppn = new DataKppn($this->registry);
        $this->view->data_kanwil = $d_kppn->get_nama_kanwil_all($id);
        $this->view->data = $d_kppn->get_d_kppn_per_kanwil($id);
        $this->view->render('kppn/Lvl1');
    }

    public function lihatReferensiInfrastuktur() {
        $this->view->render('kppn/referensiInfrastruktur');
    }
	
	public function lihatReferensiBukuPanduan() {
        $this->view->render('kppn/referensiBukuPanduan');
    }
	
	public function unduhBA() {
        $this->view->render('kppn/referensiBA');
    }
	
	public function unduhCeklist() {
        $this->view->render('kppn/unduhCeklist');
    }
	
	public function PMK223() {
        $this->view->render('kppn/PMK223');
    }
	
	public function S3796() {
        $this->view->render('kppn/S3796');
    }
	
	public function S3846() {
        $this->view->render('kppn/S3846');
    }
	
	public function S4943() {
        $this->view->render('kppn/S4943');
    }
	
	public function S8819() {
        $this->view->render('kppn/S8819');
    }
	
	public function FAQjoinDomain() {
        $this->view->render('kppn/FAQjoinDomain');
    }
	
	public function bukuPintar() {
        $this->view->render('kppn/bukuPintar');
    }
	
	public function panduanInstalasi() {
        $this->view->render('kppn/panduanInstalasi');
    }
	
	public function SOPsakti() {
        $this->view->render('kppn/SOPsakti');
    }
    
    public function PMK50() {
        $this->view->render('kppn/PMK50');
    }
    
    public function PER04() {
        $this->view->render('kppn/PER04');
    }
    
    public function jadwal() {
        $this->view->render('kppn/ralatjadwaltraining');
    }
    
    public function linkmateri() {
        $this->view->render('kppn/linkmateri');
    }
    
    public function lihatReferensiUser() {
        
        $d_kppn = new DataKppn($this->registry);
		
        $this->view->data = $d_kppn->get_d_user_all();

        $this->view->render('kppn/referensiuser');
    }
	
	public function rekapBA($d=null) {
		$this->view->doc = $d;
        $this->view->render('kppn/rekapBA');
    }
    
    public function rekapRapat($d=null) {
		$this->view->doc = $d;
        $this->view->render('kppn/rekapRapat');
    }
	
	public function userSakti() {
        $d_kppn = new DataKppn($this->registry);
        $this->view->data = $d_kppn->get_user_sakti();
		$this->view->render('kppn/userSakti');
    }
	
	public function rekapMasalah($pilot = null) {
        $d_kppn = new DataKppn($this->registry);
		if($pilot == "I"){
			$filter = "c.kd_d_user between 1000 and 8018";
		} else if ($pilot == "II"){
			$filter = "c.kd_d_user between 9000 and 19010";
		} else if ($pilot == "III"){
			$filter = "c.kd_d_user between 20000 and 230062";
		} else {
			$filter = "c.kd_d_user >= 0";
		}
        $this->view->data = $d_kppn->get_d_kppn_all($filter);
        $this->view->render('kppn/rekapMasalah');
    }

    public function upload($tipe_dokumen) {
        if(isset($_FILES["fileToUpload"])){
            $target_dir = "././upload/".$tipe_dokumen."/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $name_file = $target_dir . $tipe_dokumen."_".Session::get('id_user')."_".Session::get('user')."_".date('dmY').".rar";
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            // Check if file already exists
            /*if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }*/
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 50000000) {
                $this->view->whyerror = "File Anda terlalu besar. File maksimal 50M.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "rar" ) {
                $this->view->whyerror = "Hanya file bertipe RAR files yang bisa di-upload.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $this->view->error = "File tidak dapat di-upload.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $name_file)) {
                    $this->view->ok = "File ". basename( $_FILES["fileToUpload"]["name"]). " telah berhasil di-uplaod.";
                } else {
                    $this->view->error = "Terdapat error saat upload file Anda, silakan ulangi kembali.";
                }
            }

        }
		if($tipe_dokumen == "persediaan"){
		  $this->view->tipe_dokumen = "BA MIGRASI PERSEDIAAN";
		}elseif($tipe_dokumen == "aset_tetap"){
		  $this->view->tipe_dokumen = "BA MIGRASI ASET TETAP";
		}elseif($tipe_dokumen == "saiba"){
		  $this->view->tipe_dokumen = "BA BUKU BESAR NERACA";
		}elseif($tipe_dokumen == "cut_off"){
		  $this->view->tipe_dokumen = "BA DATA CUT_OFF KONVERSI<br> HARIAN TRANSAKSI";
		}elseif($tipe_dokumen == "checklist"){
		  $this->view->tipe_dokumen = "CHECKLIST PENDAMPINGAN";  
		}elseif($tipe_dokumen == "BA_IId"){
		  $this->view->tipe_dokumen = "BA IId";  
		}elseif($tipe_dokumen == "absen_rapat"){
		  $this->view->tipe_dokumen = "ABSEN RAPAT";  
		}elseif($tipe_dokumen == "st_panitia"){
		  $this->view->tipe_dokumen = "SURAT TUGAS PANITIA";  
		}elseif($tipe_dokumen == "und_peserta"){
		  $this->view->tipe_dokumen = "UNDANGAN PESERTA";  
		}elseif($tipe_dokumen == "absen_panitia"){
		  $this->view->tipe_dokumen = "ABSEN PANITIA";  
		}elseif($tipe_dokumen == "absen_peserta"){
		  $this->view->tipe_dokumen = "ABSEN PESERTA";  
		}elseif($tipe_dokumen == "st_peserta"){
		  $this->view->tipe_dokumen = "SURAT TUGAS PESERTA";  
		}elseif($tipe_dokumen == "dokumentasi"){
		  $this->view->tipe_dokumen = "DOKUMENTASI";  
		}elseif($tipe_dokumen == "lain_lain"){
		  $this->view->tipe_dokumen = "LAIN-LAIN";  
		}else {
            $this->view->tipe_dokumen = "";
        }
		
        $this->view->render('kppn/uploadForm');
    }
    
    
    public function formDAK($id = null) {
        $d_kppn = new DataKppn($this->registry);
        if (isset($_POST['add_DAK'])) {
            $kd_d_user = $_POST['kd_d_user'];
            $kd_d_tgl = $_POST['kd_d_tgl'];
			$persiapan = $_POST['persiapan'];
			$migrasi = $_POST['migrasi'];
			$finalisasi = $_POST['finalisasi'];
			$konversi = $_POST['konversi'];
			$posting = $_POST['posting'];
			$nercob = $_POST['nercob'];
			$keterangan = $_POST['keterangan'];
			$upload = $_POST['upload'];
            
            $kd_d_room = $_POST['kd_d_room'];
            $kd_d_room_mas = $_POST['kd_d_room_mas'];
            $kd_d_room_tgl = $_POST['kd_d_room_tgl'];
            $kd_d_jar = $_POST['kd_d_jar'];
            $kd_d_jar_mas = $_POST['kd_d_jar_mas'];
            $kd_d_jar_tgl = $_POST['kd_d_jar_tgl'];
            $kd_d_con = $_POST['kd_d_con'];
            $kd_d_con_mas = $_POST['kd_d_con_mas'];
            $kd_d_con_tgl = $_POST['kd_d_con_tgl'];
            $kd_d_meet = $_POST['kd_d_meet'];
            $kd_d_meet_mas = $_POST['kd_d_meet_mas'];
            $kd_d_meet_file = $_POST['kd_d_meet_file'];
            $kd_d_crew = $_POST['kd_d_crew'];
            $kd_d_crew_mas = $_POST['kd_d_crew_mas'];
            $kd_d_crew_file = $_POST['kd_d_crew_file'];
            $kd_d_und = $_POST['kd_d_und'];
            $kd_d_und_mas = $_POST['kd_d_und_mas'];
            $kd_d_und_file = $_POST['kd_d_und_file'];
            $kd_d_book = $_POST['kd_d_book'];
            $kd_d_book_mas = $_POST['kd_d_book_mas'];
            $kd_d_book_tgl = $_POST['kd_d_book_tgl'];
            $kd_d_absen_crew = $_POST['kd_d_absen_crew'];
            $kd_d_absen_crew_mas = $_POST['kd_d_absen_crew_mas'];
            $kd_d_absen_crew_file = $_POST['kd_d_absen_crew_file'];
            $kd_d_absen = $_POST['kd_d_absen'];
            $kd_d_absen_mas = $_POST['kd_d_absen_mas'];
            $kd_d_absen_file = $_POST['kd_d_absen_file'];
            $kd_d_st = $_POST['kd_d_st'];
            $kd_d_st_mas = $_POST['kd_d_st_mas'];
            $kd_d_st_file = $_POST['kd_d_st_file'];
            $kd_d_doc = $_POST['kd_d_doc'];
            $kd_d_doc_mas = $_POST['kd_d_doc_mas'];
            $kd_d_doc_file = $_POST['kd_d_doc_file'];
            $kd_d_user_id = $_POST['kd_d_user_id'];
            $kd_d_user_id_mas = $_POST['kd_d_user_id_mas'];
            $kd_d_eval = $_POST['kd_d_eval'];
            $kd_d_eval_mas = $_POST['kd_d_eval_mas'];
            $kd_d_eval_tgl = $_POST['kd_d_eval_tgl'];
            $kd_d_trans = $_POST['kd_d_trans'];
            $kd_d_trans_mas = $_POST['kd_d_trans_mas'];
            $kd_d_trans_tgl = $_POST['kd_d_trans_tgl'];
			
			$d_kppn->set_kd_d_user($kd_d_user);
            $d_kppn->set_kd_d_tgl($kd_d_tgl);
			$d_kppn->set_persiapan($persiapan);
			$d_kppn->set_migrasi($migrasi);
			$d_kppn->set_finalisasi($finalisasi);
			$d_kppn->set_konversi($konversi);
			$d_kppn->set_posting($posting);
			$d_kppn->set_nercob($nercob);
			$d_kppn->set_keterangan($keterangan);
			$d_kppn->set_upload($upload);
            
            $d_kppn->set_kd_d_room($kd_d_room);
            $d_kppn->set_kd_d_room_mas($kd_d_room_mas);
            $d_kppn->set_kd_d_room_tgl($kd_d_room_tgl);
            $d_kppn->set_kd_d_jar($kd_d_jar);
            $d_kppn->set_kd_d_jar_mas($kd_d_jar_mas);
            $d_kppn->set_kd_d_jar_tgl($kd_d_jar_tgl);
            $d_kppn->set_kd_d_con($kd_d_con);
            $d_kppn->set_kd_d_con_mas($kd_d_con_mas);
            $d_kppn->set_kd_d_con_tgl($kd_d_con_tgl);
            $d_kppn->set_kd_d_meet($kd_d_meet);
            $d_kppn->set_kd_d_meet_mas($kd_d_meet_mas);
            $d_kppn->set_kd_d_meet_file($kd_d_meet_file);
            $d_kppn->set_kd_d_crew($kd_d_crew);
            $d_kppn->set_kd_d_crew_mas($kd_d_crew_mas);
            $d_kppn->set_kd_d_crew_file($kd_d_crew_file);
            $d_kppn->set_kd_d_und($kd_d_und);
            $d_kppn->set_kd_d_und_mas($kd_d_und_mas);
            $d_kppn->set_kd_d_und_file($kd_d_und_file);
            $d_kppn->set_kd_d_book($kd_d_book);
            $d_kppn->set_kd_d_book_mas($kd_d_book_mas);
            $d_kppn->set_kd_d_book_tgl($kd_d_book_tgl);
            $d_kppn->set_kd_d_absen_crew($kd_d_absen_crew);
            $d_kppn->set_kd_d_absen_crew_mas($kd_d_absen_crew_mas);
            $d_kppn->set_kd_d_absen_crew_file($kd_d_absen_crew_file);
            $d_kppn->set_kd_d_absen($kd_d_absen);
            $d_kppn->set_kd_d_absen_mas($kd_d_absen_mas);
            $d_kppn->set_kd_d_absen_file($kd_d_absen_file);
            $d_kppn->set_kd_d_st($kd_d_st);
            $d_kppn->set_kd_d_st_mas($kd_d_st_mas);
            $d_kppn->set_kd_d_st_file($kd_d_st_file);
            $d_kppn->set_kd_d_doc($kd_d_doc);
            $d_kppn->set_kd_d_doc_mas($kd_d_doc_mas);
            $d_kppn->set_kd_d_doc_file($kd_d_doc_file);
            $d_kppn->set_kd_d_user_id($kd_d_user_id);
            $d_kppn->set_kd_d_user_id_mas($kd_d_user_id_mas);
            $d_kppn->set_kd_d_eval($kd_d_eval);
            $d_kppn->set_kd_d_eval_mas($kd_d_eval_mas);
            $d_kppn->set_kd_d_eval_tgl($kd_d_eval_tgl);
            $d_kppn->set_kd_d_trans($kd_d_trans);
            $d_kppn->set_kd_d_trans_mas($kd_d_trans_mas);
            $d_kppn->set_kd_d_trans_tgl($kd_d_trans_tgl);
			
			if (!$d_kppn->add_dak()) {

                $this->view->error = $d_kppn->get_error();
            }
		}
        		
		$this->view->data = $d_kppn->get_dak($id);
		$this->view->render('kppn/formDAK');
	}

    public function __destruct() {
        
    }

}
