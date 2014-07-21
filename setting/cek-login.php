<?php 
session_start();

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['user_team']) || empty($_SESSION['user_team'])) {
	//redirect ke halaman login
	header('location:login.php');
}
?>