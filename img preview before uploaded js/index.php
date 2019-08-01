


<!DOCTYPE html>
<html>
<head>
    <title>demo</title>

<div id="localtion"></div>
<!-- stylesheet -->
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
<style type="text/css">
	@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

body {
  margin: 5em;
}

.social-icons {
  list-style-type: none;
  margin: 0 auto 20px;
  padding: 0;
  width: 250px;
  height: 100px;
}

.tab {
  margin-right: 10px;
  border-radius: 0 0 25px 25px;
  float: left;
}

.circle {
  padding: 10px 10px;
  width: 20px;
  font-size: 20px;
  text-align: center;
  background: #fff;
  border-radius: 20px;
  border: solid 1px;
}

.fa-facebook {
  color: hsl(221, 44%, 41%);
  border-color: hsl(221, 44%, 41%);
}

.fa-facebook:hover {
  background-color: hsl(221, 44%, 41%);
}

.fa-twitter {
  color: hsl(195, 100%, 60%);
  border-color: hsl(195, 100%, 60%);
}

.fa-twitter:hover {
  background-color: hsl(195, 100%, 60%);
}

.fa-google-plus {
  color: hsl(7, 71%, 55%);
  border-color: hsl(7, 71%, 55%);
}

.fa-google-plus:hover {
  background-color: hsl(7, 71%, 55%);
}

.fa-linkedin {
  color: hsl(199, 85%, 36%);
  border-color: hsl(199, 85%, 36%);
}

.fa-linkedin:hover {
  background-color: hsl(199, 85%, 36%);
}

.fa-facebook:hover, .fa-twitter:hover, .fa-google-plus:hover, .fa-linkedin:hover {
  color: hsl(0, 0%, 100%);
}

.screen-reader {
  position: absolute;
  left: -9999px;
  top: -9999px;
}

.shadow .tab {
  background: none;
}

.shadow .circle {
  box-shadow: 1px 1px 3px hsla(0, 0%, 0%, .4);
}

.shadow .fa-facebook,
.shadow .fa-twitter,
.shadow .fa-google-plus,
.shadow .fa-linkedin {
  border-color: hsl(0, 0%, 100%);
  border: none;
  padding: 11px;
  
}


</style>
</head>
<body>
<?php


?>
<form id="form1" runat="server">
  <input type="file" name="imginp" id="imginp" />
  <img src="#" id="blah" alt="your image" />
</form>


<!-- javaScript -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$("#imginp").change(function () {
  readURL(this);
});
function readURL(input) {
  var reader = new FileReader();
  reader.onload = function (e) {
    $("#blah").attr("src", e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
}
</script>
</body>
</html>