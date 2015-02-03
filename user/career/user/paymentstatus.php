<?php
include_once('database.php');
ob_start();
//session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);

 $id=$_SESSION['name'];
 $acc="account".$id;
 $date=date("Y-m-d");
 $today = getdate();
   $weekStartDate = $today['mday'] - $today['wday'];
   $weekEndDate = $today['mday'] - $today['wday']+6;
    $sdate=date("Y-m-$weekStartDate");
    $ldate=date("Y-m-$weekEndDate");
   $bro=0;
   $a=0;
    $poi=0;
?>
<html>
<head><script>
    function showdetail(t)
    {
    window.open('payment.php?q='+t);
}
</script>
</head>
<body>
     <div>
			<?php include_once('home.php');?>
	    </div>
    <table align="center" border="1">
        <tr>
            <td><?php  echo $date; ?></td>
            <td>LEFT</td>
            <td>RIGHT</td>
        </tr>
        <tr>
            <td>Brought Forword</td>
            <?php
            $fet=mysql_query("select * from `register` where `userid`='$id'");
            $res=mysql_fetch_array($fet);
            $left=$res['left'];
            $right=$res['right'];
            $min=min($left,$right);
            ?>
            <td><?php echo $res['left']; ?></td>
            <td><?php echo $res['right']; ?></td>
        </tr>
        <tr>
            <td>Current week</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <?php
            //echo "select * from `$acc` where `date` between '$sdate' and '$ldate'";
            $fet1=mysql_query("select * from `$acc` where `date` between '$sdate' and '$ldate'") or die(mysql_error());
            while($res1=mysql_fetch_array($fet1))
            {
                $bro=$res1['brought']+$bro;
               $a=$res1['amount']+$a;
              $poi=$res1['points']+$poi;
            }
            ?>
            <td>spil</td>
            <td></td>
            <td><?php  echo $bro;?></td>
        </tr>
        <tr>
            <td><?php echo "TOTAL=(".$bro."*100)+(".$poi."*200)"?></td>
            
            <td colspan="2" align="center" ><?php  echo $a." INR";?></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="button" name="details" value="Go for Net Payment" onclick="showdetail('<?php echo $a; ?>')"></td>
        </tr>
    </table>
</body>
</html> 