<?php

ob_start();
session_start();
$con=mysql_connect("localhost","root","colourfade");
mysql_select_db("cake",$con);
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

//ob_flush();

?>
