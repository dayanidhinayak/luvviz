<?php
include_once("../function.php");
$id=$_GET['val'];
$res=mysql_query("update review set `status`='1' where `id`='$id'");
if($res){
echo '1';
}
?>
