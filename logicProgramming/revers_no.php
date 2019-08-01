

<?php
if(isset($_POST['rev2']))
{
 $rev=0;
 $num=$_POST['rev'];
 
 while($num>=1)
 {
    $re=$num%10;
    $rev=$rev*10+$re;
    $num=$num/10;
  }
}


?>
<html>
  <head>
      <title>Reverse</title>
 </head>
 <body>
    <table>
         <form name="frm" method="post">
            <tr><td>Number</td><td><input type="text" name="rev"></td></tr>
             <tr><td>Reverse is:</td><td><input type="text" value="<?php if(isset($_POST['rev2'])){echo $rev;} ?>" name="rev1"></td></tr>
             <tr><td> </td><td><input type="Submit" value="Reverse" name="rev2"></td></tr>
        </form>
    </table>
 </body>
</html>
