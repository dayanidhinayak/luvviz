<?php
ini_set("dispaly_errors",1);
include_once("function.php");
valid_chk();
//echo $xbillid."aaaaaaaaaaaaaaaaa";
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
 height:450px; 
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
 </style>
 
</head>

<body>
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>



<div id="contentbar" style="margin-top:15px; height:auto;">
			<div id="contentbar_box" style="height:0px;">
							<div id="contentleftbox" style="height: auto;">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							  <?php
							  $x=array();
							 
							$qlmenu=mysql_query("select * from `leftmenu` where `status`='1'");
							while($rlmenu=mysql_fetch_array($qlmenu))
							{
							
							  $page=$rlmenu['pagename'];
							  $p=explode(",",$page);
							  foreach($p as $p1)
							  {
							  array_push($x,"$p1");
							  }
							  
							  if (in_array("wallet.php", $x))
							    {
							?>
							<a href="<?php echo $rlmenu['href'];?>"><li class="li1"><img src="../admin_new/inventory_management/<?php echo $rlmenu['icon'];?>" style="float:left; margin-top:-5px; margin-right:10px; margin-left:10px; " /><?php echo $rlmenu['name'];?></li></a>
							<?php
							    }
							}
							?>
							
							</ul>
							
							
							
							<div style="height:auto;width:200px; float:left;" >
							<?php
							$q3=mysql_query("select * from `index_image` where `status`='1' and `position`='content3_leftimg' order by `priority` limit 0,2");
							while($r3=mysql_fetch_array($q3))
                              {
                              ?>
							
                                                            <div style="width:200px; float: left; margin-top: 10px; ">
                                                                <img src="../admin_new/inventory_management/<?php echo $r3['image']?>" alt="<?php echo $r3['alt'];?>">
                                                            </div>
                                                           
                                                            <?php
                                                            }
                                                            ?>
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
							
							<div id="contentmiddlebox" style="height:auto;"> 
							
							<div id="main" role="main" style="width:730px; height:auto;">
      
	 
        
         
		   <div class="orderbox"  style="width:735px; height:auto; margin-left:0%; padding-bottom:2%; ">
				 <h1> Wallet</h1>
				 	<div class="box" style="width:735px;height:auto;">
				 			 <?php
				 			 $q=mysql_query("select  sum(`quantity`) as quan,sum(tot_price) as price from `temp_billinfo`  where `bill_id`='$_SESSION[billid]'");

$r=mysql_fetch_array($q);
$xbillid=$_SESSION['billid'];
							 if($r['quan']==0)
							 {
							 ?>
				 	
				 		<div style="padding:10px; text-align:justify;">
						
						 No product Found.
						
						
				 		</div>
				 		 <?php
							 }
							 else{
							 ?>
							 <table cellpadding="4" cellspacing="10">
							 <tr>
							 <th>&nbsp;</th>
							 <th>Product Name</th>
							 <th>Quantity</th>
							 <th>Price</th>
							 </tr>
							 
							 
							 
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
							  <tr>
							  	<td><img src="../admin_new/inventory_management/<?php echo $xr_bill['image'];?>"  style="margin-top:0px; margin-right:8px; float:left; " height="50" width="50" alt="<?php echo $xr_bill['alternate_val']; ?>"/> </td>

								<td><?php echo $xr_bill['product_name'];?></td>
								<td><?php echo $xr_bill['quantity'];?></td>
								<td><?php echo $xr_bill['tot_price'];?></td>
							  </tr>
							  <?php
							  }
							  $final_value=$xsum+$tax;
							  }
							  ?>
							  </table>
					</div>   
			  
			</div>
						
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
