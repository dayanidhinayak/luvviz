<?php 
include_once('../function.php');

$q2=mysql_query("select ``");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="menu1.css" />

<script type="text/javascript" src="cssverticalmenu.js">

/***********************************************

* CSS Vertical List Menu- by JavaScript Kit (www.javascriptkit.com)
* Menu interface credits: http://www.dynamicdrive.com/style/csslibrary/item/glossy-vertical-menu/ 
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more

***********************************************/

</script>
<script>
function display()
{
document.getElementById('addvendor').style.display="block";

}
</script>
</head>

<body>
<div id="topbar100">
			<div id="topbar">
				<div style="padding:0px 10px; float:right; margin-right:10px; margin-top:5px;">
					
				</div>
			</div>
		</div>
		
		
		<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" style="">
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Create Pos<br/>
				</div>
	  		  	<div style="width:250px; float:left; margin-top:20px;">
					<?php include_once('menubar1.php')?>
			</div>
			
			<div style="width:680px;  margin-top:20px; float:left; margin-left:20px;">
<div style="float:left; display:none;" id="addvendor">
<form name="form" action="insert_pos.php" method="post">
<table>

<tr><td style="font-size:18px;color:#FF3333;"><?php echo $msg;?></td></tr>
<tr>
     <td>Email Id</td>
	 <td><input type="text" name="email" /></td>
</tr>
<tr>
     <td>Password</td>
	 <td><input type="password" name="pass" /></td>
</tr>

<tr>
 <td>Vendor Name</td>
 
  <td><input type="text" name="vendor" value="<?php echo $_SESSION['user']?>" readonly="" /></td>
  </tr>


<tr>
     <td>User Name</td>
	 <td><input type="text" name="name" /></td>
</tr>

<tr>
     <td>Phone Number</td>
	 <td><input type="text" name="phn" /></td>
</tr>
<tr>
     <td>Address</td>
	 <td><textarea name="address"> </textarea></td>
</tr>
<tr>
     <td>Country</td>
	 <td><input type="text" name="country" /></td>
</tr>
<tr>
     <td>State</td>
	 <td><input type="text" name="state" /></td>
</tr>
<tr>
     <td>Zip</td>
	 <td><input type="text" name="pin" /></td>
</tr>
<tr>
     <input type="hidden" name="cid" value="<?php echo $r2['slno'];?>" />
	 <td colspan="2"><input type="submit" name="submit" value="Submit" /></td>
</tr>
</table>
</form>
</div>
<div style="float:left">
<table>
<span><input type="button" name="btn1" value="Add New Pos"  onclick="return display();"  /></span>
<th>Existing POS</th>
<tr>
     <td>Name</td>
	 <td>User Name</td>
	 <td>created</td>
	<td>View/Edit</td>
	 <td>Disable</td>
</tr>
<?php 

$q=mysql_query("select * from `pos_user_detail`  where `status`='0' and `created_by`='$r2[slno]'");
while($r=mysql_fetch_array($q))
{
$date = date("Y-m-d",strtotime($r['created']));
?>
<tr>
     <td><?php echo $r['name'];?></td>
	 <td><?php echo $r['email'];?></td>
	 <td><?php echo $date;?></td>
	 <td><a href="view_pos_detail.php?id=<?php echo $r['slno'];?>">View/Edit</a></td>
	 <td><a href="disable_pos.php?id=<?php echo $r['slno'];?>">Disable</a></td>
</tr>
<?php } ?>
</table>
</div>
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
