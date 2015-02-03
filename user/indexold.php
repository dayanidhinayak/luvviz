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
	<script>
	function insert_news_mail()
	{
	
	alert("Congrats! You Have Successfully Registered For News Letter..");
	var mail=document.getElementById('mail').value;
//alert(res);
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

	}
}
xmlhttp.open("GET","insert_mail.php?q="+mail,true);

xmlhttp.send();


	
	
	
	}
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

</style>
</head>

<body >
	
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>

<div id="topimgbox">
			<div id="topimgbox1"><img src="images/ShoppingBang_stripe.jpg" width="960" /></div>
</div>

<div id="contentbar" style="margin-top:15px; height: 800px;">
			<div id="contentbar_box" style="height: 800px;">
							<div id="contentleftbox">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							<a href="productdetails.php"><li class="li1"><img src="images/li6.png" style="float:left; margin-top:-5px; margin-right:10px; margin-left:10px; " />New Arrivals</li></a>
							<a href="sale.php"><li class="li1" style="display:none;"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px; " />Offer Sale</li></a>
							<a href="makemypc.php"><li class="li1"><img src="images/li4.png" style="float:left; margin-right:10px; margin-left:10px; " />Make my PC</li></a>
							<a href="sale.php"><li class="li1"><img src="images/li3.png" style="float:left; margin-right:10px; margin-left:10px; " />Spcial Offer</li></a>
							<a href="smeproductdetails.php"><li class="li1"><img src="images/li2.png" style="float:left; margin-right:10px; margin-left:10px; " />SME Offer</li></a>
							<a href="old_pc.php"><li class="li1"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px;"/> Exchange Old PC</li></a>
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
							<li class="li2">   <a href="productdetails.php?idval=<?php echo $r1['id']?>&type=brand&bid=<?php echo $bid_temp; ?>"><?php echo $r1['category_name']?></a></li>
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
							<div id="contentmiddlebox" style="height: 800px;">
							<div id="main" role="main" style="width:530px; height:580px;">
      <section class="slider" style="width:530px;">
        <div class="flexslider" style="width:530px; height:580px; background:url(images/apple1.jpg)">
          <ul class="slides" style="width:530px; ">
            <li>
  	    	    <img src="images/apple1.jpg" width="530" height="580"/>  	    		
			</li>
  	    	<li>
  	    	    <img src="images/banner2.jpg" width="530" height="580"/>  	    		
			</li>
			<li>
  	    	    <img src="images/banner3.jpg" width="530" height="580"/>  	    		
			</li>
			<li>
  	    	    <img src="images/banner4.jpg" width="530" height="580"/>  	    		
			</li>
			<li>
  	    	    <img src="images/apple2.jpg" width="530" height="580"/>  	    		
			</li>
          </ul>
        </div>
      </section>
      
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
							
							
							
							<div id="contentrightbox">
							<?php 
						if(isset($ar['contentrightbox1']) || isset($ar['contentrightbox2']))
						{
						?>
						<a href="<?php echo $arr['contentrightbox1']?>"><img src="../admin_new/inventory_management/<?php echo $ar['contentrightbox1'];?>" height="286" width="184" />
						</a>
						<a href="<?php echo $arr['contentrightbox2']?>"><img src="../admin_new/inventory_management/<?php echo $ar['contentrightbox2'];?>" height="286" width="184"  style="margin-top:10px;" />
						</a>
						<?php
						}
						
						?>
						 </div>
			</div>
</div>

<div id="content3">

			<div id="content3_box">
				
						
						
						<div id="content3_leftimg">
						<?php 
						if(isset($ar['content3_leftimg']))
						{
						?>
						<a href="<?php echo $arr['content3_leftimg']?>"><img src="../admin_new/inventory_management/<?php echo $ar['content3_leftimg'];?>" /></a>
						<?php
						}
						?>
						</div>
						<div id="content3_middleimg">
						<?php 
						if(isset($ar['content3_middleimg']))
						{
						?>
						
						<a href="<?php echo $arr['content3_middleimg']?>"><img src="../admin_new/inventory_management/<?php echo $ar['content3_middleimg'];?>" /></a>
						<?php
						}
						?>
						
						</div>
						<div id="content3_rightimg">
						<?php 
						if(isset($ar['content3_rightimg_top']))
						{
						?>
						<a href="<?php echo $arr['content3_rightimg_top']?>"><img src="../admin_new/inventory_management/<?php echo $ar['content3_rightimg_top'];?>" width="229" /></a>
						<?php
						}
						if(isset($ar['content3_rightimg_bottom']))
						{
						
						?>
						<a href="<?php echo $arr['content3_rightimg_bottom']?>"><img src="../admin_new/inventory_management/<?php echo $ar['content3_rightimg_bottom'];?>" width="227" height="155" 
						style="margin-top:10px;" /></a>
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

	<?php include_once('bottombar.php');?>			
</body>
</html>
