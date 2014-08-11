<?php
include('../setting/conf.php');

$kondisi1 ='';
$jml_data = count($kondisi);
$kondisi_dipilih = $_POST['kondisi'];
for ($b=0; $b < count($_POST['kondisi']); $b++) { 
	$kondisi1=$kondisi1.$kondisi_dipilih[$b].',';
}

$kondisi_to_sql=substr(strrev($kondisi1), 1);

$simpan = "INSERT INTO teams SET 	nama_team='$_POST[nama_team]',
									kategori='$_POST[kategori]',
									instansi='$_POST[instansi]',
									nama_ketua='$_POST[nama_ketua]',
									telp_ketua='$_POST[telp_ketua]',
									email_ketua='$_POST[email_ketua]',
									alamat_ketua='$_POST[alamat_ketua]',
									nama_anggota='$_POST[nama_anggota]',
									telp_anggota='$_POST[telp_anggota]',
									email_anggota='$_POST[email_anggota]',
									alamat_anggota='$_POST[alamat_anggota]'
									";

$simpan2 = mysql_query("INSERT INTO teams VALUES ('$kondisi_to_sql')");

mysql_query($simpan);

header('location:../on.php?0x=0x61/0x64/0x6d/0x71/0x6h&kategori=umum');

?>