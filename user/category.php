<?php
include_once("admin_new/function.php");
$id=$_GET['idval'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
<title>Demo Template</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!---------------------------hover css---------------------->		
<link rel="stylesheet" type="text/css" href="css3/style_common.css" />
<link rel="stylesheet" type="text/css" href="css3/style6.css" />
<!---------------------------hover css---------------------->	

<!---------------------------stiky---------------------->
<script src="js5/jquery.min.js" type="text/javascript"></script>
<script src="js5/jquery-scrolltofixed.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('.header').scrollToFixed();


        // Dock the footer to the bottom of the page, but scroll up to reveal more
        // content if the page is scrolled far enough.

        $('.footer').scrollToFixed( {
            bottom: 0,
            limit: $('.footer').offset().top
        });


        // Dock each summary as it arrives just below the docked header, pushing the
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });
</script>
<!---------------------------sticky code end---------------------->	
</head>
<body>
<!---------------------------main bar---------------------->	
<div id="main-bar">
		<div id="main-box">
			
				<div id="topbar">
						<div id="topbar-box">
						<!-------------------topbar-------------------->
								<div id="logo-box">
										<img src="images/logo1.jpg" width="80"  />
								</div>
								<div id="headright-box">
										<div id="headlink">
												<div id="headright-box1">
														<div id="toplink">
																<ul>
																		<li style="border-right:none; width:30%;">Shipping Card </li>
																		<li>Create Account </li>
																		<li>Shipping</li>
																		<li>Login</li>
																</ul>
														</div>
												</div>	
												<div id="menu">
										
														<ul>
										<?php
										
										
										$res=mysql_query("select * from `category` where `status`='1'");
										while($row=mysql_fetch_array($res)){
										?>
									<a href="category.php?idval=<?php echo $row['id'];?>"><li><?php echo $row['category_name'];?></li></a>
										<?php
										}
										?>	
														</ul>
									
												</div>
										</div>
								</div>
								<!---------------------------top bar end---------------------->	
								
								<!---------------------------submenu bar---------------------->	
								<div id="submenu">
										<div id="submenu-leftbox">
<?php
$res1=mysql_query("select * from `category` where `id`='$id'");
$row1=mysql_fetch_array($res1);
 ?>
												<span style="font-weight:bold; font-size:14px;">Your are here :</span> Home ><?php echo $row1['category_name']; ?>
										</div>
										<div id="submenu-rightbox">
										<span class="text" style="font-weight:bold; float:left;">Sort By :</span>
												<select class="form" style="padding:4px; height:25px; width:212px;">
														<option>
																Select
														</option>
												</select>
										</div>
								</div>
								<!---------------------------submenu bar end---------------------->	
								
								
								<div id="content" style="margin-top:10px; margin-bottom:10px;">
								<!---------------------------categori start---------------------->
										<div class="content-left1"  style="width:200px;">
												<div class="category-box">
														<div class="category-head">
																Category
														</div>
														<div class="category-content">
																<h3 class="text" style="font-weight:bold; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-bottom:0px; margin-top:0px;">
																		Bags
																</h3>
<?php
$r=mysql_query("select * from `category` where `parent`='$id'");
while($rr=mysql_fetch_array($r)){
$result=mysql_query("select * from `product` where `category_id` LIKE '%|$id|'");
$rrr=mysql_fetch_array($result);
echo $rrr['quantity'];
?>																<ul>
																		<a href="category.php?idval=<?php echo $rr['id'];?>"/><li><?php echo $rr['category_name'];?>(223)</li></a>
<?php
}
?>
																		
																</ul>
														</div>
												</div>
												<div class="header" style="width:200px; height:auto; float:left;">
												<div class="category-box" style="margin-top:10px;">
														<div class="category-head">
																Brand
														</div>
														<div class="category-content">
																<ul>
																		<li><input type="checkbox"  />Hand Bags (223)</li>
																		<li><input type="checkbox"  />Wallets & Purses (20)</li>
																		<li><input type="checkbox"  />ling Bags (9)</li>
																		<li><input type="checkbox"  />Clutches (4)</li>
																		<li><input type="checkbox"  />Shopping Bags (3)</li>
																		<li><input type="checkbox"  />Laptop Bags (2)</li>
																</ul>
														</div>
												</div>
												
												<div class="category-box" style="margin-top:10px;">
														<div class="category-head">
																Price
														</div>
														<div class="category-content">
																<p class="text" style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">
																		Enter a Price range in Rs.<br />
																		<input type="text" name="" value="20" class="form" style=" width:50px; height:15px;"/> -
																		<input type="text" name="" value="50" class="form" style=" width:50px; height:15px; font-weight:bold;"/>
																		<input type="button" value="Go"  />
																</p>
																<ul>
																		<li><input type="radio" /> below Rs. 2000 (52) </li>
																		<li><input type="radio"/> Rs. 2000 - Rs. 4000 (192) </li>
																		<li><input type="radio"/> Rs. 4001 - Rs. 6500 (14) )</li>
																		<li><input type="radio" /> above Rs. 6500 (3) </li>
																</ul>
														</div>
												</div>
												
												<div class="category-box" style="margin-top:10px;">
														<div class="category-head">
																Fit
														</div>
														<div class="category-content">
																<ul>
																		<li><input type="checkbox"  />Hand Bags (223)</li>
																		<li><input type="checkbox"  />Wallets & Purses (20)</li>
																		<li><input type="checkbox"  />ling Bags (9)</li>
																		<li><input type="checkbox"  />Clutches (4)</li>
																		<li><input type="checkbox"  />Shopping Bags (3)</li>
																		<li><input type="checkbox"  />Laptop Bags (2)</li>
																</ul>
														</div>
												</div>
										</div>
									</div>
										<!---------------------------categori end---------------------->	
										
										<!---------------------------product start---------------------->	
										<div id="content-right" style="width:820px; margin-left:20px; overflow:auto;">
												<div class="category-contentbox">
<?php
$rr=mysql_query("select * from `product` where `category_id` LIKE '%|$id|'");
while($ro=mysql_fetch_array($rr)){
?>
														<a href="index.htm">
														<div class="view view-sixth" style="cursor:pointer;">
															<img src="admin_new/inventory_management/<?php echo $ro['image'];?>" />	
																<div class="mask">
																</div>
																<div class="category-pricebox">
																		<?php
echo $ro['product_name'];
?><br />
																		<span style="font-weight:bold; color:#2073B2;">INR <?php echo $ro['price']; ?></span>
																</div>
														</div>
<?php
}
?>
														</a>
														
			
												</div>
										</div>
										<!---------------------------product end---------------------->
								</div>
								</div>
						</div>
				</div>
		</div>
</div>
<!---------------------------footer bar---------------------->
<div id="footer" style="position:absolute; z-index:9999; top:1500px;">
		<div id="footer-box">
				<div id="footer-content">
						<div id="footer-contentbox">
								<div id="footerleftbox">
										<div id="footer-leftcontent">
												<div class="footerhead">
														Need Help ?
												</div>
												<ul>
														<li>Order Status</li>
														<li>Shipping & Delivery</li>
														<li>Returns & Exchange</li>
														<li>FAQs</li>
												</ul>
												<div id="contect-botton" style="margin-top:50px; background:#2073b2; border:none;">
														Contact Us
												</div>
										</div>
										<div id="footer-rightcontent" style="margin-top:10px;">
												<ul>
														<li>Home</li>
														<li>men</li>
														<li>women</li>
														<li>cart</li>
												</ul>
										</div>
								</div>
								<div id="footerrightbox">
										<div class="footerhead">
												About Ekmatra 
										</div>
										<p class="text" style="color:#bdbdbd; font-size: 11px;">
												In todays time, Ekmatra is extremely relevant as it provides natural product for enviornmental friendly people. Clothing is considered to be second skin and fashion today follows the fabric therefore, most natural line of products in Ekmatra
										</p>
										<div class="footerhead" style="margin-top:25px;">
												The Process of making
												<br />
												<br />
												<img src="images/footer_process.png"  />
										</div>
								</div>
						</div>
				</div>
				<div id="footer2">
						<div id="footer2-box">
								<div id="footer-logo">
										<img src="images/footer_logo.png"  />
								</div>
								<div id="footer-link">
										<ul>
												<li>Privacy Policy</li>
												<li>Terms & Conditions</li>
												<li>Disclaimer</li>
										</ul>
								</div>
						</div>
				</div>
		</div>
</div>
<!---------------------------footer end---------------------->
</body>
</html>
