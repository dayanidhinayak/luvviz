<?php
ini_set("dispaly_errors",0);
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link href="style1.css" rel="stylesheet" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css1/style.css" />
	<link rel="stylesheet" type="text/css" href="css1/jquery.jscrollpane.css" media="all" />
<!-------------------banner script-------------------->		
	<link rel="stylesheet" type="text/css" href="css2/plusslider.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src='js2/jquery.plusslider.js'></script>
	<script type="text/javascript" src='js2/jquery.easing.1.3.js'></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#slider2').plusSlider({
			autoPlay: true,
			displayTime: 3000, // The amount of time the slide waits before automatically moving on to the next one. This requires 'autoPlay: true'
			sliderType: 'fader', // Choose whether the carousel is a 'slider' or a 'fader'
			width: 1040, // Overide the default CSS width
			height: 250 // Overide the default CSS width
		});

		$('#slider3').plusSlider({
			sliderEasing: 'easeInOutExpo', // Anything other than 'linear' and 'swing' requires the easing plugin
			fullWidth: true,
			autoPlay: false, 
			sliderType: 'slider' // Choose whether the carousel is a 'slider' or a 'fader'
		});

	});
	</script>
<!-------------------banner script-------------------->	


							
	<!-- Syntax Highlighter -->
	<!-- Modernizr -->
 <!-- 1<script src="js/modernizr.js"></script>-->
<title>...:::LUVVIZ:::...</title>
<!--2<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">-->
    <!-- Start WOWSlider.com HEAD section -->
	<!--3<link rel="stylesheet" type="text/css" href="engine1/style.css" />-->
	<!--<script type="text/javascript" src="engine1/jquery.js"></script>-->
	<!-- End WOWSlider.com HEAD section -->
   <!-- Assigning global javascript variable for image host -->
  <!--4<script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>-->

 <!-- <script src="alice-1362145177.js" type="text/javascript"></script>-->
  <!--5<script>
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
  </script>-->

<!--<link href="style.css" rel="stylesheet" type="text/css" />-->

<!--slider starts-->
<!--<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />-->
	
	<!-- Modernizr -->
 <!--6 <script src="js/modernizr.js"></script>-->


<style>

</style>

<!--dropdown start-->
 <!------------<script src="jquery-latest.min.js" type="text/javascript"></script>-------------->
    
    
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
$('.cnt').css('background-image', 'url(images/icon4.png)');
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

<body >

	<!--<div style="width:100%; height:auto; float:left;">
		<div style="width:60%; height:auto; margin:auto; font-family:arial; word-spacing:5px;">
			
			<!--dropdown start-->
		
	<!--dropdown end	
		</div>
		
		
</div>-->
	<div style="width:100%; height:auto; float:left;">
		<div style="width:98%; height:1500px; margin-left:1%;">
		
<?php
if(isset($_SESSION['id'])){
	

?>
<?php //include_once("menubar.php");
				include_once("menu4.php");?>
				
				
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

<div id="contentbar" style="margin-top:15px; height:auto;">
			<div id="contentbar_box" style="height: 0px;">
							<!--<div id="contentleftbox" style="height: auto;">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							  <?php
							  $x=array();
							 
							$qlmenu=mysql_query("select * from `leftmenu` where `status`='1'");
							while($rlmenu=mysql_fetch_array($qlmenu))
							{
							
							  $page=$rlmenu['pagename'];
							  $p=explode(",",$page);
							  foreach($p as $p1)
							  {
							  array_push($x,"$p1");
							  }
							  
							  if (in_array("index.php", $x))
							    {
							?>
							<a href="<?php echo $rlmenu['href'];?>"><li class="li1"><img src="../admin_new/inventory_management/<?php echo $rlmenu['icon'];?>" style="float:left; margin-top:-5px; margin-right:10px; margin-left:10px; " /><?php echo $rlmenu['name'];?></li></a>
							<?php
							    }
							}
							?>
							
							</ul>
							
							
							
							<div style="height:auto;width:200px; float:left;" >
							<?php
							$q3=mysql_query("select * from `index_image` where `status`='1' and `position`='content3_leftimg' order by `priority`");
							while($r3=mysql_fetch_array($q3))
                              {
                              ?>
							
                                                            <div style="width:200px; float: left; margin-top: 10px; ">
                                                                <img src="../admin_new/inventory_management/<?php echo $r3['image']?>" alt="<?php echo $r3['alt'];?>">
                                                            </div>
                                                           
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
								
								
								
								
							</div>-->
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
							<div id="contentmiddlebox" style=" height:250px;">
							<div id="main" role="main" style="width:auto; height:250px;">
      <!-- Start WOWSlider.com BODY section -->
                   <!-- <div id="wowslider-container1">
                    <div class="ws_images">-->
		<!-------------------banner bar-------------------->	
		<div id="banner">
		  
		    <div id="slider2" style="width:1040px;">
			<!--<img src="images/baner1.jpg" alt="" height="450" width="1040" />-->
					
			
			
		   <?php
		    $qindeximg=mysql_query("select * from `index_image` where `position`='contentmiddlebox' and `status`='1' order by `priority`") or die(mysql_error());
		    while($rindeximg=mysql_fetch_array($qindeximg))
		    {
		    ?>
		    <img src="../admin_new/inventory_management/<?php echo $rindeximg['image'];?> " alt="" title="<?php echo $rindeximg['tittle'];?>" height="450" width="1040"/>


		<?php
		    }
		    ?>
               	     
		  </div>
                
                
                    <!--<div class="ws_shadow"></div>
                    </div>
                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->
		</div>
		<!-------------------banner bar end-------------------->
      
   </div>
  	</div>
							
							
<!--<div id="content4" style="width:730px;float: left; height:auto; margin-top: 15px; margin-left: 20px;">
	<?php
	//include_once("../admin_new/inventory_management/top_sellers.php");

	
	
	//include_once("topseller1.php");
	
	?>
</div>-->
			<!--</div>
</div>-->
<div style="width:100%; height:auto; float:left; margin-top:20px;">
<div style="width:1040px; margin:auto;">
								<div id="content">
									<div style="width:1040px; height:auto; margin:auto;">
										<div id="content-left">
												<h1 class="head2" style="margin-top:0px; font-size:26px;">
														Friendly & always will be. 
												</h1>
												<p class="text" style="font-size:15px;">
														We understand your value of time. We understand your style and passion.<br /><br />
We are always ready to walk behind you, so that you will be ahead one step in the trend race.
												</p>
										</div>
										<div id="content-right">
												
												<?php
						$q=mysql_query("select * from `product` where `status`=1 and `top_sellers`='1' limit 0,5");
						while($r=mysql_fetch_array($q))
						{
						$q_brand=mysql_query("select * from brand where `id`=$r[brand_id]");
						$r_brand=mysql_fetch_array($q_brand);
						
						
						 $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$r[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							
							$disc=$rr1['discount'];
							$finalval=$r['price']*(1-$disc/100);
						
						?>
												
												<div class="product-box">
														<div class="product-content" style="height: 190px;">
												<a href="oneproduct.php?idvalue=<?php echo $r['id']?>">
													<img src="../admin_new/inventory_management//<?php echo $r['image'];?>"  style="width:100px; height:190px; padding-bottom:0px; padding-top:0px;" />
												</a>
														</div>
														<div class="product-text">
																<?php echo $r['product_name'];?>
														</div>
														<?php 
							
							if($disc)
											{
															
																
															?>
															<div class="price">
									<span style="color:red;">Rs.</span><?php 
									echo "<strike style='font-size:12px; color:red;'>".number_format($r['price'],2)."</strike>&nbsp;&nbsp;";
									?>
							<br/><span style="font-size: 12px;">Rs.<?php
									echo "".number_format($finalval,2)."";?></span>
															</div>
															<?php 
							
							}
																else
																{
																?>
						
														<div class="price">
																Rs.<?php echo $r['price'];?>
														</div>
															<?php
																
																}
															?>
												</div>
												
												<?php
												}
												?>
										</div>
								</div>
							</div>
</div>
</div>
<div style="width:100%; height:auto; float:left;">
    <div style="width:1040px; margin:auto;">
           <div id="content5_box1" style="float:left; height:auto;  width:1040px; margin-top:0px;  margin-left:0px; margin-left:15px;">
						<?php
$q=mysql_query("select `type_name` from `appliedtype_to_page` where `pageid`=(select `id` from `page_details` where `pagename`='index.php')")or die(mysql_error());
$r=mysql_fetch_array($q);
if($r['type_name']=="top_sellers")
{
include_once("../admin_new/inventory_management/top_sellers.php");
}
elseif($r['type_name']=="most_popular")
{
include_once("../admin_new/inventory_management/most_popular.php");
}
else{
}

?>

									<script type="text/javascript" src="js2/jquery.easing.1.3.js"></script>
									<!-- the jScrollPane script -->
											<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
									<script type="text/javascript">
										$('#ca-container').contentcarousel();
									</script>
				</div>
		</div>
</div>

	<?php include_once('bottombar.php');?>			
</body>
</html>
