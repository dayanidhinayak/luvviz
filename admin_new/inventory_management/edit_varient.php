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
<script>
function delete_confirm()
{
var msg=confirm("Are You Sure You Want To Delete This Variant....");
if(msg==false)
{
return false;
}
}
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
xmlhttp.open("GET","search.php?q="+key,true);

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
									Edit Varient<br/>
				</div>
<table>
<span style="padding-left:10px; padding-right:10px;">Filter Table</span><input type="text" name="search1" id="search1" onkeyup="search_invoice(this.value)" />
<tr>
      <th>product name</th>
	  <th>variant name</th>
	  <th>variant value</th>
        <th>Edit</th>
         <th>Delete</th>
</tr>
<tbody id="result">
<?php 

$q=mysql_query("select * from  product") or die(mysql_error());
while($r=mysql_fetch_array($q))
{

$que=mysql_query("select `product_id` from `product_varient`  where `product_id`='$r[id]'");
$rs=mysql_num_rows($que);
if($rs==0)
{
?>
<tr>
   <td><?php echo $r['product_name'];?></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><a href="product_varient.php?id=<?php echo $r['id'];?>">Add Variant</a></td>
</tr>
    
	<?php
}
else
{
$q1=mysql_query("select * from `product_varient` where `product_id`='$r[id]'");
while($r1=mysql_fetch_array($q1))
{
?>
<tr>
      <td><?php echo $r['product_name'];?></td>
	<td><?php echo $r1['varient_name'];?></td>
	
	<td><?php echo $r1['description'];?></td>
	<td><a href="edit_variant_detail.php?id=<?php echo $r1['product_id'];?>&vname=<?php echo $r1['varient_name'];?>&vvalue=<?php echo $r1['description'];?>">Edit</a></td>
          <td><a href="delete_variant.php?id=<?php echo $r1['product_id'];?>" onclick="return delete_confirm();">Delete</a></td>
</tr>
<?php } } } ?>
</tbody>
</table>
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
