<?php 
include_once('../function.php');
mysql_query("insert into `footer` set `name`='$_POST[page]',`type`='$_POST[type]',`content`='$_POST[content]',`head`='$_POST[head]'");
header("location:set_footer.php");
?>