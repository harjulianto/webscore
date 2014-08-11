<?php
include('../setting/conf.php');

//tangkap data dari form
$id_team = $_POST['id_team'];
$lap_forensic = $_POST['lap_forensic'];


//update data di database sesuai id_konsul
$query = mysql_query("update teams set lap_forensic='$lap_forensic' where id_team='$id_team'") or die(mysql_error());

if ($query) {
	header('location:../on.php?0x=0x61/0x64/0x6e/0x73/0x6c');
}
?>