<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />


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
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Edit Information</h1>
									</header>




									<p>Hello <?php Print "$user"?>!</p>
									<button onclick="window.location.href='studentinfo.php'">Back</button></br></br>
									<h2 align="center">Currently Selected</h2>
									<table border="1px" width="100%">
									<tr>
										<th align="center">Id</th>
										<th>Student's Name</th>
										<th>Parents Name</th>
										<th>Contact Number</th>
										<th>Date Registered</th>
										<th>Time Edited</th>
										<th>Branch</th>
										<th>Nursery Included</th>

									</tr>
												      <?php
												        if(!empty($_GET['id']))
												        {
													        $id = $_GET['id'];
													        $_SESSION['id'] = $id;
													        $id_exists = true;
													        mysql_connect("localhost", "root","") or die(mysql_error()); 
													        mysql_select_db("first_db") or die("Cannot connect to database"); 
													        $query = mysql_query("Select * from list Where id='$id'"); 
													        $count = mysql_num_rows($query);
													        if($count > 0)
													        {

												            	while($row = mysql_fetch_array($query))
												            	{
												              		Print "<tr>";
												                	Print '<td>'. $row['id'] . "</td>";
												                	Print '<td>'. $row['details'] . "</td>";
												                	Print '<td>'. $row['parents'] . "</td>";
												                	Print '<td>'. $row['contact'] . "</td>";
												                	Print '<td>'. $row['date_posted']. " || ". $row['time_posted']."</td>";
													                Print '<td>'. $row['date_edited']. "  ". $row['time_edited']. "</td>";
													                Print '<td>'. $row['branch'] . "</td>";
													                Print '<td>'. $row['public']. "</td>";
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
												          $query = mysql_query("Select * from list Where id='$id'"); 

												    $i=0;

												    $rows = mysql_fetch_array($query);
												    ?>


												    <form action="editstudent.php" method="POST">
												      Enter new Name:<input type="text" name="details" value="<?php Print $rows['details'];?>"/><br/></br>
												      Enter new Parent's Name: <input type="text" name="parents" value="<?php echo $rows['parents'];?>" /> <br/></br>
												      Enter new Contact Number: <input type="text" name="contact" value="<?php echo $rows['contact'];?>" /><br/></br>
												       Old Branch:<input type="text" name="branch" value="<?php Print $rows['branch'];?>"/><br/></br>
												    	<select name="branch">
											                  <option selected="yes">Select New Branch</option>
											                  <option>Bandar Putra</option>
											                  <option>Bukit Dahlia</option>
											                  <option>Bukit Indah</option>
											                  <option>Bukit Rinting</option>
											                  <option>Damansara Alif</option>
											                  <option>Danga Bay</option>
											                  <option>Impian Emas</option>
											                  <option>Johor Bahru</option>
											                  <option>Johor Jaya</option>
											                  <option>Mutiara Rini</option>
											                  <option>Nusa Bestari</option>
											                  <option>Pasir Gudang</option>
											                  <option>Pelangi indah</option>
											                  <option>Permas Jaya</option>
											                  <option>Pulai Jaya</option>
											                  <option>Pulai Perdana</option>
											                  <option>Setia Indah</option>
											                  <option>Setia Tropika</option>
											                  <option>Skudai</option>
											                  <option>Sri Putri</option>
											                  <option>Taman Nusa Perintis</option>
											                  <option>Taman Perling</option>
											                  <option>Taman Universiti</option>							                  
								                  
								                  
							                	</select></br></br>

							                	Nursery Included?: <input type="text" name="public"  value="<?php echo $rows['public'];?>"></br>
							                	<select name="public">
							                		<option selected="yes">Select New Option</option>
							                		<option>Yes</option>
							                		<option>No</option>
							                	</select></br></br>
												      

												      <input type="submit" value="Update List"/>
												    </form>
												    

												    <?php }
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
										<li><a href="feesrecord.php">Fees Record</a></li>
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



<?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    mysql_connect("localhost", "root","") or die(mysql_error());
    mysql_select_db("first_db") or die("Cannot connect to database");
    $details = mysql_real_escape_string($_POST['details']);
    $parents = mysql_real_escape_string($_POST['parents']);
    $contact = mysql_real_escape_string($_POST['contact']);
    $branch = mysql_real_escape_string($_POST['branch']);
    $public = mysql_real_escape_string($_POST['public']);
    $id = $_SESSION['id'];
    $time = strftime("%X");//time
    $date = strftime("%B %d, %Y");//date



    mysql_query("UPDATE list SET details='$details', parents='$parents', contact='$contact', branch='$branch', public='$public', date_edited='$date', time_edited='$time' WHERE id='$id'") ;
    header("location: studentinfo.php");
  }
?>