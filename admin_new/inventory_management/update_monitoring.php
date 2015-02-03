<?php 
include_once('../function.php');

$name=$_POST['name'];
//echo $name;
$id=$_POST['id'];

$price=$_POST['price'];

$sprice=$_POST['sellingprice'];

$recurringprice=$_POST['recurringprice'];

$related_pro=$_POST['related_prod'];

$qty=$_POST['quantity'];

//$varient=$_POST['varient'];



$cat1=$_POST['cat_id'];


$brand=$_POST['brand_id'];
$status=$_POST['status'];


//$collection=$_POST['collection_id'];
$type=$_POST['type'];


$date=date("Y-m-d H:i:s");



$image = $_FILES['prodct_img']['name'];


if($_POST['alt'])
{
$alt=$_POST['alt'];
}
else $alt=$name;



$file1=getexatfilename($image);



$ext1=getext($image);



 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")



						{

	$folder="img/";



						 $filename = $folder . $image;

	 $copied = copy($_FILES['prodct_img']['tmp_name'], $filename);

	 }

if($filename=="")
{
mysql_query("update `product` set `product_name`='$name',`price`='$sprice',`selling_price`='$price',`recurring_price`='$recurringprice',`category_id`='$cat1',`brand_id`='$brand',`created_ondate`='$date',`type`='$type',`status`='$status', `alternate_val`='$alt',`releated_pro_id`='$related_pro' where `id`='$id'")or die(mysql_error());

}
else
{
			mysql_query("update `product` set `product_name`='$name',`price`='$sprice',`selling_price`='$price',`recurring_price`='$recurringprice',`image`='$filename',`category_id`='$cat1',`brand_id`='$brand',`created_ondate`='$date',`type`='$type',`status`='$status',`alternate_val`='$alt',`releated_pro_id`='$related_pro' where `id`='$id'")or die(mysql_error());	

}
$q=mysql_query("select `quantity` from `stock` where `product_id`='$id'");
$r=mysql_fetch_array($q);

$qty1=$r['quantity']+$qty;

mysql_query("update `stock` set `quantity`='$qty1',`warehouse_id`='0',`type`='admin',`brand_id`='$brand' where `product_id`='$id'");			



$varient=$_POST['varient'];
$desc=$_POST['vname'];
$str="";
foreach($varient as $p => $q)
{


$str="`varient_name`='$p',`description`='$q'";
//echo $str;

if($q!='')
{
echo "select * from `product_varient` where `product_id`='$id' and `varient_name`='$p'<br/>";
$que_var_ser=mysql_query("select * from `product_varient` where `product_id`='$id' and `varient_name`='$p'");
$cnt_var_ser=mysql_num_rows($que_var_ser);
echo $cnt_var_ser;
if(mysql_num_rows($que_var_ser)>0)
mysql_query("update `product_varient` set `description`='$q' where `product_id`='$id' and `varient_name`='$p'")or die(mysql_error());
else
mysql_query("insert into `product_varient` set $str,`product_id`='$id'")or die(mysql_error());
}
$str="";

}

header("location:edit_monitoring.php?id=$id");



?>
