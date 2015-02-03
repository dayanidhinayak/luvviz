<?php
include_once('database.php');
ob_start();
//session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);
?>
<html>
<head>
<link href="../style.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="jquery-1.7.1.min.js"></script>
    <script>
       function pay(uid,slno)
        {
            //alert(slno);
            $("#pay").hide();
            window.open('payprize.php?sln='+slno+'&id='+uid);
        }
    </script>
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
<body style="background:url(bg.png);">
     <?php
include_once("topbar.php");
    ?>
	<div id="content_bar">
		<div id="content_con">
			<div id="content_conbox" style="margin-left:86px;">
    <?php
    $d=date('Y-m-d');
   $reg_table='register';
    $fet=mysql_query("select * from `$reg_table`");  
    while($res=mysql_fetch_array($fet))
    {
        $left=$res['left'];
        $right=$res['right'];
        $uid=$res['userid'];
        $nam=$res['name'];
    $min=min($left,$right);
    $max=max($left,$right);
    $ttable="user".$uid;
    
    $jdate=$res['jod'];
    
    $date=date('Y-m-d', strtotime($jdate. ' + 7 days'));
    $fet=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date'");
    $num=mysql_numrows($fet);
    if($num>=9 && $min>=4){
     $prize=1000;
      $count=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='1000'")or die(mysql_error());
      $n=mysql_numrows($count);
      if($n==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='1000',`date`='$d', `limit`='4:4'")or die(mysql_error());
      }
    
    $date2=date('Y-m-d', strtotime($jdate. ' + 20 days'));
    $fetch2=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date2'");
    $num2=mysql_numrows($fetch2);
    if($num2>=33  && $min>=16){
      $prize=5000;
      $count2=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='5000'");
      $n2=mysql_numrows($count2);
      if($n2==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='5000',`date`='$d', `limit`='16:16'");
      }
    
    $date3=date('Y-m-d', strtotime($jdate. ' + 50 days'));
    $fetch3=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date3'");
    $num3=mysql_numrows($fetch3);
    if($num3>=65  && $min>=32){
       $prize=30000;
      $count3=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='30000'");
      $n3=mysql_numrows($count3);
      if($n3==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='30000',`date`='$d', `limit`='32:32'");
      }
    
    $date4=date('Y-m-d', strtotime($jdate. ' + 75 days'));
    $fetch4=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date4'");
    $num4=mysql_numrows($fetch4);
    if($num4>=129  && $min>=64){
       $prize=80000;
      $count4=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='80000'");
      $n4=mysql_numrows($count4);
      if($n4==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='80000' ,`date`='$d', `limit`='64:64'");
      }
    
    $date5=date('Y-m-d', strtotime($jdate. ' + 120 days'));
    $fetch5=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date5'");
    $num5=mysql_numrows($fetch5);
    if($num5>=257  && $min>=128){
       $prize=450000;
      $count5=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='450000'");
      $n5=mysql_numrows($count5);
      if($n5==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='450000',`date`='$d', `limit`='128:128'");
      }
    
    $date6=date('Y-m-d', strtotime($jdate. ' + 160 days'));
    $fetch6=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date6'");
    $num6=mysql_numrows($fetch6);
    if($num6>=513  && $min>=256){
       $prize=1000000;
      $count6=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='1000000'");
      $n6=mysql_numrows($count6);
      if($n6==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='1000000',`date`='$d', `limit`='256:256'");
      }
    
    $date7=date('Y-m-d', strtotime($jdate. ' + 200 days'));
    $fetch7=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date7'");
    $num7=mysql_numrows($fetch7);
    if($num7>=1025  && $min>=512){
      $prize=3000000;
      $count7=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='3000000'");
      $n7=mysql_numrows($count7);
      if($n7==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='3000000',`date`='$d', `limit`='512:512'");
      }
       
    $date8=date('Y-m-d', strtotime($jdate. ' + 240 days'));
    $fetch8=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date8'");
    $num8=mysql_numrows($fetch8);
    if($num8>=2057  && $min>=1028){
      $prize=3000000;
      $count8=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='3000000'");
      $n8=mysql_numrows($count8);
      if($n8==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='3000000',`date`='$d', `limit`='1028:1028'");
      }
    $date9=date('Y-m-d', strtotime($jdate. ' + 280 days'));
    $fetch9=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date9'");
    $num9=mysql_numrows($fetch9);
    if($num9>=4097  && $min>=2048){
      $prize=3000000;
      $count9=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='3000000'");
      $n9=mysql_numrows($count9);
      if($n9==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='3000000',`date`='$d', `limit`='2048:2048'");
      }
    $date10=date('Y-m-d', strtotime($jdate. ' + 320 days'));
    $fetch10=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date10'");
    $num10=mysql_numrows($fetch9);
    if($num10>=16385  && $min>=8192){
      $prize=3000000;
      $count10=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='3000000'");
      $n10=mysql_numrows($count10);
      if($n10==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='3000000',`date`='$d', `limit`='8192:8192'");
      }
    $date11=date('Y-m-d', strtotime($jdate. ' + 365 days'));
    $fetch11=mysql_query("SELECT $ttable.down, register.jod FROM $ttable INNER JOIN register ON $ttable.down = register.userid WHERE register.jod  BETWEEN  '$jdate' AND  '$date11'");
    $num11=mysql_numrows($fetch9);
    if($num11>=65537  && $min>=32768){
      $prize=3000000;
      $count11=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='3000000'");
      $n11=mysql_numrows($count11);
      if($n11==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='3000000',`date`='$d', `limit`='32768:32768'");
      }
    }
      ?>
			<div id="content_conbox_bottom"  style="box-shadow:none; padding-left:0px; paddding-bottom:0px; padding-top:0px; border:none; background:none;">
				<div style="text-align: center; margin-bottom:10px; padding:6px;font-size:18px; font-weight:bold; color:rgb(68, 121, 202);" >Prize Details</div>	 
							<table align="center" class="table" style="width:700px; margin-left:15px; margin-top:0px; background:#fff; height:140px;">
								<tr style="background:#298f1e; color:#fff;">
									<th>Userid</th>
									<th>Limit</th>
									<th>Gift</th>
									<th>status</th>
								</tr>
								<?php
								$find=mysql_query("select * from `prize`");
								while($re=mysql_fetch_array($find))
								{
								?>
								<tr>
									<td><?php echo $re['userid'];?></td>
									<td><?php echo $re['limit'];?></td>
									<td><?php echo $re['prize'];?></td>
									<?php if($re['status']==0){?>
									<td><input type="button" name="pay" id="pay" value="pay" onclick="pay('<?php echo $re['userid'];?>','<?php echo $re['slno'];?>')" class="button"></td><?php }else{?>
									<td>paid</td><?php }?>
								</tr><?php }?>
							</table>
				</div>
			</div>
</div>
</div>
</div>
<?php
	include_once("footer1.php");
	?>
</body>
</html> 