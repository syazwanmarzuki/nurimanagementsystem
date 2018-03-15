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


<?php
  if(isset($_POST['update'])){


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
        header("location: index2.php");
  
  }
  else{
    echo "tak jadi";
  }
  

?>