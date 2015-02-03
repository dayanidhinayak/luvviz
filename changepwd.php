<?php
include_once("db.php");
$status='';

if(isset($_POST['currentpwd'],$_POST['newpwd'],$_POST['retypepwd']))
{
	if($_POST['currentpwd']=="")
	{
	$status="Current Password Cannot Be Blank.";
	
	}
	else if($_POST['newpwd']=="")
	{
	$status="New Password Cannot Be Blank.";
	
	}
	else if($_POST['currentpwd']!=$_SESSION["pass"])
	{
	$status="Current Password Is Not Valid.";
	
	}
	else if($_POST['newpwd']!=$_POST['retypepwd'])
	{
	$status="New Password & Confirm Password Are Not Identical.";
	}
	else
	{
	$que=mysql_query("UPDATE `login` SET `password`='$_POST[newpwd]' WHERE `username`='$_SESSION[id]'");
    	if($que)
	{
	$status="Password Changed Successfully.";
	$_SESSION["pass"]=$_POST['newpwd'];
	}
	}
}
?>


<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />

</head>
<body style="background:url(image/bg.png);">
<div id="top">
			<div id="top_bar">
				<div id="top_bar_con" style="width:800px;">
					   <div class="content_conbox1">
						
						<img src="image/add1.png" style="float:left; width:25px; margin-right:5px;" />
						<a href="add_patient.htm">Add Patient</a>
					   </div>
					   <div class="content_conbox1">
						<img src="image/name.png" style="float:left; margin-right:8px; width:16px;" />
						<a href="search_name.php">Search By Name</a>
					   </div>
					   <div class="content_conbox1">
						<img src="image/contact.png" style="float:left; margin-right:8px; width:20px;" />
						<a href="search_phone.php">Search By Contact</a>
					   </div>
					   <div class="content_conbox1">
						<img src="image/log.png" style="float:left; margin-right:8px;" />
						<a href="blog.php">Blogs</a>
					</div>
					<div class="content_conbox1">
						<img src="image/log.png" style="float:left; margin-right:8px;" />
						<a href="logout.php" style="border:none;">Logout</a>
					</div>
					 
				</div>
			 </div>
		</div>

<div id="content_bar">
		    	<div id="content_con">
			    <div id="content_conbox">
				<form method="post" action="change_pwd.php">
				<table class="table1" style="height:200px;">
				 <tr>
    <td>Current Password </td>
<?php echo $status; ?>
    <td><input type="password" name="currentpwd" /></td>
  </tr>
  <tr>
    <td>New Password </td> 
    <td><input type="password" name="newpwd" /></td>
  </tr>
  <tr>
    <td>Re-Type New Password </td>
    <td><input type="password" name="retypepwd" /></td>
  </tr>
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

