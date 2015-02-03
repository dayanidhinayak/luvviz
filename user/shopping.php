<?php 
include_once("function.php");
$xid=$_GET['id'];
$xid1=$_GET['id1'];
$xid2=$_GET['bid2'];
$check1=$_GET['checkval'];
//$ch=$_GET['checkval1'];
$xbillid=$_SESSION['billid'];


if($xid!="")
{

$xque=mysql_query("select * from `product` where `id`='$xid'") or die(mysql_error());
if(mysql_num_rows($xque)<=0)
{
header("location:index.php");
}


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

	$quesize=mysql_query("select `description` from product_varient WHERE  `product_id`='$xid' and  `varient_name`='size' and `id`='$check1'");
$ressize=mysql_fetch_array($quesize);



	/*mysql_query("insert into `temp_billinfo` set `bill_id`='$xbillid',`product_id`='$xpid',
	`tot_price`='$xprice',`recurrent_price`='$xrecr_price',`description`='$ressize[description]'");*/
	

$xque1=mysql_query("select * from `temp_billinfo` where `bill_id`='$xbillid' and `product_id`='$xpid' and `description`='$ressize[description]'");
$xcnt=mysql_num_rows($xque1);


	//if($xcnt==0)
	//{
	
	$xqty=1;

       mysql_query("insert into `temp_billinfo` set `bill_id`='$xbillid',`product_id`='$xpid',`quantity`='$xqty',
	`tot_price`='$xprice',`recurrent_price`='$xrecr_price',`description`='$ressize[description]',`price`='$xprice',`productname`='$xres[product_name]'")or die(mysql_error().'error');
      

//}

	
	//else{
	
	
//$xr=mysql_fetch_array($xque1);

	//$xqty=$xr['quantity']+1;

//$xprice1=$xr['tot_price']+$xprice;
	
	//$xr_price=$xrecr_price*$xqty;
	

 //mysql_query("update `temp_billinfo` set `quantity`='$xqty',`tot_price`='$xprice1',`recurrent_price`='$xr_price' where `bill_id`='$xbillid' and `product_id`='$xpid' and `description`='$ressize[description]'")or die(mysql_error().'error');
//mysql_query($xque1)
//echo $xqueu;
	//}
}	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::LUVVIZ:::...</title>
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->

<!-- script for dropdown side menuy -->
<!--<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>-->
<!-- end of script for dropdown side menuy -->
<link href="style1.css" rel="stylesheet" type="text/css" />

<!--<script>
$(document).ready(function(){

 $(".detailsval").click(function() {
 
  var answer = confirm("Are you sure?");
if (answer) {

var id=$(this).parent().parent().parent().attr('id');
  
 $(this).parent().parent().parent().remove();
 
 												$.ajax({
													  url: 'remove_order.php?product_id='+id,
													   success: function (data) {
													   window.location.href="shopping.php";
						
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
													  window.location.href="shopping.php";
															    },
												
														
													 });
  
 
  
  });
  
  $(".minuss").click(function() { 
  
  var id=$(this).parent().find('span').html();
  
 												 $.ajax({
													  url: 'minus.php?id='+id,
													  success: function(result){
													  window.location.href="shopping.php";
															    },
												
														
													 });
  
  
  });
  
  
 });
  
  </script>  --> 
  
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
  
  <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete this product?");
			if(con){
			window.location="bill_delete.php?id="+vals;
			}
		}
	</script>
  
  
  <!--dropdown start-->
   <script src="jquery-latest.min.js" type="text/javascript"></script>
    
 
  <script type="text/javascript">
$(document).ready(function(){

$('#cssmenu > ul > li ul').each(function(index, e){
  var count = $(e).find('li').length;
  var content = '<span class="cnt">' + count + '</span>';
  $(e).closest('li').children('a').append(content);
});
$('#cssmenu ul ul li:odd').addClass('odd');
$('#cssmenu ul ul li:even').addClass('even');
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});

});

      </script>

<!--dropdown end-->
  
</head>

<body>
<?php
if(isset($_SESSION['id'])){
	

?>
<?php //include_once("menubar.php");
				include_once("menu4.php");?>
				
				
				
		<div id="menuu">
		    <?php //include_once("menubar.php");
				include_once("menu3.php");?>
		</div>

<?php
}
else{
?>
		<div id="menuu">
		    <?php //include_once("menubar.php");
			include_once("menu1.php");?>
		</div>
<?php
}
?>

			<!--<div id="content7box" style="height:auto; width: 100%; float: left; margin-top: 20px;">
					
			<div style="height:50px; width:960px; margin: auto; ">
						<div class="botton1" style="background:#f9f9f9;"><a href="index.php" style="color:#fb8800; text-decoration:none;">Continue Shopping</a></div>
						<div style="float:left; margin-left:210px;"><h2 style="margin-top:0px; color:#666666;">Shopping cart</h2></div>
						<?php
						$qq12=mysql_query("select * from `temp_billinfo` where `bill_id`='$_SESSION[billid]'");
						$rr12=mysql_num_rows($qq12);
						if($rr12!=0)
						{
						?>
						<div class="botton1" style=" float:right; color:#FFFFFF; font-weight:bold; "><a href="checkout.php" style="color:#ffffff; text-decoration:none;">Order Now <img src="images/shopping.png" style="margin-left:5px;"  /></a></div>
						<?php
						}
						else
						{
						?>
						<div class="botton1" style="background:#f9f9f9;margin-left:5px; float:right;"><a href="index.php" style="table-decoration:none; color:#fb8800;">Continue Shopping</a></div>
						<?php
						}
						?>
			</div>-->
<!--<div style="width:1040px; height:470px; margin:auto; ">

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

 <p style=" font-weight:bold;margin-top:20px;"><?php echo $xr_bill['product_name'];?><br/><?php /*?><?php echo $xr_bill['description']; ?> <?php */?><span style="font-weight:normal;"></span></p>
</div> </div>



<div class="content5smallbox" style="height:130px; width:150px; line-height:1.5; margin-top:0px; margin-left:0px; ">
 <!-- <select style="margin-top:20px;" name="qty">
                                    <option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
</select><br />-->
<!--<div style="width:40%;float:left; margin-top:10px; margin-left:10%;"><input type="button" name="plusval" class="pluss" value="" style="background:url(images/plus.png); width:22px; height:22px; border:none;" /><span style="display:none;" class="getprodid"><?php echo $pid ?></span></div>
<div style="float:left;width:40%; margin-top:10px;"><input type="button" name="minusval" class="minuss" value="" style="background:url(images/minus.png); width:22px; height:22px; border:none;" /><span style="display:none;"><?php echo $pid ?></span></div>
<div style="width:90%; float:left; margin-top:20px;">
<p style="  background:#E2F8FE; ">&nbsp;&nbsp; <span style="float:left;padding-left:10px;"><?php echo $xr_bill['quantity'];?></span><img src="images/shoppinhimg3.png" style="float:left;margin-left:15px; margin-right:3px; " class="detailsval" /> Remove</p>
</div>
</div>



<div class="content5smallbox" style="height:120px; width:100px; line-height:1.5;  margin-left:70px; margin-top:0px; ">
 
<p style="margin-top:20px;">2-5 days </p>

</div>



<div class="content5smallbox" style="height:130px; width:100px; line-height:1.5; float:left;  margin-left:200px; margin-top:0px; ">
 
<p style="margin-top:20px; text-align:center;">Rs.<?php echo $xr_bill['tot_price'];?></p>

</div>


									
						</div>
						
						<?php } 
						$final_value=$xsum+$tax;
						?>
			</div>
</div>
</div>
</div>
-->

<!--<div id="content5" style="height:auto;">
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
&nbsp; &nbsp; &nbsp;Rs.<?php echo $final_value;?><br /><span style="font-weight:normal; font-size:10px;">VAT incl</span> </p>	

</div>	

</div>-->

<!--<div id="shoppimhbottom" >
			<div class="botton1" style="background:#f9f9f9;"><a href="index.php" style="text-decoration:none; color:#fb8800;">Continue Shopping</a></div>
			<?php
			if($rr12!=0)
						{
						?>
						<div class="botton1" style=" float:right; color:#FFFFFF; font-weight:bold; "><a href="checkout.php" style="text-decoration:none; color:#FFFFFF;">Order Now <img src="images/shopping.png" style="margin-left:5px;"  /></a></div>
						<?php
						}
						else
						{
						?>
						<div class="botton1" style="background:#f9f9f9;margin-left:5px; float:right;"><a href="index.php" style="text-decoration:none; color:#fb8800;">Continue Shopping</a></div>
						<?php
						}
						?>
			
	
</div>-->

			
</div>			
		
  </div>
</div>	


<div style="width:100%; height:auto; float:left;">
<div style="width:1040px; margin:auto;">

<div id="content" style="width:1040px; margin-top:20px; margin-bottom:50px;">
										<div id="content-left" style="width:680px; margin-left:15px;margin-left:0px; ">
												<p class="text" style="color:#2073b2;">
														Product has been successfully added to your cart.
												</p>
												<div id="billing-head" style="width:685px;">
														<h1 class="head2" style="float:left; margin-top:5px; margin-bottom:5px;">
																Your cart
														</h1>

														
<?php
						$qq12=mysql_query("select * from `temp_billinfo` where `bill_id`='$_SESSION[billid]'");
						$rr12=mysql_num_rows($qq12);
						if($rr12!=0)
						{
                                                    if(isset($_SESSION['id'])){
						?>
                                               

<?php
                                                }
                                                else{
?>
<a href="checkout.php" style="color:none; text-decoration:none; display:none;">
<p class="smalltextbox" style="float:right; width:200px; text-align:right; margin-top:10px; text-transform:uppercase; font-size:11px;">
																order now
														</p></a>

<?php
                                                }

						}
						else
						{
						?>

	<?php
}
?>

						
												</div>
<?php 
									$tax=0;
									$xsum=0;
									$xq_bill=mysql_query("select  p.*,t.`slno`,t.`tot_price`,t.`quantity` from `temp_billinfo` t,`product` p where t.`bill_id`='$xbillid' and p.`id`=t.`product_id`");	
while($xr_bill=mysql_fetch_array($xq_bill))
{

	 $xsum+=$xr_bill['tot_price'];
	 $tax+=	$xr_bill['tot_price']*($xr_bill['tax_value']/100);
	 $pid= $xr_bill['id'];				
	//echo $pid."------";
	//echo $xr_bill['slno']."=====";								?>
												<div class="billing-content">

														<div class="billing-leftimg">


									
<img src="../admin_new/inventory_management/<?php echo $xr_bill['image'];?>"  style="margin-top:0px; margin-right:8px; float:left; " height="90" width="90" alt="<?php echo $xr_bill['alternate_val']; ?>"/>


														</div>


														<div class="billing-rightcontent">
																<div class="billing-box1" style="width:570px;">
																		<p class="text" style="margin-top:0px; margin-bottom:8px;">
																				<!--GNJ023 BLACK FRONT 2 	
Edhatu Black Cotton Nehru Jacket-->
<?php echo $xr_bill['product_name'];?>
																				<br />
                                                                                                                                                                
																				<!--<span style="font-size:12px; color:#414141;">SKU :</span>-->
                                                                                                                                                                
                                                                                                                                                                    
																					<br />
																				<br />
																				<span style="color:#568fba; font-size:15px;">INR <?php echo $xr_bill['price'];?></span>
																		</p>


																</div>


 <div class="billing-box1" style="padding-top:8px; padding-bottom:8px; width:570px;">
<!--div srt-->

 <div style="width:auto; height:auto; float:left; ">
<?php
												
					
												$xx=mysql_query("select * from `category` where `id`='$xid1'");
												$resxx=mysql_fetch_array($xx);
												$yy=mysql_query("select * from `category` where `parent`='$resxx[id]' limit 0,10 ");
												while($resyy=mysql_fetch_array($yy))
												{


	$det=array();
				 $query1=mysql_query("select * from `category` where `parent`='$cid1' limit 0,10");
				 while($result1=mysql_fetch_array($query1))
				 {
				 	$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$result1[id]|%' limit 0,10 ");
					while($r=mysql_fetch_array($q))


					{

					//echo $r['brand_name'];
if($r['brand_name']!=$yy['category_name'])
{

					$det[]=$r['brand_name'];
}				
					}


					}

					


			$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$xid1|%' limit 0,10 ");

					while($r=mysql_fetch_array($q))


					{

					//echo $r['brand_name'];

if($r['brand_name']!=$yy['category_name'])
{
					$det[]=$r['brand_name'];
}

					

					}

				


					$value=array_unique($det);

				 


				 foreach($value as $v)

				 {

                                 
				 $qq=mysql_query("select `id` from `brand` where `brand_name`='$v' limit 0,10");

				 $rr=mysql_fetch_array($qq);

 
	?>
												        
															  <?php

															  }
															  }
															  ?>





	
												<?php

												$v=array();
												$pdetail=mysql_query("select  distinct(`varient_name`) from `product_varient` where `product_id`='$pid' ");
											
												while($rdetails=mysql_fetch_array($pdetail))

												{
												$v[]=$rdetails['varient_name'];
												}
												foreach($v as $v2=>$v1)

												{
												?>	

<!--varient start-->
<div style=" width:auto; height:auto; float:left; margin-right:10px; text-transform:capitalize;">
<h3>
<?php echo $v1;
?>
</h3>


										
												 <?php 

												 $countval=0;
												 $vr=array();
												
if($v1=="size"){

//$que=mysql_query("select `description` from product_varient WHERE  `product_id`='$pid' and  `varient_name`='size' and `id`='$check'");
		//echo "select `description` from product_varient WHERE  `product_id`='$pid' and  `varient_name`='size' and `id`='$check'";	
$que=mysql_query("select `description` from  temp_billinfo WHERE  `product_id`='$pid' and  `bill_id`='$xbillid'  and `slno`='$xr_bill[slno]'");										
		}
		else{
		

												$que=mysql_query("select `description` from product_varient WHERE  `product_id`='$pid' and  `varient_name`='$v1'")or die (mysql_error());
			}
		$countval=mysql_num_rows($que);

												
												
												
												
while($row1 = mysql_fetch_array($que))

  {
	
  if(!(in_array($row1['description'],$vr)))
  {
  

  $vr[]=$row1['description'];
 // echo "<tr><td>$countval ggh</td></tr>";
  }
 // var_dump($vr);

   }	 
	
		 ?>		
		 <?php 

		 foreach($vr as $desc_val)
												{
												$countval=1;

		?>
			
		 
		 			
					<?php echo $desc_val;?> 
					
				
</div>
		 <?php

		}																		
		 } 
		?>							 	  

</div>
<div style="width:30px; height:auto; float:left; ">
<div style="width:auto; height:auto; float:left; ">
<h3 style="text-transform:capitalize;">
qty
</h3>
</div>
<div style="width:60px; height:auto; float:left;">
<?php echo $xr_bill['quantity'];?>

</div>
</div>				 

<div style="width:100px; height:auto; float:left; ;">
<div style="width:auto; height:auto; float:left; ">
<h3>
ITem Total
</h3>
</div>
<div style="width:100px; height:auto; float:left;">
INR <?php echo $xr_bill['tot_price'];?>
</div>
</div>						
	
<div style="width:30px; height:auto; float:left; ">

<div class="edit" onclick="delete_data(<?php echo $xr_bill['slno']; ?>)">
delete
</div>
</div>	
<!--div end-->


																		
																</div>
														</div>

														</div>
<?php
}
?>
														
														
														<div class="billing-content">
                                                                                                                    <div id="order-box">
                                                                                                                                                  <input type="text" name="" class="form" style=" float:left;"  />
                                                                                                                                          <input type="button" name="Input" value="APPLY COUPON" style="width:150px; padding:0px; float:left; background:#2073b2; border:none; color:#fff; padding:3px; font-size:13px; height:22px;"/>
																																		  
<?php
 if(isset($_SESSION['id'])){
?>																																		  
<p class="smalltextbox" style="float:right; width:300px; text-align:center; margin-top:0px; text-transform:uppercase; font-size:11px;">
																<a href="check1.php" style="color:none; text-decoration:none; width:100px; padding:0px; float:left; background:#2073b2; border:none; color:#fff; padding:3px; font-size:13px; height:17px;">order now</a>
																
																<a href="index.php" style="color:none; text-decoration:none; width:150px; padding:0px; float:left; background:#2073b2; border:none; color:#fff; padding:3px; font-size:13px; height:17px; margin-left:10px;">Continue shopping </a>
														</p>
														<?php
																}
																else{
																?>
														<p class="smalltextbox" style="float:right; width:300px; text-align:center; margin-top:0px; text-transform:uppercase; font-size:11px;">
																<a href="checkout.php" style="color:none; text-decoration:none; width:100px; padding:0px; float:left; background:#2073b2; border:none; color:#fff; padding:3px; font-size:13px; height:17px;">order now</a>
																
																<a href="index.php" style="color:none; text-decoration:none; width:150px; padding:0px; float:left; background:#2073b2; border:none; color:#fff; padding:3px; font-size:13px; height:17px; margin-left:10px;">Continue shopping </a>
														</p>
														<?php
														}
														?>
                                                                                                                                                  
                                                                                                                                                   <!--<input type="button" name="Input" value="APPLY COUPON" style="width:150px; padding:0px; float:right; background:#69a7d7;; border:none; color:#fff; padding:5px; font-size:14px; height:28px;"/>-->
                                                                                                                    </div>
                                                                                                                </div>
										</div>



										<div id="content-right" style="width:290px; float:left; margin-left:50px; padding-top:40px;">
										 <p class="text">
										 		
CTUSOMER SERVICE : +91- 9778003030										 
										</p>
										<div class="pricebox1">
												<div class="pricebox2">
														<a href="shipping.php" target="_blank"><div class="pricebox3">
															Shipping 
														</div></a>
														<a href="about.php" target="_blank"><div class="pricebox5">
															Return and Exchange
														</div></a>
												</div>
												<div class="pricebox2" style="border-bottom:none;">
														<a href="about.php" target="_blank"><div class="pricebox3">
															Reach at Us
														</div></a>
														<a href="about.php" target="_blank"><div class="pricebox5">
															Payment methods
														</div></a>
												</div>
										</div>
										
												<div class="pricebox2" >
														<div class="pricebox4" style="font-weight:bold; font-size:15px; padding-top:10px; padding-bottom:10px; font-family:Arial, Helvetica, sans-serif;">
															Total
														</div>
														<div class="pricebox5" style="font-weight:bold; font-size:15px; padding-top:10px; padding-bottom:10px; font-family:Arial, Helvetica, sans-serif;">
															INR <?php echo $xsum;?>
														</div>
												</div>
										</div>
								</div>
								
</div>

</div>
		  
</div>
<?php
include_once('bottombar.php');

?>

</body>
</html>
