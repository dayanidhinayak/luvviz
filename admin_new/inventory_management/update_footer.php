<?php 

include_once('function.php');

//echo "update `footer` set `name`='$_POST[page]',`type`='$_POST[type]',`content`='$_POST[content]',`head`='$_POST[head]' where `id='$_POST[hdn]'";

mysql_query("update `footer` set `name`='$_POST[page]',`type`='$_POST[type]',`content`='$_POST[content]',`head`='$_POST[head]' where `id`='$_POST[hdn]'")or die(mysql_error());

header("location:set_footer.php");

?>