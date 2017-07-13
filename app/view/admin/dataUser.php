<div id="top">
    <div id="form">
        <h2>DATA USER</h2></div>
    <div class="kolom3">
        <fieldset><legend><?php
                if (isset($this->d_ubah)) {
                    echo 'Ubah Data User';
                } else {
                    echo 'Tambah Data User';
                }
                ?></legend>
            <div id="form-input"><div class="kiri">
                    <form method="POST" action="<?php
                    if (isset($this->d_ubah)) {
                        echo URL . 'dataUser/updDataUser';
                    } else {
                        $_SERVER['PHP_SELF'];
                    }
                    ?>">
                              <?php
                              if (isset($this->d_ubah)) {
                                  echo "<input type=hidden name='kd_d_user' value=" . $this->d_ubah->get_kd_d_user() . ">";
                              }

                              if (isset($this->error)) {
                                  echo "<div class=error>" . $this->error . "</div>";
                              }
                              ?>

                        <div id="wjenis" class="error"></div>
                        <label>Jenis</label>
                        <select id="kd_r_jenis" name="kd_r_jenis" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_kd_r_jenis() : (isset($this->d_rekam) ? $this->d_rekam->get_kd_r_jenis() : '-pilih-'); ?>" type="text">
                            <option value="">--Pilih--</option>
                            <option value="1">Admin</option>
                            <option value="2">KPPN</option>
                            <option value="3">Kanwil</option>
                            <option value="4">BA.999</option>
                            <option value="5">PKN</option>
                            <option value="6">APK</option>
                            <option value="7">SMI</option>
                            <option value="8">DJPU</option>
                            <option value="9">Lainya</option>
                        </select>
                        <div id="wunit" class="error"></div>
                        <label>Unit</label><input type="text" name="kd_r_unit" id="kd_r_unit" size="8" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_kd_r_unit() : (isset($this->d_rekam) ? $this->d_rekam->get_kd_r_unit() : ''); ?>">
                        <div id="wnama"  class="error"></div>
                        <label>Nama</label><input type="text" name="nama_user" id="nama_user" size="50" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_nama_user() : (isset($this->d_rekam) ? $this->d_rekam->get_nama_user() : ''); ?>">
                        <div id="wpass" class="error"></div>
                        <label>Pass</label><input type="password" name="pass_user" id="pass_user" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_pass_user() : (isset($this->d_rekam) ? $this->d_rekam->get_pass_user() : ''); ?>">
                        <div id="wpass2" class="error"></div>
                        <label>Ulangi Pass</label><input type="password" name="pass_user2" id="pass_user2" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_pass_user() : (isset($this->d_rekam) ? $this->d_rekam->get_pass_user() : ''); ?>">
                        </select>
                        <ul class="inline tengah">
                            <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                            <li><input class="sukses" type="submit" name="<?php echo isset($this->d_ubah) ? 'upd_d_user' : 'add_d_user'; ?>" value="SIMPAN" onClick="return cek();"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="kolom4" id="table">
        <fieldset><legend>Data User</legend>
            <div id="table-title"></div>
            <div id="table-content">
                <table class="table-bordered zebra scroll">
                    <thead>
                    <th >No</th>
                    <th width="15%">Level</th>
                    <th width="15%">Unit</th>
                    <th width="55%">Nama</th>
                    <th width="15%">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($this->data as $val) {
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>" . Wewenang::status_int_string($val->get_kd_r_jenis()) . "</td>";
                            echo "<td>" . $val->get_kd_r_unit() . "</td>";
                            echo "<td>" . $val->get_nama_user() . "</td>";
                            echo "<td style='text-align: center'><a href=" . URL . "dataUser/delDataUser/" . $val->get_kd_d_user() . " onclick=\"return del('" . $val->get_nama_user() . "')\"><i class=\"icon-trash\"></i></a>
                        <a href=" . URL . "dataUser/addDataUser/" . $val->get_kd_d_user() . "><i class=\"icon-pencil\"></i></a></td>";
                            echo "</tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $(function() {
        hideErrorId();
        hideWarning();

    });

    function hideErrorId() {
        $('.error').fadeOut(0);
    }

    function hideWarning() {
        $('#kd_r_jenis').keyup(function() {
            if (document.getElementById('kd_r_jenis').value != '') {
                $('#wjenis').fadeOut(200);
            }
        })

        $('#kd_r_unit').keyup(function() {
            if (document.getElementById('kd_r_unit').value != '') {
                $('#wunit').fadeOut(200);
            }
        })

        $('#nama_user').keyup(function() {
            if (document.getElementById('nama_user').value != '') {
                $('#wnama').fadeOut(200);
            }
        })

        $('#pass_user').keyup(function() {
            if (document.getElementById('pass_user').value != '') {
                $('#wpass').fadeOut(200);
            }
        })

        $('#pass_user2').keyup(function() {
            if (document.getElementById('pass_user2').value != '') {
                $('#wpass2').fadeOut(200);
            }
        })

    }

    function del(user) {
        var text = "Yakin data User " + user + " akan dihapus?\npenghapusan akan mengakibatkan data user " + user + " berantakan!";
        if (confirm(text)) {
            return true;
        } else {
            return false;
        }
    }

    function cek() {
        var kd_r_jenis = document.getElementById('kd_r_jenis').value;
        var kd_r_unit = document.getElementById('kd_r_unit').value;
        var nama_user = document.getElementById('nama_user').value;
        var pass_user = document.getElementById('pass_user').value;
        var pass_user2 = document.getElementById('pass_user2').value;
        var jml = 0;
        if (kd_r_jenis == '') {
            var wjenis = 'Jenis User harus diisi!';
            $('#wjenis').fadeIn(0);
            $('#wjenis').html(wjenis);
            jml++;
        }

        if (kd_r_unit == '') {
            var wunit = 'Unit harus diisi!';
            $('#wunit').fadeIn(0);
            $('#wunit').html(wunit);
            jml++;
        }

        if (nama_user == '') {
            var wnama = 'Nama User harus diisi!';
            $('#wnama').fadeIn(0);
            $('#wnama').html(wnama);
            jml++;
        }

        if (pass_user == '') {
            var wpass = 'Pass harus diisi!';
            $('#wpass').fadeIn(0);
            $('#wpass').html(wpass);
            jml++;
        }

        if (pass_user2 == '') {
            var wpass2 = 'Pass harus diisi!';
            $('#wpass2').fadeIn(0);
            $('#wpass2').html(wpass2);
            jml++;
        }

        if (pass_user != pass_user2) {
            var wpass2 = 'Pass tidak sama!';
            $('#wpass2').fadeIn(0);
            $('#wpass2').html(wpass2);
            jml++;
        }

        if (jml > 0) {
            return false
        } else {
            return true;
        }

    }
</script>