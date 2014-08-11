<?php
include('../setting/conf.php');

//tangkap data dari form
$id_team = $_POST['id_team'];
$lap_ctf = $_POST['lap_ctf'];


//update data di database sesuai id_konsul
$query = mysql_query("update teams set lap_ctf='$lap_ctf' where id_team='$id_team'") or die(mysql_error());

if ($query) {
	header('location:../on.php?0x=0x61/0x64/0x6e/0x73/0x6e');
}
?>