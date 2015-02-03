
<div style="float:left; width:900px; height: auto;">
<ul>
						<?php
						
						
						
						$que_prod=mysql_query("SELECT `releated_pro_id` FROM `product` WHERE `id` ='$pid'  ");
  						$rre=mysql_fetch_array($que_prod);
						
						$relatedid=$rre['releated_pro_id'];
						
						
						
						$related=explode('|',$relatedid);
						
						foreach($related as $rel)
						{
												if($rel!='')
												{
																				
						$q1=mysql_query("select * from `product` where `id`='$rel' and `status`='1'");
						$r1=mysql_fetch_array($q1);				
						//$product_description=substr($r1['description'], 0, 50);
						
						$qm=mysql_query("select `brand_name` from `brand` where `id`='$r1[brand_id]'");
						//echo "select `brand_name` from `brand` where `id`='$r1[brand_id]'";
						$rm=mysql_fetch_array($qm);	
		
		
							 $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$r1[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							
							$disc=$rr1['discount'];
							$finalval=$r1['price']*(1-$disc/100);
							
							if($r1['product_name']!='')
							{
		
					?>
						
						 <a href="oneproduct.php?idvalue=<?php echo $rel; ?>"><li class="itm hasOverlay unit size1of4 " style="list-style-type:none; height:250px;">
							  
							   			<div class="content5smallbox" style="border: 1px solid #efefef;height:auto;  margin-left:5px; margin-top:7px; text-align:center; width:180px;">
										
										 <!-- Could not find the End of this div even on original document-->
												
                                                                        <?php
                                                                        if($r1['newarrival']==1)
                                                                        {
                                                                            ?>
                                                                      
                                                                        <div style="width: 65px; height: 82px; position: absolute; z-index:99; top:10px; background: url(images/special.png);">
							       
                                                                        </div>
                                                                        <?php
                                                                        }
                                                                        ?>
										
										
											<div style="width:158px; height:155px; margin-left:5px;">
													<img src="../admin_new/inventory_management/<?php echo $r1['image']?>"  align="bottom" style="width:140px; height:auto; margin-top:35px; width:120px; height:auto; max-height:120px;" class="itm-img" alt="<?php echo $r1['alternate_val'];?>"/>
											</div>
													<p style="height:auto; float:left;">
													
																<div style="font-family:ProximaNova-Regular; font-size:12px; color:#000000; font-weight:bold; height:auto; float:left; text-align:center; width:170px;">
																<div style="width:170px; height:30px; float:left; margin-top:5px;font-family:ProximaNova-Regular;">
																
																	<?php  echo $rm['brand_name'];?>
																</div>
																		<div style=" color: #0f5da6; width:170px; height:auto; float:left; min-height:50px; max-height:70px; font-weight:normal; font-family:ProximaNova-Regular; font-size:12px;">	
																			<?php echo $r1['product_name']?>
																		</div>
																		<div style="font-family:ProximaNova-Regular; font-size:12px; color:#333333;">
																					<?php /*?><?php echo $product_description;?><?php */?>
																		</div>
																		
																		
																		
																		
																			<?php 
							
							if($disc)
											{
															
																
																?>			
						
							
							<div style="width:170px; height:20px; float:left;">
									Rs.<?php 
									echo "<strike style='color:red;font-size:10px;'>".number_format($r1['price'],2)."</strike>&nbsp;&nbsp;";
									?>
									Rs.<?php
												
									echo "<span style='color:black;'>" .number_format($finalval,2)."</span>";?>
							</div>
							<?php 
							
							}
																else
																{
																?>
															<div style="width:170px; height:20px; float:left;">
									Rs.<?php echo $r1['price'];?>
							</div>	
																<?php
																
																}
																?>		
																		
																		
																		
																		
																		
																		
																		
																		
																		
																<!--<div style="width:170px; height:20px; float:left;">
																			<?php echo $r1['price']?>
																</div>-->
																</div>
														</p>
											</div>
										
								
							   </li></a>
							   
							   <?php
							   }
							   }
						}
						
							   ?>
							   
				 
				 
				 </ul>
</div>
