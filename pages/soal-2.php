<?php
		$query = mysql_query("SELECT * FROM jawaban");
		$data = mysql_fetch_array($query);
	?>
		<center>
		<h3>Input Jawaban</h3>
		<br>
		<h4><strong>Soal 2</strong></h4>
		<br>
		</center>
		<div>
			<p class="text-justify">
			Jawaban : belacan
			</p>
		</div>
		<br>
		
<form role="form" class="form-horizontal form-groups-bordered" action="lib/jawab.php?ly=2" method="POST">
	<div class="form-group">
		<label for="field-1" class="col-sm-2 control-label"><strong>Jawaban</strong> </label>	
			<div class="col-sm-5">
				<input type="text" name="jawaban1" class="form-control" id="field-1" placeholder="Jawaban">
			</div>
			<p><button class="btn btn-primary" type="submit" name="submit" value="Simpan">Kirim</button></p>
	</div>
	<?php
	if (!empty($_GET['xx'])) 
		{
			if ($_GET['xx'] == 1) 
				{
					echo '<div class="alert alert-danger">Jawaban Anda Salah</div>';
				}
		}
	?>
</form>
		