<?php
include '../setting/conf.php';
include '../setting/cek-login.php';

$ly = $_GET['ly'];
$jawaban1 = $_POST['jawaban1'];

$query = mysql_query("SELECT * FROM jawaban WHERE id_soal='$ly'");
$data = mysql_fetch_array($query);

$id_team = $_SESSION['id_team'];


$nilai = mysql_query("SELECT * FROM teams WHERE id_team='$id_team'");
$dnilai = mysql_fetch_array($nilai);



$jawaban = $data['jawaban'];
$nilai = $data['nilai'];


$passwordasli = $jawaban;
$passwordinput = $jawaban1;
$cocok = strcmp($passwordasli, $passwordinput);

if ($cocok != 0)
{
header('location:../main.php?0x=0x68/0x6f/0x6d/0x65&xx=1');
}
else
{

mysql_query("UPDATE teams SET score$ly='$nilai' where id_team='$id_team'") or die(mysql_error());

header('location:../main.php?0x=0x68/0x6f/0x6d/0x65');
}


?>