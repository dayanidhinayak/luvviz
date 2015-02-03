<?php 
include_once('../function.php');
$pname=$_POST['pname'];
$idval=$_POST['idval'];
$pcode=$_POST['pcode'];
$uname=$_POST['usernm'];
//echo $uname;
//echo $pname;
//echo $idval;
//echo $pcode;
mysql_query("insert into `stock` set `product_id`='$idval',`productcode`='$pcode',`quantity`='1',`type`='$uname'");
//echo "insert into `stock` set `product_id`='$idval',`productcode`='$pcode',`quantity`='1',`type`='$uname'";
header("location:addproduct.php?name=$pname");
?>