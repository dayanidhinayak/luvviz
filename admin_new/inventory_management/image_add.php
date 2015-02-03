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
<script>
function typeval(val)
{
//alert(val);
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
document.getElementById('type').innerHTML=result;

	}
}
xmlhttp.open("GET","select_type.php?q="+val,true);

xmlhttp.send();


}
</script>
</head>

<body>
		
		<?php
		include_once("topbar.php");
		include_once('../menubar.php');?>
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3>Customization <img src="../images/separator1.png" /> Add Images</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
		<form name="form1" id="form1" method="post" action="image_insert.php" enctype="multipart/form-data">
	   <input type="submit" name="submit" id="submit" style="background:url('../images/addnew.png'); border:none; height:32px; width:32px;" value="" />
	   <br/>Save</div>
			
			</div>
			
			
			
			<div class="box1" style="width:100%; margin-left:0px;">
			<table  align="center" cellpadding="5" cellspacing="0" style="width:50%;  font-family:Arial, Helvetica, sans-serif;  ">
			
			<tr style="border:none; background:none;">
							<td>Image</td>
							<td><input type="file" name="img_name" style="width:150px; height:25px; border:1px solid #CCCCCC;" /></td>
					   </tr>
					   <tr style="border:none; background:none;">
							<td>Priority</td>
							<td><input type="text" name="prior" style="width:150px; height:25px; border:1px solid #CCCCCC;" /></td>
					   </tr>
					   <tr style="border:none; background:none;">
							<td>link</td>
							<td><input type="text" name="link" style="width:150px; height:25px; border:1px solid #CCCCCC;" /></td>
					   </tr>
					     <tr style="border:none; background:none;">
							<td>Alternate</td>
							<td><input type="text" name="alt" style="width:150px; height:25px; border:1px solid #CCCCCC;" /></td>
					   </tr>
					     <tr style="border:none; background:none;">
							<td>Type</td>
							<td><select name="type">
							            <option value="">Select Type</option>
							              <option value="1">Image</option>
									<option value="2">Flash</option>
							 
							     </select>
							</td>
					   </tr>
			 <tr style="border:none; background:none;">
							<td>Position</td>
							<td><select name="pos" onchange="return typeval(this.value);">
							            <option value="">Select Position</option>
							              <option value="contentmiddlebox">contentmiddlebox</option>
										   <option value="contentrightbox1">contentrightbox-image1</option>
										   <option value="contentrightbox2">contentrightbox-image2</option>
										   <option value="content3_leftimg">content3_leftimg</option>
							              <option value="content3_middleimg">content3_middleimg</option>
										  <option value="content3_rightimg_top">content3_rightimg_top</option>
										  <option value="content3_rightimg_bottom">content3_rightimg_bottom</option>
										  
										 
							     </select>
							</td>
					   </tr>
					   <tr>
						<td>
							Tittle for contentmiddlebox
						</td>
						<td>
							<input type="text" name="tittle" style="width:150px; height:25px; border:1px solid #CCCCCC;" />
						</td>
					   </tr>
					   <tr>
					   		<td>Type</td>
							<td id="type"></td>
						</tr>
			
			 <tr>
					   		<td>Category</td>
							<td>
							
							<select name="catid">
							            <option value="">Select Category</option>
										<?php
							$sqlbrand=mysql_query("select * from `brand`");
							while($resbrand=mysql_fetch_array($sqlbrand)){
							?>
							              <option value="<?php echo $resbrand['id'];?>"><?php echo $resbrand['brand_name'];?></option>
										  <?php
										  }
										  ?>
							</select>
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
