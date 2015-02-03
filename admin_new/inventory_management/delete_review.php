<?php 
include_once('../function.php');
$id=$_GET['id'];
mysql_query("delete from `review` where `id`='$id'");
header("location:customer_review.php");
?>
