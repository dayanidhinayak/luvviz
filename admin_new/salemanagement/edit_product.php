<?php 
include_once('function.php');
$prod_id=$_POST['pid'];
$name=$_POST['name'];
$desc=$_POST['desc'];
$price=$_POST['price'];

mysql_query("update `product` set `product_name`='$name',`description`='$desc',`price`='$price' where `id`='$prod_id'");
header("location:listof_products.php");

?>