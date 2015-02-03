<!DOCTYPE html>
<html>
<head>
    <title>Tabbed Content</title>
    <script src="tabcontent.js" type="text/javascript"></script>
    <link href="tabcontent.css" rel="stylesheet" type="text/css" />
    <style>
        .content5smallbox:hover{
            -moz-box-shadow: 0 0 5px #ff6105;
-webkit-box-shadow: 0 0 5px #ff6105;
box-shadow: 0 0 5px #ff6105;



background: #999; /* for non-css3 browsers */

filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#efefef'); /* for IE */
background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#efefef)); /* for webkit browsers */
background: -moz-linear-gradient(top,  #ffffff,  #efefef); /* for firefox 3.6+ *


        }
    </style>
</head>
<body >
    <div style="width: 960px;float:left; padding:10px 0 30px; font: 0.85em arial;">
        <ul class="tabs" persist="true">
            <li><a href="#" rel="view1">Features</a></li>
            <li><a href="#" rel="view2">Reviews</a></li>
            <li><a href="#" rel="view3">Related Products</a></li>
           
        </ul>
        <div class="tabcontents" style="float:left; margin-top: 2px;">
            <div id="view3" class="tabcontent"  >
               <p><?php include_once("related_product.php");?></p>
            </div>
            <div id="view1" class="tabcontent" style="width:900px;">
                <?php 
			echo $res['long_desc'];
                 ?>
                
            </div>
            <div id="view2" class="tabcontent" style=" height: auto; overflow-y: auto; overflow-x: hidden;">
                <p><?php include_once('review1.php');?></p>
            </div>
            
           
        </div>
       
    </div>
</body>
</html>
