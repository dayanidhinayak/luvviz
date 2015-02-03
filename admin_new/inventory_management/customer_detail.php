<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$email_id=$_GET['email'];
//echo $email_id;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
}
.boxdt{
width:600px; 
margin-left:3%;
font-family: Arial,Helvetica,sans-serif;
font-size: 11px;
color: #333;
text-align: center;
background: none repeat scroll 0% 0% #F8F8F8;
border-radius: 3px;
border: 1px solid #CCC;
}
</style>
</head>

<body>
	<?php 
		include_once('topbar.php');
		include_once('../menubar.php');?>
		<div style="width:100%; height:auto; float:left; margin-top:3%;">
		<div class="boxdt" >
		<table style="width:100%">
		<tr>
		 <th>Id</th>
		<th>orderdate</th>
		<th>Action</th>
		</tr>
		<?php

$sqlorder=mysql_query("select * from `order_details` where `user_id`='$email_id'");
//echo "select * from `order_details` where `user_id`='$_SESSION[id]' group by `id`";
while($resorder=mysql_fetch_array($sqlorder)){

?>


							
							
							 <tr>
							 <td><?php echo $resorder['id'];?></td>
							 <td><?php echo $resorder['order_ondate'];?></td>
							<td>
							 <a href="customerhistory.php?id=<?php echo $resorder[id];?>&status=<?php echo $resorder[status];?>" style="text-decoration: none;">
     <input type="button" name="button" value="Details" />
     </a>
							</td>
							 
</tr>							
<?php

}
?>




							  </table>
							  </div>
							  </div>
							  <?php
		include_once("../footer.php");
		?>
</body>
</html>
