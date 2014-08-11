<?php
include('../setting/conf.php');

//tangkap data dari form
$id_team = $_POST['id_team'];
$tot = $_POST['tot'];


//update data di database sesuai id_konsul
$query = mysql_query("update user set tot='$tot' where id_team='$id_team'") or die(mysql_error());

if ($query) {
	header('location:../on.php?0x=0x61/0x64/0x6e/0x73/0x6g');
}
?>