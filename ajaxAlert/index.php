<!DOCTYPE html>
<html>
<head>
<script src="script.js"></script>
<script>
// Ajax Usage Example
var ajax = ajaxObj("POST", "ajax.php");
ajax.onreadystatechange = function() {
	if(ajaxReturn(ajax) == true) {
	    alert(ajax.responseText);
	}
}
ajax.send("name=George&country=USA");
</script>
</head>
<body>
</body>
</html>