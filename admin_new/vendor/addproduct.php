<?php
include_once("../function.php");
//echo $_SESSION['user'];
$usernm=$_SESSION['user'];
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
<link rel="stylesheet" type="text/css" href="calendar.css" />

<script src="jquery.min.js" type="text/javascript"></script>
<script>
function getval(a)
{

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
document.getElementById("t1").style.display="block";
    document.getElementById("t1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","search_pro.php?val="+a,true);
xmlhttp.send();
}
</script>
<script>
function chn(name,id)
{

document.getElementById("pname").value=name;
document.getElementById('pid').value=id;
document.getElementById("t1").style.display="none";
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
									Add product<br/>
				</div>
	  		  	<div style="width:250px; float:left; margin-top:20px;">
					<?php include_once('menubar1.php')?>
			</div>
			
			<div style="width:680px;  margin-top:20px; float:left; margin-left:20px;">
<div style="width:407px;float:left; padding:7px;" >


<form name="f" action="pro_insert.php" method="post">
 <table style="font:Georgia, 'Times New Roman', Times, serif; size:12px; color:#666666;" cellspacing="12" width="400px" >
			<tr><td>Product Name</td>
			   <td>Barcode</td> 
			</tr>
<tr>
<td>
<input type="text" name="pname" id="pname"  onkeyup="return getval(this.value);" autocomplete="off" value="<?php if(isset($_GET['name'])){echo $_GET['name'];}?>"/>
<input type="hidden" name="idval" id="pid"/>
<input type="hidden" name="usernm" value="<?php echo $usernm;?>" />
</td>
<td><input type="text" name="pcode"/></td>
</tr>
<tr>
					
					<td>
					<div style="width:230px; height:200px; float:left; border:1px solid #cdcdcd; display:none; overflow:auto;" id="t1" >
					</div>
					</td>
					<td>&nbsp;</td>
					</tr>
<tr><td colspan="2"><input type="submit" name="submit" value="submit" /></td></tr>
						
    </table>
	</form>
</div>

</div>

</div>
			</div>
		</div>
		
		<div id="footer100">
			<div id="footer" class="font1">
				<span style="float:left; margin-left:30px;">
					All Rights Reserved @ Luvviz
				</span>
				<span style="float:right; margin-right:30px;">
					
				</span>
			</div>
		</div>
</body>
</html>
