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
									Collection<br/>
				</div>
<!--<span style="padding-left:10px; padding-right:10px;">Filter Table</span><input type="text" name="search1" id="search1" onkeyup="search_invoice(this.value)" />-->
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

<form name="form" action="insert_colection.php" method="post">
<table>
    <tr>
	<td>Collection Name</td>
	<td><input type="text" name="collection"  /></td>
	</tr>
    <tr>
	   <td colspan="2"><input type="submit" name="submit" value="submit" /></td>
	</tr>
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
