<?php
foreach ($this->data as $val) {
    ?>
    <form method="POST" action="
    <?php
    $_SERVER['PHP_SELF'];
    ?>
          ">
    </form><label class="isian">Tanggal</label><input type="text" name="kd_d_tgl" id="kd_d_tgl" size="20" value="<?php echo $val->get_kd_d_tgl(); ?>">
    <div id="top">


        <div id="komponen1"><i class="icon-list icon-white" id="label"></i>Infrastruktur</div>
        <table width="100%" class=" zebra">

            <!--baris pertama-->
            <tr>
                <td width="30%"><label>Pengetesan PC:</label></td>
                <td width="10%"><select>
                        <?php if ($val->get_kd_d_pc() == 1) {
                            ?>
                            <option value="1" selected>Ya</option>
                            <option value="0" >Tidak</option>
                        <?php } else {
                            ?>
                            <option value="1" >Ya</option>
                            <option value="0" selected>Tidak</option>
                            <?php
                        }
                        ?>
                    </select></td>
                <td width="50%" style="margin-left: 10px"><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"></textarea></td>
                <td width="10%"><div id="bundar" class="hijau"></div></td>
            </tr>
            <!--baris kedua-->
            <tr>
                <td><label>Pengetesan Printer Laser:</label></td>
                <td><select>
                        <option value=""> - Pilih -</option>
                        <option>Sukses</option>
                        <option>Gagal</option>
                    </select></td>
                <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"></textarea></td>
                <td><div id="bundar" class="merah"></div></td>
            </tr>
            <!--baris ketiga-->
            <tr>
                <td><label>Pengetesan PC:</label></td>

                <td><select>
                        <option value=""> - Pilih -</option>
                        <option>Sukses</option>
                        <option>Gagal</option>
                    </select></td>
                <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"></textarea></td>
                <td width="10%"><div id="bundar" class="hijau"></div></td>
            </tr>
        </table>

        <div id="komponen2"><i class="icon-folder-open icon-white" id="label"></i>Data</div>
        <table width="100%" class=" zebra">

            <!--baris keempat-->
            <tr>
                <td width="30%"><label>Kesiapan Data Supplier:</label></td>
                <td width="10%"><select>
                        <option value=""> - Pilih -</option>
                        <option>Sukses</option>
                        <option>Gagal</option>
                    </select></td>
                <td width="60%"><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"></textarea></td>
                <td width="10%"><div id="bundar" class="hijau"></div></td>
            </tr>
            <!--baris kelima-->
            <tr>
                <td><label>Kesiapan Data Kontrak:</label></td>
                <td><select>
                        <option value=""> - Pilih -</option>
                        <option>Sukses</option>
                        <option>Gagal</option>
                    </select></td>
                <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"></textarea></td>
                <td width="10%"><div id="bundar" class="hijau"></div></td>
            </tr>
            <!--baris keenam-->
            <tr>
                <td><label>Kesiapan Data Saldo Bank:</label></td>

                <td><select>
                        <option value=""> - Pilih -</option>
                        <option>Sukses</option>
                        <option>Gagal</option>
                    </select></td>
                <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"></textarea></td>
                <td width="10%"><div id="bundar" class="hijau"></div></td>
            </tr>
            <!--baris ketujuh-->
            <tr>
                <td><label>Kesiapan Data Retur:</label></td>

                <td><select>
                        <option value=""> - Pilih -</option>
                        <option>Sukses</option>
                        <option>Gagal</option>
                    </select></td>
                <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"></textarea></td>
                <td width="10%"><div id="bundar" class="hijau"></div></td>
            </tr>
            <!--baris ketujuh-->
            <tr>
                <td><label>Kesiapan Aplikasi Konversi dan Koneksi FTP:</label></td>

                <td><select>
                        <option value=""> - Pilih -</option>
                        <option>Sukses</option>
                        <option>Gagal</option>
                    </select></td>
                <td><textarea class="catatan" placeholder="Tambahkan keterangan/catatan disini" rows="3"></textarea></td>
                <td width="10%"><div id="bundar" class="merah"></div></td>
            </tr>
        </table>


    </div> <!--top-->
    <!--canvas id="canvas" height="400" width="400"></canvas-->
    </div> 
    <?php
}
?><!--wrapper-->
</body>
<script>
    var donat = [
        {
            value: 60,
            color: "#E06666"
        },
        {
            value: 40,
            color: "#70DB70"
        }


    ]

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(donat);
</script>