<?php 
include_once('../function.php');
$id=$_POST['product_id'];
$desc=$_POST['desc'];
$ldesc=$_POST['ldesc'];
mysql_query("update `product` set `description`='$desc',`long_desc`='$ldesc' where `id`='$id'");
header("location:addnewproducts.php");
?>