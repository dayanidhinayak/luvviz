<?php
include_once('../function.php');
$inv=$_GET['q'];
?>
<table>
<?php
$id=1;
$query=mysql_query("select * from `product` where `product_name` like '$inv%'");
while($res=mysql_fetch_array($query))
{
?>
<tr><td onclick="javascript:addRow('<?php echo $res['id'];?>','<?php echo $res['product_name']?>')"><?php echo $res['product_name']?></td></tr>
<?php

}
?>
</table>
