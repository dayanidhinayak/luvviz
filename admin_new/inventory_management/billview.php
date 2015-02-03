<?php
ini_set("display_errors",1);
include_once("../function.php");
?>
<html>
    <head>
<style>
h2{
margin:0px;
font-family:arial;
font-size:16px;
text-align:center;
}
.text{
font-family:arial;
font-size:11px;
text-align:center;
margin-top:0px;
}
</style>

<script type="text/javascript">
        window.onload=function(){
            var str = '';
            for(i=0; i <4; i++){
                str += Math.floor(Math.random()*10);
            }
	document.getElementById("invoiceno").innerHTML=str;
        }
</script>


   </head>
    <body>
				
		 <div style="width:100%; height:auto; float:left;">
						 <div style="width:650px; margin:auto; border:1px solid #cdcdcd; margin-top:20px;">
						 
							<div style="width:650px; height:auto; float:left; border:1px solid #cdcdcd;">
							
							<img src="logo.png" style="width:80px; height:80px; float:left; margin-left:4px; margin-top:5px;">
								 <h2>
								 <span style="font-size:14px;margin-top:4px;">(RETAIL INVOICE)</span><br/>
								 LUVVIZ
								 </h2>
								<p class="text">LUVVIZ RETAIL,<br/>
									Plot No:109,Bhimpur,Westside,Aerodrum Gate,Bhubaneswar 751020<br/>
									 PH NO.+91 9778003030
								</p>
							</div>
							<div style="width:650px; height:auto; float:left; border:1px solid #cdcdcd;">
							  <div style="width:318px; height:162px; float:left; border-right:1px solid #adadad; font-family:arial; font-size:14px; padding-left:5px;">
								<?php
								
								$billid=$_GET['bilid'];
								//echo $billid;
							         $sqlorder=mysql_query("select * from `order_details` where `id`='$billid'");
								$resorder=mysql_fetch_array($sqlorder);
								//echo "Party Details:".$resorder['billing_name'];
								
								//echo $proid."productid";
								?>
								<table>
								<tr>
								<td>Party Details:</td>
								<td><?php echo $resorder['billing_name'];?></td>
								</tr>
								<tr>
								<td></td>
								<td><?php echo $resorder['billing_address'];?></td>
								</tr>
								<tr>
								<td></td>
								<td><?php echo $resorder['billing_pin'];?></td>
								</tr>
								<tr>
								<td>Phone:</td>
								<td><?php echo $resorder['billing_phn'];?></td>
								</tr>
								
								</table>
							  </div>
						           <div style="width:325px; height:162px; float:left; font-family:arial;">
								<table style="font-size:14px;">
								<tr>
								<td>Invoice No.:Retail/</td>
								<td id="invoiceno">
								
								</td>
								
								</tr>
								<tr>
								<td>Dated:</td>
								<td>
								<?php
								$dated=date("Y-m-d");
								echo $dated;
								?>
								</td>
								</tr>
								<tr>
								<td>Payment Mode:</td>
								<td>COD</td>
								</tr>
								
							        <tr>
								<td>Transport:</td>
								<td>Luvviz</td>
								</tr>
								 <tr>
								<td>Order By:</td>
								<td>
								<?php
								echo $resorder['billing_name'];
								?>
								</td>
								</tr>
							        <tr>
								<td>Order No:</td>
								<td>
								<?php
								echo $resorder['id'];
								?>
								</td>
								</tr>
								</table>
							   </div>
							</div>
							<div style="width:650px; height:auto; float:left; border:1px solid #cdcdcd;">
							 <form name="f" method="post" action="#">
							   
							<table style="font-size:14px; font-family:arial; width:650px; margin-top:15px; margin-bottom:15px; border-bottom:1px solid #dfdfdf;">
									<tbody >	
										
									
										</td>
										</tr>
										<tr>
										<th>Slno</th>
										<th>Description of goods</th>
										<th>Quantity</th>
										<th>Unit</th>
										<th>Price</th>
										<th>Amount(Rs.)</th>
										</tr>
										<?php
										$i=0;
										
									       $sum=0;
									       
										$proid=mysql_query("select * from `temp_billinfo` where `bill_id`='$billid'");
								               while($resproid=mysql_fetch_array($proid)){
										$i++;
										 $sum+=$resproid['tot_price'];
										$final_value=$sum;
								              //$proid=$resproid['product_id'];
										//$productnm=mysql_query("select * from `product` where `id`='$proid'");
										//$resproductnm=mysql_fetch_array($productnm);
										?>
										<tr style="text-align:center;">
										<td><?php echo $i;?></td>
										<td>
										<?php echo $resproid['productname'];?>
										<br/>
										Size:
										<?php echo $resproid['description'];?>
										</td>
										<td><?php echo $resproid['quantity'];?></td>
										<td>Pcs.</td>
									       <td><?php echo $resproid['price'];?></td>
										<td><?php echo $resproid['tot_price'];?></td>
										
										</tr>
										<?php
										}
										?>	
																					
									</tbody>
								</table>
								<table style="width:670px; height:auto; font-family:arial; font-size:14px;">
								 
								   <?php
								    if($final_value<349){
								    
								    ?>  
								<tr>
								<td style="text-align:right;">Total:</td>
								<td style="text-align:center;">
								<?php
								
								echo $final_value;
								?>
								</td>
								</tr>
								<tr>
								    <td>
									    Shipping charge:80
								    </td>
								    <td></td>
								</tr>
								<tr>
								<td style="text-align:center;">Less: Discount</td>
								<td></td>
								</tr>
								<tr>
								<td style="text-align:center;  font-weight:bold;">
								Grand Total:
								</td>
								<td style="text-align:center;">
								<?php
								$final=$final_value+80;
								echo $final;
								?></td>
								</tr>
								<?php
								    }
								    else{
								?>
								<tr>
								<td style="text-align:right;">Total:</td>
								<td style="text-align:center;">
								<?php
								
								echo $final_value;
								?>
								</td>
								</tr>
								<tr>
								<td style="text-align:center;">Less: Discount</td>
								<td></td>
								</tr>
								<tr>
								<td style="text-align:center;  font-weight:bold;">
								Grand Total:
								</td>
								<td style="text-align:center;"><?php echo $final_value;?></td>
								</tr>
								<?php
								    }
								?>
								</table>
								
			       				 </form>
						      </div>
							
                              <div style="width:650px; height:auto; float:left; border:1px solid #cdcdcd;  font-family:arial;">
                              	 <h2 style="text-decoration:underline;">DECLARATION</h2>
				<p class="text">*There is no color guarrenty in garments. Warranty from our own authorised service centers, all parts carry manufacture or importer warrenty only.<br/>We deals with genuine products.
					
				</p>
                              </div>
			      <div style="width:650px; height:auto; float:left; border:1px solid #cdcdcd;">
				 <div style="width:318px; height:162px; float:left; border-right:1px solid #adadad; font-family:arial; font-size:14px; padding-left:5px;">
					<h4 style="text-decoration:underline; margin-top:2px;">Terms & Conditions</h4>
					<p>
					1.Subject to "BHUBANESWAR" jurisdiction only.
					2.Warranty void for 10 days from the date of purchase.
					* This copy doesn't entitle the holder to claim Input Tax Credit.
					</p>
			         </div>
				<div style="width:322px; height:162px; float:left;font-family:arial; font-size:14px; padding-left:3px;">
					<div style="width:322px; height:62px; float:left; border-bottom:1px solid #adadad; font-weight:bold; ">
						Receiver's Signature:
					</div>
					<div style="width:318px; height:100px; float:left; text-align:right; padding-top:3px; font-weight:bold; ">
						For:-LUVVIZ RETAIL<br/><br/>
						Prop.Signatory 
					</div>
			         </div>
				
			      </div>


						</div>
				</div>
				
			
							 
       
    </body>
</html>


