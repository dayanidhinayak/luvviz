<?php
include_once('database.php');
ob_start();
//session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);

 $uid=$_SESSION['name'];
$account="account".$uid;
$ttable="user".$uid;
$fetch=mysql_query("select * from `register` where `userid`='$uid'");
$brought=mysql_numrows($fetch);
 $receve=mysql_fetch_array($fetch);
   
       $jdate=$receve['jod'];
       $left=$receve['left'];
       $right=$receve['right'];
       $min=min($left,$right);
         
    
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
      <?php
include_once("topbar1.php");
 ?>
	<div id="content_bar">
		<div id="content_con">
			<div id="content_conbox" style="margin-left:86px;">
				<div id="content_conbox_bottom"  style="box-shadow:none; padding-left:0px; paddding-bottom:0px; padding-top:0px; border:none; background:none;">
					<div style="text-align: center; margin-bottom:10px; padding:6px;font-size:18px; font-weight:bold; color:rgb(68, 121, 202);" >Prize</div>
						<table align="center" class="table" style="width:700px; margin-left:15px; margin-top:0px; background:#fff; height:350px;">
							<tr style="background:#298f1e; color:#fff;">
								<th>PAIR</th>
								<th>DURATION</th>
								<th>STATUS</th>
								<th>GIFT</th>
							</tr>
							<tr>
								<?php
								
								$date=date('Y-m-d', strtotime($jdate. ' + 7 days'));
							  
							  $fetch1=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date'");
							  $num=mysql_numrows($fetch1);
							  
								
								?>
								<td>4:4</td>
								<td><?php $lefttime=strtotime($jdate. ' + 7 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num>=9 && $min>=4){echo "achived";}else{ echo "not achived(".$date.")";}?></td>
								<td>Backpack</td>
							</tr>
						<tr>
							<?php
								$date2=date('Y-m-d', strtotime($jdate. ' + 20 days'));
							  
							  $fetch2=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date2'");
							  $num2=mysql_numrows($fetch2);
							  
								
								?>
								<td>16:16</td>
								<td><?php $lefttime=strtotime($jdate. ' + 20 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num2>=33  && $min>=16){echo "achived";}else{ echo "not achived(".$date2.")";}?></td>
								<td>Induction Cooker</td>
							</tr>
						<tr>
							<?php
								$date3=date('Y-m-d', strtotime($jdate. ' + 50 days'));
							  
							  $fetch3=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date3'");
							  $num3=mysql_numrows($fetch3);
							  
								
								?>
								<td>32:32</td>
								<td><?php $lefttime=strtotime($jdate. ' + 50 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num3>=65  && $min>=32){ echo "achived";}else{ echo "not achived(".$date3.")";}?></td>
								<td>Casio-Enticr Male Wrist Watch</td>
							</tr>
						<tr>
							<?php
								$date4=date('Y-m-d', strtotime($jdate. ' + 75 days'));
							  
							  $fetch4=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date4'");
							  $num4=mysql_numrows($fetch4);
							  
								
								?>
								<td>64:64</td>
								<td><?php $lefttime=strtotime($jdate. ' + 75 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num4>=129  && $min>=75){ echo "achived";}else{ echo "not achived(".$date4.")";}?></td>
								<td>Samsung Galaxy Core-2 mobile</td>
							</tr>
						<tr>
							<?php
								$date5=date('Y-m-d', strtotime($jdate. ' + 120 days'));
							  
							  $fetch5=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date5'");
							  $num5=mysql_numrows($fetch5);
							  
								
								?>
								<td>128:128</td>
								<td><?php $lefttime=strtotime($jdate. ' + 120 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num5>=257  && $min>=128){ echo "achived";}else{ echo "not achived(".$date5.")";}?></td>
								<td>5 gram Gold Coin</td>
							</tr>
						<tr>
							<?php
								$date6=date('Y-m-d', strtotime($jdate. ' + 160 days'));
							  
							  $fetch6=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date6'");
							  $num6=mysql_numrows($fetch6);
							  
								
								?>
								<td>256:256</td>
								<td><?php $lefttime=strtotime($jdate. ' + 160 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num6>=513  && $min>=256){ echo "achived";}else{ echo "not achived(".$date6.")";}?></td>
								<td>Dell Laptop</td>
							</tr>
						<tr>
							<?php
								$date7=date('Y-m-d', strtotime($jdate. ' + 200 days'));
							  
							  $fetch7=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date7'");
							  $num7=mysql_numrows($fetch7);
							  
								
								?>
								<td>512:512</td>
								<td><?php $lefttime=strtotime($jdate. ' + 200 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num7>=1025 && $min>=512){ echo "achived";}else{ echo "not achived(".$date7.")";}?></td>
								<td>Pulser 150</td>
						</tr>
						<tr>
							<?php
								$date8=date('Y-m-d', strtotime($jdate. ' + 240 days'));
							  
							  $fetch8=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date8'");
							  $num8=mysql_numrows($fetch8);
							  
								
								?>
								<td>1028:1028</td>
								<td><?php $lefttime=strtotime($jdate. ' + 240 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num8>=2057 && $min>=1028){ echo "achived";}else{ echo "not achived(".$date8.")";}?></td>
								<td>Royal Enfield</td>
						</tr>
						<tr>
							<?php
								$date9=date('Y-m-d', strtotime($jdate. ' + 280 days'));
							  
							  $fetch9=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date9'");
							  $num9=mysql_numrows($fetch9);
							  
								
								?>
								<td>2048:2048</td>
								<td><?php $lefttime=strtotime($jdate. ' + 280 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num8>=4097 && $min>=2048){ echo "achived";}else{ echo "not achived(".$date9.")";}?></td>
								<td>Nano</td>
						</tr>
						<tr>
							<?php
								$date10=date('Y-m-d', strtotime($jdate. ' + 320 days'));
							  
							  $fetch10=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date10'");
							  $num10=mysql_numrows($fetch10);
							  
								
								?>
								<td>8192:8192</td>
								<td><?php $lefttime=strtotime($jdate. ' + 320 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num10>=16385 && $min>=8192){ echo "achived";}else{ echo "not achived(".$date10.")";}?></td>
								<td>Duster</td>
						</tr>
						<tr>
							<?php
								$date11=date('Y-m-d', strtotime($jdate. ' + 365 days'));
							  
							  $fetch11=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date11'");
							  $num11=mysql_numrows($fetch11);
							  
								
								?>
								<td>32768:32768</td>
								<td><?php $lefttime=strtotime($jdate. ' + 365 days')-time();  
									if($lefttime<0)
										echo "Expired";
									else
										echo round($lefttime/86400,0);
								?></td>
								<td><?php if($num11>=65537 && $min>=32768){ echo "achived";}else{ echo "not achived(".$date11.")";}?></td>
								<td>Audi Q3</td>
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