<?php

include "dbConnection.php";
//extract($_POST);
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
    $img = $_FILES['img']['name'];

	$v1 = rand(1111,9999);
	$v2 = rand(1111,9999);
	$v3 = $v1.$v2;
	$v3 = md5($v3);

	$dst = '../img/'.$v3.$img;
	$dst1 = 'img/'.$v3.$img;

	move_uploaded_file($_FILES['img']['tmp_name'],$dst);

	$pass1 = password_hash($pass,PASSWORD_DEFAULT);
//echo $pass1;

	$statement = $db->prepare("INSERT INTO pdologin(name,email,pass,img) VALUES(?,?,?,?)");
	$statement->execute([

		$name,
		$email,
		$pass1,
		$dst1
		]);

	if($statement->rowCount()) {
		header("location:../../login.php");
	}
	else {
		echo "No Records Founds.";
	}
}







?>