<?php
include_once("function.php");
$billid=$_SESSION['billid'];


$email=$_POST['emailid'];
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$contact=$_POST['contact'];
$sex=$_POST['sex'];
$add=$_POST['add'];
$area=$_POST['area'];
$pin=$_POST['pin'];
$city=$_POST['city'];
$state=$_POST['state'];
$dadte=$_POST['ddate'];
$subj="Thank You";

$message=" Thank You For Your Shopping With Us.\r\n";



mail($email,$subj,$message);







mysql_query("insert into `user_details` set `first_name`='$first_name',`deliverydate`='$dadte',`last_name`='$last_name',`email`='$email',`contact`='$contact',`city`='$city',`state`='$state',`pin`='$pin',`address`='$add'")or die(mysql_error());

mysql_query("insert into `order_details` set `id`='$billid',

`user_id`='$email',

`billing_name`='$first_name',

`billing_phn`='$contact',

`billing_sate`='$state',

`billing_city`='$city',

`billing_pin`='$pin',

`billing_address`='$add',

`status`='0'")or die(mysql_error());


mysql_query("update `temp_billinfo` set `cart_status`='1' where `bill_id`='$billid'")or die(mysql_error());

session_destroy();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::MAPKART:::...</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="refresh" content="100; URL=http://mapkart.com/cake/mapkart/index.php">
</head>
<body>
	<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>



<div id="contentbar" style="height:auto; min-height:400px; margin-top: 20px;">
  				<div id="contentbar_box" style="width:940px; height:auto; border-radius:8px; -moz-border-radius:8px; border:1px solid #cccccc; padding-top: 30px; padding-left: 20px; min-height:400px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#efefef), to(#ffffff)); /* Safari 5.1, Chrome 10+ */ background: -webkit-linear-gradient(top, #efefef, #ffffff); /* Firefox 3.6+ */ background: -moz-linear-gradient(top, #efefef, #ffffff); /* IE 10 */ background: -ms-linear-gradient(top, #efefef, #ffffff); /* Opera 11.10+ */ background: -o-linear-gradient(top, #efefef, #ffffff);">
					<div style="width:900px; height: 50px; padding: 10px; float: left; background: #ecfac0; border:1px solid #668238; color: #333;">
						<img src="images/tick.png" style="float: left; margin-right: 15px;">Dear <?php echo $first_name ?><br/><br/>
				
					
				<span style="margin-left:50px;">Thank you for your order. You shall be getting your order delivered in next 2-5 business days.</span>
					</div>
				</div>
</div>
<?php include_once('bottombar.php');
include_once('scart_confirm.php');
?>

</body>
</html>
