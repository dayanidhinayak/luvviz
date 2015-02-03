<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$status=$_GET['status'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Luvviz Adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	tr{
	height:35px;
	 text-shadow: 0 1px 0 #FFFFFF;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>
<script type='text/javascript' src='jquery.min.js'></script>

</head>

<body>

		
		
		<?php
		include_once('topbar.php');
		include_once('../menubar.php');?>
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<!--<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3><!--Catalog <img src="../images/separator1.png" /> Products</h3></div>
			
			</div>-->


<div style="width:100%; height:auto; float:left;">
<h3>Alredy Added Categories</h3>
<form action="changepwd1.php" method="POST"  name="f1">
	<table  width="480" border="0">
   
  <tr>
<span id="mydiv"><?php echo $status;?></span>
</tr>
  <tr>
    <td width="101">Current Password</td>
    <td width="50">
      <input type="password" name="cpwd"  required />   </td>
  </tr>
   <tr>
    <td width="101">New Password</td>
    <td width="50">
      <input type="password" name="npwd"  required />   </td>
  </tr>
  <tr>
    <td width="101">Confirm New Password</td>
    <td width="50">
      <input type="password" name="cnpwd"  required />   </td>
  </tr>
    
   
 
  <tr>
    <td>&nbsp;</td>
    <td>
      <input type="submit" name="submit" value="Submit" style="width:80px;height:35px;" />
	   </td>
    </tr>
</table>
</form>


</div>
</div>
                </div>
		  <?php
		include_once("../footer.php");
		?>
</body>
</html>
