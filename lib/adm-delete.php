<?php
include('../setting/conf.php');
mysql_query("DELETE from user WHERE id_user='$_GET[id_user]'");
header('location:../on.php?0x=0x61/0x64/0x6d/0x69/0x6f');
?>