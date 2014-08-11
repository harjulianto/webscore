<?php
include('../setting/conf.php');

$kondisi1 ='';
$jml_data = count($kondisi);
$kondisi_dipilih = $_POST['kondisi'];
for ($b=0; $b < count($_POST['kondisi']); $b++) { 
	$kondisi1=$kondisi1.$kondisi_dipilih[$b].',';
}

$kondisi_to_sql=substr(strrev($kondisi1), 1);

$simpan = "INSERT INTO user SET 	username='$_POST[username]',
									password='$_POST[password]',
									nama='$_POST[nama]',
									status='$_POST[status]'
									";

$simpan2 = mysql_query("INSERT INTO user VALUES ('$kondisi_to_sql')");

mysql_query($simpan);

header('location:../on.php?0x=0x61/0x64/0x6d/0x69/0x6f');

?>