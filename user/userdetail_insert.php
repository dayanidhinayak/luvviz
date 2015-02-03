<?php
if(isset($_POST['radio'])){
include_once("function.php");

$billid=$_SESSION['billid'];
//echo $_SESSION['user_id'];
if($_POST['emailid']!='')
{
$email=$_POST['email'];
//echo $email."asas";
}
else
{
$email=$_SESSION['id'];
//echo $email."else";
}
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
$country=$_POST['country'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dadte=$_POST['ddate'];
$first_name1=$_POST['fname1'];
$last_name1=$_POST['lname1'];
$address1=$_POST['address1'];
$city1=$_POST['city1'];
$state1=$_POST['state1'];
$pin1=$_POST['pin1'];
$country1=$_POST['country1'];
$phone1=$_POST['phone1'];
$pincode=$_POST['pincode'];
$subj="Thank You";
//echo $first_name; 
//echo $first_name1;
//echo $phone1;
$message="Thank you for Shopping with us.
Our Customer care executive shall get in touch with you soon.


Thank You
Team Luvviz...
";
mail($email,$subj,$message);
//if($pin){
//mysql_query("insert into `user_details` set `first_name`='$first_name',`deliverydate`='$dadte',`last_name`='$last_name',`email`='$email',`contact`='$contact',`city`='$city',`state`='$state',`pin`='$pin',`address`='$add'")or die(mysql_error());

mysql_query("insert into `order_details` set `id`='$billid',`user_id`='$email',`billing_name`='$first_name',`billing_phn`='$phone',`billing_country`='$country',`billing_sate`='$state',`billing_city`='$city',`billing_pin`='$pin',`billing_address`='$address',`shipping_name`='$first_name1',`shipping_cont`='$phone1',`shipping_country`='$country1',`shipping_state`='$state1',`shipping_city`='$city1',`shipping_pin`='$pin1',`shipping_address`='$address1',`status`='0'")or die(mysql_error());

/*echo "insert into `order_details` set `id`='$billid',

`user_id`='$email',

`billing_name`='$first_name',

`billing_phn`='$phone',

`billing_sate`='$state',

`billing_city`='$city',

`billing_pin`='$pin',

`billing_address`='$address',`shipping_name`='$first_name1',`shipping_cont`='$phone1',`shipping_state`='$state1',`shipping_city`='$city1',`shipping_pin`='$pin1',`shipping_address`='$address1',`status`='0'";*/
mysql_query("update `temp_billinfo` set `cart_status`='1' where `bill_id`='$billid'")or die(mysql_error());

unset($_SESSION['billid']);


//}
//elseif($pincode){
   /* mysql_query("insert into `order_details` set `id`='$billid',`user_id`='$email',`billing_name`='$first_name',`billing_phn`='$phone',`billing_country`='$country',`billing_sate`='$state',`billing_city`='$city',`billing_pin`='$pincode',`billing_address`='$address',`shipping_name`='$first_name1',`shipping_cont`='$phone1',`shipping_country`='$country1',`shipping_state`='$state1',`shipping_city`='$city1',`shipping_pin`='$pin1',`shipping_address`='$address1',`status`='0'")or die(mysql_error());

/*echo "insert into `order_details` set `id`='$billid',

`user_id`='$email',

`billing_name`='$first_name',

`billing_phn`='$phone',

`billing_sate`='$state',

`billing_city`='$city',

`billing_pin`='$pin',

`billing_address`='$address',`shipping_name`='$first_name1',`shipping_cont`='$phone1',`shipping_state`='$state1',`shipping_city`='$city1',`shipping_pin`='$pin1',`shipping_address`='$address1',`status`='0'";*/
//mysql_query("update `temp_billinfo` set `cart_status`='1' where `bill_id`='$billid'")or die(mysql_error());

//unset($_SESSION['billid']);

    
//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::LUVVIZ:::...</title>
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
<link href="style1.css" rel="stylesheet" type="text/css" />
<!--<meta http-equiv="refresh" content="100; URL=http://mapkart.com/cake/mapkart/index.php">-->
</head>
 <!--dropdown start-->
   <script src="jquery-latest.min.js" type="text/javascript"></script>
    

  <script type="text/javascript">
$(document).ready(function(){

$('#cssmenu > ul > li ul').each(function(index, e){
  var count = $(e).find('li').length;
  var content = '<span class="cnt">' + count + '</span>';
  $(e).closest('li').children('a').append(content);
});
$('#cssmenu ul ul li:odd').addClass('odd');
$('#cssmenu ul ul li:even').addClass('even');
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});

});

      </script>

<!--dropdown end-->

<body>
	
<?php
if(isset($_SESSION['id'])){
	

?>
<?php
include_once("menu4.php");?>
		<div id="menuu">
		    <?php //include_once("menubar.php");
				include_once("menu3.php");?>
		</div>

<?php
}
else{
?>
		<div id="menuu">
		    <?php //include_once("menubar.php");
				include_once("menu1.php");?>
		</div>
<?php
}
?>




<div id="contentbar" style="height:auto; min-height:400px; margin-top: 20px; margin-bottom:20px;">
  				<div id="contentbar_box" style="width:940px; height:auto; margin:auto; border-radius:8px; -moz-border-radius:8px; border:1px solid #cccccc; padding-top: 30px; padding-left: 20px; min-height:400px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#333333;  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#efefef), to(#ffffff)); /* Safari 5.1, Chrome 10+ */ background: -webkit-linear-gradient(top, #efefef, #ffffff); /* Firefox 3.6+ */ background: -moz-linear-gradient(top, #efefef, #ffffff); /* IE 10 */ background: -ms-linear-gradient(top, #efefef, #ffffff); /* Opera 11.10+ */ background: -o-linear-gradient(top, #efefef, #ffffff);">
					<div style="width:900px; height: auto; padding: 10px; float: left; line-height: 1.8; background: #ecfac0; border:1px solid #668238; color: #333;">
						<img src="images/tick.png" style="float: left; margin-right: 15px;">Dear <?php echo $first_name ?><br/>
				
					
				<span style="margin-left:50px;">Your order has been successfully processed!

You can view your order history by going to the My Account page and by clicking on History.

Please direct any questions you have to the store owner.

Thanks for shopping with us online!</span>
					</div>

<!--<div style="width:200px; height:auto; float:left; margin-top:20px;">
    <a href="billview.php?billid=<?php echo $billid;?>" style="text-decoration:none;">
    <input type="submit" name="submit" value="Creat bill" class="button"></a></div>-->
				</div>


</div>

<?php include_once('bottombar.php');
//include_once('scart_confirm.php');
?>

</body>
</html>
<?php
}
else{
    //$msg="select payment method";
    header("location:check1.php");
}
?>
