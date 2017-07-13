<?php
foreach ($this->data as $val) {
    $kd_d_tgl = $val->get_kd_d_tgl();
    $persiapan = $val->get_persiapan();
	$migrasi = $val->get_migrasi();
	$finalisasi = $val->get_finalisasi();
	$konversi = $val->get_konversi();
	$posting = $val->get_posting();
	$nercob = $val->get_nercob();
	$keterangan = $val->get_keterangan();
	$upload = $val->get_upload();
    $kd_d_room = $val->get_kd_d_room();
    $kd_d_room_mas = $val->get_kd_d_room_mas();
    $kd_d_room_tgl = $val->get_kd_d_room_tgl();
    $kd_d_jar = $val->get_kd_d_jar();
    $kd_d_jar_mas = $val->get_kd_d_jar_mas();
    $kd_d_jar_tgl = $val->get_kd_d_jar_tgl();
    $kd_d_con = $val->get_kd_d_con();
    $kd_d_con_mas = $val->get_kd_d_con_mas();
    $kd_d_con_tgl = $val->get_kd_d_con_tgl();
    $kd_d_meet = $val->get_kd_d_meet();
    $kd_d_meet_mas = $val->get_kd_d_meet_mas();
    $kd_d_meet_file = $val->get_kd_d_meet_file();
    $kd_d_crew = $val->get_kd_d_crew();
    $kd_d_crew_mas = $val->get_kd_d_crew_mas();
    $kd_d_crew_file = $val->get_kd_d_crew_file();
    $kd_d_und = $val->get_kd_d_und();
    $kd_d_und_mas = $val->get_kd_d_und_mas();
    $kd_d_und_file = $val->get_kd_d_und_file();
    $kd_d_book = $val->get_kd_d_book();
    $kd_d_book_mas = $val->get_kd_d_book_mas();
    $kd_d_book_tgl = $val->get_kd_d_book_tgl();
    $kd_d_absen = $val->get_kd_d_absen();
    $kd_d_absen_mas = $val->get_kd_d_absen_mas();
    $kd_d_absen_file = $val->get_kd_d_absen_file();
    $kd_d_absen_crew = $val->get_kd_d_absen_crew();
    $kd_d_absen_crew_mas = $val->get_kd_d_absen_crew_mas();
    $kd_d_absen_crew_file = $val->get_kd_d_absen_crew_file();
    $kd_d_doc = $val->get_kd_d_doc();
    $kd_d_doc_mas = $val->get_kd_d_doc_mas();
    $kd_d_doc_file = $val->get_kd_d_doc_file();
    $kd_d_eval = $val->get_kd_d_eval();
    $kd_d_eval_mas = $val->get_kd_d_eval_mas();
    $kd_d_eval_tgl = $val->get_kd_d_eval_tgl();
    $kd_d_user_id = $val->get_kd_d_user_id();
    $kd_d_user_id_mas = $val->get_kd_d_user_id_mas();
    
    $kd_d_trans = $val->get_kd_d_trans();
    $kd_d_trans_mas = $val->get_kd_d_trans_mas();
    $kd_d_trans_tgl = $val->get_kd_d_trans_tgl();
    
    $all = $kd_d_room + $kd_d_jar + $kd_d_con + $kd_d_meet + $kd_d_crew + $kd_d_und + $kd_d_book + $kd_d_absen + $kd_d_absen_crew + $kd_d_doc + $kd_d_eval + $kd_d_trans ;
    $all2 = 12;
    $all3 = $all2 - $all;
}
?>
<div id="header">
    <div id="kiri">
        <h2>FORM PELAKSANAAN TRAINING OMSPAN PADA <?php echo Session::get('user'); ?></h2>
    </div>
    <div id="kanan">
        <canvas id="canvas" height="70" width="70" style="padding-left: 10px"></canvas>
        <h2 style="margin-top: -10px; margin-right: 10px" ><?php echo $all ?>/<?php echo $all2 ?></h2>
    </div>
</div><form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<br><br><br><br><br><br>
<label class="isian" style="margin-left: 150px">Tanggal</label>
<input type="text" class="kd_d_tgl" name="kd_d_tgl" id="kd_d_tgl" size="20" value="<?php echo $kd_d_tgl; ?>" placeholder="Format : yyyy-mm-dd">
<div id="top">
        <div id="komponen1"><i class="icon-list icon-white" id="label"></i>Infrastruktur</div><br>
        <input type=hidden name='kd_d_user' value="<?php echo Session::get('id_user'); ?>">
        <input type=hidden name='kd_d_input_by' value="<?php echo Session::get('id_user'); ?>">
        <table width="100%" class="zebra">
            <!--baris pertama-->
            <tr>
                <td width="30%"><label> Mempersiapkan ruangan yang akan dijadikan lokasi training (Mini TLC/Ruang Rapat/Aula)
: </label></td>
                <td width="10%"><select name="kd_d_room" id="kd_d_room">
                        <?php if ($kd_d_room == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_room_mas" id="kd_d_room_mas"><?php echo $kd_d_room_mas;?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_room_tgl" id="kd_d_room_tgl" size="20" value="<?php echo $kd_d_room_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_room_mas" id="kd_d_room_mas"><?php echo $kd_d_room_mas;?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_room_tgl" id="kd_d_room_tgl" size="20" value="<?php echo $kd_d_room_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td width="30%"><label> Mempersiapkan kabel jaringan/wifi pada lokasi training (Mini TLC/Ruang Rapat/Aula)
: </label></td>
                <td width="10%"><select name="kd_d_jar" id="kd_d_jar">
                        <?php if ($kd_d_jar == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jar_mas" id="kd_d_jar_mas"><?php echo $kd_d_jar_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_jar_tgl" id="kd_d_jar_tgl" size="20" value="<?php echo $kd_d_jar_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_jar_mas" id="kd_d_jar_mas"><?php echo $kd_d_jar_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_jar_tgl" id="kd_d_jar_tgl" size="20" value="<?php echo $kd_d_jar_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <!--baris kedua-->
            <tr>
                <td><label>Mengecek spesifikasi PC dan koneksi serta ke OM SPAN pada lokasi training (Mini TLC/Ruang Rapat/Aula) </label></td>
                <td><select name="kd_d_con" id="kd_d_con" >
                        <?php if ($kd_d_con == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_con_mas" id="kd_d_con_mas"><?php echo $kd_d_con_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_con_tgl" id="kd_d_con_tgl" size="20" value="<?php echo $kd_d_con_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_con_mas" id="kd_d_con_mas"><?php echo $kd_d_con_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_con_tgl" id="kd_d_con_tgl" size="20" value="<?php echo $kd_d_con_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            
        </table>
        <div id="komponen2"><i class="icon-folder-open icon-white" id="label"></i>Persiapan Training OM SPAN</div>
        <table width="100%" class="zebra">
            <!--baris pertama-->
            <tr>
                <td><label>Pelaksanaan rapat persiapan training OM SPAN di masing-masing KPPN (Upload Absensi Rapat) </label></td>

                <td><select name="kd_d_meet" id="kd_d_meet">
                        <?php if ($kd_d_meet == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_meet_mas" id="kd_d_meet_mas"><?php echo $kd_d_meet_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>

                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_meet_mas" id="kd_d_meet_mas"><?php echo $kd_d_meet_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="kd_d_meet_file" id="kd_d_meet_file">
                            <?php
                            if (isset($this->error)) {
                                echo "<p style='color:red; margin-left: 95px;'>" .$this->whyerror . "<br>" . $this->error . "<br></p>";
                            } elseif(isset($this->ok)){
                                echo "<p style='color:green; margin-left: 95px;'>" .$this->ok. "<br></p>";
                            }
                            ?>
                            </td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td width="30%"><label>Pembentukan Panitia Pelaksanaan Trainig OM SPAN untuk Pemda (Upload ST) </label></td>
                <td width="10%"><select name="kd_d_crew" id="kd_d_crew">
                        <?php if ($kd_d_crew == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_crew_mas" id="kd_d_crew_mas"><?php echo $kd_d_crew_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_crew_mas" id="kd_d_crew_mas"><?php echo $kd_d_crew_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Penyampaian Undangan Pelaksanaan Training OM SPAN kepada Pemda (Upload Surat Undangan) </label></td>
                <td><select name="kd_d_und" id="kd_d_und" >
                        <?php if ($kd_d_und == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_und_mas" id="kd_d_und_mas"><?php echo $kd_d_und_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_und_mas" id="kd_d_und_mas"><?php echo $kd_d_und_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Download Materi Training OM SPAN (Slide dan Manual OM SPAN) </label></td>
                <td><select name="kd_d_book" id="kd_d_book" >
                        <?php if ($kd_d_book == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_book_mas" id="kd_d_book_mas"><?php echo $kd_d_book_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_book_tgl" id="kd_d_book_tgl" size="20" value="<?php echo $kd_d_book_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_book_mas" id="kd_d_book_mas"><?php echo $kd_d_book_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_book_tgl" id="kd_d_book_tgl" size="20" value="<?php echo $kd_d_book_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
		
        <div id="komponen3"><i class="icon-folder-open icon-white" id="label"></i>Pelaksanaan Training OM SPAN</div>
        <table width="100%" class="zebra">
            
            <tr>
                <td width="30%"><label>Kehadiran Panitia dan Narasumber (Upload Daftar Hadir Panitia dan Narasumber) </label></td>
                <td width="10%"><select name="kd_d_absen_crew" id="kd_d_absen_crew" >
                        <?php if ($kd_d_absen_crew == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_absen_crew_mas" id="kd_d_absen_crew_mas"><?php echo $kd_d_absen_crew_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_absen_crew_mas" id="kd_d_absen_crew_mas"><?php echo $kd_d_absen_crew_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Kehadiran Peserta (Upload Daftar Hadir Peserta) </label></td>
                <td><select name="kd_d_absen" id="kd_d_absen" >
                        <?php if ($kd_d_absen == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_absen_mas" id="kd_d_absen_mas"><?php echo $kd_d_absen_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_absen_mas" id="kd_d_absen_mas"><?php echo $kd_d_absen_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Dokumentasi Pelaksanaan Training (Upload Dokumentasi Berupa Foto Dalam Format *.RAR) </label></td>
                <td><select name="kd_d_doc" id="kd_d_doc">
                        <?php if ($kd_d_doc == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_doc_mas" id="kd_d_doc_mas"><?php echo $kd_d_doc_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_doc_mas" id="kd_d_doc_mas"><?php echo $kd_d_doc_mas; ?></textarea></td>
                            <td><input type="file" class="fileToUpload" name="fileToUpload" id="fileToUpload"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
    </table>
    <div id="komponen4"><i class="icon-folder-open icon-white" id="label"></i>Pasca Training OM SPAN Untuk Pemda</div>
        <table width="100%" class="zebra">
            <tr>
                <td width="30%"><label>Evaluasi Pelaksanaan Training OM SPAN </label></td>
                    <td width="10%"><select name="kd_d_eval" id="kd_d_eval">
                        <?php if ($kd_d_eval == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_eval_mas" id="kd_d_eval_mas"><?php echo $kd_d_eval_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_eval_tgl" id="kd_d_eval_tgl" size="20" value="<?php echo $kd_d_eval_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_eval_mas" id="kd_d_eval_mas"><?php echo $kd_d_eval_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_eval_tgl" id="kd_d_eval_tgl" size="20" value="<?php echo $kd_d_eval_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Penyaluran DAK dan Dana Desa Tahun 2017 </label></td>
                    <td><select name="kd_d_trans" id="kd_d_trans">
                        <?php if ($kd_d_trans == 1) {
                            ?>
                            <option value="1" selected>Selesai</option>
                            <option value="0" >Belum</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_trans_mas" id="kd_d_trans_mas"><?php echo $kd_d_trans_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_trans_tgl" id="kd_d_trans_tgl" size="20" value="<?php echo $kd_d_trans_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Selesai</option>
                            <option value="0" selected>Belum</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_trans_mas" id="kd_d_trans_mas"><?php echo $kd_d_trans_mas; ?></textarea></td>
                            <td><input type="text" class="kd_d_tgl" name="kd_d_trans_tgl" id="kd_d_trans_tgl" size="20" value="<?php echo $kd_d_trans_tgl; ?>" placeholder="Format : yyyy-mm-dd"></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
        
            <!--li><input class="normal" type="submit" onclick="" value="BATAL"></li-->
            <input class="biru" type="submit" name="add_aset" value="SUBMIT" onclick="return ceklvl1();">
        
</div> <!--end top-->

<script>
    $(function() {
        $("#kd_d_tgl").datepicker({dateFormat: "yy-mm-dd"
                    //buttonImage:'images/calendar.gif',
                    //buttonImageOnly: true,
                    //showOn: 'button'
        }).datepicker("setDate", new Date());
    });
    
    $(function() {
        $(".kd_d_tgl").datepicker({dateFormat: "yy-mm-dd"
                    //buttonImage:'images/calendar.gif',
                    //buttonImageOnly: true,
                    //showOn: 'button'
        }).datepicker();
    });
    
    all = <?php echo $all; ?> 
    all3 = <?php echo $all3; ?> 
    var donat = [
        {
            value: all3,
            color: "#E06666"
        },
        {
            value: all,
            color: "#70DB70"
        }


    ]

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(donat);
	
	$('#kd_d_room').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_room_mas').show();
    }else { 
        $('textarea' + '#kd_d_room_mas').hide();
    }
});

	$('#kd_d_jar').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_jar_mas').show();
    }else { 
        $('textarea' + '#kd_d_jar_mas').hide();
    }
});

	$('#kd_d_con').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_con_mas').show();
    }else { 
        $('textarea' + '#kd_d_con_mas').hide();
    }
});
	$('#kd_d_meet').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_meet_mas').show();
    }else { 
        $('textarea' + '#kd_d_meet_mas').hide();
    }
});
	$('#kd_d_crew').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_crew_mas').show();
    }else { 
        $('textarea' + '#kd_d_crew_mas').hide();
    }
});
	$('#kd_d_und').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_und_mas').show();
    }else { 
        $('textarea' + '#kd_d_und_mas').hide();
    }
});
	$('#kd_d_book').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_book_mas').show();
    }else { 
        $('textarea' + '#kd_d_book_mas').hide();
    }
});
	$('#kd_d_absen_crew').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_absen_crew_mas').show();
    }else { 
        $('textarea' + '#kd_d_absen_crew_mas').hide();
    }
});
	$('#kd_d_absen').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_absen_mas').show();
    }else { 
        $('textarea' + '#kd_d_absen_mas').hide();
    }
});
	$('#kd_d_doc').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_doc_mas').show();
    }else { 
        $('textarea' + '#kd_d_doc_mas').hide();
    }
});
	$('#kd_d_eval').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_eval_mas').show();
    }else { 
        $('textarea' + '#kd_d_eval_mas').hide();
    }
});
	$('#kd_d_trans').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_trans_mas').show();
    }else { 
        $('textarea' + '#kd_d_trans_mas').hide();
    }
});
	$('#kd_d_konversi1').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_konversi_mas1').show();
    }else { 
        $('textarea' + '#kd_d_konversi_mas1').hide();
    }
});
	$('#kd_d_saldo2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_saldo_mas2').show();
    }else { 
        $('textarea' + '#kd_d_saldo_mas2').hide();
    }
});
	$('#kd_d_retur2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_retur_mas2').show();
    }else { 
        $('textarea' + '#kd_d_retur_mas2').hide();
    }
});
	$('#kd_d_konversi2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_konversi_mas2').show();
    }else { 
        $('textarea' + '#kd_d_konversi_mas2').hide();
    }
});
	$('#kd_d_kontrak_tim2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_kontrak_tim_mas2').show();
    }else { 
        $('textarea' + '#kd_d_kontrak_tim_mas2').hide();
    }
});
	$('#kd_d_supplier_tim2').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_supplier_tim_mas2').show();
    }else { 
        $('textarea' + '#kd_d_supplier_tim_mas2').hide();
    }
});
	
</script>


