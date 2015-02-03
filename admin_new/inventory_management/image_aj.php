<?php
include_once('../function.php');
$id=$_GET['q'];
?>
<table>
<?php

$query=mysql_query("select * from `product_images` where `product_id` ='$id'")or die;
while($res=mysql_fetch_array($query))
{
?>
<tr><td><img src="<?php echo $res['image']?>" style="height:100px; width:100px;" /> </td>
<td><a href="delete_imageval.php?pid=<?php echo $id?>&slno=<?php echo $res['slno']?>">DELETE</a></td>

</tr>
<?php

}
?>

</table>
