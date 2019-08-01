<?php

$db = new PDO("mysql:host=localhost;dbname=items","root");

$page = isset($_GET['p'])?$_GET['p']:'';

if($page=='add') {
	$name = $_POST['name'];
	$email = $_POST['email'];

	$query = $db->prepare("INSERT INTO user(name,email)VALUES(:name,:email)");
	$query->execute([
		":name" => $name,
		":email" => $email
		]);
}
else if ($page=='update') {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];

	$query = $db->prepare("UPDATE user SET name = :name, email = :email WHERE id = :id");
	$query->execute([
		":name" => $name,
		":email" => $email,
		":id" => $id
		]);
}
else if ($page=='delete') {
	$id = $_POST['id'];
	$query = $db->prepare("DELETE FROM user WHERE id = :id");
	$query->execute([
		":id" => $id
		]);
}
else{
	$query = $db->prepare("SELECT * FROM user");
	$query->execute();
	while ($row = $query->fetch()) {
		?>

		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<button class="btn btn-warning" data-toggle="modal" data-target="#updateData-<?php echo $row['id']; ?>">Update</button>

					<!-- Modal -->
					<div class="modal fade" id="updateData-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="updataLabel-<?php echo $row['id']; ?>">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">

					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="updataLabel-<?php echo $row['id']; ?>">Updata Data</h4>
					      </div>
					      <form>
					      <div class="modal-body">
					      <input type="hidden" id="<?php echo $row['id']; ?>" value="<?php echo $row['id']; ?>">
					        <div class="form-group">
							    <label for="name">Name</label>
							    <input type="text" class="form-control" name="name" id="name-<?php echo $row['id']; ?>" value="<?php echo $row['name']; ?>">
							  </div>
							  <div class="form-group">
							    <label for="email">E-Mail</label>
							    <input type="email" class="form-control" name="email" id="email-<?php echo $row['id']; ?>" value="<?php echo $row['email']; ?>">
							  </div>

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <input type="button" name="updata" id="updata" onmousedown="updateData(<?php echo $row['id']; ?>)" class="btn btn-primary" data-dismiss="modal" id="update" value="Update" />
					      </div>
					     </form>
					    </div>
					  </div>
					</div>
			</td>
			<td>
				<button class="btn btn-danger" data-toggle="modal" data-target="#deleteData-<?php echo $row['id']; ?>">Delete</button>
				<!-- Modal -->
					<div class="modal fade" id="deleteData-<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteLabel-<?php echo $row['id']; ?>">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">

					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="deleteLabel-<?php echo $row['id']; ?>">Delete Data</h4>
					      </div>
					      
					      <div class="modal-body">
					     <p>Do you want to <font color="red"><b>Delete</b></font> the data of "<?php echo $row['name']; ?>" into your database?</p>

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        <input type="button" name="delete" id="delete" onmousedown="deleteData(<?php echo $row['id']; ?>)" class="btn btn-primary" data-dismiss="modal" value="Delete" />
					      </div>
					
					    </div>
					  </div>
					</div>
			</td>
		</tr>

		<?php
	}
}



?>