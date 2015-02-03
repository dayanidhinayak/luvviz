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

<script>
function add_wh()
{
document.getElementById('insert').style.display="block";

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
xmlhttp.open("GET","search_warehouse.php?q="+key,true);

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
									Warehouse Details <br/>
				</div>
<span style="padding-left:10px; padding-right:10px;">Filter Table</span><input type="text" name="search1" id="search1" onkeyup="search_invoice(this.value)" />
<table style="margin-left:100px; width:800px; text-align:center;">
<tr><td colspan="6"><input type="button" name="add_btn" value="Add New Warehouse" onclick="return add_wh();"/></td></tr>
<tr><td width="3">&nbsp;</td>
<th width="180">Warehouse Name</th>
<th width="86">Location</th>
<th width="163">Storage Capacity</th>
<th width="116">Vendor Name</th>
<th width="94">Created On</th>
<th width="64">Action</th>
<th width="58">&nbsp;</th>
</tr>
</table>
<tr>
<td>
<div style="display:none;" id="insert">
<form name="form" method="post" action="insert_warehouse.php">

<table style="margin-left:100px; width:500px;">
<tr>
	 <td width="180" ><input type="text" name="name" style="width:180px;" /></td>
	 <td width="100"><input type="text" name="location"  style="width:100px;" /></td>
	 <td width="150"><input type="text" name="storage" style="width:150px;"/></td>
	 <td width="120"><select name="vendor" style="width:120px;">
 <option value="">Select</option>
	<?php
		$que=mysql_query("select * from `vendor_detail` ");
		while($res=mysql_fetch_array($que))
{


	?>
 <option value="<?php echo $res['slno'];?>"><?php echo $res['name'];?></option>
<?php
}
?>
	
	 	</select>
	 </td>
<td><input type="submit" name="submit" value="Submit" style="margin-left:180px;"/></td>
</tr>
</table>

</form>
</div>
</td></tr>
<form name="form" method="post" action="hide_warehouse.php">
<table width="800" style="margin-left:100px; text-align:;">
<tbody id="result">
<?php
//echo "select w.*,v.`name` from `warehouse` w,`vendor_detail` v where `w`.`vendor_id`=`v`.`id`";
$query=mysql_query("select w.*,v.`name` from `warehouse` w,`vendor_detail` v where `w`.`vendor_id`=`v`.`slno`") or die(mysql_error());
while($res=mysql_fetch_array($query))
{

?>
<tr>
<td width="28" ><input type="checkbox" name="hide[]" value="<?php echo $res['slno'];?>"  /></td>
<td width="154"><?php echo $res['warehouse_name'];?></td>
<td width="107"><?php echo $res['location'];?></td>
<td width="129"><?php echo $res['storage_capacity'];?></td>
<td width="118"><?php echo $res['name'];?></td>
<td width="89"><?php echo $res['created_ondate'];?></td>
<td width="67"><a href="warehouse_edit.php?warehouseid=<?php echo $res['slno'];?>">Edit</a></td>
<?php
if($res['status']==1)
{

?>
<td width="39">Active</td>
<?php
}
else
{
?>
<td width="29">Hide</td>
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
