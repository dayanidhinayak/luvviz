<?php include_once('database.php');?>
<html>
<head></head>
<body>
    <?php
     $slno=$_GET['sln'];
     $uid=$_GET['id'];
   // if(isset($_POST['submit']))
    //{
        //$chno=$_REQUEST['chno'];
        //$bank=$_REQUEST['bank'];
       mysql_query("update `prize` set `status`='1' where `slno`='$slno' and `userid`='$uid'")or die(mysql_error()); 
   // }
   header('location:prize.php');
    ?>
<!--<form name="payprize" action="" method="post">
    <table>
        <tr>
            <td>Checkno</td>
            <td><input type="text" name="chno" value=""></td>
        </tr>
        <tr>
            <td>Bank Name</td>
            <td><input type="text" name="bank" value=""></td>
        </tr>
         <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>-->
</body>
</html> 