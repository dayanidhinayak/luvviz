<?php
include_once("function.php");
$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b where p.`status`='1' and p.`brand_id`=b.`id`");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::MAPKART:::...</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<!-- script for dropdown side menuy -->
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>


<!-- end of script for dropdown side menuy -->
							  
<script type="text/javascript" src="js/msscript.js"></script>
 <script type="text/javascript" src="js/overlaybox.js"></script>
 
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
            
        <!-- Assigning global javascript variable for image host -->
   
<script type='text/javascript' src='jquery-1.9.1.min.js'></script>

<script>
$(function() {
//$('.colla').next().hide();
$('.colla').click(function(){

	 
	   if($(this).next().is(':hidden') )
	   $(this).next().show('slow');
	  else{
	   $(this).next().hide('slow');
	  }
	 
   // $('#images').show();
  });
  
  
  $('.varientnull').each(function(){
var detailval=$(this).attr('title');
//alert(detailval);
$('#'+ detailval).hide(); 
  
  
  
  
  });
  
 
  
 });

</script>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Princess+Sofia' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="tm-stylesheet.css">

<style>
.leftmenu{
width:182px; 
 
padding: 7px 0px 7px 13px;
font-family:Arial, Helvetica, sans-serif; 
color:rgb(49, 49, 49); 

float:left;
font-size:13px;
font-weight:bold;
}
.whislist{
width:37px;
height:34px;

float:left;
margin-top:10px;
background:url(images/whislist.png) ;
background-position:top;
}
.whislist:hover{

background:url(images/whislist.png) ;
background-position:bottom;
}
.compare{
width:37px;
height:34px;
float:left;
margin-top:10px;
margin-left:5px;
background:url(images/compare.png);
background-position:top;
}
.compare:hover{

background:url(images/compare.png);
background-position:bottom;
}

.newdiv{
 border:1px solid #efefef;
 }
 
 .newdiv:hover{
 border:none;
 }
 
  .para{
 font-size:11px; line-height:1.5; color: rgb(0, 75, 145);  background:#ffffff; width:176px; padding-left:18px; padding-top:8px; padding-bottom:8px; margin-top:2px; 
}
.para:hover{
background:#ebebeb;
text-decoration:none;
}
</style>
												 <script> 
												 $(function() {
													$('.whislist').click(function(){
														var id=$(this).parent().find('.addbutton').attr('id');
														//alert(id);
														$.ajax({
													  url: 'addto_wishlist_ajax.php?product_id='+id,
													   success: function (data) {
													   alert(data);
						
															    },
													 });
														
																											});		
														
																												$('.compare').click(function(){
														
														
																		       window.open("compare.php");
														
														});
														});		
																						
							</script>
							
	<!-- Syntax Highlighter -->
	<link href="css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
 
	
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>						
							
</head>

<body>
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>



<div id="contentbar" style="height:auto;">
			<div id="contentbar_box" style="height:auto;">
			<div style="width:960px; float:left; height:40px; margin-top:10px;">
			<div style="height:20px; background:#efefef; width:186px; font-family:AsapRegular; font-size:14px; float:left; color:#333333; font-weight:bold; text-align:center; padding:5px; padding-top:10px;">Filter Categories </div>
			<p style="font-weight:bold; float:left; margin-left:20px; font-family:Arial, Helvetica, sans-serif; color:#666666; font-size:12px; letter-spacing:1px">
			<?php //echo 'Home';
			//path($pid);
			?>
<!--Home > Men > Shoes > <span style="color:#FF6600;">Sports Shoes</span>-->
</p>
													
			</div>
							<div id="contentleftbox" style="height:auto; width:195px; border:1px solid #cccccc;">
										<div style="height:auto; width:195px; float:left; background:#FFFFFF;">
													<div class="leftmenu colla" style="margin-top:0px; border-bottom:1px solid #cccccc; background:#ebebeb; ">
																&nbsp; Category
													</div>
													<div style="float:left; ">
												<table cellpadding="5" style=" font-size:12px; line-height:2.0;">
												<?php

$sql=mysql_query("select `category_name` from `category` where `parent`='$pid'")or die(mysql_error());

	 while($result=mysql_fetch_array($sql))

	{?>
												         <tr>
														      <td class="para"><?php echo $result['category_name'];?></td></tr>
															  <?php
															  }
															  ?>
												</table>
												</div>
									
													<div class="leftmenu  colla" style="margin-top:0px; border-bottom:1px solid #cccccc; background:#ebebeb; ">
																&nbsp; Brand
													</div>
													
													<div style="float:left; height:auto; ">
														 <table cellpadding="5" style=" font-size:12px; line-height:2.0;">
															<?php 

$sql1=mysql_query("select distinct(`brand_id`) from `product` where category_id like '%|$pid|%'")or die(mysql_error());

	while($result1=mysql_fetch_array($sql1))

	{
	$sql2=mysql_query("select `brand_name` from `brand` where `id`='$result1[brand_id]'")or die(mysql_error());

			$result2=mysql_fetch_array($sql2);	
			?>																																																						                                                                 <tr>
																																																																							                                                                  <td class="para"><a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $result1['brand_id']?>"><?php echo $result2['brand_name'];?></a></td></tr>
															   <?php
															   }
															   
															   ?>
																																																																				                                                          </table>	
																																																																	 
												</div>
											
												
												<?php
												$v=array();
												$pdetail=mysql_query("select DISTINCT (`varient_name`) from `product_varient` ");
												
												while($rdetails=mysql_fetch_array($pdetail))
												{
												$v[]=$rdetails['varient_name'];
												}
												
												foreach($v as $v1)
												{
												
													?>
													
													
													
													<div class="leftmenu  colla" style="margin-top:0px; border-bottom:1px solid #cccccc; background:#ebebeb; ">
																&nbsp; <?php echo $v1?>
																
													</div>
													
													
													
							<div  style="float:left;">
														 <table style="width:100%;">
														 
												 <?php
													$countval=0;
												 $vr=array();
													
														 $qwe=mysql_query("select * from `product` where `category_id` like '%|$pid|%'") or die(mysql_error());
												while($rwe=mysql_fetch_array($qwe))
												{
												$que=mysql_query("select `description` from product_varient WHERE  `product_id`='$rwe[id]' and  `varient_name`='$v1'")or die (mysql_error());
												$countval=mysql_num_rows($que);

while($row1 = mysql_fetch_array($que))

  {	
  
  
  if(!(in_array($row1['description'],$vr)))
  {
  
  $vr[]=$row1['description'];
 // echo "<tr><td>$countval ggh</td></tr>";
  }
 // var_dump($vr);
   }	 
		 }
		 ?>			 
		
		<?php 
		 foreach($vr as $desc_val)
												{
												$countval=1;
		?>
		 <tr style="border-bottom:1px solid #cccccc; border-collapse:collapse; "><td class="para" style="width:200px;" ><a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $_GET['bid']?>&desc=<?php echo $desc_val;?>&feature=<?php echo $v1;?>"><?php echo $desc_val;?>&nbsp; </a> 					</td></tr>
		 <?php
		}
												if($countval==0)
												{
												
												?>
												
												<div class="varientnull"  title="colla<?php echo $v2?>"></div>
												
												
												
												<?php
												}
		
		
		?>										  
</table>				 	</div>					 
							<?php } ?>
										</div>
							</div>
				<div style="width:755px; height:auto; float:left;">
                 <div id="content5_box1" style="float:left; height:auto; min-height:100px; width:740px; margin-top:0px; border:#cccccc 1px solid; margin-left:0px; margin-left:15px;  ">
						<?php
$q=mysql_query("select `type_name` from `appliedtype_to_page` where `pageid`=(select `id` from `page_details` where `pagename`='productdetails.php')")or die(mysql_error());
$r=mysql_fetch_array($q);
if($r['type_name']=="top_sellers")
{
include_once("../admin_new/inventory_management/top_sellers.php");
}
else
{include_once("../admin_new/inventory_management/most_popular.php");
}
?>			 </div>

 <div style="width:740px;  height:auto; float:left; margin-left:15px;  ">
				 <div  style=" width:740px; margin:auto;    margin-top:40px;">
				 <div style="width:740px; height:auto; float:left; ">		
				 		<div id="content5_topbox1" style=" width:740px; height:30px;"><p style=" margin-top:8px; margin-left:10px; font-size:14px; font-family:AsapRegular; color:#000000;">
						<?php
						$count=mysql_num_rows($totalq);
						?>
						<?php echo $count?>  Products found
</p></div>
							  <ul>
							   <?php
							   while($res=mysql_fetch_array($totalq))
							   {
							   $product_description_res=substr($res['description'], 0, 50);
							   $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$res[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							$disc=$rr1['discount'];
							$finalval=$res['price']*(1-$disc/100);
														$qtystock=mysql_query("select `quantity` from `stock` where `product_id`='$res[id]'");
														$resstock=mysql_fetch_array($qtystock);
														$totalproductval=$resstock['quantity'];
							   ?>
							    <li class="itm hasOverlay unit size1of4 " style="list-style-type:none;">
									<div class="content5smallbox imagecontainers imagecontainers2 newdiv" style="height:310px; margin-top:10px; margin-left:3px; text-align:center; width:175px; margin-top:20px;">
									<div>
								<div class="addbutton" id="<?php echo $res['id'];?>">
								</div>
								</div>
									<div id="newbox" style="width:100%; height:20px; text-align:center; border:0px;">
								<?php 
								$created=$res['created_ondate'];
							$year=date("Y",strtotime($created));
							$current_year=date("Y");
							if($year==$current_year)
							{
								?>				
														<div style="width:50px; color:#000000; border:1px solid #ff6600; margin:auto;  height:15px; padding-bottom:3px;  font-family:AsapRegular; ;">
																	NEW
														</div>
														<?php } ?>
											</div>
							   				<div class="itm-overlay ">
										 <!-- Could not find the End of this div even on original document-->
										 <div style="width:100%;  height:81px; float:left; position:relative; margin-left:23px; color:#333333;" class="itm-qlInsert">
										<div class="compare" style=" width:45px; font-size:10px; height:55px; float:left; background:none; font-family:Arial, Helvetica, sans-serif; font-size:10px;   ">
														<img src="../admin_new/inventory_management/<?php echo $res['image'];?>" style="width:40px; height:auto; float:left;"/><br/>Compare
													</div>
														<div class="whislist" style=" width:22px; height:56px; font-size:10px; text-align:center; float:left; background:none; font-family:Arial, Helvetica, sans-serif; font-size:10px; margin-left:75px;">							
														<img src="images/star.png" width="22" height="21" style="margin-left:25px;"/><br/>
														<div style="width:60px; height:36px; float:left; padding:2px; text-align:center; background:#5B5B5B; color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:12px;  border-radius:3px; -moz-border-radius:3px; margin-top:3px; line-height:1.3;">
															Save for<br/> later
														</div>
													</div>
											</div>
							   					<div style="height:120px; width:100%; float:left; text-align:center; margin-top:40px; text-align:center;">
							   							 <a href="oneproduct.php?idvalue=<?php echo $res['id']?>"><img src="../admin_new/inventory_management/<?php echo $res['image'];?>"  style="width:120px; height:auto;" alt="<?php echo $res['alternate_val']; ?>"/>  </a>
							   					</div>
<script type="text/javascript">
	jQuery(function($){ //on document.ready	
		var $i = jQuery.noConflict(); 
		$i('.imagecontainers').overlaycontent({ //initialize overlay on DIVs with class="imagecontainers"
			speed:1100,
			dir:'down',
			opacity:1 //opacity: 0 to 1
		})
		//var $i = jQuery.noConflict(); 

		$i('.imagecontainers2').overlaycontent2({ //initialize overlay on DIVs with class="imagecontainers"
			speed:1100,
			dir:'left',
			opacity:1 //opacity: 0 to 1
		})
	})
	</script>			
					   							<p style="height:auto; float:left; ">
															<div style="font-family:ProximaNova-Regular; font-size:12px; color:#333333; font-weight:bold; height:auto; float:left; text-align:center; width:100%; margin-top:15px; min-height:100px;">
															<div style="width:100%;height:auto; min-height:100px;">
															<?php echo $res['brand_name'];?><br/>	
																<span style="font-weight:normal;"><?php echo substr($res['product_name'],0,45);?></span>
															
																<br />
																	<?php // echo substr($product_description_res,0 ,30);?> 
																<?php 
																if($disc)
											{					?>
																<strike style='font-size:10px;'><?php echo number_format($res['price'],2)?></strike>&nbsp;&nbsp;
															<span style="color:#FF0000;">	<?php
																echo number_format($finalval,2);?></span>
																<?php
																}
																
																
																else
																{
															echo $res['price'];	
																}
																?>
																</div>
																<div class="itm-qlInsert" style="width:100%; height:20px; padding-top:2px; padding-bottom:2px; text-align:center; background:#ebebeb; color:#333333; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; float:left; position:inherit; bottom:0px;">
														Available: <?php echo $totalproductval;?>
													</div>	
															</div>
														</p>
							 	</div>
							   <?php
							   }
							   ?>
							  </div>
							  </li>
							  </ul>
							  
				 </div>
  </div>
</div>
	   		</div>
		</div>	
			
</div>
<?php include_once('bottombar.php');?>	
</body>
</html>
