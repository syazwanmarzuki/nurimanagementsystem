<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <title>NURI MANAGEMENT SYSTEM</title>
  </head>
  <body>
      <div class="container">
          <div class="top">
          <h1 id="title" class="hidden"><span id="logo">Register User</span></h1>
      </div>
      <div class="login-box animated fadeInUp">
      <div class="box-header">
        <h2>Registration Form</h2>
      </div>
          <form class="form-horizontal" action="register.php" method="post">
          <label for="username">Username</label></br>
          <input type="text" name="username"/></br>
          <label for="password">Password</label></br>
          <input type="password" name="password"></br>
          <label for="type">Usertype</label></br>
          <select name="role">
              <option value="admin">Admin</option>
              <option value="user">User</option>
          </select></br></br>
          <button type="submit">Register</button>

        </form>
  </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  $role = mysql_real_escape_string($_POST['role']);


  echo "Username entered is: ". $username . "<br/>";
  echo "Password entered is: ". $password;
 
    $bool = true;
  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("first_db") or die("Cannot connect to database"); //Connect to database
  $query = mysql_query("SELECT * from users"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; 
      Print '<script>window.location.assign("register.php");</script>';
    }
  }
  if($bool)
  {
    mysql_query("INSERT INTO users (username, password, role) VALUES ('$username','$password', '$role')"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
    Print '<script>window.location.assign("index.php");</script>'; // redirects to register.php
  }
}
?>
