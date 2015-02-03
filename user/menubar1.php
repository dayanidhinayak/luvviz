<?php
include_once("function.php");
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

   
             
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
            
        <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script>
   <script type="text/javascript"> 
        var aliceImageHost = '';
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
<body >





  
      <div id="nav-wrapper" style="margin-top:0px; width:960px;">
                 <div class="navigation">
         
					 <ul id="navigation" class="fl">
					 <?php
						$q=mysql_query("select * from `category` where `parent`='0' and `status`='1' limit 0,7 ");
						while($res=mysql_fetch_array($q))
						{//$q1first=mysql_query("select * from `category` where `parent`='$res[id]' limit 0,6");
						//$r1first=mysql_fetch_array($q1first)
						
						?>
						 <li><a class="" href="#" onMouseOver="return getdetails(<?php echo $res['id'];?>);"   ><?php echo $res['category_name'];?></a>
							 <div class="drop-menu" style="display:none;">
                 				 <ul class="fleft cat-main">
								 		<?php
										$q1=mysql_query("select * from `category` where `parent`='$res[id]' limit 0,6");
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
										 <li><a href="#" style="color:#333333;">more...</a></li>
				      </ul>
					   <div id="a<?php echo $res['id'];?>" >
	
       
			
                  </div>
				    </div>
				   </li>
				   <?php
							}
						?>
						 <li><a class="" href="more.php"  >More...</a></li>
				</ul>
				
				<a href="sale.php"><div style="height:36px; width:80px; background:#ff0000; float:right;"><p style="text-align:center; color:#ffffff; margin-top:8px;">SALE</p></div></a>
			</div>
			
		</div>
    
    
       
  
  





</body></html>
