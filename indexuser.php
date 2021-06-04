<!DOCTYPE html>
<?php
session_start();
$_SESSION['username']=$_GET['username'];

if(!isset($_SESSION['username'])){
    header ("location:logout.php");
}
if($_SESSION['level']!="user"){
    header ("location:logout.php");
}

?>

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>FUTSAL SPORT!!!</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">Futsal Sport</a></div>
								<div class="site-slogan">
								<?
								

								$cekuser = mysql_query("select * from user where username='$username'");
								$c = mysql_fetch_array($cekuser);
								echo "$username";
								?> 
							</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li class="active"><a href="#banner">Home</a></li>
												<li><a href="#about">About</a></li>
												<li><a href="t_harga.php">Harga Sewa</a></li>
												<li><a href="t_booking.php">Jadwal Sewa</a></li>
												<li><a href="#kontak">Pembayaran</a></li>
												<li class="dropdown">
       										     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      										     <span class="caret"></span></a>
        										<ul class="dropdown-menu">
         										 <li><a href="info_user.php">Profil</a></li>
         										 <li><a href="info_penyewaan.php">Data Sewa</a></li>
         										 <li><a href="logout.php">Keluar</a></li>
       											 </ul>
      											</li>

												<!--<li><a href="logout.php">Logout</a></li>-->
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							<h1 class="text-center">We Love <span>FUTSAL!!!</span></h1>
							<p class="lead text-center">Tidak ada kemenangan tanpa kerja keras dan semangat pantang menyerah.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About <span>Dafest Futsal</span></h1>
						<p class="lead text-center">One Team One Dream</p>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<img src="images/section-image-2.jpg" alt="">
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<p>Dafest futsal adalah tempat penyedia penyewaan lapangan futsal yang berdiri pada tahun 2015 yang berlokasi di jalan perintis kemerdekaan km18 Jl.parumpa daya</p><br>
								<p>Fasilitas yang disediakan Dafest Futsal : </p>
								<ul class="list-unstyled">
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> 2 Lapangan futsal</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Tempat Parkir Gratis </li>
								</ul>
							</div>
						</div>
							
		<!-- section end -->

					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		
		<!-- section end -->

			<!-- .footer start -->
			<!-- ================ -->

			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="kontak">Proses Pembayaran</h1>
					<p><h4>*Pembayaran Dilakukan dengan cara:</p>
					      <p>-mengirim screenshoot/gambar struk transfer ke rekening dibawah sesuai harga yang terdapat pada Data sewa</p>
					      <p>-Membayar Langsung ke Dafest Futsal</p>
					<p>*Batas Pembayaran 1 jam sebelum jadwal main yang anda booking, jika tidak maka kami akan menghapus data booking anda</p></h4>
					<div class="row">
						<div class="col-sm-6">
								<ul class="list-icons">
								    <li>Rekening BNI XXXXXX</li>
								    <li>Rekening BCA XXXXXX</li>							    
									<li><i class="fa fa-map-marker pr-10"></i> Makassar Sulawesi Selatan</li>
									<li><i class="fa fa-phone pr-10"></i> 089608582335</li>
									<li><i class="fa fa-envelope-o pr-10"></i> wahyuramadhan612@gmail.com</li>
								</ul>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/wukip?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
									<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- section end -->
	<!-- section start -->
			<!-- ================ -->
			<div class="translucent-bg blue">
				<div class="container">
					<div class="list-horizontal">
						<div class="row">
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-1.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-2.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-3.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-4.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-5.png" alt="client">
								</div>
							</div>
							<div class="col-xs-2">
								<div class="list-horizontal-item">
									<img src="images/client-6.png" alt="client">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- section end -->
		</div>
		<!-- section end -->

			<div class="translucent-bg blue">
				<div class="container">
					<div class="list-horizontal">
						<div class="row">
							
						</div>
					</div>
				</div>
			</div>

		</div>

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>