<?php
ini_set("dispaly_errors",1);
include_once("function.php");
$name=$_GET['name'];
$query_footer=mysql_query("select * from `footer` where `id`='$name'");
$res_footer=mysql_fetch_array($query_footer);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
	<!-- Syntax Highlighter -->
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
<title>...:::LUVVIZ:::...</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<!--slider starts-->
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />

<!--tab end-->
<link rel="stylesheet" type="text/css" media="all" href="tabcss/styles.css">
<link rel="stylesheet" type="text/css" media="all" href="tabcss/font-awesome.min.css">
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<!--tab end-->
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
</head>

<body>

<div style="width:100%; height:auto; float:left;">
		<div style="width:98%; height:auto; margin-left:1%;">
		
<?php
if(isset($_SESSION['id'])){
	

?>
				<?php 
				include_once("menu4.php");
				?>
		<div id="menuu" style="height:100px;">
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

<!--<div id="contentbar" style="margin-top:15px; height:auto;">
			<div id="contentbar_box" style="height:0px;">
							<div id="contentleftbox" style="height: auto;">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							 
							
                                                            <div style="width:200px; float: left; margin-top: 10px; ">
                                                                <img src="../admin_new/inventory_management/
                                                        </div>
								
								
								
								
						
							
							<div id="contentmiddlebox" style="height:auto;"> 
							
							<div id="main" role="main" style="width:730px; height:auto;">
      
	 
        
         
		   <div class="orderbox"  style="width:735px; height:auto; margin-left:0%; padding-bottom:2%; background:#cdcdcd; ">
				    <span style="color: blue; font-size: 15px;">
				   
				 		</div>
					</div>   
			  
		   </div>
						
						</div>
						</div>-->
        
      
     
    
  <!-- jQuery -->
 
  </div>
  </div>
<!--content bar start-->
	<div style="width:100%; height:auto; float:left; margin-bottom:20px;">
		<div style="width:900px; margin:auto;">
			<div class="billing-content">
					<div id="w" class="clearfix">
							<ul id="sidemenu">
								<li>
								<a href="#ideas-content"><i class="icon-lightbulb icon-large"></i><strong>About Us</strong></a>
							  </li>
							  <li>
								<a href="#home-content"><i class="icon-home icon-large"></i><strong>Shipping</strong></a>
							  </li>
						
							  <li>
								<a href="#about-content" class="open"><i class="icon-info-sign icon-large"></i><strong>Help</strong></a>
							  </li>
							  <li>
								<a href="#contact-content"><i class="icon-envelope icon-large"></i><strong>Contact Us</strong></a>
							  </li>
							</ul>
    
							<div id="content" style="width:90%; margin-left:0px; margin-top:0px;	">
								<div id="ideas-content" class="contentblock hidden">
										  <h1>About Us</h1>
										  <p style="line-height:1.7;">We LUVVIZ provides you marketplace about comprehensive information on Fashionable Textiles and easy way to purchase them. Now gift your dear one the most qualitative and wallet friendly products.We have selected the best textiles for you, around India and abroad, LUVVIZ also provides a platform for business interactions and transactions to the manufacturer of garments and dealers of garments. We presents the best online portal for buying the trendiest garments in Bhubaneswar and around. Our portal displays selective and unique collections of garments produced by many prominent manufacturer of garments and Fashion Designers.
										  <br />
										  <br />
										  Presently we are dealing with Bhubaneswar market, so soon we will move to all other parts of India.
										  <br />
										  Our cash on delivery program will help you to choose and buy your best one.
											</p>
								</div><!-- @end #home-content -->
								
								
								<div id="home-content" class="contentblock hidden">
										  <h1>Shipping</h1>
										  <p style="line-height:1.6;">We have a team to deliver the products at your door step.<br />
										  A shipping charge of Rs. 80 is levied on each order you place at www.luvviz.com if the product price is less than Rs.349/-
Product having value more than 348 INR will be ship to your home with out any extra delivery charges.
<br />
It will take 2-6 working days if the product it is to be delivered in Bhubaneswar.
Your order is usually shipped within 24 hours of confirmation. Our logistics provider will then reach you to deliver the order. In case you are not available to take the delivery at first attempt, you may suggest a preferred time of delivery. 
An attempt is made to deliver the order at your preferred time. If no one is available to receive your order at this time, a second attempt is made after confirming with the customer. If the order is not received at second attempt then the order comes back to Luvviz.com warehouse. Our customer care executive will then get in touch with you to inform the non-delivery.
The order will be cancelled and your refund, if any, will be processed within 7 days. 
</p>
										  
										  
								</div><!-- @end #about-content -->
								
								<div id="about-content" class="contentblock">
										  <h1>Help</h1>
										  
										  <p>For any help, Mail us 
contact@luvviz.com</p>
										  
										 
								</div><!-- @end #ideas-content -->
								
								<div id="contact-content" class="contentblock hidden">
										  <h1>Contact Us</h1>
										  
										  <p style="line-height:1.6;">Plot no-109, Bhimpur,<br /> West aerodrome area, Bhubaneswar, India, 751020
Phone- 9778003030<br />
Mail us- contact@luvviz.com
</p>
										  
								</div><!-- @end #contact-content -->
							</div><!-- @end #content -->
						  </div><!-- @end #w -->
						<script type="text/javascript">
						$(function(){
						  $('#sidemenu a').on('click', function(e){
							e.preventDefault();
						
							if($(this).hasClass('open')) {
							  // do nothing because the link is already open
							} else {
							  var oldcontent = $('#sidemenu a.open').attr('href');
							  var newcontent = $(this).attr('href');
							  
							  $(oldcontent).fadeOut('fast', function(){
								$(newcontent).fadeIn().removeClass('hidden');
								$(oldcontent).addClass('hidden');
							  });
							  
							 
							  $('#sidemenu a').removeClass('open');
							  $(this).addClass('open');
							}
						  });
						});
						</script>
			</div>
												
		</div>
</div>
<!--content bar end-->


  
  <?php include_once('bottombar.php');?>
</body>
</html>
