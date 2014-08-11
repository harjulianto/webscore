<form action="lib/adm-insert.php" method="POST">
<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="username" class="control-label">Username</label>
							
							<input type="text" class="form-control"  name="username" placeholder="username" >
						</div>	
						
					</div>
					
					<div class="col-md-6">
						
						<div class="form-group">
							<label for="password" class="control-label">Password</label>
							
							<input type="password" class="form-control" name="password" placeholder="password">
						</div>	
					
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12">
						
						<div class="form-group">
							<label for="nama" class="control-label">Nama Admin</label>
							
							<input type="text" class="form-control" name="nama" placeholder="Nama Admin">
						</div>	
						
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-5">
						
						<div class="form-group">
							<label for="status" class="control-label">Status</label>
							<select class="form-control" name="status">
								<option value="Administrator">Administrator</option>
								<option value="Pengawas">Pengawas</option>
								<option value="Juri">Juri</option>
								<option value="Guest">Guest</option>
							</select>
						</div>	
						
					</div>
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="submit" name="submit" value="Simpan" class="btn btn-info">Tambah</button>
			</div>
		</div>
</form>