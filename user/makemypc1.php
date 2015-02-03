<?php
ini_set("display_errors",1);
include_once("function.php");
//echo $_SESSION['bill_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>...:::MAPKART:::...</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<!-- script for dropdown side menuy -->
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>
<!-- end of script for dropdown side menuy -->

<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
            
        <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
  <script src="alice-1362145177.js" type="text/javascript"></script>

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

</style>

<!-- script for dropdown -->
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>
<!-- end of script for dropdown -->
<script type='text/javascript' src='jquery-1.9.1.min.js'></script>

<script>

$(function() {

$('.colla').next().hide();

$('.colla').click(function(){

	   if($(this).next().is(':hidden') )
	   {
    $('.colla').next().hide();
	   $(this).next().show('slow');
	   }

	  else{

	   $(this).next().hide('slow');

	  }

  });

  

 });



</script>
<script>
var x=0;
var y=0;
var z=0;
var x1=0;
$(function() {


				
				$('#form1').submit(function(){
				
										$('.Processor').each(function (){
										
										if($(this).is(":checked")) {
										//alert("please select one processor");
										x=1;
										return false;
										}
										
										
										});
				
				
										$('.Mother Board ').each(function (){
										
										if($(this).is(":checked")) {
										
										
										y=1;
										return false;
										}
										
										
										});
										y=1;
				alert (x);
				alert(y);
				if(x=='0')
				{
				alert("please select one processor");
				return false;
				
				}
				if(y=='0')
				{
				alert("please select one Mother Board");
				return false;
				
				}
				
				
				});

  

 });

</script>
<script>
function details(key,cat_name)
{
//alert(key);
//alert(cat_name);
if (window.XMLHttpRequest)

  {
  xmlhttp=new XMLHttpRequest();
  }
else
 {
 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
xmlhttp.onreadystatechange=function()
 {
 if (xmlhttp.readyState==4 && xmlhttp.status==200)
 {
var result=xmlhttp.responseText;
//alert(result);
document.getElementById(cat_name).innerHTML=result;

	}
}
xmlhttp.open("GET","search_details.php?q="+key,true);

xmlhttp.send();



}

</script>
</head>

<body>
<div id="topbar"> 
			<div id="topbarbox">
						<div id="topbarbox1">  <p style="font-size:14px; margin:3px; color:#666666; float:left;">  Free Shipping*
                                                                           Cash on Delivery
                                                                           30 Days-Return
                                                  Customer Support (24x7) 0124-6128000
												  <div class="topmenu1" style="float:left; margin-left:110px;">help</div>
												  
												  <div class="topmenu1" style="float:left;">  Sign up and get Rs. 2000</div>
												  <div class="topmenu1" style="float:left;">Login</div>
												  </p>
												    
			  </div>
						<div id="logo"><a href="index.php"><img src="images/logo.jpg" /></a></div>
						<div id="serch" style="margin-top:30px;">
						<table width="550">
  <tr>
    <td><input type="text" style="height:30px; width:400px;"/></td>
   <td style="  font-size:14px; background-color: #EB7C00; width:140px; padding-top:2px; color:#FFFFFF; text-align:center; border-top-right-radius:5px 5px; border-bottom-right-radius:5px 5px; ">SEARCH</td>
  </tr>
</table>
</div>
			</div>
</div>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>

<div id="topimgbox">
			<div id="topimgbox1"><img src="images/ShoppingBang_stripe.jpg" width="960" /></div>
</div>
<div id="contentbar" style="height:auto; min-height:620px; float:left; ">
			<div style="width:960px; margin:auto; height:auto; position:inherit;   margin-top:10px; border-radius:5px; -moz-border-radius:5px;">
			<div style="width:960px; height:auto; min-height:620px; float:left; border:1px solid #CCCCCC;">
<div id="container100" style="  background:#ffffff; width:100%; height:auto; float:left;margin-top:10px;   ">

			<div id="container" style="height:auto;" >

			 	<div class="about-cont" style=" font-weight:normal; height:auto;">
				
				<div class="container1-top" style=" height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">

									Make My Pc Lists<br/>

				</div>

				<?php
//echo "select * from `category` where `parent`='60' and `pc_status`='1'";
				$que1=mysql_query("select * from `category` where  `pc_status`='1'");

				while($res1=mysql_fetch_array($que1))

				{
				$cat_name= $res1['category_name'];
			?>
				</div>
				<div style="width:100%; float:left; margin-top:20px;">

		<div style=" height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99% ;color: #3856a0; "  class="colla" >

									<?php echo $res1['category_name'];?>

				</div>
	
		<form name="form1" id="form1" method="post" action="insert_mypc.php" onsubmit="return validate_form();">	
	<div style="width:100%; height:auto; float:left; ">
	<div style="width:30%; height:300px; float:left;overflow:auto;">
<table  style="width:100%; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#666666; float:left;  line-height:1.8; margin-top:30px;  ">



<?php
	$query=mysql_query("select * from `product` where `status`='1' and `category_id` like '%|$res1[id]|%'")or die(mysql_error());
	while($result=mysql_fetch_array($query))

		{
		if($res1['category_name']!="All Accessories")
		
		{

		?>

		<tr>

			<td><input type="radio" name="pid<?php echo $res1['id'];?>" id="<?php echo $result['id']?>" value="<?php echo $result['id']?>" class="<?php echo $res1['category_name'];?>" onclick="return details(this.value,'<?php echo $cat_name;?>');"/><?php echo $result['product_name']?></td>
			
				</tr>
				

	<?php }
	else
	{
	?>
	
	<tr>

			<td><input type="checkbox" name="<?php echo $result['id'];?>" id="<?php echo $result['id'];?>" value="<?php echo $result['id']?>" onclick="return details(this.value,'<?php echo $cat_name;?>');"/><?php echo $result['product_name']?></td>
			
				</tr>
				<?php
	
	}
	
	
	} ?>

	



</table>
</div>
<div id="<?php echo $res1['category_name'];?>" style="width:65%; height:auto; float:left;    "></div>


</div>



<?php

}

?>
<table style="float:left; width:900px; margin-top:15px;">
<tr><td align="center"><input type="submit" name="submit" value="" style="width:140px; height:30px; border:none; background:url(images/confirm.png); " class="sub"/>  </td></tr>
</table>
</form>

</div>
</div>
</div>

</div>
<!--<div style="float:left; width:70%;height:auto; " id="result">

</div>-->

</div>
</div>

<?php include_once('bottombar.php');?>	
</body>
</html>
