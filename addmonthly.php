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
        $_SESSION['branch'] = $branch;
        $year = mysql_real_escape_string($_POST['year']);
        $totaljan = mysql_real_escape_string($_POST['totaljan']);
        $totalfeb = mysql_real_escape_string($_POST['totalfeb']);
        $totalmac = mysql_real_escape_string($_POST['totalmac']);
        $totalapril = mysql_real_escape_string($_POST['totalapril']);
        $totalmay = mysql_real_escape_string($_POST['totalmay']);
        $totaljun = mysql_real_escape_string($_POST['totaljun']);
        $totaljuly = mysql_real_escape_string($_POST['totaljuly']);
        $totalaug = mysql_real_escape_string($_POST['totalaug']);
        $totalsept = mysql_real_escape_string($_POST['totalsept']);
        $totaloct = mysql_real_escape_string($_POST['totaloct']);
        $totalnov = mysql_real_escape_string($_POST['totalnov']);
        $totaldece = mysql_real_escape_string($_POST['totaldece']);
        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database

        mysql_query("INSERT INTO fees (branch, year, totaljan, totalfeb, totalmac, totalapril, totalmay, totaljun, totaljuly, totalaug, totalsept, totaloct, totalnov, totaldece) VALUES ('$branch', '$year', '$totaljan', '$totalfeb', '$totalmac', '$totalapril', '$totalmay', '$totaljun', '$totaljuly', '$totalaug', '$totalsept', '$totaloct', '$totalnov', '$totaldece')"); //SQL query
        header("location: addprofit.php");
    }
    else
    {
        header("location:index2.php"); //redirects back to hom
    }
?>