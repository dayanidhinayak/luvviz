<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
$slno=$_GET['val'];
$quant=$_GET['quantity'];
//echo $quant."----<br/>";
$sqlstk=mysql_query("select * from `stock` where `slno`='$slno'");
$resstk=mysql_fetch_array($sqlstk);
//echo $resstk['quantity'];
if($quant<=$resstk['quantity']){
    
}
else{
    echo 1;
}
?>