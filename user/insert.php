<?php
include_once("function.php");
$billid=$_SESSION['billid'];
//echo $billid;
if(isset($_SESSION['userid']))
{
$userid=$_SESSION['userid'];
}
else
{
$userid=$_POST['emailid'];
}
//$user_type=$_POST['usertype'];
$shipping_fname=$_POST['fname'];
$shipping_lname=$_POST['lname'];
$shipping_email=$_POST['emailid'];
$shipping_contact=$_POST['Input2'];
$shipping_country=$_POST['area'];
$shipping_state=$_POST['state'];
$shipping_city=$_POST['city'];
$shipping_pin=$_POST['pin'];
$shipping_address=$_POST['add'];
$billing_fname=$_POST['fname1'];
$billing_lname=$_POST['lname1'];
//$billing_email=$_POST['email_b'];
$billing_contact=$_POST['phone'];
$billing_country=$_POST['landmark'];
$billing_state=$_POST['state1'];
$billing_city=$_POST['city1'];
$billing_pin=$_POST['pin1'];
$billing_address=$_POST['address'];

//$pay_type=$_POST['payment_type'];
////echo $pay_type;
//$discount=$_POST['discount'];
//$code=$_POST['code'];
//$pay_type=$_POST['payment_type'];
//
//if($pay_type=="credit")
//{
//$card_no=$_POST['credit_cardno'];
//}
//elseif($pay_type=="paypal")
//{
//$card_no=$_POST['payoal_accountno'];
//}
//else
//{
//$card_no=$_POST['google_cardno'];
//}
//if(!$_POST['discount'])
//{
//mysql_query("insert into `order_details` set `id`='$billid',
//`user_id`='$userid',
//`user_type`='$user_type',
//`billing_name`='$billing_fname',
//`billing_phn`='$billing_contact',
//`billing_country`='$billing_country',
//`billing_sate`='$billing_state',
//`billing_city`='$billing_city',
//`billing_pin`='$billing_pin',
//`billing_address`='$billing_address',
//`shipping_name`='$shipping_fname',
//`shipping_cont`='$shipping_contact',
//`shipping_country`='$shipping_country',
//`shipping_state`='$shipping_state',
//`shipping_city`='$shipping_city',
//`shipping_pin`='$shipping_pin',
//`shipping_address`='$shipping_address',
//`status`='0',
//`pay_type`='$pay_type'");
//}
//else
//{
mysql_query("insert into `order_details` set `id`='$billid',
`user_id`='$userid',
`user_type`='$user_type',
`billing_name`='$billing_fname',
`billing_phn`='$billing_contact',
`billing_country`='$billing_country',
`billing_sate`='$billing_state',
`billing_city`='$billing_city',
`billing_pin`='$billing_pin',
`billing_address`='$billing_address',
`shipping_name`='$shipping_fname',
`shipping_cont`='$shipping_contact',
`shipping_country`='$shipping_country',
`shipping_state`='$shipping_state',
`shipping_city`='$shipping_city',
`shipping_pin`='$shipping_pin',
`shipping_address`='$shipping_address',
`status`='0'");
//,`pay_type`='$pay_type',`discount`='$discount',`coupon_no`='$code'
//$q=mysql_query("select `number` from `promo_offer` where `promo_code`='$code'");
//$r=mysql_fetch_array($q);
//$num=$r['number']-1;
//mysql_query("update `promo_offer` set `number`='$num' where `promo_code`='$code'");
//}

//mysql_query("insert into `payment_option` set `billid`='$billid',
//`user_id`='$userid',`pay_type`='$pay_type',`card_details`='$card_no'")or die(mysql_error());

mysql_query("insert into `order_type` set `billid`='$billid',`order_type`='ONLINE CART'");

mysql_query("update `temp_billinfo` set `cart_status`='1' where `bill_id`='$billid'");


$subj="Thankyou";

$message=" Thank You For Shopping With Us";



$to=$userid;

$mail=mail($to,$subj,$message);

session_destroy();
header("location:index.php");
?>


<?php /*?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen"  />
<link rel="stylesheet" href="sticky-navigation.css" />
<script src="jquery-1.6.3.min.js"></script>

<script>
$(function() {

	// grab the initial top offset of the navigation 
	var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = $(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) { 
			$('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0 });
		} else {
			$('#sticky_navigation').css({ 'position': 'relative' }); 
		}   
	};
	
	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	$(window).scroll(function() {
		 sticky_navigation();
	});
	
	// NOT required:
	// for this demo disable all links that point to "#"
	$('a[href="#"]').click(function(event){ 
		event.preventDefault(); 
	});
	
});

</script>

<style>
	tr{
	height:25px;
	}
</style>
<link rel="stylesheet" type="text/css" href="calendar.css" />
<script type="text/javascript" src="calendar_us.js">
</script>

</head>

<body>
<div id="demo_top_wrapper">
	<div id="demo_top">
		<div id="topbar">
			<div id="topbar_content">
				<div id="logobar">
					<img src="images/logo.png" />
				</div>
				
				<div id="logobar_content">
				</div>
			</div>
		</div>
		</div>
		<div id="sticky_navigation_wrapper">
		<div id="sticky_navigation">
			<div id="menubar">
				<div id="menubar_content">
					<div class="menu">
						<a href="index.htm">Home</a>
					</div>
					<div class="menu">
						<a href="about.htm">About Us</a>
					</div>
					<div class="menu">
						Catering &amp; Custom Orders
					</div>
					<div class="menu">
						<a href="flavor.htm">Flavors</a>
					</div>
					<div class="menu">
						<a href="gallery.htm">Photo Gallery</a>
					</div>
					<div class="menu">
						<a href="contact.htm">Contact Us</a>
					</div>
				</div>
			
			</div>
		</div>
		</div>
</div>
		<div id="container" style="background:url(images/bg_main.png) repeat; height:auto;">
		  <div id="container_content" style="height:540px;">
					<div id="left_container" style="width:630px; height:42; margin-bottom:20px;">
						<div style="width:490px; height:42px;; border:1px solid #C5C5C5; float:left; margin-left:20px; margin-top:10px; border-top-left-radius:7px; -moz-border-top-left-radius:7px; border-top-right-radius:7px; -moz-border-top-right-radius:7px;">	
									
						<div style="width:470px; height:20px; float:left; padding:10px; background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#efefef), to(#ffffff));  background: -webkit-linear-gradient(top, #efefef, #ffffff);  background: -moz-linear-gradient(top, #efefef, #ffffff);  background: -ms-linear-gradient(top, #efefef, #ffffff);   border-top-left-radius:7px; -moz-border-top-left-radius:7px; border-top-right-radius:7px; -moz-border-top-right-radius:7px;">
							<table width="100%" style="font-family: 'Lobster13Regular'; font-size:16px; color:#9D0000;">
								<tr>
								<?php
								if($mail)
								{
								?>
									<td>Thank You For Shopping With Us.</td>
								<?php
								}
								else
								{
								?>
								<td>Some Error In Sending mail.</td>
								<?php
								}
								?>	
								</tr>
							</table>
						</div>
						
							</div>
			  </div>
			  
			  
			  			
			  </div>
			  
			  
			  
			</div>
		</div>
		
		<div id="mainbar">
				<div id="mainbar_content">
					<div style="width:250px; height:290px; float:left;   position:absolute; margin-top:-20px;">
						<div class="producttopbar1">
						</div>
						<div style="width:230px; height:246px; float:left; border-left:10px solid #FFFFFF; border-right:10px solid #FFFFFF; background:#FFFFFF;  ">
							<div style="width:230px; height:246px; float:left; background:#999999; border-radius:10px; -moz-border-radius:10px; ">
							</div>
						</div>
						<div class="productbottombar1">
						</div>
					</div>
					
					<div style="width:340px; height:230px; float:left; margin-left:280px; margin-top:10px; background:#FFFFFF;">
							<iframe width="340" height="230" src="http://www.youtube.com/embed/z9kyqXvyCUI" frameborder="0" allowfullscreen></iframe>
					</div>
					
					<div style="width:300px; height:230px; float:left; margin-left:30px; margin-top:10px; ">
						<div class="producttopbar2">
						</div>
						<div style="width:300px; height:175px; float:left; background:#FFFFFF;">
							<div style="width:300px;  float:left; background:#999999; font-family: 'shit_happens_cursive'; font-size:38px; color:#800000; text-align:center;">
								Today's Flavor
							</div>
							<div class="links" style="margin-top:5px;">
								Vanilla
							</div>
							<div class="links">
								Strawberry
							</div>
							<div class="links">
								Chocolate
							</div>
							<div class="links">
								Vanilla
							</div>
							
						</div>
						<div class="productbottombar2">
						</div>
					</div>
				</div>
		</div>
		
		<div id="footer">
			<div id="footer_content">

			</div>
		</div>
		
</body>
</html>
<?php */?>