<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
	 
	 	}
		tr th{
		background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
    color: #333333;
    font-size: 14px;
	font-family:Arial, Helvetica, sans-serif;
 
    line-height: 29px;
    margin: 0;
    padding: 0 0 0 10px;
	text-align:left;
    text-shadow: 0 1px 0 #FFFFFF;
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
		
		<?php 
		include_once($path.'/menubar.php');?>
		
		
		<div id="container">
		<form action="insert_category.php" method="post">
			
			<div id="container_content" style=" background:none; border:none;">
			
			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><input type="submit" name="submit" style="background:url('../images/addnew.png'); border:none; height:32px; width:32px;" value=""/><br/>SAVE</div>
			
			<div id="container_left" style="width:100%;">
				  <div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">
				    <div class="orderheading">
						<img src="images/categories5.gif" style="float:left; margin-right:5px;" />
						Category
					</div>
			  
			  <table width="40%" border="0" height="150px;" style="float:left;  margin-left:15%;	 ">
						
  <tr>
    <td width="21%" >Name:</td>
    <td colspan="2"><input type="text" name="product_name" style=" border:1px solid #CCCCCC;"/></td>
	
  </tr>
   <tr>
    <td>Displayed:</td>
    <td width="37%"><input type="radio" name="display" value="1"/><img src="images/tick.png" /><input type="radio" name="display" value="0" /><img src="../images/disabled.gif" /></td>
	 
  </tr>
  <tr>
    <td >Description: </td>
    <td><textarea name="textarea" rows="9" cols="50" style=" border:1px solid #CCCCCC;"/>
    
      </textarea></td>
  </tr>
  <tr>
  
   <td>
	<ul><li><input type="radio" name="idval" value="0" >Header</li></ul>
	 
	 <?php
	 $que=mysql_query("select * from `category`");
	 while($res=mysql_fetch_array($que))
	 {
	 tree_view($res['id']);
	 
	  }
	  
	 
	 ?>
	 
	 
	 </td>
  </tr>
 
  <tr>
  <td></td>
    <td style="font-size:11px; font-style:italic;" >Upload category logo from your computer </td>
   
  <!--</tr>
  <tr>
    <td >Meta title: </td>
    <td><input type="text" name=""  style=" border:1px solid #CCCCCC;" /></td>
	 
  </tr>
  
  <tr>
    <td >Meta description:  </td>
    <td><input type="text" name=""  style=" border:1px solid #CCCCCC;" /></td>
	 
  </tr>
  
   <tr>
    <td >Meta keywords:   </td>
    <td><input type="text" name=""  style=" border:1px solid #CCCCCC;" /></td>
	 
  </tr>
   <td></td>
    <td style="font-size:11px; font-style:italic;" >To add "tags" click in the field, write something, then press "Enter"  </td>
   
  </tr>
  
   <tr>
    <td >Friendly URL:   </td>
    <td><input type="text" name=""  style=" border:1px solid #CCCCCC;" /></td>
	 
  </tr>
  
   <tr>
    <td >Group access:  </td>
    <td>               
	                 <table cellpadding="5" cellspacing="0" width="60%" style=" border:1px solid #CCCCCC; background:#FFFFFF;">
	                       <tr>
							<th ><input type="checkbox" name="" /> </th>
							<th >	ID</th>
							<th>	Group name </th>
							
							
							
						</tr>
						<tr style="border-bottom:1px #CCCCCC solid;">
							<td ><input type="checkbox" name="" /></td>                   
							<td>1</td>
							<td>Visitor</td>
						</tr>
						
						<tr style="border-bottom:1px #CCCCCC solid;">
							<td ><input type="checkbox" name="" /></td>                   
							<td>2</td>
							<td>Guest</td>
						</tr>
						
						<tr >
							<td ><input type="checkbox" name="" /></td>                   
							<td>3</td>
							<td>Customer</td>
						</tr>
	                  </table>
	          </td>
  </tr>
    <tr>
    <td ></td>
    <td style="font-size:11px; font-style:italic; ">Mark all customer groups you want to give access to this category </td>
	 
  </tr>
</table>

 
				   		
				   </table>
				  
			  <div class="headingbox" style="margin-top:1%; width:20%; margin-left:30%; ">You now have three default customer groups.
Visitor - All people without a validated customer account.
Guest - Customer who placed an order with the Guest Checkout.
Customer - All people who have created an account on this site.</div>
			  </div>-->
			   </form>
				
				
				
			  </div>
			  <div id="container_right"></div>
			  <div style="width:100%;  float:left; "></div>
		</div>
		
<div id="footer">
			Map Cart Admin Panel<br/>
			<span style="color:#666666;">Load Time:0.081s</span>
		</div>

</body>
</html>
