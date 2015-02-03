<?php
ini_set("dispaly_errors",1);
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
	<!-- Syntax Highlighter -->
	<!-- Modernizr -->

<title>...:::MAPKART:::...</title>

   <!-- Assigning global javascript variable for image host -->
  
       
 
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



 <!--datepicker-->
 <link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
 <script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
 	<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>
</head>

<body>
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>



<div id="contentbar" style="margin-top:15px; height:auto;">
			<div id="contentbar_box" style="height: 0px;">
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
							  
							  if (in_array("index.php", $x))
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
							
      <!-- Start WOWSlider.com BODY section -->
                    
                    
							<div id="contentmiddlebox">
							
							<div id="main" role="main" style="width:735px; height:580px;">
      
	  <form action="insert_oldpc.php" method="post" enctype="multipart/form-data">
        
         
		   <div class="orderbox"  style="width:735px; height:570px; margin-left:0%; padding-bottom:2%; border:1px solid #cccccc; margin-bottom:10px;">
				    
			  <table width="100%" border="0" height="570" style="float:left;  " >
			  <tr>
	<th colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:16px; text-align:center; height: 60px;">Exchange Old PC</th>	
	</tr>				
  <tr height="40">
    <td width="21%" >Name:</td>
    <td colspan="2"><input type="text" name="name" style=" width:85%;  height:33px; border:1px solid #CCCCCC;"/></td>
	
  </tr>
   <tr height="40">
    <td>Address:</td>
    <td width="37%"><input type="text" name="add" style=" width:85%;  height:33px; border:1px solid #CCCCCC;"/></td>
	 
  </tr>
  <tr height="40">
    <td>Email:</td>
    <td width="37%"><input type="text" name="email" style=" width:85%;  height:33px; border:1px solid #CCCCCC;"/></td>
	 
  </tr>
  <tr height="40">
    <td>Contact no:</td>
    <td width="37%"><input type="text" name="contact" style=" width:85%;  height:33px; border:1px solid #CCCCCC;"/></td>
	 
  </tr>
  <tr height="40">
    <td >Specification: </td>
    <td><textarea name="textarea" rows="9"  style=" width:85%; border:1px solid #CCCCCC; height:90px;"/>
    
      </textarea></td>
  </tr>
   <tr height="40">
    <td>Brand:</td>
    <td width="37%"><input type="text" name="brand" style=" width:85%;  height:33px; border:1px solid #CCCCCC;"/></td>
	 
  </tr>
   <tr height="40">
    <td>Date of Purchase:</td>
    <td width="37%"><input type="text" name="dop" style=" width:85%;  height:33px; border:1px solid #CCCCCC;" id="inputField"/></td>
	 
  </tr>
  <tr height="40">
    <td>Price:</td>
    <td width="37%"><input type="text" name="price" style=" width:85%; height:33px; border:1px solid #CCCCCC;"/></td>
	 
  </tr>
  
  <tr height="40">
  <td >Upload Image:</td>
  <td><label  for="file">
		<input type="file"  name="image" id="image" />
	</label></td>
  </tr>
  <tr height="40"><td></td><td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">
      Format: JPG, GIF, PNG. Filesize: 8.00 MB max
    </span></td></tr>
	<tr height="40">
	<td></td><td> <input type="submit" name=""  value="" style=" width:150px; height:40px; background:url(images/submit-button.png); border:none;" /></td>
	</tr>
</table>
 </form>
			 </div>
			 
			 
			 
			 
			 <div id="content4">
<?php

$q=mysql_query("select `type_name` from `appliedtype_to_page` where `pageid`=(select `id` from `page_details` where `pagename`='index.php')")or die(mysql_error());
$r=mysql_fetch_array($q);

if($r['type_name']=="top_sellers")
{

include_once("../admin_new/inventory_management/top_sellers.php");
}
else

{include_once("../admin_new/inventory_management/most_popular.php");
}

?>
</div>
        
      
     
    
	</div>
  

  
  <!-- jQuery -->
 
 
	

							</div>
						
			</div>
</div>






<div id="content5">
			<div id="content5_box"  style="border:1px solid #CCCCCC; height:200px;">
						<div id="content5_box1" style="">
									<div id="content5_topbox1" ><p style="font-weight:bold; margin-top:10px; margin-left:10px;">Top                                     Brands</p></div>
									<?php
									$qwe=mysql_query("SELECT * FROM brand  where `priority`!=0  ORDER BY `priority` asc LIMIT 0 , 7");
									while($rwe=mysql_fetch_array($qwe))
									{
									
									
									?>
									
									
									<div class="content5smallbox" style="margin-left:25px; background:#cccccc; border:1px solid #cccccc; "><img src="../admin_new/inventory_management/<?php echo $rwe['icon'];?>" style="width:100px; height:100px;" /></div>
									<?php
									}
									?>
						</div>
			</div>
</div>

<div id="content6" style="display:none;">
			<div id="content6box" ><h4>Online shopping that helps you make the right choice</h4>
			<br />
			<P>We offer online shopping that is stylish, trendy and reliable – the Shopping that is light on your pockets, the Shopping that offers all of your favourite brands and more, the Shopping that is simpler, easier, faster and always Online.<br />
			<br />
			At mapkart, we understand shopping better, and therefore, we strive to offer you the best of fashion and elegance. We showcase products from all categories such as clothing, footwear, jewellery, accessories, home & living, personal care, and exotic cosmetics.
			
			<h4 style="margin-top:20px;">The epitome of fashion & style – For we know you need the best!</h4>
			<br />
			mapkart, the Online Shopping store, brings to you the chicest collection of latest apparels, footwear, accessories, jewelleries and more. Like you, we too follow the latest in fashion trends and it just helps us bring over thousands of new products exclusively selected for you. Explore big brands like Burberry, Calvin Klein, United Colors of Benetton, Arrow, Esprit, French Connection, Adidas, Reebok, Nike, Clarks, and so many others. While you take the best, we keep looking at what newer designs and styles the likes of Stella McCartney, Robert Cavalli, Zac Posen, and Marc Jacobs orchestrate, just in case, you want more from the shop.
			<br />
			<h4 style="margin-top:20px;">Our Services at your Doorsteps</h4>
			
			You make up your mind on a product, order it online in few easy clicks, and we deliver it right at your address across India. Just pay for the product, while we ensure Free Shipping all the time, of course, with no strings attached. For those second thoughts after purchase, we have in place a 30-day return option as well.

			<h4 style="margin-top:20px;">mapkart – the 24 x7 Online Fashion & Lifestyle Store for everyone</h4>
			<br />
			Forget the fashion streets of the world. We, at mapkart, have all that you need to glam up your lifestyle. From extensive range of men’s shirts to exotic dresses for women to funkiest clothes for kids to matching footwear, sports shoes and accessories for everyone, we purvey diversity of choices in online shopping in India under one umbrella. Your mapkart Online Shop has arrived! Do not miss the attractive best buy prices and super discount offers. Get more, pay lesser! Drop a line at care@mapkart.com for any query or give us a call at 0124-6128000.</p>
			</div>
</div>
<?php include_once('bottombar.php');?>	
</body>
</html>
