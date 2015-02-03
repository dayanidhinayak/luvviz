<?php 
ini_set("display_errors",1);
include_once("function.php");
$codvalue=$_GET['codeval'];
//echo $codvalue;
$sql=mysql_query("select * from `pincode` where `pincode`='$codvalue'");
$no=mysql_num_rows($sql);
if($no<1){
    echo 1;
}

?>