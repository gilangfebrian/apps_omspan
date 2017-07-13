<?php
foreach ($this->data as $val) {
    $kd_d_user = $val->get_kd_d_user();
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
    $all = $kd_d_supplier_tim+$kd_d_kontrak_tim+$kd_d_user_id;
    $all2 = 3;
    $all3 = $all2 -$all;
}
?>
<div id="header">
    <div id="kiri">
        <h2>FORM ISIAN KPPN</h2>
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
        <input type=hidden name='kd_d_user' value="<?php echo $kd_d_user; ?>">
        <input type=hidden name='kd_d_input_by' value="<?php echo Session::get('id_user'); ?>">
        <div id="komponen3"><i class="icon-folder-open icon-white" id="label"></i>Data Awal Tim SPAN (diisi oleh tim SPAN)</div>
        <table width="100%" class="zebra">
            <tr>
                <td width="30%"><label>Konfimasi Supplier: </label></td>
                    <td><select name="kd_d_supplier_tim" id="kd_d_supplier_tim">
                        <?php if ($kd_d_supplier_tim == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option></td>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_supplier_tim_mas" id="kd_d_supplier_tim_mas"><?php echo $kd_d_supplier_tim_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option></td>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_supplier_tim_mas" id="kd_d_supplier_tim_mas"><?php echo $kd_d_supplier_tim_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>Konfimasi Kontrak: </label></td>
                     <td><select name="kd_d_kontrak_tim" id="kd_d_kontrak_tim">
                        <?php if ($kd_d_kontrak_tim == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option></td>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kontrak_tim_mas" id="kd_d_kontrak_tim_mas"><?php echo $kd_d_kontrak_tim_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option></td>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_kontrak_tim_mas" id="kd_d_kontrak_tim_mas"><?php echo $kd_d_kontrak_tim_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
            <tr>
                <td><label>User ID/Password SPAN: </label></td>
                     <td><select name="kd_d_user_id" id="kd_d_user_id">
                        <?php if ($kd_d_user_id == 1) {
                            ?>
                            <option value="1" selected>Sukses</option>
                            <option value="0" >Tidak</option></td>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_user_id_mas" id="kd_d_user_id_mas"><?php echo $kd_d_user_id_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="hijau"></div></td>
                        <?php } else {
                            ?>
                            <option value="1" >Sukses</option>
                            <option value="0" selected>Tidak</option></td>
                            <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"name="kd_d_user_id_mas" id="kd_d_user_id_mas"><?php echo $kd_d_user_id_mas; ?></textarea></td>
                            <td width="10%"><div id="bundar" class="merah"></div></td>
                            <?php
                        }
                        ?>
                    </select></td>
            </tr>
        </table>
        <input type=hidden name='kd_d_pc' value="<?php echo $kd_d_pc ?>">
        <input type=hidden name='kd_d_pc_mas' value="<?php echo $kd_d_pc_mas ?>">
        <input type=hidden name='kd_d_laser' value="<?php echo $kd_d_laser ?>">
        <input type=hidden name='kd_d_laser_mas' value="<?php echo $kd_d_laser_mas ?>">
        <input type=hidden name='kd_d_dot' value="<?php echo $kd_d_dot ?>">
        <input type=hidden name='kd_d_dot_mas' value="<?php echo $kd_d_dot_mas ?>"> 
        <input type=hidden name='kd_d_supplier' value="<?php echo $kd_d_supplier ?>">
        <input type=hidden name='kd_d_supplier_mas' value="<?php echo $kd_d_supplier_mas ?>">
        <input type=hidden name='kd_d_kontrak' value="<?php echo $kd_d_kontrak ?>">
        <input type=hidden name='kd_d_kontrak_mas' value="<?php echo $kd_d_kontrak_mas ?>">
        <input type=hidden name='kd_d_saldo' value="<?php echo $kd_d_saldo ?>">
        <input type=hidden name='kd_d_saldo_mas' value="<?php echo $kd_d_saldo_mas ?>">
        <input type=hidden name='kd_d_retur' value="<?php echo $kd_d_retur ?>">
        <input type=hidden name='kd_d_retur_mas' value="<?php echo $kd_d_retur_mas ?>">
        <input type=hidden name='kd_d_konversi' value="<?php echo $kd_d_konversi ?>">
        <input type=hidden name='kd_d_konversi_mas' value="<?php echo $kd_d_konversi_mas ?>">

		<input class="biru" type="submit" name="add_d_kppn" value="SUBMIT" onclick="return ceklvl1();">
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
	$('#kd_d_kontrak_tim').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_kontrak_tim_mas').show();
    }else { 
        $('textarea' + '#kd_d_kontrak_tim_mas').hide();
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
	$('#kd_d_user_id').change(function() {
    opt = $(this).val();
    if (opt=="0") {
        $('textarea' + '#kd_d_user_id_mas').show();
    }else { 
        $('textarea' + '#kd_d_user_id_mas').hide();
    }
});
</script>