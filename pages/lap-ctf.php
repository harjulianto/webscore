<?php 
include "setting/conf.php"; 
?>
<div class="row">
	<div class="col-md-6">
		<center>
			<h4>Nilai Laporan Sesi CTF Kategori Umum</h4>
		</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Tim</th>
					<th>Nilai Laporan</th>
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
					<th><?php echo $buff['lap_ctf']; ?></th>
					<th>
						<a href="on.php?0x=0x61/0x64/0x6e/0x73/0x6f&id_team=<?php echo $buff['id_team']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-pencil"></i>
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
			<h4>Nilai Laporan Sesi CTF Kategori Mahasiswa</h4>
		</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Tim</th>
					<th>Nilai Laporan</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
           			 $query = mysql_query("select * from teams where kategori='mahasiswa'");
           			 while ($buff = mysql_fetch_array($query)) {
        		?>
				<tr>
					<th><?php echo $buff['nama_team']; ?></th>
					<th><?php echo $buff['lap_ctf']; ?></th>
					<th>
						<a href="on.php?0x=0x61/0x64/0x6e/0x73/0x6f&id_team=<?php echo $buff['id_team']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
						<i class="entypo-pencil"></i>
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
</div>