<?php
ini_set("dispaly_errors",1);
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
	<!-- Syntax Highlighter -->
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
<title>...:::MAPKART:::...</title>
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
   <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
  <script src="alice-1362145177.js" type="text/javascript"></script>
  <script>
  function getcategory(idval)
  {
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

document.getElementById('displayval').innerHTML=result;
//window.location.reload();

	}
}
xmlhttp.open("GET","getdetails.php?q="+idval,true);

xmlhttp.send();
  
  
  }
  </script>

<link href="style.css" rel="stylesheet" type="text/css" />

<!--slider starts-->
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
	
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
 <style>
 h1{
 color:rgb(48,48,48);
 padding-left:15px;
 padding-top:4px;
 font-size:25px;
 margin-bottom:13px;
 font-weight:600;
 font-family: 'Open Sans', sans-serif;
 }
 .box{
 width:700px; 
 height:580px; 
 float:left; 
 border-radius:2px; 
 border:1px solid #cccccc;
background: -moz-linear-gradient(top, rgba(244,244,244,0.65) 0%, rgba(244,244,244,0.38) 41%, rgba(0,0,0,0.04) 94%, rgba(0,0,0,0) 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(244,244,244,0.65)), color-stop(41%,rgba(244,244,244,0.38)), color-stop(94%,rgba(0,0,0,0.04)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* IE10+ */
background: linear-gradient(to bottom, rgba(244,244,244,0.65) 0%,rgba(244,244,244,0.38) 41%,rgba(0,0,0,0.04) 94%,rgba(0,0,0,0) 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6f4f4f4', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
 }
  p{
 font-size:12px;
 font-family:Arial, Helvetica, sans-serif;
 color:rgb(110,110,110);
 line-height:1.7;
 }
 tr{
 width:100%;
 height:30px;
 font-size:12px;
 font-family:Arial, Helvetica, sans-serif;
 color:rgb(110,110,110);
 }
 
 </style>
 
</head>

<body>
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>


<div id="contentbar" style="margin-top:15px; height:630px;">
			<div id="contentbar_box" style="height:630px;">
							<div id="contentleftbox">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							<a href="productdetails.php"><li class="li1"><img src="images/li6.png" style="float:left; margin-top:-5px; margin-right:10px; margin-left:10px; " />New Arrivals</li></a>
							<a href="sale.php"><li class="li1" style="display:none;"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px; " />Offer Sale</li></a>
							<a href="makemypc.php"><li class="li1"><img src="images/li4.png" style="float:left; margin-right:10px; margin-left:10px; " />Make my PC</li></a>
							<a href="sale.php"><li class="li1"><img src="images/li3.png" style="float:left; margin-right:10px; margin-left:10px; " />Spcial Offer</li></a>
							<a href="smeproductdetails.php"><li class="li1"><img src="images/li2.png" style="float:left; margin-right:10px; margin-left:10px; " />SME Offer</li></a>
							<a href="old_pc.php"><li class="li1"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px; " />Exchange Old PC</li></a>
							</ul>
							
							
							
							<div style="height:400px; width:200px; float:left;" id="displayval">
							<?php 
							$q_sidebar=mysql_query("select `id`,`category_name` from `category` where `sidebar_status`='1' limit 0,2") or die(mysql_error());
						while($res_sidebar=mysql_fetch_array($q_sidebar))
						{	
							
							?> 
														<div style="height:20px; background:#C9C9C9; border-bottom:1px solid #999999;  width:190px; font-family:Arial, Helvetica, sans-serif; font-size:14px; float:left; color:#333333; font-weight:bold; text-align:center; padding:5px; border-color: -moz-use-text-color rgb(144, 144, 144) rgb(144, 144, 144);
-moz-border-top-colors: none;-moz-border-right-colors: none;-moz-border-bottom-colors: none;-moz-border-left-colors: none; box-shadow: 0px 4px 5px -2px rgba(0, 0, 0, 0.3);"><?php echo strtoupper($res_sidebar['category_name']);?></div>                       
														<div style="width:200px; height:160px; float:left; background:#fafafa;  ">
							<ul style="margin-left:0px; padding-left:0px; ">
			<?php
										$q1=mysql_query("select * from `category` where `parent`='$res_sidebar[id]'");
										while($r1=mysql_fetch_array($q1))
										{
										$q_brand=mysql_query("select * from brand where `brand_name`='$r1[category_name]'");
				 $r_brand=mysql_fetch_array($q_brand);
				 $bid_temp=$r_brand['id'];
										?>
							<li class="li2">&rsaquo;   <a href="productdetails.php?idval=<?php echo $r1['id']?>&type=brand&bid=<?php echo $bid_temp; ?>"><?php echo $r1['category_name']?></a></li>
							<?php
							}
							?>
							
							</ul>
							</div>
							<?php } ?>
							
						      </div>
								
								
								
								
							</div>
							<?php 
							$q3=mysql_query("select * from `index_image` where `status`='1' order by `priority`");
							while($r3=mysql_fetch_array($q3))
                              {
							 
							  $prior=$r3['priority'];
							  $pos=$r3['position'];
							  $img=$r3['image'];
							  $link=$r3['link'];
							  $alt=$r3['alt'];
							 
							  $ar[$pos] = $img;
							 $arr[$pos] = $link;
							  }
							 // var_dump($ar);
							?>
							
							<div id="contentmiddlebox"> 
							
							<div id="main" role="main" style="width:730px; height:630px;">
      
	  <form action="insert_oldpc.php" method="post" enctype="multipart/form-data">
        
         
		   <div class="orderbox"  style="width:725px; height:630px; margin-left:0%; padding-bottom:2%; ">
				 <h1>Product Returns</h1>
				 	<div class="box">
				 		<p style="margin-left:20px;">Please complete the form below to request an RMA number.
				 		</p>
							<table style="width:660px; height:550px; margin-left:20px; margin-top:10px;">
								<th colspan="3">Order Information
								</th>
								<tr>
									<td colspan="2">First Name:
									</td>
									<td> Order ID:
									</td>
								</tr>
								<tr>
									<td colspan="2"><input type="text" style="width:250px; height:30px; border:1px solid #cccccc;" />
									</td>
									<td><input type="text" style="width:250px; height:30px; border:1px solid #cccccc;" />
									</td>
								</tr>
								<tr>
									<td colspan="2">Last Name:
									</td>
									<td> Order Date:
									</td>
								</tr>
								<tr>
									<td colspan="2"><input type="text" style="width:250px; height:30px; border:1px solid #cccccc;" />
									</td>
									<td><input type="text" style="width:250px; height:30px; border:1px solid #cccccc;" />
									</td>
								</tr>
								<tr>
									<td colspan="2">E-Mail:
									</td>
									<td> Telephone:
									</td>
								</tr>
								<tr>
									<td colspan="2"><input type="text" style="width:250px; height:30px; border:1px solid #cccccc;" />
									</td>
									<td><input type="text" style="width:250px; height:30px; border:1px solid #cccccc;" />
									</td>
								</tr>
								<th colspan="3"> Product Information & Reason for Return</th>
								<tr>
									<td>Product Name:
									</td>
									<td>Product Code:
									</td>
									<td>Quantity:
									</td>
								</tr>
								<tr>
									<td><input type="text" style="width:150px; height:30px;border:1px solid #cccccc; " />
									</td>
									<td><input type="text" style="width:150px; height:30px;border:1px solid #cccccc; " />
									</td>
									<td><input type="text" style="width:150px; height:30px;border:1px solid #cccccc; " />
									</td>
								</tr>
								<tr>
									<td colspan="2"> Reason for Return:
									</td>
									<td>Product is opened:
									</td>
								
								</tr>
								<tr>
									<td colspan="2"><input type="radio" /> Dead On Arrival
									</td>
									<td><input type="radio" /> Yes
										<input type="radio" /> No
									</td>
								</tr>
								<tr>
									<td colspan="2"><input type="radio" /> Faulty, please supply details
									</td>
									<td>Faulty or other details:
									</td>
								
								</tr>
								<tr>
									<td colspan="2"><input type="radio" /> Order Error
									</td>
									<td><input type="text" style="width:200px; height:30px; border:1px solid #cccccc;" />
									</td>
								
								</tr>
								<tr>
									<td colspan="3"><input type="radio" /> Other, please supply details
									</td>
								</tr>
								<tr>
									<td colspan="3"><input type="radio" />Received Wrong Item
									</td>
								</tr>
								<tr>
									<th colspan="2" style="text-align:left;">Back
									</th>
									<th style="text-align:right;">Continue
									</th>
								</tr>
							</table>
					</div>   
			  
			</div>
						</form>
						</div>
						</div>
        
      
     
    
  <!-- jQuery -->
 
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  
  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  </div>
  </div>
  
  <?php include_once('bottombar.php');?>
</body>
</html>
