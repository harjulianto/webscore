<header class="navbar navbar-fixed-top">
		<div class="navbar-inner">
		
			<!-- logo -->
			<div class="navbar-brand">
				<a href="index.html">
					<img src="assets/images/logo@2x.png" width="88" alt="" />
				</a>
			</div>
			
			
			<!-- main menu -->
						
			<ul class="navbar-nav">
				<li>
					<a href="main.php?0x=0x68/0x6f/0x6d/0x65">
						<i class="entypo-gauge"></i>
						<span>Home</span>
					</a>
				</li>
				
				<li>
					<a href="#">
						<i class="entypo-newspaper"></i>
						<span>Tools</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="entypo-upload"></i>
						<span>Upload Laporan</span>
					</a>
				</li>
			</ul>
						
			
			<!-- notifications and other links -->
			<ul class="nav navbar-right pull-right">
				<!-- raw links -->
				<li class="dropdown">
										<li>
						<a href="#">Welcome <?php echo $_SESSION['nama_team']; ?></a>
					</li>
									</li>
				
				<li class="sep"></li>
				
				<li>
					<a href="logout.php">
						Log Out <i class="entypo-logout right"></i>
					</a>
				</li>
				
				
				<!-- mobile only -->
				<li class="visible-xs">	
				
					<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
					<div class="horizontal-mobile-menu visible-xs">
						<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
							<i class="entypo-menu"></i>
						</a>
					</div>
					
				</li>
				
			</ul>
	
		</div>
		
	</header>