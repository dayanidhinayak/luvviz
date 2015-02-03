<?php
include_once('../function.php');
$idval=$_GET['id'];
$q=mysql_query("delete from `index_image` where `id`='$idval'");
header("location:all_images.php");


?>