<?php
ob_start();
session_start();
if (!$_SESSION['name'])
header("location:../login.php");
?>
<div id="container">
						<div id="container_content" style="height:300px;">
									<div class="header1">
											<form name="newregister" action="" method="post">
												   <?php
													include_once('database.php');
													if(isset($_POST['submit']))
													{
														 $cod=$_REQUEST['autcode'];
														$fet="select * from authcode where code='$cod'";
													   $query=mysql_query($fet);
												   if($res=mysql_fetch_array($query))
												   {
													echo $stat=$res['status'];
														if($stat==0)
														{
														 $updt="UPDATE authcode SET `status` = '1' WHERE `code` = '$cod'";
														 mysql_query($updt);
														 header("location:register.php?auth=$cod");
														}
														else
														{
															echo $err="please insert a new authorisation code";
														}
														
												   }
												   else
														{
															echo $err="please insert a new authorisation code";
														}
													}
													?>
		<div class="header"> Register a New User</div>
        <table style="width:700px; height:300px; font-family:Arial, Helvetica, sans-serif; color:#333333; font-size:16px;">
			<tr style="width:600px;">
                               <td width="250">Authorisation Code</td>
							   <td><input type="text" required name="autcode" value=""  style="width:300px; height:30px; color:#333333; font-family:Arial, Helvetica, sans-serif; font-size:14px;"></td>
            
            <tr>
                               <td><input type="submit" name="submit" value="Submit Authcode"></td>
            </tr>
    </table>
    </form>
									<div class="separator">
									</div>
									
						</div>
						
			</div>
</body>
</html> 
