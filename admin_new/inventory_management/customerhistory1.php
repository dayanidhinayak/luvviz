<?php
ini_set("display_errors",1);
include_once("../function.php");
$bill_id=$_GET['id'];
$status=$_GET['status'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
<title>...:::LUVVIZ:::...</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	tr{
	height:35px;
	 text-shadow: 0 1px 0 #FFFFFF;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>
</head>

<body>
<?php 
		include_once('topbar.php');
		include_once('../menubar.php');?>
		   <div class="orderbox"  style="width:735px; height:auto; margin-left:0%; padding-bottom:2%;  margin-left:3%; ">
				 <h1> Purcahse History</h1>
				 	<div class="box" style="width:600px;height:auto; margin-bottom: 15px; font-family:arial;">
				 		
				 	
				 		<div style="padding:10px; text-align:justify;">


<table cellpadding="4" cellspacing="10" style="font-family:arial;">
    
 <tr>
							 <th>Product Name</th>
							 <th>Quantity</th>
							 <th>Price</th>
							 
							 </tr>



<?php

$que=mysql_query("select * from `temp_billinfo` where `bill_id`='$bill_id'");
while($res=mysql_fetch_array($que))
{
$b=$res['product_id'];

$qu=mysql_query("select * from `product` where `id`='$b'");

while($re=mysql_fetch_array($qu))
{

?>


							
							
							 <tr id="<?php echo $b;?>">
							 <td><?php echo $re['product_name'];?></td>
							 <td><?php echo $res['quantity'];?></td>
							 <td><?php
							 if($res['tot_price']<349){
							 $tot=$res['tot_price']+80;
							 echo $tot;
							 }
							 else{
							  echo $res['tot_price'];
							  }
							  ?></td>
						         



							 
</tr>							
<?php
}
}
?>
							  </table>
					</div>   
			  
			</div>
						
						</div>
						<?php
		include_once("../footer.php");
		?>
						
</body>
</html>
