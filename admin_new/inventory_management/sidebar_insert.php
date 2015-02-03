<?php
ini_set('display_errors', 1);
include_once('../function.php');
$cat_id=$_POST['cat_id'];
$x='';
foreach($cat_id as $val)
{
//echo $val.'<br/>';
//echo "update `category` set `sidebar_status`='1' where `id`='$val'";
mysql_query("update `category` set `sidebar_status`='1' where `id`='$val'");
$x.="or `id`!='$val'";
}
$y=substr($x,2); 
mysql_query("update `category` set `sidebar_status`='0' where $y");
//echo "update `category` set `sidebar_status`='0' where $y";
header("location:add_sidebar.php");

?>