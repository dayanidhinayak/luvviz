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
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
		});
		new JsDatePick({
			useMode:2,
			target:"inputField1",
			dateFormat:"%Y-%m-%d"
			
		});
		};
</script>
<script>
    function showdetail(t)
    {
    window.open('detailsacc.php?q='+t);
}
function show()
    {
	
	var id=$('#search').val();
	
    window.open('details.php?q='+id);
}
</script>
<style>
.t{
border-collapse: collapse;
border-spacing: 0px; border-collapse:collapse; border:1px solid #ccc;
height:auto;
}
.tr{ border-collapse:collapse; border:1px solid #ccc; height:30px;}

.table tr th{
height:45px;
}
.td{ 
border-collapse:collapse; border:1px solid #ccc; text-align:center;
}
.textbox{
width:200px;
}
</style>
</head>
<body style="background:url(bg.png);">
     <?php
include_once("topbar.php");
    ?>
	<div id="content_bar" style="height:auto; margin-bottom:100px;">
		<div id="content_con">
			<div id="content_conbox" style="margin-left:86px;">
				<div id="content_conbox_top">
					<h1 class="header" style="margin-left:13px; font-family:arial; margin-top:9px; font-size:15px;">Join Details</h1>
				</div>
				<div id="content_conbox_bottom">
						<form name="join" action="" method="post">
						<table align="center" class="table" style="width:500px; height: 150px; font-family:arial; font-size:14px;">
							<tr>
							<td colspan="5">Date</td>
							</tr>
							<tr>
							<td>from</td>
							<td><input type="text" name="rpt" id="inputField" class="textbox"></td>
							<td>To</td>
							<td><input type="text" name="rpt1" id="inputField1" class="textbox"></td>
							<td><input type="submit" name="submit" value="submit" class="button" style="background:#298f1e;"></td>
							</tr>
							<tr>
							<td>Search</td>
							<td><input type="text" name="search" id="search" value="" class="textbox"></td>
							<td><input type="button" name="searc" value="search" onclick="show()" class="button" style="background:#298f1e;"/></td>
							<td></td>
							<td></td>
							</tr>
						</table>
						</form>
				</div>
				<div id="content_conbox_bottom"  style="box-shadow:none; padding-left:0px; paddding-bottom:0px; padding-top:0px; border:none; background:none;">	
						  <table align="center" class="table t" style="width:715px; margin-left:0px; margin-top:15px; background:#fff;">
							<tr style="color:#fff; background:url(green.jpg);" class="tr">
							<th>Slno</td>
							<th>UserId</td>
							<th>User name</strong></td>
							<th>Mobile Number</th>
							<th>E-Mail</th>
							<th>Date</th>
							</tr>
							<?php
							if(isset($_POST['rpt'])=="" && isset($_POST['rpt1'])=="")
							{
							
							$fet=mysql_query("select * from `register`")or die(mysql_error());
							}
							else
							{
							$fet=mysql_query("select * from `register` where `jod` between '$_POST[rpt]' and '$_POST[rpt1]'") or die(mysql_error());
							}
							
							while($res=mysql_fetch_array($fet))
							{
							?>
							<tr class="tr">
							<td class="td"><?php echo $res['slno']; ?></td>
							<td onclick="showdetail('<?php echo $res['userid']; ?>')" class="td"><?php echo $res['name']; ?></td>
							<td class="td"><?php echo $res['userid']; ?></td>
							<td class="td"><?php echo $res['mobile']; ?></td>
							<td class="td"><?php echo $res['email']; ?></td>
							<td class="td"><?php echo $res['jod']; ?></td>
							</tr><?php } ?>
						</table>
					</div>	
			</div>
		</div>
	</div>	
		
			
	<div id="footer" style=" background:rgb(68, 121, 202); height:45px; margin-top:70px;">
				<div id="footer_bar" style=" background:none; height:35px;">
					

    Copyright &copy; 2014 luvviz All Right Reserved.


				</div>
</div>			
</body>
</html> 