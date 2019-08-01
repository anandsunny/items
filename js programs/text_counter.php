
<!DOCTYPE html>
<html>
<head>
    <title>demo</title>

</head>
<body>

<form>
    <textarea name="ta" rows="6" style="width: 340px" onkeydown="textCounter(this.form.ta, this.form.countDisplay);" onkeyup="textCounter(this.form.ta, this.form.countDisplay);"></textarea>
    <br />
    <input type="text" name="countDisplay" size="3" maxlength="3" readonly value="250" />Characters Remaining
</form>
<!-- javaScript -->

<script type="text/javascript">

    var maxAmount = 250;
    function textCounter( textField, showCountField ) {
        if ( textField.value.length > maxAmount ) {
            textField.value = textField.value.substring(0, maxAmount);
        }
        else {
            showCountField.value = maxAmount - textField.value.length;
        }
    }
</script>
</body>
</html>

