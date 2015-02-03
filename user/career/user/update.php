<?php
include_once('database.php');
ob_start();
//session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);

 $id=$_SESSION['name'];
?>
<html>
<head>
 <link href="../style.css" type="text/css" rel="stylesheet" />
 <style>
 .textbox{
padding:9.5px;
width:300px;
}
 </style>
</head>
<body style="background:url(images/bg.png);">
      <?php
include_once("topbar1.php");
 ?>
    <?php
    if(isset($_POST['submit']))
    {
      $addre=htmlentities($_REQUEST['add']);
      $cont=htmlentities($_REQUEST['contact']);
      $nomine=htmlentities($_REQUEST['nominee']);
      $pass=htmlentities($_REQUEST['pass']);
      $mail=htmlentities($_REQUEST['mail']);
      $pannum=htmlentities($_REQUEST['pannum']);
      $bankaccno=htmlentities($_REQUEST['bankaccno']);
      $bankdetail=htmlentities($_REQUEST['bankdetail']);
      
    mysql_query("update `register` set `addre`='$addre', `mobile`='$cont', `nname`='$nomine', `pass`='$pass', `email`='$mail' ,`accno`='$bankaccno', `pan`='$pannum', `bank`='$bankdetail' where `userid`='$id'");
    mysql_query("update `login_ch` set `password`='$pass' where `username`='$id'");
    
     $message="your data has successfully updated";
     $subject="email verification";
     $from="career@luvviz.com";
     mail($mail,$subject,$message,"From: $from\n");
     echo "<span style='color:red;'>$message</span>";
    }
    
    $fet=mysql_query("select * from `register` where `userid`='$id'");
    $res=mysql_fetch_array($fet);
    
    ?>
	<div id="content_bar">
		<div id="content_con">
			<div id="content_conbox" style="margin-left:86px;">
				<div id="content_conbox_top" style="height:46px;">
					<h1 class="header" style="margin-left:13px; font-family:arial; margin-top:13px; font-size:15px;">Update</h1>
				</div>
				<div id="content_conbox_bottom">
					<form name="update" action="" method="post">
						<table align="center" class="table" style="width:670px; height:320px; font-family:arial; font-size:15px; ">
							
							<tr>
								<td>Address</td>
								<td><input type="text" name="add" value="<?php echo $res['addre'];?>" class="textbox" required></td>
							</tr>
							<tr>
								<td>Mobile</td>
								<td><input type="text" name="contact" value="<?php echo $res['mobile'];?>" class="textbox" required></td>
							</tr>
							<tr>
								<td>Nominee</td>
								<td><input type="text" name="nominee" value="<?php echo $res['nname'];?>" class="textbox" required ></td>
							</tr>
							<tr>
								<td>New Password</td>
								<td><input type="password" name="pass" value="<?php echo $res['pass'];?>" class="textbox" required ></td>
							</tr>
							<tr>
								<td>E-Mail</td>
								<td><input type="text" name="mail" value="<?php echo $res['email'];?>" class="textbox" required ></td>
							</tr>
							<tr>
								<td>Bank</td>
								<td><input type="text" name="bankdetail" value="<?php echo $res['bank'];?>" class="textbox" required ></td>
							</tr>
							<tr>
								<td>Bank-Accno</td>
								<td><input type="text" name="bankaccno" value="<?php echo $res['accno'];?>" class="textbox" required ></td>
							</tr>
							<tr>
								<td>pancard</td>
								<td><input type="text" name="pannum" value="<?php echo $res['pan'];?>" class="textbox" required ></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="submit" class="button" style="background:#298f1e;"></td>
							</tr>
						</table>
					</form>
				</div>	
			</div>
		</div>
	</div>	
	<?php
	include_once("footer.php");
	?>	
			
</body>
</html> 