<?php
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="menu.css" type="text/css" media="screen" />

<title>Mega Drop Down Menu</title>
<!--[if IE 6]>
<style>
body {behavior: url("csshover3.htc");}
#menu li .drop {background:url("img/drop.gif") no-repeat right 8px; 
</style>
<![endif]-->
  <script>
  function getdetails(val,val1)
  {
 var d="submenu"+val1;
 //alert(d);
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
document.getElementById(d).innerHTML=result;
//window.location.reload();
	}
}
xmlhttp.open("GET","viewcat_details.php?q="+val,true);
xmlhttp.send();
  }
  </script>
</head>
<body>
<ul id="menu" style="border-radius:0px; background:#2b2b2b; color:#FFFFFF; height:38px; padding-top:0px; margin-top:0px; width:920px; position:relative; z-index:1000;"> 
   					   <?php
						$q=mysql_query("select * from `category` where `parent`='0' and `status`='1' ORDER BY `priority`  limit 0,5");
						while($res=mysql_fetch_array($q))
						{//$q1first=mysql_query("select * from `category` where `parent`='$res[id]' limit 0,6");
						//$r1first=mysql_fetch_array($q1first)
						?>
    <li><a href="#" onMouseOver="return getdetails(<?php echo $res['id'];?>,<?php echo $res['id'];?>);" class="drop"><?php echo $res['category_name'];?></a><!-- Begin 5 columns Item -->
        <div class="dropdown_5columns" style="width:700px; padding:0; background:#efefef; min-height:250px;"><!-- Begin 5 columns container -->
            <div class="col_5" style="width:15%; border-bottom-left-radius:2px; -moz-border-bottom-left-radius:2px;  background:#ffffff; margin-left:0%;  padding:1%; height:100%; min-height:265px;">
				<ul style="height:100%;">
				  						<?php
										$q1=mysql_query("select * from `category` where `parent`='$res[id]' limit 0,6");
										while($r1=mysql_fetch_array($q1))
										{
										$q_brand=mysql_query("select * from brand where `brand_name`='$r1[category_name]'");
				 $r_brand=mysql_fetch_array($q_brand);
				 $bid_temp=$r_brand['id'];
										?>
                    <li style="height:35px; text-shadow:none;"><a href="productdetails.php?idval=<?php echo $r1['id']?>&type=brand&bid=<?php echo $bid_temp; ?>" onMouseOver="return getdetails(<?php echo $r1['id'];?>,<?php echo $res['id'];?>);" style="text-shadow:none; font-size:12px; font-family:AsapRegular; text-decoration:none; " > <?php echo $r1['category_name'];?> </a></li>
                   					   <?php
										}
										?>
                    <li><a href="#" style="text-shadow:none; font-size:12px; font-family:AsapRegular; color:#FFFFFF;">More...</a></li>
                </ul>   
            </div>
            <div style="width:80%;float:left;" id="submenu<?php echo $res['id'];?>" >
            </div>
        </div><!-- End 5 columns container -->
    </li><!-- End 5 columns Item -->
   <?php
}
?>
<li><a class="" href="allproductdetails.php"style="text-shadow:none; font-size:12px; font-family:AsapRegular; color:#FFFFFF;"  >More...</a></li>
<a href="sale.php"><div style="height:35px; width:80px;  float:left; margin-left:858px; margin-top:-17px; position:absolute; border-top-left-radius:4px; -moz-border-top-left-radius:4px;  border-bottom-left-radius:4px; -moz-border-bottom-left-radius:4px;">
										<p style="text-align:center; color:#ffffff; margin-top:0px; text-shadow:none;">
												<img src="images/starnew.png" />
										</p>
								</div>
				</a>	


				</ul>
				
				
    


</ul>

</body>

           
</html>