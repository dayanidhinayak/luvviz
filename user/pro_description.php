<?php 
include_once("function.php");
$valuewert=$_GET['val'];

$quegh=mysql_query("select * from `product` where `id`='$valuewert'")or die(mysql_error());
$resgh=mysql_fetch_array($quegh);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::MAPKART:::...</title>
<link rel="stylesheet" href="style.css" type="text/css" media="screen"  />
</head>

<body style="background:#FFFFFF;">
									
									<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>
<div style="width:100%; height:400px;float:left; margin-top:15px;">
	<div style="width:958px; height:400px; margin:auto; border: 1px solid #efefef;">
    
                                                                        <div style="width:400px; height:auto; float:left; text-align: center; margin-top: 10px;" >
                                                                                
									    <img src="../admin_new/inventory_management/<?php echo $resgh['image'];?>"   style="width:300px; height:auto; max-height:300px;" alt="<?php echo $resgh['alternate_val']; ?>"/>
									</div>									 
    
			<div style="width:400px; height:300px; float:left; padding:10px;">
				<div style="height:50px; float:left; width:530px;">
					<div id="productsubname" style="font-size:25px;">
									<?php
$q1=mysql_query("select * from `brand` where `id`='$resgh[brand_id]'");
$r1=mysql_fetch_array($q1);
echo $r1['brand_name'];
?>
					</div>
									  <div id="productname" style="font-size:26px; margin-top:10px; color:#000000;">
												<?php echo $resgh['product_name']?>
									  </div>
									
									<div style="width:550px; height:auto; min-height:50px; float:left; line-height:1.5; margin-bottom:10px; margin-top:10px;">
												<p style="font-size:11.5px; font-weight:100; color:#666666;"><?php echo $resgh['description']?>
												</p>
									</div>
									
		   							  <div style="width:560px; height:60px; float:left;  line-height:1.6; margin-top:10px;">
									  <?php $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$resgh[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							$disc=$rr1['discount'];
							$finalval=$resgh['price']*(1-$disc/100);
							if($disc)
										{
							?>
							<div style="height:60px; width:170px; float:left; border-right:1px solid #efefef;">
									<?php 
									echo "<strike style='font-size:15px; margin-left:90px; foint-weight:bold;'>".number_format($resgh['price'],2)."</strike><br/>";
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
									<h1 style="font-weight:normal; font-size: 20px;">Rs. <?php echo $resgh['price']?></h1>
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
														<span style="font-weight:bold; color:#009933;">In stock
														</span>
														<br />
														 Replacement guarantee</span><br />
														<span style="color:#FF0000; font-size:10px; margin-top:4px;">
																	Conditions Apply
														</span>
											</p>
							</div>
				</div>
				</div>
			</div>
	</div>
</div>

									    <?php include_once('bottombar.php');?>
						
</body>
</html>
