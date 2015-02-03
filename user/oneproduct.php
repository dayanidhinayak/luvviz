<?php
include_once("function.php");
$pid=$_GET['idvalue'];
$cid1=$_GET['idvalue1'];
$brnd=$_GET['bid1'];
$qmapkart=mysql_query("select `metatitle`,`metadescription`,`metakeyword` from `product` where `id`='$pid'") or die(mysql_error());
$rmapkart=mysql_fetch_array($qmapkart);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="<?php echo $rmapkart['metakeyword'];?>">
<meta name="description" content="<?php echo $rmapkart['metadescription'];?>">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
if($rmapkart['metatitle']=='')
{
?>
<title>...:::LUVVIZ:::...</title>
<?php
}
else{
?>
<title><?php echo $rmapkart['metatitle'];?></title>
<?php
}
?>
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css1/style.css" />
	<link rel="stylesheet" type="text/css" href="css1/jquery.jscrollpane.css" media="all" />
        <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>

  <script src="alice-1362145177.js" type="text/javascript"></script>
 <script src="js/jquery-1.6.js" type="text/javascript"></script> 
<script src="js/jquery.jqzoom-core.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/jquery.jqzoom.css" type="text/css">
 		
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
background: -moz-linear-gradient(center top , rgb(250, 165, 26), rgb(244, 122, 32)) repeat scroll 0% 0% transparent; 
background: -webkit-gradient(linear, center top, center bottom, from(rgb(250, 165, 26)), to(rgb(244, 122, 32)));
font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; font-size:22px; padding:10px;  text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3); border-radius: 4px 4px 4px 4px; box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2); text-align:center;
}
.buybutton:hover{
background:-moz-linear-gradient(center top , rgb(248, 142, 17), rgb(240, 96, 21)) repeat scroll 0% 0% transparent;}

.clearfix:after{clear:both;content:".";display:block;font-size:0;height:0;line-height:0;visibility:hidden;}
.clearfix{display:block;zoom:1}


ul#thumblist{display:block;}
ul#thumblist li{float:left;margin-right:2px;list-style:none;}
ul#thumblist li a{display:block;border:1px solid #CCC;}
ul#thumblist li a.zoomThumbActive{
    border:1px solid red;
}
table tbody tr {
height:20px;
}
</style>
		
<!-- script for dropdown -->
<!--<link type="text/css" href="menu.css" rel="stylesheet" />-->

<!--<script type="text/javascript" src="js/treeMenu.js"></script>-->
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
alert("We do delivery in Your Area. Please proceed to order your product. ");
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
function purchaseorder(productid,catid,bdid)
{
var s=$("#siz").html();
if($("#siz").html()){
 if($('.chk').is(":checked")) {
var checkedVals = $('.chk:radio:checked').map(function() {
    return this.value;
}).get();
//$.ajax({
  //url:'shopping.php',
  //success: function(result){
window.location.href="shopping.php?id="+productid+'&id1='+catid+'&bid2='+bdid+'&checkval='+checkedVals;
	//}
	//});
}
else{
alert("select a size");
}
}
else{
//$.ajax({
  //url:'shopping.php?id='+productid+'&id1='+catid+'&bid2='+bdid+'&checkval='+checkedVals,
  //success: function(result){
window.location.href="shopping.php?id="+productid+'&id1='+catid+'&bid2='+bdid+'&checkval='+checkedVals;
	//}
	//});
}
}
</script>
<script type="text/javascript">
var $j = jQuery.noConflict();
$j(document).ready(function() {
	$j('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: false,
            alwaysOn:false
        });
	
});


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
<script>
$(document).ready(function() {
$('.search').click(function(){
var codval=$('#textval').val();
//alert(codval);
$.ajax({url:"cod_check.php?codeval="+codval,
success:function(result){
//alert(result);
if(result==1)
{
 
 alert("cod isnot available");
  

   }
   else{
	    alert("cod is available");
	 
   }
  }
  });

});

});

</script>
<!-- pop up-->
 			<link rel="stylesheet" href="css/reveal.css">	
			<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
			<script type="text/javascript" src="js/jquery.reveal.js"></script>  
		 <!--pop up end --> 
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


<!---------------------------submenu bar---------------------->	

								<div id="submenu" style="border-bottom:none; padding-top:0px;">
									<div style="width:1040px; height:35px; margin:auto; border-bottom: 1px solid rgb(134, 134, 134); margin-top:8px;">
										<div id="submenu-leftbox" style="margin-top:0px;">

			
			<!--<span style="font-weight:bold; font-size:14px;">Your are here :</span>-->
			<?php 
			/*$getcat=mysql_query("select * from `category` where `id`='$cid1'");
			$rescat=mysql_fetch_array($getcat);
			

			$brandname=mysql_query("select * from `brand` where `id`='$brnd'");
			$resbrandname=mysql_fetch_array($brandname);
		        //echo $resbrandname['brand_name']."----";
			echo $pid;
			echo 'Home';
			//echo $cid1;
			path($pid);

			echo ">".$resbrandname['brand_name'];*/
			
			?>
			<!--head start-->
<!--<span style="font-weight:bold; font-size:14px;">Your are here :</span>
<?php 
	$que=mysql_query("select * from `product` where `id`='$pid'");
	$res=mysql_fetch_array($que);
	//$category_id=$res['category_id'];
	//echo $category_id;
	$q1=mysql_query("select * from `brand` where `id`='$res[brand_id]'");
	$r1=mysql_fetch_array($q1);
	//$que1=mysql_query("select * from `category` where `id`='$cid'");
	//$res1=mysql_fetch_array($que1);

			echo 'Home'.">";
			$parent=mysql_query("select * from `category` where `id`='$cid1'");
			$resparent=mysql_fetch_array($parent);
			$br=mysql_query("select `brand_name` from `brand` where `id`='$brnd'");
			$resbr=mysql_fetch_array($br);
			echo $resbr['brand_name'].">";
			//echo $res1['category_name'].">";
			//echo $r1['brand_name'].">";
			echo "<span style='font-size:11px;color: rgb(32, 115, 178);'>".$res["product_name"]."</span>";
			?>-->
<!--head end-->
			
										</div>
												<!--<div id="submenu-rightbox">
										<span class="text" style="font-weight:bold; float:left;">
										Sort By :
										</span>
												<select class="form" style="padding:4px; height:25px; width:212px;">
														<option>
																Select
														</option>
												</select>
										                </div>-->
                                                                         </div>
								</div>

<!---------------------------submenu bar end---------------------->


<div id="contentbar" style="height:auto; min-height:500px; width:100%; float:left; min-height:0px;">
		
			<div style="width:1040px; height:auto; min-height:1000px; margin:auto; margin-top:0px; border:1px solid #CCCCCC;  border-radius:5px; -moz-border-radius:5px; border:none; min-height:0px;">
						<div style="width:1040px; height:auto; margin:10px; min-height:300px; margin-right:0px; float:left;">
						<?php
						
						$que=mysql_query("select * from `product` where `id`='$pid'");
						$res=mysql_fetch_array($que);
						?>
									
							 <div class="clearfix" id="content" style="width:500px; height:auto; min-height:324px;  float:left; margin-top:0px;" >
									
									<div style="width:120px; height:auto; float:left;">	      
									       <div class="clearfix" style="width:120px; height:auto; float: left; margin-top: 15px; margin-top:0px;">
										      <ul id="thumblist" class="clearfix" style="margin:0px; padding:0px;" >
										      <li style="width: 100px;
height: 152px;
float: left;
margin-top: 10px;
border: 1px solid rgb(201, 199, 199); margin-top:0px; background:#fff;"><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '../admin_new/inventory_management/<?php echo $res['image'];?>',largeimage: '../admin_new/inventory_management/<?php echo $res['image'];?>'}" style="width: 100px;
height: 152px;
float: left;
margin-top:0px;
border:none; "><img src='../admin_new/inventory_management/<?php echo $res['image'];?>' style="width:100px; height:152px;"></a></li>
										      <?php
										      $qimage=mysql_query("select * from `product_images` where `product_id`='$pid' limit 0,5");
										      while($rimage=mysql_fetch_array($qimage))
										      {
										      
										      ?>
										      
											      <li style="width: 100px;
height: 152px;
float: left;
margin-top: 10px;
border: 1px solid rgb(201, 199, 199); background:#fff;"><a  href='javascript:void(0);' rel="{gallery: 'gal1', smallimage: '../admin_new/inventory_management/<?php echo $rimage['image'];?>',largeimage: '../admin_new/inventory_management/<?php echo $rimage['image'];?>'}" style="width: 100px;
height: 152px;
float: left;
margin-top:0px;
border:none;"><img src='../admin_new/inventory_management/<?php echo $rimage['image'];?>' style="width:100px; height:152px;"></a></li>
											      <?php
											      }
											      ?>
											       
										      </ul>
									       </div>
									   </div>

									   <div style="width:302px; height:auto; float:left;">
										  <div class="clearfix" style="height:auto; border: 1px solid rgb(201, 199, 199); background:#fff;">
										      <a href="../admin_new/inventory_management/<?php echo $res['image'];?>" class="jqzoom" rel='gal1'  title="<?php echo $res['product_name']?>"  >
											  <img src="../admin_new/inventory_management/<?php echo $res['image'];?>"   style="width:300px; height:auto; max-height:auto;" alt="<?php echo $res['alternate_val']; ?>"/>
										      </a>
										     
										  </div>
									</div>
							</div>
									<div style="width:400px; height:auto; float:left; padding:10px;  padding-top:0px; margin-left:40px; padding-left:0px;">
									<div style="height:auto; float:left; width:550px; border-bottom:1px solid #CCCCCC; border-bottom:none;">
									<div id="productsubname" style="font-size:22px; color: rgb(32, 115, 178); padding-top:0px; margin-top:0px; font-family:arial; ">
									<?php
$q1=mysql_query("select * from `brand` where `id`='$res[brand_id]'");
$r1=mysql_fetch_array($q1);
echo "<span style='text-transform:uppercase;'>".$r1['brand_name']."</span><br/>";
echo "<span style='font-size:12px; color:rgb(19, 161, 19);text-transform:uppercase;'>".$res['product_name']."</span>";
?>
									  </div>
									  <div id="productname" style="font-size:12px; margin-top:15px; font-family: Arial,Helvetica,sans-serif;
color: rgb(68, 68, 68); font-size:20px; font-weight:normal; ">
												INR <?php echo $res['price']?>
									  </div>




									<p class="text" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-transform:uppercase;">
														<span style="color:#636363; font-size:10px;">
														<?php echo $res['barcodeno'];?>
														</span>

									</p>

</div>
												

<!--var strt-->

<div style="width:400px; height:auto; float:left;">
<?php
												
												$xx=mysql_query("select * from `category` where `id`='$cid1'");
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

					


			$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$cid1|%' limit 0,10 ");

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
												if($v1=="size"){
																
																}
																else{
													?>													

<!--varient start-->
<div style="width:175px; height:auto; padding-bottom:5px;">
	<div class="leftmenu  colla" id="colla<?php echo $v2?>" style="font-family: 'Source Sans Pro',sans-serif;
	font-size: 13px;
	color: rgb(51, 51, 51);
	padding-bottom: 5px;
	padding-top:4px; width:50px; margin-left:10px; margin-top:0px; padding-left:0px; float:left; margin-left:0px; width:auto;">
	<span class="text" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-transform:uppercase; font-weight:bold;">
																	<?php echo $v1?>:
	 </span>
	</div>	
<?php
}
if($v1=="size"){
																
																}
																else{
?>
<div  style="width:120px; height:auto; padding-bottom: 5px; font-family:arial;">

						 <table style="width:100%; height:auto;">
												 <?php 
												 $countval=0;
												 $vr=array();
												 
														
												

												$que=mysql_query("select `description` from product_varient WHERE  `product_id`='$pid' and  `varient_name`='$v1'")or die (mysql_error());

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

		 <tr style=" border-collapse:collapse; ">
		 			<td class="para text" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-transform:uppercase; width:200px; float:left; margin-left:20px;"><?php echo $desc_val;?> 					</td>
		</tr>

		 <?php
		}
												if($countval==0)
												{
												

												?>
												
												<div class="varientnull"  title="colla<?php echo $v2?>"></div>

												
												
												
												<?php

												}
		
		
		?>										  

						</table>				 
							</div>					 
							
			</div>
<?php 
							 }
							}
							?>


</div>

</div>


<!--var end-->


<!--cont strt-->

<div style="width:400px; height:auto; float:left; margin-left:40px;">

														 <!--Color :   Beige <br />-->
														 <?php
														 $sqlvarient=mysql_query("select * from `product_varient` WHERE  `product_id`='$pid' and  `varient_name`='size'");
														
														 $numvarient=mysql_num_rows($sqlvarient);
														 if($numvarient==0){
														 }
														 else{
														  $sqlst=mysql_query("SELECT sum(`quantity`) as quantt 
FROM `stock` where `product_id`='$pid'");
$resst=mysql_fetch_array($sqlst);
if($resst['quantt']>0){
														 ?>
														 
												<span style="font-family:arial;" id="size_sel">
												 Size :   Select a Size  <br />
												</span>
												<?php
												}
												else{}
												?>
									
												<div class="size-box" style="margin-top:10px; width:auto;">
							
								<?php
//echo $pid;
$sqlstock=mysql_query("SELECT *,`productcode`,`product_id` , sum( `quantity` ) as quant , size
FROM `stock` where `product_id`='$pid' GROUP BY `product_id` , `size`");
while($ress=mysql_fetch_array($sqlstock)){
$sqldisp=mysql_query("select `dispatch_quantity` from `dispatch` where  `product_id`='$ress[product_id]' and `size`='$ress[size]'");
//echo "select `dispatch_quantity` from `dispatch` where  `product_id`='$ress[product_id]' and `size`='$ress[size]'";
$resdisp=mysql_fetch_array($sqldisp);
//echo $ress['quant']."---".$resdisp['dispatch_quantity'];
$less=$ress['quant']-$resdisp['dispatch_quantity'];
//echo $ress['product_id'].$ress['size'].$ress['quant'].'-------------------------'.$less.'<br />';
if($ress['quant']==0){ 
}
else{

$q2=mysql_query("select * from `product_varient` where  `product_id`='$pid' and `description`='$ress[size]' group by `description`");
while($r2=mysql_fetch_array($q2)){

?>
										<div class="size" style="width:auto; border:none;">
										<input type="radio" name="check" class="chk" id="chkk" value="<?php echo $r2['id'];?>"/>
										</div>
										<div class="size" style="width:auto;" id="siz">
											<?php echo $r2['description'];?>
									    </div>
													      <?php
														   }

}
}

?>

													      						            
														<div class="smalltextbox">
																<a href="#" class="big-link" data-reveal-id="myModal" data-animation="none" style="color:#000;">know your size</a>
														</div>
												</div>
											
													<div id="myModal" class="reveal-modal" style="width:700px; left:45%;">
													<?php
													
													$imgbnd=mysql_query("select * from `brand` where `id`='$res[brand_id]'");
													
													while($resimg=mysql_fetch_array($imgbnd)){
													echo "<img src='../admin_new/inventory_management/$resimg[icon]' />";
													}
													?>
														<!--<img src="images/5.jpg" style="width:100%;l"/>-->
														
														
														
														<a class="close-reveal-modal">&#215;</a>
													</div>
													<?php
													}
													?>
												<div class="size-box" style="width:350px; margin-top:10px;">
													<!--	<div id="inrbox">
																INR <?php echo $res['price'];?> 
														</div>-->
															     <!--<div class="size" style="font-family: 'Source Sans Pro',sans-serif; width:100px; font-size:14px;">
																	     Rs. 49 Shipping
															     </div>-->
														<!--<div class="smalltextbox">
																know more
														</div>-->
												</div>
												<div class="size-box" style="margin-top:10px;">
														<div id="contect-botton" style=" background:#2073b2; border:none; width:180px; font-size:18px; padding:5px; cursor: pointer;" onclick="return purchaseorder('<?php echo $pid;?>','<?php echo $cid1;?>','<?php echo $brnd;?>');">
																ADD TO CART
														</div>
												</div>
												<div class="size-box" style="border:1px solid #c9c7c7; margin-top:10px; padding:15px;">
														<div style="display:none;">
															<div class="check-box">
																	<img src="images/icon1.png"  /><br />
																	100% SECURE<br /> SHOPPING
															</div>
															<div class="check-box">
																	<img src="images/icon2.png"  /><br />
																	100% SECURE<br /> SHOPPING
															</div>
															<div class="check-box">
																	<img src="images/icon3.png"  /><br />
																	100% SECURE<br /> SHOPPING
															</div>
														</div>
														<div class="size-box" style="width:275px; margin-left:28px; padding-top:10px;">
																<div class="check-box" style="text-align:left; margin-left:0px;">
																		Check COD availablity<br />
																		at your location
																</div>
															  <div id="pincode-box">
																	        <input type="text" name="" class="form" style="width:100px; float:left; height:19px;" id="textval" />
																		<input type="button" name="Input" value="Search" style="width:40px; float:left; background:#2073b2; border:none; color:#fff; padding:5px; font-size:10px;" class="search"/>
															  </div>
														</div>
												</div>
												
<!--cont end-->
									 <!-- <div id="productname" style="font-size:12px; margin-top:2px; color:#0f5da6;">
												<?php echo $res['product_name']?>
									  </div>-->
									 <!-- <div style="width:550px; height:40px; float:left;">
									  <!--  <div style="width:40px; height:40px; float:left; font-family:Arial, Helvetica, sans-serif; color:rgb(0, 75, 145); font-size:12px; ">
												Rating &nbsp; 
									</div>-->
									<!--<div style="width:80px; height:30px; float:left; margin-top:5px;">
									 <!-- <div style="width:80px; height:13px; float:left;">
												<div style="background:#FFCC00; height:13px; width:<?php echo $res['rating']*20 ?>%;">
												</div>
									</div>


</div>
                                                                        <?php
                                                                         $result=mysql_query("select `product_id` from `review` where `product_id`='$pid' and `status`='1'") or die(mysql_error());
                                                                         $num_row=mysql_num_rows($result);
                                                                         $que_total=mysql_query("select ((sum(`rating`)/count(`id`))*20) as avg from `review` where `product_id`='$pid'") or die(mysql_error());
                                                                         $res_total=mysql_fetch_array($que_total);
                                                                         $col= $res_total['avg'];
                                                                         ?>
									 <!-- <div style="width:80px; height:17px; float:left; margin-top:-13px;" >
										<div style="width:<?php echo $col;?>%; height: 17px; float:left; background: #ffc108; margin-top: -4px;">
                                                                                     <img src="images/5stars.png"/>
                                                                                </div> 
									</div>-->
									<!--</div>-->
									
									 <!-- <div style="float:left; color:rgb(0, 75, 145); font-family:Arial, Helvetica, sans-serif;   font-size:12px; margin-left:10px;">
												| (<?php echo $num_row;?>) Reviews Available 
									</div>
									</div>-->
                                                                         <!-- <?php
                                                                                                if ($res['description']=='')
                                                                                                {
                                                                                                    ?>
									<div style="width:550px; height:80px; float:left;  font-family:Arial, Helvetica, sans-serif; font-size:12px;">
											       
                                                                                                    1 Year limited warranty on <?php echo $res['product_name']?>.
                                                                                                
                                                                                                
									</div>
                                                                        <?php
                                                                        }
                                                                                               
                                                                        else{
                                                                                                    
                                                                                                ?>
									<div style="width:530px; height:auto; min-height:50px; float:left; padding-left: 20px;  ">
												<p style="font-size:11.5px; font-weight:100; color:#666666; line-height: 1.3;">
                                                                                                    <?php echo $res['description']?>
												</p>
									</div>
                                                                       <?php }?>-->
									<!--<div style="width:320px; height:100px; float:left;  line-height:1.3;  background:#009999; display:none;">
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
		   							  <div style="width:550px; height:60px; float:left;  line-height:1.6; margin-top:10px; border-top:1px solid #cccccc; border-top:none;">
									  <?php $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$res[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							$disc=$rr1['discount'];
							$finalval=$res['price']*(1-$disc/100);
							if($disc)
										{
							?>
							<div style="height:60px; width:165px; float:left; border-right:1px solid #efefef;  color:#C81C09;">
									Rs.<?php 
									echo "<strike style='font-size:15px; color:#C81C09; foint-weight:bold;'>".number_format($res['price'],2)."</strike><br/>";
									?>
									<span style="float:left; font-size:18px; color:#0f5da6; font-weight:bold; margin-top: 0px;">
											<img src="images/smiley.gif" width="20px" height="20px" />
											Rs.
									</span>
									<?php
									echo " <h1 style='font-weight:normal; float:left; font-size:18px;  color:#0f5da6; margin-top:0px;'>".number_format($finalval,2)."</h1>";?></br></br>
										<img src="images/Add_to_Cart_Button.png" style="margin-top: -15px; margin-left: -5px; cursor: pointer;"  onclick="return purchaseorder('<?php echo $pid;?>');"/>
							</div>
							<?php 
							}
							else
							{
							?>
							<!--<div style="height:60px; width:160px; float:left; border-right:1px solid #cccccc; padding-left:10px;">
									<h1 style="font-weight:normal; margin-bottom: 0px; padding-bottom: 0px;">Rs. <?php echo $res['price']?></h1></br>
									<img src="images/Add_to_Cart_Button.png" style="margin-top: -20px; margin-left: -5px; cursor: pointer;"  onclick="return purchaseorder('<?php echo $pid;?>');"/>
							</div>	-->
							<!--<?php
							}
							?>-->		
							
							
							</div>					  
							
							  		  
						  </div>
					</div>	 
</div>

<div style="width:100%; height:auto; float:left;">
<div style="width:1040px; margin:auto; height:auto;">
			<!--heading start-->

				<div style="width:800px; height:auto; float:left; margin-top:10px;">
										<div class="head3" style="border-bottom:none;">

												PRODUCT DESCRIPTION
										</div>
										<div class="head3" style="margin-left:140px; border-bottom:none;">
												YOU MAY ALSO LIKE
										</div>
				</div>
			<!--heading end-->
			<!--content2 start-->
				<div id="content2" style="margin-top:0px; border-top:1px solid #2073b2; max-height:none;">
										<div style=" width:370px; height:auto; float:left; font-family: Arial,Helvetica,sans-serif;
color: rgb(51, 51, 51);
font-size: 11px;">
												<h3 class="head4">
														STYLE NOTE
												</h3>
												<p class="text">
														<?php echo $res['description']?>
												</p>
												<!--<h3 class="head4">
														Fit Details
												</h3>
												<p class="text">
														Mandarin collar sleeveless jacket.
Bound pocket on top left & welt pocket at the waist on both sides.
Armhole princess cut on the back with slits. 
												</p>-->
										</div>
<!--content pic start-->
										<div style="width:650px; height:auto; float:left; margin-left:20px;">
										<div id="ca-container" class="ca-container" style="width:590px; height:230px;">
												<div class="ca-wrapper">


<?php
						
						
						
						$que_prod=mysql_query("SELECT `releated_pro_id` FROM `product` WHERE `id` ='$pid'");
  						$rre=mysql_fetch_array($que_prod);
						
						
						$relatedid=$rre['releated_pro_id'];
						
						
						
						$related=explode('|',$relatedid);
						
						foreach($related as $rel)
						{
												if($rel!='')
												{
					     													
						$q1=mysql_query("select * from `product` where `id`='$rel' and `status`='1'");
						$r1=mysql_fetch_array($q1);
						
						//$product_description=substr($r1['description'], 0, 50);
						
						$qm=mysql_query("select `brand_name` from `brand` where `id`='$r1[brand_id]'");
						//echo "select `brand_name` from `brand` where `id`='$r1[brand_id]'";
						$rm=mysql_fetch_array($qm);	
		
		
							 $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$r1[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' ");
							$rr1=mysql_fetch_array($qq1);
							
							$disc=$rr1['discount'];
							$finalval=$r1['price']*(1-$disc/100);
							
							if($r1['product_name']!='')
							{
		
					?>



													<a href="oneproduct.php?idvalue=<?php echo $rel; ?>"><div class="ca-item ca-item-1" style="width:130px;">
															<div class="ca-item-main" style="float:left; left:-15px; top:0px;">
																		<div class="product-box2">
																				<div class="product-content2" style="width:120px;">
<img src="../admin_new/inventory_management/<?php echo $r1['image']?>"  align="bottom" style="width:140px; margin-top:0px; width:120px; height:180px; max-height:180px;" class="itm-img" alt="<?php echo $r1['alternate_val'];?>"/>
																				</div>
																				<div class="product-text2">
																						<?php  echo $rm['brand_name'];?><br/>
<?php echo $r1['product_name']?>
</div>
																								<div class="price2">
																						INR <?php echo $r1['price'];?>
																				</div>
																		</div>
															</div></a>
													</div>
										<?php
										   }
										   }
										  }
						
							   			?>
											
											</div>



							 
									</div>

							</div>
							

							<!--content pic end-->
						</div>		
						
</div>
					<!--content2 end-->
</div>


								<!--<div style="height:132px; width:945px; float:left; margin-top:14px;">
									<div style="width:750px; height:132px; float:left; background:#efefef;">
										<div style="width:750px; height:90px; float:left; ">
											<div style="width:248px; height:90px; float:left; border-right:2px solid #FFFFFF;">
												<div class="buybutton"  onclick="return purchaseorder('<?php echo $pid;?>');" style="cursor:pointer;">
													Buy This Now
												</div>
												<div style="width:238px; float:left; text-align:center; padding:5px; ">
													<p style="color:rgb(102, 102, 102); font-size:13px;">with an option to pay Cash on Delivery</p>
												</div>
											</div>
											<div style="width:248px; height:90px; float:left;  border-right:2px solid #FFFFFF;">
												<p style="padding-left:15px; margin-top:10px;">Please enter your area pincode to<br/> check your delivery information</p>
												<table style="width:200px; float:left; margin-left:15px; margin-top:5px; " >
													<tr>
														<td><input type="text" name="pin" id="pin"  style="width:130px; padding:4px 3px; border:1px solid rgb(204, 204, 204);"   /></td>
														<td><input type="button" name="submit" value="Check" onclick="return checkpin();" style="padding: 4px 14px 7px;border:none; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);
border-radius: 4px 4px 4px 4px;box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);font-size: 13px; background: -moz-linear-gradient(center top , rgb(56, 129, 167), rgb(36, 90, 119)) repeat scroll 0% 0% transparent; background: -webkit-gradient(linear, center top, center bottom, from(rgb(56, 129, 167)), to(rgb(36, 90, 119)));color:#FFFFFF;" /></td>
													</tr>
												</table>
											</div>
											<div style="width:248px; height:90px; float:left;">
												<p style="padding-left:15px; margin-top:10px;">
													Seller: <span style="color:rgb(0, 75, 145);">Mapkart</span><br/>
													<div style="width:260px; height:17px; float:left; " >
                                                                                                         <div style="width:80px; height:17px; float:left; margin-top:0px;" >
                                                                                                              <div style="width:<?php echo $col;?>%; height: 17px; float:left; background: #ffc108;">
                                                                                                                   <img src="images/5stars1.png"/ style="float: left;"> 
                                                                                                              </div>
                                                                                                         </div>
                                                                                                        (<?php echo $num_row;?>) Reviews available 
                                                                                                        <div style="width:auto;float: left;">
                                                                                                         30 Day Replacement Guarantee <span style="color:rgb(0, 75, 145);">[?]</span>
                                                                                                        </div>
                                                                                                        </div>
												</p>
											</div>
										</div>
										<div style="width:750px; float:left; border-top:1px solid #cccccc;border-bottom:1px solid #ffffff;">
										</div>
										<div style="width:750px; float:left; height:12px;">
											<p style="color: rgb(102, 102, 102); padding:10px;">
												<img src="images/phone.png" style="float:left; margin-right:5px;"/>
												You may also call us at +91-6747191111 to order (toll free). 
											</p>
										</div>
									</div>
									<?php
									$offervalue=mysql_query("select max(`slno`) as `slno` from `imagelist`");
									$maxval=mysql_fetch_array($offervalue);
									$xx=$maxval['slno'];
									$imagevalue=rand(0, $xx);
									
									
									$getdet=mysql_query("select `image` from `imagelist` where `slno`='$imagevalue'");
									$imagev=mysql_fetch_array($getdet);
									
									?>
									
									
									<div style="width:180px; height:132px; float:left; margin-left:10px; background:#00CCFF;">
											<img src="http://50.56.237.229/cake/admin_new/inventory_management/<?php echo $imagev['image']?>" style="width:180px; height:132px;" />
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
				
				
				


</div>
</div>
<div style="width:100%; height:auto; float:left; margin-top:0px; position:relative;">

<?php include_once('bottombar.php');?>	
</div>
</body>
</html>
