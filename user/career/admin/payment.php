<?php
include_once('database.php');
ob_start();
//session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);
?>
<?php
//$amou=0;
//$d=date("Y-m-d");
$id=$_SESSION['name'];
$amou=$_REQUEST['q'];
/*$fet=mysql_query("select * from `$account` where `date`='$d'")or die(mysql_error());
while($res=mysql_fetch_array($fet))
{
 $amou=$amou+$res['amount'];
}*/
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