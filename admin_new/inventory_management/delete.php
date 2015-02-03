<?php 
include_once('function.php');
    $slno=$_GET['slno'];
   
  mysql_query("delete  from `topseller` where `slno`='$slno'")or die('2');
  	echo "1";
   
  
 
  
?>

