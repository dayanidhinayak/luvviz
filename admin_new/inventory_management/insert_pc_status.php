<?php
include_once('../function.php');
foreach($_POST as $a)
{

if($a!='Submit')
{
//echo $a.'--------------------'.$b.'<br/>';
echo "update `category` set `pc_status`='1' where `id`='$a'";
mysql_query("update `category` set `pc_status`='1' where `id`='$a'");
}

}
header('location:make_pc.php');
?>