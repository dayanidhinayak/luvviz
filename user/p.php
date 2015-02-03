
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::LUVVIZ:::...</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css3/style_common.css" />
<link rel="stylesheet" type="text/css" href="css3/style6.css" />


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
 

		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>




								<!---------------------------submenu bar---------------------->	

								<div id="submenu" style="border-bottom:none; padding-top:0px;">
									<div style="width:1040px; height:35px; margin:auto; border-bottom: 1px solid rgb(134, 134, 134); margin-top:8px;">
										<div id="submenu-leftbox" style="margin-top:0px;">

	
	<span style="font-weight:bold; font-size:14px;">Your are here :</span>
			<?php 
			$qq=mysql_query("select * from `brand` where `id`='$bid'");
			$rroo=mysql_fetch_array($qq);
			echo 'Home';
			path($pid);
			echo ">".$rroo['brand_name'];
			?>
			
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
								</div>

								<!---------------------------submenu bar end---------------------->



<div id="contentbar" style="height:auto;">
			<div id="contentbar_box" style="height:auto;">
			<!--<div style="width:960px; float:left; height:40px; margin-top:10px;">
			<!--<div style="height:20px; background:#efefef; width:186px; font-family:AsapRegular; font-size:14px; float:left; color:#333333; font-weight:bold; text-align:center; padding:5px; padding-top:10px;">Filter Categories </div>
			<p style="font-weight:bold; float:left; margin-left:20px; font-family:Arial, Helvetica, sans-serif; color:#666666; font-size:12px; letter-spacing:1px">
			<?php echo 'Home';
			path($pid);
			?>
<!--Home > Men > Shoes > <span style="color:#FF6600;">Sports Shoes</span>
			</p>
													
			</div>-->
<div class="header" style="width:200px; height:auto; float:left; background:#cdcdcd;">
			<div class="content-left1" style="height:auto; width:200px; border:1px solid #cccccc; margin-top: 10px; border: 1px solid rgb(201, 199, 199); background:#333;">
										<!--<div style="height:auto; width:195px; float:left; background:#FFFFFF;">-->
                                        
                                     <!--<div class="leftmenu colla" style="margin-top:0px; border-bottom:1px solid #cccccc; background:#ebebeb; cursor:pointer;">
                                                
																&nbsp; category
													</div>-->
													
													<!--<div  style="float:left; height:auto;">
                                                    <table cellpadding="5" style=" font-size:12px; line-height:2.0;">
                                                    <?php
$r=mysql_query("select * from `category` where `parent`='$pid'");
while($rr=mysql_fetch_array($r)){
//$result=mysql_query("select * from `product` where `category_id` LIKE '%|$id|'");
//$rrr=mysql_fetch_array($result);
//echo $rrr['quantity'];
?>	
 <tr>
														      <td><a href="productdetails.php?idval=<?php echo $rr['id'];?>&type=brand&bid=<?php echo $rr['id']?>"><?php echo $rr['category_name'];?></a></td></tr>
                                                              <?php
}
?>
                                                              </table>

                                                    </div>-->
              
         
		<div class="leftmenu colla" style="margin-top:0px; border-bottom:1px solid #cccccc; cursor:pointer; border-bottom: 1px dotted rgb(51, 51, 51); font-family: 'Source Sans Pro',sans-serif;
font-size: 15px;
color: rgb(51, 51, 51);
padding-bottom: 5px;
padding-top: 5px; width:175px; margin-left:10px; margin-top:6px; padding-left:0px;">
		
			
																&nbsp; Category
		</div>
	<div  style="float:left; height:auto; display:none;">
												<table cellpadding="5" style=" font-size:12px; line-height:2.0;">
												<?php
												
												$xx=mysql_query("select * from `category` where `id`='$pid'");
												$resxx=mysql_fetch_array($xx);
												$yy=mysql_query("select * from `category` where `parent`='$resxx[id]' limit 0,10 ");
												while($resyy=mysql_fetch_array($yy))
												{


	$det=array();
				 $query1=mysql_query("select * from `category` where `parent`='$pid' limit 0,10");
				 while($result1=mysql_fetch_array($query1))
				 {
				 	$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$result1[id]|%' limit 0,10 ");
					while($r=mysql_fetch_array($q))

					{

					//echo $r['brand_name'];
if($r['brand_name']!=$yy['category_name'])
{
					$det[]=$r['brand_name'];
}				
					}

					}

					

			$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$pid|%' limit 0,10 ");

					while($r=mysql_fetch_array($q))

					{

					//echo $r['brand_name'];
if($r['brand_name']!=$yy['category_name'])
{
					$det[]=$r['brand_name'];
}
					

					}

				

					$value=array_unique($det);

				 

				 foreach($value as $v)

				 {
                                 
				 $qq=mysql_query("select `id` from `brand` where `brand_name`='$v' limit 0,10");

				 $rr=mysql_fetch_array($qq);
 
	?>
												         <tr>
														      <td style="background:none;"><a href="productdetails.php?idval=<?php echo $result1['id'];?>&type=brand&bid=<?php echo $result1['brand_id']?>"><?php echo $ressss['category_name'];?></a></td></tr>
															  <?php
															  }
															  }
															  ?>




												</table>

</div>
		

									
													<div class="leftmenu  colla" style="margin-top:0px; border-bottom:1px solid #cccccc; background:#ebebeb; cursor:pointer; display:none;">
																&nbsp; Brand
													</div>
													
													<div  style="float:left; height:auto;">
														 <table cellpadding="5" style=" font-size:12px;">
															<?php 

$sql1=mysql_query("select distinct(`brand_id`) from `product` where category_id like '%|$pid|%'")or die(mysql_error());


	while($result1=mysql_fetch_array($sql1))

	{
           
	$sql2=mysql_query("select `brand_name` from `brand` where `id`='$result1[brand_id]'")or die(mysql_error());

			$result2=mysql_fetch_array($sql2);	
			?>																																																						                                                                 <tr>
																																																																							                                                                  <td class="para"><a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $result1['brand_id']?>"><?php echo $result2['brand_name'];?></a>
																																																																																							  																	</td>																																																																																																					 																	</tr>
															   <?php
															   }
															   ?>																																																				                                                          </table>	
																																																																	 
												</div>
												<div class="leftmenu" style="margin-top:0px; border-bottom:1px solid #cccccc;  cursor:pointer;  border-bottom: 1px dotted rgb(51, 51, 51); font-family: 'Source Sans Pro',sans-serif;
font-size: 15px;
color: rgb(51, 51, 51);
padding-bottom: 5px;
padding-top: 5px; width:175px; margin-left:10px; margin-top:6px; padding-left:0px; ">
												&nbsp; Price								
	</div>		
	<div style="float:left;">
	
	<?php
	$restotalpriceval=mysql_fetch_array($totalpriceval);
	$hh=$restotalpriceval['highestprice'];
	//echo $hh."high";
	$ll=$restotalpriceval['lowestprice'];
	//echo $ll."low";
	$finalpriceval=($hh-$ll)/5;
	
	?>
	
		
		<?php
		for ($i = 1; $i<=5; $i++)
		{
		$fromv=intval($ll);
		$to=$fromv+$finalpriceval;
		$ll=$to;
		
		?>
			
		<p  class="para"><a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $_GET['bid']?>&low=<?php echo $fromv?>&high=<?php echo intval($to)?>">Rs.<?php echo $fromv?>-Rs.<?php echo intval($to)?></a></p>
		
		
		
		<?php
		}
		?>
		
		
		<p class="para" style="width:177px; ">
		<form action="#" method="post" style="padding-left:10px; padding:10px; border-top:1px solid #cccccc;  border-bottom:1px solid #cccccc; ">
			Rs.<input type="text" name="low_price" style="max-width:40px;"/>-Rs.<input type="text" name="high_price" style="max-width:40px;" />
		<input type="submit" name="submit" value="Go" />
		</form>										
</p>
      </div>	
      
      
      
      									
												<?php
												$v=array();
												$pdetail=mysql_query("select DISTINCT (`varient_name`) from `product_varient` ");
												while($rdetails=mysql_fetch_array($pdetail))
												{
												$v[]=$rdetails['varient_name'];
												}
												foreach($v as $v2=>$v1)
												{
													?>

													<div class="leftmenu  colla" id="colla<?php echo $v2?>" style="margin-top:0px; border-bottom:1px solid #cccccc; cursor:pointer;  border-bottom: 1px dotted rgb(51, 51, 51); font-family: 'Source Sans Pro',sans-serif;
font-size: 15px;
color: rgb(51, 51, 51);
padding-bottom: 5px;
padding-top: 5px; width:175px; margin-left:10px; margin-top:6px; padding-left:0px;">
																&nbsp; <?php echo $v1?>
													</div>
							<div  style="float:left;">
														 <table style="width:100%;">
												 <?php
												 $countval=0;
												 $vr=array();
												 if(isset($_GET['bid']))
												 {
												
														$qwe=mysql_query("select * from `product` where `category_id` like '%|$pid|%' and `brand_id`='$_GET[bid]'") or die(mysql_error());
														 }
														 else
														 {

														  $qwe=mysql_query("select * from `product` where `category_id` like '%|$pid|%'") or die(mysql_error());

														 
														 }

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
		 <tr style="border-bottom:1px solid #cccccc; border-collapse:collapse; ">
		 			<td class="para" style="width:200px;" ><a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $_GET['bid']?>&desc=<?php echo $desc_val;?>&feature=<?php echo $v1;?>"><?php echo $desc_val;?>&nbsp; </a> 					</td>
		</tr> 
		 <?php
		}
												if($countval==0)
												{
												
												?>
												
												<div class="varientnull"  title="colla<?php echo $v2?>"></div>
												
												
												
												<?php
												}
		
		
		?>										  
</table>				 
							</div>					 
							<?php } ?>
										</div>
									
           </div>      
 <div style="width:740px;  height:auto; float:left; margin-left:20px; overflow:auto; ">
		
		<!--rightbar start-->
			
					
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
and  `to_date` >= '$date' and `status`='1' ");
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
								
								</div>
                                                                        <?php
                                                                        if($res['newarrival']==1)
                                                                        {
                                                                            ?>
                                                                      
                                                                        <div style="width: 65px; height: 82px; position: absolute; z-index:99; top:10px; background: url(images/special.png);">
							       
                                                                        </div>
                                                                        <?php
                                                                        }
                                                                        ?>
									<div id="newbox" style="width:100%; height:20px; text-align:center; border:0px;">
								<?php 
								$created=$res['created_ondate'];
							$month=date("m",strtotime($created));
							$current_month=date("m");
							if($month==$current_month)
							{
								?>
                                                                
														<!--<div style="width:50px; color:#000000; border:1px solid #ff6600; margin:auto;  height:15px; padding-bottom:3px;  font-family:AsapRegular;">
																	NEW
														</div>-->
                                                                                                               
														<?php } ?>
											</div>
							   				<div class="itm-overlay ">
										 <!-- Could not find the End of this div even on original document-->
										 <div style="width:100%;  height:81px; float:left; position:relative; margin-left:23px; color:#333333;" class="itm-qlInsert">
										<div class="compare" style=" width:45px; font-size:10px; height:55px; float:left; background:none; font-family:Arial, Helvetica, sans-serif; font-size:10px;  ">
														<img src="../admin_new/inventory_management/<?php echo $res['image'];?>" style="width:40px; height:auto;"/><br/>Compare
													</div>
													<div class="addbutton" id="<?php echo $res['id'];?>">
													</div>	
														<div class="whislist" style=" width:22px; height:56px; font-size:10px; text-align:center; float:left; background:none; font-family:Arial, Helvetica, sans-serif; font-size:10px; margin-left:75px;">							
														<img src="images/star.png" width="22" height="21" style="margin-left:25px;"/><br/>
														<div style="width:60px; height:36px; float:left; padding:2px; text-align:center; background:#5B5B5B; color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:12px;  border-radius:3px; -moz-border-radius:3px; margin-top:3px; line-height:1.3;">
															Add to<br/> Compare
														</div>
													</div>
											</div>
							   					<div style="height:120px; width:100%; float:left; text-align:center; margin-top:40px; text-align:center;">
							   							 <a href="oneproduct.php?idvalue=<?php echo $res['id']?>&idvalue1=<?php echo $pid;?>&bid1=<?php echo $bid;?>"><img src="../admin_new/inventory_management/<?php echo $res['image'];?>"  style="width:120px; height:auto; max-height:120px;" alt="<?php echo $res['alternate_val']; ?>"/>  </a>
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
															<div style="width:100%;height:auto; min-height:100px; ">
															<?php echo $res['brand_name'];?><br/>	
																<span style="font-weight:normal; color:rgb(0, 75, 145); "><?php echo substr($res['product_name'],0,45);?></span>
															
																<br />
																	<?php //echo substr($product_description_res,0 ,30);?> 
																<?php 
																if($disc)
											{					?>
																<strike style='font-size:14px; color:#FF0000; '>Rs.<?php echo number_format($res['price'],2)?></strike>&nbsp;&nbsp;</br>
                                                                                                                                <span style='font-size:14px;'>
																<?php
																echo 'Rs. '.number_format($finalval,2);
																}
																else
																{
																    ?>
                                                                                                                                </span>  
															<span style='font-size:14px;'> Rs. <?php echo number_format($res['price'],2);?></span>
															<?php
																}
																?>
																</div>
																<div class="itm-qlInsert" style="width:100%; height:25px; padding-top:4px; padding-bottom:2px; text-align:center; background:#ebebeb; color:#333333; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; float:left; position:inherit; bottom:0px;">
														Stock Available: <?php echo $totalproductval;?>
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
<!--rightbar end-->
				 <div id="content5_box1" style="float:left; height:auto; min-height:100px; width:740px; margin-top:0px;  margin-left:0px; margin-left:15px;">
						<?php
$q=mysql_query("select `type_name` from `appliedtype_to_page` where `pageid`=(select `id` from `page_details` where `pagename`='productdetails.php')")or die(mysql_error());
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

?>			 </div>
  </div>
</div>
	   		</div>
		

	<?php include_once('bottombar.php');?>	
</body>
</html>
