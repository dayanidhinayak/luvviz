<?php
include_once("../function.php");
//echo $_SESSION['user'];
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

<script type="text/javascript">
function search_invoice(key)
{

var res=document.getElementById('result');
if (window.XMLHttpRequest)

  {
  xmlhttp=new XMLHttpRequest();
  }
else
 {
 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
xmlhttp.onreadystatechange=function()
 {
 if (xmlhttp.readyState==4 && xmlhttp.status==200)
 {
var result=xmlhttp.responseText;
res.innerHTML=result;

	}
}
xmlhttp.open("GET","search_po.php?q="+key,true);

xmlhttp.send();
}
</script>
<script type="text/javascript">
function search_invoice1(key)
{

var res=document.getElementById('result');
if (window.XMLHttpRequest)

  {
  xmlhttp=new XMLHttpRequest();
  }
else
 {
 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
xmlhttp.onreadystatechange=function()
 {
 if (xmlhttp.readyState==4 && xmlhttp.status==200)
 {
var result=xmlhttp.responseText;
res.innerHTML=result;

	}
}
xmlhttp.open("GET","search_po_id.php?q="+key,true);

xmlhttp.send();
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
									View purchase Order<br/>
				</div>
	  		  	<div style="width:250px; float:left; margin-top:20px;">
					<?php include_once('menubar1.php')?>
			</div>
		
			<div style="width:680px;  margin-top:20px; float:left; margin-left:20px;">
				<span style="padding-left:10px; padding-right:10px;">Filter Table</span><input type="text" name="search1" id="search1" onkeyup="search_invoice(this.value)" />(by name)<input type="text" name="search1" id="search1" onkeyup="search_invoice1(this.value)" />(by id)
<table>
	<tr><td colspan="4">Purchase Order Details</td></tr>
	<tr>
	<td>Purchase Order No</td>
	<td>Product name</td>
	<td>Ordered Quantity</td>
	<td>Ordered Ondate</td>
	<td>Action</td>
	</tr>
	<tbody id="result">
<?php
$query=mysql_query("select po.`order_id`,po.`quantity`,po.`entry_date`,po.`id`,p.`product_name` from `purchase_order` po,`product` p  where `order_by`='$_SESSION[user]' and p.`id`=po.`product_name`");
while($res=mysql_fetch_array($query))
{

?>
<tr>
     <td><?php echo $res['order_id'];?></td>
     <td><?php echo $res['product_name'];?></td>
	<td><?php echo $res['quantity'];?></td>
	<td><?php echo $res['entry_date'];?></td>
<?php
if($res['approval_status']==1)
{
?>
	<td><a href="po_edit.php?id=<?php echo $res['id'];?>">Edit</a></td>
<?php
}
else
{
?>
<td><a href="po_edit.php?id=<?php echo $res['id'];?>">Edit</a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="po_delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
<?php
}
?>
	</tr>
<?php
}
?>
</tbody>
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
