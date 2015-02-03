<?php
ob_start();
session_start();
$con=mysql_connect("localhost","luvviz_luvviz","pass@1234");
mysql_select_db("luvviz_cart",$con);
$val=$_SERVER["REQUEST_URI"];
mysql_query("insert into `page` set `userid`='$_SESSION[user]',`page_name`='$val'");

function getext($image)
{
$i=strrpos($image,'.');
$l=strlen($image)-$i;
$ext=substr($image,$i+1,$l);
$ext=strtolower($ext);
return $ext;
}


function getexatfilename($file)
{
$file=stripslashes($file);
return $file;
}

$que=mysql_query("select `limit` from `menulimit`");
$res=mysql_fetch_array($que);
$menulimitvalue=$res['limit'];

?>
