<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
$id=$_POST['hidden_id'];
$date=date("Y-m-d H:i:s");
for($i=1;$i<20;$i++)
{
$val=$i;
$size='sz'.$val;
$sizeval=$_POST[$size];
$quant='qty'.$val;
$quantval=$_POST[$quant];
$barcode='code'.$val;
$codeval=$_POST[$barcode];
$price='price'.$val;
$priceval=$_POST[$price];
$szl=strtoupper($sizeval);
if($_POST[$quant]!='')
{
mysql_query("insert into `stock` set `quantity`='$quantval',`size`='$szl',`product_id`='$id',`productcode`='$codeval',`date`='$date'")or die(mysql_error());
//echo "insert into `stock` set `quantity`='$quantval',`size`='$szl',`product_id`='$id',`productcode`='$codeval',`date`='$date'";
mysql_query("insert into `product_varient` set `varient_name`='size',`description`='$szl',`product_id`='$id'")or die(mysql_error());
//mysql_query("update `product` set `barcodeno`='$codeval' where `id`='$id'");

}

}
header("location:product.php");
?>
