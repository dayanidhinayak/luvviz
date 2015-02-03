<?php

foreach($_POST as $q=>$v )
if ($v!="submit")
{
//echo $q."------------------".$v.'<br />';

//echo $q;
include_once('function.php');

mysql_query("UPDATE `topseller` SET `priotity`='$v' WHERE `slno`='$q'");
header("location:display.php");
}

?>