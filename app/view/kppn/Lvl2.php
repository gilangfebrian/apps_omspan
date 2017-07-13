
<div id="top"><br><br>
<center><h2>KONDISI KPPN DI <?php
    foreach ($this->data_kanwil as $val_kanwil) {
        $nama_kanwil = $val_kanwil->get_kd_d_user();
        echo $nama_kanwil;
    }
    ?>
</h2></center><br><br>
    <?php
    $jml_sukses = 0;
    $jml_kppn = 0;
    ?>
                
    <!--tes coba-->
	<div id="barat">
		<table width="100%" class="zebra">
			<?php foreach ($this->data as $val) { ?>
			<tr>
				<td width="70%" style="text-align: right; padding-top: 20px; "><h3><?php
                echo '<a href=' . URL . 'dataKppn/formIsian/'.$val->get_kd_d_user().'>'.$val->get_kd_d_kppn().'</a>';
                ?></h3></td>
				<td width="30%"><?php
                $all = $val->get_kd_d_pc() + $val->get_kd_d_laser() + $val->get_kd_d_dot() + $val->get_kd_d_supplier() + $val->get_kd_d_kontrak() + $val->get_kd_d_saldo() + $val->get_kd_d_retur() + $val->get_kd_d_konversi() + $val->get_kd_d_supplier_tim() + $val->get_kd_d_kontrak_tim() + $val->get_kd_d_user_id();
                if ($all == 11) {
                    echo "<h2 height = '200' width = '200'><div id = 'bundar' class = 'hijau' ></div></center></h2>";
                    $jml_sukses++;
                    $jml_kppn++;
                } else {
                    echo "<h2 height = '200' width = '200'><div id = 'bundar' class = 'merah' ></div></center></h2>";
                    $jml_kppn++;
                }
                ?><!--h3 style="margin-top: -10px;"><?php echo $all ?>/11</h3></td-->
			</tr>
			<?php } ?>
		</table>
	</div>
	<div id="timur">
	  <div id="sidebar" class="level2">
		<h3>Persiapan Piloting SPAN di<br><?php echo $nama_kanwil; ?></h3>
			<canvas id="canvas" height="200" width="200" style="padding-left: 10px"></canvas>
            <center><h0><?php echo $jml_sukses; ?>/<?php echo $jml_kppn; ?></h0></center>
        
	  </div>
	</div>
	<!--tes coba-->
		<!--div class = "kolomw">
            <fieldset><legend><?php
                echo $val->get_kd_d_kppn();
                ?></legend>
                <?php
                $all = $val->get_kd_d_pc() + $val->get_kd_d_laser() + $val->get_kd_d_dot() + $val->get_kd_d_supplier() + $val->get_kd_d_kontrak() + $val->get_kd_d_saldo() + $val->get_kd_d_retur() + $val->get_kd_d_konversi() + $val->get_kd_d_supplier_tim() + $val->get_kd_d_kontrak_tim() + $val->get_kd_d_user_id();
                if ($all == 11) {
                    echo "<h2 height = '200' width = '200'><center>STATUS : <br> <div id = 'bundar' class = 'hijau' ></div></center></h2>";
                    $jml_sukses++;
                    $jml_kppn++;
                } else {
                    echo "<h2 height = '200' width = '200'><center>STATUS : <br> <div id = 'bundar' class = 'merah' ></div></center></h2>";
                    $jml_kppn++;
                }
                
                $jml_gagal = $jml_kppn - $jml_sukses;
                ?>
  
                <center><h2><?php echo $all ?>/11</h2></center>
            </fieldset>
        </div>

        <?php
    //}
    ?>
    <!--div class="kolomv">
        <fieldset><legend>Resume KPPN di <?php echo $nama_kanwil; ?></legend>
            <?php 
            if ($jml_sukses / $jml_kppn == 1) {
                echo "<h2 height='200' width='200'><center>STATUS : <br> <div id='bundar' class='hijau' ></div></center></h2>";
            } else {
                echo "<h2 height='200' width='200'><center>STATUS : <br> <div id='bundar' class='merah' ></div></center></h2>";
            }
            ?>
            <center><h0><?php echo $jml_sukses; ?>/<?php echo $jml_kppn; ?></h0></center>
        </fieldset>
    </div-->
</div>

<script>
    $(function() {
        $("#kd_d_tgl").datepicker({dateFormat: "dd-mm-yy"
                    //buttonImage:'images/calendar.gif',
                    //buttonImageOnly: true,
                    //showOn: 'button'
        });
    });
	var donat = [
	{
		value: <?php echo $jml_gagal ?>,
		color:"#E06666"
	},
	
	{
		value : <?php echo $jml_sukses ?>,
		color : "#70DB70"
	}
	]

	var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(donat);
</script>


