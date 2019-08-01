
<?php
 $db = mysqli_connect("localhost","root","","oops");
?>

<!-- <html>
<head>
<script>
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "ajax.php";
    var fn = document.getElementById("first_name").value;
    var ln = document.getElementById("last_name").value;
    var vars = "firstname="+fn+"&lastname="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}
</script>
</head>
<body>
<h2>Ajax Post to PHP and Get Return Data</h2>
First Name: <input id="first_name" name="first_name" onkeyup="ajax_post()" type="text">  <br><br>
Last Name: <input id="last_name" name="last_name" type="text"> <br><br>

<input name="myBtn" type="submit" value="Submit Data" onclick="ajax_post();"> <br><br>
<div id="status"></div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>live search</title>
    <style type="text/css">
        #here {
            display: none;
        }
    </style>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function (argument) {
        $("#search").keyup(function (argument) {
            $("#here").show();
            var x = $(this).val();
            $.ajax({
                type:"GET",
                url:"ajax.php",
                data:"q="+x,
                success:function (data) {
                    $("#here").html(data);
                }
            })
        })
    })
    </script>
</head>
<body>
<input type="text" name="search" id="search" />
<div id="here"></div>
</body>
</html>

