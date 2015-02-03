<?php
ob_start();
session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);
?>
<?php include_once('database.php');
$d=date("Y-m-d");
?>
<html>
<head>
     <link rel="stylesheet" href="style.css" type="text/css" media="screen" >
        <style>
            table{
                border:1px solid #dedede;
                border-collapse:collapse;
            }
            tr td{
                border:1px solid #dedede;
                border-collapse:collapse;
                height: 30px;
            }
            tr th{
                border:1px solid #dedede;
                border-collapse:collapse;
                height: 35px;
                background: #efefef;
                color: #333;
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
<body>
<div id="container" style="height: auto; ">
		    <div id="container_content" style="height: 0px;">
		     
		    </div>
                     <div style="text-align: center">PAYMENT</div>
		    <form name="account" action="" method="post">   
<table align="center">
    <tr>
        <th>Name</th>
        <th>Points</th>
        <th>Amount</th>
	<th>Spil</th>
	<!--<th>prize</th>-->
        <th>Action</th>
    </tr>
    <?php
   $reg_table='register';
    $fet=mysql_query("select * from `$reg_table`");   
      $acc='account';  
    while($res=mysql_fetch_array($fet))
    {
        $left=$res['left'];
        $right=$res['right'];
        $uid=$res['userid'];
        $nam=$res['name'];
    $min=min($left,$right);
    $max=max($left,$right);
    $accounttable=$acc.$uid;
    
    $jdate=$res['jod'];
    $fetch=mysql_query("select * from `$reg_table` where `sid`='$uid'");
    $brought=mysql_numrows($fetch);
    
    $date=date('Y-m-d', strtotime($jdate. ' + 10 days'));
    $fetch1=mysql_query("select * from `$reg_table` where `sid`='$uid' and `jod` between '$jdate' and '$date'");
    $num=mysql_numrows($fetch1);
    if($num>=16){
      $prize=1000;
      $count=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='1000'");
      $n=mysql_numrows($count);
      if($n==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='1000',`date`='$d'");
      }
    
    $date2=date('Y-m-d', strtotime($jdate. ' + 30 days'));
    $fetch2=mysql_query("select * from `$reg_table` where `sid`='$uid' and `jod` between '$jdate' and '$date2'");
    $num2=mysql_numrows($fetch2);
    if($num2>=64){
       $prize=5000;
      $count2=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='5000'");
      $n2=mysql_numrows($count2);
      if($n2==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='5000',`date`='$d'");
      }
    
    $date3=date('Y-m-d', strtotime($jdate. ' + 60 days'));
    $fetch3=mysql_query("select * from `$reg_table` where `sid`='$uid' and `jod` between '$jdate' and '$date3'");
    $num3=mysql_numrows($fetch3);
    if($num3>=256){
      echo $prize=30000;
      $count3=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='30000'");
      $n3=mysql_numrows($count3);
      if($n3==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='30000',`date`='$d'");
      }
    
    $date4=date('Y-m-d', strtotime($jdate. ' + 100 days'));
    $fetch4=mysql_query("select * from `$reg_table` where `sid`='$uid' and `jod` between '$jdate' and '$date4'");
    $num4=mysql_numrows($fetch4);
    if($num4>=1024){
      echo $prize=80000;
      $count4=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='80000'");
      $n4=mysql_numrows($count4);
      if($n4==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='80000' ,`date`='$d'");
      }
    
    $date5=date('Y-m-d', strtotime($jdate. ' + 160 days'));
    $fetch5=mysql_query("select * from `$reg_table` where `sid`='$uid' and `jod` between '$jdate' and '$date5'");
    $num5=mysql_numrows($fetch5);
    if($num5>=4096){
      echo $prize=450000;
      $count5=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='450000'");
      $n5=mysql_numrows($count5);
      if($n5==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='450000',`date`='$d'");
      }
    
    $date6=date('Y-m-d', strtotime($jdate. ' + 240 days'));
    $fetch6=mysql_query("select * from `$reg_table` where `sid`='$uid' and `jod` between '$jdate' and '$date6'");
    $num6=mysql_numrows($fetch6);
    if($num6>=16384){
      echo $prize=1000000;
      $count6=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='1000000'");
      $n6=mysql_numrows($count6);
      if($n6==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='1000000',`date`='$d'");
      }
    
    $date7=date('Y-m-d', strtotime($jdate. ' +365 days'));
    $fetch7=mysql_query("select * from `$reg_table` where `sid`='$uid' and `jod` between '$jdate' and '$date7'");
    $num7=mysql_numrows($fetch7);
    if($num7>=65536){
      echo $prize=3000000;
      $count7=mysql_query("select * from `prize` where `userid`='$uid' and `prize`='3000000'");
      $n7=mysql_numrows($count7);
      if($n7==0)
      mysql_query("insert into `prize` set `userid`='$uid',`prize`='3000000',`date`='$d'");
      }
    
    //--prize--//
    
    if($max>1 && $min!=0){
        $fet1=mysql_query("SELECT SUM(points) as spoint  FROM `$accounttable`");
        $res1=mysql_fetch_array($fet1);
	
	$fet2=mysql_query("SELECT SUM(brought) as stpoint  FROM `$accounttable`");
        $res2=mysql_fetch_array($fet2);
        
	$bro_min=$brought-$res2['stpoint'];
	
        $amin=$min-$res1['spoint'];
        if($amin!=0)
        {
         $a=$amin*200;
	
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
       ?>
</table>
</form>
</div>
</body>
</html> 