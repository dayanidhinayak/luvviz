<?php

ini_set("display_errors",1);

include_once("function.php");


$q=mysql_query("select * from `category` where `status`='1' and `top_seller_status`='1' ORDER BY `priority`  limit 0,$menulimitvalue");

								while($res=mysql_fetch_array($q))
								{
								?>
								<div id="content4_box" style="width:730px; margin-top: 15px;">

						<div id="content4_top" style="width:730px;"><p style="font-weight:bold; margin-top:10px; margin-left:10px;"><?php echo $res['category_name']?></p></div>
						<?php
							
						$catid=$res['id'];
							
						
								$totalq=mysql_query("select * from `topseller` where `categoryid`='$catid'  limit 0,4");
								//echo "select * from `topseller` where `categoryid`='$catid'  limit 0,4";
								while($restotalq=mysql_fetch_array($totalq))
									{
						

						 $date=date("Y-m-d");

							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$restotalq[productid]' and  `from_date` <= '$date'

and  `to_date` >= '$date' ");

							$rr1=mysql_fetch_array($qq1);

							
							$qq2=mysql_query("select * from `product` where `id` ='$restotalq[productid]' and `status`='1'");
							//echo "select * from `product` where `id` like '%|$restotalq[productid]]|%' and `status`='1'";
							
							$rr2=mysql_fetch_array($qq2);
							

							$disc=$rr1['discount'];

							$finalval=$rr2['price']*(1-$disc/100);

						

						?>

						

						<div class="content4smallbox" style="height:auto; margin-left:11px; width:168px; text-align:center; margin-top: 0px;">

							 <a href="oneproduct.php?idvalue=<?php echo $restotalq['productid']?>">

							 <div style="width:166px;height:120px;float:left; text-align:center; margin-top:10px; border: 1px solid #ccc;">

								<img src="../admin_new/inventory_management//<?php echo $rr2['image'];?>"  style="width:100px; height:auto; padding-bottom:2px; padding-top: 10px;" />				

							</div>

							

							<div style=" width:166px;  height:auto; margin-top:10px;  float:left;  text-align:center; font-weight:normal; font-size:12px; color: rgb(0, 75, 145);">

								<?php echo $rr2['product_name'];?>

							</div>

							<div style="width:166px; height:auto; float:left; font-weight:normal;    margin-top:0px; color:rgb(51, 51, 51); display: none; ">

									<?php /*?><?php echo $r['description'];?><?php */?>

							</div>
							

							<?php 

							

							if($disc)

											{

															

																

																?>			

						

							

							<div style="width:166px; height:auto; float:left;   color:rgb(51, 51, 51); font-size:12px; margin-top: 0px; ">

									<span style="color:red;">Rs.</span> <?php 

									echo "<strike style='font-size:12px; color:red;'>".number_format($rr2['price'],2)."</strike>&nbsp;&nbsp;";

										?>
									<br/>
									Rs.<?php

									echo "<span style='font-size:12px;'>".number_format($finalval,2)."</span>";?>

							</div>
							

							<?php 

							

							}

																else

																{

																?>

															<div style="width:166px; height:20px; float:left;   color:rgb(51, 51, 51); font-size:12px; margin-top: 0px; ">

									Rs.<?php echo $rr2['price'];?>

							</div>	

																<?php

																

																}

																?>		

							<?php
                                                                         $result=mysql_query("select `product_id` from `review` where `product_id`='$restotalq[productid]' ") or die(mysql_error());
                                                                         $num_row=mysql_num_rows($result);
                                                                         $que_total=mysql_query("select ((sum(`rating`)/count(`id`))*20) as avg from `review` where `product_id`='$restotalq[productid]'") or die(mysql_error());
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

						</div>
						</a>
						

						

						

						<?php

						}
						

						?>

			</div>
			
			<?php
			}
					
						?>
