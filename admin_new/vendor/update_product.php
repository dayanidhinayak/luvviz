<?php 
include_once('../function.php');

$name=$_POST['name'];
//echo $name;
$priority=$_POST['priority'];
$id=$_POST['id'];

$price=$_POST['price'];

$sprice=$_POST['sellingprice'];

$recurringprice=$_POST['recurringprice'];

$arrival=$_POST['sel'];

$related_pro=$_POST['related_prod'];

//$qty=$_POST['quantity'];

//$varient=$_POST['varient'];

$mtitle=$_POST['mtitle'];

$mdescp=$_POST['mdescp'];

$mkey=$_POST['mkey'];

$cat1=$_POST['cat_id'];
$barcodeno=$_POST['refid'];

$brand=$_POST['brand_id'];
$status=$_POST['status'];


//$collection=$_POST['collection_id'];
$type=$_POST['type'];


$date=date("Y-m-d H:i:s");

//$qq=mysql_query("select `quantity` from `product` where `id`='$id'");
//$rr=mysql_fetch_array($qq);
//echo $rr['quantity'];
//$qty11=$rr['quantity']+$qty;
//echo $qty11;
$image = $_FILES['prodct_img']['name'];
$imagee=$_POST['imag'];
if($_POST['alt'])
{
$alt=$_POST['alt'];
}
else {
$alt=$name;
}

if($image=='')
{

mysql_query("update `product` set `product_name`='$name',`price`='$sprice',`selling_price`='$price',`recurring_price`='$recurringprice',`newarrival`='$arrival',`category_id`='$cat1',`brand_id`='$brand',`created_ondate`='$date',`type`='$type',`status`='$status', `alternate_val`='$alt',`releated_pro_id`='$related_pro',`metatitle`='$mtitle',`metadescription`='$mdescp',`metakeyword`='$mkey',`barcodeno`='$barcodeno',`priority`='$priority' where `id`='$id'")or die(mysql_error());
//echo "noimg"."update `product` set `product_name`='$name',`price`='$sprice',`selling_price`='$price',`recurring_price`='$recurringprice',`newarrival`='$arrival',`image`='$imagee',`category_id`='$cat1',`brand_id`='$brand',`created_ondate`='$date',`type`='$type',`status`='$status', `alternate_val`='$alt',`releated_pro_id`='$related_pro',`metatitle`='$mtitle',`metadescription`='$mdescp',`metakeyword`='$mkey',`barcodeno`='$barcodeno',`priority`='$priority' where `id`='$id'";

}
else{
//echo $image;
$file1=getexatfilename($image);

$ext1=getext($image);

 //echo "beforeext";
 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

//echo "afterext";

						{

	$folder="img/";



						 $filename = $folder . $image;
//echo $filename;

	 $copied = copy($_FILES['prodct_img']['tmp_name'], $filename);

//echo  $filename."-----";


			mysql_query("update `product` set `product_name`='$name',`price`='$sprice',`selling_price`='$price',`recurring_price`='$recurringprice',`newarrival`='$arrival',`image`='$filename',`category_id`='$cat1',`brand_id`='$brand',`created_ondate`='$date',`type`='$type',`status`='$status',`alternate_val`='$alt',`releated_pro_id`='$related_pro',`metatitle`='$mtitle',`metadescription`='$mdescp',`metakeyword`='$mkey',`barcodeno`='$barcodeno',`priority`='$priority' where `id`='$id'")or die(mysql_error());
//echo "img"."update `product` set `product_name`='$name',`price`='$sprice',`selling_price`='$price',`recurring_price`='$recurringprice',`newarrival`='$arrival',`image`='$filename',`category_id`='$cat1',`brand_id`='$brand',`created_ondate`='$date',`type`='$type',`status`='$status',`alternate_val`='$alt',`releated_pro_id`='$related_pro',`metatitle`='$mtitle',`metadescription`='$mdescp',`metakeyword`='$mkey',`barcodeno`='$barcodeno',`priority`='$priority' where `id`='$id'";			

}
 }
//$q1=mysql_query("select `quantity` from `stock` where `product_id`='$id'");
//$r=mysql_fetch_array($q1);

//$qty1=$r['quantity']+$qty;

//mysql_query("update `stock` set `quantity`='$qty1',`warehouse_id`='0',`type`='admin',`brand_id`='$brand' where `product_id`='$id'");			
$varient=$_POST['varient'];
//$desc=$_POST['vname'];
//echo $desc;
$str="";
foreach($varient as $p => $q)
{
//echo $p."--------".$q;
//$st=strtolower($p);
//echo $st;
//$rpl=str_replace(","," ",$st);
//$x=explode(" ",$rpl);
$x=explode(",",$p);
$varname=$x[0];
$varnme=strtolower($varname);
$varid=$x[1];
//echo $varname;
//echo $varid;
$str="`varient_name`='$varnme',`description`='$q'";
//echo "---".$str;

if($q!='')
{
//echo "select * from `product_varient` where `product_id`='$id' and `varient_name`='$p'<br/>";
$que_var_ser=mysql_query("select * from `product_varient` where `product_id`='$id' and `varient_name`='$varnme'");
$cnt_var_ser=mysql_num_rows($que_var_ser);
//echo $cnt_var_ser;
if(mysql_num_rows($que_var_ser)>0){
mysql_query("update `product_varient` set `description`='$q' where `product_id`='$id' and `varient_name`='$varname' and `id`='$varid'");
//echo "update `product_varient` set `description`='$q' where `product_id`='$id' and `varient_name`='$varnme' and `id`='$varid'";

}
else{
mysql_query("insert into `product_varient` set $str,`product_id`='$id'");
//echo "insert into `product_varient` set $str,`product_id`='$id'";
}

}
$str="";
}


header("location:update_desc_product.php?id=$id");



?>
