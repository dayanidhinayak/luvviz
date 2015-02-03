<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen"  />
<link href="admin_002.css" rel="stylesheet" type="text/css" media="all">
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
		
		<?php include_once("menubar.php");?>
		
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left; "><h3 style="padding-left:1%;">Catalog <img src="images/separator1.png" />Suppliers</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/addnew.png" /><br/>Add New</div>
			
			</div>
			
			
			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						<th><input type="checkbox"  /></th>
						<th>ID</th>
						<th>Logo</th>
						<th>Name</th>
						
						<th>Number Of Products</th>
						<th>Enabled</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>-</td>
						<td><input type="text" name="" style="width:50px; border:1px solid #efefef;" /></td>
						<td>-</td>
						<td><input type="text" name="" style="width:600px; border:1px solid #efefef;" /></td>
						
						<td><input type="text" name="" style="width:100px; border:1px solid #efefef;" /></td>
						<td>
						<select>
							<option value="1" ></option>
						</select></td>
						<td>-</td>
					</tr>
					<tr>
						<td><input type="checkbox"  /></td>
						<td>1</td>
						<td><img src="images/apple.jpg" /></td>
						<td>AppleStore</td>
						
						<td>6</td>
						<td><img src="images/tick.png" /></td>
						<td><img src="images/details.gif" /><img src="images/edit.gif" /><img src="images/delete.gif" /></td>
				</table>
			</div>
		  </div>
		</div>
		
		<div id="footer">
			Map Cart Admin Panel<br/>
			<span style="color:#666666;">Load Time:0.081s</span>
		</div>

</body>
</html>
