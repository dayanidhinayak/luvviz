<?php 
include_once('function.php');

$varient=$_POST['varient'];
foreach($varient as $v){

echo $v."-----".$_POST[$v];
}


?>
