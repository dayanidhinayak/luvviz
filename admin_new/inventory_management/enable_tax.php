<?php
include_once("../function.php");
$id=$_GET['q'];
$status=$_GET['status'];
if($status==0)
{
mysql_query("update `taxes` set `status`='1' where `slno`='$id'");
?>
<img src="../images/tick.png" onclick="return enable(<?php echo $id;?>,1);" />
<?php
}
else
{
mysql_query("update `taxes` set `status`='0' where `slno`='$id'");
?>
<img src="../images/disabled.gif" onclick="return enable(<?php echo $id;?>,0);"/>

<?php
}
?>