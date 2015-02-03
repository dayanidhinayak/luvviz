<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
?>
<html>
<head>
<script>
function show_confirm(id) {
}
</script>
</head>
<body>
<table>
<tr>
<td colspan="2" style="font-weight:bold;">Existing Inventory:</td>
</tr>
<tr>

<th>Product name</th>
<th>Size</th>
<th>Quantity</th>
<th>Price</th>
<th>Date</th>

</tr>

<?php

$sqlstock=mysql_query("select * from `stock`");
while($resstock=mysql_fetch_array($sqlstock)){
$proname=mysql_query("select * from `product` where `id`='$resstock[product_id]'");
//echo "select * from `product` where `id`='$resstock[product_id]'";
$resproname=mysql_fetch_array($proname);
//echo $resproname['product_name'];

?>
<tr>

<td><?php echo $resproname['product_name'];?></td>
<td><?php  echo $resstock['size'];?></td>
<td><?php echo $resstock['quantity'];?></td>
<td><?php echo $resstock['price'];?></td>
<td><?php echo $resstock['date'];?></td>

</tr>
<?php
}
?>

</table>
<table>
<tr>
<td colspan="2" style="font-weight:bold;">Dispatched Inventory:</td>
</tr>
<tr>
<th>Product name</th>
<th>Size</th>
<th>Quantity</th>
</tr>
<?php

$sqldispatch=mysql_query("select * from `dispatch`");
while($resdispatch=mysql_fetch_array($sqldispatch)){
$stock=mysql_query("select * from `stock` where `productcode`='$resdispatch[barcode]'");
$res=mysql_fetch_array($stock);
$pname=mysql_query("select * from `product` where `id`='$res[product_id]'");
$respro=mysql_fetch_array($pname);
?>
<tr>
<td><?php echo $respro['product_name'];?></td>
<td><?php echo $res['size'];?></td>
<td><?php echo $resdispatch['dispatch_quantity'];?></td>
</tr>
<?php
}
?>
</table>

<table>
<tr>
<td colspan="2" style="font-weight:bold;">Final Inventory:</td>
</tr>
<tr>
<th>Product name</th>
<th>Size</th>
<th>Quantity</th>
</tr>
<?php
$sql=mysql_query("SELECT `productcode`,`product_id` , sum( `quantity` ) as quant , size
FROM `stock`
GROUP BY `product_id` , `size`");
while($ress=mysql_fetch_array($sql)){
$pname=mysql_query("select * from `product` where `id`='$ress[product_id]'");
//echo "select * from `product` where `id`='$resstock[product_id]'";
$respname=mysql_fetch_array($pname);

$sqldisp=mysql_query("select `dispatch_quantity` from `dispatch` where  `product_id`='$ress[product_id]' and `size`='$ress[size]'");
$resdisp=mysql_fetch_array($sqldisp);
//echo $ress['quant'].'-------'.$resdisp['dispatch_quantity'].'<br />';
$less=$ress['quant']-$resdisp['dispatch_quantity'];
//echo $ress['product_id'].$ress['quant'].'-------------------------'.$less.'<br />';
//echo $less."<br/>";

?>
<tr>

<td><?php echo $respname['product_name'];?></td>
<td><?php echo $ress['size'];?></td>
<td><?php echo $less;?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
