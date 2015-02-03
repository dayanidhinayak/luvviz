<?php
include_once("function.php");
$status='';
$usernm=$_GET['username'];

if(isset($_POST['newpwd']))
{
	
	if($_POST['newpwd']=="")
	{
	$status="New Password Cannot Be Blank.";
	
	}
	
	else
	{
	//echo $usernm;
	$que=mysql_query("UPDATE `userlogin` SET `password`='$_POST[newpwd]' WHERE `username`='$_POST[username]'");
	//echo "UPDATE `userlogin` SET `password`='$_POST[newpwd]' WHERE `username`='$_POST[username]'";
    	if($que)
	{
	$status="Password Changed Successfully.";
	}
	}
}
?>


<html>
<head>
<link href="style1.css" type="text/css" rel="stylesheet" />

</head>
<body>

<div id="content_bar">
		    	<div id="content_con">
			    <div id="content_conbox">
				<form method="post" action="changepwd.php">
				<table class="table1" style="height:200px;">
				
   
<tr>
<?php echo $status; ?>
<td>Username</td>
<td><input type="text" name="username" value="<?php echo $usernm;?>" /></td>
</tr>
    
  <tr>
  
    <td>New Password </td> 
    <td><input type="password" name="newpwd" /></td>
  </tr>
 <!-- <tr>
    <td>Re-Type New Password </td>
    <td><input type="password" name="retypepwd" /></td>
  </tr>-->
  <tr> 
  	<td>&nbsp;</td>
    <td ><input type="submit" name="Submit" value="Save Changes"  class="button"/></td>
    
  </tr>
				</table>
				</form>
			</div>
		</div>
</div>
</body>
</html>

				</table>
				</form>
			</div>
		</div>
</div>
</body>
</html>

