<?php 
ini_set("display_errors",1);
include_once("../function.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Luvviz adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	

</style>
</head>

<body>
		
		
		<?php
		include_once("topbar.php");
		include_once("../menubar.php");?>
		
		<div id="container">
			<form name="form" action="insert_varient.php" method="post">
			<div id="container_content" style=" background:none; border:none;">
			
			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left; padding-left:1%;"><h3>Add a New Feature</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="features.php"><img src="images/process1.png" /></a><br/>Back to list</div>
			<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/package_add.png" /><br/><input type="submit" name="submit" value="Save" /></div>
			</div>
			
			
			
			<div style="width:100%;  float:left; ">
				
				<div class="orderbox" style="margin-top:5%; width:98%;">
					<div class="orderheading">
						<img src="images/cart.gif" style="float:left; margin-right:5px;" />
						Feature
					</div>
					<div style="float:left; width:98%; padding:1%;">
					<table  align="center" cellpadding="5" cellspacing="0" style="width:50%;  font-family:Arial, Helvetica, sans-serif;  ">
						<tr style="border:none; background:none;">
							<td>Name</td>
							<td><input type="text" name="name" style="width:150px; height:25px; border:1px solid #CCCCCC;" /></td>
					   </tr>
					</table>
					
				
					</div>
					<form>
				</div>
				
			</div>
		</div>
		</div>
		<?php
		include_once("../footer.php");
		?>

</body>
</html>
