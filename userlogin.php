<?php
include_once("function.php");
if(isset($_POST['submit'])){
$user=htmlentities($_POST['usrname']);
$pwd=htmlentities($_POST['pass']);
$res=mysql_query("select * from `userlogin` where `username`='$user' and `password`='$pwd'");
$no=mysql_num_rows($res);
if($no>=1){
$_SESSION['id']=$user;
$_SESSION['pass']=$pwd;
header("location:index.php");
}
else{
header("location:userlogin.php");
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
					<form name="f" method="post" action="#">
					    <table style="width:100%; height:200px; float:left; font-family:arial; font-size:15px; " >
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
