<?php
include_once('../function.php');
?>
<!doctype html>
 
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../menu.css" media="screen" />

    <link rel="stylesheet" href="jquery-ui.css" />
    <script src="jquery-1.8.3.js"></script>
    <script src="jquery-ui.js"></script>
    <script src="droppable.js"></script>
    <style>
    
    .dropable {; height: auto; padding: 0.5em; float: left; margin: 10px; margin-top:0px;}
	.drop1{ width: 92%; height: auto; padding:10px;  float: left; margin: 10px 6px 10px 5px; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333333; font-weight:normal;  }
	.drop2{ width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; float:left; }
    </style>
    <script>
   
	
    </script>
</head>
<body>
 <div id="topbar100">
			<div id="topbar">
				<div style="padding:0px 10px; float:right; margin-right:10px; margin-top:5px;">
					
				</div>
			</div>
		</div>
		<div id="menubar100">
			<div id="menubar">
				
				
			</div>
		</div>
		
		<?php include_once("../menubar.php");?>
		<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" >
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Assign Product<br/>
				</div>
				<div style="width:100%;float:left; margin-top:20px;">
<!--<div id="draggable" class="ui-widget-content">
    <p>Drag me to my target</p>
</div>
 
 <div id="draggable1" class="ui-widget-content">
    <p>Drag me to my target</p>
</div>-->
<div style="width:45%;float:left;">
<div style="float:left; width:100%; height:auto;">
 <div id="droppable0" class="ui-widget-header" style="background:#efefef; width:95%; height:auto; float:left;">
 <?php
$query=mysql_query("select * from `product` where `status`='1'");
while($result=mysql_fetch_array($query))
{
?>


    <div id="draggable<?php echo $result['id'];?>" class="ui-widget-content drop1">
	<script>
	//$(function(){
	$( "#draggable<?php echo  $result['id'];?>" ).draggable();
		
	//});
	
	
	</script>
    <p ><?php echo $result['product_name'];?></p>
	</div>
 
 <?php
}
?>
</div>
</div>
</div>
<div style="width:55%;  float:left;">
<div style="width:100%; height:auto; float:left;">
 <?php
$query1=mysql_query("select * from `category`");
while($result1=mysql_fetch_array($query1))
{
?>

<div style="width:92%; background:#efefef;" id="droppable<?php echo $result1['id'];?>" class="ui-widget-header dropable droppable" >
		<div style="width:1px; height:100px; float:left;"></div>
	<p id="sdf" style="width:100%;margin:auto ; font-family:Arial, Helvetica, sans-serif; font-size:18px; color: #333333; font-weight:normal; text-align:center;"><?php echo $result1['category_name'];?></p>
	
		<?php
		
	$q1=mysql_query("SELECT *  FROM  `product`  WHERE  `category_id` like '%$result1[id]%'  and `status`='1'") or die(mysql_error());

	while($r1=mysql_fetch_array($q1))
	{
	
	?>
	<div id="draggable<?php echo $r1['id']?>-droppable<?php echo $result1['id'];?>" class="ui-widget-content drop1 ui-draggable" style="position: relative; ">
	
	
	<p><?php echo $r1['product_name'];?></p>
	
	</div>
	<script>
	$(function(){
	$( '#draggable<?php echo  $r1['id']?>-droppable<?php echo $result1['id'];?>').draggable();
		
	});
	</script>
	<?php
	
	}
	?>
    </div>
 <?php
}
?>
 
 <div class="result"></div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 
</div>
			</div>
		</div>
		
		<div id="footer100">
			<div id="footer" class="font1">
				<span style="float:left; margin-left:30px;">
					All Rights Reserved @ Map Cart
				</span>
				<span style="float:right; margin-right:30px;">
					
				</span>
			</div>
		</div>
</body>
</html>

