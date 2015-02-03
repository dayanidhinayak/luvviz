<?php
include_once('../function.php');
$idval=$_GET['id'];
$q=mysql_query("select * from `category` where `id`='$idval'");
$r=mysql_fetch_array($q);
$cname=$r['category_name'];
$que=mysql_query("select * from `product` where `category_id` like '%|$idval|%' and `status`!='0'");
$rs=mysql_num_rows($que);
if($rs!=0)
{
echo "There are some product assign to $cname.. You can not delete this category...";
}
else
{
echo "Products are not available in this category....|$idval";
//mysql_query("delete from `category` where `id`='$idval'");
}

?>