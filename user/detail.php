<?php 
include_once("function.php");
//echo $_SESSION['processor'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />

<link type="text/css" href="stylepc.css"  rel="stylesheet" media="screen" />
<title>Make my pc</title>


	
</head>

<body>
<?php include_once("topbar.php");?>
<div id="menuu" >
	    <?php //include_once("menubar.php");
			include_once("menu1.php");?>
</div>

<div id="container" style="margin-top:20px; height: auto;">
	
	

<script>
$(function(){
$('.rowboximg img').click(function(){
var idval= $(this).parent().parent().parent().find('.select_pname :selected').val();
//alert(idval);
window.open("pro_description.php?val="+idval,'','width=900,height=500')
//$(this).parent().attr("href", "pro_description.php?val="+idval);
});
$('.select_pname').change(function(){
var prod_idval='';
$('.select_pname').each(function (i) {
//alert($(this).val());
if($(this).val()!="select" || $(this).val()!='')
{
prod_idval=prod_idval+$(this).val()+",";
}
});
$('#totalprice_val').load('makemypc_price.php?id='+prod_idval);
});


});
</script>
<script type="text/javascript" src="js/jquery.js">

</script>

<script type="text/javascript" src="javascripts/top_up-min.js">

</script>
<script type="text/javascript">
	 
  TopUp.host = "";
  TopUp.images_path = "images/top_up/";
 
</script> 
		
		<div id="container_content" style="height:0px;">
		<div style="width:960px; height:auto; float:left; background:url(images/bg.jpg) repeat;">
		<form name="form1" id="form1" method="post" action="insert_mypc.php">
		 	<div id="containerbox" style="height:auto; border-bottom:5px solid #003399; padding-bottom:40px;">
			 	<div id="containerbox_detail">
					<div id="containerbox_detail_left" style="margin-top:20px;">
					  	<div class="containerbox_detail_left_head">
							 select a case - click each case to enlarge and view info
						</div>
						<div class="containerbox_detail_left_img">
						<?php
						$qcabinet=mysql_query("select * from `category` where  `pc_status`='1' and `category_name`='Cabinet'") or die(mysql_error());
						$rcab=mysql_fetch_array($qcabinet);
						$qcab=mysql_query("select * from `product` where `status`='1' and `category_id` like '%|$rcab[id]|%'");
						while($rcab1=mysql_fetch_array($qcab))
						{
							    
						?>
						  	<div class="detailbox">
								<div class="detailboximg">
									<img src="../admin_new/inventory_management/<?php echo $rcab1['image'];?>" width="80" height="100" style="text-align:center;" onclick="window.open('pro_description.php?val='+<?php echo $rcab1['id'];?>,'','width=900,height=500')"/>
								</div>
								
								<div class="detailboxdescrip">
									<input type="radio" name="<?php echo $rcab1['product_name'];?>" value="<?php echo $rcab1['id'];?>" /><br />
									Rs <?php echo $rcab1['price'];?>
								</div>
							</div>
						<?php
						}
						?>
							
						</div>
							<div class="choosebox">
								<div class="chooseboxhead">
								  choose your core components
								</div>
								<div class="chooseboxdscrip">

						<?php 
								$q=mysql_query("select * from `category` where  `pc_status`='1' and( `category_name`='Processor' or `category_name`='Mother Board' or `category_name`='Graphics Card' or `category_name`='Memory') order by `mpc_priority` asc");
								while($r=mysql_fetch_array($q))
								{
								
								?>
									<div class="rowbox">
										<div class="rowboximg">
											<a href="1.htm" class="tu_ql  tu_iframe_500x370 style1"><img src="../admin_new/inventory_management/<?php echo $r['img'];?>" width="62" height="36" style="margin-left:15px; margin-top:12px;" /></a>
										</div>
										<div class="rowboxdescrip">
												
												<span style="font-size:16px;color:#3396eb;"><?php echo $r['category_name'];?></span>
											<br />
											<select style="width:460px; height:25px; float:left; border-radius:5px; margin-left:25px; border:1px solid #3396eb; margin-left:-1px;" name="<?php echo $r['category_name'];?>" class="select_pname" onclick="return x('this.value()');">
												<option value="select">select</option>
												<?php 
												if($r['id']==89)
												{
												$q1=mysql_query("select * from `product` where `status`='1' and `category_id` like '%|$r[id]|%' and `product_name` like '%$_SESSION[processor]%'");
												}
												else
												{
												$q1=mysql_query("select * from `product` where `status`='1' and `category_id` like '%|$r[id]|%' ");
												}
												while($r1=mysql_fetch_array($q1))
												{
												?>
												<option value="<?php echo $r1['id']?>"><?php echo $r1['product_name']?></option>
												<?php } ?>
											</select>
										</div>
										<div class="rowboximg">
										   
												<img src="images/details_button.png" style="margin-top: 15px;"/>
										   
										</div>
									</div>
									<?php } ?>
									
								</div>
							</div>
							
							
							
							<?php /*?><div class="choosebox">
								<div class="chooseboxhead">
								  choose your core components
								</div>
								<div class="chooseboxdscrip">
								<?php 
								$q2=mysql_query("select * from `category` where  `pc_status`='1' and( `category_name`='External Hard Disk' or `category_name`='Internal Optical Drive' or `category_name`='Memory Card Reader')");
								while($r2=mysql_fetch_array($q2))
								{
								?>
									<div class="rowbox">
										<div class="rowboximg">
											<a href="1.htm" class="tu_ql  tu_iframe_500x370 style1"><img src="../admin_new/inventory_management/<?php echo $r2['img'];?>" width="62" height="36" style="margin-left:15px; margin-top:12px;" /></a>
										</div>
										<div class="rowboxdescrip">
												
												<span style="font-size:16px;color:#3396eb;"><?php echo $r2['category_name'];?></span>
											<br />
											<select style="width:460px; height:25px; float:left; border-radius:5px; margin-left:25px; border:1px solid #3396eb; margin-left:-1px;" name="<?php echo $r2['category_name'];?>" class="select_pname">
												<option>select</option>
												<?php 
												$q3=mysql_query("select * from `product` where `status`='1' and `category_id` like '%|$r[id]|%'");
												while($r3=mysql_fetch_array($q3))
												{
												?>
												<option value="<?php echo $r3['id']?>"><?php echo $r3['product_name']?></option>
												<?php } ?>
											</select>
										</div>
										<div class="rowboximg"></div>
									</div>
									<?php } ?>
									
									
								</div>
							</div><?php */?>
								
							<div class="choosebox">
								<div class="chooseboxhead">
								  choose your core components
								</div>
								<div class="chooseboxdscrip">
								<?php 
								$q4=mysql_query("select * from `category` where  `pc_status`='1' and `category_name`!='External Hard Disk' and `category_name`!='Internal Optical Drive' and `category_name`!='Memory Card Reader' and `category_name`!='Processor' and `category_name`!='Mother Board' and `category_name`!='Graphics Card' and `category_name`!='Memory' order by `mpc_priority` asc");
								while($r4=mysql_fetch_array($q4))
								{
								?>
									<div class="rowbox">
										<div class="rowboximg">
											<a href="1.htm" class="tu_ql  tu_iframe_500x370 style1"><img src="../admin_new/inventory_management/<?php echo $r4['img'];?>" width="62" height="36" style="margin-left:15px; margin-top:12px;" /></a>
										</div>
										<div class="rowboxdescrip">
										<span style="font-size:16px;color:#3396eb;"><?php echo $r4['category_name'];?></span>
											<br />
											<select style="width:460px; height:25px; float:left; border-radius:5px; margin-left:25px; border:1px solid #3396eb; margin-left:-1px;" name="<?php echo $r4['category_name'];?>" class="select_pname">
												<option>select</option>
												<?php 
												$q5=mysql_query("select * from `product` where `status`='1' and `category_id` like '%|$r4[id]|%'");
												while($r5=mysql_fetch_array($q5))
												{
												?>
												<option value="<?php echo $r5['id']?>"><?php echo $r5['product_name']?></option>
												<?php } ?>
											</select>
									  </div>
										<div class="rowboximg">
										   
												<img src="images/details_button.png" style="margin-top: 15px;"/>
										    
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
							
							
					</div>
					
						<div id="containerbox_detail_right" style="margin-top:585px;">
							<div class="containerbox_detail_right_head">
								system summary
							</div>
							<div class="containerbox_detail_right_descrip">
							
								<span style="font-size:16px;color:#3396eb; font-weight:bold;" id="totalprice_val">Rs28300</span> ex VAT<br /><br />
								
							Free Bhubaneswar and Cuttuck Delivery on all Orders!<br /><br />
								<input type="submit" value="" style="background:url(images/proceed.gif); width:130px; height:22px; border:none;" />
							</div>
						</div>
				</div>
		 	</div>
			</form>
		</div>
	</div>
</div>

<?php include_once('bottombar.php');?>	
</body>
</html>
