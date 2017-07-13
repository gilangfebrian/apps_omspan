<div id="header">
    <div style="text-align: center">
        <h2>USER PASS ADMIN SAKTI</h2>
		<p style='color:red'>(Informasi ini hanya tersedia untuk instansi Piloting IId wilayah<br>Sulawesi Barat, Sulawesi Tenggara, Sulawesi Utara, Gorontalo, Maluku, Maluku Utara, Ambon, dan Jayapura)</p>
		<br>
    </div>
</div>
<div id="top" style="text-align: center">
  <?php 
	$sesi = Session::get('id_user');
	//echo Session::get('id_user');
	foreach ($this->data as $val){
		//echo $val->get_unit() .'<br>';
		if (Session::get('id_user') == $val->get_unit()){
		//echo $val->get_kd_satker() . "<br>";
		echo "<p>User: " . $val->get_user() . "<br>";
		echo "Pass: " . $val->get_pass() . "<br><br>Admin mohon mengakses SAKTI Menu Monitoring User Satker<br>untuk mengetahui user lainnya. Password dalam satu satker sama.</p>";
		}
	}
  ?>
</div>
