<?php
$con=mysql_connect("localhost","root","colourfade");
mysql_select_db("kriti_myshop",$con);
mysql_select_db("cake",$con);

$val="";
$que=mysql_query("SELECT p.`product_id` , p.`quantity` , p.`manufacturer_id` , p.`image` , p.`price` , p.`status` , p.`date_added` , pd.`description`
FROM `kriti_myshop`.`product` p, `kriti_myshop`.`product_description` pd
WHERE p.`product_id` = pd.`product_id`");
while($res=mysql_fetch_array($que))
{

$q1=mysql_query("select `category_id` from `product_to_category` where `product_id`='$res[product_id]'");
while($r1=mysql_fetch_array($q1))
{
$val.="|".$r1['category_id']."|";

}
echo $val;
}
?>