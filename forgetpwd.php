<?php
include_once("function.php");
if(isset($_POST['submit'])){
$user=htmlentities($_POST['usernm']);
$res=mysql_query("select * from `userlogin` where `username`='$user'");
$no=mysql_num_rows($res);
if($no>=1){
header("location:mail.php?usernm=$user");
}
else{
header("location:forgetpwd.php");
}
}
?>



<html>
<head>
<link href="style1.css" rel="stylesheet" type="text/css" />

</head>
<body >
	<div id="menuu" >
		       <?php 
				include_once("menu1.php");?>
	</div>
	<div id="ban">
		<div id="ban_bar">
			<div id="ban_barcon" style="margin-bottom:20px;">	
				<div id="ban_barcontent">
					<div id="ban_barcontenttop">
							Creat Newpassword
				</div>
				<div  id="ban_barcontentbottom">

				<form method="post" action="#">
				<table style="width:100%; height:200px; float:left; font-family:arial; font-size:15px; ">
				
   
		<!--<?php echo $msg; ?>-->
    
   <tr>
    <td>Username</td> 
    <td><input type="text" name="usernm" class="textbox" /></td>
  </tr>
 <!-- <tr>
    <td>New Password </td> 
    <td><input type="password" name="newpwd" class="textbox" /></td>
  </tr>
  <tr>
    <td>Re-Type New Password </td>
    <td><input type="password" name="retypepwd" class="textbox"/></td>
  </tr>-->
  <tr> 
  	<td>&nbsp;</td>
    <td ><input type="submit" name="submit" value="SUBMIT"  class="button"/></td>
    
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

