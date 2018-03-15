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
 if(isset($_POST['update1'])){
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
    mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $name = mysql_real_escape_string($_POST['name']);
    $num = mysql_real_escape_string($_POST['num']);
    $branch = mysql_real_escape_string($_POST['branch']);
    $address = mysql_real_escape_string($_POST['address']);
    $email = mysql_real_escape_string($_POST['email']);
    $branchno = mysql_real_escape_string($_POST['branchno']);

    $id = $_SESSION['id'];


    mysql_query("UPDATE users SET username='$username', password='$password', name='$name', num='$num', branch='$branch', address='$address', email='$email', branchno='$branchno' WHERE id='$id'") ;
    header("location: userinfo.php");
  }
    else{
    echo "tak jadi";
  }
?>