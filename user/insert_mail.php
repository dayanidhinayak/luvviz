<?php 
include_once("function.php");
$email=$_GET['q'];
$q=mysql_query("insert into `news_letter` set `mail`='$email'");
if($q)
{
    echo "Congrats! You Have Successfully Registered For News Letter..";
}
?>