<?php

$con=mysql_connect("localhost","root","colourfade");



mysql_select_db("cake",$con);

$query=mysql_query("select `image` from `product`");
while($res=mysql_fetch_array($query))
{

$val=str_replace("data/","img/",$res['image']);
mysql_query("update `product` set `image`='$val' where `image`='$res[image]'");


}
?>