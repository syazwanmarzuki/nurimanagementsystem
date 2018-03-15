<!DOCTYPE HTML>
<?php 
  session_start(); ?>
<html>
	<head>
		<title>NURI MANAGEMENT SYSTEM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index1.php" class="logo"><strong>Developed</strong> by MidWan</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Hi <?php Print $_SESSION['sess_username']; ?></h1>
										</header>
										Welcome to Nuri Management System where you can fully utilize all the function in this system.If you have any problem regarding the system, do not hesitate to contact us in contact section.

									</div>
										<span class="image object">
                    <img src="images/1.jpg" alt="" />
									

								</section>


							

						</div>
					</div>

												<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">



							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index1.php">Homepage</a></li>
										<li><a href="userinfo.php">User Information</a></li>
										<li><a href="addstudent.php">Add Student</a></li>										
										<li><a href="studentinfo.php">Student Information</a></li>
										<li>
											<span class="opener">Fees Record</span>
											<ul>
												<li><a href="bandarputrarecord.php">Bandar Putra Branch</a></li>
												<li><a href="bukitindahrecord.php">Bukit Indah Branch</a></li>
												<li><a href="johorbahrurecord.php">Johor Bahru Branch</a></li>
												<li><a href="johorjayarecord.php">Johor Jaya Branch</a></li>
												<li><a href="mutiararinirecord.php">Mutiara Rini Branch</a></li>
												<li><a href="pasirgudangrecord.php">Pasir Gudang Branch</a></li>
												<li><a href="pulaiperdanarecord.php">Pulai Perdana Branch</a></li>
												<li><a href="setiatropikarecord.php">Setia Tropika Branch</a></li>
												<li><a href="skudairecord.php">Skudai Branch</a></li>
												<li><a href="sriputrirecord.php">Sri Putri Branch</a></li>
												<li><a href="tamannusaperintis.php">Taman Nusa Perintis Branch</a></li>
												<li><a href="tamanuniversitirecord.php">Taman Universiti Branch</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Dynamic Report</span>
											<ul>
												<li><a href="bargraf.php">Monthly Profit</a></li>
												<li><a href="annual.php">Annual Profit</a></li>
											</ul>
										</li>
										<li><a href="logout.php">Log Out</a></li>

									</ul>
								</nav>


						<!-- Section -->
								<section>
									<header class="major">
										<h2>Get in touch</h2>
									</header>
									<p>Any inquiries please contact the moderator through the list of contact option below:</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">S.Aizad93@gmail.com</a></li>
										<li class="fa-phone">+6 016 221 9858</li>
										<li class="fa-facebook"><a href="https://web.facebook.com/syazwan.aizad?ref=bookmarks">Facebook</a></li>
									</ul>
								</section>




							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Developed by MidWan. All rights reserved. </p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>