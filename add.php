<?php
    session_start();
    if($_SESSION['sess_username']){
    }
    else{
        header("location:index1.php");
    }
    if($_SERVER['REQUEST_METHOD'] = "POST")
    {
        $details = mysql_real_escape_string($_POST['details']);
        $_SESSION['details'] = $details;
        $parents = mysql_real_escape_string($_POST['parents']);
        $contact = mysql_real_escape_string($_POST['contact']);
        $branch = mysql_real_escape_string($_POST['branch']);
        $date = strftime("%B %d, %Y");//date
        $time = strftime("%x");
        $public = mysql_real_escape_string($_POST['public']);


        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database

        
        mysql_query("INSERT INTO list (details, parents, contact, branch, date_posted, time_posted, public) VALUES ('$details','$parents', '$contact', '$branch', '$date', '$time', '$public')"); //SQL query
        header("location: addstudent.php");
    }
    else
    {
        header("location:index.php"); //redirects back to hom
    }
?>