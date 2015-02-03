<?php
include_once('../function.php');

$q2=mysql_query("select * from `category` where `pc_status`='1' ORDER BY id") or die(mysql_error());
while($r2=mysql_fetch_array($q2))
{
    $id=$r2['id'];
    $val=prio.$id;
    //echo $val;
    $val1=$_POST[$val];
    //echo $val1;
    mysql_query("update `category` set `mpc_priority`='$val1' where `id`='$id'") or die(mysql_error());
}
//mysql_query("update `category` set `mpc_priority`='$priority' where `id`='$id'") or die(mysql_error());

header("location:make_priority.php");
?>