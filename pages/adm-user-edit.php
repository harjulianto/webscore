<?php 
include "setting/conf.php"; 
$id_user = $_GET['id_user'];

$query = mysql_query("select * from user where id_user='$id_user'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form action="lib/adm-update.php" method="POST">
	<input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="username" class="control-label">Username</label>
							
							<input type="text" class="form-control"  name="username" value="<?php echo $data['username']; ?>" >
						</div>	
						
					</div>
					
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							
							<input type="password" class="form-control" name="password" value="<?php echo $data['password']; ?>">
						</div>	
					
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12">
						
						<div class="form-group">
							<label for="nama" class="control-label">Nama Admin</label>
							
							<input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
						</div>	
						
					</div>
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="submit" name="submit" value="Simpan" class="btn btn-info">Update</button>
			</div>
		</div>
</form>