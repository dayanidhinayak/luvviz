<?php
include_once("function.php");
$idval=$_GET['id'];
 $que=mysql_query("select * from `footer` where `id`='$idval'")or die(mysql_error());
$res=mysql_fetch_array($que);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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
<script src="js1/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js1/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js1/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
  
    <script src="js1/jquery-ui/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.draggable.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.dialog.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.blind.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.explode.min.js" type="text/javascript"></script>
    <!-- jQuery dialog end here-->
    <script src="js1/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <!--Fancy Button-->
    <script src="js1/fancy-button/fancy-button.js" type="text/javascript"></script>
    <script src="js1/setup.js" type="text/javascript"></script>
    <!-- Load TinyMCE -->
    <script src="js1/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
           
           
            
        });
    </script>
<title>Untitled Document</title>

</head>



<body>

<div id="topbar">

			<div id="topbar_content">

				<div id="logo">

				</div>

				<div id="logoicon">

					<img src="../images/order.png" style="float:left; margin-top:2px; margin-left:10px;" />

					<img src="../images/customer.png" style="float:left;  margin-left:10px;"  />

					<img src="../images/message.png" style="float:left; margin-top:2px;  margin-left:10px;" />

				</div>	

				

				<div id="searchbar">

					<table >

						<tr>

							<td style="border:1px solid #000000;">

							<input type="text" name="" style="width:200px; height:24px; float:left;" />

							

							<select style="float:left;padding:5px; height:30px;">

									<option name="">Everywhere</option>

							</select>

								

								<input type="submit" name="submit" value="" style="background:url(../images/search.png); width:30px; height:30px; border:none; float:left;" />                            </td>

							

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

						<img src="../images/separator.png" />

					</div>

					<div class="topmenu">

						My Preferences

					</div>

					<div class="separator">

						<img src="../images/separator.png" />

					</div>

					<div class="topmenu">

						<img src="../images/logout.png" style="float:left; margin-right:5px;" />Logout

					</div>

					<div class="separator">

						<img src="../images/separator.png" />

					</div>

					<div class="topmenu">

						View My Shop

					</div>

				</div>

			</div>

		</div>

		

		<?php 

		include_once('../menubar.php');?>

		<div id="container">

			

			

		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  <div style="margin-top:30px; background:none; border:none; width:300px; height:300px; float:left;">

<form name="form" action="update_footer.php" method="post" >

<table>

<tr>

     <td>Page Name:<input type="hidden" name="hdn" value="<?php echo $idval?>"  /></td>

      <td><input type="text" name="page" value="<?php echo $res['name'];?>"  /></td>

</tr>

<tr>

     <td>Heading:</td>

      <td><input type="text" name="head"  value="<?php echo $res['head'];?>"/></td>

</tr>

<tr>

     <td>Type</td>

      <td><select name="type">

	      <option value="1" <?php if($res['head']=='1') :?>selected <?php endif;?>>Information</option>

		  <option value="2" <?php if($res['head']=='2') :?>selected <?php endif;?>>Customer Service</option>

	  </select>

	  </td>

</tr>



<tr>

     <td>Content</td>

      <td><textarea class="tinymce" name="content" style="width:700px; height:350px; background:#ffffff; border:1px solid #c6c6c6;"><?php echo $res['content'];?>
          </textarea>
	</td>

</tr>

<tr>

    <td> <input type="submit" value="Submit" name="submit"  /></td>

</tr>

</table>



</form>
</div>

</div>

</div>

</body>

</html>