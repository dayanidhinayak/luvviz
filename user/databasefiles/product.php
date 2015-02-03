<?php
$con=mysql_connect("localhost","root","colourfade");
mysql_select_db("kriti_myshop",$con);
mysql_select_db("cake",$con);


$que=mysql_query("SELECT p.`product_id` , p.`quantity` , p.`manufacturer_id` , p.`image` , p.`price` , p.`status` , p.`date_added` , pd.`description`,pd.`name`
FROM `kriti_myshop`.`product` p, `kriti_myshop`.`product_description` pd
WHERE p.`product_id` = pd.`product_id` limit 0,300");
while($res=mysql_fetch_array($que))
{
$val="";
$q1=mysql_query("select `category_id` from `kriti_myshop`.`product_to_category` where `product_id`='$res[product_id]' limit 0,300");


while($r1=mysql_fetch_array($q1))
{
$val.="|".$r1['category_id']."|";

}
mysql_query("insert into `cake`.`product` set`id`='$res[product_id]', `product_name`='$res[name]',
`description`='',
`long_desc`='',
`price`='$res[price]',
`selling_price`='$res[price]',
`recurring_price`='$res[price]',
`type`='1',
`image`='$res[image]',
`category_id`='$val',
`brand_id`='$res[manufacturer_id]',
`created_ondate`='$res[date_added]',
`status`='$res[status]'")or die(mysql_error());

mysql_query("insert into `cake`.`stock` set `product_id`='$res[product_id]',`quantity`='$res[quantity]',`warehouse_id`='0',`type`='admin',`brand_id`='$res[manufacturer_id]'");	

}
?>