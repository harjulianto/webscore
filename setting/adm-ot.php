<?php
include('conf.php');

session_start();

//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);




//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	header('location:../%20%20%20.php');
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	header('location:../%20%20%20.php');
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:../%20%20%20.php');
	break;
}

$q = mysql_query("select * from user where username='$username' and password='$password'");
$r=mysql_fetch_array($q);


if (mysql_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['username'] = $r['username'];
	$_SESSION['password'] = $r['password'];
	$_SESSION['nama'] = $r['nama'];
	$_SESSION['status'] = $r['status'];

	
	//redirect ke halaman index
	header('location:../on.php?0x=0x61/0x64/0x6d/0x69/0x6e');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:../%20%20%20.php');
}
?>