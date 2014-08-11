<?php 
include "setting/conf.php"; 
$id_team = $_GET['id_team'];

$query = mysql_query("select * from teams where id_team='$id_team'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form action="lib/lap-ctf-update.php" method="POST">
	<input type="hidden" name="id_team" value="<?php echo $id_team; ?>" />
<div class="row">
	<div class="col-md-6">
		<div class="form-group">
			<label for="nama_team" class="control-label">Nama Tim</label>
			<input type="text" class="form-control"  name="nama_team" value="<?php echo $data['nama_team']; ?>" disabled>
		</div>
	</div>

	<div class="col-md-6">
		<div class="form-group">
			<label for="lap_ctf" class="control-label">Nilai</label>
			<input type="text" class="form-control"  name="lap_ctf" value="<?php echo $data['lap_ctf']; ?>">
		</div>
	</div>

	<div class="modal-footer">
		<button type="submit" name="submit" value="Simpan" class="btn btn-info">Insert</button>
	</div>
</div>
</form>