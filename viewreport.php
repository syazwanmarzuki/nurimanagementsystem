<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elements - Editorial by HTML5 UP</title>
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


							<!-- Content -->
								<section>
									<header class="main">
										<h1>Report</h1>
									</header>




									<?php
 session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
<script>
function goBack() {
    window.history.back()
}
</script>
</head>
<body>

<h2 align="center"><p class="large"><font color="black"><b>Student's Fees Record</b></p></h2>
    <table border="1px" width="100%" color="black">
    	<tr>
      		<th><font color="black"><b>Name</font></th>
			<th><font color="black"><b>Email</font></th>
			<th><font color="black"><b>Report</b></font></th>
            <th><font color="black"><b>Delete</b></font></th>
		</tr>

		<?php

		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("first_db") or die("Cannot connect to database"); //connect to database
        $query = mysql_query("Select * from report"); // SQL Query
        while($row = mysql_fetch_array($query))
        	{
        		Print "<tr>";

        			Print '<td align="center"><font color="black">'. $row['name'] . "</td>";
        			Print '<td align="center"><font color="black">'. $row['email'] . "</td>";
        			Print '<td align="center"><font color="black">'. $row['message'] . "</td>";
        			Print '<td align="center"><a href="deletereport.php" onclick="myFunction('.$row['name'].')"><font color="black"><u>delete</u></font></a></td>';
        		Print "</tr>";
        	}

     	?>

            <script>
      function myFunction(id)
      {
      var r=confirm("Are you sure you want to delete this record?");
      if (r==true)
        {
          window.location.assign("delete.php?name=" + name);
        }
      }
    </script>

    </table>







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
										<li><a href="feesrecord.php">Fees Record</a></li>
										<li>
											<span class="opener">Dynamic Report</span>
											<ul>
												<li><a href="#">Monthly Profit</a></li>
												<li><a href="#">Annual Profit</a></li>
											</ul>
										</li>
										<li><a href="#">View Report</a></li>
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