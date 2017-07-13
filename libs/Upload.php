<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Upload {

    private $dirTo;
    private $dirFrom;
    private $fileExt;
    private $fileName;
    private $fileTo;
    private $ubahNama = array();
    private $fileEkst;

    const PDF = 'application/pdf';
    const JPG = 'application/jpeg';
    const DOC = 'application/msword';
    const DOCX = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    const DOCX2 = 'application/octet-stream';
    const RAR = 'application/rar';
    const ZIP = 'application/zip';

    public function __construct() {
        ;
    }

    public function init($fupload) {
        $this->setDirFrom($_FILES[$fupload]['tmp_name']);
        $this->setFileExt($_FILES[$fupload]['type']);
        $this->setFileName($_FILES[$fupload]['name']);
//        echo $this->getDirFrom().'</br>';
//        echo $this->getFileExt().'</br>';
//        echo $this->getFileName().'</br>';        
    }

    public function cekFileExist() {
        if (file_exists($this->getDirFrom())) {
            return true;
        } else {
            return false;
        }
    }

    /*
     * cek eksetensi file sesuai dengan halaman/jenis upload. misal foto harus jpg, surat tugas harus pdf
     * param ekstensi file dan tipe dokumen [img,pdf]
     */

    public function cekEkstensi($fileExt, $doctype = NULL) {
        //$this->setFileExt($fileExt);
        switch ($doctype) {
            case '':
                break;
        }
        if ($fileExt == __EXT_FILE__ OR $fileExt == 'application/msword' OR $fileExt == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' OR $fileExt == 'application/octet-stream') {
            return true;
        } else {
            return false;
        }
    }

    /*
     * @param ubahNama=>array, jenis surat-nomor surat-satker-tgl surat
     * mungkin bisa dihapus, dengan set get langsung aja untuk menggantikannya
     */

    public function changeFileName($filename, $ubahNama) {
        $nama = '';
        $length = count($ubahNama);
        for ($i = 0; $i < $length; $i++) {
            $nama .= $ubahNama[$i] . "_";
        }
        $ekst = end(explode(".", $filename));
        $nama = rtrim($nama, "_");
        //$nama .= $filename;
        $nama .= "." . $ekst;
        $nama = str_replace('/', '_', $nama);
        $nama = trim($nama);
        $this->fileTo = $nama;
        return $this->fileTo;
    }

    /*
     * param tipe dokumen, misal foto harus jpg, surat tugas harus pdf
     * 
     */

    public function uploadFile($doctype = NULL) {
        if ($this->cekFileExist()) {
//            if($this->cekEkstensi($this->getFileExt())){
            move_uploaded_file($this->getDirFrom(), $this->getDirTo() . $this->getFileTo());
            return true;
//            }else{
//                throw new Exception();
            return false;
//                exit();
//            }
        } else {
            return false;
        }
    }

    public static function renameFile($old, $new) {
        rename($old, $new);
    }

    public function setDirTo($dirTo) {
        $this->dirTo = $dirTo;
    }

    public function setDirFrom($dirFrom) {
        $this->dirFrom = $dirFrom;
    }

    public function setFileExt($fileExt) {
        $this->fileExt = $fileExt;
    }

    public function setFileName($fileName) {
        $this->fileName = $fileName;
    }

    public function setUbahNama($ubahNama) {
        $this->ubahNama = $ubahNama;
    }

    public function setFileTo($filename) {
        $this->fileTo = $filename;
    }

    public function getDirTo() {
        return $this->dirTo;
    }

    public function getDirFrom() {
        return $this->dirFrom;
    }

    public function getFileExt() {
        return $this->fileExt;
    }

    public function getFileName() {
        return $this->fileName;
    }

    public function getFileTo() {
        return $this->fileTo;
    }

}