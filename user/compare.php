<?php
include_once("function.php");
$pid=$_SESSION['product_id'];

//var_dump($pid);
//echo $pid.'aaaa';
//$id="";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::LUVVIZ:::...</title>
<!--<link type="text/css" href="menu.css" rel="stylesheet" />-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>


<!-- end of script for dropdown side menuy -->
							  
<script type="text/javascript" src="js/msscript.js"></script>
 <script type="text/javascript" src="js/overlaybox.js"></script>
 
<!--<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">-->
            
        <!-- Assigning global javascript variable for image host -->
   
<script type='text/javascript' src='jquery-1.9.1.min.js'></script>
<script>
$(function() {
$('.colla').next().hide();
$('.colla').click(function(){

	 
	   if($(this).next().is(':hidden') )
	   $(this).next().show('slow');
	  else{
	   $(this).next().hide('slow');
	  }
	 
   // $('#images').show();
  });
  
 
  
 });

</script>
<link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
<!--<link href='http://fonts.googleapis.com/css?family=Princess+Sofia' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="tm-stylesheet.css">
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">-->
<style>
.leftmenu{
width:195px; 
height:20px; 
padding-top:5px; 
font-family:Arial, Helvetica, sans-serif; 
color:#333333; 
background:#efefef; 
float:left; margin-top:5px;
}
</style>
<!--dropdown start-->
 <!------------<script src="jquery-latest.min.js" type="text/javascript"></script>-------------->
    
    
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
				
				
		<div id="menuu" style="height:100px;">
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
<div id="contentbar" style="height:auto; margin-top: 20px;">
			<div id="contentbar_box" style="height:0px;">
			
							
  
							
							
							
							
							 <div id="content5_box1" style="float:left; height:auto; width:1040px;  border:1px #CCCCCC solid;margin-top:0px; margin-left:0px; margin-bottom:30px;  ">
							<div id="content5_topbox1" style=" width:1040px; height:auto;  border:1px #CCCCCC solid; background:#efefef;">
						<p style="font-weight:bold; margin-top:8px; margin-left:10px; font-size:12.5px; font-family:arial; color:#2073B2;">Compared Products</p></div>
						<ul>
							 <?php
							 if($val=='')
							 {
							 
							 $val=explode("|",$pid);
foreach($val as $v)
{
	   //echo $v;
$qu_prod=mysql_query("select * from `product` where `id`='$v'") or die(mysql_error());
$res_prod=mysql_fetch_array($qu_prod);
	$product_id=$res_prod['id'];
	$product_name=$res_prod['product_name'];
	$product_desc=$res_prod['description'];
	$product_price=$res_prod['price'];
	$product_img=$res_prod['image'];
?>		
							  			 <li class="itm hasOverlay unit size1of4 " style="list-style-type:none; height:auto; width:50%; margin-left:0%;">
							   <a href="oneproduct.php?idvalue=<?php echo $product_id?>">
							   			<div class="content5smallbox" style="height:auto;  margin-left:0px; margin-top:7px; text-align:center; width:850px; float: left; margin-bottom: 20px;">
										
										 <!-- Could not find the End of this div even on original document-->
									
										
										
											<div style="width:150px; height:auto; float: left; margin-left:0px;  ">
													<img src="../admin_new/inventory_management/<?php echo $product_img?>"  style="width:140px; height:auto; margin-top:0px;" class="itm-img" alt="<?php echo $r1['alternate_val'];?>"/>
											</div>
											<div style="width:600px; height: auto; float: left; margin-left: 20px;">
													<p style="height:auto; float:left;">
																<div style="font-family:ProximaNova-Regular; font-size:13px; color:#000000; font-weight:bold; height:auto; float:left; text-align:left; width:600px;">
																
																<?php echo $res_brandname['brand_name'];?><br/>
																		<span style="font-weight:normal; font-family:arial; color:#13A113;">	<?php echo $product_name?></span>
																
																
																<?php echo $product_desc;?>
																<span style="font-family:arial;">
																			Rs.<?php echo $product_price?>
																</span>
																</div>
														</p>
											</div>	
											</div>
								</a>
							   </li>
							   <?php
							   }
							   }
							   else
							   {
							   echo "Please choose some product to compare";
							   }
								 unset($_SESSION['product_id']);
							   ?>
							   
				 
				 
				 </ul>
							  
				</div>			  
							 
								
								
				 </div>
</div>

</div>
</div>
<?php include_once('bottombar.php');?>						
					</body>
					</html>
					
					
