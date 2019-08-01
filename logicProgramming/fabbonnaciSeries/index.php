

<!DOCTYPE html>
<html>
<head>
	<title>fabbonacci series</title>

</head>
<body>
<?php
$first = 0;
$second = 1;

echo "$first&nbsp";
echo "$second&nbsp";
for ($i=0; $i < 10; $i++) { 
	$first = $first+$second;//first = 1 second = 2, first=3 second=2
	$second = $first+$second;//first = 1 second = 2, first=3 second=5
	echo "$first&nbsp";
	echo "$second&nbsp";

}
echo "<br>";

// second try

$a = 0;
$b = 1;
echo $a.'&nbsp;,';
echo $b.'&nbsp;,';
for($limit = 0; $limit < 10; $limit++) {
	$c = $a + $b;
	echo $c.'&nbsp;,';
	$a  = $b;
	$b = $c;
}

?>
</body>
</html>