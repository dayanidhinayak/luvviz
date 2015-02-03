<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
?>
<html>
<head></head>
<body>
<table>
<tr>
<td colspan="2">Existing Inventory</td>
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
$resproname=mysql_fetch_array($proname);
?>
<tr>
<td><?php $resproname['product_name'];?></td>
<td><?php $resstock['size'];?></td>
<td><?php $resstock['quantity'];?></td>
<td><?php $resstock['price'];?></td>
<td><?php $resstock['date'];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
