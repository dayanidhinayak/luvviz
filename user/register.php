<?php
ini_set("dispaly_errors",1);
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
	<!-- Syntax Highlighter -->
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
<title>...:::LUVVIZ:::...</title>
<!--<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>-->
   <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
  <script src="alice-1362145177.js" type="text/javascript"></script>
  <script>
  function getcategory(idval)
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

document.getElementById('displayval').innerHTML=result;
//window.location.reload();

	}
}
xmlhttp.open("GET","getdetails.php?q="+idval,true);

xmlhttp.send();
  
  
  }
  </script>

<link href="style1.css" rel="stylesheet" type="text/css" />

<!--slider starts-->
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
	
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
 <style>
 .buttonyellow{
 width:120px;
 height:35px;
 color: rgb(255, 255, 255);
border:none;
background-color: rgb(250, 142, 31);
background-image: -moz-linear-gradient(center top , rgb(251, 167, 64), rgb(250, 142, 31));
box-shadow: 0px 1px 0px rgba(255, 181, 81, 0.3);
font-family:Arial, Helvetica, sans-serif;
font-size:13px;
text-align:center;
border-radius:8px;
}
 .box{
 width:414px; 
 height:390px; 
 float:left;
 margin-top:10px; 
 border-radius:2px; 
 border:1px solid #cccccc;
background: -moz-linear-gradient(top, rgba(244,244,244,0.65) 0%, rgba(244,244,244,0.38) 41%, rgba(0,0,0,0.04) 94%, rgba(0,0,0,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(244,244,244,0.65)), color-stop(41%,rgba(244,244,244,0.38)), color-stop(94%,rgba(0,0,0,0.04)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6f4f4f4', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
 }
  p{
 font-size:12px;
 font-family:Arial, Helvetica, sans-serif;
 color:rgb(110,110,110);
 line-height:1.7;
 }
 </style>
 
</head>

<body>

<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>


<div style="width:100%; height:500px;float:left; margin-top:15px;">
	<div style="width:960px; height:500px; margin:auto;">
		<div style="width:958px; height:498px; float:left; border:1px solid rgb(211,211,211); font-family:Arial, Helvetica, sans-serif; font-size:13px; color:rgb(36,36,36);">
			<div style="width:938px; height:498px; float:left; margin-left:10px;">
				<div style="width:928px; height:30px; float:left; border-bottom:1px solid rgb(211,211,211); font-size:16px; font-weight:bold; padding-left:10px; padding-top:10px;">
						Create new customer account
				</div>
				<div style="width:928px; height:458px; float:left;">
					<div style="width:900px; height:448px; float:left; margin-left:25px; margin-top:10px;">
					<form name="form" action="insert_user.php" method="post" >
						<table style="width:100%; height:448px; float:left;">
						  
							<tr>
								<td>E-mail *
								</td>
								<td>
									<input type="text" style="width:500px; height:30px; border:1px solid rgb(211,211,211);" name="mail" />
								</td>
							</tr>
							<tr>
								<td>First name *
								</td>
								<td>
									<input type="text" style="width:500px; height:30px; border:1px solid rgb(211,211,211);" name="fname" />
								</td>
							</tr>
							<tr>
								<td>Last name *
								</td>
								<td>
									<input type="text" style="width:500px; height:30px; border:1px solid rgb(211,211,211);" name="lname" />
								</td>
							</tr>
							<!--<tr>
								<td>Birth date *
								</td>
								<td>
									<input type="text" style="width:60px; height:30px; border:1px solid rgb(211,211,211);" />
									<input type="text" style="width:60px; height:30px; border:1px solid rgb(211,211,211); margin-left:10px;" />
									<input type="text" style="width:100px; height:30px; border:1px solid rgb(211,211,211); margin-left:10px;" />
								</td>
							</tr>-->
							<tr>
								<td>Password *
								</td>
								<td>
									<input type="password" style="width:500px; height:30px; border:1px solid rgb(211,211,211);" name="pwd" />
								</td>
							</tr>
							<tr>
								<td>
									Gender *
								</td>
								<td>
									<input type="radio" name="gender" value="1" />Male
									<input type="radio" name="gender" value="2"  />Female
								</td>
							</tr>
							<tr>
								<td>&nbsp;
									
								</td>
								<td>
									<input type="submit" value="submit" class="buttonyellow" />
									<!--<span style="margin-left:15px; text-decoration:underline;">*T&C Apply</span>-->

								</td>
							</tr>
							<!--<tr>
								<td>&nbsp;
									
								</td>
								<td>
									<input type="checkbox" />
										I want to receive offers by e-mail

								</td>
							</tr>-->
							<tr>
								 <td>
								      &nbsp;
								 </td>
								 <td style="font-size:14px; color:#003399; float: left; padding: 10px;">
								       <?php 
								      if($_GET['msg'])
								      {
								      $msg=$_GET['msg'];
								      }
								      else
								      {
								      $msg='';
								      }
								      echo $msg;
								      ?>
								 </td>
							</tr>
							<tr>
								<td colspan="2" style="text-align:right; font-size:9px;">
									* Required fields
								</td>
							</tr>
						</table>
						</form>
					</div>
				</div>    
			</div>
			
		</div>
	</div>
</div>

  
  <?php include_once('bottombar.php');?>
</body>
</html>

