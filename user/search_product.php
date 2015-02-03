<?php
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
    <!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
   <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
	<script>
	function insert_news_mail()
	{
	
	alert("Congrats! You Have Successfully Registered For News Letter..");
	var mail=document.getElementById('mail').value;
//alert(res);
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

	}
}
xmlhttp.open("GET","insert_mail.php?q="+mail,true);

xmlhttp.send();


	
	
	
	}
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

</style>
</head>

<body >
	
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>



<div id="contentbar" style="margin-top:15px; height:auto;">
			<div id="contentbar_box" style="height: 0px;">
							<div id="contentleftbox" style="height: auto;">
							<ul style="margin-left:0px; padding-left:0px; margin-top:5px;">
							<a href="productdetails.php"><li class="li1"><img src="images/li6.png" style="float:left; margin-top:-5px; margin-right:10px; margin-left:10px; " />New Arrivals</li></a>
							<a href="sale.php"><li class="li1" style="display:none;"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px; " />Offer Sale</li></a>
							<a href="makemypc.php"><li class="li1"><img src="images/li4.png" style="float:left; margin-right:10px; margin-left:10px; " />Make my PC</li></a>
							<a href="sale.php"><li class="li1"><img src="images/li3.png" style="float:left; margin-right:10px; margin-left:10px; " />Spcial Offer</li></a>
							<a href="smeproductdetails.php"><li class="li1"><img src="images/li2.png" style="float:left; margin-right:10px; margin-left:10px; " />SME Offer</li></a>
							<a href="old_pc.php"><li class="li1"><img src="images/li5.png" style="float:left; margin-right:10px; margin-left:10px;"/> Exchange Old PC</li></a>
							</ul>
							
							
							
							<div style="height:auto;width:200px; float:left;" >
							<?php
							$q3=mysql_query("select * from `index_image` where `status`='1' and `position`='content3_leftimg' order by `priority`");
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
							<div id="contentmiddlebox" style=" height:250px;">
							<div id="main" role="main" style="width:740px; height:250px;">
      <!-- Start WOWSlider.com BODY section -->
                    <div id="wowslider-container1">
                    <div class="ws_images"><ul>
		    <?php
		    $qindeximg=mysql_query("select * from `index_image` where `position`='contentmiddlebox' and `status`='1' order by `priority`") or die(mysql_error());
		    while($rindeximg=mysql_fetch_array($qindeximg))
		    {
		    ?>
		     <li><img src="../admin_new/inventory_management/<?php echo $rindeximg['image'];?> " alt="baner1" title="<?php echo $rindeximg['tittle'];?>" id="wows1_0"/></li>
		<?php
		    }
		    ?>
                </ul></div>
                
                
                    <div class="ws_shadow"></div>
                    </div>
                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->
      
    </div>
  

  
  

							</div>
							
							
<div id="content4" style="width:730px;float: left; height:auto; margin-top: 15px; margin-left: 20px;">
	<?php
	include_once("../admin_new/inventory_management/top_sellers.php");

	
	
	include_once("search_producttype.php");
	
	?>
</div>
			</div>
</div>










	<?php include_once('bottombar.php');?>			
</body>
</html>
