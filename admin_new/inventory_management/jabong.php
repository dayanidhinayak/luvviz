<?php
include_once("../function.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]> 
<html class="no-js ie6 oldie" lang="en" version="HTML+RDFa 1.1"> <![endif]-->
<!--[if IE 7]>    
<html class="no-js ie7 oldie" lang="en" version="HTML+RDFa 1.1"> <![endif]-->
<!--[if IE 8]>    
<html class="no-js ie8 oldie" lang="en" version="HTML+RDFa 1.1"> <![endif]-->
<!--[if IE 9]>    
<html class="no-js ie9" lang="en" version="HTML+RDFa 1.1"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class=" js flexbox cssgradients csstransitions" version="HTML+RDFa 1.1" lang="en"><!--<![endif]--><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Online Shopping India: Shoes, Clothing, Accessories, Bags</title>
   
             
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
            
        <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
  <script src="alice-1362145177.js" type="text/javascript"></script>
  <script>
  function getdetails(val)
  {
 var d="a"+val;
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
document.getElementById(d).innerHTML=result;
//window.location.reload();

	}
}
xmlhttp.open("GET","viewcat_details.php?q="+val,true);

xmlhttp.send();
  
  
  
  
  }
  </script>
 </head>
<body >





  
      <div id="nav-wrapper">
                 <div class="navigation">
					 <ul id="navigation" class="fl">
					 <?php
						$q=mysql_query("select * from `category` where `parent`='0' and `status`='1' ");
						while($res=mysql_fetch_array($q))
						{
						?>
						 <li><a class="" href="#" ><?php echo $res['category_name'];?></a>
							 <div class="drop-menu" style="display:none;">
                 				 <ul class="fleft cat-main">
								 		<?php
										$q1=mysql_query("select * from `category` where `parent`='$res[id]'");
										while($r1=mysql_fetch_array($q1))
										{
										?>
									 <li>
									 	<a href="#" onMouseOver="return getdetails(<?php echo $r1['id'];?>);" ><?php echo $r1['category_name'];?></a>
    <div id="a<?php echo $r1['id'];?>">
	
       
			
                  </div>
                       </li>
					   <?php
										}
										?>
				      </ul>
				    </div>
				   </li>
				   <?php
							}
						?>
				</ul>
			</div>
		</div>
    
    
       
  
  





</body></html>