<?php
include_once("function.php");
//echo $_SESSION['billid'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::LUVVIZ:::...</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
  
 <!--  <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete this product?");
			if(con){
			window.location="bill_delete1.php?id="+vals;
			}
		}
	</script>-->
  
   
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
 

<div style="width:100%; height:auto; float:left;">
<div style="width:1040px; margin:auto;">

<div id="content" style="width:1040px; margin-top:20px; margin-bottom:50px;">
										<div id="content-left" style="width:670px; margin-left:15px;margin-left:0px; ">
												
												<div id="billing-head">
														<h1 class="head2" style="float:left; margin-top:5px; margin-bottom:5px;">
																Your cart
														</h1>
<a href="index.php" style="color:none; text-decoration:none;">
<p class="smalltextbox" style="float:right; width:200px; text-align:right; margin-top:10px; text-transform:uppercase; font-size:11px;">
																Continue shopping
														</p></a>
														
<?php
						$qq12=mysql_query("select * from `temp_billinfo` where `bill_id`='$_SESSION[billid]'");
						$rr12=mysql_num_rows($qq12);
						if($rr12!=0)
						{
                                                    if(isset($_SESSION['id'])){
						?>
                                               
<a href="check1.php" style="color:none; text-decoration:none;">
<p class="smalltextbox" style="float:right; width:200px; text-align:right; margin-top:10px; text-transform:uppercase; font-size:11px;">
																order now
														</p></a>
<?php
                                                }
                                                else{
?>
<a href="checkout.php" style="color:none; text-decoration:none;">
<p class="smalltextbox" style="float:right; width:200px; text-align:right; margin-top:10px; text-transform:uppercase; font-size:11px;">
																order now
														</p></a>

<?php
                                                }

						}
						
 else{
 }
						?>

	

						
												</div>
												

<?php
 $q=mysql_query("select * from `temp_billinfo`  where `bill_id`='$_SESSION[billid]'");
 $no=mysql_num_rows($q);
if($no<1){
	echo "<p class='text' style='color:#2073b2;'>
	your cart is empty.
		</p>";
}
else{
echo "<p class='text' style='color:#2073b2;'>
	Edhatu Black Cotton Nehru Jacket was successfully added to your cart.
		</p>";
$tax=0;
 $xsum=0;									
$xq_bill=mysql_query("select  p.*,t.`tot_price`,t.`quantity` from `temp_billinfo` t,`product` p where t.`bill_id`='$_SESSION[billid]' and p.`id`=t.`product_id`");	
while($xr_bill=mysql_fetch_array($xq_bill))
{
    $xsum+=$xr_bill['tot_price'];
	 $tax+=	$xr_bill['tot_price']*($xr_bill['tax_value']/100);
	 $pid= $xr_bill['id']; 

?>
				

					


<div class="billing-content">

								       <div class="billing-leftimg">


									
<img src="../admin_new/inventory_management/<?php echo $xr_bill['image'];?>"  style="margin-top:0px; margin-right:8px; float:left; " height="50" width="50" alt="<?php echo $xr_bill['alternate_val']; ?>"/>


								       </div>


									<div class="billing-rightcontent">
									    <div class="billing-box1">
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


  <div class="billing-box1" style="padding-top:8px; padding-bottom:8px;">
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
<div style="width:100px; height:auto; float:left; ">
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
     <div style="width:60px; height:auto; float:left; ">
	  <div style="width:auto; height:auto; float:left; ">
	  <h3>
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
	
<!--div end-->


																		
									     </div>
								       </div>

							       </div>

														
														
<?php
}

?>														

										</div>

																
																

	<div id="content-right" style="width:290px; float:left; margin-left:50px; padding-top:40px;">
										 <p class="text">
										 		
CTUSOMER SERVICE : +91- 9778003030										 
										</p>
										<div class="pricebox1">
												<div class="pricebox2">
														<div class="pricebox3">
															Shipping 
														</div>
														<div class="pricebox5">
															Return and Exchange
														</div>
												</div>
												<div class="pricebox2" style="border-bottom:none;">
														<div class="pricebox3">
															Reach at Us
														</div>
														<div class="pricebox5">
															Payment methods
														</div>
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
<?php
}
?>
								
</div>

</div>
		  
</div>

<?php

include_once('bottombar.php');

?>


</body>
</html>
