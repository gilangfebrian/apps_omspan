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
    $all = $kd_d_pc+$kd_d_laser+$kd_d_dot;
    $all2 = 3;
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
<input type="text" name="kd_d_tgl" id="kd_d_tgl" size="20" value="<?php echo $kd_d_tgl; ?>" placeholder="Format : dd/mm/yy ">
<div id="top">
        <div id="komponen1"><i class="icon-list icon-white" id="label"></i>Infrastruktur</div><br>
        <input type=hidden name='kd_d_user' value="<?php echo Session::get('id_user'); ?>">
        <input type=hidden name='kd_d_input_by' value="<?php echo Session::get('id_user'); ?>">
        <table width="100%" class="zebra">
            <!--baris pertama-->
            <tr>
                <td width="30%"><label>Pengetesan PC: </label></td>
                <td width="10%"><select name="kd_d_pc" id="kd_d_pc">
                        <?php if ($kd_d_pc == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_pc_mas" id="kd_d_pc_mas"><?php echo $kd_d_pc_mas; ?></textarea></td>
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
                <td><label>Pengetesan Printer Laser: </label></td>
                <td><select name="kd_d_laser" id="kd_d_laser" >
                        <?php if ($kd_d_laser == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_laser_mas" id="kd_d_laser_mas"><?php echo $kd_d_laser_mas; ?></textarea></td>
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
            <!--baris ketiga-->
            <tr>
                <td><label>Pengetesan Printer Dotmatrix: </label></td>

                <td><select name="kd_d_dot" id="kd_d_dot">
                        <?php if ($kd_d_dot == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_dot_mas" id="kd_d_dot_mas"><?php echo $kd_d_dot_mas; ?></textarea></td>
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
        </table>
        <input type=hidden name='kd_d_supplier' value="1">
        <input type=hidden name='kd_d_supplier_mas' value="">
        <input type=hidden name='kd_d_kontrak' value="1">
        <input type=hidden name='kd_d_kontrak_mas' value="">
        <input type=hidden name='kd_d_saldo' value="1">
        <input type=hidden name='kd_d_saldo_mas' value="">
        <input type=hidden name='kd_d_retur' value="1">
        <input type=hidden name='kd_d_retur_mas' value="">
        <input type=hidden name='kd_d_konversi' value="1">
        <input type=hidden name='kd_d_konversi_mas' value="">  
        <input type=hidden name='kd_d_supplier_tim' value="1">
        <input type=hidden name='kd_d_supplier_tim_mas' value="">
        <input type=hidden name='kd_d_kontrak_tim' value="1">
        <input type=hidden name='kd_d_kontrak_tim_mas' value="">
        <input type=hidden name='kd_d_user_id' value="1">
        <input type=hidden name='kd_d_user_id_mas' value="">      
        <ul class="inline">
            <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
            <li><input class="sukses" type="submit" name="add_d_kppn" value="SIMPAN" onclick="return ceklvl1();"></li>
        </ul>
</div> <!--end top-->

<script>
    $(function() {
        $("#kd_d_tgl").datepicker({dateFormat: "yy-mm-dd"
                    //buttonImage:'images/calendar.gif',
                    //buttonImageOnly: true,
                    //showOn: 'button'
        });
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
</script>


