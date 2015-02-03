<?php
include_once('function.php');
$branch=$_GET['branchid'];
//echo $branch."branch id<br />";
$val=filter_var($branch, FILTER_SANITIZE_NUMBER_INT);
//echo $val."<br />";
$itemid=$_GET['item'];


$a=substr($itemid,-6);
//echo $a;
$x= filter_var($a, FILTER_SANITIZE_NUMBER_INT);
//echo $x;
echo $itemid."itemid";
$val1=explode("-droppable",$itemid);
echo $val1[0];
$value= filter_var($val1[0], FILTER_SANITIZE_NUMBER_INT);

$q=mysql_query("select `category_id` from `product` where `id`='$value'");
$r=mysql_fetch_array($q);

$cid=$r['category_id'];

$delid="|". $x."|";
$q=str_replace($delid,"",$cid);

echo $q;

mysql_query("update  `product` set `category_id`='$q' where `id`='$value'")or die(mysql_error());
$b=$q."|".$val."|";
echo "update `promote` set `category_id`='$b' where `id`='$value'";
mysql_query("update `product` set `category_id`='$b' where `id`='$value'")or die(mysql_error());


//$que=mysql_query("select `category_id` from `promote` where `id`='$value'");
//$res=mysql_fetch_array($que);
//$cid=$res['category_id'];
//$q=str_replace($val,"",$cid);

?>
