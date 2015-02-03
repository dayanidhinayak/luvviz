<?php
include_once("function.php");
$q=mysql_query("select  sum(`quantity`) as quan,sum(tot_price) as price from `temp_billinfo`  where `bill_id`='$_SESSION[billid]'");
$r=mysql_fetch_array($q);
$xbillid=$_SESSION['billid'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script>
$(function(){
$('#arrow').click(function(){
$('#detailcart').show();

});
});
</script>
<script>
$(document).ready(function(){

 $(".detailsval").click(function() {
 
  

var id=$(this).attr('delid');
//alert(id);
  

 
 												$.ajax({
													  url: 'remove_order.php?product_id='+id,
													   success: function (data) {
													   location.reload();
						
															    },
												
														
													 });
 


 });
 
 $("#closep").click(function(){
  $('#detailcart').hide();
 });
 $('#order').click(function(){
  window.location.href="checkout.php";
 });
 $('#cont').click(function(){
  window.location.href="index.php";
 });
 });

</script>
</head>

<body>

<span >
      <img src="images/shbag.png" style="float: left; margin-top: -15px; margin-right: 5px;"> 
						
                                                Shopping Cart<br/>
                                                         <span style="color:#ff6105; font-size:12px;"><?php echo $r['quan']?> item(s) - Rs.<?php echo $r['price']?></span><img src="down.png" style="cursor: pointer;margin-left: 5px;" class="detailcart" id="arrow">
							 <?php
							 if($r['quan']==0)
							 {
							 ?>
							 <div style="float:left; padding: 5px; background:#fff; position:absolute; z-index:1000000; width:555px; left:100px; border: 8px solid rgba(51,51,51,0.3); display:none;" id="detailcart" class="detailcart">
							  Your shopping cart is empty! 
							 </div>
							  <?php
							 }
							 else{
							  ?>
                                                         <div style="float:left; background:#fff; position:absolute; z-index:1000000; width:565px; left:100px; border: 8px solid rgba(51,51,51,0.3); display:none;" id="detailcart" class="detailcart">
							  <div style="width:565px; height: 40px; float:left; background: #f2f2f2; font-family: arial; font-size: 14px; color: #333;">
							   <img src="cart.png" style="width:30px; height: auto; margin: 5px; margin-top: 0px;"/>
							   Cart( <?php echo $r['quan'];?>)
							   <img src="crossp.png" style="float: right; margin-right: 5px;" id="closep"/>
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
									
									<div id="<?php echo $pid ?>" style=" border-bottom: 5px solid #c7e7f0;width:558px;  float:left; height:auto;">
									<div class="content5smallbox" style="height:auto; width:290px; line-height:1.5; margin-top:0px; margin-left:10px; ">
										<div style="float:left; width:50px; height:auto;">
											<p style="font-weight:bold; margin-top:20px;"><img src="../admin_new/inventory_management/<?php echo $xr_bill['image'];?>"  style="margin-top:0px; margin-right:8px; float:left; " height="50" width="50" alt="<?php echo $xr_bill['alternate_val']; ?>"/> </p></div>
									
<div style="float:left;width:230px; margin-left:10px;">

 <p style=" font-weight:bold;margin-top:20px;"><?php echo $xr_bill['product_name'];?></p>
</div> </div>



<div class="content5smallbox" style="height:130px; width:50px; line-height:1.5; margin-top:0px; margin-left:0px; ">
 

<div style="width:100px; float:left; margin-top:20px;">
<p style="  background:#E2F8FE; ">&nbsp;&nbsp; <span style="float:left;padding-left:5px;"><?php echo $xr_bill['quantity'];?></span></p>
</div>
</div>

<div class="content5smallbox" style="height:130px; width:100px; line-height:1.5; float:left;  margin-left:80px; margin-top:0px; ">
 
<p style="margin-top:20px; text-align:center;"><?php echo $xr_bill['tot_price'];?></p>

</div>
<div style="float:left;  margin-left:10px; margin-top:0px; cursor: pointer;" class="detailsval" delid="<?php echo $pid ?>"><img src="remove.png"/></div>

									
						</div>
						
						<?php } 
						$final_value=$xsum+$tax;
						?>
	<div style="width:565px;height: 60px; float:left;background: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#e8e8e8)); border:1px solid #ccc;">
	 <div class="botton1" id="order" style=" cursor: pointer;float:right; color:#FFFFFF; font-weight:bold; margin: 10px; ">Order Now <img src="images/shopping.png" style="margin-left:5px;"  /></div>
	 <div class="botton1" id="cont" style=" cursor: pointer;background:#f9f9f9;margin:10px; float:left;">Continue Shopping</div>
	</div>
			</div>
							 <?php
							 }
							 ?>
</div>
                                                         
                                                         
                                                         
                                                         
                                                         
                                                         
                                                         
                                                         
                                                         
                                                         </div>
                                                         
                                                         
                                                     </body>
</html>
