<?php
ini_set("dispaly_errors",1);
include_once("function.php");
if(isset($_SESSION['user_id']))
{
header("location:index.php");
}
else
{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
	<!-- Syntax Highlighter -->
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
<title>...:::LUVVIZ:::...</title>
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
   <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
  <script src="alice-1362145177.js" type="text/javascript"></script>
  

<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
<link href="style1.css" rel="stylesheet" type="text/css" />
<!--slider starts-->
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
	
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
 <style>
 .buttonyellow{
 width:120px;
 height:30px;
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


<div style="width:100%; height:280px;float:left; margin-top: 20px; margin-bottom: 20px; ">
	<div style="width:960px; height:280px; margin:auto;">
		<div style="width:960px; height:270px; float:left; margin-top:10px; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:rgb(36,36,36);">
			<div style="width:468px; height:268px; float:left; border:1px solid rgb(211,211,211);">
				<div style="width:448px; height:268px; float:left; margin-left:10px;">
				<div style="width:438px; height:30px; float:left; border-bottom:1px solid rgb(211,211,211); font-size:16px; font-weight:bold; padding-left:10px; padding-top:10px;">
							Registered customers
				</div>
				<div style="width:448px; height:220px; float:left; margin-top:8px;">
				<form action="chklogin.php" method="post" >
					<table style="width:100%; height:auto; float:left;">
						<tr>
							<td  colspan="2" style="text-align:right; font-size:12px;">
								* Required fields
							</td>
						</tr>
						<tr style="text-align:center;height:40px;">
							<td>Enter your email<br />
									 address *
							</td>
							<td>
								<input type="text" style="width:220px; height:30px; border:1px solid rgb(211,211,211);" name="email" />
							</td>
						</tr>
						<tr style="text-align:center; height:40px;">
							<td>Password *
							</td>
							<td>
								<input type="password" style="width:220px; height:30px; border:1px solid rgb(211,211,211);" name="pwd" />
							</td>
						</tr>
						<tr style="text-align:center; height:40px;">
							<td>&nbsp;
							</td>
							<td style="text-align:left;">
								Forgot password?
							</td>
						</tr>
						<tr>
							<td>&nbsp;
								
							</td>
							<td>
								<input type="submit" value="login" class="buttonyellow" />
							</td>
						</tr>
					</table>
					</form>
				</div>
			</div>
		</div>
			<div style="width:468px; height:268px; float:left; border:1px solid rgb(211,211,211); margin-left:20px;">
				<div style="width:458px; height:30px; float:left; border-bottom:1px solid rgb(211,211,211); font-size:16px; font-weight:bold; padding-left:10px; padding-top:10px;">
							<?php 
				if (isset($_GET['msg']))
				{
				   ?>
				   Your Account Has Been Created!
				   <?php
				}
				   else
				   {?>
				   New customers
				   <?php
				   }
				   ?>
				</div>
				<div style="width:428px; height:190px; float:left; margin-top:0px; padding:20px; padding-top: 5px;">
				<?php 
				if (isset($_GET['msg']))
				{
				   ?>
				 
				   <?php
				$msg=$_GET['msg'];  ?>
				<div style="font-size:14px; color:#003399; line-height: 1.6;"><?php echo $msg;?></div>
				<?php
				}
				else
				{
				$msg='';
				
				
				?>
				<div style="font-size:14px; color:#003399;"><?php echo $msg;?></div>
					You are welcome to register a new customer account in our shop!<br /><br />
					<a href="register.php"><input type="button" class="buttonyellow" value="Register" /></a>
					
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>

  
  <?php include_once('bottombar.php');?>
</body>
</html>
<?php
}
?>

