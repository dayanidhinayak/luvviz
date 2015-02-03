<?php
include_once("function.php");
$idval=$_GET['id'];
 $que=mysql_query("delete from `footer` where `id`='$idval'")or die(mysql_error());
 header("location:set_footer.php");
 ?>
