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

</head>

<body>
<div id="topbar"> 
			<div id="topbarbox">
						<div id="topbarbox1">  <p style="font-size:14px; margin:3px; color:#666666; float:left;">  Free Shipping*
                                                                           Cash on Delivery
                                                                           30 Days-Return
                                                  Customer Support (24x7) 0124-6128000
												  <div class="topmenu1" style="float:left; margin-left:110px;">help</div>
												  
												  <div class="topmenu1" style="float:left;">  Sign up and get Rs. 2000</div>
												  <div class="topmenu1" style="float:left;">Login</div>
												  </p>
												    
			  </div>
						<div id="logo"><a href="index.php"><img src="images/logo.jpg" /></a></div>
						<div id="serch" style="margin-top:30px;"><table width="550">
  <tr>
    <td><input type="text" style="height:30px; width:400px;"/></td>
    <td style="  font-size:14px; background-color: #EB7C00; width:140px;  color:#FFFFFF; text-align:center; border-top-right-radius:5px 5px; border-bottom-right-radius:5px 5px; ">SEARCH</td>
  </tr>
</table>
</div>
			</div>
</div>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>

<div id="topimgbox">
			<div id="topimgbox1"><img src="images/ShoppingBang_stripe.jpg" width="960" /></div>
</div>

<div id="contentbar" style="margin-top:15px;">
			<div id="contentbar_box">
							<div id="contentleftbox">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							<a href="productdetails.php"><li class="li1"><img src="images/li6.png" style="float:left; margin-top:-5px; margin-right:10px; margin-left:10px; " />New Arrivals</li></a>
							<a href="sale.php"><li class="li1"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px; " />Offer Sale</li></a>
							<a href="makemypc.php"><li class="li1"><img src="images/li4.png" style="float:left; margin-right:10px; margin-left:10px; " />Make my PC</li></a>
							<a href="sale.php"><li class="li1"><img src="images/li3.png" style="float:left; margin-right:10px; margin-left:10px; " />Home Mega Loot</li></a>
							<a href="smeproductdetails.php"><li class="li1"><img src="images/li2.png" style="float:left; margin-right:10px; margin-left:10px; " />SME</li></a>
							<a href="old_pc.php"><li class="li1"><img src="images/li2.png" style="float:left; margin-right:10px; margin-left:10px; " />Order Old PC</li></a>
							</ul>
							
							
							
							<div style="height:400px; width:200px; float:left;" id="displayval">
							<?php 
							$q_sidebar=mysql_query("select `id`,`category_name` from `category` where `sidebar_status`='1' limit 0,2") or die(mysql_error());
						while($res_sidebar=mysql_fetch_array($q_sidebar))
						{	
							
							?> 
														<div style="height:20px; background:#CCCCCC; width:190px; font-family:Arial, Helvetica, sans-serif; font-size:14px; float:left; color:#333333; font-weight:bold; text-align:center; 
														padding:5px;"><?php echo strtoupper($res_sidebar['category_name']);?></div>                       
														<div style="width:200px; height:175px; float:left;  ">
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
							
					<div id="main" role="main" style="width:530px; height:580px;">
      
	 		<form action="insert_review.php" method="post" >
        
			<div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">
				    
			  <table width="40%" border="0" height="150px;" style="float:left;  margin-left:15%; ">
	<tr><th colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px;">Review Product</th></tr>				
 	<tr>
    <td width="21%" >Name:</td>
    <td colspan="2"><input type="text" name="name" style=" border:1px solid #CCCCCC;"/></td>
	
  </tr>
   
  <tr>
    <td>Email:</td>
    <td width="37%"><input type="text" name="email" style=" border:1px solid #CCCCCC;"/></td>
	 
  </tr>
  <tr>
    <td>Contact no:</td>
    <td width="37%"><input type="text" name="contact" style=" border:1px solid #CCCCCC;"/></td>
	 
  </tr>
  <tr>
    <td >Comment: </td>
    <td><textarea name="textarea" rows="9" cols="50" style=" border:1px solid #CCCCCC;"/>
    
      </textarea></td>
	 
  </tr>
   <input type="hidden" name="hidden" value="<?php echo $_GET['idval'];?>" />
 <tr>
    <td>Reviews:</td>
    <td width="37%"><input type="radio" name="review" value="1" />Poor
	<input type="radio" name="review" value="2" />Average
	<input type="radio" name="review" value="3" />Good
	<input type="radio" name="review" value="4" />Very Good
	<input type="radio" name="review" value="5" />Excellent
	
	</td>
	 
  </tr>
 <tr><td></td><td><input type="submit" name="submit" value="Submit"/></td></tr>
 </form>
	</table>

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
</div>

<div id="content3">

			<div id="content3_box">
				
						
						
						<div id="content3_leftimg">
						
						</div>
						<div id="content3_middleimg">
						
						
						</div>
						<div id="content3_rightimg">
						
						</div>
			</div>
</div>
<div id="content4">
<?php

$q=mysql_query("select `type_name` from `appliedtype_to_page` where `pageid`=(select `id` from `page_details` where `pagename`='index.php')")or die(mysql_error());
$r=mysql_fetch_array($q);

if($r['type_name']=="top_sellers")
{

include_once("../admin_new/inventory_management/top_sellers.php");
}
else

{include_once("../admin_new/inventory_management/most_popular.php");
}

?>
</div>



<div id="content5">
			<div id="content5_box"  style="border:1px solid #CCCCCC; height:200px;">
						<div id="content5_box1" style="">
									<div id="content5_topbox1" ><p style="font-weight:bold; margin-top:10px; margin-left:10px;">Top                                     Brands</p></div>
									<?php
									$qwe=mysql_query("SELECT * FROM brand  where `priority`!=0  ORDER BY `priority` asc LIMIT 0 , 7");
									while($rwe=mysql_fetch_array($qwe))
									{
									
									
									?>
									
									
									<div class="content5smallbox" style="margin-left:25px; background:#cccccc; border:1px solid #cccccc; "><img src="../admin_new/inventory_management/<?php echo $rwe['icon'];?>" style="width:100px; height:100px;" /></div>
									<?php
									}
									?>
						</div>
			</div>
</div>

<div id="content6" style="display:none;">
			<div id="content6box" ><h4>Online shopping that helps you make the right choice</h4>
			<br />
			<P>We offer online shopping that is stylish, trendy and reliable – the Shopping that is light on your pockets, the Shopping that offers all of your favourite brands and more, the Shopping that is simpler, easier, faster and always Online.<br />
			<br />
			At mapkart, we understand shopping better, and therefore, we strive to offer you the best of fashion and elegance. We showcase products from all categories such as clothing, footwear, jewellery, accessories, home & living, personal care, and exotic cosmetics.
			
			<h4 style="margin-top:20px;">The epitome of fashion & style – For we know you need the best!</h4>
			<br />
			mapkart, the Online Shopping store, brings to you the chicest collection of latest apparels, footwear, accessories, jewelleries and more. Like you, we too follow the latest in fashion trends and it just helps us bring over thousands of new products exclusively selected for you. Explore big brands like Burberry, Calvin Klein, United Colors of Benetton, Arrow, Esprit, French Connection, Adidas, Reebok, Nike, Clarks, and so many others. While you take the best, we keep looking at what newer designs and styles the likes of Stella McCartney, Robert Cavalli, Zac Posen, and Marc Jacobs orchestrate, just in case, you want more from the shop.
			<br />
			<h4 style="margin-top:20px;">Our Services at your Doorsteps</h4>
			
			You make up your mind on a product, order it online in few easy clicks, and we deliver it right at your address across India. Just pay for the product, while we ensure Free Shipping all the time, of course, with no strings attached. For those second thoughts after purchase, we have in place a 30-day return option as well.

			<h4 style="margin-top:20px;">mapkart – the 24 x7 Online Fashion & Lifestyle Store for everyone</h4>
			<br />
			Forget the fashion streets of the world. We, at mapkart, have all that you need to glam up your lifestyle. From extensive range of men’s shirts to exotic dresses for women to funkiest clothes for kids to matching footwear, sports shoes and accessories for everyone, we purvey diversity of choices in online shopping in India under one umbrella. Your mapkart Online Shop has arrived! Do not miss the attractive best buy prices and super discount offers. Get more, pay lesser! Drop a line at care@mapkart.com for any query or give us a call at 0124-6128000.</p>
			</div>
</div>
<div id="content7" style="margin-top:40px; margin-left:30px;">
				<div id="content7box">
							<div class="content7box1">
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:-40px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Service</li>
									<li>About</li>
									<li>Contact</li>
									<li>terms and Conditions</li>
									<li>Privacy Policy</li>
									<li>Affiliate Programme</li>
									<li>Corporate Gifting</li>
                                  
							</ul>
							</div>
                            
                            
<div class="content7box1" >
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Our Policies</li>
									<li>Cancellations and Returnst</li>
									<li>Shipping</li>
									<li>Payments</li>
									<li>Ordering and Tracking</li>
									
                                  
							</ul>
				  </div>
                            
                            <div class="content7box1" style="width:130px;">
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Join us on</li>
									<li><img src="images/img6.jpg" style="  margin-top:3px; margin-right:5px;" />Twteer</li>
									<li><img src="images/f.jpg" style=" float:left;  margin-top:3px;  margin-right:5px;"  />Facebook</li>
									
									
							</ul>
							</div>
                            
                            
                            <div class="content7box1" style="width:170px;">
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Payment Methods</li>
									
                                    <li style="margin-top:5px;"><img src="images/img10.jpg" style="float:left;" /><img src="images/visa.png" style=" margin-left:5px;" /><img src="images/netbanking.png"  style=" margin-left:5px;" />
									</li>
                                    <li style="font-weight:bold; margin-top:5px;">Shipping Partner</li>
                                   <li> <img src="images/img11.png" width="135" height="91" style="float:left; margin-left:-20px;" /></li>
							</ul>
							</div>
                            
<div class="content7box1" style="width:240px; margin-left:50px;">
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Payment Methods</li>
									
                                   
							       <div style="height:180px; width:230px; float:left; border:1px #CCC solid; margin-top:5px; padding:6px; "><p>Sign uest p to receive special offers and the latstyle news. </p>
                                   <input type="text" name=""  style="height:30px; width:180px; margin-left:20px;"/>
                                   <div class="bottam">For Women</div><div class="bottam">For Women</div>
                                   <p style="font-size:11px;">Your data will not be shared with others and you can unsubscribe at any time. </p>
                                   </div>.
                            </ul>
				  </div>
				</div>
</body>
</html>
