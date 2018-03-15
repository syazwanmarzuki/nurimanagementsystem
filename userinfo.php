<!DOCTYPE HTML>


<html>
	<head>
		<title>Generic - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />

	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Nuri Management Systen</strong> by MidWan</a>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>User Information</h1>
									</header>

									<span class="image main"><img src="images/nuri.png" alt="" /></span>

									<p><h2 align="center"><p class="large"><font color="black"><b>USER INFORMATION</b></p></h2>
										    <table border="1px" width="100%" color="black">
										      <tr>
										        <th><font color="black"><b>User ID</font></th>
										        <th><font color="black"><b>Username</font></th>
										        <th><font color="black"><b>Password</font></th>
										        <th><font color="black"><b>Name</font></th>
										        <th><font color="black"><b>Contact Number</font></th>
										        <th><font color="black"><b>Branch</font></th>
										        <th><font color="black"><b>Address</font></th>
										        <th><font color="black"><b>Email</font></th>
										        <th><font color="black"><b>Branch Phone No.</font></th>
										        <th><font color="black"><b>Edit</font></th>
										        <th><font color="black"><b>Delete</font></th>
										      </tr>

										      
										      <?php
										        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
										        mysql_select_db("first_db") or die("Cannot connect to database"); //connect to database
										        $query = mysql_query("Select * from users"); // SQL Query
										        while($row = mysql_fetch_array($query))
										        {
										          Print "<tr>";
										            Print '<td align="center"><font color="black">'. $row['id'] . "</font></td>";
										            Print '<td align="center"><font color="black">'. $row['username'] . "</td>";
										            Print '<td align="center"><font color="black">'. $row['password'] . "</td>";
										            Print '<td align="center"><font color="black">'. $row['name'] . "</font></td>";
										            Print '<td align="center"><font color="black">'. $row['num'] . "</font></td>";
										            Print '<td align="center"><font color="black">'. $row['branch'] . "</font></td>";
										            Print '<td align="center"><font color="black">'. $row['address'] . "</font></td>";
										            Print '<td align="center"><font color="black">'. $row['email'] . "</font></td>";
										            Print '<td align="center"><font color="black">'. $row['branchno'] . "</font></td>";
										            Print '<td align="center"><a href="edituser.php?id='. $row['id'] .'"><font color="black"><u>edit</u></font></a></td>';
										            Print '<td align="center"><a href="#" onclick="myFunction('.$row['id'].')"><font color="black"><u>delete</u></font></a></td>';
										          Print "</tr>";
										        }
										      ?>
										    </table>
									    <script>
									      function myFunction(id)
									      {
									      var r=confirm("Are you sure you want to delete this record?");
									      if (r==true)
									        {
									          window.location.assign("deleteuser.php?id=" + id);
									        }
									      }
									    </script>

								    </p>

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
										<li><a href="generic.php">User Information</a></li>
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
                                        </li>										<li>
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
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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