<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$pageid=$_POST['page_name'];
$type=$_POST['view_type'];
$rr=mysql_query("select * from `appliedtype_to_page` where `pageid`='$pageid'");
$no=mysql_num_rows($rr);
if($no<1){
mysql_query("insert into `appliedtype_to_page` set `pageid`='$pageid',`type_name`='$type'");
}
else{
mysql_query("update `appliedtype_to_page` set `type_name`='$type' where `pageid`='$pageid'");
}
header("location:page_customised.php");
?>
