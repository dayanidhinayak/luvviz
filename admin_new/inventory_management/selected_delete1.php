<?php
include_once("../function.php");
$value=$_POST['promo'];
foreach($value as $v)
{

mysql_query("delete from `promo_product` where `id`='$v'");

}
header("location:promo_offer1.php");

?>
