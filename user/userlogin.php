<?php
include_once("function.php");
if(isset($_POST['submit'])){
if($_POST['usrname']!="" && $_POST['pass']!=""){
$user=htmlentities($_POST['usrname']);
$pwd=htmlentities($_POST['pass']);
$res=mysql_query("select * from `user_details` where `email`='$user' and `password`='$pwd'");
$no=mysql_num_rows($res);
$row=mysql_fetch_array($res);
$name=$row['firstname'];
if($no>=1){
$_SESSION['id']=$user;
$_SESSION['pass']=$pwd;
//echo $row['email'];
header("location:index.php");
}
}
else{
$msg="Please fillup required fields";
header("location:userlogin.php?msg=$msg");
}
}
?>
<html>
    <head>
	<link href="style1.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
	<div id="menuu" >
		       <?php 
				include_once("menu1.php");?>
	</div>
	<div id="ban">
		<div id="ban_bar">
			<div id="ban_barcon" style="margin-bottom:20px;">	
				<div id="ban_barcontent">
					<div id="ban_barcontenttop">
							Registered customers
				</div>
				<div  id="ban_barcontentbottom">
					<form name="f" method="post" action="userlogin.php">
					    <table style="width:100%; height:200px; float:left; font-family:arial; font-size:15px; " >
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
						    <td>Username:</td>
						  
						    <td>
							<input type="text" name="usrname" placeholder="Username"  class="textbox pl" >
						    </td> 
						</tr>
						
						<tr>
						   <td>Password:</td>
						 
						    <td>
							<input type="password" name="pass" placeholder="Password" class="textbox pl" >
						    </td> 
						</tr>
						
						<tr>
						<td>&nbsp;</td>
						<td>
							<a href="forgetpwd.php" style="font-size:13px; text-decoration:none;">
						Forgot password?
						</a>
						</td>
						
						</tr>
						
						 <tr>
						    <td>&nbsp;</td>
						    <td>
							<input type="submit" name="submit" value="Submit" class="button">
						    </td> 
						</tr>

					    </table>  
					
    
				      </form>
				   </div>
			</div>
		</div>
</div>
		
			<?php include_once('bottombar.php');?>	
        
    </body>
</html>
