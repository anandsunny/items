
<!DOCTYPE html>
<html>
<head>
	<title>login form</title>


	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>
<body>

<div class="container wrapper">
	<form action="assets/php/phpLogin.php" method="post" >
	<h1>Admin Login</h1>
		<div class="form-group">
			<label form="uname">User Name:- </label>
			<input type="text" name="uname" id="uname" class="form-control" required />
		</div>
		<div class="form-group">
			<label form="uname">Password:- </label>
			<input type="password" name="pass" id="pass" class="form-control" required />
		</div>
		<div class="form-group">
			<input type="submit" value="Log-In" name="login" id="login" class="btn btn-primary" />
		</div>
	</form>
</div>


<!-- javaScript Files -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>