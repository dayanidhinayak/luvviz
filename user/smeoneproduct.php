<?php
include_once("function.php");
$pid=$_GET['idvalue'];

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

<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
            
        <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
  <script src="alice-1362145177.js" type="text/javascript"></script>

<style>
#productname{
font-family:Arial, Helvetica, sans-serif;
font-size:18px; 
color:#000000;
font-weight:bold;
}

#productsubname{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:13.5px;
color:#333333;
margin-top:6px;
font-weight:bold;
}

.text{
font-family:Arial, Helvetica, sans-serif;
color:#333333;
line-height:1.2;
font-size:11px;
}
.buybutton{
width:180px; height:20px; float:left; margin-left:14px; margin-top:10px; border: 1px solid rgb(218, 124, 12);
background: -moz-linear-gradient(center top , rgb(250, 165, 26), rgb(244, 122, 32)) repeat scroll 0% 0% transparent; font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; font-size:22px; padding:10px;  text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3); border-radius: 4px 4px 4px 4px; box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2); text-align:center;
}
.buybutton:hover{
background:-moz-linear-gradient(center top , rgb(248, 142, 17), rgb(240, 96, 21)) repeat scroll 0% 0% transparent;}
</style>

<!-- script for dropdown -->
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>
<!-- end of script for dropdown -->
<script>
function checkpin()
{
var pin=document.getElementById('pin').value;
if(pin.length!=6)
{
alert("Not A valid Pin");
return false;
}

var pinval=pin.substr(0,3);
//alert(pinval);
if(pinval=='753' || pinval=='751')
{
//alert("thank you for shoping with us");
return true;
}
else
{

alert("We do not support delivery other than Bhubaneswar And Cuttack City");
return false;
}

}
</script>
<script>
function purchaseorder(productid)
{
$.ajax({
  url: 'smeshopping.php?id='+productid,
  success: function(result){
  window.location.href="smeshopping.php";

	}
	});


}
</script>

</head>

<body>
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>

<div id="topimgbox">
			<div id="topimgbox1"><img src="images/ShoppingBang_stripe.jpg" width="960" /></div>
</div>

<div id="contentbar" style="height:auto; min-height:500px; float:left;">
			<div style="width:960px; height:auto; min-height:500px; margin:auto; margin-top:10px; border:1px solid #CCCCCC;  border-radius:5px; -moz-border-radius:5px;">
						<div style="width:950px; height:auto; margin:10px; min-height:300px; margin-right:0px; float:left;">
						<?php
						
						$que=mysql_query("select * from `product` where `id`='$pid'");
						$res=mysql_fetch_array($que);
						?>
									<div style="width:350px; height:auto; float:left;">
									<img src="../admin_new/inventory_management/<?php echo $res['image'];?>" style="width:300px; height:auto; " alt="<?php echo $res['alternate_val']; ?>"/>
									</div>
									<div style="width:560px; height:300px; float:left; padding:10px;">
									<div style="height:50px; float:left; width:530px;">
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
									  <div style="width:550px; height:40px; float:left;">
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
									<div style="width:550px; height:20px; float:left; border-bottom:1px solid #CCCCCC; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
												1 Year Accidental Damage Protection (ADP) HP India Warranty and Free Transit Insurance.
									</div>
									<div style="width:550px; height:auto; min-height:50px; float:left; line-height:1.5; margin-bottom:10px; margin-top:10px;">
												<p style="font-size:11.5px; font-weight:100; color:#666666;"><?php echo $res['description']?>
												</p>
									</div>
									<div style="width:320px; height:100px; float:left;  line-height:1.6;  background:#009999; display:none;">
												<div style="width:320px; height:23px; float:left; border-bottom:1px solid #CCCCCC; margin-left:5px;">
															<?php
															$varient=mysql_query("select distinct(varient_name) from `product_varient` where `product_id`='$pid'");
															$res_varient=mysql_fetch_array($varient);
															?>
															 <p style="font-weight:bold; display:none;">
															 			Available <?php echo $res_varient['varient_name'];?>
															</p>
												</div>
												<div style="width:320px; height:23px; float:left; margin-left:5px;" >
															 <?php $value=mysql_query("select `description` from `product_varient` where `product_id`='$pid' and `varient_name`='$res_varient[varient_name]'");
														while($res_value=mysql_fetch_array($value))
														{
														?>
														<div style="width:73px; height:30px; float:left; margin-left:5px; margin-top:5px; background:<?php echo $res_value['description'];?>">				
														</div>
														<?php
														}
														?>
								`				</div>	
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
							<div style="width:320px; height:80px; float:left; "></div>
							  		  
						  </div>
						 
				</div>
								<div style="height:132px; width:945px; float:left; margin-top:14px;">
									<div style="width:750px; height:132px; float:left; background:#efefef;">
										<div style="width:750px; height:90px; float:left; ">
											<div style="width:248px; height:90px; float:left; border-right:2px solid #FFFFFF;">
												<div class="buybutton"  onclick="return purchaseorder('<?php echo $pid;?>');">
													Buy This Now
												</div>
												<div style="width:238px; float:left; text-align:center; padding:5px; ">
													<p style="color:rgb(102, 102, 102); font-size:13px;">with an option to pay Cash on Delivery</p>
												</div>
											</div>
											<div style="width:248px; height:90px; float:left;  border-right:2px solid #FFFFFF;">
												<p style="padding-left:15px; margin-top:10px;">Check delivery information</p>
												<table style="width:200px; float:left; margin-left:15px; margin-top:5px; " >
													<tr>
														<td><input type="text" name="pin" id="pin"  style="width:100px; padding:4px 3px; border:1px solid rgb(204, 204, 204);"   /></td>
														<td><input type="button" name="submit" value="Check" onclick="return checkpin();" style="padding: 4px 14px 7px;border:none; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);
border-radius: 4px 4px 4px 4px;box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);font-size: 13px; background: -moz-linear-gradient(center top , rgb(56, 129, 167), rgb(36, 90, 119)) repeat scroll 0% 0% transparent; color:#FFFFFF;" /></td>
													</tr>
												</table>
											</div>
											<div style="width:248px; height:90px; float:left;">
												<p style="padding-left:15px; margin-top:10px;">
													Seller: <span style="color:rgb(0, 75, 145);">WS Retail</span><br/>
													<img src="images/star1.png" style="float:left; margin-top:3px;" /><img src="images/star1.png" style="float:left; margin-top:3px;" /><img src="images/star1.png" style="float:left; margin-top:3px;" /><img src="images/star1.png" style="float:left; margin-top:3px;" />81254 Ratings <br/>
													30 Day Replacement Guarantee <span style="color:rgb(0, 75, 145);">[?]</span>
												</p>
											</div>
										</div>
										<div style="width:750px; float:left; border-top:1px solid #cccccc;border-bottom:1px solid #ffffff;">
										</div>
										<div style="width:750px; float:left; height:12px;">
											<p style="color: rgb(102, 102, 102); padding:10px;">
												<img src="images/phone.png" style="float:left; margin-right:5px;"/>
												You may also call us at 1800 420 1111 to order (toll free). 
											</p>
										</div>
									</div>
									<?php
									$offervalue=$pid%8;
									$imagevalue=$offervalue.".jpg";
									?>
									
									
									<div style="width:180px; height:132px; float:left; margin-left:10px; background:#00CCFF;">
											<img src="http://50.56.237.229/cake/admin_new/inventory_management/img/offer/<?php echo $imagevalue?>" />
									</div>
								</div>
								</div>
						   </div>
					</div>				
				<div style="width:230px; float:left; height:500px; padding:10px; margin-right:0px; float:left; background:#efefef; display:none;">
										<?php if($disc)
											{
										?>
							<div id="productname">Price
									<?php 
									echo "<strike style='font-size:10px;'>".number_format($res['price'],2)."</strike>&nbsp;&nbsp;";
									echo number_format($finalval,2);?>INR
							</div>
							<?php 
							}
																else
																{
																?>
															<div id="productname">
									Price<?php echo $res['price'];?>INR
							</div>	
																<?php
																}
																?>		
									<div style="width:200px; height:25px; padding-top:5px; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; background:#ffffff; border-radius:5px; -moz-border-radius:5px; margin-top:20px; float:left;">
												&nbsp; Shipping Cost : 50 INR
									</div>
									<div style="width:230px; height:200px; background:#FFFFFF; float:left; margin-top:20px;">
									<?php 
	$q=mysql_query("SELECT distinct `varient_name` from `product_varient` where `product_id`='$pid'");
	while($r=mysql_fetch_array($q))
	{
	?>
	<div align="center" style="margin-top:8px;margin-bottom:8px;">
	<?php echo $r['varient_name'];?>:
	<select name='color'>
            <option value="">--- Select ---</option>
			<?php
  // echo "SELECT `description` FROM `product_varient` WHERE `product_id`='12' and `varient_name`='$r[varient_name]'";             
 $list=mysql_query("SELECT `description` FROM `product_varient` WHERE `product_id`='$pid' and `varient_name`='$r[varient_name]'") or die(mysql_error());
			 while($row_list=mysql_fetch_array($list))
			 { 
			 
                ?>
					<option value="<?php echo $row_list['description']; ?>"><?php echo $row_list['description']; ?>
                    </option>
                <?php
                }
				?>
            </select>
	
	</div>
	<?php } ?>
	<a href="shopping.php?id=<?php echo $pid;?>"><img src="images/buy.jpeg" style="width:220px; height:auto;" /></a>
									
									
									
												<!--<div id="productsubname">
															Available Sizes
												</div>
												<select style="width:200px; height:30px; margin-left:10px; margin-top:10px; font-size:16px;">
													<option class="wise"> Option1 </option>
													<option class="not-so-wise"> Option 2 </option>
													<option class="meh"> Option 3 </option>
												</select>
												<img src="images/buy.jpeg" style="width:220px; height:auto;" />
									</div>
						</div>-->
			</div>
			
   </div>
</div>
				<div style="width:100%; min-height:200px; height:auto; float:left;">
						<div style="width:950px; height:auto; margin:auto; border:1px solid #CCCCCC; border-radius:5px; -moz-border-radius:5px; padding:5px;">
						<h3 style="font-family:Arial, Helvetica, sans-serif; font-size:16px;"> Product Description</h3>
						<br />
						  <?php 
						  			echo $res['long_desc'];
                           ?>
						 </div>
				</div>
<div style="float:left;">
</div>

</div>
</div>
<!--<div id="content4">
<?php //include_once("../admin_new/inventory_management/related.php");?>
</div>-->
<?php include_once('bottombar.php');?>	
</body>
</html>
