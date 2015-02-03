<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
$bid=$_GET['provals'];
$catid=$_GET['catid'];
$i=0;
$sqlcate=mysql_query("select * from `product` where `brand_id`='$bid' and `category_id` like  '%|$catid|%' ");
//echo "select * from `product` where `brand_id`='$bid' and `category_id` like  '%|$catid|%' ORDER BY id ASC";
while($resscate=mysql_fetch_array($sqlcate)){

$stocksql=mysql_query("select * from `stock` where `product_id`='$resscate[id]' ORDER BY `slno` asc");

//echo "select * from `stock` where `product_id`='$resscate[id]' ORDER BY `slno` asc";
while($resstocks=mysql_fetch_array($stocksql)){
    $i++;
?>
<table>
<tr>
    <td><?php echo $i;?></td>
<td><input type="checkbox" name="checkval[]" value="<?php echo $resstocks['slno'];?>" class="chk"></td>
<td><?php echo $resscate['product_name'];?></td>
<td><?php  echo $resstocks['size'];?></td>
<td><?php echo $resstocks['quantity'];?></td>
<td><?php echo $resscate['price'];?></td>
<td><?php echo $resstocks['date'];?></td>
<td><input type="text" id="qty<?php echo $resstocks['slno'];?>" onkeyup="return getquant(<?php echo $resstocks['slno'];?>)" name="quantval<?php echo $resstocks['slno'];?>" /></td>
</tr>
</table>
<?php
}
}
?>