<?php
ob_start();
session_start();
if (!$_SESSION['name'])
header("location:../login.php");
?>
<html>
<head>
 <link href="../style.css" type="text/css" rel="stylesheet" />
</head>
<body style="background:url(images/bg.png);">
 <?php
include_once("topbar1.php");
 ?>

	<div id="content_bar">
		<div id="content_con">
			<div id="content_conbox">
						           <form name="newregister" action="" method="post">
						               <?php
						                include_once('database.php');
						                if(isset($_POST['submit']))
                                                                 {
						                 $cod=htmlentities($_REQUEST['autcode']);
						                 $fet="select * from authcode where code='$cod'";
						                 $query=mysql_query($fet);
						                 if($res=mysql_fetch_array($query))
						                 {
						                  echo $stat=$res['status'];
						                  if($stat==0)
						                 {
						                 header("location:register.php?auth=$cod");
						                 }
						                else
						                {
						                 $err="please insert a new authorisation code";
						                 }		
						                 }
						                 else
						                  {
						                   $err="please insert a new authorisation code";
						                   }
						                  }
						                ?>
				<div id="content_conbox_top" style="height:46px;">
					<h1 class="header" style="margin-left:13px; font-family:arial; margin-top:13px; font-size:15px;">Register a New User</h1>
				</div>
				<div id="content_conbox_bottom">
												<table cellpadding="5" class="table" style="width:500px; height: 150px; font-family:arial; font-size:15px; ">
												    <tr>
												      <td>Authorisation Code</td>
												      <td><input type="text" required name="autcode" class="textbox" style="width:250px; padding:10px;"></td>
							    
												    <tr>
												      <td><input type="submit" name="submit" value="Submit Authcode" class="button" style="background:#27911d;"></td>
												    </tr>
												</table>
						                 </form>
									
				</div>
						</div>
	</div>
</div>
</div>
	<?php
	include_once("footer.php");
	?>
</body>
</html> 
