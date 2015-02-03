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
xmlhttp.open("GET","enable_ajax.php?q="+id+"&status="+status,true);

xmlhttp.send();


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
		<div style="float:left;"><h3>Customization <img src="../images/separator1.png" /> Add Images</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
		<form name="form1" id="form1" method="post" action="sidebar_insert.php" enctype="multipart/form-data">
	   <input type="submit" name="submit" id="submit" style="background:url('../images/addnew.png'); border:none; cursor: pointer; height:32px; width:32px;" value="" />
	   <br/>Save</div>
			
			</div>
			
			
			
			<div class="box1" style="width:100%; margin-left:0px;">
			<table  align="center" cellpadding="5" cellspacing="0" style="width:50%;  font-family:Arial, Helvetica, sans-serif;  ">
			
			
					   <tr style="border:none; background:none;">
							<td>Select Category For Sidebar</td>
							<td><select name="cat_id[]" multiple="multiple">
							<?php 
				$q=mysql_query("select * from `category` where `parent`='0' and `status`='1'");
						while($r=mysql_fetch_array($q))
						{
							?>
							<option value="<?php echo $r['id'];?>"><?php echo $r['category_name'];?></option>
							<?php } ?>
							</td>
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
