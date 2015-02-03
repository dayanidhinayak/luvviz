<?php
include_once("../function.php");
$id=$_GET['q'];
$newarrival=$_GET['newarrival'];
if($newarrival==0)
{
mysql_query("update `product` set `newarrival`='1' where `id`='$id'");
?>
<img src="../images/tick.png" onclick="return disable(<?php echo $id;?>,1);" />
<?php
}
else
{
mysql_query("update `product` set `newarrival`='0' where `id`='$id'");
?>
<img src="../images/disabled.gif" onclick="return disable(<?php echo $id;?>,0);"/>

<?php
}
?>
