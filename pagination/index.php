<!DOCTYPE html>
<html>
<head>
  <title>demo</title>
  
</head>
<body>

<?php
$db = new PDO("mysql:host=localhost;dbname=oops","root");
$perpage = 7;
if(isset($_GET["page"])) {
	$page = intval($_GET["page"]);
}
else {
	$page = 1;
}
$calc = $perpage * $page;
$start = $calc - $perpage;
$query = $db->query("SELECT * FROM user LIMIT $start, $perpage");
echo "<table border='1px' align='center'>";
echo "<tr><th>Id</th><th>Name</th><th>Salary</th></tr>";
while($rows = $query->fetch()) {
	echo "<tr border='1px'>";
	echo "<td border='1px'>".$rows["uid"]."</td>";
	echo "<td border='1px'>".$rows["uname"]."</td>";
	echo "<td border='1px'>".$rows["usalary"]."</td>";
	echo "</tr>";
}
echo "</table>";


// page numbers table

if(isset($page)) {
	$query = $db->query("SELECT COUNT(*) AS uname FROM user");
	if($query->rowCount()) {
		$row = $query->fetch();
		$total = $row["uname"];
		
	}
	$totalPages = ceil($total / $perpage);
	echo "<div align='center'>";
	if($page <=1) {
		echo "<span>Pre</span>";
	}
	else {
		$j = $page - 1;
		echo "<span><a href='index.php'>< Pre</a></span>";
	}
	for ($i=1; $i <= $totalPages; $i++) { 
		//$i<>$page or $i == $page
		if($i<>$page) {
			echo "<span><a href='index.php?page=$i'>$i</a></span>";
		}
		else {
			echo "<span>$i</span>";
		}
	}
	if ($page == $totalPages) {
		echo "<span>Next ></span>";
	}
	else {
		$j = $page + 1;
		echo "<span><a href='index.php?page=$j'>Next</a></span>";
	}
	echo "</div>";
}



?>

</body>
</html>