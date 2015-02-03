<?php 
ini_set("display_errors",1);
include_once("function.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
<title>Demo Template</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
		 
	<link rel="stylesheet" type="text/css" href="css1/style.css" />
	<link rel="stylesheet" type="text/css" href="css1/jquery.jscrollpane.css" media="all" />
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
<script>
function val(){
var fname1=document.getElementById('fname1').value;
document.getElementById('fname').value=fname1;

}
</script>	
 <script>

function view_third()

{

var fname=document.getElementById('fname').value;
var lname=document.getElementById('lname').value;
var area=document.getElementById('address').value;
var city=document.getElementById('city').value;
var state=document.getElementById('state').value;
var pin=document.getElementById('pin').value;
var country=document.getElementById('country').value;
var email=document.getElementById('email').value;
var phone=document.getElementById('phone').value;
	var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  


	if(fname==""){

		alert("Please Enter Your First Name");

		return false;

	}

	else if(lname==""){

		alert("Please Enter Your Last Name");

		return false;

	}

	

	else if(area==""){

		alert("Please Enter Your Address");

		return false;

	}

	else if(city==""){

		alert("Please Enter Your City");

		return false;

	}

	else if(state==""){

		alert("Please select a State");

		return false;

	}
	else if(pin==""){

		alert("Please Enter Your Pincode");

		return false;

	}
	else if(country==""){

		alert("Please enter countryname");

		return false;

	}
	else if(email==""){

		alert("Please Enter Your Emailaddress");

		return false;

	}
	else if(!email.match(format))

	{
	alert("You have entered an wrong email address!"); 

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
</head>
<body>
<div id="menuu" >
		       <?php
				include_once("menu1.php");
			?>
</div>
								<!---------------------------top bar end---------------------->	
								
								<!---------------------------billing bar---------------------->
								<div id="content" style="margin-top:50px; margin-bottom:50px;">
										<div id="content-left" style="width:850px; margin-left:15px; float:none; margin:auto; ">
												<div id="billing-head">
														<h1 class="head2" style="float:left; margin-top:5px; margin-bottom:5px; font-weight:normal;">
																Secure Checkout
														</h1>
														<p class="smalltextbox" style="float:right; width:450px;  margin-top:10px;	 font-size:11px; text-align:right; text-decoration:none; font-size:12px;">
																Need Help ? Mail us on support@ekmatra.com or call +91 8882088442
														</p>
												</div>
												<div class="billing-content">
														<div class="checkout" style="width:55%;">
																<h3 class="head1" style="text-transform:capitalize; text-decoration:underline; color:#333; font-weight:normal;">
																		Billing Address
																</h3>
<form action="userdetail_insert.php" method="post">
																<table class="table2" height="400">
																		<tr>
																				<td>First Name *<br /><input type="text" name="fname" id="fname" class="form2" /></td>
																				<td>Last Name *<br /><input type="text" name="lname"  id="lname" class="form2"  /></td>
																		</tr>
																		<tr>
																				<td colspan="2">First Name *<br /><textarea class="form2" style="height:80px; width:83%;" name="address" id="address"></textarea></td>
																		</tr>
																		<tr>
																				<td colspan="2">Town / City  *<br /><input type="text" name="city"  id="city" class="form2" style="width:83%;"  /></td>					
																		</tr>
																		<tr>
																				<td>State  *<br /><select class="form2" style=" height:22px;" name="state"  id="state">
																						<option>Select</option>
																				</select></td>
																				<td>Postcode / Zip *<br /><input type="text" name="pin"  id="pin" class="form2"  /></td>
																		</tr>
																		<tr>
																				<td colspan="2">Country *<br /><input type="text" name="country"  id="country" class="form2" style="width:83%;"  /></td>					
																		</tr>
																		<tr>
																				<td>Email Address *<br /><input type="text" name="email"  id="email" class="form2"  /></td>
																				<td>Phone *<br /><input type="text" name="phone" id="phone" class="form2" onkeypress="numbersonly();" /></td>
																		</tr>
 <tr>
                      <td ></td>
                      <td>
					  <input type="submit" name="submit" id="submit"  value="ordernow" onclick="return view_third();" />
					  
		     </td>
                    </tr>
																		
																</table>
</form>
														</div>
														<div class="checkout" style="width:42%;">
																<table class="table2" height="280">
																		<tr>
																				<td class="head1" style="text-transform:capitalize; text-decoration:underline; color:#333;">
																				Shipping Address
																				</td>
																				<td><input type="checkbox" onclick="return val();" />Ship to billing address?</td>
																		</tr>
																		<tr>
																				<td colspan="2" align="center";>Your order will be shipped to your billing address.</td>					
																		</tr>
																		<tr>
																				<td class="head1" style="text-transform:capitalize; text-decoration:underline; color:#333; font-size:16px;" onclick="return validate();">
																				Order Notes
																				</td>
																				<td></td>
																		</tr>
																		<tr>
																				<td colspan="2">First Name *<br /><textarea class="form2" style="height:60px; width:88%;" name="fname1" id="fname1"></textarea></td>
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
																		<tr>
																				<td width="220"><img src="images/img15.jpg"  /></td>
																				<td width="280">
																					<p class="text" style="margin-top:0px; margin-bottom:8px; line-height:1.8;">
																							Edhatu Black Cotton Nehru Jacket 	
																							<br />
																							<span style="font-size:12px; color:#414141;">SKU : GNJ023 blk</span>
																							<br />
																							<span style=" color:#414141; font-size:15px;">Size: 46</span>
																					</p>
																				</td>
																				<td width="220" align="center">1</td>
																				<td width="220" align="center">INR 1,499</td>
																		</tr>
																</table>	
														</div>
												</div>
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
