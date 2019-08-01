<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>


	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />

</head>
<body>

<div class="container wrapper">
	<form action="assets/php/phpRegistration.php" method="post" enctype="multipart/form-data">
		<h1>Registration Form</h1>
		<div class="form-group">
			<label for="name">Name:- </label>
			<input type="text" name="name" id="name" class="form-control" required />
		</div>

		<div class="form-group">
			<label for="email">E-Mail:- </label>
			<input type="email" name="email" id="email" class="form-control" required />
		</div>

		<div class="form-group">
			<label for="pass">Password:- </label>
			<input type="password" name="pass" id="pass" class="form-control" required />
		</div>

		<div class="form-group">
			<label for="img">Image:- </label>
			<input type="file" name="img" id="img" required />
		</div>

		<div class="form-group">
			<input type="submit" name="submit" id="submit" class="btn btn-primary" />
		</div>
	</form>
</div>



<!-- javaScript Files -->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>