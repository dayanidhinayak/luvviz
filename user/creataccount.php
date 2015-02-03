<?php
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
<title></title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<script>

function validate(){

var elem=document.getElementById('emailid').value;
var first=document.getElementById('fname').value;
var last=document.getElementById('lname').value;
var pwd=document.getElementById('pswd').value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  

	if(elem==""){

		alert("Please Enter an email address");

		return false;

	}
	
else if(!elem.match(format))

	{
alert("You have entered an wrong email address!");

		return false;
	}
	else if(first==""){

		alert("Please Enter Your first Name");

		return false;

	}
	else if(last==""){

		alert("Please Enter Your Last Name");

		return false;

	}
	else if(pwd==""){

		alert("Please Enter Your Password");

		return false;

	}
	

}
  </script>
</head>

<body>
<div id="menuu" >
		       <?php 
				include_once("menu1.php");?>
</div>
<div id="ban">
		<div id="ban_bar">
			<div id="ban_barcon">	
				<div id="ban_barcontent">
					<div id="ban_barcontenttop">

				
						Create new customer account
					</div>
				<div id="ban_barcontentbottom">
			
			
					<form name="form" action="insert_newuser.php" method="post" >
						<table style="width:100%; height:300px; float:left; font-family:arial; font-size:15px;">
						  <tr>
								 <td>&nbsp;
								      
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
								<td>Username/E-mail 
								</td>
								<td>
									<input type="text"  name="email" id="emailid" class="textbox"/>
								</td>
							</tr>
							<tr>
								<td>First name 
								</td>
								<td>
									<input type="text"  name="fname" id="fname"  class="textbox"/>
								</td>
							</tr>
							<tr>
								<td>Last name 
								</td>
								<td>
									<input type="text"  name="lname" id="lname" class="textbox" />
								</td>
							</tr>
							
							<tr>
								<td>Password 
								</td>
								<td>
									<input type="password"  name="pwd" id="pswd" class="textbox"/>
								</td>
							</tr>
							<tr>
								<td>
									Gender 
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
									<input type="submit" value="submit" class="button"  onclick="return validate();"/>
									

								</td>
							</tr>
							
							
							
						</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	
</div>

	<?php include_once('bottombar.php');?>	
					
</body>
</html>

