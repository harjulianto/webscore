<?php
include('conf.php');

session_start();

//tangkap data dari form login
$user_team = $_POST['user_team'];
$pass_team = $_POST['pass_team'];

//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$user_team = mysql_real_escape_string($user_team);
$pass_team = mysql_real_escape_string($pass_team);




//cek data yang dikirim, apakah kosong atau tidak
if (empty($user_team) && empty($pass_team)) {
	//kalau username dan password kosong
	header('location:../login.php');
	break;
} else if (empty($user_team)) {
	//kalau username saja yang kosong
	header('location:../login.php');
	break;
} else if (empty($pass_team)) {
	//kalau password saja yang kosong
	header('location:../login.php');
	break;
}

$q = mysql_query("select * from teams where user_team='$user_team' and pass_team='$pass_team'");
$r=mysql_fetch_array($q);


if (mysql_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama username dengan isi nama user yang login
	$_SESSION['id_team'] = $r['id_team'];
	$_SESSION['user_team'] = $r['user_team'];
	$_SESSION['pass_team'] = $r['pass_team'];
	$_SESSION['nama_team'] = $r['nama_team'];
	$_SESSION['score'] = $r['score'];
	$_SESSION['score1'] = $r['score1'];
	$_SESSION['score2'] = $r['score2'];
	$_SESSION['score3'] = $r['score3'];
	$_SESSION['score4'] = $r['score4'];
	$_SESSION['score5'] = $r['score5'];
	
	//redirect ke halaman index
	header('location:../main.php?0x=0x68/0x6f/0x6d/0x65');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:../login.php');
}
?>