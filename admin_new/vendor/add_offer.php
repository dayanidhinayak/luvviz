<?php 
include_once('../function.php');
$que=mysql_query("select `id` from `login` where `user_name`='$_SESSION[user]'");
$rs=mysql_fetch_array($que);
$cid=$rs['id'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>::Map Cart ::</title>
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
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"frm",
			dateFormat:"%Y-%m-%d",
			cellColorScheme:"beige"

});

		new JsDatePick({
			useMode:2,
			target:"to",
			dateFormat:"%Y-%m-%d"

});
	};

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
									Add Promo Offer<br/>
				</div>
	  		  	<div style="width:250px; float:left; margin-top:20px;">
					<?php include_once('menubar1.php')?>
			</div>
			
			<div style="width:680px;  margin-top:20px; float:left; margin-left:20px;">

<div style="float:left">
<form name="form" action="insert_offer.php" method="post">
<table>

<tr>
     <td>Discount</td>
	 <td><input type="text" name="discount"  />%</td>
</tr>
<tr>
     <td>Number</td>
	 <td><input type="text" name="number"  /></td>
</tr>
<tr>
     <td>From</td>
	 <td><input type="text" name="frm" id="frm" readonly=""/></td>
	 <td>To</td>
	 <td><input type="text" name="to" id="to" readonly=""/></td>
</tr>
<tr>
<input type="hidden" name="cid" value="<?php echo $cid;?>" />
     <td colspan="2"><input type="submit" name="submit" value="submit" /></td>
</tr>
</table>
</form>
</div>
<div style="float:left">
<table>
<th colspan="6">Existing Promotional Offers</th>
<tr>
     <td>Code</td>
	 <td>created</td>
	 <td>From</td>
	 <td>To</td>
	<td>View/Edit</td>
	 <td>Disable</td>
</tr>
<?php 
$dt=date("Y-m-d H-i-s");
//echo "select * from `promo_offer` where `status`='0' and `to_date` <= '$dt'";
$q=mysql_query("select * from `promo_offer` where `status`='0' and `to_date` >= '$dt' and `created_by`='$cid'");
while($r=mysql_fetch_array($q))
{
$date = date("Y-m-d",strtotime($r['created']));
?>
<tr>
     <td><?php echo $r['promo_code'];?></td>
	 <td><?php echo $date;?></td>
	 <td><?php echo $r['from_date'];?></td>
	 <td><?php echo $r['to_date'];?></td>
	<td><a href="view_offer.php?id=<?php echo $r['id'];?>">View/Edit</a></td>
	 <td><a href="disable_offer.php?id=<?php echo $r['id'];?>">Disable</a></td>
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
