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
                    <h1>Update Payment</h1>
                  </header>




    <h2 align="center">Currently Selected</h2>
    <table border="1px" width="100%">
      <tr>
        <th>ID</th>
        <th>Student's Name</th>
        <th>January</th>
        <th>Feb</th>
        <th>Mac</th>
        <th>Apr</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>Sept</th>
        <th>Oct</th>
        <th>Nov</th>
        <th>Dec</th>

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
                Print '<td align="center">'. $row['id'] . "</td>";
                Print '<td align="center">'. $row['details'] . "</td>";
                Print '<td align="center">'. $row['jan'] . "</td>";
                Print '<td align="center">'. $row['feb'] . "</td>";
                Print '<td align="center">'. $row['mac'] . "</td>";
                Print '<td align="center">'. $row['april'] . "</td>";
                Print '<td align="center">'. $row['may'] . "</td>";
                Print '<td align="center">'. $row['jun'] . "</td>";
                Print '<td align="center">'. $row['july'] . "</td>";
                Print '<td align="center">'. $row['aug'] . "</td>";
                Print '<td align="center">'. $row['sept'] . "</td>";
                Print '<td align="center">'. $row['oct'] . "</td>";
                Print '<td align="center">'. $row['nov'] . "</td>";
                Print '<td align="center">'. $row['dece'] . "</td>";
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


    <form action="updatefees.php" method="POST">
      Name:<input type="text" name="details" value="<?php Print $rows['details'];?>"/><br/></br>
      Enter January Fees:<input type="text" name="jan" value="<?php Print $rows['jan'];?>"/><br/></br>
      Enter February Fees: <input type="text" name="feb" value="<?php echo $rows['feb'];?>" /> <br/></br>
      Enter March Fees: <input type="text" name="mac" value="<?php echo $rows['mac'];?>" /><br/></br>
      Enter April Fees: <input type="text" name="april" value="<?php echo $rows['april'];?>" /></br></br>
      Enter May Fees: <input type="text" name="may" value="<?php echo $rows['may'];?>" /><br/></br>
      Enter June Fees: <input type="text" name="jun" value="<?php echo $rows['jun'];?>" /><br/></br>
      Enter July Fees: <input type="text" name="july" value="<?php echo $rows['july'];?>" /><br/></br>
      Enter August Fees: <input type="text" name="aug" value="<?php echo $rows['aug'];?>" /><br/></br>
      Enter September Fees: <input type="text" name="sept" value="<?php echo $rows['sept'];?>" /><br/></br>
      Enter October Fees: <input type="text" name="oct" value="<?php echo $rows['oct'];?>" /><br/></br>
      Enter November Fees: <input type="text" name="nov" value="<?php echo $rows['nov'];?>" /><br/></br>
      Enter December Fees: <input type="text" name="dece" value="<?php echo $rows['dece'];?>" /><br/></br>
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
                                        </li>                   <li>
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
        $id = $_SESSION['id'];
        $details = mysql_real_escape_string($_POST['details']);
        $jan = mysql_real_escape_string($_POST['jan']);
        $feb = mysql_real_escape_string($_POST['feb']);
        $mac = mysql_real_escape_string($_POST['mac']);
        $april = mysql_real_escape_string($_POST['april']);
        $may = mysql_real_escape_string($_POST['may']);
        $jun = mysql_real_escape_string($_POST['jun']);
        $july = mysql_real_escape_string($_POST['july']);
        $aug = mysql_real_escape_string($_POST['aug']);
        $sept = mysql_real_escape_string($_POST['sept']);
        $oct = mysql_real_escape_string($_POST['oct']);
        $nov = mysql_real_escape_string($_POST['nov']);
        $dece = mysql_real_escape_string($_POST['dece']);

        mysql_query("UPDATE list SET jan='$jan', feb='$feb', mac='$mac', april='$april', may='$may', jun='$jun', july='$july', aug='$aug', sept='$sept', oct='$oct', nov='$nov', dece='$dece' WHERE id='$id'");
        header("location: index1.php");
    }

?>