<h2>DATA USER (OM SPAN) TRAINING MANDIRI KPPN</h2>

<div id="top">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <?php
        $no = 1;
        ?>
        <table width="100%" class="table-bordered zebra">
            <thead>
                <tr >
                    <th rowspan="2" width="5%" >No</th>
                    <th rowspan="2" width="21%" style="border-right: 2px solid #7a7a7a">Satker</th>
                    <th colspan="1" width="18%" style="border-right: 2px solid #7a7a7a">User</th>
                    <th colspan="1" width="30%" style="border-right: 2px solid #7a7a7a">Password</th>
                    <th colspan="1" width="18%" style="border-right: 2px solid #7a7a7a">Kode Departemen</th>
                    <th colspan="1" width="18%" style="border-right: 2px solid #7a7a7a">Kode Unit</th>
                    <th rowspan="2" width="8%">Status</th>
                </tr>
            </thead>
            <?php
            foreach ($this->data as $val) {
                if ($val->get_kd_d_user() >= 0) {
                    ?><tr style="text-align: center">
                        <td><?php echo $no++; ?></td>
                        <td style="text-align: left; border-right: 2px solid #7a7a7a"><?php echo $val->get_kd_d_satker(); ?>
                        </td>
                        <td style="text-align: center; border-right: 2px solid #7a7a7a"><?php echo $val->get_kd_user(); ?>
                        </td>
                        <td style="text-align: center; border-right: 2px solid #7a7a7a"><?php echo $val->get_kd_pass(); ?>
                        </td>
                        <td style="text-align: center; border-right: 2px solid #7a7a7a"><?php echo $val->get_kd_dept(); ?>
                        </td>
                        <td style="text-align: center; border-right: 2px solid #7a7a7a"><?php echo $val->get_kd_unit(); ?>
                        </td>
                        <td><?php
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </form>
</div>


