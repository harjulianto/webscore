<?php
session_start();

if (!empty($_SESSION['username'])) {
  header('location:on.php?0x=0x61/0x64/0x6d/0x69/0x6e');
}
?>

<?php include 'lib/header.php'; ?>
<body class="page-body login-page login-form-fall">


<div class="login-container">
		
	
	<div class="login-header login-caret">	
			<center>
			<a href="index.php" class="logo">
				<img src="assets/images/logo@2x.png" width="120" alt="" />
			</a>
			</center>
	</div>
		
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="POST" role="form" action="setting/adm-ot.php">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login" name="login" value="login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>
				
			</form>
				
			</div>
			
		</div>
		
	</div>
	
</div>


	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>