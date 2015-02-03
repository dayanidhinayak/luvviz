<?php 

include_once('../function.php');

$varientname=$_POST['name'];

//echo $varientname;
$sql=mysql_query("select * from `varient_table` where `varient_name`='$varientname'");
$no=mysql_num_rows($sql);
if($no<1){
mysql_query("insert into `varient_table` set `varient_name`='$varientname'")or die(mysql_error());
}
header("location:features.php");
?>
