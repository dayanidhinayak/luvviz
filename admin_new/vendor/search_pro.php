<?php
include_once("../function.php");
$x=$_GET['val'];
$res1=mysql_query("select * from `product` where `product_name` LIKE '$x%'");


?>

<table>
<?php
while($row=mysql_fetch_array($res1)){
?>
<tr>
<td onclick="return chn('<?php echo $row['product_name']; ?>',<?php echo $row['id']; ?>);"><?php echo $row['product_name']; ?></td>
</tr>
<?php 
}
?>
<tr>
<td><a href="addnewproducts.php" style="text-decoration:none; color:#666666;">Add new</a></td>
</tr>
</table>


