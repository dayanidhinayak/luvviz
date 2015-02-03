<?php
include_once("function.php");
$catid=$_GET['cid'];
echo "<table>";
$q1=mysql_query("select * from `category` where `id`='$catid'");

while($r1=mysql_fetch_array($q1))
{

$pid=$r1['id'];


$totalq=mysql_query("select * from `product` where `category_id` like '%|$pid|%' and `status`='1'  order by `created_ondate` desc");

while($resq=mysql_fetch_array($totalq))
{
?>
<tr><td><input type="checkbox" name="pidval[]" value="<?php echo $resq['id']?>"  /></td>
<td><?php echo $resq['product_name']?></td>

</tr>
<?php
}
}	
?>