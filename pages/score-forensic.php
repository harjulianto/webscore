<?php 
include "setting/conf.php"; 
?>
<div class="row">
	<div class="col-md-6">
		<center>
			<h4>Tabel Perolehan Skor Sesi Forensik Kategori Umum</h4>
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
					<th><?php echo $buff['score1']; ?></th>
					<th><?php echo $buff['score2']; ?></th>
					<th><?php echo $buff['score3']; ?></th>
					<th><?php echo $buff['score4']; ?></th>
					<th><?php echo $buff['score5']; ?></th>
					<th><?php echo $buff['score']; ?></th>
					<?php
            			}
        			?>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-6">
		<center>
			<h4>Tabel Perolehan Skor Sesi Forensik Kategori Mahasiswa</h4>
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
					<th><?php echo $buff['score1']; ?></th>
					<th><?php echo $buff['score2']; ?></th>
					<th><?php echo $buff['score3']; ?></th>
					<th><?php echo $buff['score4']; ?></th>
					<th><?php echo $buff['score5']; ?></th>
					<th><?php echo $buff['score']; ?></th>
					<?php
            			}
        			?>
				</tr>
			</tbody>
		</table>
	</div>
</div>