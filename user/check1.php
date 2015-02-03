<?php 
ini_set("display_errors",1);
include_once("function.php");
$email=$_POST['emailid'];
//echo $email;
$guestemail=$_GET['email'];
//echo $guestemail;
//$mess=$_GET['msg'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
<title>...:::LUVVIZ:::...</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
		 
	<link rel="stylesheet" type="text/css" href="css1/style.css" />
	<link rel="stylesheet" type="text/css" href="css1/jquery.jscrollpane.css" media="all" />

<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script>
function validate()
{
var fname1=document.getElementById('fname1').value;
if(fname1==""){

		alert("Please Enter Your First Name");

		return false;

	}

}
</script>
<!--<script>
function val(){
//var fname=document.getElementById('fname').value;
//document.getElementById('fname1').value=fname;
//document.getElementById('lname1').value=document.getElementById('lname').value;
//document.getElementById('address1').value=document.getElementById('address').value;
//document.getElementById('city1').value=document.getElementById('city').value;
//if (document.getElementById('pincode').value=="") {
	
//document.getElementById('pin1').value=document.getElementById('pin').value;
//}
//else{
//document.getElementById('email1').value=document.getElementById('email').value;
//document.getElementById('ord').style.display ="block";
//document.getElementById('pin1').value=document.getElementById('pincode').value;
//}
//document.getElementById('pin1').value=document.getElementById('pin').value;
//document.getElementById('phone1').value=document.getElementById('phone').value;
}

</script>-->
 <script>

function view_third()

{
var fname=document.getElementById('fname').value;
//var lname=document.getElementById('lname').value;
var area=document.getElementById('address').value;
var city=document.getElementById('city').value;
//var state=document.getElementById('state');
var pinn=document.getElementById('pin').value;
//var country=document.getElementById('country').value;
//var email=document.getElementById('email').value;
var phone=document.getElementById('phone').value;
var fname1=document.getElementById('fname1').value;
var address1=document.getElementById('address1').value;
var city1=document.getElementById('city1').value;
var pin1=document.getElementById('pin1').value;
var phone1=document.getElementById('phone1').value;
	var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
//var state1 = state.options[state.selectedIndex].value;
if(fname==""){

		alert("Please Enter Your First Name of Billingaddress");

		return false;

	}

	//else if(lname==""){

		//alert("Please Enter Your Last Name");

		//return false;

	//}

	

	else if(area==""){

		alert("Please Enter Your Address of Billingaddress");

		return false;

	}

	else if(city==""){

		alert("Please Enter Your  City of Billingaddress");

		return false;

	}
	else if(pinn==""){

		alert("Please Enter Your postcode of Billingaddress");

		return false;

	}
	else if(pinn.length<6){

		alert("Please Enter Correct Areacode of postcode of Billingaddress");

		return false;

	}
		else if(pinn.length>6){

		alert("Provide Proper Pin-Code of Billingaddress");

		return false;

	}
	else if(phone==""){

		alert("Please Enter Your Phonenumber of Billingaddress");

		return false;

	}
	else if(phone.length<10){

		alert("Please Enter 10 digit phonenumber of Billingaddress");

		return false;

	}
	else if(phone.length>10){

		alert("Please Enter 10 digit phonenumber of Billingaddress");

		return false;

	}
if(document.getElementById('pChk').checked == true){
var fname=document.getElementById('fname').value;
document.getElementById('fname1').value=fname;
document.getElementById('lname1').value=document.getElementById('lname').value;
document.getElementById('address1').value=document.getElementById('address').value;
document.getElementById('city1').value=document.getElementById('city').value;
document.getElementById('pin1').value=document.getElementById('pin').value;
document.getElementById('phone1').value=document.getElementById('phone').value;
}
else{
var fname1=document.getElementById('fname1').value;
var address1=document.getElementById('address1').value;
var city1=document.getElementById('city1').value;
var pin1=document.getElementById('pin1').value;
var phone1=document.getElementById('phone1').value;
 if(fname1==""){

		alert("Please Enter Your firstname of Shippingaddress");

		return false;

	}
	else if(address1==""){

		alert("Please Enter Your Address of Shippingaddress");

		return false;

	}

	else if(city1==""){

		alert("Please Enter Your City of Shippingaddress");

		return false;

	}
	else if(pin1==""){

		alert("Please Enter Your postcode of Shippingaddress");

		return false;

	}
	else if(pin1.length<6){

		alert("Please Enter correct areacode of postcode of Shippingaddress");

		return false;

	}
		else if(pin1.length>6){

		alert("Provide Proper Pin-Code of Shippingaddress");

		return false;

	}
	else if(phone1==""){

		alert("Please Enter Your phonenumber of Shippingaddress");

		return false;

	}
	else if(phone1.length<10){

		alert("Please Enter 10 digit phonenumber of Shippingaddress");

		return false;

	}
		else if(phone1.length>10){

		alert("Please Enter 10 digit phonenumber of Shippingaddress");

		return false;

	}
}
}


</script>
<script  type='text/javascript'>

function numberonly()

{

	var postcode=document.getElementById('pin1').value;

	if(isNaN(postcode)|| postcode.indexOf(" ")!=-1)

	{

              			alert("Enter numeric value");

			return false;

                }

	 if (postcode.length > 10)

			{

                			alert("enter 10 characters"); 

				return false;

          			 }



}

</script>
<script  type='text/javascript'>

function numbersonly()

{

	var x=document.getElementById('phone').value;

	if(isNaN(x)|| x.indexOf(" ")!=-1)

	{

              			alert("Enter numeric value");

			return false;

                }

	 if (x.length > 10)

			{

                			alert("enter 10 characters"); 

				return false;

          			 }



}

</script>
<script  type='text/javascript'>

function numberval()

{

	var postcode=document.getElementById('phone1').value;

	if(isNaN(postcode)|| postcode.indexOf(" ")!=-1)

	{

              			alert("Enter numeric value");

			return false;

                }

	 if (postcode.length > 10)

			{

                			alert("enter 10 characters"); 

				return false;

          			 }



}

</script>
<script>
$(function(){
$("#tb").hide();
$("#ord").show();
$('#pChk').click(function() {
   // if( $(this).is(':checked')) {
	if($('#pChk').attr('checked', false)){;
         $("#tb").show();
		//$("#ord").show();
		$("#ord").hide();
    } //else {
       //alert("hggg");
	   
	//$("#tb").slideDown();
	//$("#ord").hide();
	
    //}
	
	
});
}); 
</script>
<!--<script>
$(document).ready(function() {
//$("#pcd").hide();
if($('#pcd').is(":visible") ) {
$('#pcd').hide();
}
if($('#spn').click()) {
         $('#pcd').show();
		 }
		 else{
		  $('#pcd').hide();
		 }
});
</script>-->
<script  type='text/javascript'>

function onlynumber()

{

	var pincodes=document.getElementById('pin').value;

	if(isNaN(pincodes)|| pincodes.indexOf(" ")!=-1)

	{

              			alert("Enter numeric value");

			return false;

                }

	 if (pincodes.length > 6)

			{

                			alert("enter 6 characters"); 

				return false;

          			 }



}

</script>
	
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
	<!-- pop up-->
 			<link rel="stylesheet" href="css/reveal.css">	
			<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
			<script type="text/javascript" src="js/jquery.reveal.js"></script>  
	<!--pop up end --> 
	<style>
	/*	--------------------------------------------------
	Reveal Modals
	-------------------------------------------------- */
		
	.reveal-modal1-bg { 
		position: fixed; 
		height: 100%;
		width: 100%;
		background: #000;
		background: rgba(0,0,0,.8);
		z-index: 100;
		display: none;
		top: 0;
		left: 0; 
		}
	
	.reveal-modal1 {
		visibility: hidden;
		top: 100px; 
		left: 50%;
		margin-left: -300px;
		width: 520px;
		background: #eee url(modal-gloss.png) no-repeat -200px -80px;
		position: absolute;
		z-index: 101;
		padding: 30px 40px 34px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		border-radius: 5px;
		-moz-box-shadow: 0 0 10px rgba(0,0,0,.4);
		-webkit-box-shadow: 0 0 10px rgba(0,0,0,.4);
		-box-shadow: 0 0 10px rgba(0,0,0,.4);
		}
		
	.reveal-modal1.small 		{ width: 200px; margin-left: -140px;}
	.reveal-modal1.medium 		{ width: 400px; margin-left: -240px;}
	.reveal-modal1.large 		{ width: 600px; margin-left: -340px;}
	.reveal-modal1.xlarge 		{ width: 800px; margin-left: -440px;}
	
	.reveal-modal1 .close-reveal-modal {
		font-size: 22px;
		line-height: .5;
		position: absolute;
		top: 8px;
		right: 11px;
		color: #aaa;
		text-shadow: 0 -1px 1px rbga(0,0,0,.6);
		font-weight: bold;
		cursor: pointer;
		} 
	/*
		
	NOTES
	
	Close button entity is &#215;
	
	Example markup
	
	<div id="myModal" class="reveal-modal">
		<h2>Awesome. I have it.</h2>
		<p class="lead">Your couch.  I it's mine.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices aliquet placerat. Duis pulvinar orci et nisi euismod vitae tempus lorem consectetur. Duis at magna quis turpis mattis venenatis eget id diam. </p>
		<a class="close-reveal-modal">&#215;</a>
	</div>
	
	*/

	</style>
</head>
<body>
<?php
//echo $mess;
if(isset($_SESSION['id'])){
	

?>

<?php //include_once("menubar.php");
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
								<!---------------------------top bar end---------------------->	
								
								<!---------------------------billing bar---------------------->
								<div id="content" style="margin-top:50px; margin-bottom:50px;">
										<div id="content-left" style="width:850px; margin-left:15px; float:none; margin:auto; ">
												<div id="billing-head">
														<h1 class="head2" style="float:left; margin-top:5px; margin-bottom:5px; font-weight:normal;">
																Secure Checkout
														</h1>
														<p class="smalltextbox" style="float:right; width:450px;  margin-top:10px;	 font-size:11px; text-align:right; text-decoration:none; font-size:12px;">
																Need Help ? Mail us on contact@luvviz.com or call +91 9778003030 
														</p>
												</div>
												<div class="billing-content">
														<div class="checkout" style="width:55%;">
																<h3 class="head1" style="text-transform:capitalize; text-decoration:underline; color:#333; font-weight:normal;">
																		Billing Address
																</h3>
<form action="userdetail_insert.php" method="post">
																<table class="table2" style="height:400px; width:450px; ">
																		<tr>
																				<td width="180">First Name *<br /><input type="text" name="fname" id="fname" class="form2" style="width:160px;" /></td>
																		  		<td width="220">Last Name *<br />
																			    <input type="text" name="lname"  id="lname" class="form2" style="width:167px;"  /></td>
																		</tr>
																		<tr>
																				<td colspan="2">Address *<br /><textarea class="form2" style="height:80px; width:350px;" name="address" id="address"></textarea></td>
																		</tr>
																		<tr>
																				<td colspan="2">Town / City  *<br /><input type="text" name="city"  id="city" class="form2" style="width:350px;"  /></td>					
																		</tr>
																		<tr>
																			<td>State  *<br />
																				<input class="form2" style=" height:22px; width:160px;" name="state"  id="state" value="odisha" readonly="true"/>																			</td>
																				<td>Postcode / Zip *<br />
																				<input type="text" name="pin"  id="pin" class="form2" onkeypress="onlynumber();" style="width:167px;"/>
																				<!--<select class="form2" name="pin"  id="pin" class="form2" style=" height:22px;" onchange="return getpin(this.value);">
																					<option value="0">select</option>
																					<option value="751001">751001</option>
																					<option value="751002">751002</option>
																					<option value="751003">751003</option>
																					<option value="751004">751004</option>
																					<option value="751005">751005</option>
																					<option value="751006">751006</option>
																					<option value="751007">751007</option>
																					<option value="751008">751008</option>
																					<option value="751009">751009</option>
																					<option value="751010">751010</option>
																					<option value="751011">751011</option>
																					<option value="751012">751012</option>
																					<option value="751013">751013</option>
																					<option value="751014">751014</option>
																					<option value="751015">751015</option>
																					<option value="751016">751016</option>
																					<option value="751017">751017</option>
																					<option value="751018">751018</option>
																					<option value="751019">751019</option>
																					<option value="751020">751020</option>
																					<option value="751021">751021</option>
																					<option value="751022">751022</option>
																					<option value="751023">751023</option>
																					<option value="751024">751024</option>
																					<option value="751030">751030</option>
																					<option value="751031">751031</option>
																					<option value="1">Others</option>
																				
																				</select>-->																			</td>
																					<!--<input type="text" name="pincode" id="pincode" style="border:1px solid #000; margin-top:5px;" placeholder="provide your pincode" onkeypress="onlynumber();"/>-->
																				<!--<input type="text" name="pin"  id="pin" class="form2" onkeypress="numberonly();"/>-->
																		</tr>
																		<tr>
																			<td style="font-size:12px; font-weight:bold;" width="180">
																			# Product delivery only <br /> &nbsp; &nbsp; in Bhubaneswar.																			</td>
																			<td width="220">
																				<a href="#" class="big-link" data-reveal-id="myModal" data-animation="none" style="color:#000;">
																					know more																				</a>
																				<div id="myModal" class="reveal-modal" style="width:400px; left:45%;">
																					<img src="images/pin.jpg" style="width:95%; height:auto;"/>
																					<a class="close-reveal-modal" style="width:30px !important; height:30px !important;">&#215;</a>																		</div>																		</td>
																		</tr>
																		<tr>
																				<td colspan="2">Country *<br /><input type="text" name="country"  id="country" class="form2" value="India" readonly="true" style="width:85%;"  /></td>					
																		</tr>
																		<tr>
																		
																				<td>Email Address *<br />
																				<?php
																				if(isset($_GET['email'])){
																				?>
																				<input type="text" name="email"  id="email" class="form2" value="<?php echo $guestemail;?>" readonly="true" style="width:160px;" />
																				<?php
																				}
																				else{
																				?>
																				<input type="text" name="email"  id="email" class="form2" value="<?php echo $_SESSION['id']?>" readonly="true" style="width:160px;" />
																				<?php
																				}
																				?>																				</td>
																				<td>Phone *<br />+91<input type="text" name="phone" id="phone" class="form2" onkeypress="numbersonly();" style="width:140px;" /></td>
																				<td></td>
																		</tr>
 <!--<tr>
                      <td ></td>
                      <td>
					  <input type="submit" name="submit" id="submit"  value="ordernow" onclick="return view_third();" />
					  
		     </td>
                    </tr>-->
																</table>

														</div>
														<div class="checkout" style="width:42%;">
																<table class="table2" style="height:50px;">
																		<tr>
																				<td class="head1" style="text-transform:capitalize; text-decoration:underline; color:#333;">
																				Shipping Address
																				</td>
																				<td><input type="checkbox"  id="pChk" onclick="return val();" checked="checked"/>Ship to billing address?</td>
																		</tr>
</table>

</div>
<div class="checkout" style="width:42%; background:#ededed;font-family:arial; font-size:13px; padding:10px;" id="ord">
<table>																		<tr>
																				<td colspan="2" align="center";>Your order will be shipped to your billing address.</td>					
																		</tr>
</table>
</div>
<div class="checkout" style="width:42%;" id="tb">
<!--shipping address start-->
<table class="table2" style="height:405px;">
																		<tr>
																				<td>First Name *<br /><input type="text" name="fname1" id="fname1" class="form2" /></td>
																				<td>Last Name *<br /><input type="text" name="lname1"  id="lname1" class="form2"  /></td>
																		</tr>
																		<tr>
																				<td colspan="2">Address *<br/><textarea class="form2" style="height:80px; width:95%;" name="address1" id="address1"></textarea></td>
																		</tr>
																		<tr>
																				<td colspan="2">Town / City  *<br /><input type="text" name="city1"  id="city1" class="form2" style="width:95%;"  /></td>					
																		</tr>
																		<tr>
																				<td>State  *<br />
																				<!--<select class="form2" style=" height:22px;" name="state1"  id="state1">
																						<option value="0">Select</option>
																						<option value="1">odisha</option>
																						<option value="2">bhadrak</option>
																				</select>-->
																				<input class="form2" style=" height:22px;" name="state"  id="state" value="odisha" readonly="true"/>
																				</td>
																				<td>Postcode / Zip *<br />
																				<input type="text" name="pin1"  id="pin1" class="form2" onkeypress="numberonly();"/>
																				
																				</td>
																		</tr>
																		<tr>
																			<td style="font-size:12px; font-weight:bold; color:#fff;" width="180">
																			# Product delivery only <br /> &nbsp; &nbsp; in Bhubaneswar.																			</td>
																			<td width="220" style="color:#fff;">
																				<a href="#" class="big-link" data-reveal-id="myModal" data-animation="none" style="color:#fff;">
																					know more																				</a>
																				<div id="myModal" class="reveal-modal" style="width:400px; left:45%;">
																					<img src="images/pin.jpg" style="width:95%; height:auto;"/>
																					<a class="close-reveal-modal" style="width:30px !important; height:30px !important;">&#215;</a>																		</div>																		</td>
																		</tr>
																		<tr>
																				<td colspan="2">Country *<br /><input type="text" name="country1"  id="country1" class="form2" value="India" readonly="true" style="width:95%;"  /></td>					
																		</tr>
																		<tr>
																				<!--<td>Email Address *<br /><input type="text" name="email1"  id="email1" class="form2"  /></td>-->
																				<td colspan="2">Phone *<br />+91<input type="text" name="phone1"  id="phone1" class="form2" onkeypress="numberval();" /></td>
																		</tr>
 <!--<tr>
                      <td ></td>
                      <td>
					  <input type="submit" name="submit" id="submit"  value="ordernow" onclick="return view_third();" />
					  
		     </td>
                    </tr>-->
																		
</table>
<!--shipping address end-->
</div>
<div class="checkout" style="width:42%;">
<table class="table2">																		<tr>
																				<td class="head1" style="text-transform:capitalize; text-decoration:underline; color:#333; font-size:16px;">
																				Order Notes
																				</td>
																				<td></td>
																		</tr>
																		<tr>
																				<td colspan="2"><br /><textarea class="form2" style="height:60px; width:88%;" name="fname2" id="fname2"></textarea></td>
																		</tr>

		</table>
	  </div>
												</div>
												<div class="billing-content" style="border-bottom:1px solid #2073b2;">
														<h3 class="head1" style="text-transform:capitalize; text-decoration:underline; color:#333; font-weight:normal;" >
																		Review Your order
														</h3>
														<div style="width:100%;height:auto; float:left; border:1px solid #2073b2;">
																<table class="table2" style="font-size:15px; text-transform:uppercase;">
																		<tr>
																				<td width="220">Product</td>
																				<td width="280"></td>
																				<td width="220" align="center">Quantity</td>
																				<td width="220" align="center">Total</td>
																		</tr>
																</table>	
														</div>
														<div style="width:100%;height:auto; float:left;">
																<table class="table2" height="150" style="font-size:15px;">
<?php 

									$xsum=0;
									$tax=0;
									$xq_bill=mysql_query("select  p.*,t.`description`,t.`tot_price`,t.`quantity` from `temp_billinfo` t,`product` p where t.`bill_id`='$_SESSION[billid]' and p.`id`=t.`product_id`");	
while($xr_bill=mysql_fetch_array($xq_bill))
{
	 $xsum+=$xr_bill['tot_price'];
	  $tax+=$xr_bill['tot_price']*($xr_bill['tax_value']/100);
$final_value=$xsum+$tax;
									
									?>																			<tr>
																				<td width="220"><img src="../admin_new/inventory_management/<?php echo $xr_bill['image'];?>" style="width:60px; height:auto; max-height:70px;" alt="<?php echo $xr_bill['alternate_val'] ?>" /></td>
																				<td width="280">
																					<p class="text" style="margin-top:0px; margin-bottom:8px; line-height:1.8;">
																							<?php echo $xr_bill['product_name'];?>	
																							<br />
																							<!--<span style="font-size:12px; color:#414141;">SKU :<?php echo  $xr_bill['barcodeno']?></span>-->
																							<br />
<?php 
if($xr_bill['description']==""){
}
else{
?>
<span style=" color:#414141; font-size:15px;">Size:
<?php
echo $xr_bill['description'];
}
?>
</span>																					</p>
																				</td>
<td width="220" align="center"><?php echo $xr_bill['quantity'];?></td>
<td width="220" align="center">INR 

<?php
echo $xr_bill['tot_price'];

?>
<!--<?php
 echo $final_value;
$_SESSION['finalamt']=$final_value;
?>-->
</td>
																		</tr>
<?php 
} 
											
?>																</table>	

														</div>


												</div>
<div style="width:100%; height:auto; float:left; border-bottom: 1px solid rgb(32, 115, 178);">

<table style="float:right; width:200px; height:50px; font-family:arial; margin-right:40px;">
<tr>
<td  style="text-align:center;">Subtotal</td>
<td >
<?php
if($final_value<349){
	echo "INR"." ".$final_value."&nbsp;"."+";
	?>
	</td>
	</tr>
	<tr>
	<td>
	<div class="size" style="font-family: 'Source Sans Pro',sans-serif; width:100px; font-size:14px; margin-top:4px; text-align:center;">
		  INR. 80 Shipping
	</div>
	</td>
	<td>
<div class="smalltextbox">
	<a href="#" class="big-link1" data-reveal-id="myModal1" data-animation="none" style="color:#000;">Details</a>
</div>
<div id="myModal1" class="reveal-modal1" style="width:400px; left:55%;">
<div style="width:400px; height:auto; float:left; font-size:23px; line-height:1.6">
Purchase more than INR <span style="color:#FA8E1F;">348</span> to get <span style="color:#FA8E1F; margin-right:5px;">FREE</span> shipping.
</div>
<a class="close-reveal-modal">&#215;</a>
</div>
<?php
}
else{
echo "INR"." ".$final_value;
}
?>
</td>
</tr>
</table>

</div>
<div style="width:100%; height:auto; float:left;">
<h3 class="head1" style="text-transform:capitalize; text-decoration:underline; color:#333; font-weight:normal; margin-bottom:0px;" >
																		Payment Method
		</h3>
<table style="width:200px; height:100px; font-family:arial;">
<tr>
<td><input type="radio" name="radio" checked="true"/></td>
<td>Cash on delivery</td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="order now" class="button" onclick="return view_third();"></td>
</tr>
</table>
</div>

</form>



										</div>
								        <!---------------------------billing bar nd---------------------->
                                </div>
						</div>
				</div>
		</div>
</div>
<!---------------------------footer bar---------------------->

		       <?php 
				include_once("bottombar.php");
		       ?>

<!---------------------------footer bar end---------------------->
</body>
</html>
