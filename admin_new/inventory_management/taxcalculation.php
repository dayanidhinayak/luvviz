<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
$val=$_GET['q'];
$val1=$_GET['q1'];

$price=$val1*($val/100);

$tot_val=$val1+$price;

echo $tot_val;

?>