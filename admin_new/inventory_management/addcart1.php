<?php
ob_start();
	
	if(isset($_POST))
    {
	$promo_name=$_POST['name'];
    $description=$_POST['description'];
$discount=$_POST['discount'];
$product_id=$_POST['pid'];
//$promo_name=$_POST['pname'];

	$code=rand(1000000000,9000000000);
    $partial_use=$_POST['partial_use'];
    $priority=$_POST['priority'];
    $from_date=$_POST['from'];
    $to_date=$_POST['to'];
   
	echo $promo_name;

ini_set('allow_url_include' , true);
include_once('../function.php');


mysql_query("INSERT INTO promo_product (`promo_name`,`description`,`discount`,`product_id`,`promo_code`,`status`,`priority`,`from_date`,`to_date`)
VALUES ('$promo_name','$description','$discount','$product_id','$code','$partial_use','$priority','$from_date','$to_date')") or die(mysql_error());
//mysql_close($con);
echo "INSERT INTO promo_product (`promo_name`,`description`,`discount`,`product_id`,`promo_code`,`status`,`priority`,`from_date`,`to_date`)
VALUES ('$promo_name','$description','$discount','$product_id','$code','$partial_use','$priority','$from_date','$to_date')" or die(mysql_error());
	}
	
	
	
   // echo $result['promo_name'];
header("location:promo_offer1.php");
ob_flush();
	?>
