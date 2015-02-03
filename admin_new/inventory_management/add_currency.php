<?php 
ini_set('allow_url_include' , true);
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
	 
	 	}
		tr th{
		background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
    color: #333333;
    font-size: 14px;
	font-family:Arial, Helvetica, sans-serif;
 
    line-height: 29px;
    margin: 0;
    padding: 0 0 0 10px;
	text-align:left;
    text-shadow: 0 1px 0 #FFFFFF;
		}

</style>
</head>

<body>
		
		
		<?php
		include_once('topbar.php');
		include_once("../menubar.php");?>
		
		
		<div id="container">
		<form action="insert_currency.php" method="post" enctype="multipart/form-data">
			
			<div id="container_content" style=" background:none; border:none;">
			


			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><input type="submit" name="submit" style="background:url('../images/addnew.png'); border:none; cursor: pointer; height:32px; width:32px;" value=""/><br/>SAVE</div>
			
			<div id="container_left" style="width:100%;">
				  <div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">
				    
			  
			  <table width="40%" border="0" height="150px;" style="float:left;  margin-left:15%;	 ">
						
  <tr>
    <td width="21%" >Currency Name:</td>
    <td colspan="2"><input type="text" name="cname" style=" border:1px solid #CCCCCC;"/></td>
	
  </tr>
  <tr>
    <td width="21%" >ISO code:</td>
    <td colspan="2"><input type="text" name="code" style=" border:1px solid #CCCCCC;"/></td>
	
  </tr>
   <tr>
    <td width="21%" >Numeric ISO code: </td>
    <td colspan="2"><input type="text" name="ncode" style=" border:1px solid #CCCCCC;"/></td>
	
  </tr>
  <tr>
    <td width="21%" >Symbol: </td>
    <td colspan="2"><input type="text" name="symbol" style=" border:1px solid #CCCCCC;"/></td>
	
  </tr>
  <tr>
    <td width="21%" >Conversion rate: </td>
    <td colspan="2"><input type="text" name="crate" style=" border:1px solid #CCCCCC;"/></td>
	
  </tr>
 
				   		
				   </table>
				  
			  
			  </div>
			   </form>
				
				
				
			  </div>
			  <div id="container_right"></div>
			  <div style="width:100%;  float:left; "></div>
		
		</div></div></div>
		<?php
		include_once("../footer.php");
		?>

</body>
</html>
