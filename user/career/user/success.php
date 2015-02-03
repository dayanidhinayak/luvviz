<?php
ob_start();
session_start();
include_once ("database.php");
if (!$_SESSION['name'])
header("location:../login.php");
?>
<?php include_once('database.php');
$uid=htmlentities($_GET['id']);
$pass=htmlentities($_GET['pass']);
?>
<html>
<head>
      <link href="../style.css" type="text/css" rel="stylesheet" />
<style>
.table{
border-collapse: collapse;
border-spacing: 0px; border-collapse:collapse; border:1px solid #ccc;
}
.table tr{ border-collapse:collapse; border:1px solid #ccc; height:30px;}


.table tr td{ 
border-collapse:collapse; border:1px solid #ccc; text-align:center;
}

</style>
</head>
<body style="background:url(images/bg.png);">
<div id="content_bar">
		<div id="content_con">
			<div id="content_conbox" style="margin-left:86px;">
    
				<div id="content_conbox_bottom"  style="box-shadow:none; padding-left:0px; paddding-bottom:0px; padding-top:0px; border:none; background:none;">
				<div style="text-align: center; margin-bottom:10px; padding:6px;font-size:18px; font-weight:bold; color:rgb(68, 121, 202);" >Thank You</div>
					<table align="center" border="0" class="table" style="width:700px; margin-left:15px; margin-top:0px; background:#fff; height:140px;">
                                            <tr>
                                                <th><?php echo $uid;?> has sucessfully Registered</th>
                                            </tr>
                                            <tr>
                                                <td>Your USERID is <?php echo $uid;?></td>
                                            </tr>
                                            <tr>
                                                <td>Your PASSWORD is <?php echo $pass;?></td>
                                            </tr>
                                            <tr>
                                                <td>Your PASSWORD and USERID has sussessfully  mailed to your concerned Mail-Id</td>
                                            </tr>
                                            <tr>
                                                <td><a href="home.php"><input type="button" name="re" value="ok"></a></td>
                                            </tr>
                                        </table>
				</div>
			</div>
		</div>
	</div>
<?php
	include_once("footer.php");
?>
</body>
</html> 