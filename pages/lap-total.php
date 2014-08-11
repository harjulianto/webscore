<?php 
include "setting/conf.php"; 
?>
<div class="row">
	<div class="col-md-6">
		<center>
			<h4>Tabel Perolehan Skor Total Kategori Umum</h4>
		</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Tim</th>
					<th>Skor Forensic</th>
					<th>Skor lap Forensic</th>
					<th>Skor CTF</th>
					<th>Skor lap CTF</th>
					<th>Skor Total</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
           			 $query = mysql_query("select * from teams where kategori='umum'");
           			 while ($buff = mysql_fetch_array($query)) {
        		?>
				<tr>
					<th><?php echo $buff['nama_team']; ?></th>
					<th><?php echo $buff['score']; ?></th>
					<th><?php echo $buff['lap_forensic']; ?></th>
					<th><?php echo $buff['scoret']; ?></th>
					<th><?php echo $buff['lap_ctf']; ?></th>
					<th name="tot"><?php echo ($buff['score']+$buff['lap_forensic']+$buff['scoret']+$buff['lap_ctf']); ?></th>
					<th>
						<a href="lib/insert.php?id_team=<?php echo $buff['id_team']; ?>" class="btn btn-info btn-sm btn-icon icon-left">
						<i class="entypo-info"></i>
						Insert
				</a>
					</th>	
					<?php
            			}
        			?>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-6">
		<center>
			<h4>Tabel Perolehan Skor Total Kategori Mahasiswa</h4>
		</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Tim</th>
					<th>Skor Forensic</th>
					<th>Skor lap Forensic</th>
					<th>Skor CTF</th>
					<th>Skor lap CTF</th>
					<th>Skor Total</th>
				</tr>
			</thead>
			<tbody>
				<?php
           			 $query = mysql_query("select * from teams where kategori='mahasiswa'");
           			 while ($buff = mysql_fetch_array($query)) {
        		?>
				<tr>
					<th><?php echo $buff['nama_team']; ?></th>
					<th><?php echo $buff['score']; ?></th>
					<th><?php echo $buff['lap_forensic']; ?></th>
					<th><?php echo $buff['scoret']; ?></th>
					<th><?php echo $buff['lap_ctf']; ?></th>
					<th><?php echo ($buff['score']+$buff['lap_forensic']+$buff['scoret']+$buff['lap_ctf']); ?></th>
					<?php
            			}
        			?>
				</tr>
			</tbody>
		</table>
	</div>
</div>