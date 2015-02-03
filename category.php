<?php
include_once("admin_new/function.php");
$id=$_GET['idval'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
<title>Demo Template</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!---------------------------hover css---------------------->		
<link rel="stylesheet" type="text/css" href="css3/style_common.css" />
<link rel="stylesheet" type="text/css" href="css3/style6.css" />
<!---------------------------hover css---------------------->	

<!---------------------------stiky---------------------->
<script src="js5/jquery.min.js" type="text/javascript"></script>
<script src="js5/jquery-scrolltofixed.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('.header').scrollToFixed();


        // Dock the footer to the bottom of the page, but scroll up to reveal more
        // content if the page is scrolled far enough.

       

        // Dock each summary as it arrives just below the docked header, pushing the
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });
</script>
<script>
function product(catid)
{
alert(catid);
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
  
    document.getElementById("t1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","searchproduct.php?val="+catid,true);
xmlhttp.send();
}
</script>

<!---------------------------sticky code end---------------------->	
</head>
<body>
<!---------------------------main bar---------------------->	
<div id="main-bar">
		<div id="main-box">
			
				<div id="topbar">
						<?php include_once("menu1.php");?>
								<!---------------------------top bar end---------------------->	
								
								<!---------------------------submenu bar---------------------->	
								<div id="submenu">
										<div id="submenu-leftbox">
<?php
$res1=mysql_query("select * from `category` where `id`='$id'");
$row1=mysql_fetch_array($res1);
 ?>
												<span style="font-weight:bold; font-size:14px;">Your are here :</span> Home ><?php echo $row1['category_name']; ?>
										</div>
										<div id="submenu-rightbox">
										<span class="text" style="font-weight:bold; float:left;">Sort By :</span>
												<select class="form" style="padding:4px; height:25px; width:212px;">
														<option>
																Select
														</option>
												</select>
										</div>
								</div>
								<!---------------------------submenu bar end---------------------->	
								
								
								<div id="content" style="margin-top:10px; margin-bottom:10px;">
								<!---------------------------categori start---------------------->
										<?php include_once("leftbar.php");?>
										<!---------------------------categori end---------------------->	
										
										<!---------------------------product start---------------------->	
										<div id="content-right" style="width:820px; margin-left:20px; overflow:auto;">
												<div class="category-contentbox">

<?php
$rr=mysql_query("select * from `product` where `category_id` LIKE '%|$id|'");
while($ro=mysql_fetch_array($rr)){
?>
	<tbody id="t1">
	</tbody>													
<a href="index.htm">

														<div class="view view-sixth" style="cursor:pointer;">


															<img src="admin_new/inventory_management/<?php echo $ro['image'];?>" />	
																<div class="mask">
																</div>
																<div class="category-pricebox">
																		<?php
echo $ro['product_name'];
?><br />
																		<span style="font-weight:bold; color:#2073B2;">INR <?php echo $ro['price']; ?></span>
																</div>
														</div>
<?php
}
?>
														</a>
														
														
														
												</div>
												
											
										</div>
										<!---------------------------product end---------------------->
								</div>
								</div>
						</div>
				</div>
		</div>
</div>
<!---------------------------footer bar---------------------->
<?php include_once('footer.php');?>
<!---------------------------footer end---------------------->
</body>
</html>
