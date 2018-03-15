<?php
	session_start(); //starts the session
	if($_SESSION['sess_username']){ //checks if user is logged in
	}
	else{
		header("location:index.php"); // redirects if user is not logged in
	}
	if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
		$name = $_GET['name'];
		mysql_query("DELETE FROM report WHERE name='$name'");
		header("location: viewreport.php");
	}
?>