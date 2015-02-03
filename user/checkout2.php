<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::MAPKART:::...</title>
<link href="style.css" rel="stylesheet" type="text/css" />


<!-- Include JavaScript -->
        <script type="text/javascript" src="jquery_002.js"></script>
        <script type="text/javascript" src="jquery.js"></script>        
        
<script type="text/javascript" src="jquery-1.9.1.min.js" charset="utf-8"></script>
        <script type="text/javascript" src="script.js"></script>

        <!-- Include Google Analytics Code -->
        <script type="text/javascript">
		    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">	jQuery.noConflict();
            try {
		
                var pageTracker = _gat._getTracker("UA-16380505-1");
                pageTracker._trackPageview();
            }
            catch (err) {
            } 
        </script>

 <link href="admin_002.css" rel="stylesheet" type="text/css" media="all">

 <link rel="stylesheet" href="styles.css">
  
 
 <script src="tabcontent.js" type="text/javascript"></script>
 
 
<style>
  .topsmallbox1{
  height:40px; width:40px;
  float:left;
  margin-left:40px;
  
  }
  
  .smalltextbox1{
  height:30px;
  width:25px;
  float:left;
  font-family:Arial, Helvetica, sans-serif;
  color:#666666;
  font-size:11px;
  text-align:left;
  }
  
  .checkbox1{
  height:45px; 
  width:200px;
  text-align:center;
  font-family:Arial, Helvetica, sans-serif;
  float:left;
  font-weight:bold;
  font-size:14px;
  color:#666666;
 
  }
</style>
<script>
function view_second(){
var elem=document.getElementById('emailid').value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(elem==""){
		alert("Please Enter an email address");
		return false;
	}
	else if(elem.match(format))
	{
	//return true;
	
	document.getElementById("view1").style.display="none"
	document.getElementById("view2").style.display="block";
	}
	else  
	{  
	alert("You have entered an wrong email address!"); 
	return false;
	}
}

</script>
 <script>
function view_third()
{

var fname=document.getElementById('fname').value;

var lname=document.getElementById('lname').value;

var Input2=document.getElementById('Input2').value;

var sex=document.getElementById('sex').value;

var add=document.getElementById('add').value;

var area=document.getElementById('area').value;

var pin=document.getElementById('pin').value;

var city=document.getElementById('city').value;

var state=document.getElementById('state').value;
	
	if(fname==""){
		alert("Please Enter Your First Name");
		return false;
	}
	else if(lname==""){
		alert("Please Enter Your Last Name");
		return false;
	}
	else if(Input2==""){
		alert("Please Enter Your Phone Number");
		return false;
	}
	else if(sex==""){
		alert("Please Enter Your Gender");
		return false;
	}
	else if(add==""){
		alert("Please Enter Your Address");
		return false;
	}
	else if(pin==""){
		alert("Please Enter Your Pincode");
		return false;
	}
	else if(city==""){
		alert("Please Enter Your City");
		return false;
	}
	else if(state==""){
		alert("Please Enter Your State");
		return false;
	}
	else
	{
		document.getElementById("view1").style.display="none";
		document.getElementById("view2").style.display="none";
		document.getElementById("view3").style.display="block";
		
		document.getElementById('fname1').value=fname;
		document.getElementById('lname1').value=lname;
		document.getElementById('phone').value=Input2;
		document.getElementById('sex1').value=sex;
		document.getElementById('address').value=add;
		document.getElementById('landmark').value=area;
		document.getElementById('pin1').value=pin;
		document.getElementById('city1').value=city;
		document.getElementById('state1').value=state;

//
//if (window.XMLHttpRequest)
//
//  {
//  xmlhttp=new XMLHttpRequest();
//  }
//else
// {
// xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
// }
//xmlhttp.onreadystatechange=function()
// {
// if (xmlhttp.readyState==4 && xmlhttp.status==200)
// {
//var result=xmlhttp.responseText;
////window.location.reload();
//alert(result);
//	}
//}
//xmlhttp.open("GET","insert_userdetails.php?fname="+fname+"&lname="+lname+"&Input2="+Input2+"&sex="+sex+"&add="+add+"&area="+area+"&pin="+pin+"&city="+city+"&state="+state,true);
//
//xmlhttp.send();
//

}
}
//view_third();
</script>
<script  type='text/javascript'>
function numbersonly()
{
	var x=document.getElementById('Input2').value;
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
<div id="topbar"> 
			<div id="topbarbox">
			  <div id="logo"><img src="images/logo.jpg" /></div>
			  <div style="height:40px; width:680px; float:left; margin-top:40px; margin-left:50px;">
			  		<div class="topsmallbox1"><img src="images/checkout1.jpg" style="float:left; " /> </div>
					<div class="smalltextbox1">FREE SHIPPING</div>
					
					<div class="topsmallbox1"><img src="images/checkout2.jpg" style="float:left; " /> </div>
					<div class="smalltextbox1" style="margin-left:10px; width:60px;">CASH ON<br />
DELIVERY</div>
					
					<div class="topsmallbox1"><img src="images/checkout3.jpg" style="float:left; " /> </div>
					<div class="smalltextbox1" style="margin-left:10px;">30 DAYS
RETURNS</div>
					
					<div class="topsmallbox1"><img src="images/checkout5.jpg" style="float:left; " /> </div>
					<div class="smalltextbox1" style="margin-left:17px;">CUSTOMER CARE
0124-6128000</div>
					
					<div class="topsmallbox1" style="margin-left:60px;"><img src="images/shoppimgimg12.jpg" style="float:left; " /> </div>
				

			         
			  </div>
  </div>
</div>



<div id="contentbar" style="height:auto;">
  				<div id="contentbar_box" style="height:auto;">
							<div style="height:auto; width:640px; float:left; border:1px #CCCCCC solid;">
										<div style="height:45px; width:640px; float:left; background:#ededed;">
										
										 <ul class="tabs" persist="true" style="list-style:none; margin-top:0px; margin-left:0px;" >
													<li><div class="checkbox1" style="background:#FFFFFF;">
													<img src="images/checkoutimg1.jpg"
													 style="float:left;"  /><p style="margin-top:10px; color:#FF9900;"><span style="font-size:21px; ">1</span> Email or Login</p></div></li>
													 
													 <li><div class="checkbox1" style="width:170px;">
													<img src="images/checkoutimg2.jpg"
													 style="float:left;"  /><p style="margin-top:10px; color:#999999;"><span style="font-size:21px; ">1</span> Shipping Address</p></div></li>
										
										             <li><div class="checkbox1" style="width:170px;">
													<img src="images/checkoutimg3.jpg"
													 style="float:left;"  /><p style="margin-top:10px; color:#999999;"><span style="font-size:21px; ">1</span>Payment</p></div></li>
													
													 
													 <div><img src="images/checkoutimg4.jpg" style="float:left;" /></div>
													 </ul> 
										</div>
							       <div style="height:auto; width:500px; float:left; margin-left:20px; margin-top:20px;">
								   <div style=" height:auto; width:500px; float:left;">
								   
								 
       
           
           
            
       
        <div class="tabcontents">
            <div id="view1" class="tabcontent">
			        <div style="width: 500px; font: 0.85em arial;">
                <table width="438" border="0">
													  <tr>
														<td style="text-align:right;"><p>Enter your email address<br /> <span style="font-size:11px;">(Required)</span></p></td>
														<td><input type="text" name="emailid" id="emailid" style="width:140px;" /></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"><input type="radio" checked="checked"/></td>
														<td><p> Continue without password
														<br /> <span style="font-size:11px;">
														(No password or registration required)</span></p></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"><input type="radio" /></td>
														<td><p>  I have a mapcart account and password 
														<br /> <span style="font-size:11px;">
														(Sign in to your account for a faster checkout)</span></p></td>
													  </tr>
													  
													  <tr>
														<td style="text-align:right;"></td>
														<td class="botton1" style="height:12px; width:100px; font-weight:bold; color:#FFFFFF; font-size:14px; "onclick="return view_second(document.getElementById('emailid'));"  >Order Now <img src="images/shopping.png"/></td>
													  </tr>
									 </table>
               <!--   <a href="../../../../Documents and Settings/user/Desktop/jabong/insert_userdetails.php">insert_userdetails</a>--></div>
            </div>
            <div id="view2" class="tabcontent" style="display:none;">
                <div style=" height:auto; width:500px; float:left;">
								   <table width="413" border="0">
													  <tr>
														<td width="263" style="text-align:right;"><p>First Name *</p></td>
														<td width="140"><input type="text" name="fname" id="fname" style="width:140px;" /></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"><p>Last name *</p></td>
														<td><input type="text" name="lname" id="lname" style="width:140px;" /></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"><p>Phone*</p></td>
														<td>+91
													    <input type="text" name="Input2" id="Input2" style="width:114px;" onkeypress="numbersonly();" /></td>
													  </tr>
													   <tr>
														<td style="text-align:right;"><p>Gender *</p></td>
														<td><p><input type="radio" name="sex"  id="sex" value="0"/> Male<input type="radio" name="sex" value="1"/>Female</p></td>
													  </tr>
													  
													   <tr>
														<td style="text-align:right;"><p>Address *</p></td>
														<td><textarea cols="20" rows="3" name="add" id="add" ></textarea></td>
													  </tr>
													  
													  
													  <tr>
														<td style="text-align:right;"><p>Landmark </p></td>
														<td><input type="text" name="area" id="area"  /></td>
													  </tr>
													  
													  <tr>
														<td style="text-align:right;"><p>Pincode *</p></td>
														<td><input type="text" name="pin" id="pin" /></td>
													  </tr>
													  
													  <tr>
														<td style="text-align:right;"><p>City *</p></td>
														<td><input type="text" name="city" id="city"  /></td>
													  </tr>
													  
													   <tr>
														<td style="text-align:right;"><p>State/Region *</p></td>
														<td><input type="text" name="state"  id="state" /></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"><input type="checkbox" /></td>
														<td><p>Newsletter and Offers Signup</p></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"></td>
														<td class="botton1" style="height:12px; width:100px; font-weight:bold; color:#FFFFFF; font-size:14px; " onclick="return view_third();" >Order Now <img src="images/shopping.png"  /></td>
													  </tr>
									 </table>
			  </div>
            </div>
            <div id="view3" class="tabcontent" style="display:none;">
				<div class="box1" style="width:60%; margin-left:0px; border-bottom: 1px solid #CCCCCC;">
                <div id="v-nav">
                <ul>
					<li tab="tab_a" class="first current">Cash On Delivery</li>
                    <li tab="tab_b" >Credit card shopping</li>
                    <li tab="tab_c">Pay Using Visa</li>
                    
                </ul>
                
                
				
				
				
				<div  class="tab-content" style="display:block; width:370px; padding-left:0px; padding-top:0px; ">
                  
				<div style="height:250px; width:370px;  margin-top:0px; border:1px solid #CCCCCC;">
						<div style="height:70px; width:340px; margin-left:10px; float:left; border-bottom:1px solid#CCCCCC; ">
						<p>With our Cash On Delivery Option, you can pay directly to the courier. No advance payment required now
						</p>
						         <p>Amount Payable on Delivery<span style="font-weight:bold"> Rs. 2038 </span><span style="font-size:11px;">(including COD charges)</span><br />
								 Your contact number: +919853160032
<span style="font-size:11px;">(You will receive a call from our customer care to confirm the order)</span>
								 </p>
								 <div style="height:60px; width:100%; background:#FFFFCC; border:1px solid #FF9933; padding-left:5px;">
								 <p style="font-size:13px;"><span style="font-weight:bold; font-size:15px; ">Note:</span>
<span style="font-weight:bold; color:#00CC33;">Save Rs. 39</span> by paying through Credit/Debit Card or Net-Banking </p>

								 </div>
								 </div>
								
				         </div>
				 <div class="botton1" style=" float:left; margin-top:5px; color:#FFFFFF; font-weight:bold; margin-bottom:10px; ">Order Now <img src="images/shopping.png" style="margin-left:5px;"  /></div>
                </div>
                
				
				
				<div  class="tab-content" style="display:none; width:370px; height:370px; padding-left:0px; padding-top:0px;   " >
                     <div style="height:350px; width:350px; float:left; margin-top:0px; border:1px solid #CCCCCC; ">
						<div style="height:36px; width:350px; float:left; border-bottom:1px solid#CCCCCC; ">
						<p style="font-size:11px; margin-left:5px;">Pay using our Net Banking service.
						         </p>
						       <table width="100%" border="0">
									  <tr>
										<td><p style="font-weight:bold;">Choose your bank</p></td>
										<td><p style="font-size:11px;"><select style="width:90%; "><option>----Select----</option>
										<option>State Bank Of India</option>
										<option>Bank Of India</option>
										<option>Andhra bank</option>
										</select><br />
										You will be redirected to a secure payment gateway</p>
										</td>
									  </tr>
									  <tr>
										<td>&nbsp;</td>
										<td><div class="botton1" style=" height:20px; width:120px; float:left; color:#FFFFFF; font-weight:bold; margin-bottom:10px; ">Order Now <img src="images/shopping.png" style="margin-left:5px;"  /></div></td>
									  </tr>
									  
									</table>
									
									<p>Next steps
									<ul style="font-size:10px;">
									<li>After clicking on "Pay Now" button, you will be directed to a secure payment gateway</li>
									<li>Follow the payment steps as mentioned on the payment gateway.</li>
									<li>fter successful payment completion, you will be redirected back to Jabong.</li>
									<li>Save your order details for further communication.</li>
									</ul>
									</p>

								 </div>
								
				         </div>
					  
				   <div id="separation" style="width:100%; margin-left:0%; margin-bottom:20px;">
			        </div>
					 
                </div>
				
				
	            <div style="display:none; height:auto;  width:270px; border:1px solid #CCCCCC; " class="tab-content">
                  <div style="height:100px; width:250px; float:left; margin-left:10px;">
				       <div style="height:60px; width:250px; float:left; border-bottom:1px solid #CCCCCC; ">Pay using <img src="images/img10.jpg"  style=" margin-top:10px;  " /> <img src="images/img10.jpg" style=" margin-top:5px;" />(Only domestic cards accepted)
				       </div>
					    <div style="height:30px; width:250px; float:left; margin-top:5px; border-bottom:1px solid #CCCCCC; ">
						   <h3 style="margin-bottom:0px; margin-top:0px;">Billing Address <span style="margin-left:20px;"><input type="checkbox" /></span><span style="font-size:11px; font-weight:normal; ">Change billing details</span> </h3>
						</div>
				   
				  </div>
	              <div id="div" style="width:230px; margin-left:10px;"> </div>
	              <table width="213" border="0">
                    <tr>
                      <td width="263" style="text-align:right;"><p>First Name *</p></td>
                      <td width="140"><input type="text" name="fname1" id="fname1" style="width:140px;" /></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"><p>Last name *</p></td>
                      <td><input type="text" name="lname1"  id="lname1" style="width:140px;" /></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"><p>Phone*</p></td>
                      <td>+91
                        <input type="text" name="phone"   id="phone" style="width:114px;" /></td>
                    </tr>
                    <tr>

                      <td style="text-align:right;"><p>Gender *</p></td>
                      <td><p>
                        <input type="radio" name="sex1"  id="sex1" value="0"/>
                        Male
                        <input type="radio" name="sex1" id="sex1" value="1"/>
                        Female</p></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"><p>Address *</p></td>
                      <td><textarea name="address" id="address" cols="20" rows="3" ></textarea></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"><p>Landmark </p></td>
                      <td><input type="text" name="landmark" id="landmark"/></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"><p>Pincode *</p></td>
                      <td><input type="text" name="pin1"  id="pin1"/></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"><p>City *</p></td>
                      <td><input type="text" name="city1"  id="city1"/></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"><p>State/Region *</p></td>
                      <td><input type="text" name="state1"  id="state1"/></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"><input name="checkbox" type="checkbox" /></td>
                      <td><p>Newsletter and Offers Signup</p></td>
                    </tr>
                    <tr>
                      <td style="text-align:right;"></td>
                      <td class="botton1" style="height:12px; width:100px; font-weight:bold; color:#FFFFFF; font-size:14px; ">Order Now <img src="images/shopping.png"  /></td>
                    </tr>
                  </table>
	              </div>
                </div>
				</div>
            
			
			
			</div>
           
        </div>
        
    </div>
								   
		
								   </div>	
							 </div>
				          <div style="height:auto; width:280px; float:left; border:1px solid #CCCCCC; margin-left:20px;">
						    <h2 style="margin-top:4px; margin-left:4px; margin-bottom:0px;">Order Summary</h2>
										<div style="height:30px; width:265px; float:left; background:#eeeeee; margin-left:8px; margin-top:5px; "><p style="margin-top:5px; font-weight:bold; margin-left:3px;">Product  	
										<span style="margin-left:55px;">Qty</span>
										<span style="margin-left:10px;">Delivery</span>
										<span style="margin-left:10px;">Price</span>
										  </p>
					        </div>
											 
											 
											 <div class="content5smallbox" style="height:80px; width:90px; line-height:1.3; margin-top:0px; "><img src="images/shoppimgimg1.jpg"   /> <p style="font-weight:bold; font-size:11px; margin-top:0px;">Adidas<br />

Alcor M White Running Shoes  <br /><span style="font-weight:normal;">Size 6<br /> Color<br />
&nbsp; </span>
</p> 
											 </div>
											 
											 
						<div class="content5smallbox" style="height:80px; width:20px; line-height:1.3; margin-top:0px; "> 1</div>
						<div class="content5smallbox" style="height:80px; width:30px; line-height:1.3; margin-top:0px; margin-left:30px; "> 2-5
Business days</div>
                         <div class="content5smallbox" style="height:80px; width:40px; line-height:1.3; margin-top:0px; margin-left:30px; "> Rs. 1999</div>
						
						
						<div style="width:260px; height:70px; float:left;  text-align:right; margin-top:70px; 
						border-top: 1px #CCCCCC solid; margin-left:10px; ">
<p style="font-weight:bold; font-size:13px;">Subtotal &nbsp; &nbsp; &nbsp;Rs. 3998 </p>	
<p style="font-weight:bold; font-size:13px;">Shipping Charges 	
 &nbsp; &nbsp; &nbsp;<span style="font-weight:normal; color:#009966;">Free</span></p>	
<div style="height:30px; width:250px; background:#eeeeee;"><p style="font-weight:bold;">Total  	
&nbsp; &nbsp; &nbsp;Rs. 1999<br /><span style="font-weight:normal; font-size:10px;">VAT incl</span> </p>
</div>	

<div style="margin-top:10px; float:left;"><input type="text" name="" />
  <input name="button" type="button" value="Apply"/>
</div>
						</div>					 
						  </div>
						  
						  <div style="height:100px; width:960px; float:left;">
						  
						  			<div style="height:60px; width:960px; border-bottom:1px solid #CCCCCC; float:left;"><img src="images/checkout10.jpg" style="float:left;" /><img src="images/shoppimgimg12.jpg" style="float:right;" /></div>
									<div style="height:40px; width:960px; float:left;"><p style="font-size:11px; float:left;">Any questions? Let us help you.<br />
Contact Us:<span style="font-weight:bold;"> 0124-612800</span>


<div class="topmenu1" style="float:right;  margin-top:20px;">
Terms of Service</div>

<div class="topmenu1" style="float:right;  margin-top:20px;">Contact</div>
<div class="topmenu1" style="float:right;  margin-top:20px;">Help</div>
<div class="topmenu1" style="float:right;  margin-top:20px;">
Privacy</div>
<div class="topmenu1" style="float:right;  margin-top:20px;">About
</div>
                                    </div>
						  
						  <div style="height:40px; width:960px; float:left;"><p style="font-size:11px; float:right; margin-top:0px;">

Copyright © 2013 Jabong.com All Rights Reserved
</p></div>
						  </div>
				</div>
</div>



			  

</body>
</html>
