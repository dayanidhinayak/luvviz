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
function getbrand(key)
{
//alert(key);
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
document.getElementById("details").innerHTML=result;

	}
}
xmlhttp.open("GET","viewproduct_brand.php?q="+key,true);

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
									View Category Wise Product Listing<br/>
				</div>
	<div style="width:850px">		
		<div style="width:250px;height:auto;font-size:20px; text-align:left; float:left;margin-top:40px;">
		
			<div class="container1-top" style="height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Brand Name<br/>
				</div>
			<table>
			<?php
			$que=mysql_query("select * from `brand` where `status`='1'");
			while($res=mysql_fetch_array($que))
			{
			
			?>
				<tr><td onclick="return getbrand(<?php echo $res['id'];?>);"><?php echo $res['brand_name'];?></td></tr>
			<?php
			}
			?>
			
			
			
			</table>
		
		
		</div>
		
		<div style="width:450px;height:auto;  font-size:20px; text-align:left;margin-left:150px;margin-top:40px; float:left;">
		<div class="container1-top" style="height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Product Name<br/>
				</div>
				<div id="details">
				
				</div>
		
		
		</div>
	</div>	
	
</div>
</div>
</div>
</body>
</html>
		
		
				
				

