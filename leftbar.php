<div class="content-left1"  style="width:200px;">
												<div class="category-box">
														<div class="category-head">
																Category
														</div>
														<div class="category-content">
																<h3 class="text" style="font-weight:bold; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-bottom:0px; margin-top:0px;">
																		Bags
																</h3>
																<ul>
<?php
$r=mysql_query("select * from `category` where `parent`='$id'");
while($rr=mysql_fetch_array($r)){
//$result=mysql_query("select * from `product` where `category_id` LIKE '%|$id|'");
//$rrr=mysql_fetch_array($result);
//echo $rrr['quantity'];
?>	
																		<li onclick="return product(<?php echo $rr['id'];?>);"><?php echo $rr['category_name'];?>(223)</li>
<?php
}
?>
																		
																</ul>
														</div>
												</div>
												<div class="header" style="width:200px; height:auto; float:left;">
												<div class="category-box" style="margin-top:10px;">
														<div class="category-head">
																Brand
														</div>
														<div class="category-content">
																<ul>
																		<li><input type="checkbox"  />Hand Bags (223)</li>
																		<li><input type="checkbox"  />Wallets & Purses (20)</li>
																		<li><input type="checkbox"  />ling Bags (9)</li>
																		<li><input type="checkbox"  />Clutches (4)</li>
																		<li><input type="checkbox"  />Shopping Bags (3)</li>
																		<li><input type="checkbox"  />Laptop Bags (2)</li>
																</ul>
														</div>
												</div>
												
												<div class="category-box" style="margin-top:10px;">
														<div class="category-head">
																Price
														</div>
														<div class="category-content">
																<p class="text" style="font-size:11px; font-family:Arial, Helvetica, sans-serif;">
																		Enter a Price range in Rs.<br />
																		<input type="text" name="" value="20" class="form" style=" width:50px; height:15px;"/> -
																		<input type="text" name="" value="50" class="form" style=" width:50px; height:15px; font-weight:bold;"/>
																		<input type="button" value="Go"  />
																</p>
																<ul>
																		<li><input type="radio" /> below Rs. 2000 (52) </li>
																		<li><input type="radio"/> Rs. 2000 - Rs. 4000 (192) </li>
																		<li><input type="radio"/> Rs. 4001 - Rs. 6500 (14) )</li>
																		<li><input type="radio" /> above Rs. 6500 (3) </li>
																</ul>
														</div>
												</div>
												
												<div class="category-box" style="margin-top:10px;">
														<div class="category-head">
																Fit
														</div>
														<div class="category-content">
																<ul>
																		<li><input type="checkbox"  />Hand Bags (223)</li>
																		<li><input type="checkbox"  />Wallets & Purses (20)</li>
																		<li><input type="checkbox"  />ling Bags (9)</li>
																		<li><input type="checkbox"  />Clutches (4)</li>
																		<li><input type="checkbox"  />Shopping Bags (3)</li>
																		<li><input type="checkbox"  />Laptop Bags (2)</li>
																</ul>
														</div>
												</div>
										</div>
									</div>
