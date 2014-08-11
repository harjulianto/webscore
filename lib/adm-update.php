<?php
include('../setting/conf.php');

//tangkap data dari form
$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];


//update data di database sesuai id_konsul
$query = mysql_query("update user set username='$username', password='$password', nama='$nama' where id_user='$id_user'") or die(mysql_error());

if ($query) {
	header('location:../on.php?0x=0x61/0x64/0x6d/0x69/0x6f');
}
?>