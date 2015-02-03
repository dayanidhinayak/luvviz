<?php
ini_set("dispaly_errors",1);
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
	<!-- Syntax Highlighter -->
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
<title>...:::MAPKART:::...</title>
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
   <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
  <script src="alice-1362145177.js" type="text/javascript"></script>
  <script>
  function getcategory(idval)
  {
  if (window.XMLHttpRequest)

  {
  xmlhttp=new XMLHttpRequest();
  }
else
 {
 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
xmlhttp.onreadystatechange=function()
 {
 if (xmlhttp.readyState==4 && xmlhttp.status==200)
 {
var result=xmlhttp.responseText;

document.getElementById('displayval').innerHTML=result;
//window.location.reload();

	}
}
xmlhttp.open("GET","getdetails.php?q="+idval,true);

xmlhttp.send();
  
  
  }
  </script>

<link href="style.css" rel="stylesheet" type="text/css" />

<!--slider starts-->
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
	
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
 <style>
 h1{
 color:rgb(48,48,48);
 padding-left:15px;
 padding-top:4px;
 font-size:25px;
 margin-bottom:13px;
 font-weight:600;
 font-family: 'Open Sans', sans-serif;
 }
 .box{
 width:680px; 
 height:480px; 
 float:left;
 padding: 10px;
 border-radius:2px; 
 border:1px solid #cccccc;
background: -moz-linear-gradient(top, rgba(244,244,244,0.65) 0%, rgba(244,244,244,0.38) 41%, rgba(0,0,0,0.04) 94%, rgba(0,0,0,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(244,244,244,0.65)), color-stop(41%,rgba(244,244,244,0.38)), color-stop(94%,rgba(0,0,0,0.04)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6f4f4f4', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
overflow:auto;
 }
 p1{
 font-size:12px;
 font-family:Arial, Helvetica, sans-serif;
 color:rgb(110,110,110);
 line-height:1.7;
 }
 </style>
 
</head>

<body>
	
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>




<div id="contentbar" style="margin-top:15px;">
			<div id="contentbar_box">
							<div id="contentleftbox">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							<a href="productdetails.php"><li class="li1"><img src="images/li6.png" style="float:left; margin-top:-5px; margin-right:10px; margin-left:10px; " />New Arrivals</li></a>
							<a href="sale.php"><li class="li1" style="display:none;"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px; " />Offer Sale</li></a>
							<a href="makemypc.php"><li class="li1"><img src="images/li4.png" style="float:left; margin-right:10px; margin-left:10px; " />Make my PC</li></a>
							<a href="sale.php"><li class="li1"><img src="images/li3.png" style="float:left; margin-right:10px; margin-left:10px; " />Spcial Offer</li></a>
							<a href="smeproductdetails.php"><li class="li1"><img src="images/li2.png" style="float:left; margin-right:10px; margin-left:10px; " />SME Offer</li></a>
							<a href="old_pc.php"><li class="li1"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px; " />Exchange Old PC</li></a>
							</ul>
							
							
							
							<div style="height:400px; width:200px; float:left;" id="displayval">
							<?php 
							$q_sidebar=mysql_query("select `id`,`category_name` from `category` where `sidebar_status`='1' limit 0,2") or die(mysql_error());
						while($res_sidebar=mysql_fetch_array($q_sidebar))
						{	
							
							?> 
														<div style="height:20px; background:#C9C9C9; border-bottom:1px solid #999999;  width:190px; font-family:Arial, Helvetica, sans-serif; font-size:14px; float:left; color:#333333; font-weight:bold; text-align:center; padding:5px; border-color: -moz-use-text-color rgb(144, 144, 144) rgb(144, 144, 144);
-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none; box-shadow: 0px 4px 5px -2px rgba(0, 0, 0, 0.3);"><?php echo strtoupper($res_sidebar['category_name']);?></div>                       
														<div style="width:200px; height:160px; float:left; background:#fafafa;  ">
							<ul style="margin-left:0px; padding-left:0px; ">
			<?php
										$q1=mysql_query("select * from `category` where `parent`='$res_sidebar[id]'");
										while($r1=mysql_fetch_array($q1))
										{
										$q_brand=mysql_query("select * from brand where `brand_name`='$r1[category_name]'");
				 $r_brand=mysql_fetch_array($q_brand);
				 $bid_temp=$r_brand['id'];
										?>
							<li class="li2">&rsaquo;   <a href="productdetails.php?idval=<?php echo $r1['id']?>&type=brand&bid=<?php echo $bid_temp; ?>"><?php echo $r1['category_name']?></a></li>
							<?php
							}
							?>
							
							</ul>
							</div>
							<?php } ?>
							
						      </div>
								
								
								
								
							</div>
							<?php 
							$q3=mysql_query("select * from `index_image` where `status`='1' order by `priority`");
							while($r3=mysql_fetch_array($q3))
                              {
							 
							  $prior=$r3['priority'];
							  $pos=$r3['position'];
							  $img=$r3['image'];
							  $link=$r3['link'];
							  $alt=$r3['alt'];
							 
							  $ar[$pos] = $img;
							 $arr[$pos] = $link;
							  }
							 // var_dump($ar);
							?>
							
							<div id="contentmiddlebox"> 
							
							<div id="main" role="main" style="width:730px; height:580px;">
      
	  <form action="insert_oldpc.php" method="post" enctype="multipart/form-data">
        
         
		   <div class="orderbox"  style="width:735px; height:570px; margin-left:0%; padding-bottom:2%; ">
				 <h1> Privacy Policy</h1>
				 	<div class="box" style="width:735px;">
				 		<p1>
							<strong>Privacy Policy</strong><br /><br />
							We value the trust you place in us. That's why we insist upon the highest standards for secure transactions and customer information privacy. Please read the following statement to learn about our information gathering and dissemination practices.<br /><br />
							<strong>Note:</strong><br />
							Our privacy policy is subject to change at any time without notice. To make sure you are aware of any changes, please review this policy periodically.<br /><br />

By visiting this Website you agree to be bound by the terms and conditions of this Privacy Policy. If you do not agree please do not use or access our Website.<br /><br />

By mere use of the Website, you expressly consent to our use and disclosure of your personal information in accordance with this Privacy Policy. This Privacy Policy is incorporated into and subject to the Terms of Use.<br /><br /><br />
							<strong>1. Collection of Personally Identifiable Information and other Information</strong><br /><br />
							 When you use our Website, we collect and store your personal information which is provided by you from time to time. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our Website to make your experience safer and easier. More importantly, while doing so we collect personal information from you that we consider necessary for achieving this purpose.<br /><br />

In general, you can browse the Website without telling us who you are or revealing any personal information about yourself. Once you give us your personal information, you are not anonymous to us. Where possible, we indicate which fields are required and which fields are optional. You always have the option to not provide information by choosing not to use a particular service or feature on the Website. We may automatically track certain information about you based upon your behaviour on our Website. We use this information to do internal research on our users' demographics, interests, and behaviour to better understand, protect and serve our users. This information is compiled and analysed on an aggregated basis. This information may include the URL that you just came from (whether this URL is on our Website or not), which URL you next go to (whether this URL is on our Website or not), your computer browser information, and your IP address.<br /><br />

We use data collection devices such as "cookies" on certain pages of the Website to help analyse our web page flow, measure promotional effectiveness, and promote trust and safety. "Cookies" are small files placed on your hard drive that assist us in providing our services. We offer certain features that are only available through the use of a "cookie".<br /><br />

We also use cookies to allow you to enter your password less frequently during a session. Cookies can also help us provide information that is targeted to your interests. Most cookies are "session cookies," meaning that they are automatically deleted from your hard drive at the end of a session. You are always free to decline our cookies if your browser permits, although in that case you may not be able to use certain features on the Website and you may be required to re-enter your password more frequently during a session.<br /><br />

Additionally, you may encounter "cookies" or other similar devices on certain pages of the Website that are placed by third parties. We do not control the use of cookies by third parties.<br /><br />

If you choose to buy on the Website, we collect information about your buying behaviour.<br /><br />

If you transact with us, we collect some additional information, such as a billing address, a credit / debit card number and a credit / debit card expiration date and/ or other payment instrument details and tracking information from cheques or money orders.<br /><br />

If you choose to post messages on our message boards, chat rooms or other message areas or leave feedback, we will collect that information you provide to us. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law.<br /><br />

If you send us personal correspondence, such as emails or letters, or if other users or third parties send us correspondence about your activities or postings on the Website, we may collect such information into a file specific to you.<br /><br />

We collect personally identifiable information (email address, name, phone number, credit card / debit card / other payment instrument details, etc.) from you when you set up a free account with us. While you can browse some sections of our Website without being a registered member, certain activities (such as placing an order) do require registration. We do use your contact information to send you offers based on your previous orders and your interests.<br /><br /><br />
					<strong>2. Use of Demographic / Profile Data / Your Information</strong><br /><br />
We use personal information to provide the services you request. To the extent we use your personal information to market to you, we will provide you the ability to opt-out of such uses. We use your personal information to resolve disputes; troubleshoot problems; help promote a safe service; collect money; measure consumer interest in our products and services, inform you about online and offline offers, products, services, and updates; customize your experience; detect and protect us against error, fraud and other criminal activity; enforce our terms and conditions; and as otherwise described to you at the time of collection.<br /><br />

In our efforts to continually improve our product and service offerings, we collect and analyse demographic and profile data about our users' activity on our Website.<br /><br />

We identify and use your IP address to help diagnose problems with our server, and to administer our Website. Your IP address is also used to help identify you and to gather broad demographic information.<br /><br />

We will occasionally ask you to complete optional online surveys. These surveys may ask you for contact information and demographic information (like zip code, age, or
income level). We use this data to tailor your experience at our Website, providing you with content that we think you might be interested in and to display content according to your preferences.<br /><br />
							<strong>Cookies</strong><br /><br />
							A "cookie" is a small piece of information stored by a web server on a web browser so it can be later read back from that browser. Cookies are useful for enabling the browser to remember information specific to a given user. We place both permanent and temporary cookies in your computer's hard drive. The cookies do not contain any of your personally identifiable information.<br /><br /><br />
							<strong>3. Sharing of personal information</strong><br /><br />
							We may share personal information with our other corporate entities and affiliates to help detect and prevent identity theft, fraud and other potentially illegal acts; correlate related or multiple accounts to prevent abuse of our services; and to facilitate joint or co-branded services that you request where such services are provided by more than one corporate entity. Those entities and affiliates may not market to you as a result of such sharing unless you explicitly opt-in.<br /><br />

We may disclose personal information if required to do so by law or in the good faith belief that such disclosure is reasonably necessary to respond to subpoenas, court
orders, or other legal process. We may disclose personal information to law enforcement offices, third party rights owners, or others in the good faith belief that such disclosure is reasonably necessary to: enforce our Terms or Privacy Policy; respond to claims that an advertisement, posting or other content violates the rights of a third party; or protect the rights, property or personal safety of our users or the general public.<br /><br />

We and our affiliates will share / sell some or all of your personal information with another business entity should we (or our assets) plan to merge with, or be acquired by that business entity, or re-organization, amalgamation, restructuring of business. Should such a transaction occur that other business entity (or the new combined entity) will be required to follow this privacy policy with respect to your personal information.<br /><br />
							<strong>4. Links to Other Sites</strong><br /><br />
							 Our Website links to other websites that may collect personally identifiable information about you. Mapkart.com is not responsible for the privacy practices or the content of those linked websites.<br /><br />


							<strong>5. Security Precautions</strong><br /><br />
							Our Website has stringent security measures in place to protect the loss, misuse, and alteration of the information under our control. Whenever you change or access your account information, we offer the use of a secure server. Once your information is in our possession we adhere to strict security guidelines, protecting it against unauthorized access.<br /><br />
							<strong>6. Choice/Opt-Out</strong><br /><br />
							We provide all users with the opportunity to opt-out of receiving non-essential (promotional, marketing-related) communications from us on behalf of our partners, and from us in general, after setting up an account. If you want to remove your contact information from all mapkart.com lists and newsletters, please visit http://www.mapkart.com.<br /><br />
							<strong>7. Advertisements on Mapkart.com</strong><br /><br />
							We use third-party advertising companies to serve ads when you visit our Website. These companies may use information (not including your name, address, email address, or telephone number) about your visits to this and other websites in order to provide advertisements about goods and services of interest to you.<br /><br />
							<strong>8. Your Consent</strong><br /><br />
							 By using the Website and/ or by providing your information, you consent to the collection and use of the information you disclose on the Website in accordance with this Privacy Policy, including but not limited to Your consent for sharing your information as per this privacy policy.<br /><br />

If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect, how we use it, and under what circumstances we disclose it.<br /><br />
<span style="float:left; margin-left:600px; font-weight:bold;">Continue</span>

				 		</p1>
					</div>   
			  
			</div>
						</form>
						</div>
						</div>
        
      
     
    
  <!-- jQuery -->
 
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  </div>
  </div>
  
  <?php include_once('bottombar.php');?>
</body>
</html>
