<!DOCTYPE html>
<html>
    <head>
        <title>.:Aplikasi Monitoring Training Mandiri KPPN:.</title>
        <script src="<?php echo URL; ?>public/js/Chart.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery-2.0.3.min.js"></script>
        <script src="<?php echo URL; ?>public/js/jquery-ui.js"></script>
        <script src="<?php echo URL; ?>public/js/myjs.js"></script>
        <script src="<?php echo URL; ?>public/js/teamdf-jquery-number/jquery.number.js"></script>
        <script src="<?php echo URL; ?>public/js/gaugejs/raphael.2.1.0.min.js"></script>
        <script src="<?php echo URL; ?>public/js/gaugejs/justgage.1.0.1.min.js"></script>
        <script src="<?php echo URL; ?>public/js/Chart.js"></script>
        <script src="<?php echo URL; ?>public/js/paging.js"></script>
        <link href="<?php echo URL; ?>public/js/jquery-ui-1.10.3/themes/base/jquery.ui.all.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/ernest.css" rel="stylesheet">
        <link href="<?php echo URL; ?>public/css/dialog.css" rel="stylesheet">

        <script type="text/javascript">
            $(function() {
                $('#datepicker').datepicker();
                $('#datepicker1').datepicker();
                $('#datepicker2').datepicker();
            });
        </script>
    </head>
    <header><img src="<?php echo URL; ?>public/img/span-putih.png" width="40px" height="48px"></header>
    <body>
        <div id="wrapper">
            <div id="menu">
                <ul>
                    <li class="nav"><a href="#"></a></li>
                    <li class="nav"><a href="#"></a></li>
                    <li class="nav"><a href="#"></a></li>
                    <?php
                    if (Session::get('role') == ADMIN) {
                        echo '<li class="subnav"><a href=' . URL . 'dataKppn/rekapKppn/>Rekap Monitoring</a>
                            <ul>
								<li><a href=' . URL . 'dataKppn/rekapKppn/I>Batch I</a></li>
								<li><a href=' . URL . 'dataKppn/rekapKppn/II>Batch II</a></li>
								<li><a href=' . URL . 'dataKppn/rekapKppn/III>Batch III</a></li>
							</ul>
						</li>';
						echo '<li class="subnav"><a href=' . URL . 'dataKppn/rekapMasalah/>Rekap Masalah</a>
                            <ul>
								<li><a href=' . URL . 'dataKppn/rekapMasalah/I>Batch I</a></li>
								<li><a href=' . URL . 'dataKppn/rekapMasalah/II>Batch II</a></li>
								<li><a href=' . URL . 'dataKppn/rekapMasalah/III>Batch III</a></li>
							</ul>
						</li>';
						echo '
                        <li class="subnav">
                        <a>Monitoring Upload</a>
                        <ul>
                            <li><a href=' . URL . 'dataKppn/rekapRapat/absen_rapat>Rekap Rapat Internal</a></li>
                            <li><a href=' . URL . 'dataKppn/rekapRapat/st_panitia>Rekap ST Panitia/Narasumber</a></li>
                            <li><a href=' . URL . 'dataKppn/rekapRapat/und_peserta>Rekap Undangan Training</a></li>
                            <li><a href=' . URL . 'dataKppn/rekapRapat/absen_panitia>Rekap Absen Panitia/Narsum</a></li>
                            <li><a href=' . URL . 'dataKppn/rekapRapat/absen_peserta>Rekap Absen Peserta</a></li>
                            <li><a href=' . URL . 'dataKppn/rekapRapat/st_peserta>Rekap ST Peserta</a></li>
                            <li><a href=' . URL . 'dataKppn/rekapRapat/dokumentasi>Rekap Dokumentasi</a></li>
                            <li><a href=' . URL . 'dataKppn/rekapRapat/lain_lain>Lain-lain</a></li>
                        </ul>
                        </li>';
                    }
                    if (Session::get('role') == KPPN) {
						if (Session::get('id_user') >= 1000 and Session::get('id_user') <= 40000){
							echo '<li class="nav"><a href=' . URL . 'dataKppn/formDAK>Form Monitoring</a></li>';
						} else {
							echo '<li class="nav"><a href=' . URL . 'dataKppn/formAset>Form Isian</a></li>';
						}
                        
                        ?>
                    <li class="subnav">
                        <a>Form Upload</a>
                        <ul>
						<?php
							if (Session::get('id_user') >= 40000){
							echo '<li class="nav"><a href=' . URL . 'dataKppn/upload/BA_IId><i>Upload Undangan</i></a></li>';
							echo '<li class="nav"><a href=' . URL . 'dataKppn/upload/checklist><i>Upload ST</i></a></li>';
						} else { ?>
                            <li><a href="<?php echo URL; ?>dataKppn/upload/absen_rapat"><i>Upload Absen Rapat Internal</i></a></li>
                            <li><a href="<?php echo URL; ?>dataKppn/upload/st_panitia"><i>Upload ST Panitia/Narasumber</i></a></li>
                            <li><a href="<?php echo URL; ?>dataKppn/upload/und_peserta"><i>Upload Undangan Training</i></a></li>
                            <li><a href="<?php echo URL; ?>dataKppn/upload/absen_panitia"><i>Upload Absen Panitia/Narsum</i></a></li>
							<li><a href="<?php echo URL; ?>dataKppn/upload/absen_peserta"><i>Upload Absen Peserta</i></a></li>
							<li><a href="<?php echo URL; ?>dataKppn/upload/st_peserta"><i>Upload ST Peserta</i></a></li>
                            <li><a href="<?php echo URL; ?>dataKppn/upload/dokumentasi"><i>Upload Dokumentasi</i></a></li>
                            <li><a href="<?php echo URL; ?>dataKppn/upload/lain_lain"><i>Lain-lain</i></a></li>
						<?php }?>
                        </ul>
                    </li>
                    <?php
                    }
                    if (Session::get('role') == KANWIL) {
                        echo '<li class="nav"><a href=' . URL . 'dataKppn/formIsian>Form Isian</a></li>';
                    }
                    ?>
                    <li class="subnav">
                        <a href="<?php echo URL; ?>dataKppn/lihatReferensiInfrastuktur">Materi Training</a>
                        <ul>
                            <!--li><a href="<?php echo URL; ?>dataKppn/lihatReferensiInfrastuktur"><i>Kriteria Sukses</i></a></li-->
							<li><a href="<?php echo URL; ?>dataKppn/PMK50"><i>PMK-50 Pengelolaan Transfer ke Daerah</i></a></li>
							<li><a href="<?php echo URL; ?>dataKppn/PER04"><i>Per-04 Petunjuk Teknis Penyaluran DAK Dandes</i></a></li>
							<li><a href="<?php echo URL; ?>dataKppn/linkmateri"><i>Materi OM SPAN</i></a></li>
							<li><a href="<?php echo URL; ?>dataKppn/linkmateri"><i>Video Tutorial OM SPAN</i></a></li>
							<li><a href="<?php echo URL; ?>dataKppn/linkmateri"><i>Materi Proses Bisnis</i></a></li>
							<!--li><a href="<?php echo URL; ?>dataKppn/unduhBA"><i>Unduh Berita Acara (file Word)</i></a></li-->
                            <!--li><a href="<?php echo URL; ?>dataKppn/lihatReferensiDataAwal"><i>Data Awal</i></a></li>
                            <li><a href="<?php echo URL; ?>dataKppn/lihatReferensiDataAwalTimSpan"><i>Data Awal Tim SPAN</i></a><--</li-->
                            
							
                        </ul>
                    </li>
                    <?php
                    if (Session::get('id_user') >= 1000) {
                        echo '<li class="nav"><a href=' . URL . 'dataKppn/lihatReferensiUser>User Training</a></li>';
                    }
                    ?>
                    <li>
                        <a href="<?php echo URL; ?>dataKppn/lihatReferensiBukuPanduan">Panduan Isi APPS</a>
                    </li>
                    <li class="nav">
                        <a href="<?php echo URL; ?>auth/logout">Logout</a>
                    </li>
                    <li class="nav" style="float: right; font-size: 70%">
                        <a style="color: #F2C45A ">Selamat datang,<?php echo Session::get('user') ?></a>
                    </li>
                </ul>
            </div>





