<?php 
ini_set("display_errors",1);
include_once("function.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::LUVVIZ:::...</title>
<link href="style1.css" rel="stylesheet" type="text/css" />


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

 <!--<link href="admin_002.css" rel="stylesheet" type="text/css" media="all">-->

 <!--<link rel="stylesheet" href="styles.css">-->
  
 
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

	table{
	border-collapse:collapse;
	}
	tr td{
	border-collapse:collapse;
	height:33px;
	}
	.textinput{
	width:200px;
	height:40px;
	border:none;
	}
	
	input[type="text"]{
	border:1px solid #CCCCCC;
	}
</style>
  <script>

function view_third()

{



var fname=document.getElementById('fname').value;



var lname=document.getElementById('lname').value;



var Input2=document.getElementById('Input2').value;



var sex=document.getElementById('sex1').value;



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
		
		document.getElementById('3rd').style.backgroundColor = "#FFFFFF";
	document.getElementById('1st').style.backgroundColor = "#ededed";
	document.getElementById('2nd').style.backgroundColor = "#ededed";
	document.getElementById('change2').style.color = "#999999";
	document.getElementById('change1').style.color = "#999999";
	document.getElementById('change3').style.color = "#FF9900";

		

		document.getElementById('fname1').value=fname;

		document.getElementById('lname1').value=lname;

		document.getElementById('phone').value=Input2;
if (document.getElementById('sex1').checked)
{
//alert(sex);
		document.getElementById('sexm').checked=true;
		}
		else
		{
		//alert(sex);
		document.getElementById('sexf').checked=true;
		}
		

		document.getElementById('address').value=add;

		document.getElementById('landmark').value=area;

		document.getElementById('pin1').value=pin;

		document.getElementById('city1').value=city;

		document.getElementById('state1').value=state;
		
		




}

}


</script>
<script>
$(document).ready(function() {
$('#checkedvalue').click(function() {


$(".read").each(function() {

$(this).removeAttr('readonly');
});
});
});
</script>
<script>
$(function(){
var tot=$('#price_1').html();
//alert(tot);
$('#credit').val(tot);
$('#visa').val(tot);

});
</script>
  <script>
  function validate_voucher()
  
  {
  var code=document.getElementById('voucher').value;
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
var result=xmlhttp.responseText;
//alert(result);
if(result=='This Coupon code is not valid')
{
alert(result);
document.getElementById("voucher").value="";
}
else
{
alert(result);
document.getElementById("discount").value=result;
var tot=document.getElementById("price_1").innerHTML;
//alert(tot);
var discount_value=tot*(result/100);
//alert(discount_value);
document.getElementById("dis_price").innerHTML=discount_value;
document.getElementById("disc_tr").style.display="block";
//alert(document.getElementById("dis_price").style.display="block");
var final_value=tot-discount_value;
//alert(final_value);
document.getElementById("tot_price_disc").innerHTML=final_value;
document.getElementById("tot_disc_tr").style.display="block";
}
	}

}	

	xmlhttp.open("GET","search_validity.php?q="+code,true);

xmlhttp.send();
  
  
  }
  
  </script>
  
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

	//alert("jjjjj");
	
      location.href="check1.php?email="+elem;

	}

	else  

	{  

	alert("You have entered an wrong email address!"); 

	return false;

	}

}



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
<script>
function loginpage()
{
$('#userdetail1').show();
$('#userdetail').hide();
$('#userdetail2').hide();

}
</script>
<script>
function loginpage1()
{
$('#userdetail').show();
$('#userdetail1').hide();
$('#userdetail2').hide();

}
</script>
<script>
function loginpage2()
{
$('#userdetail2').show();
$('#userdetail').hide();
$('#userdetail1').hide();

}
</script>
<script>
$(function(){
$('.buttonyellow').click(function(){
var nameval=$('#email').val();
var pass=$('#password').val();
$.ajax({url:"chklogin1.php?email="+nameval+"&pwd="+pass,
success:function(result){

if(result==1)
{
 
 //document.getElementById("view1").style.display="none";

	//document.getElementById("view2").style.display="block";
	
	//document.getElementById('2nd').style.backgroundColor = "#FFFFFF";
	//document.getElementById('1st').style.backgroundColor = "#ededed";
	//document.getElementById('3rd').style.backgroundColor = "#ededed";
	//document.getElementById('change2').style.color = "#FF9900";
	//document.getElementById('change1').style.color = "#999999";
	//document.getElementById('change3').style.color = "#999999";
  location.href="check1.php";
//alert("gggg");
  // view_third();
   }
   else if (result==0) {
	    alert("You have entered an wrong email address!");
	    //code
   }
  }
  });

});

});

</script>
<!--<script>
$(function(){
$('.button').click(function(){
var name=$('#emailid').val();
$.ajax({url:"login1.php?email="+name,
success:function(result){

if(result==1)
{
 
 //document.getElementById("view1").style.display="none";

	//document.getElementById("view2").style.display="block";
	
	//document.getElementById('2nd').style.backgroundColor = "#FFFFFF";
	//document.getElementById('1st').style.backgroundColor = "#ededed";
	//document.getElementById('3rd').style.backgroundColor = "#ededed";
	//document.getElementById('change2').style.color = "#FF9900";
	//document.getElementById('change1').style.color = "#999999";
	//document.getElementById('change3').style.color = "#999999";
  location.href="check1.php";
//alert("gggg");
  // view_third();
   }
   else if (result==0) {
	    alert("You have entered an wrong email address!");
	    //code
   }
  }
  });

});

});

</script>-->

<!--dropdown start-->
   <script src="jquery-latest.min.js" type="text/javascript"></script>
    
    <style>
        #cssmenu,
#cssmenu ul,
#cssmenu li,
#cssmenu a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  font-weight: normal;
  text-decoration: none;
  line-height: 1;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  position: relative;
}
#cssmenu a {
  line-height: 1.3;
}
#cssmenu {
  width: 270px;
}
#cssmenu > ul > li > a {
  padding-right: 40px;
  font-size: 25px;
  font-weight: bold;
  display: block;
  background: #bd0e36;
  background:#cdcdcd;
  color: #ffffff;
  border-bottom: 1px solid #5e071b;
  text-transform: uppercase;
  position: relative;
}
#cssmenu > ul > li > a > span {
  background: #ed1144;
  padding: 10px;
  display: block;
  font-size: 13px;
  font-weight: 300;
  background:#ededed;
}
#cssmenu > ul > li > a:hover {
  text-decoration: none;
}
#cssmenu > ul > li.active {
  border-bottom: none;
}
#cssmenu > ul > li.active > a {
  color: #fff;
}
#cssmenu > ul > li.active > a span {
  background: #bd0e36;
}
#cssmenu span.cnt {
  position: absolute;
  top: 8px;
  right: 15px;
  padding: 0;
  margin: 0;
  background: none;
  background:url(arw.jpg)no-repeat;
}
#cssmenu ul ul {
  display: none;
}
#cssmenu ul ul li {
  border: 1px solid #e0e0e0;
  border-top: 0;
}
#cssmenu ul ul a {
  padding: 10px;
  display: block;
  color: #ed1144;
  font-size: 13px;
}
#cssmenu ul ul a:hover {
  color: #bd0e36;
}
#cssmenu ul ul li.odd {
  background: #f4f4f4;
}
#cssmenu ul ul li.even {
  background: #fff;
}
    </style>
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
 
<script>

function validate(){

var elem=document.getElementById('email_id').value;
var first=document.getElementById('fname').value;
var last=document.getElementById('lname').value;
var pwd=document.getElementById('pswd').value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  

	if(elem==""){

		alert("Please Enter an email address");

		return false;

	}
	
else if(!elem.match(format))

	{
alert("You have entered an wrong email address!");

		return false;
	}
	else if(first==""){

		alert("Please Enter Your first Name");

		return false;

	}
	else if(last==""){

		alert("Please Enter Your Last Name");

		return false;

	}
	else if(pwd==""){

		alert("Please Enter Your Password");

		return false;

	}
	

}
  </script>

  
</head>

<body>

<?php
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
		<div id="menuu" >
		    <?php //include_once("menubar.php");
				include_once("menu1.php");?>
		</div>
<?php
}
?>



<div id="contentbar" style="width:100%; height:auto; float:left;">
  				<div id="contentbar_box" style="width:95%; margin:auto;">
				<div style="width:640px; margin:auto;">
							<div style="width:640px; border:1px #CCCCCC solid; float:left; height:auto; margin-top:15px; margin-bottom:15px;">
										<!--<div style="height:45px; width:640px; float:left; background:#ededed;">
										
										 <ul class="tabs" persist="true" style="list-style:none; margin-top:0px; margin-left:0px;" >
													<li><div class="checkbox1" style="background:#FFFFFF;" id="1st">
													<img src="images/checkoutimg1.jpg"
													 style="float:left;"  /><p style="margin-top:10px; color:#FF9900;" id="change1"><span style="font-size:21px; ">1</span> Email or Login</p></div></li>
													 
													 <li><div class="checkbox1" style="width:170px;" id="2nd">
													<img src="images/checkoutimg2.jpg"
													 style="float:left;"  /><p style="margin-top:10px; color:#999999;" id="change2"><span style="font-size:21px; ">2</span> Shipping Address</p></div></li>
										
										             <li><div class="checkbox1" style="width:170px;" id="3rd">
													<img src="images/checkoutimg3.jpg"
													 style="float:left;"  /><p style="margin-top:10px; color:#999999;" id="change3"><span style="font-size:21px; ">3</span>Payment</p></div></li>
													
													 
													 <div id="4th"><img src="images/checkoutimg4.jpg" style="float:left;" /></div>
										  </ul> 
										</div>-->
							       <div style="height:auto; width:500px; float:left; margin-left:20px; margin-top:20px;">
								   <div style=" height:auto; width:500px; float:left;">
								   
								 
       
           
           
            
       
        <div style="width:100%; height:auto; float:left;">
     
            <div style="width:95%; margin:auto;">
			        <div style="width: 500px; font: 0.85em arial;">
			        	
					
					<div id="userdetail">
                <table width="438" height="250" border="0" style="margin-bottom:20px; ">
													  <tr>
														<td style="text-align:right;"><p>Enter your email addrsess<br /> <span style="font-size:11px;">(Required)</span></p></td>
														<td><input type="text" name="emailid" id="emailid" style="width:150px; margin-left:20px; height:25px;" /></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"><input type="radio" name="type1" checked="checked" /></td>
														<td><p style="line-height:1.5;"> Continue as a guest
														<br /> <span style="font-size:11px;">
														(No password or registration required)</span></p></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"><input type="radio" name="type" onclick="return loginpage();"/></td>
														<td><p style="line-height:1.5;">  I have a luviz account and password 
														<br /> <span style="font-size:11px;">
														(Sign in to your account for a faster checkout)</span></p></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"><input type="radio" name="type" onclick="return loginpage2();"/></td>
														<td><p style="line-height:1.5;">Create a account
														<br /> <span style="font-size:11px;">
														(Create your account for a faster checkout)</span></p></td>
													  </tr>
													  <tr>
														<td style="text-align:right;"></td>
														<td>
															<input type="button" name="submit" value="order now" class="button" onclick="return view_second();">
														</td>
													  </tr>
					  </table>
					  </div>
					  
					  
					  
					  <div id="userdetail1" style="display:none;">
				
					<table width="438" height="250" border="0" style="margin-bottom:20px; ">
						<tr>
							<td  colspan="2" style="text-align:right; font-size:12px;">
								<span style="color:red;">*</span> Required fields
							</td>
						</tr>
						
						<tr style="text-align:center;height:40px;">
							<td>Enter your email<br />
									 address <span style="color:red;">*</span>
							</td>
							<td>
								<input type="text" id="email" name="email" style="width:220px; height:30px; border:1px solid rgb(211,211,211);"  />
							</td>
						</tr>
						<tr style="text-align:center; height:40px;">
							<td>Password <span style="color:red;">*</span>
							</td>
							<td>
								<input type="password" id="password"  style="width:220px; height:30px; border:1px solid rgb(211,211,211);" name="pwd" />
							</td>
						</tr>
						<tr style="text-align:center; height:40px;">
							<td>&nbsp;
							</td>
							<td style="text-align:left;">
								Forgot password?
							</td>
						</tr>
						<tr>
														<td style="text-align:right;"><input type="radio" name="type" checked="checked" onclick="return loginpage1();" /></td>
														<td><p style="line-height:1.5;"> Continue as a guest
														<br /> <span style="font-size:11px;">
														(No password or registration required)</span></p></td>
													  </tr>
						<tr>
						 <tr>
														<td style="text-align:right;"><input type="radio" name="type" onclick="return loginpage2();"/></td>
														<td><p style="line-height:1.5;">Create a account
														<br /> <span style="font-size:11px;">
														(Create your account for a faster checkout)</span></p></td>
													  </tr>
							<td>&nbsp;
								
							</td>
							<td>
								<input type="button" name="submit" value="login" class="buttonyellow" />
							</td>
						</tr>
					</table>
					</div>
					
					 <div id="userdetail2" style="display:none;">
					 <?php
					 if($_GET['msg']){
					 ?>
					 <table width="438" border="0"  style="height:auto;">
					 <tr>
								 
								 <td colspan="2" style="font-size:14px; color:#003399; padding: 10px;">
								       <?php 
								      if($_GET['msg'])
								      {
								      $msg=$_GET['msg'];
								      }
								      else
								      {
								      $msg='';
								      }
								      echo $msg;
									 
								      ?>
									 
								 </td>
							</tr>
					 </table>
					 <?php
					 }
					 else{}
					 ?>
				<form name="form" action="insert_newuser.php" method="post">
					<table width="438" height="250" border="0" style="margin-bottom:20px; ">
						 
						<tr style="text-align:center;height:40px;">
							<td>
							Username/E-mail <span style="color:red;">*</span>
							</td>
							<td>
								<input type="text" id="email_id" name="email_id" style="width:220px; height:30px; border:1px solid rgb(211,211,211);"  />
							</td>
						</tr>
						<tr style="text-align:center;height:40px;">
								<td>First name <span style="color:red;">*</span>
								</td>
								<td>
									<input type="text"  name="fname" id="fname"  style="width:220px; height:30px; border:1px solid rgb(211,211,211);"/>
								</td>
							</tr>
							<tr style="text-align:center;height:40px;">
								<td>Last name <span style="color:red;">*</span>
								</td>
								<td>
									<input type="text"  name="lname" id="lname" style="width:220px; height:30px; border:1px solid rgb(211,211,211);" />
								</td>
							</tr>
						<tr style="text-align:center; height:40px;">
							<td>Password <span style="color:red;">*</span>
							</td>
							<td>
								<input type="password" name="pwd" id="pswd" style="width:220px; height:30px; border:1px solid rgb(211,211,211);" />
							</td>
						</tr>
						<tr style="text-align:center;height:40px;">
								<td>
									Gender <span style="color:red;">*</span>
								</td>
								<td>
									<input type="radio" name="gender" value="1" />Male
									<input type="radio" name="gender" value="2"  />Female
								</td>
							</tr>
						<tr>
														<td style="text-align:right;"><input type="radio" name="type" checked="checked" onclick="return loginpage1();" /></td>
														<td><p style="line-height:1.5;"> Continue as a guest
														<br /> <span style="font-size:11px;">
														(No password or registration required)</span></p></td>
													  </tr>
						<tr>
						<tr>
														<td style="text-align:right;"><input type="radio" name="type" onclick="return loginpage();"/></td>
														<td><p style="line-height:1.5;">  I have a luviz account and password 
														<br /> <span style="font-size:11px;">
														(Sign in to your account for a faster checkout)</span></p></td>
													  </tr>
							<td>&nbsp;
								
							</td>
							<td>
								<input type="submit" name="submit" value="create" onclick="return validate();"/>
							</td>
						</tr>
					</table>
					</form>
					</div>
				</div>
			<!---<div style="width:468px; height:268px; float:left; border:1px solid rgb(211,211,211); margin-left:20px;">
				<div style="width:458px; height:30px; float:left; border-bottom:1px solid rgb(211,211,211); font-size:16px; font-weight:bold; padding-left:10px; padding-top:10px;">
							New customers
				</div>
				<div style="width:428px; height:190px; float:left; margin-top:8px; padding:20px;">
				<?php 
				if($_GET['msg'])
				{
				$msg=$_GET['msg'];
				}
				else
				{
				$msg='';
				}
				
				?>
				
				<div style="font-size:14px; color:#003399;"><?php echo $msg;?></div>
					You are welcome to register a new customer account in our shop!<br /><br />
					<a href="register.php"><input type="button" class="buttonyellow" value="Register" /></a>
					
				</div>
					  </div>-->
			</div>
		
		
					  
					  
					  
					  
                 <!--<a href="file:///C|/Documents and Settings/user/Desktop/jabong/insert_userdetails.php">insert_userdetails</a>-->
				 </div>
				</div>
				
<!--<div id="view2" class="tabcontent" style="display:none;">
                <div style=" height:auto; width:500px; float:left; font-family:ProximaNova-Regular; font-size:12px; color:#333333;">
								   <table width="450" border="0" style="margin-bottom:20px; margin-left:20px;">
													  <tr>
														<td width="130">First Name <span style="color:red;">*</span></td>
														<td width="140"><input type="text" name="fname" id="fname" style="width:250px;" /></td>
													  </tr>
													  <tr>
														<td>Last name <span style="color:red;">*</span></td>
														<td><input type="text" name="lname" id="lname" style="width:250px;" /></td>
													  </tr>
													  <tr>
														<td>Phone<span style="color:red;">*</span></td>
														<td>+91
													    <input type="text" name="contact" id="Input2" style="width:230px;" onkeypress="numbersonly();" /></td>
													  </tr>
													   <tr>
														<td>Gender <span style="color:red;">*</span></td>
														<td><input type="radio" name="sex"  id="sex1" value="0"/> Male<input type="radio" name="sex" value="1" id="sex2" style="margin-left:20px;"/>Female</td>
													  </tr>
													  
													   <tr>
														<td>Address <span style="color:red;">*</span></td>
														<td><textarea cols="20" rows="3" name="add" id="add" ></textarea></td>
													  </tr>
													  
													  
													  <tr>
														<td>Landmark </td>
														<td><input type="text" name="area" id="area" style="width:250px;" /></td>
													  </tr>
													  
													  <tr>
														<td>Pincode <span style="color:red;">*</span></td>
														<td><input type="text" name="pin" id="pin" style="width:250px;"/></td>
													  </tr>
													  
													  <tr>
														<td>City <span style="color:red;">*</span></td>
														<td><input type="text" name="city" id="city" style="width:250px;" /></td>
													  </tr>
													  
													   <tr>
														<td>State/Region <span style="color:red;">*</span></td>
														<td><input type="text" name="state"  id="state" style="width:250px;"/></td>
													  </tr>
													   <tr>
														<td>Expected Delivery date <span style="color:red;">*</span></td>
														<td><input type="text" id="datepicker" name="ddate" style="width:250px;" /></td>
													  </tr>
													  <tr>
														<td><input type="checkbox" /></td>
														<td>Newsletter and Offers Signup</td>
													  </tr>
													  <tr>
														<td>&nbsp;  </td>
														<td class="botton1" style="height:12px; width:100px; font-weight:bold; color:#FFFFFF; font-size:14px;  cursor:pointer; " onclick="return view_third();" >Order Now <img src="images/shopping.png"  /></td>
													  </tr>
				  </table>
			  </div>
            </div>
            <div id="view3" class="tabcontent" style="display:none;">
				<div class="box1" style="width:60%; margin-left:0px; ">
					<div id="v-nav">
					<ul>
					    <li tab="tab_a" class="first current" style="cursor:pointer;">Cash On Delivery</li>
					    <li tab="tab_b" style="cursor:pointer;" >Credit card shopping</li>
					    <li tab="tab_c" style="cursor:pointer;">Pay Using PAYPAL</li>
					    
					</ul>
                
                
				
				
				
				<div  class="tab-content" style="display:block; width:370px; padding-left:0px; padding-top:0px; ">
                  
				<div style="height:500px; width:370px;  margin-top:0px; border:1px solid #CCCCCC;">
						<div style="height:70px; width:340px; margin-left:10px; float:left;  margin-top:10px; ">
						
						        
								 <div style="height:60px; width:100%; background:#FFFFCC; border:1px solid #FF9933; padding-left:5px;">
								 <p style="font-size:13px;"><span style="font-weight:bold; font-size:15px; ">Note:</span>
<span style="font-weight:bold; color:#00CC33;">With our Cash On Delivery Option, you can pay directly to the courier. No advance payment required now </span></p>

								 </div>
								 
					  	</div>
					  <div style="width:300px;float:left; margin-left:10px;">
					  		Please confirm the following information details
					  </div>
								 
					  <div id="div" style="width:230px; margin-left:10px;"> </div>
	              <table width="313" border="0" style="font-family:ProximaNova-Regular; margin-left:10px; font-size:12px; color:#333333;">
                    <tr>
                      <td width="263" ><p>First Name <span style="color:red;">*</span></p></td>
                      <td width="140"><input type="text" class="read" name="fname1" id="fname1" style="width:180px;" readonly=""  /></td>
                    </tr>
                    <tr>
                      <td ><p>Last name <span style="color:red;">*</span></p></td>
                      <td><input type="text" class="read"  name="lname1"  id="lname1" style="width:140px;" readonly="" /></td>
                    </tr>
                    <tr>
                      <td ><p>Phone<span style="color:red;">*</span></p></td>
                      <td>+91
                        <input type="text" name="phone"  class="read" id="phone" style="width:114px;" readonly="" /></td>
                    </tr>
                    <tr>
                      <td ><p>Gender <span style="color:red;">*</span></p></td>
                      <td><p>
                        <input type="radio" name="sex1" class="read" id="sexm" value="0" readonly="" />
                        Male
                        <input type="radio" name="sex1" class="read" id="sexf" value="1" readonly="" style="margin-left:20px;" />
                        Female</p></td>
                    </tr>
                    <tr>
                      <td ><p>Address <span style="color:red;">*</span></p></td>
                      <td><textarea class="read" name="address" id="address" cols="20" rows="3"  readonly="" ></textarea></td>
                    </tr>
                    <tr>
                      <td ><p>Landmark </p></td>
                      <td><input type="text" class="read" name="landmark" id="landmark" readonly="" /></td>
                    </tr>
                    <tr>
                      <td ><p>Pincode <span style="color:red;">*</span></p></td>
                      <td><input type="text" class="read" name="pin1"  id="pin1" readonly="" /></td>
                    </tr>
                    <tr>
                      <td ><p>City <span style="color:red;">*</span></p></td>
                      <td><input type="text" class="read" name="city1"  id="city1" readonly="" /></td>
                    </tr>
                    <tr>
                      <td ><p>State/Region <span style="color:red;">*</span></p></td>
                      <td><input type="text" class="read" name="state1"  id="state1" readonly="" /></td>
                    </tr>
                    <tr>
                      <td ><input name="checkbox" type="checkbox" /></td>
                      <td><p>Newsletter and Offers Signup</p></td>
                    </tr>
                    <tr>
                      <td ></td>
                      <td style="height:12px; width:100px; font-weight:bold; color:#FFFFFF; font-size:14px; ">
					  <input type="submit" name="submit" id="submit" style="background:url('images/bottonimg5.png'); border:none; height:30px; width:100px;" value="" formaction="userdetail_insert.php"  />
					  
					  <!--<img src="images/bottonimg5.png" /></td>
                    </tr>
                  </table>-->
				  
	              </div>
								
				         </div>
				
				
				
				<div  class="tab-content" style="display:none; width:370px; height:370px; padding-left:0px; padding-top:0px;   " >
                     <div style="height:190px; width:350px; float:left; margin-top:0px; border:1px solid #CCCCCC; ">
						<div style="height:36px; width:350px; float:left;  ">
						<p style="font-family:Arial, Helvetica, sans-serif; color:#666666; font-size:13px; margin-left:5px; padding:10px; font-weight:bold;">We have not enable shopping via credit card.<br />
						<span>Total Price   Rs.</span><input type="text" id="credit" name="credit" />
						 <input type="submit" name="submit" id="submit" style="background:url('images/bottonimg5.png'); border:none; height:30px; width:100px;" value="" formaction="userdetail_insert.php" />
				          </p>
						      
					   </div>
								
		          </div>
					  
				 
					 
                </div>
				
				
	            <div  class="tab-content" style="display:none; height:150px;  width:370px;  padding-left:0px; padding-top:0px;  ">
                  <div style="height:150px; width:350px; float:left;  border:1px solid #CCCCCC;">
				       <div style=" font-family:Arial, Helvetica, sans-serif; color:#666666; font-size:13px;height:60px; width:270px; float:left; padding:10px; font-weight:bold; ">We have not enable shopping via VISA.<br />
						<span>Total Price   Rs.</span><input type="text" id="visa" name="visa">
						<input type="submit" name="submit" id="submit" style="background:url('images/bottonimg5.png'); border:none; height:30px; width:100px;" value="" formaction="paypal_insert.php" />
				       </div>
					  
				   
				  </div>
	             
                </div>
				</div>
            </div>
			
			
			</div>
           
</div>
        
    </div>
								   
		
								   </div>	
							 </div>
				         <!-- <div style="height:auto; width:292px; float:left; border:1px solid #CCCCCC; margin-left:15px;  padding-bottom:10px;">
						    <h2 style="font-size:16px;padding-left:5px; margin-top:6px; margin-bottom:10px;">Order Summary</h2>
										
										<table  style="width:270px;  float:left; margin-left:5px;  font-family:Arial, Helvetica, sans-serif; font-size:11px;">
											<tr style="background:#eeeeee;">
												<td style="  font-weight:bold; font-size:13px; ">Product </td> 	
											
												<td style="font-weight:bold; font-size:13px; text-align:center;">Qty</td>
											
												<td style="font-weight:bold; font-size:13px; text-align:center;">Delivery</td>
											
												<td style="font-weight:bold; text-align:right; font-size:13px;">Price</td>
											</tr>
											<?php 
		//echo "select  p.*,t.`tot_price`,t.`quantity` from `temp_billinfo` t,`product` p where t.`bill_id`='$_SESSION[billid]' and p.`id`=t.`product_id`";
									$xsum=0;
									$tax=0;
									$xq_bill=mysql_query("select  p.*,t.`tot_price`,t.`quantity` from `temp_billinfo` t,`product` p where t.`bill_id`='$_SESSION[billid]' and p.`id`=t.`product_id`");	
while($xr_bill=mysql_fetch_array($xq_bill))
{
	 $xsum+=$xr_bill['tot_price'];
	  $tax+=$xr_bill['tot_price']*($xr_bill['tax_value']/100);									
									?>	
										 <tr>
										 	<td style="font-weight:bold;"><img src="../admin_new/inventory_management/<?php echo $xr_bill['image'];?>" height="20" width="20" alt="<?php echo $xr_bill['alternate_val'] ?>"   /><br/> <?php echo $xr_bill['product_name'];?> </td>
											<td style="text-align:center;"><?php echo $xr_bill['quantity'];?></td>
											<td style="text-align:center;">2-5<br/><span style="font-size:11px; color:#cccccc;"> Business <br/>days</span></td>
											<td style="text-align:right;"> Rs.<?php echo $xr_bill['tot_price']; ?></td>
										</tr>
										 	<?php } 
											$final_value=$xsum+$tax;
											?>
					     
										 
											 <tr style="border-top:1px solid #999999;">
											 	<td colspan="3" style="font-weight:bold; text-align:right;">Sub Total</td>
												<td style="font-weight:bold; text-align:right;"> Rs.<?php echo $xsum;?> </td>
											 </tr>
											 
											  <tr style="border-top:1px solid #999999;">
											 	<td colspan="3" style="font-weight:bold; text-align:right;">Tax amount</td>
												<td style="font-weight:bold; text-align:right;"> Rs.<?php echo $tax;?></td>
											 </tr>
											 
											 <tr>
											 	<td colspan="3" style="font-weight:bold; text-align:right;">Shipping Charges</td>
												<td style="font-weight:bold; text-align:right; color:#006600;">Free</td>
											 </tr>
											 <tr style="border-top:1px solid #999999; background:#eeeeee;">
											 	<td  colspan="3" style="font-weight:bold; text-align:right;">Total Rs </td>
												<td id="price_1" style="font-weight:bold; text-align:right;"> <?php echo $final_value;
												$_SESSION['finalamt']=$final_value;
												?></td>
											 </tr>
											 <tr>
											 	<td colspan="4" style="font-weight:bold; text-align:right;">VAT incl</td>
											 </tr>
											 <tr style="display:none;">
											 	<td colspan="3" id="disc_tr" style="font-weight:bold; text-align:right;">discount price</td>
												<td id="dis_price"></td>
											 </tr>
											 <tr style="display:none;" id="tot_disc_tr">
											 		<td colspan="3"  style="font-weight:bold; text-align:right;">Total Price After Discount</td>
													<td id="tot_price_disc"></td>
											 </tr>
											 <tr>
											   <td colspan="2"><input type="hidden" name="discount" id="discount" />
											    <input type="text" name="voucher" id="voucher" value="" /></td>
												<td><input name="button" type="button" value="Apply" onclick="return validate_voucher();"/></td>
											 </tr>
									</table>-->
						
						  </div>
						  
						  
							</div>
<?php include_once('bottombar.php');?>
 <?php // echo $final_value;    
			  
			  
			  
			  //final value for payments
			 
			 
			  ?>
			 


			  

</body>
</html>
