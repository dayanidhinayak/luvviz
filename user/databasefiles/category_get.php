<?php
$con=mysql_connect("localhost","root","colourfade");
mysql_select_db("kriti_myshop",$con);
mysql_select_db("cake",$con);
$query=mysql_query("SELECT c.`category_id`,c.`image`,c.`parent_id`,c.`status`,c.`date_added`,c.`date_modified`,cd.`name`,CONVERT(cd.`description` USING utf8) FROM `kriti_myshop`.`category` c,`kriti_myshop`.`category_description` cd WHERE c.`category_id`=cd.`category_id`")or die(mysql_error());
while($res=mysql_fetch_array($query))
{
mysql_query("insert into `cake`.`category` set `id`='$res[category_id]',`category_name`='$res[name]',`entry_ondate`='$res[date_added]',`parent`='$res[parent_id]',`status`='$res[status]',
`description`='$res[category_description]',`img`='$res[image]'")or die(mysql_error());	
}
?>