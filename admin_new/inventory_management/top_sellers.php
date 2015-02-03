<?php
ini_set("display_errors",1);
include_once("function.php");
?>
			<div id="content4_box" style="width:730px;">
						<div id="content4_top" style="width:730px;"><p style="font-weight:bold; margin-top:10px; margin-left:10px;">Top Sellers</p></div>
						<?php
						$q=mysql_query("select * from `product` where `status`=1 and `top_sellers`='1' limit 0,4");
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
						<div class="content4smallbox" style="height:auto; margin-left:11px; width:168px; text-align:center; margin-top: 0px;">
							 <a href="oneproduct.php?idvalue=<?php echo $r['id']?>">
							 <div style="width:166px;height:120px;float:left; text-align:center; margin-top:10px; border:1px solid #cccccc;">
								<img src="../admin_new/inventory_management//<?php echo $r['image'];?>"  style="width:100px; height:auto; padding-bottom:2px; padding-top: 10px;" />				
							</div>
							
							<div style=" width:166px;  height:auto; margin-top:5px; float:left; font-family:AsapRegular; text-align:center; font-weight:normal; font-size:12px; color: rgb(0, 75, 145);">
								<?php echo $r['product_name'];?>
							</div>
							<div style="width:166px; height:auto; float:left; font-weight:normal; font-family:AsapRegular;   margin-top:0px; color:rgb(51, 51, 51); display: none; ">
									<?php /*?><?php echo $r['description'];?><?php */?>
							</div>
							<?php 
							
							if($disc)
											{
															
																
																?>			
						
							
							<div style="width:166px; height:auto; float:left;   color:rgb(51, 51, 51); font-size:12px; margin-top: 0px; ">
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
															<div style="width:166px; height:20px; float:left;   color:rgb(51, 51, 51);  font-size:12px; margin-top: 0px;  ">
									Rs.<?php echo $r['price'];?>
							</div>	
																<?php
																
																}
																?>
																 <?php
                                                                         $result=mysql_query("select `product_id` from `review` where `product_id`='$r[id]' ") or die(mysql_error());
                                                                         $num_row=mysql_num_rows($result);
                                                                         $que_total=mysql_query("select ((sum(`rating`)/count(`id`))*20) as avg from `review` where `product_id`='$r[id]'") or die(mysql_error());
                                                                         $res_total=mysql_fetch_array($que_total);
                                                                         $col= $res_total['avg'];
                                                                         ?>
									 <div style="width:80px; height:17px; float:left; margin-top:0px;" >
							<div style="width:<?php echo $col;?>%; height: 17px; float:left; margin-left: 50px; background: #ffc108; text-align: center; ">
                                                                                     <img src="images/5stars.png"/>
						         </div>
									 </div>
							<div style=" width:166px;  height:auto; margin-top:12px;  float:left;  text-align:center;  ">

								<img src="images/cart1.png" style="width:90px; height: auto;">

							</div>
						</a>
						<?php
                                                                        if($r['newarrival']==1)
                                                                        {
                                                                            ?>
						<div style="width: 65px; height: 82px; position: absolute; z-index:99; background: url(images/special.png);">
							       
						</div>
						<?php
									}
									?>
						</div>
						
						
						<?php
						}
						?>
			</div>
			
			<!--start-->
			<div style="width:100%; height:auto; float:left; margin-top:20px;">
<div style="width:1040px; margin:auto;">
								<div id="content">
									<div style="width:1040px; height:auto; margin:auto;">
										<div id="content-left">
												<h1 class="head2">
														NEW & TRULY RICH
												</h1>
												<p class="text">
														Ekmatra brings to you its new imbuing classic collection with contemporary creativity.Our latest collection features a vibrant array of colours with a distinct sense of aesthetics.Keeping true to our values this handmade collection is for those who look beyond the mundane everyday apparel choices.
												</p>
										</div>
										<div id="content-right">
												
												<?php
						$q=mysql_query("select * from `product` where `status`=1 and `top_sellers`='1' limit 0,4");
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
														<div class="product-content">
												<img src="../admin_new/inventory_management//<?php echo $r['image'];?>"  style="width:100px; height:auto; padding-bottom:2px; padding-top: 10px;" />
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
												
						
										</div>
								</div>
							</div>
</div>
</div>
			<!--end-->
			
