<?php
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::MAPKART:::...</title>
<link href="style.css" rel="stylesheet" type="text/css" />

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

			<div id="topimgbox1">
				<img src="images/ShoppingBang_stripe.jpg" width="960" />
			</div>
</div>

<div id="contentbar" style="height:auto;">
			<div id="contentbar_box" style="height:none;">
				
				<div id="contentleftbox">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							<a href="productdetails.php"><li class="li1"><img src="images/li6.png" style="float:left; margin-top:-5px; margin-right:10px; margin-left:10px; " />New Arrivals</li></a>
							<a href="sale.php"><li class="li1"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px; " />Offer Sale</li></a>
						<!--	<a href="makemypc.php"><li class="li1"><img src="images/li4.png" style="float:left; margin-right:10px; margin-left:10px; " />Make my PC</li></a>-->
							<a href="sale.php"><li class="li1"><img src="images/li3.png" style="float:left; margin-right:10px; margin-left:10px; " />Home Mega Loot</li></a>
							<a href="smeproductdetails.php"><li class="li1"><img src="images/li2.png" style="float:left; margin-right:10px; margin-left:10px; " />SME</li></a>
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
							<div id="contentrightbox" style="width:757px;height:auto;margin-left:0px; ">
							<?php
							$qwe=mysql_query("select * from `category` where `parent`='0' and `status`='1' order by `priority` ");
						while($res=mysql_fetch_array($qwe))
						{
						
							?>
							
								<a href="category_details.php?id=<?php echo $res['id'];?>"><div class="contentrightbox" style="width:225px; height:300px; float:left; " >
									<div style="float:left;">
										<img src="../admin_new/inventory_management/<?php echo $res['img'];?>"  />
									</div>
									<div style="float:left; width:205px; height:22px; padding:10px; float:left; background:#006699; color:#333333; font-family:Arial, Helvetica, sans-serif; font-size:16px;">
										<?php echo $res['category_name'];?>
									</div>
									
								
								</div></a>
								<?php
								}
								?>
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
<div id="content5" >
			<div id="content5_box">
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

<div id="content6">
			<div id="content6box"><h4>Online shopping that helps you make the right choice</h4>
			<P style="font-size:11px;">We offer online shopping that is stylish, trendy and reliable � the Shopping that is light on your pockets, the Shopping that offers all of your favourite brands and more, the Shopping that is simpler, easier, faster and always Online.<br />
			<br />
			At Mapkart, we understand shopping better, and therefore, we strive to offer you the best of fashion and elegance. We showcase products from all categories such as clothing, footwear, jewellery, accessories, home & living, personal care, and exotic cosmetics.</P>
			
			<h4>The epitome of fashion & style � For we know you need the best!</h4>
			
			<P style="font-size:11px;">Mapkart, the Online Shopping store, brings to you the chicest collection of latest apparels, footwear, accessories, jewelleries and more. Like you, we too follow the latest in fashion trends and it just helps us bring over thousands of new products exclusively selected for you. Explore big brands like Burberry, Calvin Klein, United Colors of Benetton, Arrow, Esprit, French Connection, Adidas, Reebok, Nike, Clarks, and so many others. While you take the best, we keep looking at what newer designs and styles the likes of Stella McCartney, Robert Cavalli, Zac Posen, and Marc Jacobs orchestrate, just in case, you want more from the shop.</p>
			
			<h4>Our Services at your Doorsteps</h4>
<p style="font-size:11px;">You make up your mind on a product, order it online in few easy clicks, and we deliver it right at your address across India. Just pay for the product, while we ensure Free Shipping all the time, of course, with no strings attached. For those second thoughts after purchase, we have in place a 30-day return option as well.</p>

<h4>Mapkart � the 24 x7 Online Fashion & Lifestyle Store for everyone</h4>
<p style="font-size:11px;">Forget the fashion streets of the world. We, at Mapkart, have all that you need to glam up your lifestyle. From extensive range of men�s shirts to exotic dresses for women to funkiest clothes for kids to matching footwear, sports shoes and accessories for everyone, we purvey diversity of choices in online shopping in India under one umbrella. Your Mapkart Online Shop has arrived! Do not miss the attractive best buy prices and super discount offers. Get more, pay lesser! Drop a line at care@mapkart.com for any query or give us a call at 0124-6128000.</p>
			</div>
</div>
<?php include_once('bottombar.php');?>	
</body>
</html>
