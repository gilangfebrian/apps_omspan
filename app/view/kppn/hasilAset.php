<h2>REKAP MIGRASI ASET ULANG</h2>

<div id="top">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <?php
        $no = 1;
        ?>
        <table width="100%" class="table-bordered zebra">
            <thead>
                <tr >
                    <th>No</th>
                    <th>Kantor</th>
                    <th>Persiapan</th>
                    <th>Migrasi</th>
                    <th>Finalisasi</th>
                    <th>Konversi</th>
                    <th>Posting</th>
                    <th>Neraca<br>Percobaan</th>
					<th>Upload</th>
					<th>Keterangan</th>
                    <th>TOTAL</th>
                </tr>
        
            </thead>
            <?php
            foreach ($this->data as $val) {
                //if ($val->get_kd_d_user() >= 1000) {
                    ?><tr style="text-align: center">
                        <td><?php echo $no++; ?></td>
                        <td style = 'text-align: left'><?php echo $val->get_kd_d_kppn(); ?>
                        </td>
                        <td><?php
                            if ($val->get_persiapan() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_migrasi() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove' ></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_finalisasi() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_konversi() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_posting() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_nercob() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td><?php
                            if ($val->get_upload() == 1) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<icon class='icon-remove'></icon>";
                            }
                            ?></td>
                        <td style = 'text-align: left'><?php echo $val->get_keterangan(); ?></td>
                        
                        <td><?php
                            if (($val->get_persiapan() + $val->get_migrasi() + $val->get_finalisasi() + $val->get_konversi() + $val->get_posting() + $val->get_nercob() + $val->get_upload()) == 7) {
                                echo "<a class='tombolya'><icon class='icon-ok icon-white'></icon></a>";
                            } else {
                                echo "<a class='tomboltdk'><icon class='icon-remove icon-white'></icon></a>";
                            }
                            ?></td>
                    </tr>
                    <?php
                //}
            }
            ?>
        </table>
    </form>
</div>


