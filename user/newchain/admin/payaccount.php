<?php
include_once('database.php');
$point=$_GET['points'];
$table=$_GET['tname'];
$amount=$point*125;
$query=mysql_query("insert into `$table` set `amount`='$amount', `points`='$point'")or die(mysql_error());

?>