<?php
include('../setting/conf.php');

//tangkap data dari form
$id_team = $_POST['id_team'];
$user_team = $_POST['user_team'];
$pass_team = $_POST['pass_team'];
$nama_team = $_POST['nama_team'];
$instansi = $_POST['instansi'];
$nama_ketua = $_POST['nama_ketua'];
$telp_ketua = $_POST['telp_ketua'];
$email_ketua = $_POST['email_ketua'];
$alamat_ketua = $_POST['alamat_ketua'];
$nama_anggota = $_POST['nama_anggota'];
$telp_anggota = $_POST['telp_anggota'];
$email_anggota = $_POST['email_anggota'];
$alamat_anggota = $_POST['alamat_anggota'];

//update data di database sesuai id_konsul
$query = mysql_query("update teams set user_team='$user_team', pass_team='$pass_team', nama_team='$nama_team', instansi='$instansi', nama_ketua='$nama_ketua', telp_ketua='$telp_ketua', email_ketua='$email_ketua', alamat_ketua='$alamat_ketua', nama_anggota='$nama_anggota', telp_anggota='$telp_anggota', email_anggota='$email_anggota', alamat_anggota='$alamat_anggota' where id_team='$id_team'") or die(mysql_error());

if ($query) {
	header('location:../on.php?0x=0x61/0x64/0x6d/0x71/0x6h&kategori=umum');
}
?>