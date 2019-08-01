<?php 
// echo 'Thank you '. $_POST['firstname'] . ' ' . $_POST['lastname'] . ', says the PHP file';
?>
<?php
 $conn = mysqli_connect("localhost","root","","oops");


 // class DbConnection {
 // 	public $db;

 // 	function __construct() {
 // 		$this->db = mysqli_connect("localhost","root","","oops");
 // 	}
 // }

//  class LiveSearch extends DbConnection {
//  	function search($query) {
//  		if(!empty($_GET)) {
//  			$q = $_GET["q"];
//  			$result = mysqli_query($this->db, $query);
//  			return $result;
//  		}
 		
//  	}
//  }

// $searchObj = new LiveSearch;
// $query = "SELECT * FROM user WHERE uname LIKE '%$q%'";
// echo "<table>";
// echo "<tr><th>Id</th><th>Name</th><th>Salary</th>";
// $result1 = $searchObj->search($query);
// while ($output = mysqli_fetch_assoc($result1)) {
// 	echo "<tr>";
// 		echo "<td>".$output["uid"]."</td>";
// 		echo "<td>".$output["uname"]."</td>";
// 		echo "<td>".$output["usalary"]."</td>";
// 		echo "</tr>";
// }


?>

<?php

if(!empty($_GET['q'])) {
	$q = $_GET['q'];
	$query = "SELECT * FROM user WHERE uname LIKE '%$q%' ";
	echo "<table>";
	echo "<tr><th>Id</th><th>Name</th><th>Salary</th>";
	//echo $query;
	$result = mysqli_query($conn, $query);
	while($output = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$output["uid"]."</td>";
		echo "<td>".$output["uname"]."</td>";
		echo "<td>".$output["usalary"]."</td>";
		echo "</tr>";
	}
}


?>