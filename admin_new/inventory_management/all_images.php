<?php
include_once('../function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Luvviz adminpanel</title>
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
	 text-shadow: 0 1px 0 #FFFFFF;
	 border-top:1px solid #CCCCCC;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>

<script src="jquery-1.8.3.js"></script>
<script type="text/javascript">

function confirmation_selected() {
	var answer = confirm("Delete Selected Items?");
	if (answer){
		return true;
	}
	else{
		return false;
	}
}

</script>


<script>
function display(val)
{

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
document.getElementById('ajaxvalue').innerHTML=result;
}
}
xmlhttp.open("GET","display_image.php?q="+val,true);

xmlhttp.send();

}
</script>


<script type="text/javascript">
function getajax()
{

var idval=document.getElementById('idval').value;

var nameval=document.getElementById('nameval').value;

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
//alert(result);
document.getElementById('ajaxvalue').innerHTML=result;
document.getElementById('idval').value="";
document.getElementById('nameval').value="";

	}
}
xmlhttp.open("GET","find_category.php?idval="+idval+"&nameval="+nameval,true);

xmlhttp.send();

}

</script>
<script>

function enable(id,status)

{

var x="ena"+id;

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

document.getElementById(x).innerHTML=result;



	}

}

xmlhttp.open("GET","enable_image.php?q="+id+"&status="+status,true);



xmlhttp.send();





}

</script>

<script type="text/javascript">

function confirmation_selected() {
	var answer = confirm("Delete Selected Items?");
	if (answer){
		return true;
	}
	else{
		return false;
	}
}

</script>
<script>

function confirmation_delete() {
	var answer = confirm("Are U Sure To Delete This image?");
	if (answer){
		return true;
	}
	else{
		return false;
	}
}

</script>
</head>

<body>
		
		
		<?php
		include_once('topbar.php');
		include_once("../menubar.php");?>
		
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left; padding-left:1%;"><h3>Customization <img src="images/separator1.png" /> All Images </h3></div>
		
		<!--<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/addnew.png" /><br/>Add new Values</div>-->
			<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="image_add.php" ><img src="images/addnew.png" /></a><br/>Add Images</div>
			</div>
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="button" name="button" value="Filter" id="filter" onclick="return getajax();" /> 
			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			
			
			<div class="box1" style="width:100%; margin-left:0px;">
			<form name="form1" id="form1" method="post" action="selected_deletecat.php">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						<th><input type="checkbox"  /></th>
						<th>ID</th>
						
						<th>Position</th>
						<th style="text-align:center;">Icon</th>
						
						<th>Displayed</th>
						<th>Action</th>
					</tr>
					<tr>
						<td>-</td>
						<td>--</td>
						
						<td>--</td>
						
						<td align="center">&nbsp;</td>
						<td align="center">
						
					<select onchange="return display(this.value);">
							<option value="" ></option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select></td>
						<td>-</td>
					</tr>
					<tbody id="ajaxvalue">
					<?php
					$slno=1;
					$query=mysql_query("select * from `index_image` ");
					while($result=mysql_fetch_array($query))
					{
					
					?>
					<tr id="<?php echo $result['id'];?>">
						<td><input type="checkbox"  name="product[]" value="<?php echo $result['id'];?>" /></td>
						<td><?php echo $result['id']?></td>
						
						<td><?php echo $result['position'];?></td>
						<td  align="center"><img src="<?php echo $result['image'];?>" style="width:50px; height:50px;" /></td>
						<?php
						if($result['status']==1)
						{
						
						
						?>
						<td id="ena<?php echo $result['id'];?>"><img src="../images/tick.png" onclick="return enable(<?php echo $result['id'];?>,<?php echo $result['status']?>);" /></td>
						<?php
						}
						else
						{
						?>
						<td id="ena<?php echo $result['id'];?>"><img src="../images/disabled.gif" onclick="return enable(<?php echo $result['id'];?>,<?php echo $result['status']?>);"/></td>
						<?php
						}
						?>
						<td><a href="update_image.php?id=<?php echo $result['id'];?>"><img src="../images/edit.gif" /></a> &nbsp;
						<a href="delete_image.php?id=<?php echo $result['id'];?>"><img src="../images/delete.gif" class="btnDelete" onclick="return confirmation_delete();" />&nbsp;
						<input type="hidden" name="hiddenvalue" id="hiddenvalue" value="<?php echo $result['id'];?>" />
						</td>
					</tr>
					<?php
					$slno++;
					}
					?>
				</tbody>	
				</table>
				
			
			</form>
			</div>
			
			
		  </div>
		</div>
		
		<?php
		include_once("../footer.php");
		?>

</body>
</html>
