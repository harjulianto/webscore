<?php
session_start();

if (!empty($_SESSION['user_team'])) {
  header('location:main.php?0x=0x68/0x6f/0x6d/0x65');
}
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>
    <?php 
      include "setting/conf.php";
        $query = mysql_query("select * from setting");
      while ($buff = mysql_fetch_array($query)) 
        { echo $buff['event']; }
    ?> 
  </title>

  <link rel="stylesheet" href="assets/css/log-reset.css">

    <link rel="stylesheet" href="assets/css/log-style.css" media="screen" type="text/css" />

</head>

<body>

<div id="window" style="display:none;">
  <div class="page page-front">
    <div class="page-content">
      <form>
        <div class="input-row">
          <label class="label fadeIn">Username</label>
          <input id="username" type="text" data-fyll="pineapple" class="input fadeIn delay1"/>
        </div>
        <div class="input-row">
          <label class="label fadeIn delay2">Password</label>
          <input id="password" type="password" data-fyll="hackmeplease" class="input fadeIn delay3"/>
        </div>
        <div class="input-row perspective">
          <button id="submit" class="button load-btn fadeIn delay4"><span class="default"><i class="ion-arrow-right-b"></i>Login</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/fyll.js'></script>

  <script src="assets/js/log-index.js"></script>

</body>

</html>