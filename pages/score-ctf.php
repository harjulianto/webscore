<?php 
include "setting/conf.php"; 
?>
<div class="row">
	<div class="col-md-6">
		<center>
			<h4>Tabel Perolehan Skor Sesi CTF Kategori Umum</h4>
		</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Tim</th>
					<th>Skor 1</th>
					<th>Skor 2</th>
					<th>Skor 3</th>
					<th>Skor 4</th>
					<th>Skor 5</th>
					<th>Skor Total</th>
				</tr>
			</thead>
			<tbody>
				<?php
           			 $query = mysql_query("select * from teams where kategori='umum'");
           			 while ($buff = mysql_fetch_array($query)) {
        		?>
				<tr>
					<th><?php echo $buff['nama_team']; ?></th>
					<th><?php echo $buff['score6']; ?></th>
					<th><?php echo $buff['score7']; ?></th>
					<th><?php echo $buff['score8']; ?></th>
					<th><?php echo $buff['score9']; ?></th>
					<th><?php echo $buff['score10']; ?></th>
					<th><?php echo $buff['scoret']; ?></th>
					<?php
            			}
        			?>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-6">
		<center>
			<h4>Tabel Perolehan Skor Sesi CTF Kategori Mahasiswa</h4>
		</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nama Tim</th>
					<th>Skor 1</th>
					<th>Skor 2</th>
					<th>Skor 3</th>
					<th>Skor 4</th>
					<th>Skor 5</th>
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
					<th><?php echo $buff['score6']; ?></th>
					<th><?php echo $buff['score7']; ?></th>
					<th><?php echo $buff['score8']; ?></th>
					<th><?php echo $buff['score9']; ?></th>
					<th><?php echo $buff['score10']; ?></th>
					<th><?php echo $buff['scoret']; ?></th>
					<?php
            			}
        			?>
				</tr>
			</tbody>
		</table>
	</div>
</div>