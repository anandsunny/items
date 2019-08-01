<?php
$db = new PDO("mysql:host=localhost;dbname=items","root");
?>

<!DOCTYPE html>
<html>
<head>
	<title>ajax dropdown</title>

	<!-- style sheets -->
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />


	<script type="text/javascript" src="../assets/js/jquery.js" ></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	function viewData(str) {
		//var id = str;
		//alert(id);
		$.ajax({
			type: "POST",
			url: "functions.php",
			data: "id="+str,
			success: function (data) {
				$("#state").html(data);
				//alert("success");
			}
		});
	}
	// $(document).ready(function (argument) {
	// 	alert("jquery");
	// })
	</script>
</head>
<body>
<div class="container" style="width: 500px; margin: 50px auto">
<form>

		<div class="form-group">
			<label for="country">Select Country</label>
			<select id="country" class="form-control" onchange="viewData(this.value);">
				<?php
				$query = $db->prepare("SELECT * FROM country");
				$query->execute();
			?>
			<option value="country">select country</option>
			<?php
					while ($row = $query->fetch()) {
				?>
						<option value="<?php echo $row['id']; ?>"><?php echo $row['countryName']; ?></option>
				<?php
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="state">Select State</label>
			<select id="state" class="form-control" >
				
			</select>
		</div>
</form>

</div>

</body>
</html>