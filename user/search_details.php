<?php
include_once("function.php");
$pid=$_GET['q'];
?>



<div style="width:650px; height:auto; margin:10px; font-family:Arial, Helvetica, sans-serif;  margin-right:0px; float:left;">
						<?php
						
						$que=mysql_query("select * from `product` where `id`='$pid'");
						$res=mysql_fetch_array($que);
						?>
									<div style="width:200px; height:auto; float:left;">
									<img src="../admin_new/inventory_management/<?php echo $res['image'];?>" style="width:180px; height:auto; " alt="<?php echo $res['alternate_val']; ?>"/>
									</div>
								  <div style="width:430px; height:auto; float:left;  padding:10px; ">
								  		<div id="productsubname" style="font-size:25px;">
									<?php
$q1=mysql_query("select * from `brand` where `id`='$res[brand_id]'");
$r1=mysql_fetch_array($q1);
echo $r1['brand_name'];
?>
									  </div>
								  		  <div id="productname" style="font-size:12px; margin-top:2px; color:#333333;">
												<?php echo $res['product_name']?>
									  </div>
									  <div style="width:430px; height:40px; float:left;">
									  <div style="width:40px; height:40px; float:left; font-family:Arial, Helvetica, sans-serif; color:rgb(0, 75, 145); font-size:12px;">
												Rating &nbsp; 
									</div>
									<div style="width:80px; height:30px; float:left; margin-top:5px;">
									<div style="width:80px; height:13px; float:left;">
												<div style="background:#FFCC00; height:13px; width:<?php echo $res['rating']*20 ?>%;">
												</div>
									</div>
									<div style="width:80px; height:13px; float:left; margin-top:-13px;">
												<img src="images/rating.png" width="80px" height="13px;"/>
									</div>
									</div>
									<div style="float:left; color:rgb(0, 75, 145); font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:10px;">
												| &nbsp;Submit a Review &nbsp; |
									</div>
									<div style="float:left; color:rgb(0, 75, 145); font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:10px;">
												12 Reviews Available
									</div>
									</div>
									<div style="width:430px; height:39px; float:left; border-bottom:1px solid #CCCCCC; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
												1 Year Accidental Damage Protection (ADP) HP India Warranty and Free <br/>Transit Insurance.
									</div>
									<div style="width:430px; height:auto; min-height:50px; float:left; line-height:1.5; margin-bottom:10px; margin-top:10px;">
												<p style="font-size:11.5px; font-weight:100; color:#666666;"><?php echo $res['description'];?>
												</p>
									</div>
									
								  </div>
								  
								  <div style="width:560px; height:60px; float:left;  line-height:1.6; margin-top:10px;">
									  <?php $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$res[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							$disc=$rr1['discount'];
							$finalval=$res['price']*(1-$disc/100);
							if($disc)
										{
							?>
							<div style="height:60px; width:170px; float:left; border-right:1px solid #efefef;">
									<?php 
									echo "<strike style='font-size:15px; margin-left:90px; foint-weight:bold;'>".number_format($res['price'],2)."</strike><br/>";
									?>
									<span style="float:left; font-size:22px; color:#C81C09; font-weight:bold;">
											<img src="images/smiley.gif" width="20px" height="20px" />
											Rs.
									</span>
									<?php
									echo " <h1 style='font-weight:normal; float:left; color:#C81C09; margin-top:5px;'>".number_format($finalval,2)."</h1>";?>
							</div>
							<?php 
							}
							else
							{
							?>
							<div style="height:60px; width:150px; float:left; border-right:1px solid #cccccc; padding-left:10px;">
									<h1 style="font-weight:normal;">Rs. <?php echo $res['price']?></h1>
							</div>	
							<?php
							}
							?>		
							<div style="height:60px; width:190px; float:left; padding-left:15px; border-right:1px solid #cccccc;">
											<p style="font-size:11px;"> <span style="font-size:12px; font-weight:bold; ">
														Delivered in 2-5 business days</span><br />
														(Delivery time may vary on shipping address)
											</p>
							</div>
							<div style="height:60px; width:170px; float:left; padding-left:10px;">
											<p style="font-size:11px;"> <span style="font-size:12px;">
														<span style="font-weight:bold; color:#009933;">Mapkart Guarantee
														</span>
														<br />
														30 day replacement guarantee</span><br />
														<span style="color:#FF0000; font-size:10px; margin-top:4px;">
																	Conditions Apply
														</span>
											</p>
							</div>
				</div>
</div>