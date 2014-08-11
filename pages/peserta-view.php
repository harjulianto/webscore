<?php 
include "setting/conf.php"; 
$id_team = $_GET['id_team'];
$query = mysql_query("select * from teams where id_team='$id_team'");
while ($buff = mysql_fetch_array($query)) {
?>

<div class="profile-env">
	
	<header class="row">
		
		<div class="col-sm-2">
			
			<a href="#" class="profile-picture">
				<img src="assets/images/profile-picture.png" class="img-responsive img-circle" />
			</a>
			
		</div>
		
		<div class="col-sm-7">
			
			<ul class="profile-info-sections">
				<li>
					<div class="profile-name">
						<strong>
							<a href="#">Tim <?php echo $buff['nama_team']; ?></a>
							<a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
							<!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->						</strong>
						<span><a href="#">Ketua : <?php echo $buff['nama_ketua']; ?></a></span>
					</div>
				</li>
				
				<li>
					<div class="profile-stat">
						<h3><?php echo $buff['score']; ?></h3>
						<span><a href="#">Nilai Forensic</a></span>
					</div>
				</li>
				
				<li>
					<div class="profile-stat">
						<h3><?php echo $buff['scoret']; ?></h3>
						<span><a href="#">Nilai CTF</a></span>
					</div>
				</li>
			</ul>
			
		</div>
		
	</header>
	
	<section class="profile-info-tabs">
		
		<div class="row">
			
			<div class="col-sm-offset-2 col-sm-10">
				
				<ul class="user-details">
					<li>
						<a href="#">
							<i class="entypo-location"></i>
							Username : <?php echo $buff['user_team']; ?>
						</a>
					</li>
					
					<li>
						<a href="#">
							<i class="entypo-suitcase"></i>
							Password : <?php echo $buff['pass_team']; ?>
						</a>
					</li>

				</ul>
				
			</div>
			
		</div>
		
	</section>

	<div class="row">
		<div class="col-md-12">
			<h4>Profil Tim</h4>

			<div class="row">
				<div class="col-md-4">
					Nama Tim
				</div>
				<div class="col-md-8">
					: <strong> Tim <?php echo $buff['nama_team']; ?> </strong>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Instansi
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['instansi']; ?> </strong>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Kategori
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['kategori']; ?> </strong>
				</div>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h4>Profil Ketua</h4>

			<div class="row">
				<div class="col-md-4">
					Nama
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['nama_ketua']; ?> </strong>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Telepon
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['telp_ketua']; ?> </strong>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					E-mail
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['email_ketua']; ?> </strong>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Alamat
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['alamat_ketua']; ?> </strong>
				</div>
			</div>


		</div>
	</div>

<div class="row">
		<div class="col-md-12">
			<h4>Profil Anggota</h4>

			<div class="row">
				<div class="col-md-4">
					Nama
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['nama_anggota']; ?> </strong>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Telepon
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['telp_anggota']; ?> </strong>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					E-mail
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['email_anggota']; ?> </strong>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					Alamat
				</div>
				<div class="col-md-8">
					: <strong><?php echo $buff['alamat_anggota']; ?> </strong>
				</div>
			</div>


		</div>
	</div>
	
	
<?php
    }
?>