
<?php
include "DBlogger.php";

class Deposit extends DBlogger{
//"UPDATE table SET sql = 'formData' WHERE ac_no = 'formAcNo'"
	public function depositUpdate(){
		$sql = "UPDATE customer_balance SET date = '".$_POST["date"]."' , particulars = '".$_POST["particulars"]."' , cheque_no = '".$_POST["cheque_no"]."' , cr_amt_deposited = '".$_POST["amount"]."' ,amount_type = '".$_POST["amount_type"]."', balance ='".$_POST["amount"]."'+balance WHERE ac_no = '".$_POST["ac_no"]."'";
		//echo $sql;
		$query = mysqli_query($this->db, $sql);
		if($query) {
			return true;
		}
	}

	public function customerInsert($table, $fields) {

		$sql = "";
		$sql .="INSERT INTO ".$table;
		$sql .="(".implode(",", array_keys($fields)).")";
		$sql .="VALUES ( '".implode("','",array_values($fields))."')";
		//echo $sql;
		$query = mysqli_query($this->db, $sql);
		if($query) {
			return true;
		}

	}


	public function withdrawnUpdate(){
		$sql = "UPDATE customer_balance SET date = '".$_POST["date"]."' , particulars = '".$_POST["particulars"]."' , cheque_no = '".$_POST["cheque_no"]."' , dr_amt_withdrawn = '".$_POST["amount"]."' ,amount_type = '".$_POST["amount_type"]."', balance = balance-'".$_POST["amount"]."' WHERE ac_no = '".$_POST["ac_no"]."'";
		//echo $sql;

		$query = mysqli_query($this->db, $sql);
		if($query) {
			return true;
		}
	}

	public function withdrawnInsert($table, $fields) {
		$sql = "";
		$sql .= " INSERT INTO ".$table;
		$sql .= "(".implode(",", array_keys($fields)).") VALUES ";
		$sql .= "('".implode("','", array_values($fields))."')";

		$query = mysqli_query($this->db, $sql);
		if($query) {
			return true;
		}
	}
}

$deposit = new Deposit;
if (isset($_POST["deposit"])) {

	 $fields = array(
			  "ac_no" => $_POST["ac_no"],
			  "date" => $_POST["date"],
			  "particulars" => $_POST["particulars"],
			  "cheque_no" => $_POST["cheque_no"],
			  "cr_amt_deposited" => $_POST["amount"],
			  "amount_type" => $_POST["amount_type"],
			  "balance" => $_POST["amount"]

		);

	$ac_no = $_POST['ac_no'];

	$rec = "SELECT * FROM customer_balance WHERE ac_no = $ac_no";
	
	$rec_execute = mysqli_query($database->db, $rec);
	if(mysqli_fetch_row($rec_execute)) {

		 if($deposit->depositUpdate()) {
			header("location:../../../admin/admin_customer_debit.php?msg=Record deposit Successfully");
			 }

	}
	else {
		 	
			  if($deposit->customerInsert('customer_balance', $fields)) {
			header("location:../../../admin/admin_customer_debit.php?msg=Record deposit Successfully");
			 }
		 }

}

if (isset($_POST["withdrawn"])) {
	
    $where  = $_POST['ac_no'];
    $ac_rec = " SELECT balance FROM customer_balance WHERE ac_no = $where";
    $query_ac_rec = mysqli_query($database->db,$ac_rec);
    while ($row = mysqli_fetch_array($query_ac_rec)) {

    	  foreach ($row as $key => $value) {
    	  	$row = $value;
    	  }
      if($row < $_POST['amount'] ) {
    	?>
    	<script type="text/javascript">
    		alert("you have not enough balance.");
    		window.location = "../../../admin/admin_customer_withdrawn.php";
    	</script>
    	<?php
 	   }

 	     else{
	
	$fields = array(
			  "ac_no" => $_POST["ac_no"],
			  "date" => $_POST["date"],
			  "particulars" => $_POST["particulars"],
			  "cheque_no" => $_POST["cheque_no"],
			  "dr_amt_withdrawn" => $_POST["amount"],
			  "amount_type" => $_POST["amount_type"]
		);

	$rec = "SELECT * FROM customer_balance WHERE ac_no = $where ";
	$rec_execute = mysqli_query($database->db, $rec);

	 if(mysqli_fetch_row($rec_execute)) {
	 		if($deposit->withdrawnUpdate()) {
			?>
    	<script type="text/javascript">
    		alert("Rs. <?php echo $_POST['amount'];?> amount withdrawn Successfully.");
    		window.location = "../../../admin/admin_customer_withdrawn.php";
    	</script>
    	<?php
	 }
	 else {
	 	if($deposit->withdrawnInsert('customer_balance',$fields)) {
			?>
    	<script type="text/javascript">
    		alert("Rs. <?php echo $_POST['amount'];?> amount withdrawn Successfully.");
    		window.location = "../../../admin/admin_customer_withdrawn.php";
    	</script>
    	<?php
	 }
	}
  }
}
}
}

?>