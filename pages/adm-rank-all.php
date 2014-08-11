<?php 
include "setting/conf.php"; 
?>

<div class="row">
	<div class="col-md-6">
		<center>
			<h3>Tabel Perolehan Skor Kategori Umum</h3>
		</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Peringkat</th>
					<th>Nama Tim</th>
					<th>Skor Total</th>
					<th>Waktu</th>
				</tr>
			</thead>
			<tbody>
				<?php
					 $query=mysql_query("SET @ranking=0;");
           			 $query = mysql_query("select * from teams");
           			 $query=mysql_query("SELECT @ranking:=@ranking+1 AS ranking, nama_team, score, lap_forensic, waktu from teams where kategori='umum' order by score desc, waktu asc;");
           			 while ($buff = mysql_fetch_array($query)) {
        		?>
				<tr>
					<th><?php echo $buff['ranking']; ?></th>
					<th><?php echo $buff['nama_team']; ?></th>
					<th><?php echo ($buff['score']+$buff['lap_forensic']); ?></th>
					<th><?php echo $buff['waktu']; ?></th>
					<?php
            			}
        			?>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-6">
		<center>
			<h3>Tabel Perolehan Skor Kategori Mahasiswa</h3>
		</center>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Peringkat</th>
					<th>Nama Tim</th>
					<th>Skor Total</th>
					<th>Waktu</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>1</th>
					<th>Indonesian UnderTeam</th>
					<th>2120</th>
					<th>1200</th>
					<th>3320</th>
				</tr>
			</tbody>
		</table>
	</div>
</div>