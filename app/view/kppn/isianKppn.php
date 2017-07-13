<?php
foreach ($this->data as $val) {
    $kd_d_tgl = $val->get_kd_d_tgl();
    $kd_d_pc = $val->get_kd_d_pc();
    $kd_d_pc_mas = $val->get_kd_d_pc_mas();
    $kd_d_laser = $val->get_kd_d_laser();
    $kd_d_laser_mas = $val->get_kd_d_laser_mas();
    $kd_d_dot = $val->get_kd_d_dot();
    $kd_d_dot_mas = $val->get_kd_d_dot_mas();
    $kd_d_supplier = $val->get_kd_d_supplier();
    $kd_d_supplier_mas = $val->get_kd_d_supplier_mas();
    $kd_d_kontrak = $val->get_kd_d_kontrak();
    $kd_d_kontrak_mas = $val->get_kd_d_kontrak_mas();
    $kd_d_saldo = $val->get_kd_d_saldo();
    $kd_d_saldo_mas = $val->get_kd_d_saldo_mas();
    $kd_d_retur = $val->get_kd_d_retur();
    $kd_d_retur_mas = $val->get_kd_d_retur_mas();
    $kd_d_konversi = $val->get_kd_d_konversi();
    $kd_d_konversi_mas = $val->get_kd_d_konversi_mas();
    $kd_d_supplier_tim = $val->get_kd_d_supplier_tim();
    $kd_d_supplier_tim_mas = $val->get_kd_d_supplier_tim_mas();
    $kd_d_kontrak_tim = $val->get_kd_d_kontrak_tim();
    $kd_d_kontrak_tim_mas = $val->get_kd_d_kontrak_tim_mas();
    $kd_d_user_id = $val->get_kd_d_user_id();
    $kd_d_user_id_mas = $val->get_kd_d_user_id_mas();
    
    $kd_d_saldo1 = $val->get_kd_d_saldo1();
    $kd_d_saldo_mas1 = $val->get_kd_d_saldo_mas1();
    $kd_d_retur1 = $val->get_kd_d_retur1();
    $kd_d_retur_mas1 = $val->get_kd_d_retur_mas1();
    $kd_d_konversi1 = $val->get_kd_d_konversi1();
    $kd_d_konversi_mas1 = $val->get_kd_d_konversi_mas1();
    
    
    $kd_d_saldo2 = $val->get_kd_d_saldo2();
    $kd_d_saldo_mas2 = $val->get_kd_d_saldo_mas2();
    $kd_d_retur2= $val->get_kd_d_retur2();
    $kd_d_retur_mas2 = $val->get_kd_d_retur_mas2();
    $kd_d_konversi2 = $val->get_kd_d_konversi2();
    $kd_d_konversi_mas2 = $val->get_kd_d_konversi_mas2();
    $kd_d_supplier_tim2 = $val->get_kd_d_supplier_tim2();
    $kd_d_supplier_tim_mas2 = $val->get_kd_d_supplier_tim_mas2();
    $kd_d_kontrak_tim2 = $val->get_kd_d_kontrak_tim2();
    $kd_d_kontrak_tim_mas2 = $val->get_kd_d_kontrak_tim_mas2();
    
    $all = $kd_d_pc+$kd_d_laser+$kd_d_dot+$kd_d_supplier+$kd_d_kontrak+$kd_d_saldo+$kd_d_retur+$kd_d_konversi+$kd_d_supplier_tim+$kd_d_kontrak_tim+$kd_d_user_id+$kd_d_saldo+$kd_d_retur+$kd_d_konversi+$kd_d_saldo+$kd_d_retur+$kd_d_konversi+$kd_d_supplier_tim+$kd_d_kontrak_tim;
    $all2 = 19;
    $all3 = $all2 -$all;
}
?>
<div id="header">
    <div id="kiri">
        <h2>FORM ISIAN <?php echo Session::get('user'); ?></h2>
    </div>
    <div id="kanan">
        <canvas id="canvas" height="70" width="70" style="padding-left: 10px"></canvas>
        <h2 style="margin-top: -10px; margin-right: 10px" ><?php echo $all ?>/<?php echo $all2 ?></h2>
    </div>
</div><form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<br><br><br><br><br><br>
<label class="isian" style="margin-left: 150px">Tanggal</label>
<input type="text" name="kd_d_tgl" id="kd_d_tgl" size="20" value="<?php echo $kd_d_tgl; ?>" placeholder="Format : yyyy-mm-dd">
<div id="top">
        <div id="komponen1"><i class="icon-list icon-white" id="label"></i>Infrastruktur</div><br>
        <input type=hidden name='kd_d_user' value="<?php echo Session::get('id_user'); ?>">
        <input type=hidden name='kd_d_input_by' value="<?php echo Session::get('id_user'); ?>">
        <table width="100%" class="zebra">
            <!--baris pertama-->
            <tr>
                <td width="30%"><label>Mengecek spesifikasi PC dan koneksi jaringan ke server SAKTI 
: </label></td>
                <td width="10%"><select name="kd_d_pc" id="kd_d_pc">
                        <?php if ($kd_d_pc == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_pc_mas" id="kd_d_pc_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_pc_mas" id="kd_d_pc_mas"><?php echo $kd_d_pc_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <!--baris kedua-->
            <tr>
                <td><label>Instalasi Aplikasi SAKTI pada PC User Pejabat dan Staf Pengelola Keuangan serta Operator SAIBA, SIMAK-BMN dan Persediaan ( memastikan terinstall Java, aplikasi SAKTI dan setting PC terkait aplikasi SAKTI) : </label></td>
                <td><select name="kd_d_laser" id="kd_d_laser" >
                        <?php if ($kd_d_laser == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_laser_mas" id="kd_d_laser_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_laser_mas" id="kd_d_laser_mas"><?php echo $kd_d_laser_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            
        </table>
        <div id="komponen2"><i class="icon-folder-open icon-white" id="label"></i>Persiapan Data Awal</div>
        <table width="100%" class="zebra">
            <!--baris pertama-->
            <tr>
                <td><label>Daftar Pejabat dan Staf Pengelola Keuangan (SK Pengelola Keuangan) dan Informasi terkait Pejabat dan Staf terkait (KTP, nomor HP dan email) : </label></td>

                <td><select name="kd_d_dot" id="kd_d_dot">
                        <?php if ($kd_d_dot == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_dot_mas" id="kd_d_dot_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>

                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_dot_mas" id="kd_d_dot_mas"><?php echo $kd_d_dot_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td width="30%"><label>Melengkapi data pejabat penandatangan dan pengelola keuangan pada aplikasi SAKTI
: </label></td>
                <td width="10%"><select name="kd_d_supplier" id="kd_d_supplier">
                        <?php if ($kd_d_supplier == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_supplier_mas" id="kd_d_supplier_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_supplier_mas" id="kd_d_supplier_mas"><?php echo $kd_d_supplier_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Menyiapkan hardcopy DIPA 2017 dan ADK DIPA RKA-KL 2017
: </label></td>
                <td><select name="kd_d_kontrak" id="kd_d_kontrak" >
                        <?php if ($kd_d_kontrak == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kontrak_mas" id="kd_d_kontrak_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kontrak_mas" id="kd_d_kontrak_mas"><?php echo $kd_d_kontrak_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
		
        <div id="komponen3"><i class="icon-folder-open icon-white" id="label"></i>Migrasi Data Awal</div>
        <table width="100%" class="zebra">
            
            <tr>
                <td><label>Migrasi ADK DIPA RKA-KL 2017 ke aplikasi SAKTI
: </label></td>
                <td><select name="kd_d_saldo" id="kd_d_saldo" >
                        <?php if ($kd_d_saldo == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_saldo_mas" id="kd_d_saldo_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_saldo_mas" id="kd_d_saldo_mas"><?php echo $kd_d_saldo_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Berita Acara Penyelesaian Migrasi ADK DIPA
: </label></td>
                <td><select name="kd_d_retur" id="kd_d_retur" >
                        <?php if ($kd_d_retur == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_retur_mas" id="kd_d_retur_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_retur_mas" id="kd_d_retur_mas"><?php echo $kd_d_retur_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Menyiapkan ADK migrasi data saldo akhir tahun 2015 (Aplikasi SAIBA, Persediaan dan Aset Tetap)
: </label></td>
                <td><select name="kd_d_konversi" id="kd_d_konversi">
                        <?php if ($kd_d_konversi == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_konversi_mas" id="kd_d_konversi_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_konversi_mas" id="kd_d_konversi_mas"><?php echo $kd_d_konversi_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td width="30%"><label>Migrasi ADK data saldo akhir tahun 2016 Aplikasi SAIBA, Persediaan dan Aset Tetap menjadi saldo awal 2017 
: </label></td>
                    <td><select name="kd_d_supplier_tim" id="kd_d_supplier_tim">
                        <?php if ($kd_d_supplier_tim == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_supplier_tim_mas" id="kd_d_supplier_tim_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_supplier_tim_mas" id="kd_d_supplier_tim_mas"><?php echo $kd_d_supplier_tim_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Migrasi ADK Seluruh Data Supplier
: </label></td>
                    <td><select name="kd_d_kontrak_tim" id="kd_d_kontrak_tim">
                        <?php if ($kd_d_kontrak_tim == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kontrak_tim_mas" id="kd_d_kontrak_tim_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kontrak_tim_mas" id="kd_d_kontrak_tim_mas"><?php echo $kd_d_kontrak_tim_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Membuat Berita Acara Migrasi (Saldo awal aset, saldo awal persediaan, saldo awal GLP dan Cut-Off Piloting) – sesuai PMK 223 lampiran V 
: </label></td>
                    <td><select name="kd_d_user_id" id="kd_d_user_id">
                        <?php if ($kd_d_user_id == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_user_id_mas" id="kd_d_user_id_mas"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_user_id_mas" id="kd_d_user_id_mas"><?php echo $kd_d_user_id_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
    <div id="komponen1"><i class="icon-list icon-white" id="label"></i>Migrasi Data Transaksi</div><br>
    <!--div id="komponen4"><i class="icon-folder-open icon-white" id="label"></i>Migrasi Data Transaski</div-->
        <table width="100%" class="zebra">
            
            <tr>
                <td><label>Menyiapkan data transaksi tahun berjalan 2017 (Kuitansi, kontrak, SPP, SPM dan SP2D)
: </label></td>
                <td><select name="kd_d_saldo1" id="kd_d_saldo1" >
                        <?php if ($kd_d_saldo1 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_saldo_mas1" id="kd_d_saldo_mas1"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_saldo_mas1" id="kd_d_saldo_mas1"><?php echo $kd_d_saldo_mas1; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Migrasi (Konversi) transaksi selama tahun 2017 (Kuitansi, kontrak, SPP, SPM dan SP2D), input secara manual ke aplikasi SAKTI 
: </label></td>
                <td><select name="kd_d_retur1" id="kd_d_retur1" >
                        <?php if ($kd_d_retur1 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_retur_mas1" id="kd_d_retur_mas1"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_retur_mas1" id="kd_d_retur_mas1"><?php echo $kd_d_retur_mas1; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Berita Acara Penyelesaian Migrasi Data Transaksi
: </label></td>
                <td><select name="kd_d_konversi1" id="kd_d_konversi1">
                        <?php if ($kd_d_konversi1 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_konversi_mas1" id="kd_d_konversi_mas1"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_konversi_mas1" id="kd_d_konversi_mas1"><?php echo $kd_d_konversi_mas1; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
		
        <div id="komponen2"><i class="icon-folder-open icon-white" id="label"></i>Penyiapan Transaksi Awal</div>
        <table width="100%" class="zebra">
            
            <tr>
                <td><label>Mendaftarkan satker sebagai user SPAN SMS
: </label></td>
                <td><select name="kd_d_saldo2" id="kd_d_saldo2" >
                        <?php if ($kd_d_saldo2 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_saldo_mas2" id="kd_d_saldo_mas2"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_saldo_mas2" id="kd_d_saldo_mas2"><?php echo $kd_d_saldo_mas2; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Mendaftarkan satker sebagai user Portal SPAN
: </label></td>
                <td><select name="kd_d_retur2" id="kd_d_retur2" >
                        <?php if ($kd_d_retur2 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_retur_mas2" id="kd_d_retur_mas2"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_retur_mas2" id="kd_d_retur_mas2"><?php echo $kd_d_retur_mas2; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Mendaftarkan ADK pejabat satker berkenaan pada KPPN sebagai BUN
: </label></td>
                <td><select name="kd_d_konversi2" id="kd_d_konversi2">
                        <?php if ($kd_d_konversi2 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_konversi_mas2" id="kd_d_konversi_mas2"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_konversi_mas2" id="kd_d_konversi_mas2"><?php echo $kd_d_konversi_mas2; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td width="30%"><label>Menyiapkan ADK dari aplikasi GPP terkait pembayaran belanja pegawai (51) baik berupa Gaji Induk, Gaji Susulan,dll 
: </label></td>
                    <td><select name="kd_d_supplier_tim2" id="kd_d_supplier_tim2">
                        <?php if ($kd_d_supplier_tim2 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_supplier_tim_mas2" id="kd_d_supplier_tim_mas2"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_supplier_tim_mas2" id="kd_d_supplier_tim_mas2"><?php echo $kd_d_supplier_tim_mas2; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Mengupload ADK dari aplikasi GPP ke aplikasi SAKTI terkait pembayaran belanja pegawai (51)
: </label></td>
                    <td><select name="kd_d_kontrak_tim2" id="kd_d_kontrak_tim2">
                        <?php if ($kd_d_kontrak_tim2 == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kontrak_tim_mas2" id="kd_d_kontrak_tim_mas2"></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option>
                            <td><textarea  class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kontrak_tim_mas2" id="kd_d_kontrak_tim_mas2"><?php echo $kd_d_kontrak_tim_mas2; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
        
            <!--li><input class="normal" type="submit" onclick="" value="BATAL"></li-->
            <input class="biru" type="submit" name="add_d_kppn" value="SUBMIT" onclick="return ceklvl1();">
        
</div> <!--end top-->

<script>
    $(function() {
        $("#kd_d_tgl").datepicker({dateFormat: "yy-mm-dd"
                    //buttonImage:'images/calendar.gif',
                    //buttonImageOnly: true,
                    //showOn: 'button'
        }).datepicker("setDate", new Date());
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
	
	$('#kd_d_pc').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_pc_mas').show();
    }else { 
        $('textarea' + '#kd_d_pc_mas').hide();
    }
});

	$('#kd_d_laser').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_laser_mas').show();
    }else { 
        $('textarea' + '#kd_d_laser_mas').hide();
    }
});

	$('#kd_d_dot').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_dot_mas').show();
    }else { 
        $('textarea' + '#kd_d_dot_mas').hide();
    }
});
	$('#kd_d_supplier').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_supplier_mas').show();
    }else { 
        $('textarea' + '#kd_d_supplier_mas').hide();
    }
});
	$('#kd_d_kontrak').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_kontrak_mas').show();
    }else { 
        $('textarea' + '#kd_d_kontrak_mas').hide();
    }
});
	$('#kd_d_saldo').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_saldo_mas').show();
    }else { 
        $('textarea' + '#kd_d_saldo_mas').hide();
    }
});
	$('#kd_d_retur').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_retur_mas').show();
    }else { 
        $('textarea' + '#kd_d_retur_mas').hide();
    }
});
	$('#kd_d_konversi').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_konversi_mas').show();
    }else { 
        $('textarea' + '#kd_d_konversi_mas').hide();
    }
});
	$('#kd_d_supplier_tim').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_supplier_tim_mas').show();
    }else { 
        $('textarea' + '#kd_d_supplier_tim_mas').hide();
    }
});
	$('#kd_d_kontrak_tim').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_kontrak_tim_mas').show();
    }else { 
        $('textarea' + '#kd_d_kontrak_tim_mas').hide();
    }
});
	$('#kd_d_saldo1').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_saldo_mas1').show();
    }else { 
        $('textarea' + '#kd_d_saldo_mas1').hide();
    }
});
	$('#kd_d_retur1').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_retur_mas1').show();
    }else { 
        $('textarea' + '#kd_d_retur_mas1').hide();
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


