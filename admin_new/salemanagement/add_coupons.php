<?php 
include_once('../function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>::Map Cart ::</title>
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
								Add Coupon<br/>
				</div>
<div style="float:left">
<form name="form" action="insert_coupon.php" method="post" enctype="multipart/form-data">
<table>

<tr>
     <td>Cupon Name</td>
     <td><input type="text" name="cname" /></td>
</tr>
<tr>
     <td>Cupon code</td>
     <td><input type="text" name="ccode" /></td>
</tr>
<tr>
     <td>Discount</td>
     <td><input type="text" name="discount" />%</td>
</tr>
<tr>
     <td>Image</td>
     <td><input type="file" name="img" /></td>
</tr>
<tr>
     <td colspan="2"><input type="submit" name="submit" value="submit" /></td>
</tr>
</table>
</form>
</div>
<div style="float:left">
<table>
<th>Existing Coupon</th>
 <tr>
     <td>Coupon Name</td>
	 <td>created</td>
	 <td>View/Edit</td>
	 <td>Disable</td>
 </tr>
 <?php 
 $q=mysql_query("select * from `coupon` where `status`='0'");
 while($r=mysql_fetch_array($q))
 {
 $date = date("Y-m-d",strtotime($r['created']));
 ?>
     
	 <td><?php echo $r['name'];?></td>
	 <td><?php echo $date;?></td>
	 <td><a href="edit_coupon.php?id=<?php echo $r['id'];?>">View/Edit</a></td>
	 <td><a href="disable_coupon.php?id=<?php echo $r['id'];?>">Disable</a></td>
	 
 <?php } ?>
</table>
</div>
</div>
			</div>
		</div>
		
		<div id="footer100">
			<div id="footer" class="font1">
				<span style="float:left; margin-left:30px;">
					All Rights Reserved @ Map Cart
				</span>
				<span style="float:right; margin-right:30px;">
					
				</span>
			</div>
		</div>
</body>

</html>
