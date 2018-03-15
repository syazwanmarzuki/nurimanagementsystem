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


		<?php
			  session_start(); 
			  if($_SESSION['sess_username']){ 
			  }
			  	else{
			    	header("location:index.php"); 
			  }

			  $user = $_SESSION['sess_username']; 
			  $id_exists = false;
  		?>
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
										<h1>Edit Information</h1>
									</header>


										 <h2>Home Page</h2>

    <h2 align="center">Currently Selected</h2>
    <table border="1px" width="100%">
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
      </tr>
      <?php
        if(!empty($_GET['id']))
        {
          $id = $_GET['id'];
          $_SESSION['id'] = $id;
          $id_exists = true;
          mysql_connect("localhost", "root","") or die(mysql_error()); 
          mysql_select_db("first_db") or die("Cannot connect to database"); 
          $query = mysql_query("Select * from users Where id='$id'"); 
          $count = mysql_num_rows($query);
          if($count > 0)
          {
            while($row = mysql_fetch_array($query))
            {
              Print "<tr>";
                Print '<td align="center">'. $row['id'] . "</td>";
                Print '<td align="center">'. $row['username'] . "</td>";
                Print '<td align="center">'. $row['password'] . "</td>";
                Print '<td align="center">'. $row['name'] . "</td>";
                Print '<td align="center">'. $row['num'] . "</td>";
                Print '<td align="center">'. $row['branch'] . "</td>";
                Print '<td align="center">'. $row['address'] . "</td>";
                Print '<td align="center">'. $row['email'] . "</td>";
                Print '<td align="center">'. $row['branchno'] . "</td>";
              Print "</tr>";
            }
          }
          else
          {
            $id_exists = false;
          }
        }
      ?>
    </table>
    <br/>
    <?php
    if($id_exists)
    { ?>



  <?php
          $id = $_GET['id'];
          $_SESSION['id'] = $id;
          $id_exists = true;
          mysql_connect("localhost", "root","") or die(mysql_error()); 
          mysql_select_db("first_db") or die("Cannot connect to database"); 
          $query = mysql_query("Select * from users Where id='$id'"); 

    $i=0;

    $rows = mysql_fetch_array($query);
    ?>



		    <form action="updateuser.php" method="POST">
		      Enter new Usename: <input type="text" name="username" value="<?php Print $rows['username'];?>"/><br/><br/>
		      Enter new password: <input type="text" name="password" value="<?php Print $rows['password'];?>"/><br/><br/>
		      Enter new Name: <input type="text" name="name" value="<?php Print $rows['name'];?>"/><br/><br/>
		      Enter new Contact No: <input type="text" name="num" value="<?php Print $rows['name'];?>"/><br/><br/>
		      Select New Branch:</br>
		      <select name="branch" value="<?php Print $rows['name'];?>">
								                  <option selected="yes">New Branch</option>
								                  <option>Skudai</option>
								                  <option>Pasir Gudang</option>
								                  <option>Bukit Indah</option>
								                  <option>Johor Bahru</option>
								                  <option>Setia Tropika</option>
								                  <option>Mutiara Rini</option>
								                  <option>Sri Putri</option>
								                  <option>Setia Indah</option>
								                  <option>Bandar Putra</option>
								                  <option>Taman Nusa Perintis</option>
								                  <option>Johor Jaya</option>
								                  <option>Pulai Perdana</option>
								                  <option>Taman Universiti</option>
								                  <option>Pelangi indah</option>
								                  <option>Pulai Jaya</option>
								                  <option>Nusa Bestari</option>
								                  <option>Damansara Alif</option>
								                  <option>Impian Emas</option>
								                  <option>Bukit Rinting</option>
								                  <option>Danga Bay</option>
								                  <option>Bukit Dahlia</option>
								                  <option>Permas Jaya</option>
								                  <option>Taman Perling</option>
							                	</select></br></br>
		      Enter new Address: <input type="text" name="address" value="<?php Print $rows['address'];?>"/></br><br/>
		      Enter new Email: <input type="text" name="email" value="<?php Print $rows['email'];?>"/></br><br/>
		      Enter new Branch Number: <input type="text" name="branchno" value="<?php Print $rows['branchno'];?>"/></br><br/>
		      <input type="submit" value="Update List" name="update1" />
		    </form>

	<?php

    }
    else
    {
      Print '<h2 align="center">There is no data to be edited.</h2>';
    }
    ?>







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


