<?php

include "dbConnection.php";
session_start();

if (isset($_POST['login'])) {

	$name = $_POST['uname'];
	$pass = $_POST['pass'];
	$query = $db->prepare("SELECT * FROM pdologin WHERE name = :name");
	$query->execute([
		'name' => $name
		]);
    if ($query->rowCount()) {
    	$row = $query->fetch();
    	$u_pass = $row['pass'];
    	$result = password_verify($pass, $u_pass);
    	if ($result) {
    		$_SESSION['name'] = $name;
    		header("location:../../profile.php");
    	}
    	
    }
    else{
    	echo "login failed";
    }

}


?>