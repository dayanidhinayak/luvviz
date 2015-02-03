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
<script type="text/javascript">
function search_invoice(key)
{
//alert(key);
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
xmlhttp.open("GET","search_po_list.php?q="+key,true);

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
									Product  Details<br/>
				</div>
				<span style="padding-left:10px; padding-right:10px;">Filter Table</span><input type="text" name="search1" id="search1" onkeyup="search_invoice(this.value)" />
<form name="form" method="post" action="hide_product.php">
<table style="margin-left:100px;">

<tr><td>&nbsp;</td>
<th>Product Name</th>
<th>Vandor Price</th>
<th>Selling Price</th>
<th>Product Description</th>
<th>Created In</th>
<th>Action</th>
<td>&nbsp;</td>
</tr>
<tbody id="result">
<?php
$query=mysql_query("select * from `product`");
while($res=mysql_fetch_array($query))
{

?>
<tr>
<td><input type="checkbox" name="hide[]" value="<?php echo $res['id'];?>"  /></td>
<td><?php echo $res['product_name'];?></td>
<td><?php echo $res['price'];?></td>
<td><?php echo $res['selling_price'];?></td>
<td><?php echo $res['description'];?></td>
<td><?php echo $res['created_ondate'];?></td>
<td><a href="product_edit.php?productid=<?php echo $res['id'];?>">Edit</a></td>
<?php
if($res['status']==1)
{

?>
<td>Active</td>
<?php
}
else
{
?>
<td>Hide</td>
<?php
}
?>
</tr>
<?php
}
?>

<tr><td colspan="6"><input type="submit" name="submit" value="Hide/show" /></td></tr>
</tbody>
</table>
</form>
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
