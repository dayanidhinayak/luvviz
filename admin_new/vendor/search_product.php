<?php
include_once("../function.php");
$id=$_GET['id'];
?>
<select name="product">
<?php
$q=mysql_query("select `product_name` from `purchase_order`  where `order_id`='$id'") or die(mysql_error());
while($r=mysql_fetch_array($q))
{

?>
 <option value="<?php echo $r['product_name'];?>"><?php echo $r['product_name'];?></option>
 
 <?php } ?>
</select>
