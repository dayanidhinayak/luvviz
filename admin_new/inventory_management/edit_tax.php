<?php 

ini_set('allow_url_include' , true);

include_once('../function.php');

$id=$_GET['id'];
$que=mysql_query("select * from `taxes` where `slno`='$id'");
$res=mysql_fetch_array($que);


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

		

		<?php 

		include_once($path.'/menubar.php');?>

		

		

		<div id="container">

		<form action="update_taxes.php" method="post" enctype="multipart/form-data">

			

			<div id="container_content" style=" background:none; border:none;">

			

			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">

		
<div style="float:left;"><h3>Localization <img src="../images/separator1.png" /> Taxes<img src="../images/separator1.png" /> Edit</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
		
		
		<input type="submit" name="submit" style="background:url('../images/addnew.png'); border:none; height:32px; width:32px;" value=""/><br/>SAVE
		
		</div>

			

			<div id="container_left" style="width:100%;">

				  <div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">

				    <div class="orderheading">

						<img src="images/categories5.gif" style="float:left; margin-right:5px;" />

						Taxes

					</div>

			  

			  <table width="40%" border="0" height="150px;" style="float:left;  margin-left:15%; ">

						

  <tr>

    <td width="21%" >Name:<input type="hidden" name="hiddenvalue" value="<?php echo $id?>"  /></td>

    <td colspan="2"><input type="text" name="taxname" style=" border:1px solid #CCCCCC;" value="<?php echo $res['tax_name'];?>"/></td>

	

  </tr>
  
  
  <tr>

    <td width="21%" >Rate:</td>

    <td colspan="2"><input type="text" name="rate" style=" border:1px solid #CCCCCC;" value="<?php echo $res['rate'];?>"/></td>

	

  </tr>

   <tr>

    <td>Enable:</td>

    
	<?php
	if($res['status']==1)
	{
	
	?>
	<td width="37%"><input type="radio" name="display" value="1" checked="checked"/><img src="images/tick.png" />
	<input type="radio" name="display" value="0" /><img src="../images/disabled.gif" /></td>
	<?php
	}
	else
	{
	?>
<td width="37%"><input type="radio" name="display" value="1" /><img src="images/tick.png" />
	<input type="radio" name="display" value="0" checked="checked" /><img src="../images/disabled.gif" /></td>
	<?php
	}
	?>
	 

  </tr>





</table>
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