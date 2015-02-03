<?php
ini_set("dispaly_errors",0);
include_once("function.php");
date_default_timezone_set('Asia/calcutta');
?>
<html>
<head>
<link href="style1.css" rel="stylesheet" type="text/css" media="screen" />


</head>
<body>

<!--bottom slider start-->
								<div id="content2">
										<div id="ca-container" class="ca-container" style="height:300px;">
												<div class="ca-wrapper">
						<?php
						//$que_prod=mysql_query("SELECT count(`product_id`),`product_id` FROM `temp_billinfo` WHERE `product_id` !='0' group by `product_id` order by count(`product_id`) desc limit 0,4");
						$que_prod=mysql_query("SELECT count(`product_id`),`product_id` FROM `temp_billinfo` WHERE `product_id` !='0' group by `product_id` order by count(`product_id`)");
	while($rre=mysql_fetch_array($que_prod))
	{
		$q1=mysql_query("select * from `product` where `id`='$rre[product_id]' and `status`='1'");
		$r1=mysql_fetch_array($q1);				
		$product_description=substr($r1['description'], 0, 50);
		$qm=mysql_query("select `brand_name` from `brand` where `id`='$r1[brand_id]'");
		$rm=mysql_fetch_array($qm);	
		 $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$r1[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							
							$disc=$rr1['discount'];
							$finalval=$r1['price']*(1-$disc/100);
							$num=mysql_numrows($q1);
		if($num>0)
		{
					?>
 <a href="oneproduct.php?idvalue=<?php echo $r1['id'];?>">

	<div class="ca-item ca-item-1" style="width:150px; left:15px; ">

<div class="ca-item-main" style="left:10px; top:15px;">
																		  		<div class="product-box2">
																							    			<div class="product-content2" style="height:200px;">

																																					  				<!--<img src="images/img1.jpg" style="width:100%;"/>-->
<img src="../admin_new/inventory_management/<?php echo $r1['image']?>"  align="bottom" style="margin-top:0px; width:131px; height:200px;" class="itm-img" alt="<?php echo $r1['alternate_val'];?>"/>

																												   			</div>
																				  			<div class="product-text2">
																						  				<!--brings to you its new imbuing classic collection.-->
		<?php  echo $rm['brand_name'];?><br/><?php echo $r1['product_name']?>
		</div>
			<?php 
							
							if($disc)
											{
															
																
																?>																					  			<div class="price2">
																						 				Rs.<?php 
									echo "<strike style='color:red;font-size:10px;'>".number_format($r1['price'],2)."</strike>&nbsp;&nbsp;";
												
									echo "<span style='font-size:10px;'>" .number_format($finalval,2)."</span>";?>
																				 			</div>
<?php
}
else
{
?>
		<div class="price2">
			Rs.<?php echo $r1['price'];?>
		</div>
<?php
}
?>
																		 	</div>
</div>
</a>
													</div>
<?php
}}			
?>

													

												
											</div>
									</div>
							</div>
									
									
								<!--</div>
						</div>
				</div>
		</div>
</div>-->
<!--bottom slider end-->
</body>
</html>




