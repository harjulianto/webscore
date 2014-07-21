<?php
  	$id_team = $_SESSION ['id_team'];
  	$p = mysql_query("SELECT * FROM teams WHERE id_team='$id_team'");
	$dp = mysql_fetch_array($p);
	
	$batas = 10;
	$score1 = $dp['score1'];
	$score2 = $dp['score2'];
	$score3 = $dp['score3'];
	$score4 = $dp['score4'];
	$score5 = $dp['score5'];

	if ($score1 <= $batas) {
		include "pages/soal-1.php";
	} else {
		if ($score2 <= $batas) {
			include "pages/soal-2.php";
		} else {
			if ($score3 <= $batas) {
				include "pages/soal-3.php";
			} else {
				if ($score4 <= $batas) {
					include "pages/soal-4.php";
				} else {
					if ($score5 <= $batas) {
						include "pages/soal-5.php";
					} else {
						include "pages/congratz.php";
					}
					
				}
				
			}
			
		}
		
	}
	
?>