<?php 
include_once("../function.php");

$page=$_POST['page_id'];

$module=$_POST['add_module'];

$position=$_POST['position1'];

$prior=$_POST['priority'];


mysql_query("insert into `layout` set `position`='$position',`priority`='$prior',`page_id`='$page' , `module_id`='$module'") or die(mysql_error());
header("location:layout.php");
?>