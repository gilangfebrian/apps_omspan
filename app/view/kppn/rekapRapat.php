<?php
	if (isset($this->doc)){
	$doc = $this->doc;
	} else {
	$doc = "absen_rapat";
	}
	?>
<div id="header">
    <div style="text-align: center">
        <h2>REKAP <?php 
		if ($doc == "absen_rapat"){ 
			echo "absen rapat";
		} elseif ($doc == "st_panitia"){
			echo "surat tugas panitia";
		} elseif ($doc == "und_peserta"){
			echo "undangan peserta";
		} elseif ($doc == "absen_panitia"){
			echo "absen panitia";
		} elseif ($doc == "absen_peserta"){
			echo "absen peserta";
		} elseif ($doc == "st_peserta"){
			echo "surat tugas peserta";
		} elseif ($doc == "dokumentasi"){
			echo "dokumentasi";
		} elseif ($doc == "lain_lain"){
			echo "lain-lain";
		} else {
			echo $doc;
		}
		?></h2><br>
    </div>
</div>
<div id="top">
	<br>
	<?php
	$no = 1;
	$dir    = 'C://xampp/htdocs/apps/upload';
	$tipe = array();
	if ($handle = opendir($dir)) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
            array_push($tipe,$entry);
        }
    }
    closedir($handle);
	}
	$subdir = 'C://xampp/htdocs/apps/upload/'. $doc;
?>




	<table width="100%" class="table-bordered zebra">
	<tr>
		<th>No</th>
		<th>Nama Instansi</th>
		<th>Tanggal Upload</th>
		<th>Download</th>
	</tr>
	<?php
	if ($handle = opendir($subdir)) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
	echo "<tr>";
	echo	"<td>".$no++."</td>";
	echo	"<td>".substr(substr($entry, strlen($doc)+1),0,-13)."</td>";
	echo	"<td>".substr(substr($entry, strlen($doc)+1),-12,2)."-".substr(substr($entry, strlen($doc)+1),-10,2)."-".substr(substr($entry, strlen($doc)+1),-8,4)."</td>";
	echo	"<td><a href=".URL . "upload/".$doc."/".str_replace(" ", "%20", $entry).">Download</a></td>";
	echo "</tr>";
        }
    }
    closedir($handle);
	}
	?>
	
	</table>
</div>
