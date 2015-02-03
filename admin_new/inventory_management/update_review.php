<?php
ini_set("display_errors",1);
include_once("../function.php");
$id=$_POST['hidden_id'];
$rev=$_POST['revname'];
$res=mysql_query("update review set `review`='$rev' where `id`='$id'");
header("location:customer_review.php");
?>
