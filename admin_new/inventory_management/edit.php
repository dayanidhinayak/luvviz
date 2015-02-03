<?php
ini_set("display_errors",1);
include_once("../function.php");
$id=$_GET['ids'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mapkart adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	

</style>
</head>

<body>
		<div id="topbar">
			<div id="topbar_content">
				<div id="logo">
				</div>
				<div id="logoicon">
					<img src="images/order.png" style="float:left; margin-top:2px; margin-left:10px;" />
					<img src="images/customer.png" style="float:left;  margin-left:10px;"  />
					<img src="images/message.png" style="float:left; margin-top:2px;  margin-left:10px;" />
				</div>	
				
				<div id="searchbar">
					<table >
						<tr>
							<td style="border:1px solid #000000;">
							<input type="text" name="" style="width:200px; height:24px; float:left;" />
							
							<select style="float:left;padding:5px; height:30px;">
									<option name="">Everywhere</option>
							</select>
								
								<input type="submit" name="submit" value="" style="background:url(images/search.png); width:30px; height:30px; border:none; float:left;" />                            </td>
							
						</tr>
					</table>
				</div>
				
				<div id="selectbar">
					<select style="float:left;padding:5px; height:27px; background:#efefef; border:none; border-radius:2px; -moz-border-radius:2px;">
									<option name="">Quick Acce</option>
					</select>
				</div>
				
				<div id="topmenubar">
					<div class="topmenu">
						D Demo
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						My Preferences
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						<img src="images/logout.png" style="float:left; margin-right:5px;" />Logout
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						View My Shop
					</div>
				</div>
			</div>
		</div>
		
		<?php include_once("../menubar.php");?>
		
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
			<form name="f" method="post" action="update.php">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left; padding-left:1%;"><h3>Update Feature</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="features.php"><img src="images/process1.png" /></a><br/>Back to list</div>
			<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/package_add.png" /><br/>
				<input type="submit" name="submit" value="Update" /></div>
			</div>
			
			
			<div style="width:100%;  float:left; ">
				
				<div class="orderbox" style="margin-top:5%; width:98%;">
					<div class="orderheading">
						<img src="images/cart.gif" style="float:left; margin-right:5px;" />
						Feature
					</div>
					<div style="float:left; width:98%; padding:1%;">
				
				<table  align="center" cellpadding="5" cellspacing="0" style="width:50%;  font-family:Arial, Helvetica, sans-serif;  ">
				<?php
				$res=mysql_query("select * from `varient_table` where `id`='$id'");
				$row=mysql_fetch_array($res);
 
				?>
				
				<tr style="border:none; background:none;">
					<td>Name:</td>
					<td>
						<input type="hidden" name="hidden_id" value="<?php echo $row['id']; ?>"/>
						<input type="text" name="uname" value="<?php echo $row['varient_name'];?>"  style="width:150px; height:25px; border:1px solid #CCCCCC;">
					</td>
				</tr>
					<tr  style="border:none; background:none;">
<?php 
						$q1=mysql_query("select count(`product_id`) as `count` from `product_varient` where `varient_name`='$row[varient_name]'");
						$r1=mysql_fetch_array($q1);
						?>
						<td>Value:</td>
						<td><input type="text" name="value" value="<?php echo $r1['count'];?>" readonly  style="width:150px; height:25px; border:1px solid #CCCCCC;"/></td>
						
					</tr>

				</table>
				</form>
				</div>
					
				</div>
				
			</div>
		  </div>
		</div>
		
		<div id="footer">
			Map Cart Admin Panel<br/>
			<span style="color:#666666;">Load Time:0.081s</span>
		</div>

</body>
</html>
