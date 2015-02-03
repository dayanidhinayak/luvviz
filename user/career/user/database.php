<?php
ob_start();
session_start();
$con=mysql_connect("localhost","root","colourfade");
mysql_select_db("luvviz_cart",$con);


function getdetails($mid)
{
//echo "select * from $reg_table where mid='$mid'";
    $que=mysql_query("select * from register where mid='$mid'");
if($res=mysql_fetch_array($que))
   return $res;
else
return false;
}  
           //function update///////
function update($dmid,$duser,$newuser,$pos,$orgi='')
{
$usr_table='user'.$duser;
$reg_table='register';

$rem=$dmid%2;
$upid=($dmid-$rem)/2;
$upuser;


if($pos!='')
{
 mysql_query("INSERT INTO `$usr_table` (`down` ,`left` ,`right`) VALUES ('$newuser', '0', '0');");   
  if($pos=="L")
  {
    $posi='left';
mysql_query("UPDATE `$usr_table` SET `left`='left`+1 WHERE `down`='$duser'");
}
if($pos=="R")
{
    $posi='right';
mysql_query("UPDATE `$usr_table` SET `right`='right`+1 WHERE `down`='$duser'");
}

if($rem==0)
                {
                 if($dmid>1){
                 
              mysql_query("update `$reg_table` set `left`=`left`+1 where `mid`='$upid'")or die(mysql_error());
                 }}
                 
                  if($rem==1)
                {
                 if($dmid>1)
                {
             
                 mysql_query("update `$reg_table` set `right`=`right`+1 where `mid`='$upid'")or die(mysql_error());
                 }}
if($upid>0)
{
   update($upid,$duser,$newuser,'',$posi);
}   
}
//if position is null else part

else{
                $qry_upuser=mysql_query("select * from $reg_table where mid='$dmid'");
                $res=mysql_fetch_array($qry_upuser);
                                
                                $upuser='user'.$res["userid"];
                
                mysql_query("INSERT INTO `$upuser` (`down` ,`left` ,`right`) VALUES ('$newuser', '0', '0')");
                if($rem==0)
                {
                 if($dmid>1){
                 mysql_query("update `$reg_table` set `left`=`left`+1 where `mid`='$upid'")or die(mysql_error());
                 }
                 mysql_query("UPDATE `$upuser` SET `$orgi`='1' WHERE `down`='$duser'")or die(mysql_error());
                 }
                if($rem==1)
                {
                 if($dmid>1)
                 {
                mysql_query("update `$reg_table` set `right`=`right`+1 where `mid`='$upid'")or die(mysql_error());
                 }
                mysql_query("UPDATE `$upuser` SET `$orgi`='1' WHERE `down`='$duser'")or die(mysql_error());
              
               }  
                if($upid>0)
                {
                update($upid,$duser,$newuser,'',$orgi);
                }
    }
   
}



?>
