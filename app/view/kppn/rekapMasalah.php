<h2>REKAP MASALAH</h2>

<div id="top">
        <?php
        $no = 1;
        ?>
        <table width="95%" class="table-bordered zebra" style="margin-left: 20px">
            <thead>
                <tr>
                    <th width="2%" >No</th>
                    <th width="13%">Kantor</th>
                    <th width="17%">Infrastruktur</th>
                    <th width="17%">Persiapan Training</th>
                    <th width="17%">Pelaksanaan Training</th>
                    <th width="17%">Pasca Training</th>
                </tr>
            </thead>
            <?php
            foreach ($this->data as $val) {
                if ($val->get_kd_d_user() >= 1000) {
                    ?><tr>
                        <td style="text-align: right"><?php echo $no++; ?></td>
                        <td><?php echo $val->get_kd_d_kppn(); ?></td>
                        <td><?php 
							if ($val->get_kd_d_room_mas() != "" && $val->get_kd_d_room() != 1) { 
							echo "<b>Masalah 11: </b>"; echo $val->get_kd_d_room_mas(); echo "<br>"; }
							if ($val->get_kd_d_jar_mas() != "" && $val->get_kd_d_jar() != 1) { 
							echo "<b>Masalah 12: </b>"; echo $val->get_kd_d_jar_mas(); echo "<br>"; }
                            if ($val->get_kd_d_con_mas() != "" && $val->get_kd_d_con() != 1) { 
							echo "<b>Masalah 13: </b>"; echo $val->get_kd_d_con_mas(); echo "<br>"; }
							?> 
						</td>
                        <td><?php
							if ($val->get_kd_d_meet_mas() != "" && $val->get_kd_d_meet() != 1) { 
							echo "<b>Masalah 21: </b>"; echo $val->get_kd_d_meet_mas(); echo "<br>"; }
							if ($val->get_kd_d_crew_mas() != "" && $val->get_kd_d_crew() != 1) { 
							echo "<b>Masalah 22: </b>"; echo $val->get_kd_d_crew_mas(); echo "<br>"; }
							if ($val->get_kd_d_und_mas() != "" && $val->get_kd_d_und() != 1) { 
							echo "<b>Masalah 23: </b>"; echo $val->get_kd_d_und_mas(); echo "<br>"; }
                            if ($val->get_kd_d_book_mas() != "" && $val->get_kd_d_book() != 1) { 
							echo "<b>Masalah 24: </b>"; echo $val->get_kd_d_book_mas(); echo "<br>"; }
							
						?>
						</td>
                        <td><?php
							if ($val->get_kd_d_absen_mas() != "" && $val->get_kd_d_absen() != 1) { 
							echo "<b>Masalah 31: </b>"; echo $val->get_kd_d_absen_mas(); echo "<br>"; }
							if ($val->get_kd_d_absen_crew_mas() != "" && $val->get_kd_d_absen_crew() != 1) { 
							echo "<b>Masalah 32: </b>"; echo $val->get_kd_d_absen_crew_mas(); echo "<br>"; }
                            if ($val->get_kd_d_st_mas() != "" && $val->get_kd_d_st() != 1) { 
							echo "<b>Masalah 33: </b>"; echo $val->get_kd_d_st_mas(); echo "<br>"; }
							if ($val->get_kd_d_doc_mas() != "" && $val->get_kd_d_doc() != 1) { 
							echo "<b>Masalah 34: </b>"; echo $val->get_kd_d_doc_mas(); echo "<br>"; }
						?>
						</td>
                        <td><?php
							if ($val->get_kd_d_eval_mas() != "" && $val->get_kd_d_eval() != 1) { 
							echo "<b>Masalah 41: </b>"; echo $val->get_kd_d_eval_mas(); echo "<br>"; }
							if ($val->get_kd_d_trans_mas() != "" && $val->get_kd_d_trans() != 1) { 
							echo "<b>Masalah 42: </b>"; echo $val->get_kd_d_trans_mas(); echo "<br>"; }
						?>
						</td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
 
</div>


