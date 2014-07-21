<?php
$id_team = $_SESSION ['id_team'];
$n = mysql_query("SELECT * FROM teams WHERE id_team='$id_team'");
$dn = mysql_fetch_array($n);
$score1 = $dn['score1'];
$score2 = $dn['score2'];
$score3 = $dn['score3'];
$score4 = $dn['score4'];
$score5 = $dn['score5'];

$tn = $score1 + $score2 + $score3 + $score4 + $score5;
mysql_query("UPDATE teams SET score='$tn', waktu=CURRENT_TIMESTAMP where id_team='$id_team'") or die(mysql_error());
?>
<center>
		<h3>Tabel Perolehan Poin Sementara</h3>
		</center>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Peringkat</th>
					<th>Nama Team</th>
					<th>Poin</th>
					<th>Waktu</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
					$query=mysql_query("SET @ranking=0;");
 					$query=mysql_query("SELECT @ranking:=@ranking+1 AS ranking, nama_team, score, waktu from teams order by score desc, waktu asc;");
 					while($data=mysql_fetch_array($query))
 					{
					?>
				<tr>
					<td><?php echo $data['ranking']; ?></td>
					<td><?php echo $data['nama_team']; ?></td>
					<td><?php echo $data['score']; ?></td>
					<td><?php echo $data['waktu']; ?></td>
				</tr>
				<?php
 					}
				?>
			</tbody>
		</table>