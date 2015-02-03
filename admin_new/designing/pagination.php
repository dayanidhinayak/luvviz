<?php 
include_once("../function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../menu.css" media="screen" />
</head>

<body>
<div id="topbar100">
			<div id="topbar">
				<div style="padding:0px 10px; float:right; margin-right:10px; margin-top:5px;">
					
				</div>
			</div>
		</div>
		<div id="menubar100">
			<div id="menubar">
				<div class="menubar-left">
				
				</div>
		  </div>
		</div>
		
		<?php include_once("../menubar.php");?>
<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" style="">
			
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Pagination<br/>
				</div>
<form name="form" method="post" action="submit_pagination.php" >
<table align="center">
<?php 
//echo "select `value` from `pagination`";
$q=mysql_query("select `value` from `pagination`") or die(mysql_error());
$r=mysql_fetch_array($q);
//echo $r['value']."value";
if($r['value']=='0')
{
?>
<tr>
    <td><a href="enable.php?val=0">Click Here To Enable Pagination</a></td>
</tr>
<?php }
else
{

?>
<tr>
    <td><a href="enable.php?val=1">Click Here To Disable Pagination</a></td>
</tr>

<?php } ?>
</table>
</form>
</div>
</div>
</div>

</body>
</html>
