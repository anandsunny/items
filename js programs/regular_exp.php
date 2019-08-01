
<!DOCTYPE html>
<html>
<head>
    <title>demo</title>

</head>
<body>

<textarea id="ta" name="ta" onkeyup="clean('ta')" onkeydown="clean('ta')"></textarea>

<!-- javaScript -->

<script type="text/javascript">
    function _(id) {
        return document.getElementById(id);
    }
    function clean(el) {
        var textfield = _(el);
        var regex = /[^a-z 0-9?!.,]/gi;
        // alert(textfield.value.search(regex));
        if ( textfield.value.search(regex) > -1 ) {
            textfield.value = textfield.value.replace(regex, "");
        }
    }
</script>
</body>
</html>

