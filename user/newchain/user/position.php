<?php
include_once('database.php');
$uid=$_GET['user'];
$tab="user".$uid;
$fet=mysql_query("select * from  `$tab` where `down`='$uid'");
$res=mysql_fetch_array($fet);
$left=$res['left'];
$right=$res['right'];
if($left==0)
{
?>
<input type="radio" name="side" value='L'/>LEFT     &nbsp;
<?php
}
if($right==0)
{
?>
<input type="radio" name="side" value='R'/>RIGHT
<?php
}

if($left==1 && $right==1){
echo"please select  valid   userid.";

       }

?>