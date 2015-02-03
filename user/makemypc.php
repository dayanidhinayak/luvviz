<?php
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link type="text/css" href="stylepc.css"  rel="stylesheet" media="screen" />
<title>Make my pc</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style>

</style>
</head>

<body>
<?php include_once("topbar.php");?>
<div id="menuu" >
		       <?php //include_once("menubar.php");
				include_once("menu1.php");?>
</div>



<div id="container" style="margin-top:20px;">
	<div id="container_content">
	  	<div id="containerbox" style="height:500px;">
				<div id="containerbox_content" style="margin-top:20px;">
					<div class="box">
						<div class="boxhead">
							Intel Based Systems
						</div>
						<div class="boximg">
							<img src="images/intel_bg_main.jpg" />
						</div>
						<div class="boxdescrip">
							<ul  style="margin-left:10px; 
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
width:300px;
float:left;
margin-left:20px;
margin-top:20px;
line-height:2.0;
color:rgb(51,51,51);
list-style-type:none;">
  								<li class="makepc">Socket 2011 & 1155. PCI Express & 64 bit.</li>
  								<li class="makepc">Choose from Intel® Core™ i3, Intel® Core™ i5, Intel® Core™ i7 & Pentium® Dual-Core technology.</li>
  								<li class="makepc">The most powerful processors available - designed for high performance.</li>
							</ul>
								<div class="boxlogo">
									<a href="intel.php"><img src="images/next.gif" width="130" height="22" style="margin-top:30px; margin-left:15px;" /></a>
									<img src="images/intel_logo.jpg" width="100" height="66" style="margin-right:15px; float:right;" />
								</div>
						</div>
					</div>
					
					<div class="box" style="margin-left:50px; border:1px solid #9dd53a;">
						<div class="boxhead1">
							AMD Based Systems
						</div>
						<div class="boximg">
							<img src="images/amd_bg_main.jpg" />
						</div>
						<div class="boxdescrip">
							<ul  class="makepc" style="list-style-type:none;margin-left:10px; 
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
width:300px;
float:left;
margin-left:20px;
margin-top:20px;
line-height:2.0;
color:rgb(51,51,51);
list-style-type:none;">
  								<li class="makepc">Socket FM1 & socket AM3. PCI Express & 64 bit.</li>
  								<li class="makepc">Choose from AMD A-Series APUs with Radeon™ Graphics and AMD® FX® Series CPU technology.</li>
  								<li class="makepc">Great "bang for buck" - fast processors at competitive prices.</li>
							</ul>
								<div class="boxlogo">
									<a href="amd.php"><img src="images/next.gif" width="130" height="22" style="margin-top:30px; margin-left:15px;" /></a>
									<img src="images/amd_logo.jpg" width="100" height="66" style="margin-right:15px; float:right;" />
								</div>
						</div>
					</div>
					
					
				</div>
		</div>
	</div>
</div>
</div>
<?php include_once('bottombar.php');?>	
</body>
</html>
