

<!DOCTYPE html>
<html>
<head>
	<title>armstrong number</title>

	
</head>
<body>
<?php
$n = 151;
$s = 0;
$t = $n;
while ($t != 0) {
	$r = $t % 10;
	$s = $s + $r * $r * $r;
	$t = $t/10;
}
if ($n == $s) {
	echo "armstrong number.";
}
else{
	echo "not armstrong number.";
}

// ------------------

// $num=153;
// $sum=0;
// $temp=$num;
// while($temp!=0)
// {
// $rem=$temp%10;
// // echo "rem = ".$rem."<br>";
// $sum=$sum+$rem*$rem*$rem;
// $temp=$temp/10;
// // echo "temp = ".$temp."<br />";
// }
// if($num==$sum)
// {
// echo "Armstrong number";
// }
// else
// {
// echo "not an armstrong number";
// }


?>
</body>
</html>