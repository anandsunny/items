<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title>demo</title>
</head>
<body>

<input type="checkbox" id="cbgroup_master" onchange="toggleCheckBoxes( this, 'cbgroup1' )" /> Toggle All
<br /> <br />

<input type="checkbox" id="cb1_1" class="cbgroup1" name="cbg1[]" value="1" /> Item 1
<input type="checkbox" id="cb1_2" class="cbgroup1" name="cbg1[]" value="2" /> Item 2
<input type="checkbox" id="cb1_3" class="cbgroup1" name="cbg1[]" value="3" /> Item 3
<input type="checkbox" id="cb1_4" class="cbgroup1" name="cbg1[]" value="4" /> Item 4

<!-- javaScript -->

<script type="text/javascript">
    function _(id) { return document.getElementById(id); }

    function toggleCheckBoxes(master, group) {
        var cbarray = document.getElementsByClassName(group);
        for (var i = 0; i < cbarray.length; i++) {
            var cb = document.getElementById(cbarray[i].id);
            cb.checked = master.checked;
        }
    }
</script>
</body>
</html>

