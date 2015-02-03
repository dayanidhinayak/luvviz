<?php

include_once('../function.php');

$id=$_GET['pid'];

$slno=$_GET['slno'];



echo "delete from `product_images` where `slno`='$slno' and `product_id`='$id'";

mysql_query("delete from `product_images` where `slno`='$slno' and `product_id`='$id'");

header("location:add_image.php");


?>
