<center><h3>Tambah Peserta</h3></center>
<form action="lib/peserta-insert.php" method="POST">
<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="nama_team" class="control-label">Nama Tim</label>
							
							<input type="text" class="form-control"  name="nama_team" placeholder="nama team" >
						</div>	
						
					</div>
					
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="kategori" class="control-label">Kategori</label>
							<select class="form-control" name="kategori">
								<option value="umum">Umum</option>
								<option value="mahasiswa">Mahasiswa</option>
							</select>
						</div>	
					
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="instansi" class="control-label">Instansi</label>
							
							<input type="text" class="form-control"  name="instansi" placeholder="nama instansi" >
						</div>	
						
					</div>
				</div>
				<hr>
				<h5>Biodata Ketua</h5>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="nama_ketua" class="control-label">Nama</label>
							
							<input type="text" class="form-control"  name="nama_ketua" placeholder="nama ketua" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="telp_ketua" class="control-label">Telepon</label>
							
							<input type="text" class="form-control"  name="telp_ketua" placeholder="telepon ketua" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="email_ketua" class="control-label">E-Mail</label>
							
							<input type="text" class="form-control"  name="email_ketua" placeholder="email ketua" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="alamat_ketua" class="control-label">Alamat</label>
							
							<textarea class="form-control autogrow" name="alamat_ketua" placeholder="Alamat Ketua"></textarea>
						</div>	
						
					</div>
				</div>
				<hr>
				<h5>Biodata Anggota</h5>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="nama_anggota" class="control-label">Nama</label>
							
							<input type="text" class="form-control"  name="nama_anggota" placeholder="nama anggota" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="telp_anggota" class="control-label">Telepon</label>
							
							<input type="text" class="form-control"  name="telp_anggota" placeholder="telepon anggota" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="email_anggota" class="control-label">E-Mail</label>
							
							<input type="text" class="form-control"  name="email_anggota" placeholder="email anggota" >
						</div>	
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="alamat_anggota" class="control-label">Alamat</label>
							
							<textarea class="form-control autogrow" name="alamat_anggota" placeholder="Alamat Anggota"></textarea>
						</div>	
						
					</div>
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="submit" name="submit" value="Simpan" class="btn btn-info">Tambah</button>
			</div>
		</div>
</form>