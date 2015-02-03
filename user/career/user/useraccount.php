<?php
ob_start();
session_start();
include_once ("database.php");
if (!$_SESSION['name'])
header("location:../login.php");
?>
<?php include_once('database.php');?>
<html>
<head>
      <link href="../style.css" type="text/css" rel="stylesheet" />
<script>
    function showdetail(t)
    {
    window.open('payment.php?q='+t);
    }
</script>
<style>
.table{
border-collapse: collapse;
border-spacing: 0px; border-collapse:collapse; border:1px solid #ccc;
height:auto;
}
.table tr{ border-collapse:collapse; border:1px solid #ccc; height:30px;}
.table tr th{
height:45px;
}
.table tr td{ 
border-collapse:collapse; border:1px solid #ccc; text-align:center;
}

</style>
</head>
<body style="background:url(images/bg.png);">
 <?php
include_once("topbar1.php");
 ?>
<div id="content_bar" style="height:auto; margin-bottom:380px;">
		<div id="content_con">
			<div id="content_conbox" style="margin-left:86px;">
    
				<div id="content_conbox_bottom"  style="box-shadow:none; padding-left:0px; paddding-bottom:0px; padding-top:0px; border:none; background:none;">
				<div style="text-align: center; margin-bottom:10px; padding:6px;font-size:18px; font-weight:bold; color:rgb(68, 121, 202);" >My Account</div>
								<table align="center" class="table" style="width:700px; margin-left:15px; margin-top:0px; background:#fff;">
									<tr style="color:#fff; background:url(green.jpg);">
										<th>SLNO</th>
										<th>DATE</th>
										<th>PAIRS</th>
										<th>SPILL</th>
										<th>AMOUNT</th>
										<th>ACTION</th>
									</tr>
									
									<?php
						 
						 $i=$_SESSION['name'];
						 $id="account".$i;
										$res=mysql_query("select * from `$id`") or die(mysql_error());
										while($fetch=mysql_fetch_array($res))
										  {
									?>
						<tr>
									<td align="center"><?php echo $fetch['slno']; ?></td>
									<td align="center"><?php echo $fetch['date']; ?></td>
									<td align="center"><?php echo $fetch['points']; ?></td>
						<td align="center"><?php echo $fetch['brought']; ?></td>
									<td align="center"><?php echo $fetch['amount']; ?></td>
						<td align="center"><input type="button" name="details" value="details" onclick="showdetail('<?php echo $fetch['amount']; ?>')" class="button1"></td>
									</tr> <?php  }?>
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