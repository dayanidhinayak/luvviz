<?php
ob_start();
session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);
  $currentday = date("D");
 //if($currentday!="Sat")
 //{ header("location:home.php");}
?>
<?php include_once('database.php'); ?>
<html>
<head>
   
     <link href="../style.css" type="text/css" rel="stylesheet" />
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
	<script>
function pay(amin,tname,uid,bmin,amt,usid)
{
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    //document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
 
      alert("sucessfully paid");
      document.getElementById(uid).style.display="none";
 
    }
  }
xmlhttp.open("GET","payaccount.php?points="+amin+'&tname='+tname+'&bmin='+bmin+'&amount='+amt+'&userid='+usid,true);
xmlhttp.send();
}
function showdetail(tname) {
    window.open('detailsacct.php?q='+tname);
}
</script>
</head>
<body style="background:url(bg.png);">
  <?php
include_once("topbar.php");
    ?>
	<div id="content_bar" style="height: auto; margin-bottom:355px;">
		<div id="content_con">
			<div id="content_conbox" style="margin-left:86px;">
               
				<div id="content_conbox_bottom"  style="box-shadow:none; padding-left:0px; paddding-bottom:0px; padding-top:0px; border:none; background:none;">	
						<div style="text-align: center; margin-bottom:10px; padding:6px;font-size:18px; font-weight:bold; color:rgb(68, 121, 202);" >Payment</div>
						<form name="account" action="" method="post">   
						<table align="center" class="table" style="width:700px; margin-left:0px; margin-top:0px; background:#fff; height:60px;">
							<tr style="color:#fff; background:url(green.jpg);">
								<th>Name</th>
								<th>Userid</th>
								<th>Pairs</th>
								<th>Amount</th>
							<th>Spill</th>
								<th>Action</th>
							</tr>
							<?php
						   $reg_table='register';
							$fet=mysql_query("select * from `$reg_table`");
							  $acc='account';  
							while($res=mysql_fetch_array($fet))
							{ $x=0;
								$left=$res['left'];
								$right=$res['right'];
								$uid=$res['userid'];
								$nam=$res['name'];
								$user="user".$res['userid'];
							$min=min($left,$right);
							 $max=max($left,$right);
							$accounttable=$acc.$uid;
							$pair1=0;
							$pair2=0;
							$pair3=0;
							if($max>=2 && $min!=0)
							{
                                                        //$x=intval($max/2);
                                                        //$pair=min($x,$min);
							
							if($right>2)
							{
							    $max1=$right-2;
							    $min1=$left-1;
							    $pair1=min($max1,$min1);
							}
							if($left>2)
							{
							    $max1=$left-2;
							    $min1=$right-1;
							    $pair2=min($max1,$min1);
							}
							
						        //$max1=$max-2;
							//$min1=$min-1;
							//$pair3=min($max1,$min1);
							$pair3=min($pair1,$pair2);
							$pair=$pair3+1;
                                                        
                                                        $fetch=mysql_query("select * from `$reg_table` where `sid`='$uid'");
							$brought1=mysql_numrows($fetch);
							if($brought1>2)
							{
							$brought=$brought1-2;
							}else{$brought=0;}
                                                        if($pair>0)
                                                        {
                                                            $fet1=mysql_query("SELECT SUM(points) as spoint FROM `$accounttable`");
							    $res1=mysql_fetch_array($fet1);
							
							$fet2=mysql_query("SELECT SUM(brought) as stpoint  FROM `$accounttable`");
							$res2=mysql_fetch_array($fet2);
                                                        $bro_min=$brought-$res2['stpoint'];
                                                        
                                                        $amin=$pair-$res1['spoint'];
							$axmin=$pair-$res1['spoint'];
							if($amin!=0)
								{
							if($amin<=10)
							{
							    $a=$amin*100;
							}else
							{
							    $amin=10;
							    $a=$amin*100;
							}
							 
							if($bro_min!=0)
								{
								 $bmount=$bro_min*100;
							}
							else{ $bmount=0;}
							//$fet3=mysql_query("SELECT SUM(prize) as sprize  FROM `prize` where `userid`='$uid' and `status`='0'") or die(mysql_error());
								//$res3=mysql_fetch_array($fet3);
							//$sprize=$res3['sprize'];
							 $amount=$a+$bmount;
							   ?>
							   <tr>
								<td onclick="showdetail('<?php  echo $accounttable; ?>')"><?php echo $nam; ?></td>
								<td align="center"><?php echo $res['userid']; ?></td>
								<td align="center"><?php echo $amin; ?></td>
								<td align="center"><?php echo $amount; ?></td>
							<td align="center"><?php echo $bro_min; ?></td>
							<!--<td align="center"><?php echo $sprize; ?></td>-->
								<td><input type="button" value="Pay"id="<?php echo $uid; ?>" onclick="pay('<?php echo $amin; ?>','<?php echo $accounttable; ?>','<?php echo $uid; ?>','<?php echo $bro_min; ?>','<?php echo $amount; ?>','<?php echo $uid; ?>')"</td>
							   </tr>
							   
							<?php
                                                        }
							}
                                                        }
							}
                                                        ?>
						</table>
						</form>
				</div>		
			</div>
		</div>
	</div>	
	<?php
	include_once("footer1.php");
	?>
</body>
</html> 