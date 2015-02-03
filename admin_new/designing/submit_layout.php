<?php 
include_once("../function.php");

$page=$_POST['page'];
//echo $page.'<br/>';
$module=$_POST['module'];
//echo $module.'<br/>';
$position=$_POST['position'];
//echo $position.'<br/>';
$prior=$_POST['prior'];
//echo $prior.'<br/>';

//echo "update `layout` set `position`='$position',`priority`='$prior' where `page_id`='$page' and `module_id`='$module'";
mysql_query("update `layout` set `position`='$position',`priority`='$prior' where `page_id`='$page' and `module_id`='$module'") or die(mysql_error());
header("location:layout.php");
?>