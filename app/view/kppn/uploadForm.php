<div id="top">
        <h2>FORM UPLOAD<?php echo ' ' . $this->tipe_dokumen;?></h2><br>
		<p style='text-align: center'>Mohon upload Dokumen dengan lampirannya dalam satu file RAR. Pastikan besar file kurang dari 50 MB.<br>Jika file terlalu besar kami sarankan melakukan kompresi file.<br>Pastikan file berekstensi .rar</p>
</div>
<div id="top" style="margin-left: 375px; margin-top:50px;">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
	
    <label style="float: left; margin-top: 7px;">Pilih file RAR:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
	<?php
                if (isset($this->error)) {
                    echo "<p style='color:red; margin-left: 95px;'>" .$this->whyerror . "<br>" . $this->error . "<br></p>";
                } elseif(isset($this->ok)){
					echo "<p style='color:green; margin-left: 95px;'>" .$this->ok. "<br></p>";
				}
        ?>
    <input style="float: left; margin-left: 100px;" class="sukses" type="submit" value="Upload" name="submit">
	</div>
	
	
</form>
</div>


<script>
</script>


