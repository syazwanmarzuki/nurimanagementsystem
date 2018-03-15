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
									<a href="index1.php" class="logo"><strong>Developed</strong> by MidWan</a>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Student Information</h1>
									</header>



									<h2 align="center"><p class="large"><font color="black"><b>STUDENT'S INFORMATION</b></p></h2>
								    <table border="1px" width="100%" color="black">
								      <tr>
								        <button onclick="window.location.href='addstudent2.php'">Add Student</button></br></br>
								        <th><font color="black">Student ID</font></th>
								        <th><font color="black">Name</font></th>
								        <th><font color="black">Parents Name</font></th>
								        <th><font color="black">Contact Number</font></th>
								        <th><font color="black">Date Registered</font></th>
								        <th><font color="black">Nursery</font></th>
								        <th><font color="black">Branch</font></th>
								        <th><font color="black">Edit</font></th>
								        <th><font color="black">Delete</font></th>


								      </tr>
								      <?php
								        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
								        mysql_select_db("first_db") or die("Cannot connect to database"); //connect to database
								        $query = mysql_query("Select * from list"); // SQL Query
								        while($row = mysql_fetch_array($query))
								        {
								          Print "<tr>";
								            Print '<td align="center"><font color="black">'. $row['id'] . "</font></td>";
								            Print '<td align="center"><font color="black">'. $row['details'] . "</td>";
								            Print '<td align="center"><font color="black">'. $row['parents'] . "</font></td>";
								            Print '<td align="center"><font color="black">'. $row['contact'] . "</font></td>";
								            Print '<td align="center"><font color="black">'. $row['date_posted']. " </font></td>";
								            Print '<td align="center"><font color="black">'. $row['public']. "</font></td>";
								            Print '<td align="center"><font color="black">'. $row['branch']. "</font></td>";
								            Print '<td align="center"><a href="editstudent.php?id='. $row['id'] .'"><font color="black"><u>edit</u></font></a></td>';
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
								          window.location.assign("delete.php?id=" + id);
								        }
								      }
								    </script>







												<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

	

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="index2.php">Homepage</a></li>
										<li><a href="addstudent2.php">Add Student</a></li>										
										<li><a href="studentinfo2.php">Student Information</a></li>
										<li>
                      <span class="opener">Add Profit</span>
                      <ul>
                          <li><a href="addprofit.php">Monthly</a></li>
                          <li><a href="annualprofit.php">Annual</a></li>
                      </ul>
                    </li>
										<li>
                                            <span class="opener">Fees Record</span>
                                            <ul>
                                                <li><a href="bandarputrarecord2.php">Bandar Putra Branch</a></li>
                                                <li><a href="bukitindahrecord2.php">Bukit Indah Branch</a></li>
                                                <li><a href="johorbahrurecord2.php">Johor Bahru Branch</a></li>
                                                <li><a href="johorjayarecord2.php">Johor Jaya Branch</a></li>
                                                <li><a href="mutiararinirecord2.php">Mutiara Rini Branch</a></li>
                                                <li><a href="pasirgudangrecord2.php">Pasir Gudang Branch</a></li>
                                                <li><a href="pulaiperdanarecord2.php">Pulai Perdana Branch</a></li>
                                                <li><a href="setiatropikarecord2.php">Setia Tropika Branch</a></li>
                                                <li><a href="skudairecord2.php">Skudai Branch</a></li>
                                                <li><a href="sriputrirecord2.php">Sri Putri Branch</a></li>
                                                <li><a href="tamannusaperintis2.php">Taman Nusa Perintis Branch</a></li>
                                                <li><a href="tamanuniversitirecord2.php">Taman Universiti Branch</a></li>
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