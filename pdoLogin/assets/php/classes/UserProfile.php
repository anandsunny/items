<?php
session_start();
// declare (strict_types=1);
include "DBlogger.php";

class UserProfile extends DBlogger{

	public function insert($table,$fields) {
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode("," , array_keys($fields)).") VALUES ";
		$sql .= "('".implode("','", array_values($fields))."')";
		 //echo "INSERT INTO user(uid,uname,usalary) values(4,'shyam',8500)";
		$query = mysqli_query($this->db, $sql);
		if($query) {
			return true;
		}	
	}

	

	public function selectFetch($table,$where) {
		$sql = "SELECT * FROM ".$table." WHERE ".$where;
		$arr = array();
        // echo $sql;
		$query = mysqli_query($this->db, $sql);

		while($row = mysqli_fetch_assoc($query)) {
			$arr[] = $row;
		}
		return $arr;
	}
	public function selectAccount($table) {
		$sql = "SELECT * FROM ".$table;
		$arr = array();
		$query = mysqli_query($this->db, $sql);

		while($row = mysqli_fetch_assoc($query)) {
			$arr[] = $row;
		}
		return $arr;
	}


	public function deleteRecord($table,$where) {
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value) {
			$condition .= $key."='".$value."' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql = "DELETE FROM ".$table." WHERE ".$condition;
		if(mysqli_query($this->db,$sql)) {
			return true;
		}
	}


	public function confirmRequest($table,$fields,$where) {
		$sql = "";
		$condition = "";
		foreach($where as $key => $value) {
			$condition .= $key."= '".$value."' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql .= "UPDATE ".$table." SET ";
		$sql .= $fields." WHERE ".$condition;
		//echo $sql;
		if(mysqli_query($this->db,$sql)) {
			return true;
		}
	}
	function changePin($table,$fields,$where) {
		$sql = "";
		$sql .=" UPDATE ".$table." SET ";
		$sql .=$fields." WHERE ".$where;
		//echo $sql;
		if(mysqli_query($this->db, $sql)) {
			return true;
		}
	}
}

$profile = new UserProfile;





if(isset($_POST["submit"])) {
	if ($_POST['pwd'] != $_POST['cpwd']) {
		?>
		<script type="text/javascript">
		   alert("your password does not match");
		   window.location = "../../../customer_login.php";
		</script>
		<?php
	}
	$myFields = array(
		"name" => $_POST["fname"],
		"lname" => $_POST["lname"],
		"user_id" => $_POST["log_in"],
		"password" => $_POST["pwd"],
		"address" => $_POST["address"],
		"mobile_no" => $_POST["mobile_no"],
		"email" => $_POST["email"],
		"ac_no" => $_POST["ac_no"]
		);
	
	if($profile->insert("ragistration",$myFields)) {
		header("location:../../../approval.php?msg=Record Inserted");
	}
}

// for staff registration
if (isset($_POST["staff_reg"])) {
	if ($_POST['pwd'] != $_POST['cpwd']) {
		?>
		<script type="text/javascript">
		    alert("your password does not match");
			window.location = "../../../admin/staff_registration.php";
		</script>
		<?php
	}
	else{
	$fields = array(
		"user_id" => $_POST["log_in"],
		"password" => $_POST["pwd"],
		"fname" => $_POST["fname"],
		"lname" => $_POST["lname"],
		"email" => $_POST["email"],
		"mobile_no" => $_POST["mobile_no"],
		"address" => $_POST["address"]
		);

   if ($profile->insert("staff_registration",$fields)) {
   	   header("location:../../../admin/staff_registration.php?msg=New Admin Successfully Registered");
   }
 }
}


// for cancel customer registration request

if(isset($_GET["cancel"])) {
	$id = $_GET['id'] ?? null;
	$where = array("id" => $id);
	//echo "string";
	if($profile->deleteRecord("ragistration",$where)) {
		header("location:../../../admin/admin_customer_request.php?msg=Record Delete Successfully");
	}
}

// for confirm customer registration request

if(isset($_GET["confirm"])) {
	$id = $_GET['id'] ?? null;
	$where = array("id" => $id);
  
	$sql_col = "status";
	$updte_val = "active";
	$fields = $sql_col."= '".$updte_val."'";
    
	//$profile->insert("customer_balance",$balFields)
	if($profile->confirmRequest("ragistration",$fields,$where)) {
		header("location:../../../admin/admin_customer_request.php?msg=Request confirm Successfully");
	}
}


// for customer deposit 

if (isset($_POST["deposit"])) {


	$where  = array("ac_no" => $_POST["ac_no"]);

	$fields = array(
			  "ac_no" => $_POST["ac_no"],
			  "date" => $_POST["date"],
			  "particulars" => $_POST["particulars"],
			  "cheque_no" => $_POST["cheque_no"],
			  "cr_amt_deposited" => $_POST["amount"],
			  "amount_type" => $_POST["amount_type"],
			  "balance" => $_POST["amount"]

		);
	//echo "string";
	foreach ($fields as $key => $value) {
		$fields .= $key." = '".$value."'";
	}
	if($profile->confirmRequest("customer_balance",$fields)) {
		header("location:../../../admin/admin_customer_debit.php?msg=Record deposit Successfully");
		 }
   
	
}



// for change customers pin or password

if(isset($_POST["change_pin"])) {
	if ($_SESSION['pass'] != $_POST["current_pass"]) {
		?>

		<script type="text/javascript">
			alert("your pass is incorrect.");
			window.location = "../../../admin/customer_change_pin.php";
		</script>
		<?php
	}
	elseif ($_POST["new_pass"] != $_POST["confirm_pass"]) {
		?>

		<script type="text/javascript">
			alert("your pass does not match.");
			window.location = "../../../admin/customer_change_pin.php";
		</script>
		<?php
	}
	else {
	//echo "string";
		$sqlField = "password";
		$sqlFieldVal = $_POST["confirm_pass"];
		$fields = $sqlField." = '".$sqlFieldVal."'";
         
        $where = $_SESSION['acNo'];

		if($profile->changePin("ragistration",$fields,$where)){
		header("location:../../../admin/customer_change_pin.php?msg=password has been changed.");
 ?>
 <script type="text/javascript">
	alert("your password has been changed");
 </script>
 <?php
	
		}
	}


}

?>