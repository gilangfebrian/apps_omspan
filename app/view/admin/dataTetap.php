<div id="top">
    <div id="form">
        <h2>DATA TETAP</h2></div>
    <div class="kolom3">
        <fieldset><legend><?php
                if (isset($this->d_ubah)) {
                    echo 'Ubah Data Tetap';
                } else {
                    echo 'Tambah Data tetap';
                }
                ?></legend>
            <div id="form-input"><div class="kiri">
                    <form method="POST" action="<?php
                    if (isset($this->d_ubah)) {
                        echo URL . 'dataTetap/updDataTetap';
                    } else {
                        $_SERVER['PHP_SELF'];
                    }
                    ?>">
                              <?php
                              if (isset($this->d_ubah)) {
                                  echo "<input type=hidden name='kd_d_tetap' value=" . $this->d_ubah->get_kd_d_tetap() . ">";
                              }

                              if (isset($this->error)) {
                                  echo "<div class=error>" . $this->error . "</div>";
                              }
                              ?>

                        <div id="wunit" class="error"></div>
                        <label>Unit</label><input type="text" name="kd_r_unit" id="kd_r_unit" size="8" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_kd_r_unit() : (isset($this->d_rekam) ? $this->d_rekam->get_kd_r_unit() : ''); ?>">
                        <div id="wfo1"  class="error"></div>
                        <label>FO 1</label><input type="text" name="d_tetap_fo1" id="d_tetap_fo1" size="50" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_d_tetap_fo1() : (isset($this->d_rekam) ? $this->d_rekam->get_d_tetap_fo1() : ''); ?>">
                        <div id="wtrainer" class="error"></div>
                        <label>Trainer</label><input type="text" name="d_tetap_trainer" id="d_tetap_trainer" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_d_tetap_trainer() : (isset($this->d_rekam) ? $this->d_rekam->get_d_tetap_trainer() : ''); ?>">
                        <div id="wpendamping" class="error"></div>
                        <label>Pendamping</label><input type="text" name="d_tetap_pendamping" id="d_tetap_pendamping" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_d_tetap_pendamping() : (isset($this->d_rekam) ? $this->d_rekam->get_d_tetap_pendamping() : ''); ?>">
                        <div id="wdsu" class="error"></div>
                        <label>Duta SPAN</label><input type="text" name="d_tetap_dsu" id="d_tetap_dsu" value="<?php echo isset($this->d_ubah) ? $this->d_ubah->get_d_tetap_dsu() : (isset($this->d_rekam) ? $this->d_rekam->get_d_tetap_dsu() : ''); ?>">
                        </select>
                        <ul class="inline tengah">
                            <li><input class="normal" type="submit" onclick="" value="BATAL"></li>
                            <li><input class="sukses" type="submit" name="<?php echo isset($this->d_ubah) ? 'upd_d_tetap' : 'add_d_tetap'; ?>" value="SIMPAN" onClick="return cek();"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="kolom4" id="table">
        <fieldset><legend>Data tetap</legend>
            <div id="table-title"></div>
            <div id="table-content">
                <table class="table-bordered zebra scroll">
                    <thead>
                    <th>No</th>
                    <th>Unit</th>
                    <th>FO 1</th>
                    <th>Trainer</th>
                    <th>Pendamping</th>
                    <th>Duta Span</th>
                    <th width="50">Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($this->data as $val) {
                            echo "<tr>";
                            echo "<td>$no</td>";
                            echo "<td>" . $val->get_kd_r_unit() . "</td>";
                            echo "<td>" . $val->get_d_tetap_fo1() . "</td>";
                            echo "<td>" . $val->get_d_tetap_trainer() . "</td>";
                            echo "<td>" . $val->get_d_tetap_pendamping() . "</td>";
                            echo "<td>" . $val->get_d_tetap_dsu() . "</td>";
                            echo "<td style=\"text-align: center\"><a href=" . URL . "dataTetap/delDataTetap/" . $val->get_kd_d_tetap() . " onclick=\"return del('" . $val->get_kd_r_unit() . "')\"><i class=\"icon-trash\"></i></a>
                        <a href=" . URL . "dataTetap/addDataTetap/" . $val->get_kd_d_tetap() . "><i class=\"icon-pencil\"></i></a></td>";
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
        $('#kd_r_unit').keyup(function() {
            if (document.getElementById('kd_r_unit').value != '') {
                $('#wunit').fadeOut(200);
            }
        })

        $('#d_tetap_fo1').keyup(function() {
            if (document.getElementById('d_tetap_fo1').value != '') {
                $('#wfo1').fadeOut(200);
            }
        })

        $('#d_tetap_trainer').keyup(function() {
            if (document.getElementById('d_tetap_trainer').value != '') {
                $('#wtrainer').fadeOut(200);
            }
        })

        $('#d_tetap_pendamping').keyup(function() {
            if (document.getElementById('d_tetap_pendamping').value != '') {
                $('#wpendamping').fadeOut(200);
            }
        })

        $('#d_tetap_dsu').keyup(function() {
            if (document.getElementById('d_tetap_dsu').value != '') {
                $('#wdsu').fadeOut(200);
            }
        })

    }

    function del(unit) {
        var text = "Yakin data Kantor " + unit + " akan dihapus?\npenghapusan akan mengakibatkan data kantor " + unit + " berantakan!";
        if (confirm(text)) {
            return true;
        } else {
            return false;
        }
    }

    function cek() {
        var kd_r_unit = document.getElementById('kd_r_unit').value;
        var d_tetap_fo1 = document.getElementById('d_tetap_fo1').value;
        var d_tetap_trainer = document.getElementById('d_tetap_trainer').value;
        var d_tetap_pendamping = document.getElementById('d_tetap_pendamping').value;
        var d_tetap_dsu = document.getElementById('d_tetap_dsu').value;
        var jml = 0;
        if (kd_r_unit == '') {
            var wunit = 'Unit harus diisi!';
            $('#wunit').fadeIn(0);
            $('#wunit').html(wunit);
            jml++;
        }

        if (d_tetap_fo1 == '') {
            var wfo1 = 'Nama FO 1 harus diisi!';
            $('#wfo1').fadeIn(0);
            $('#wfo1').html(wfo1);
            jml++;
        }

        if (d_tetap_trainer == '') {
            var wtrainer = 'Nama Trainer harus diisi!';
            $('#wtrainer').fadeIn(0);
            $('#wtrainer').html(wtrainer);
            jml++;
        }

        if (d_tetap_pendamping == '') {
            var wpendamping = 'Nama Pendamping harus diisi!';
            $('#wpendamping').fadeIn(0);
            $('#wpendamping').html(wpendamping);
            jml++;

        }

        if (d_tetap_dsu == '') {
            var wdsu = 'Nama Duta SPAN harus diisi!';
            $('#wdsu').fadeIn(0);
            $('#wdsu').html(wdsu);
            jml++;
        }

        if (jml > 0) {
            return false
        } else {
            return true;
        }

    }
</script>