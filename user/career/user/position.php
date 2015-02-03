<?php
include_once('database.php');
$uid=htmlentities($_GET['user']);
$tab="user".$uid;
$fet=mysql_query("select * from  `$tab` where `down`='$uid'");
$res=mysql_fetch_array($fet);
$left=$res['left'];
$right=$res['right'];
if($left==0 && $right==0)
{
?>
<input type="radio" name="side" value='L' checked="checked"/>LEFT     &nbsp;
<input type="radio" name="side" value='R' />RIGHT
<?php
}
if($left==1)
{
?>
<input type="radio" name="side" value='R' checked="checked"/>RIGHT
<?php
}
if($right==1)
{
?>
<input type="radio" name="side" value='L' checked="checked"/>LEFT
<?php
}
if($left==1 && $right==1)
{
echo"please select  valid   userid.";
}

?>