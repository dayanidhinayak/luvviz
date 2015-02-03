<?php 
include_once('function.php');
$frm_date=$_POST['frm'];
$to_date=$_POST['to'];

if(!isset($_POST['frm']) && !isset($_POST['to']))
{

$q=mysql_query("select p.`product_name`,p.`price`,t.`product_id`,sum(t.`quantity`) as `quantity` from `order_details` od,`temp_billinfo` t,`product` p where od.`status`='1' and od.`id`=t.`bill_id` and t.`product_id`=p.`id` group by t.`product_id`") or die(mysql_error());
}
else
{

$q=mysql_query("select p.`product_name`,p.`price`,t.`product_id`,sum(t.`quantity`) as `quantity` from `order_details` od,`temp_billinfo` t,`product` p where od.`status`='1' and od.`id`=t.`bill_id` and t.`product_id`=p.`id` and od.`order_ondate` between '$frm_date' and '$to_date' group by t.`product_id` ") or die(mysql_error());
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" media="all" href="salemanagement/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="salemanagement/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"frm",
			dateFormat:"%Y-%m-%d",
			cellColorScheme:"beige"

});

		new JsDatePick({
			useMode:2,
			target:"to",
			dateFormat:"%Y-%m-%d"

});
	};

</script>
</head>

<body>

<table>
<th>Product Sold</th>

<tr>
</tr>
</table>

<form name="form1" method="post" action="product_sale.php">
<table>
    <tr> <td>From</td>
	 <td><input type="text" name="frm" id="frm" readonly=""/></td>
	 <td>To</td>
	 <td><input type="text" name="to" id="to" readonly=""/></td>
	 <td><input type="submit" name="submit" value="Enter" /></td></tr>
</table>
</form>

<table>

<tr>
     <td>Product Id</td>
	 <td>Product Name</td>
	 <td>Quantity sold</td>
	 <td>Price sold</td>
	 <td>sales</td>
	 
</tr>
<tbody id="result">

<?php 
$tot=0;


while($r=mysql_fetch_array($q))
{
if($r['quantity']>1)
{
				if($r['recurring_price']!="")
				{
				$price=$r['recurring_price']*$r['quantity'];
				}
				else
				{
				$price=$r['price']*$r['quantity'];
				}
}
else
{
				$price=$r['price']*$r['quantity'];
}
$tot+=$price;
?>
<tr>
     <td><?php echo $r['product_id'];?></td>
	 <td><?php echo $r['product_name'];?></td>
	 <td><?php echo $r['quantity'];?></td>
	 <td><?php echo $r['price'];?></td>
	 <td><?php echo $price;?></td>
</tr>
<?php } ?>
<tr>
    <td>Total:</td><td><?php echo $tot;?></td>
</tr>
</tbody>
</table>

</body>
</html>
