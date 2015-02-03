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

function edit_category(catid)
{

document.getElementById("cat"+catid).style.display="block";
var catname=document.getElementById("cat_old_name"+catid).innerHTML;

document.getElementById("updval"+catid).value=catname;
}
</script>

<script type="text/javascript">
function update_category(key)
{
//alert(key);
var res=document.getElementById('updval'+key).value;
//alert(res);
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
window.location.reload();

	}
}
xmlhttp.open("GET","edit_category.php?q="+key+"&cname="+res,true);

xmlhttp.send();


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
xmlhttp.open("GET","search_category.php?q="+key,true);

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
									View Category<br/>
				</div>
<span style="padding-left:10px; padding-right:10px;">Filter Table</span><input type="text" name="search1" id="search1" onkeyup="search_invoice(this.value)" />
<?php 
if(isset($_GET['msg']))
{

$msg=$_GET['msg'];
}
else
{
$msg='';
}
?>
<table>
<tr><td style="font-size:18px;color:#CC0000;"><?php echo $msg;?></td></tr>
</table>
<table style="margin-left:100px; width:600px">

<tr><th colspan="5"><input type="button" name="add_btn" value="Add New Category" onclick="return add_wh();"/></th></tr>

<tr><td>&nbsp;</td>

<td>Category Name</td>
<td>Created In</td>
<td>Action</td>
<td>&nbsp;</td>
</tr>
</table>


<div style=" display:none;margin-left:100px;width:400px" id="insert">
<form name="form" method="post" action="insert_category.php" enctype="multipart/form-data">

<table width="600">

<tr>
	 <td><input type="text" name="name" /></td>
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
	 

<td><input type="submit" name="submit" value="Submit"/></td>
</tr>
</table>

</form>
</div>


<form name="form" method="post" action="hide_cat.php">
<table style="margin-left:100px; width:600px;">
<tbody id="result">
<?php
$query=mysql_query("select * from `category`")or die(mysql_error());
while($res=mysql_fetch_array($query))
{

?>
<tr style="display:none;" id="cat<?php echo $res['id'];?>"><td colspan="2"><input type="text" name="updval<?php echo $res['id'];?>" id="updval<?php echo $res['id'];?>" /></td>
	<td colspan="3"><input type="button" name="update" value="Update" onclick="return update_category(<?php echo $res['id'];?>);" /></td>
</tr>
<tr>
<td><input type="checkbox" name="hide[]" value="<?php echo $res['id'];?>"  /></td>

<td id="cat_old_name<?php echo $res['id'];?>"><?php echo $res['category_name'];?></td>
<td><?php echo $res['entry_ondate'];?></td>

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
<td>
<input type="button" name="edit" value="EDIT" onclick="return edit_category(<?php echo $res['id'];?>);" />
</td>
</tr>
<?php
}
?>

<tr><td colspan="5"><input type="submit" name="submit" value="Hide/show" /></td></tr>
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
