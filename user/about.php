<?php
ini_set("dispaly_errors",1);
include_once("function.php");
$name=$_GET['name'];
$query_footer=mysql_query("select * from `footer` where `id`='$name'");
$res_footer=mysql_fetch_array($query_footer);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />					
	<!-- Syntax Highlighter -->
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>
<title>...:::LUVVIZ:::...</title>
<!--<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
   <!-- Assigning global javascript variable for image host -->
   <script src="ga.js" async="" type="text/javascript"></script><script type="text/javascript"> 
        var aliceImageHost = '#';
        var globalConfig = {};     
    </script>
  <script src="alice-1362145177.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery-1.9.1.min.js"> </script>
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

<!--<link href="style.css" rel="stylesheet" type="text/css" />-->

<link href="style1.css" rel="stylesheet" type="text/css" />
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
 <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
 <script type="text/javascript">
 $(function(){
 $('#cont').click(function(){
 
   var y=0;
  $('input').each(function(){
  var x= $(this).val();
  if (x=='')
  {
alert('text plz');
     //$(this).parent().append('Please fill up this field');
    y=1;
    return false;
  } 
  });
  if (y==1)
return false;
 
 });

    if ($('input:radio', this).is(':checked'))
        
         {
        
    } else {
        //alert('Please select something!');
        return false;
    }

 });
 </script>
 <!--dropdown start-->
   <script src="jquery-latest.min.js" type="text/javascript"></script>
    

  <script type="text/javascript">
$(document).ready(function(){

$('#cssmenu > ul > li ul').each(function(index, e){
  var count = $(e).find('li').length;
  var content = '<span class="cnt">' + count + '</span>';
  $(e).closest('li').children('a').append(content);
});
$('#cssmenu ul ul li:odd').addClass('odd');
$('#cssmenu ul ul li:even').addClass('even');
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});

});

      </script>

<!--dropdown end-->
</head>

<body>

<div style="width:100%; height:auto; float:left;">
		<div style="width:98%; height:auto; margin-left:1%;">
		
<?php
if(isset($_SESSION['id'])){
	

?>
<?php
include_once("menu4.php");?>

		<div id="menuu" style="height:100px;">
		    <?php //include_once("menubar.php");
				include_once("menu3.php");?>
		</div>
		

<?php
}
else{
?>
		<div id="menuu">
		    <?php //include_once("menubar.php");
				include_once("menu1.php");?>
		</div>
<?php
}
?>

<!--<div id="contentbar" style="margin-top:15px; height:auto;">
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
							  
							  if (in_array("about.php", $x))
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
      
	 
        
         
		   <div class="orderbox"  style="width:735px; height:auto; margin-left:0%; padding-bottom:2%; background:#cdcdcd; ">
				    <span style="color: blue; font-size: 15px;">
				    <?php if(isset($_GET['msg']))
				    {
					 $msg=$_GET['msg'];
					 echo $msg;
				    }
				    ?>
				    </span>
				 <h1> <?php 
						echo $res_footer['head'];
				      ?>
				</h1>
				 	<div class="box" style="width:735px;height:auto;">
				 		<div style="padding:10px; text-align:justify;">
						<?php 
						echo $res_footer['content'];
						?>
				 		</div>
					</div>   
			  
		   </div>
						
						</div>
						</div>-->
        
      
     
    
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
<!--content bar start-->
	<div id="content" style="margin-top:50px; margin-bottom:50px;">
		<div id="content-left" style="width:850px; margin-left:15px; float:none; margin:auto; ">
			<div id="billing-head" style="text-align: center;">
				<h1 class="head2" style=" margin-top:5px; margin-bottom:5px; text-align: center; font-weight:normal;">
																
					<?php 
						echo $res_footer['head'];
				        ?>
				</h1>
														
			</div>
			<div class="billing-content">
				<div class="checkout" style="width:25%; ">
					<ul>
	  <li class="list" style=" font-weight:bold; font-size:14px; margin-left:0px;  list-style-image:none; color:#13a113; text-transform:uppercase; height:30px; font-family:arial;">
										Information</li>
																<?php 
									$q_info=mysql_query("select * from `footer` where `type`='1'");
									while($r_info=mysql_fetch_array($q_info))
									{
									?>
									<li class="list" ><a href="about.php?name=<?php echo $r_info['id'];?>" ><?php echo $r_info['name'];?></a></li>
									<?php } ?>
																<!--<li class="list">Shipping & Delivery</li>
																<li class="list">Returns & Exchange</li>
																<li class="list">Terms & Conditions</li>
																<li class="list">Disclaimer</li>
																<li class="list">Privacy Policy</li>
																<li class="list">Contact Us</li>-->
					</ul>
					<ul  style="margin-top:0px;">
		    <li class="list" style="font-weight:bold; font-size:14px; margin-left:0px;  list-style-image:none; text-transform:uppercase; height:30px; color:#13a113; border-bottom:none; font-family:arial;">
										Customer Service</li>
								
								    
									
									<?php 
									$q_csvc=mysql_query("select * from `footer` where `type`='2'");
									while($r_csvc=mysql_fetch_array($q_csvc))
									{
									?>
									<li class="list"><a href="about.php?name=<?php echo $r_csvc['id'];?>" style="border-bottom:none;"><?php echo $r_csvc['name'];?></a></li>
									<?php } ?>
									<!--<li class="list"><a href="contact.php">Contact</a></li>
									<li class="list"><a href="return.php">Returns</a></li>
									<li class="list"><a href="sitemap.php">Sitemap</a></li>-->
								     </ul>
																
		               </div>
				
				<div class="checkout" style="width:72%; min-height: 500px; border-left:1px solid rgb(32, 115, 178);">
						<?php 
						echo $res_footer['content'];
						?>
																
				</div>
			</div>
												
		</div>
</div>
<!--content bar end-->


  
  <?php include_once('bottombar.php');?>
</body>
</html>
