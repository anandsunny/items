<?php

try{
	$db = new PDO("mysql:host=localhost;dbname=items","root");
}
catch(PDOException $e) {
	echo "DB Error: ".$e->getMessage();
}

?>