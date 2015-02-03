<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Luvviz adminpanel</title>
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
</head>

<body>

		
		<?php
		include_once('topbar.php');
		include_once('../menubar.php');?>
		
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
<form name="form" action="insert_pid.php" method="post">
<table>
<tr>
     <td><select name="product">
	 <?php 
	 $q=mysql_query("select * from `product`");
	 while($r=mysql_fetch_array($q))
	 {
	 ?>
	 <option value="<?php echo $r['id']?>"><?php echo $r['product_name'];?></option>
	 <?php } ?>
	 </select></td>
	 
	 
	 <td><select name="product1[]" multiple="multiple">
	 <?php 
	 $q1=mysql_query("select * from `product`");
	 while($r1=mysql_fetch_array($q1))
	 {
	 ?>
	 <option value="<?php echo $r1['id']?>"><?php echo $r1['product_name'];?></option>
	 <?php } ?>
	 </select></td>
</tr>
<tr>
    <td><input type="submit" value="submit"  /></td>
</tr>
</table>
</form>
</div></div>
		<?php
		include_once("../footer.php");
		?>
</body>
</html>
