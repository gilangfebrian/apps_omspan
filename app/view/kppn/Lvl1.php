<h2>PERSIAPAN PILOTING 7 KANWIL</h2>

<div id="top">
    
    <?php
    $no = 1;
    $nilaiall = array();
    $nilaisukses = array();
    $nilaigagal = array();
    $kppnall=0;
    $kppnsukses=0;
    foreach ($this->data_kanwil as $val) {
        $all = $val->get_kd_d_laser();
        $nilaiall[] = $all;
        $sukses = $val->get_kd_d_pc();
        $nilaisukses[] = $sukses;
        $gagal = $all - $sukses;
        $nilaigagal[] = $gagal;
        if ($all==$sukses){
            $kppnall++;
            $kppnsukses++;
        } else {
            $kppnall++;
        }
        ?>
    <div id="barata">    
		<div class="kolomt">
            <h2><a href="<?php URL ?>rekapKanwil/2000"><?php echo $val->get_kd_d_user() ?></a></h2>
            <center><canvas id="canvas<?php echo $no++; ?>" width="100px"></canvas></li>
                <h3><?php echo $sukses; ?> dari <?php echo $all; ?> SITE<br>SIAP PILOTING SPAN</h3><center>
                    </div></div>
                <?php } ?>
    <br><br><br><br><br>
	<div id="sidebar" class="level1">
        <center><canvas id="canvas" height="200" width="200"></canvas>
            <h0> <?php echo $kppnsukses; ?>/<?php echo $kppnall-$kppnsukses?> </h0></center>
        <h2><?php echo $kppnsukses; ?> dari <?php echo $kppnall-$kppnsukses?> KANWIL<br>SIAP PILOTING SPAN</h2>
    </div>

</div>

                <script>
                    var data = [
                        {
                            value: <?php echo $kppnall-$kppnsukses?>,
                            color: "#E06666"
                        },
                        {
                            value: <?php echo $kppnsukses?>,
                            color: "#70DB70"
                        }
                    ]
                    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(data);
                    var data = [
                        {
                            value: <?php echo $nilaigagal[0];?>,
                            color: "#E06666"
                        },
                        {
                            value: <?php echo $nilaisukses[0];?>,
                            color: "#70DB70"
                        }
                    ]
                    var myLine = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(data);
                    var data = [
                        {
                            value: <?php echo $nilaigagal[1];?>,
                            color: "#E06666"
                        },
                        {
                            value: <?php echo $nilaisukses[1];?>,
                            color: "#70DB70"
                        }
                    ]
                    var myLine = new Chart(document.getElementById("canvas2").getContext("2d")).Doughnut(data);
                    var data = [
                        {
                            value: <?php echo $nilaigagal[2];?>,
                            color: "#E06666"
                        },
                        {
                            value: <?php echo $nilaisukses[2];?>,
                            color: "#70DB70"
                        }
                    ]
                    var myLine = new Chart(document.getElementById("canvas3").getContext("2d")).Doughnut(data);
                    var data = [
                        {
                            value: <?php echo $nilaigagal[3];?>,
                            color: "#E06666"
                        },
                        {
                            value: <?php echo $nilaisukses[3];?>,
                            color: "#70DB70"
                        }
                    ]
                    var myLine = new Chart(document.getElementById("canvas4").getContext("2d")).Doughnut(data);
                    var data = [
                        {
                            value: <?php echo $nilaigagal[4];?>,
                            color: "#E06666"
                        },
                        {
                            value: <?php echo $nilaisukses[4];?>,
                            color: "#70DB70"
                        }
                    ]
                    var myLine = new Chart(document.getElementById("canvas5").getContext("2d")).Doughnut(data);
                    var data = [
                        {
                            value: <?php echo $nilaigagal[5];?>,
                            color: "#E06666"
                        },
                        {
                            value: <?php echo $nilaisukses[5];?>,
                            color: "#70DB70"
                        }
                    ]
                    var myLine = new Chart(document.getElementById("canvas6").getContext("2d")).Doughnut(data);
                    var data = [
                        {
                            value: <?php echo $nilaigagal[6];?>,
                            color: "#E06666"
                        },
                        {
                            value: <?php echo $nilaisukses[6];?>,
                            color: "#70DB70"
                        }
                    ]
                    var myLine = new Chart(document.getElementById("canvas7").getContext("2d")).Doughnut(data);
                </script>