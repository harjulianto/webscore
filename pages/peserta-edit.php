<?php 
include "setting/conf.php"; 
$id_team = $_GET['id_team'];

$query = mysql_query("select * from teams where id_team='$id_team'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<center><h3>Modifikasi Data Tim <?php echo $data['nama_team']; ?></h3></center>
<form action="lib/peserta-update.php" method="POST">
	<input type="hidden" name="id_team" value="<?php echo $id_team; ?>" />
<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="user_team" class="control-label">Username</label>
							
							<input type="text" class="form-control"  name="user_team" value="<?php echo $data['user_team']; ?>" >
						</div>	
						
					</div>
					
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="pass_team" class="control-label">Password</label>
							
							<input type="password" class="form-control"  name="pass_team" value="<?php echo $data['pass_team']; ?>" >
						</div>	
					
					</div>
				</div>
<hr>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="nama_team" class="control-label">Nama Tim</label>
							
							<input type="text" class="form-control"  name="nama_team" value="<?php echo $data['nama_team']; ?>">
						</div>	
						
					</div>
					
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="kategori" class="control-label">Kategori</label>
							<input type="text" class="form-control" name="kategori" value="<?php echo $data['kategori']; ?>" disabled>
						</div>	
					
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="instansi" class="control-label">Instansi</label>
							
							<input type="text" class="form-control"  name="instansi" value="<?php echo $data['instansi']; ?>" >
						</div>	
						
					</div>
				</div>
				<hr>
				<h5>Biodata Ketua</h5>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="nama_ketua" class="control-label">Nama</label>
							
							<input type="text" class="form-control"  name="nama_ketua" value="<?php echo $data['nama_ketua']; ?>" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="telp_ketua" class="control-label">Telepon</label>
							
							<input type="text" class="form-control"  name="telp_ketua" value="<?php echo $data['telp_ketua']; ?>" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="email_ketua" class="control-label">E-Mail</label>
							
							<input type="text" class="form-control"  name="email_ketua" value="<?php echo $data['email_ketua']; ?>" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="alamat_ketua" class="control-label">Alamat</label>
							
							<textarea class="form-control autogrow" name="alamat_ketua" value="<?php echo $data['alamat_ketua']; ?>"></textarea>
						</div>	
						
					</div>
				</div>
				<hr>
				<h5>Biodata Anggota</h5>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="nama_anggota" class="control-label">Nama</label>
							
							<input type="text" class="form-control"  name="nama_anggota" value="<?php echo $data['nama_anggota']; ?>" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="telp_anggota" class="control-label">Telepon</label>
							
							<input type="text" class="form-control"  name="telp_anggota" value="<?php echo $data['telp_anggota']; ?>" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="email_anggota" class="control-label">E-Mail</label>
							
							<input type="text" class="form-control"  name="email_anggota" value="<?php echo $data['email_anggota']; ?>">
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="alamat_anggota" class="control-label">Alamat</label>
							
							<textarea class="form-control autogrow" name="alamat_anggota" value="<?php echo $data['alamat_anggota']; ?>"></textarea>
						</div>	
						
					</div>
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="submit" name="submit" value="Simpan" class="btn btn-info">Update</button>
			</div>
		</div>
</form>