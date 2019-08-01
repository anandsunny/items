<!DOCTYPE html>
<html>
<head>
    <title>demo1</title>
</head>
<body>
<?php
// $db = new PDO("mysql:host=localhost;db_name=demo", "root");
// $date  = date("d-M-Y h:i:sa");

// echo "INSERT INTO item (demo_date) VALUES ($date)";

// date_default_timezone_set('Asia/Kolkata');
// $int = time();

// echo "<br>";
// $int1 = strtotime('-1 month', $int);
// echo $int1;
// echo "<br>";

// echo date('d-M-Y h:i:sa', $int1);

$time = strtotime( 1523603340 );
echo date('Y-m-d', $time);
?>
</body>
<script type="text/javascript">
	alert("<?php echo $action; ?>");
</script>
</html>