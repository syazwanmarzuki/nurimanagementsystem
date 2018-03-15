<?php
    session_start();
    if($_SESSION['sess_username']){
    }
    else{
        header("location:index1.php");
    }
    if($_SERVER['REQUEST_METHOD'] = "POST")
    {	
    	$branch = mysql_real_escape_string($_POST['branch']);
        $db = mysql_real_escape_string($_POST['db']);
        $tb = mysql_real_escape_string($_POST['tb']);
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database

        mysql_query("INSERT INTO annual (branch, db, tb) VALUES ('$branch','$db', '$rb')"); //SQL query
        header("location: addannual.php");
    }
    else
    {
        header("location:index2.php"); //redirects back to hom
    }
?>