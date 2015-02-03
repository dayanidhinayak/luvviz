<?php
ini_set("dispaly_errors",1);

include_once("function.php");

$que=mysql_query("SELECT `id` from `product` where MOD(`id`,3)='2'");
while($res=mysql_fetch_array($que))
{
mysql_query("update `product` set `rating`='4.5' where id='$res[id]'");

}



?>