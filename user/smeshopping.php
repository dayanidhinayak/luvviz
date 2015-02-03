<?php 
include_once("function.php");
$xid=$_GET['id'];
$xbillid=$_SESSION['billid'];
if($xid!="")
{

$xque=mysql_query("select * from `product` where `id`='$xid'") or die(mysql_error());
	$xres=mysql_fetch_array($xque);
   
	 $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$xid' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							
							$disc=$rr1['discount'];
							$finalval=$xres['price']*(1-$disc/100);
	
	
	$xrecr_price=$xres['recurring_price'];
	if($disc)
											{
											$xprice=$finalval;
											}
											else
											{
		
		$xprice=$xres['price'];
		}
		
	$xpid=$xid;
	
	
	
	
	
	

//echo "select * from `temp_billinfo` where `bill_id`='$billid' and `product_id`='$pid'";
$xque1=mysql_query("select * from `temp_billinfo` where `bill_id`='$xbillid' and `product_id`='$xpid'");
$xcnt=mysql_num_rows($xque1);
//echo $cnt;


	if($xcnt==0)
	{
	
	$xqty=2;

	

	
        mysql_query("insert into `temp_billinfo` set `bill_id`='$xbillid',`product_id`='$xpid',`quantity`='$xqty',
	`tot_price`='$xprice',`recurrent_price`='$xrecr_price'");
}

	
	else{
	
	
	$xr=mysql_fetch_array($xque1);

	$xqty=$xr['quantity']+1;

	$xprice1=$xr['tot_price']+$xprice;
	
	$xr_price=$xrecr_price*$xqty;
	

$xqueu= "update `temp_billinfo` set `quantity`='$xqty',`tot_price`='$xprice1',`recurrent_price`='$xr_price' where `bill_id`='$xbillid' and 
	`product_id`='$xpid'";
mysql_query($xqueu)or die(mysql_error().'error');
//echo $xqueu;
	}
	
}

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
<script>
$(document).ready(function(){

 $(".detailsval").click(function() {
 
  var answer = confirm("Are you sure?");
if (answer) {

var id=$(this).parent().parent().parent().attr('id');
  
 $(this).parent().parent().parent().remove();
 
 												$.ajax({
													  url: 'remove_order.php?product_id='+id,
													   success: function (data) {
													   window.location.href="smeshopping.php";
						
															    },
												
														
													 });
 
 }else{
}
 });
 
 });

</script>


  <script>
 $(document).ready(function(){

 $(".pluss").click(function() { 
  
  var id=$(this).parent().find('span').html();
  
 													 $.ajax({
													  url: 'shopping.php?id='+id,
													  success: function(result){
													  window.location.href="smeshopping.php";
															    },
												
														
													 });
  
 
  
  });
  
  $(".minuss").click(function() { 
  
  var id=$(this).parent().find('span').html();
  
 												 $.ajax({
													  url: 'minus.php?id='+id,
													  success: function(result){
													  window.location.href="smeshopping.php";
															    },
												
														
													 });
  
  
  });
  
  
 });
  
  </script>   
  
  
 
</head>

<body>
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>


  </div>
  </div>
  </div>
<div id="contentbar" style="height:auto;">
  <div id="contentbar_box" style="height:auto;"></div>
</div>



<div id="content6" style="height:auto;">
			<div id="content7box" style="height:auto;">
					<div id="shoppingtop"></div>
			<div style="height:50px; width:960px; float:left; margin-top:10px;">
						<div class="botton1" style="background:#f9f9f9;"><a href="index.php">Continue Shopping</a></div>
						<div style="float:left; margin-left:210px;"><h2 style="margin-top:0px; color:#666666;">Shopping cart</h2></div>
						<?php
						$qq12=mysql_query("select * from `temp_billinfo` where `bill_id`='$_SESSION[billid]'");
						$rr12=mysql_num_rows($qq12);
						if($rr12!=0)
						{
						?>
						<div class="botton1" style=" float:right; color:#FFFFFF; font-weight:bold; "><a href="checkout.php">Order Now <img src="images/shopping.png" style="margin-left:5px;"  /></a></div>
						<?php
						}
						else
						{
						?>
						<div class="botton1" style="background:#f9f9f9;margin-left:5px; float:right;"><a href="index.php">Continue Shopping</a></div>
						<?php
						}
						?>
			</div>

<div id="content5" >
			<div id="content5_box"  >
						<div id="content5_box1" style="margin-left:0px; width:960px; height:auto; margin-top:0px;">
									<div id="content5_topbox1" style="width:958px; background:#f9f9f9; height:auto; " >
												<div class="shoppingheadtext">Item Description</div>
												<div class="shoppingheadtext"> 	Quantity</div>
												<div class="shoppingheadtext">Estimated Delivery </div>
												<div class="shoppingheadtext" style="text-align:right;">Total Price</div>
									</div>
									<?php 
									$tax=0;
									$xsum=0;
									$xq_bill=mysql_query("select  p.*,t.`tot_price`,t.`quantity` from `temp_billinfo` t,`product` p where t.`bill_id`='$xbillid' and p.`id`=t.`product_id`");	
while($xr_bill=mysql_fetch_array($xq_bill))
{
	 $xsum+=$xr_bill['tot_price'];
	 $tax+=	$xr_bill['tot_price']*($xr_bill['tax_value']/100);
	 $pid= $xr_bill['id'];				
									?>
									
									<div id="<?php echo $pid ?>" style="width:958px; border-bottom:1px #999999 solid;  border-left:1px #999999 solid; border-right:1px #999999 solid;  float:left; height:auto;">
									<div class="content5smallbox" style="height:auto; width:290px; line-height:1.5; margin-top:0px; margin-left:10px; ">
										<div style="float:left; width:50px; height:auto;">
											<p style="font-weight:bold; margin-top:20px;"><img src="../admin_new/inventory_management/<?php echo $xr_bill['image'];?>"  style="margin-top:0px; margin-right:8px; float:left; " height="50" width="50" alt="<?php echo $xr_bill['alternate_val']; ?>"/> </p></div>
									
<div style="float:left;width:230px; margin-left:10px;">

 <p style=" font-weight:bold;margin-top:20px;"><?php echo $xr_bill['product_name'];?><br/><?php /*?><?php echo $xr_bill['description']; ?> <?php */?><span style="font-weight:normal;"><br/>Size 6<br /> Color<br /></span></p>
</div> </div>



<div class="content5smallbox" style="height:130px; width:150px; line-height:1.5; margin-top:0px; margin-left:0px; ">
 <!-- <select style="margin-top:20px;" name="qty">
                                    <option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
</select><br />-->
<div><input type="button" name="plusval" class="pluss" value="+" /><span style="display:none;" class="getprodid"><?php echo $pid ?></span></div>
<div><input type="button" name="minusval" class="minuss" value="-" /><span style="display:none;"><?php echo $pid ?></span></div>
<p style=" margin-top:20px; background:#E2F8FE;">&nbsp;&nbsp; <?php echo $xr_bill['quantity'];?><img src="images/shoppinhimg3.png" style="margin-left:15px; margin-right:3px;" class="detailsval" /> Remove</p>

</div>



<div class="content5smallbox" style="height:120px; width:100px; line-height:1.5;  margin-left:70px; margin-top:0px; ">
 
<p style="margin-top:20px;">2-5 days </p>

</div>



<div class="content5smallbox" style="height:130px; width:100px; line-height:1.5; float:left;  margin-left:200px; margin-top:0px; ">
 
<p style="margin-top:20px; text-align:center;"><?php echo $xr_bill['tot_price'];?></p>

</div>


									
						</div>
						
						<?php } 
						$final_value=$xsum+$tax;
						?>
			</div>
</div>
</div>



<div id="content5" style="height:auto;">
			<div id="content5_box" style="border:none; ">
			  <div id="content5_box1" style="margin-left:0px; width:960px; height:200px; margin-top:0px; background:#f9f9f9;
			   border:1px solid #999999;">
				<div id="content5_topbox1" style="width:960px; border:none;  height:40px; border-bottom:none; " ><p style="font-weight:bold; padding:8px;">
				<img src="images/shoppinhimg5.png" style="float:left; margin-right:8px; margin-left:10px;" />Please note that products with different delivery times may be shipped separately. </p></div>
									<div class="content5smallbox" style="height:130px; width:700px; float:left; margin-top:8px; line-height:1.5; 
									 background:#FFFFFF; border:1px #CCCCCC solid; ">
									 				<div class="content5smallbox" style="height:100px; width:250px; margin-top:15px; line-height:1.5; border-right:1px solid #CCCCCC;  "><p style="font-weight:bold; margin-left:20px;"> Payment<br /><img src="images/img10.jpg" style=" float:left; margin-right:6px;" />
													
													<img src="images/visa.png" style=" float:left; margin-right:6px; " />
													<img src="images/netbanking.png" style=" float:left; margin-right:6px; " />
													</p>
							 				</div>
									  <div class="content5smallbox" style="height:100px;  margin-left:10px; 
									  width:100px; line-height:1.5;   
									  margin-top:15px; margin-left:0px; ">
  <p style="font-weight:bold; margin-left:8px;">Security<br /><img src="images/shopping9.png" /></p>

</div>


<div class="content5smallbox" style="height:100px; width:100px; border-right:1px solid #CCCCCC; line-height:1.5; margin-top:10px margin-left:15px; ">
  <p style="font-weight:bold; ">Security<br /><img src="images/shoppimgimg12.jpg" /></p>

</div>



<div class="content5smallbox" style="height:auto; float:left; width:150px; line-height:1.2;   margin-top:15px; margin-left:10px; ">
  <p ><span style="font-weight:bold;">Voucher</span><br />If you have a voucher, add here.

Add Voucher </p>

</div>
              </div>

<div style="width:220px; height:auto; float:left;  text-align:right;">
<p style="font-weight:bold; font-size:13px;">Subtotal &nbsp; &nbsp; &nbsp;Rs. <?php echo $xsum;?> </p>	
<p style="font-weight:bold; font-size:13px;">Tax Amount &nbsp; &nbsp; &nbsp;Rs. <?php echo $tax;?> </p>
<p style="font-weight:bold; font-size:13px;">Shipping Charges 	
 &nbsp; &nbsp; &nbsp;<span style="font-weight:normal; color:#009966;">Free</span></p>	
<p style="font-weight:bold;">Total Order Amount 	
&nbsp; &nbsp; &nbsp;<?php echo $final_value;?><br /><span style="font-weight:normal; font-size:10px;">VAT incl</span> </p>	

</div>	

</div>

<div id="shoppimhbottom" >
			<div class="botton1" style="background:#f9f9f9;"><a href="index.php">Continue Shopping</a></div>
			<?php
			if($rr12!=0)
						{
						?>
						<div class="botton1" style=" float:right; color:#FFFFFF; font-weight:bold; "><a href="checkout.php">Order Now <img src="images/shopping.png" style="margin-left:5px;"  /></a></div>
						<?php
						}
						else
						{
						?>
						<div class="botton1" style="background:#f9f9f9;margin-left:5px; float:right;"><a href="index.php">Continue Shopping</a></div>
						<?php
						}
						?>
			
	
</div>

			
</div>			
		
  </div>
</div>			  

<div id="content7" style="margin-top:40px; margin-left:30px;">
				<div id="content7box">
							<div class="content7box1">
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left:-40px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Service</li>
									<li>About</li>
									<li>Contact</li>
									<li>terms and Conditions</li>
									<li>Privacy Policy</li>
									<li>Affiliate Programme</li>
									<li>Corporate Gifting</li>
                                  
							</ul>
							</div>
                            
                            
<div class="content7box1" >
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Our Policies</li>
									<li>Cancellations and Returnst</li>
									<li>Shipping</li>
									<li>Payments</li>
									<li>Ordering and Tracking</li>
									
                                  
							</ul>
				  </div>
                            
                            <div class="content7box1" style="width:130px;">
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Join us on</li>
									<li><img src="images/img6.jpg" style="  margin-top:3px; margin-right:5px;" />Twteer</li>
									<li><img src="images/f.jpg" style=" float:left;  margin-top:3px;  margin-right:5px;"  />Facebook</li>
									
									
							</ul>
							</div>
                            
                            
                            <div class="content7box1" style="width:170px;">
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Payment Methods</li>
									
                                    <li style="margin-top:5px;"><img src="images/img10.jpg" style="float:left;" /><img src="images/visa.png" style=" margin-left:5px;" /><img src="images/netbanking.png"  style=" margin-left:5px;" />
									</li>
                                    <li style="font-weight:bold; margin-top:5px;">Shipping Partner</li>
                                   <li> <img src="images/img11.png" width="135" height="91" style="float:left; margin-left:-20px;" /></li>
							</ul>
							</div>
                            
<div class="content7box1" style="width:240px; margin-left:50px;">
							<ul style="list-style:none; line-height:1.5; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
									<li style="border-bottom:1px solid #666; font-weight:bold;">Payment Methods</li>
									
                                   
							       <div style="height:180px; width:230px; float:left; border:1px #CCC solid; margin-top:5px; padding:6px; "><p>Sign uest p to receive special offers and the latstyle news. </p>
                                   <input type="text" name=""  style="height:30px; width:180px; margin-left:20px;"/>
                                   <div class="bottam">For Women</div><div class="bottam">For Women</div>
                                   <p style="font-size:11px;">Your data will not be shared with others and you can unsubscribe at any time. </p>
                                   </div>.
                            </ul>
				  </div>
				</div>
</body>
</html>
