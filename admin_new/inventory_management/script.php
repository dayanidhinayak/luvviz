<?php 
include_once("../function.php");
$q=mysql_query("select `id` from `product`");
while($r=mysql_fetch_array($q))
{
if($r['id']%3=='0')
{
echo "0";
mysql_query("insert into `product_varient` set `product_id`='$r[id]',`varient_name`='weight',`description`='$r[id]'");
}
else
{
echo "1";
mysql_query("insert into `product_varient` set `product_id`='$r[id]',`varient_name`='height',`description`='$r[id]'");
}

}
?>