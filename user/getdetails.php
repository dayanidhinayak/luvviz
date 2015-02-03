<?php
include_once("function.php");
$val=$_GET['q'];
?>
<div style="height:20px; background:#CCCCCC; width:190px; font-family:Arial, Helvetica, sans-serif; font-size:14px; float:left; color:#333333; font-weight:bold; text-align:center; 
														padding:5px;">Top Categories</div>                       
														<div style="width:200px; height:175px; float:left;  ">
														<?php

$q=mysql_query("select * from `category` where `parent`='$val'");
while($r=mysql_fetch_array($q))
{

$que_prod=mysql_query("select * from(SELECT 

     product.*,temp_billinfo.quantity as qty

FROM 

    product 

LEFT JOIN 

    temp_billinfo 

ON

    temp_billinfo.product_id = product.id 

WHERE 

    product.status = '1' and product.`category_id` like '%|$r[id]|%' group by `product`.`id`) abc order by abc.qty DESC") or die(mysql_error());
	
	while($res=mysql_fetch_array($que_prod))
	{
	$id=$res['category_id'];
	$v=str_replace("|","",$id);
	$qq=mysql_query("select `category_name` from `category` where `id` = '$v'");
	$rr=mysql_fetch_array($qq);
	?>
	
														
							<ul style="margin-left:0px; padding-left:0px; ">
		
									
							<li class="li2">&rsaquo;   <?php echo $rr['category_name']?></li>
							
							<?php
							}
							}
							?>
							</ul>
							</div>
							<div style="width:200px; height:180px; float:left;  ">
								
							<div style="height:20px; background:#CCCCCC; width:190px; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333333; font-weight:bold; text-align:center; padding:5px; float:left;">Top Brands</div>
							
							<?php

$q1=mysql_query("select * from `category` where `parent`='$val'");
while($r1=mysql_fetch_array($q1))
{
 $que_prod1=mysql_query("select * from(SELECT 

     product.*,temp_billinfo.quantity as qty

FROM 

    product 

LEFT JOIN 

    temp_billinfo 

ON

    temp_billinfo.product_id = product.id 

WHERE 

    product.status = '1'  and product.`category_id` like '%|$r1[id]|%' group by `product`.`id`) abc order by abc.qty DESC") or die(mysql_error());
	while($rre=mysql_fetch_array($que_prod1))
	{
	$brandid=$rre['brand_id'];
	$qwe=mysql_query("select `brand_name` from `brand` where `id`='$brandid'");
	$rwe=mysql_fetch_array($qwe);
	?>
			<ul style="margin-left:0px; padding-left:0px; margin-top:5px;  ">
						<li class="li2">&rsaquo;   <?php echo $rwe['brand_name']?></li>
							<?php
							}
							}
							?>
						
							</ul>
							        </div>
							 
	
	
	
	