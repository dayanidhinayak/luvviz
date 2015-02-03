<?php
ob_start();
session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);
?>
<?php include_once('database.php'); ?>
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
function pay(amin,tname,uid)
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
xmlhttp.open("GET","payaccount.php?points="+amin+'&tname='+tname,true);
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
    
    if($max>1 && $min!=0){
        $fet1=mysql_query("SELECT SUM(points) as spoint FROM `$accounttable`");
        $res1=mysql_fetch_array($fet1);
        
        $amin=$min-$res1['spoint'];
        if($amin!=0)
        {
        $amount=$amin*125;
       ?>
       <tr>
        <td onclick="showdetail('<?php  echo $accounttable; ?>')"><?php echo $nam; ?></td>
        <td align="center"><?php echo $amin; ?></td>
        <td align="center"><?php echo $amount; ?></td>
        <td><input type="button" value="Pay"id="<?php echo $uid; ?>" onclick="pay('<?php echo $amin; ?>','<?php echo $accounttable; ?>','<?php echo $uid; ?>')"</td>
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