<?php

session_start();

if(!$_SESSION['name']) {
	header("location:login.php");
}
include "assets/php/dbConnection.php";

$name = $_SESSION['name'];
$query = $db->prepare("SELECT * FROM pdologin WHERE name = :name");
$query->execute([
	"name" => $name
	]);

$rows = $query->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<title>profile page</title>


	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>

<div class="container-fluid">
	<div class="container panel primary" >
		<span class="pull-left font"><?php echo $_SESSION['name'] ; ?></span>
		<a href="#" class="pull-right font"><span>Log-Out</span></a>
		<div class="container">
			<table class="table table-striped">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>E-Mail</th>
					<th>Pass</th>
					<th>Image</th>
				</tr>

				<tr>
					<td><?php echo $rows->id; ?></td>
					<td><?php echo $rows->name; ?></td>
					<td><?php echo $rows->email; ?></td>
					<td><?php echo $rows->pass; ?></td>
					<td><img class="img-thumbnail img" src="assets/img/<?php echo $rows->img; ?>"></td>

				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>