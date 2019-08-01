<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title>demo</title>

<div id="localtion"></div>
<!-- stylesheet -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />


<style type="text/css">
 #box { width: 200px; margin: 200px auto; border: 1px solid; }
 #example tbody { display: none; }
 #example_info { display: none; }
</style>
</head>
<body>

<form id="my_form" onsubmit="submitForm(); return false;">
    <p><input type="text" id="n" placeholder="name" required="required" /></p>
    <p><input type="email" id="e" placeholder="email address" required="required" /></p>
    <textarea id="m" placeholder="write your message here.." rows="10" required="required"></textarea>
    <p><input type="submit" id="mybtn" value="Submit Form"  /><span id="status"></span></p>
</form>

<!-- javaScript -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    function _(id) { return document.getElementById(id); }

    function submitForm() {
        _("mybtn").disabled = true;
        _("status").innerHTML = 'please wait...';
        var formdata = new FormData();
        formdata.append('n', _('n').value );
        formdata.append('e', _('e').value );
        formdata.append('m', _('m').value );

        var ajax = new XMLHttpRequest();
        ajax.open( "POST", "myphp.php" );
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200 ) {
                if( ajax.responseText == 'success' ) {
                    _("my_form").innerHTML = '<h2>Thanks '+ _('n').value +', your message has been sent.</h2>';
                }
                else {
                    _("status").innerHTML = ajax.responseText;
                    _("mybtn").disabled = false;
                }
            }
        }
        ajax.send( formdata );
    }
</script>
</body>
</html>

