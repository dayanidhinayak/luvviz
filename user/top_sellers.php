<?php
ini_set("dispaly_errors",1);
include_once("function.php");
?>

			<div id="content4_box">
						<div id="content4_top"><p style="font-weight:bold; margin-top:10px; margin-left:10px;">Top Sellers</p></div>
						
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
						
						<div class="content4smallbox" style="height:auto; margin-left:10px; width:180px; text-align:center;">
							 <a href="oneproduct.php?idvalue=<?php echo $r['id']?>">
							 <div style="width:180px;height:130px;float:left; text-align:center;">
								<img src="../admin_new/inventory_management//<?php echo $r['image'];?>"  style="width:100px; height:auto; padding-bottom:2px;" />				</div>
						
							<div style=" width:180px; height:20px; margin-top:20px;  float:left; font-family:AsapRegular; text-align:center; font-weight:bold; font-family:ProximaNova-Regular; color:#FF0000; background:#0099FF;  ">
								<?php echo $r_brand['brand_name'];?>
							</div>
							<div style=" width:180px;  height:20px; margin-top:5px; float:left; font-family:AsapRegular; text-align:center; font-weight:normal; font-size:12px; color: rgb(0, 75, 145);">
								<?php echo $r['product_name'];?>
							</div>
							<div style="width:180px; height:20px; float:left; font-weight:normal; font-family:AsapRegular;   margin-top:0px; color:rgb(51, 51, 51); ">
									<?php echo $r['description'];?>
							</div>
							<?php 
							
							if($disc)
											{
															
																
																?>			
						
							
							<div style="width:180px; height:20px; float:left;font-weight:bold;    color:rgb(51, 51, 51); font-size:12px;">
							  <?php 
									echo "<strike style='font-size:10px;'>".number_format($r['price'],2)."</strike>&nbsp;&nbsp;";
												
									echo number_format($finalval,2);?>
							</div>
							<?php 
							
							}
																else
																{
																?>
															<div style="width:180px; height:20px; float:left; font-weight:bold;  color:rgb(51, 51, 51); font-family:AsapRegular; font-size:12px; ">
									<?php echo $r['price'];?>
							</div>	
																<?php
																
																}
																?>		
							
						</a>
						</div>
						
						
						<?php
						}
						?>
			</div>
