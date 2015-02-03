<?php
include_once("../function.php");
$inv=$_GET['q'];
$que=mysql_query("select s.`quantity`,p.`product_name` from `product` p,`stock` s where `s`.`product_id`=`p`.`id` and `s`.`warehouse_id`='0' and `s`.`type`='admin' and p.`product_name` like '$inv%'"); 
while($res=mysql_fetch_array($que))
{
?>
<tr><td><?php echo $res['product_name']?></td>
<td><?php echo $res['quantity']?></td>
</tr>
<?php
}
?>
