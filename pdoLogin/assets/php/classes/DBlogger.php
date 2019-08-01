<?php

class DBlogger {

	public $db;
	public function __construct() {
		$this->db = mysqli_connect("localhost","root","","digitalbanking");
		
	}
}


$database = new DBlogger;
?>