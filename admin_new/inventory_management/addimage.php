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
	 text-shadow: 0 1px 0 #FFFFFF;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>

<script>


var fields = 0;
        function addInput()
        {
            var strAddRow;
            

            fields++;
        


            strAddRow = '<table border="0" cellpadding="2" cellspacing="1"><tr>';
strAddRow = strAddRow + '<td>Upload image'+fields+'</td>';

strAddRow = strAddRow + '<td><input type="file" id="img'+fields+'" name="img[]" /></td>';


strAddRow = strAddRow + '</tr></table>';
 document.getElementById("text").insertAdjacentHTML("beforeend",strAddRow);
}
</script>

</head>

<body>
		
		<?php
		include_once('topbar.php');
		include_once('../menubar.php');?>
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3>Customization <img src="../images/separator1.png" /> Add Images</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
		<form name="form1" id="form1" method="post" action="imageinsert.php" enctype="multipart/form-data">
	   <input type="submit" name="submit" id="submit" style="background:url('../images/addnew.png'); border:none; height:32px; width:32px;" value="" />
	   <br/>Save</div>
			
			</div>
			
			
			
			<div class="box1" style="width:100%; margin-left:0px;">
			<table  align="center" cellpadding="5" cellspacing="0" style="width:50%;  font-family:Arial, Helvetica, sans-serif;  ">
			
			<tr style="border:none; background:none;">
							<td>Image</td>
							<td><input type="file" name="img[]" id="img0" style="width:150px; height:25px; border:1px solid #CCCCCC;" /></td>
					   </tr>
					  
					 
				
			</table>
			
			</div>
			</form>
		  </div>
		</div>
		</div>
		<?php
		include_once("../footer.php");
		?>

</body>
</html>
