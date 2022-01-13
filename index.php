<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include 'admin/proses.php';
$do = new ClassMobil();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Rental mobil</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<div class="top-header navbar navbar-fixed-top" style="background:#4287f5;">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home" style="color:white;"></i></a></li>
			<!-- <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li> -->
				
		</ul>
		<?php
		session_start();
		if(empty($_SESSION['namamember'])){
		?>
		<script type="text/javascript">
		function validasi_input(form){
		if (form.username.value == "" && form.password.value== ""){
		alert("Username atau password masih kosong!");
		form.username.focus();
		return (false);
		}
		return (true);
		}
		</script>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" style="color:white;">Daftar</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" style="color:white;">/ Masuk</a></li>
        </ul>
        <?php
		}else{
		?>

<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" style="color:white;">Halo <?php echo"$_SESSION[nama]";?></a></li> 
			<li class="sigi"><a href="logout.php" style="color:white;">/ Keluar</a></li>
        </ul>
		<?php
		}
		?>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Rental Mobil<span></span></a>	
		</div>
		<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
            <a href="bus.php" class="buses active">Daftar Mobil</a>
        </div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">Aman &amp; Dan Terpecaya<br></div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s" style="background:#4287f5;">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default" style="background:#4287f5;">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1" style="background:#FFD700;">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="about.php" style="color:gold;"></a></li>
								<li><a href="privacy.php" style="color:gold;">Privasi</a></li>
								<li><a href="#" style="color:gold;">Syarat dan ketentuan </a>  </li>
								<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm ---->
<!--- banner ---->
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn; color: black;"> Rental Mobil - Sewa mobil Online</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2 style="text-align: center; padding: 5px;color:#1f8dd6;">Rental Mobil Online Dengan Harga Murah</h2>
		<div class="ban-top">
			<div class="bnr-left">
			<form method="POST" action="cari.php" onsubmit="return validasi_input(this)">
				<label class="inputLabel">Mobil</label>
				<select name="nama">
					<option value="pilih">-- pilih --</option>
								<?php
								foreach ($do->selectMobil() as $val) {
									echo "
									<option value='$val[nama]'>$val[nama]</option>";
								}
								?>
				</select>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="ban-bottom">
				<div class="bnr-left">
				<label class="inputLabel">Asal</label>
				<select name="asal">
				<option value="">-- pilih --</option>
								<?php
								foreach ($do->selectKota() as $val) {
									echo "<option value='$val[kota_asal]'>$val[kota_asal]</option>";
								}
								?>
							</select>
				</div>
				<div class="bnr-left">
				<label class="inputLabel">Tujuan</label>
				<select name="tujuan">
				<option value="">-- pilih --</option>
								<?php
								foreach ($do->selectKota() as $val) {
									echo "<option value='$val[kota_tujuan]'>$val[kota_tujuan]</option>";
								}
								?>
				</select>
				</div>
				<div class="clearfix"></div>
				<div class="sear">
				<button class="seabtn" name="cari" id="cari"> <i class="fa fa-search"></i> Cari Mobil</button>
				</div>
				</form>

		</div>
	</div>
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<img src="./images/l.png" alt="" style="height:150px;width:150px;">
		<h3 style="color:#006400;">Rental mobil murah</h3>
	</div>
	<div class="clearfix"></div>
</div>
<!--- /banner ---->
<!--- /routes ---->
<!--- footer-top ---->
<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3 style="color:#006400;">Kategori Mobil</h3>
				<ul>
				 <?php
			$row = $do->selectMerek();
			$no = 1;
			foreach ($row as $val) {

				echo "<li><a href='bus.php?id=$val[0]'>$val[1]</a></li>";
				$no++;
			}
			?>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3 style="color:#006400;">Perjalanan</h3>
				<ul>
			<?php
			$row = $do->selectKota();
			$no = 1;
			foreach ($row as $val) {
				echo "<li><a href='bus.php?kota=$val[0]'>$val[1] - $val[2]</a></li>";
				$no++;
			}
			?>
				</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		<div  style="list-style-type: none;margin-left: 45%;padding: 0;overflow: hidden;" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul style="list-style-type: none;">
				<li style="float:left;margin-left:15px;"><a class="facebook" href="#"><i class="fa fa-facebook-square" style="color:brown;"></i></a></li>
				<li style="float:left;margin-left:15px;"><a class="facebook" href="#"><i class="fa fa-twitter" style="color:brown;"></i></a></li>
				<li style="float:left;margin-left:15px;"><a class="facebook" href="#"><i class="fa fa-instagram" style="color:brown;"></i></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2020 Rental Mobil | Design by  <a href="http://w3layouts.com/" target="_blank">Muflika Rahmadani</a> </p>
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-right">
												<form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
													<h3>Buat akun Anda</h3>
													<input type="text" name="nama" placeholder="Masukan Nama lengkap anda">
													<input type="text" name="username" placeholder="Masukan Username anda">
													<input type="text" name="alamat" placeholder="Masukan Alamat anda">
													<input type="text" name="telepon" placeholder="Masukan Telepon anda">
													<input type="password" name="password" placeholder="Masukan Password anda">	
													<input type="text" name="noktp" placeholder="Masukan No KTP anda">	
													<input type="submit" name="daftar" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
										</div>
								</div>
							</section>
					</div>
				</div>
			</div>

<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
											<h3>Masuk Dengan Akun Anda</h3>
											<input type="text" name="username" placeholder="Masukan Username anda">
											<input type="password" name="password" placeholder="Masukan password anda">
											<input type="submit" value="SIGNIN" name="masuk">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->
<!-- write us -->
<!-- //write us -->
</body>
</html>