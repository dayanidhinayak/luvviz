<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
		<div id="topbar">
			<div id="topbar_content">
				<div id="logo">
				</div>
				<div id="logoicon">
					<img src="images/order.png" style="float:left; margin-top:2px; margin-left:10px;" />
					<img src="images/customer.png" style="float:left;  margin-left:10px;"  />
					<img src="images/message.png" style="float:left; margin-top:2px;  margin-left:10px;" />
				</div>	
				
				<div id="searchbar">
					<table >
						<tr>
							<td style="border:1px solid #000000;">
							<input type="text" name="" style="width:200px; height:24px; float:left;" />
							
							<select style="float:left;padding:5px; height:30px;">
									<option name="">Everywhere</option>
							</select>
								
								<input type="submit" name="submit" value="" style="background:url(images/search.png); width:30px; height:30px; border:none; float:left;" />                            </td>
							
						</tr>
					</table>
				</div>
				
				<div id="selectbar">
					<select style="float:left;padding:5px; height:27px; background:#efefef; border:none; border-radius:2px; -moz-border-radius:2px;">
									<option name="">Quick Acce</option>
					</select>
				</div>
				
				<div id="topmenubar">
					<div class="topmenu">
						D Demo
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						My Preferences
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						<img src="images/logout.png" style="float:left; margin-right:5px;" />Logout
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						View My Shop
					</div>
				</div>
			</div>
		</div>
		
		<?php include_once("../menubar.php");?>
		<?php
		$sql=mysql_query("select * from `leftmenu` where `slno`='$id'")or die(mysql_error());
		$result=mysql_fetch_array($sql);
		 ?>
		
		
		<div id="container">
		<form name="form1" id="form1" method="post" action="updateleftmenu_insert.php" enctype="multipart/form-data">
			
			<div id="container_content" style=" background:none; border:none;">
			
			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><input type="submit" name="submit" style="background:url('../images/addnew.png'); border:none; height:32px; width:32px;" value=""/><br/>Update</div>
			
			<div id="container_left" style="width:100%;">
				  <div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">
				
			<table  align="center" cellpadding="5" cellspacing="0" style="width:50%;  font-family:Arial, Helvetica, sans-serif;  ">
			
			<tr style="border:none; background:none;">
							<td>Image<input type="hidden" name="hdn" value="<?php echo $id?>" /></td>
							<td><input type="file" name="img_name" style="width:150px; height:25px; border:1px solid #CCCCCC;" /></td>
							<td><img src="<?php echo $result['icon'];?>" style="height:50px; width:50px;" /></td>
					   </tr>
					   <tr style="border:none; background:none;">
							<td>Page Name</td>
							<td><input type="text" name="pname" style="width:150px; height:25px; border:1px solid #CCCCCC;"  value="<?php echo $result['name'];?>"/></td>
					   </tr>
					   <tr style="border:none; background:none;">
							<td>Page where it is enable</td>
							<td><textarea name="pname1" style="width:150px; height:25px; border:1px solid #CCCCCC;"  value=""><?php echo $result['pagename'];?></textarea></td>
					   </tr>
					   <tr style="border:none; background:none;">
							<td>link</td>
							<td><input type="text" name="link" style="width:150px; height:25px; border:1px solid #CCCCCC;" value="<?php echo $result['href'];?>" /></td>
					   </tr>
					     <tr style="border:none; background:none;">
							<td>Status</td>
							<td><?php
                                                        if($result['status']==1)
                                                        {
                                                            ?>
                                                            <input type="radio" name="status" value="1" checked="checked"/> Enable </br>
                                                            <input type="radio" name="status" value="0"/> Disable
                                                        <?php
                                                        }
                                                        else{
                                                            ?>
                                                            <input type="radio" name="status" value="1"/> Enable </br>
                                                            <input type="radio" name="status" value="0" checked="checked"/> Disable
                                                            <?php
                                                        }
                                                        ?>
                                                        </td>
					   </tr>
					     
				
				
			</table>
			
			</div>
			</form>
		  </div>
				
				
			  </div>
			  <div id="container_right"></div>
			  <div style="width:100%;  float:left; "></div>
		</div>
		
<div id="footer">
			Map Cart Admin Panel<br/>
			<span style="color:#666666;">Load Time:0.081s</span>
		</div>

</body>
</html>
