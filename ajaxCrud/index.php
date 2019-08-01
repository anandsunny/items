<!DOCTYPE html>
<html>
<head>
	<title>ajax crud</title>

	<!-- stylesheet -->

	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
</head>
<body onload="viewData()">
<p><br></p>
<div class="container">
	<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addData">
		  Insert Data
		</button>

		<!-- Modal -->
		<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="addlLabel">Insert Data</h4>
		      </div>
		      <form>
		      <div class="modal-body">
		        
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name" id="name" placeholder="name">
				  </div>
				  <div class="form-group">
				    <label for="email">E-Mail</label>
				    <input type="email" class="form-control" name="email" id="email" placeholder="email">
				  </div>
				  
				
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <input type="button" name="insert" class="btn btn-primary" data-dismiss="modal" id="insert" value="insert" />
		      </div>
		      </form>
		    </div>
		  </div>
		</div>

		<table class="table table-borderer table-striped">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Name</th>
				<th width="80">Update</th>
				<th width="80">Delete</th>
			</thead>
			<tbody></tbody>
		</table>
</div>

<!-- javaScript -->
<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<script type="text/javascript">


		$('#insert').click(function () {
		var name = $('#name').val();
		var email = $('#email').val();
		var dataString = 'name='+ name + '&email='+email;
		$.ajax({
			type: "POST",
			url: "functions.php?p=add",
			data: dataString,
			cache: false,
			success: function (data) {
				viewData();
			}
		});
	});


		function viewData() {
			$.ajax({
				type: "GET",
				url: "functions.php",
				success: function (data) {
					$('tbody').html(data);
				}
			})
		}
		
function updateData(str) {
	var id = str;
	var name = $('#name-'+str).val();
	var email = $('#email-'+str).val();
	var dataString = 'name='+ name + '&email='+email + '&id=' + id;
	$.ajax({
		type: "POST",
		url: "functions.php?p=update",
		data: dataString,
		success: function (data) {
			viewData();
			 $(".modal-backdrop").fadeOut();
			
		}
	})
}
function deleteData(str) {
	var id = str;
	var dataString = 'id='+id;

	$.ajax({
		type: "POST",
		url: "functions.php?p=delete",
		data: dataString,
		success: function (data) {
			viewData();
			$(".modal-backdrop").fadeOut();
		}
	})
}
</script>
</body>
</html>