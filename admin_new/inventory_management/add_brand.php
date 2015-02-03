<?php 

ini_set('allow_url_include' , true);

include_once('../function.php');



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>MAPKART</title>

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
		include_once("topbar.php");
		include_once('../menubar.php');?>

		

		

		<div id="container">

		<form action="insert_brand.php" method="post" enctype="multipart/form-data">

			

			<div id="container_content" style=" background:none; border:none;">

			

			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">

		

		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><input type="submit" name="submit" style="background:url('../images/addnew.png'); border:none; height:32px; width:32px;" value=""/><br/>SAVE</div>

			

			<div id="container_left" style="width:100%;">

				  <div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">

				    <div class="orderheading">

						<img src="images/categories5.gif" style="float:left; margin-right:5px;" />

						Brand

					</div>

			  

			  <table width="40%" border="0" height="150px;" style="float:left;  margin-left:15%;">

						

  <tr>

    <td width="21%" >Name:</td>

    <td colspan="2"><input type="text" name="product_name" style=" border:1px solid #CCCCCC;"/></td>

	

  </tr>

   <tr>

    <td>Displayed:</td>

    <td width="37%"><input type="radio" name="display" value="1"/><img src="images/tick.png" /><input type="radio" name="display" value="0" /><img src="../images/disabled.gif" /></td>

	 

  </tr>

 
  <tr>

    <td >Priority: </td>

    <td><input type="text" name="priority" style=" border:1px solid #CCCCCC;"/></td>

  </tr>

  

  <tr>

  <td >Upload Image:</td>

  <td><label  for="file">

		<input type="file"  name="image" id="image" />

	</label></td>

  </tr>

  <tr><td></td><td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">

      Format: JPG, GIF, PNG. Filesize: 8.00 MB max

    </span></td></tr>

 

			   </form>

				

				

				

			  </div>

			  <div id="container_right"></div>

			  <div style="width:100%;  float:left; "></div>

		

		

		<?php
		include_once("../footer.php");
		?>


</body>

</html>