<html>
	<head>
		<meta charset="utf-8">
		<title>User Login</title>
		<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="top">
				<h1 id="title" class="hidden"><span id="logo">Nuri Management System</span></h1>
			</div>
			<div class="login-box animated fadeInUp">
			<form action="authenticate.php" method="post">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username">Username</label></br>
			<input type="text" name="username" required="required"/><br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" name="password" required="required" /><br/>
			<button type="submit">Sign In</button></br>
			<br/>
			</div>
			</dv>
			</form>
		</div>
	</body>
</html>