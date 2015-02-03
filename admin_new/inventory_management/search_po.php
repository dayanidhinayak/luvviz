<?php
include_once("../function.php");
$inv=$_GET['q'];


$que=mysql_query("select distinct(`order_id`)  from `purchase_order` where `approval_status`='0' and `status`='0' and `order_id` like '$inv%'"); 
while($res=mysql_fetch_array($que))
{
$q1=mysql_query("select * from `purchase_order` where `order_id`='$res[order_id]'");
$r1=mysql_fetch_array($q1);
?>
<tr><td><a href="podetails.php?oid=<?php echo $res['order_id']?>" ><?php echo $res['order_id']?></a></td>
<td><?php echo $r1['entry_date']?></td>
<td><?php echo $r1['delivery_date']?></td>
</tr>
<?php
}
?>

