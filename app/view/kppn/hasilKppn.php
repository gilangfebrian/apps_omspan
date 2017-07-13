<h2>REKAP PERSIAPAN TRAINING MANDIRI KPPN (OM SPAN) DAK DANA DESA</h2>

<div id="top">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <?php
        $no = 1;
        ?>
        <table width="100%" class="table-bordered zebra">
            <thead>
                <tr >
                    <th rowspan="2" width="5%" >No</th>
                    <th rowspan="2" width="21%" style="border-right: 2px solid #7a7a7a">Kantor</th>
                    <th colspan="3" width="18%" style="border-right: 2px solid #7a7a7a">Infrastruktur</th>
                    <th colspan="4" width="30%" style="border-right: 2px solid #7a7a7a">Persiapan Training</th>
                    <th colspan="4" width="18%" style="border-right: 2px solid #7a7a7a">Pelaksanaan Training</th>
                    <th colspan="2" width="18%" style="border-right: 2px solid #7a7a7a">Pasca Training</th>
                    <th rowspan="2" width="8%">Update</th>
                    <th rowspan="2" width="8%">TOTAL</th>
                </tr>
                <tr>
                    <th width="6%">1</th>
                    <th width="6%">2</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">3</th>
                    <th width="6%">4</th>
                    <th width="6%">5</th>
                    <th width="6%">6</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">7</th>
                    <th width="6%">8</th>
                    <th width="6%">9</th>
                    <th width="6%">10</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">11</th>
                    <th width="6%">12</th>
                    <th width="6%" style="border-right: 2px solid #7a7a7a">13</th>
                </tr>
            </thead>
            <?php
            foreach ($this->data as $val) {
                if ($val->get_kd_d_user() >= 0) {
                    ?><tr style="text-align: center">
                        <td><?php echo $no++; ?></td>
                        <td style="text-align: left; border-right: 2px solid #7a7a7a"><?php echo $val->get_kd_d_kppn(); ?>
                        </td>
                        <td><?php
                            if ($val->get_kd_d_room() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_jar() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove' ></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_con() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_meet() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_crew() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_und() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_book() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_absen() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_absen_crew() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_st() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_doc() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_kd_d_eval() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style="border-right: 2px solid #7a7a7a"><?php
                            if ($val->get_kd_d_trans() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>                        
                        <td><?php
                            echo date("d/m/Y", strtotime($val->get_kd_d_waktu_isi()));
                            ?></td>
                        <td><?php
                            if (($val->get_kd_d_room() + $val->get_kd_d_jar() + $val->get_kd_d_con() + $val->get_kd_d_meet() + $val->get_kd_d_crew() + $val->get_kd_d_und() + $val->get_kd_d_book() + $val->get_kd_d_absen() + $val->get_kd_d_absen_crew() + $val->get_kd_d_st() + $val->get_kd_d_doc() + $val->get_kd_d_eval() + $val->get_kd_d_trans()) == 13) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<a class='tomboltdk'><icon class='icon-remove icon-white'></icon></a>";
                            }
                            ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </form>
</div>


