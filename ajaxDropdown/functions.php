<?php 
$db = new PDO("mysql:host=localhost;dbname=items","root");
$id = $_POST['id'];

$stm = $db->prepare("SELECT * FROM state WHERE cid = :id");
$stm->execute([
	":id" => $id
	]);
?>
<option value="state">select state</option>
<?php
while ($row = $stm->fetch()) {
	?>
	<option value="<?php echo $row['sid']; ?>"><?php echo $row['stateName']; ?></option>
	<?php
}
?>