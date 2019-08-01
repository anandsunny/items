
<!DOCTYPE html>
<html>
<head>
    <title>demo</title>

</head>
<body>

<h2>this is a web page</h2>
<div onclick="makeEditable(this)" onblur="makeReadOnly(this)" >div containing content to be managed by the user...</div>
<!-- javaScript -->

<script type="text/javascript">


    function makeEditable( div ) {
        div.style.border = "1px solid #000";
        div.style.padding = "20px";
        div.contentEditable = true;
    }

    function makeReadOnly( div ) {
        div.style.border = "none";
        div.style.padding = "0px";
        div.contentEditable = false;
        alert("run ajax post reques here to save the div.innerHTML \ or div.textcontent to the database.");
    }
</script>
</body>
</html>

