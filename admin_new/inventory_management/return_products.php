<?php
include_once("../function.php");
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
									Return Product  Details <br/>
				</div>

<form name="form" method="post" action="hide_product.php">
<table style="margin-left:100px;">

<tr><td>&nbsp;</td>
<td>Product Name</td>
<td>Return Quantity</td>
<td>Reason For Return</td>
<td>Return By</td>
<td>Return Ondate</td>
</tr>
<?php
$query=mysql_query("select r.*,p.`order_by` from `return_product` r ,`purchase_order` p where `r`.``=`p`.``");
while($res=mysql_fetch_array($query))
{

?>
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
