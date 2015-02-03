<?php
include_once("function.php");
$pid=$_GET['idval'];
$type=$_GET['type'];
$bid=$_GET['bid'];
$desc=$_GET['desc'];
$feature=$_GET['feature'];
if($_GET['desc'])
{

$brandid=$_GET['bid'];
$desc=$_GET['desc'];
$feature=$_GET['feature'];

$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b,`product_varient` pv where p.`status`='1' and p.`brand_id`='$brandid' and b.`id`='$brandid' and pv.`description`='$desc' and pv.`product_id`=p.`id` and pv.`varient_name`='$feature' order by p.`created_ondate` desc")or die(mysql_error());


$totalpriceval=mysql_query("select max(p.`price`) as highestprice,min(p.`price`) as lowestprice from `product` p,`brand` b,`product_varient` pv where p.`status`='1' and p.`brand_id`='$brandid' and b.`id`='$brandid' and pv.`description`='$desc' and pv.`product_id`=p.`id` and pv.`varient_name`='$feature' order by p.`created_ondate` desc")or die(mysql_error());

//}
}
?>		
		<div id="content5_topbox1" style=" width:740px; height:30px;">
						<p style=" margin-top:8px; margin-left:10px; font-size:14px; font-family:AsapRegular; color:#000000;  width:200px; float:left;">
						<?php
						$count=mysql_num_rows($totalq);
						?>
						<?php echo $count?>  Products found
						</p>
						
												<div id="submenu-rightbox" style="width:40%;">
										<span class="text" style="font-weight:bold; float:left;">Sort By :</span>
												<select class="form" style="padding:4px; height:25px; width:212px;" name="selval" onchange="return getproduct(<?php echo $proid;?>,<?php echo $brandid;?>,'<?php echo $type; ?>',this.value);">
														<option>
																Select
														</option>
														<option value="low">
																Price low to high
														</option>
														<option value="high">
																Price high to low
														</option>
														<option value="arrival">
																Price New arrival
														</option>
												</select>
										</div>
								
</div>
<div style="width:750px;  height:1160px; float:left;  overflow:hidden;">
			<div style="width:780px;  height:1180px; float:left; overflow: scroll;">
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
							    <li class="itm hasOverlay unit size1of4 " style="list-style-type:none; margin-right:30px; width:26%; margin-left:15px;">
									<div class="content5smallbox imagecontainers imagecontainers2 newdiv" style="height:360px; margin-top:10px; margin-left:3px; text-align:center; width:175px; margin-top:20px;">
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
							   					<div style="height:220px; width:100%; float:left; text-align:center; margin-top:40px; text-align:center;">

							   							 <a href="oneproduct.php?idvalue=<?php echo $res['id']?>&idvalue1=<?php echo $pid;?>&bid1=<?php echo $bid;?>"><img src="../admin_new/inventory_management/<?php echo $res['image'];?>"  style="width:120px; height:205px; max-height:205px;" alt="<?php echo $res['alternate_val']; ?>"/>  </a>
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
