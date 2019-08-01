
<!DOCTYPE html>
<html>
<head>
    <title>demo</title>

</head>
<body>

password: <input type="password" id="upass" name="userpass" />
<input type="button" id="toggleBtn" onclick="togglePassword();" value="Show password Characters" />

<!-- javaScript -->

<script type="text/javascript">
    function _(id) {
        return document.getElementById(id);
    }
    function togglePassword() {
        var upass = _('upass');
        var toggleBtn = _('toggleBtn');

        if ( upass.type == 'password' ) {
            upass.type = "text";
            toggleBtn.value = "Hide Password Characters";
        }
        else {
            upass.type = "password";
            toggleBtn.value = "Show Password Characters";
        }
    }
</script>
</body>
</html>

