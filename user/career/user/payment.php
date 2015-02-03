<?php
include_once('database.php');
ob_start();
//session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);
?>
<?php
$id=$_SESSION['name'];
$amou=htmlentities($_REQUEST['q']);
 $less=$amou*0.153;
 $total=$amou-(10+$less);
?>
<html>
<head></head>
<body>
    <table align="center">
        <tr>
            <td>Payment</td><td><?php echo $amou." INR"; ?></td><td></td>
        </tr>
        <tr>
            <td>Less TDS @10.3</td><td></td>
        </tr>
        <tr>
            <td>Less Handling Charges 5%</td><td></td>
        </tr>
        <tr>
            <td>Less Other Deduction:Rs 10</td><td></td>
        </tr>
        <tr>
            <td>Net Payment(rounded)=</td><td><?php echo $total." INR"; ?></td>
        </tr>
    </table>
</body>
</html> 