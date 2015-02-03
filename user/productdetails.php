<?php
include_once("function.php");
$pid=$_GET['idval'];
$type=$_GET['type'];
$bid=$_GET['bid'];

if($type=="brand")
{

$brandid=$_GET['bid'];
if($brandid!="")
{

$getparent=mysql_query("select `id` from `product` where `brand_id`='$brandid'");
$resparentcnt=mysql_num_rows($getparent);

if($resparentcnt>0){


$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and p.`brand_id`='$brandid' and b.`id`='$brandid' order by p.`priority` desc");


$totalpriceval=mysql_query("select max(p.`price`) as highestprice,min(p.`price`) as lowestprice  from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and p.`brand_id`='$brandid' and b.`id`='$brandid order by p.`created_ondate` desc'");



}
else{


$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and b.`id`='$brandid' order by p.`priority` desc");



$totalpriceval=mysql_query("select max(p.`price`) as highestprice,min(p.`price`) as lowestprice  from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and b.`id`='$brandid order by p.`created_ondate` desc'");


}
}
else
{
$totalq=mysql_query("select * from `product`  where `category_id` like '%|$pid|%' and `status`='1'  order by `category_id` desc");
$rtot=mysql_fetch_array($totalq);
$prid=$rtot['id'];
$totalpriceval=mysql_query("select max(`price`) as highestprice,min(`price`) as lowestprice  from `product` where `category_id` like '%|$pid|%' and `status`='1'  order by `created_ondate` desc");

//$totalvarient=mysql_query("select `description` from ` product_varient` where `product_id`='$prid'");
}

}
if($type=="category")
{

$brandid=$_GET['bid'];
if($brandid!="")
{
$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and b.`id`=p.'$brand_id' order by p.`created_ondate` desc");


$totalpriceval=mysql_query("select max(p.`price`) as highestprice, min(p.`price`) as lowestprice from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and b.`id`=p.'$brand_id' order by p.`created_ondate` desc");

}
else
{

$totalq=mysql_query("select * from `product`  where `category_id` like '%|$pid|%' and `status`='1'  order by `created_ondate` desc");


$totalpriceval=mysql_query("select max(`price`) as highestprice, min(`price`) as lowestprice from `product`  where `category_id` like '%|$pid|%' and `status`='1'  order by p.`created_ondate` desc");


}
}
if($_GET['desc'])
{

$brandid=$_GET['bid'];
$desc=$_GET['desc'];
$feature=$_GET['feature'];

$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b,`product_varient` pv where p.`status`='1' and p.`brand_id`='$brandid' and b.`id`='$brandid' and pv.`description`='$desc' and pv.`product_id`=p.`id` and pv.`varient_name`='$feature' order by p.`created_ondate` desc")or die(mysql_error());


$totalpriceval=mysql_query("select max(p.`price`) as highestprice,min(p.`price`) as lowestprice from `product` p,`brand` b,`product_varient` pv where p.`status`='1' and p.`brand_id`='$brandid' and b.`id`='$brandid' and pv.`description`='$desc' and pv.`product_id`=p.`id` and pv.`varient_name`='$feature' order by p.`created_ondate` desc")or die(mysql_error());

//}
}

if(isset($_GET['low']))
{

$brandid=$_GET['bid'];
$low=$_GET['low'];
$high=$_GET['high'];
$getparents=mysql_query("select `id` from `product` where `brand_id`='$brandid'");
$resparentcnts=mysql_num_rows($getparents);
if($resparentcnts>0){

$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and p.`brand_id`='$brandid' and b.`id`='$brandid' and p.`price`>='$low' and p.`price`<='$high' order by p.`created_ondate` desc")or die(mysql_error());

}
else{
$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and b.`id`='$brandid' and p.`price`>='$low' and p.`price`<='$high' order by p.`created_ondate` desc")or die(mysql_error());


    }
}
if($_POST['low_price'])
{

$brandid=$_GET['bid'];
$low=$_POST['low_price'];
$high=$_POST['high_price'];
$totalq=mysql_query("select p.*,b.`brand_name` from `product` p,`brand` b where p.`category_id` like '%|$pid|%' and p.`status`='1' and p.`brand_id`='$brandid' and b.`id`='$brandid' and p.`price`>='$low' and p.`price`<='$high' order by p.`created_ondate` desc")or die(mysql_error());

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>...:::LUVVIZ:::...</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css3/style_common.css" />
<link rel="stylesheet" type="text/css" href="css3/style6.css" />
<script src="js5/jquery.min.js" type="text/javascript"></script>


<!---------------------------stiky---------------------->

<!--<script src="js5/jquery-scrolltofixed.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner.
        // This is the default behavior.

        $('.header').scrollToFixed();


        // Dock the footer to the bottom of the page, but scroll up to reveal more
        // content if the page is scrolled far enough.

          $('.footer').scrollToFixed( {
            bottom: 0,
            limit: $('.footer').offset().top
        });


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
                    }  else {
                        limit = $('.footer').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex:0
            });
        });
    });
</script>-->
<!---------------------------sticky code end---------------------->



<!-- script for dropdown side menuy -->
<!--<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/treeMenu.js"></script>-->


<!-- end of script for dropdown side menuy -->
							  
<script type="text/javascript" src="js/msscript.js"></script>
 <script type="text/javascript" src="js/overlaybox.js"></script>
 
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
            
        <!-- Assigning global javascript variable for image host -->
   
<script type='text/javascript' src='jquery-1.9.1.min.js'></script>

<script>
$(function() {
//$('.colla').next().hide();
$('.colla').click(function(){

	 
	   if($(this).next().is(':hidden') )
	   $(this).next().show('slow');
	  else{
	   $(this).next().hide('slow');
	  }
	 
   // $('#images').show();
  });
  
  
  $('.varientnull').each(function(){
var detailval=$(this).attr('title');
//alert(detailval);
$('#'+ detailval).hide(); 
  
  
  
  
  });
  
 
  
 });

</script>
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<!--<link href='http://fonts.googleapis.com/css?family=Princess+Sofia' rel='stylesheet' type='text/css'>-->
<link rel="stylesheet" type="text/css" href="tm-stylesheet.css">

<style>
.leftmenu{
width:182px; 



padding: 7px 0px 7px 13px;
font-family:Arial, Helvetica, sans-serif; 
color:rgb(49, 49, 49); 
float:left;
font-size:13px;
font-weight:bold;
font-family:'Source Sans Pro',sans-serif;
}
.whislist{
width:37px;
height:34px;

float:left;
margin-top:10px;
background:url(images/whislist.png) ;
background-position:top;
}
.whislist:hover{

background:url(images/whislist.png) ;
background-position:bottom;
}
.compare{
width:37px;
height:34px;
float:left;
margin-top:10px;
margin-left:5px;
background:url(images/compare.png);
background-position:top;
}
.compare:hover{

background:url(images/compare.png);
background-position:bottom;
}

.newdiv{
 border:1px solid #efefef;
 }
 
 .newdiv:hover{
 border:none;
 }
 
 .para{
 font-size:11px; line-height:1.5; color: rgb(0, 75, 145);  background:#ffffff; width:176px; padding-left:18px; padding-top:8px; padding-bottom:8px; margin-top:2px; 
background:none;
color: rgb(79, 79, 79);
font-size: 11px;
height:24px;
padding-top:0px;
padding-bottom:0px;
}
.para:hover{
background:#ebebeb;
text-decoration:none;
}
#footer {
    width: 100%;
    height: auto;
    float: left;
}

</style>
												 <script> 
												 $(function() {
													$('.whislist').click(function(){
														var id=$(this).parent().find('.addbutton').attr('id');
														//alert(id);
														$.ajax({
													  url: 'addto_wishlist_ajax.php?product_id='+id,
													   success: function (data) {
													  alert(data);
						
															    },
													 });
														
																											});		
														
																												$('.compare').click(function(){
														
														
																		       window.open("compare.php");
														
														});
														});		
																						
							</script>
							
	<!-- Syntax Highlighter -->
	<link href="css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="css/shThemeDefault.css" rel="stylesheet" type="text/css" />
 
	
	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>


<script>
	function getproduct(proid,brandid,type,val)
	{
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
	
		document.getElementById("pro").innerHTML=xmlhttp.responseText;
		
	    }
	  }
	xmlhttp.open("GET","prodetail.php?proval="+proid+'&brand='+brandid+'&type='+type+'&vals='+val,true);
	xmlhttp.send();

	}
</script> 


<!--dropdown start-->
  <!--2<script src="jquery-latest.min.js" type="text/javascript"></script>-->
    

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
	<script type="text/javascript">
jq162 = jQuery.noConflict(true);

jq162(function() {

var i=0;
jq162('#search_que').on("keyup ",function(event) {
var key=jq162(this).val();
 var keyCode = ('which' in event) ? event.which : event.keyCode;
//alert(keyCode);



if(keyCode==40 && key!='')
{


//alert(idval);

i=(i-0)+1;
if(i>0)
{
var j=i-1;
//alert(j);
var spid="span"+j;
document.getElementById(spid).style.color='#5D5D5D';
document.getElementById(spid).style.background='#ffffff';
}
var idval="span"+i;
var idval1="spana"+i;
document.getElementById(idval).style.color='#ff6105';
document.getElementById(idval).style.background='#cccccc';

document.getElementById('search_que').value=document.getElementById(idval1).innerHTML;
}
else if(keyCode==38 && key!='')
{

//alert(idval);

i=i-1;
if(i>-1)
{
var j=(i-0)+1;
var spid="span"+j;
var idval1="spana"+j;
document.getElementById(spid).style.color='#5D5D5D';
document.getElementById(spid).style.background='#ffffff';
}
var idval="span"+i;
var idval1="spana"+i;
document.getElementById(idval).style.color='#ff6105';
document.getElementById(idval).style.background='#cccccc';

document.getElementById('search_que').value=document.getElementById(idval1).innerHTML;



}
else
{

if( key.length<=1)
{
 document.getElementById('serach_content').innerHTML='';

}
else
{
jq162.ajax({
  url: "searchresult.php?q="+key,

}).done(function(data) {
//alert(data);

 document.getElementById('serach_content').innerHTML=data;
 
});
}
}

});
});

 jq162(document).ready(function() {
  jq162('div').bind('click', function(){
   
   var id=jq162(this).attr('class');
    if (id=="undefined" || id=="detailcart" || id=='detailsval') {
     return false;
    
     }
     else
     jq162('#detailcart').hide();
     
    });

 	 jq162("#cartsynops").load("cartsynop.php");
   
   jq162.ajaxSetup({ cache: false });
   
   var bodyid='';
   jq162('div').click(function(){
   
  bodyid=bodyid+jq162(this).attr('class');
   //alert(bodyid);
   var n=bodyid.split("change");
  var aralen=n.length;
  if(aralen==1)
  {
  jq162('.change').hide();
  
  }
  
   });
});



</script>					
		
<!-------------------banner script-------------------->		
	<link rel="stylesheet" type="text/css" href="css2/plusslider.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src='js2/jquery.plusslider.js'></script>
	<script type="text/javascript" src='js2/jquery.easing.1.3.js'></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#slider2').plusSlider({
			autoPlay: true,
			displayTime: 3000, // The amount of time the slide waits before automatically moving on to the next one. This requires 'autoPlay: true'
			sliderType: 'fader', // Choose whether the carousel is a 'slider' or a 'fader'
			width: 1040, // Overide the default CSS width
			height: 250 // Overide the default CSS width
		});

		$('#slider3').plusSlider({
			sliderEasing: 'easeInOutExpo', // Anything other than 'linear' and 'swing' requires the easing plugin
			fullWidth: true,
			autoPlay: false, 
			sliderType: 'slider' // Choose whether the carousel is a 'slider' or a 'fader'
		});

	});
	</script>
<!-------------------banner script-------------------->
<script>
function productdetail(productid,brand,bdid,descp,feature)
	{
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
	//alert(xmlhttp.responseText);
		document.getElementById("pro").innerHTML=xmlhttp.responseText;
		
	    }
	  }
	xmlhttp.open("GET","prod.php?idval="+productid+'&type='+brand+'&bid='+bdid+'&desc='+descp+'&feature='+feature,true);
	xmlhttp.send();

	}
</script>							
</head>

<body>
 

		      <?php
if(isset($_SESSION['id'])){
	

?>

<?php //include_once("menubar.php");
				include_once("menu4.php");?>
				

		<div id="menuu" style="height:auto; ">
		    <?php //include_once("menubar.php");
				include_once("menu3.php");?>
		</div>
                

<?php
}
else{
?>
		<div id="menuu" style="height:auto; ">
		    <?php //include_once("menubar.php");
				include_once("menu1.php");?>
		</div>
<?php
}
?>




								<!---------------------------submenu bar---------------------->	

								<div id="submenu" style="border-bottom:none; padding-top:0px;">
									<div style="width:1040px; height:35px; margin:auto; border-bottom: 1px solid rgb(134, 134, 134); margin-top:8px;">
										<div id="submenu-leftbox" style="margin-top:0px;">

	
	<span style="font-weight:bold; font-size:14px;">Your are here :</span>
			<?php 
			$qq=mysql_query("select * from `brand` where `id`='$bid'");
			$rroo=mysql_fetch_array($qq);
			echo 'Home';

			path($pid);
			$getcategoryname=mysql_query("select `category_name` from `category` where `id`='$pid' and `parent`=0");
			$rescategoryname=mysql_fetch_array($getcategoryname);


			if($rroo['brand_name']!=$rescategoryname['category_name'])

			echo ">".$rroo['brand_name'];
			?>
			
										</div>
									
												<div id="submenu-rightbox">
										
											 <div style="width:270px; height: 20px; float:left;  margin-left:0px;border:1px solid #cccccc; margin-top:-2px; ">
                                                        <form action="#" method="post">
                                                        <input type="submit" name="submit" value="" style="background:url(images/search.png) no-repeat; width:20px; height: 13px; border: none; border-right:1px solid #cccccc; margin-left:5px; " >
                                                          <input type="text" autocomplete="off" name="search" id="search_que" style="width:230px; height: 20px; padding: 5px;  border:none;">
                                                        </form>
                                             </div>	
											 <div style="width:270px;  max-height:300px; overflow:auto;  margin:auto; border-left:1px solid #B5B5B5; border-right:1px solid #B5B5B5; border-bottom:1px solid #cccccc; border-bottom:none; position:absolute; z-index:9999; top:43px; left:685px;  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#efefef), to(#ffffff));  background: -webkit-linear-gradient(top, #efefef, #ffffff);  background: -moz-linear-gradient(top, #efefef, #ffffff);  background: -ms-linear-gradient(top, #efefef, #ffffff);  background: -o-linear-gradient(top, #efefef, #ffffff); width:255px; left:890px; top:143px; " id="serach_content">
		
                                                       </div>
										</div>
                                                                         </div>
								</div>
								
								<!---------------------------submenu bar end---------------------->



<div id="contentbar" style="height:auto;">
			<div id="contentbar_box" style="height:auto; width: 1040px;">
			<!--<div style="width:960px; float:left; height:40px; margin-top:10px;">
			<!--<div style="height:20px; background:#efefef; width:186px; font-family:AsapRegular; font-size:14px; float:left; color:#333333; font-weight:bold; text-align:center; padding:5px; padding-top:10px;">Filter Categories </div>
			<p style="font-weight:bold; float:left; margin-left:20px; font-family:Arial, Helvetica, sans-serif; color:#666666; font-size:12px; letter-spacing:1px">
			<?php echo 'Home';
			path($pid);
			?>
<!--Home > Men > Shoes > <span style="color:#FF6600;">Sports Shoes</span>
			</p>
													
			</div>-->
<div class="header1" style="width:200px; height:auto; float:left;">
			<div class="content-left1" style="height:auto; width:200px; border:1px solid #cccccc; margin-top: 10px; border: 1px solid rgb(201, 199, 199); border-bottom:none;">
										<!--<div style="height:auto; width:195px; float:left; background:#FFFFFF;">-->
                                        
                                     <!--<div class="leftmenu colla" style="margin-top:0px; border-bottom:1px solid #cccccc; background:#ebebeb; cursor:pointer;">
                                                
																&nbsp; category
													</div>-->
													
													<!--<div  style="float:left; height:auto;">
                                                    <table cellpadding="5" style=" font-size:12px; line-height:2.0;">
                                                    <?php
$r=mysql_query("select * from `category` where `parent`='$pid'");
while($rr=mysql_fetch_array($r)){
//$result=mysql_query("select * from `product` where `category_id` LIKE '%|$id|'");
//$rrr=mysql_fetch_array($result);
//echo $rrr['quantity'];
?>	
 <tr>
														      <td><a href="productdetails.php?idval=<?php echo $rr['id'];?>&type=brand&bid=<?php echo $rr['id']?>"><?php echo $rr['category_name'];?></a></td></tr>
                                                              <?php
}
?>
                                                              </table>

                                                    </div>-->
              
         
		<div class="leftmenu colla" style="margin-top:0px; border-bottom:1px solid #cccccc; cursor:pointer; border-bottom: 1px dotted rgb(51, 51, 51); font-family: 'Source Sans Pro',sans-serif;
font-size: 15px;
color: rgb(51, 51, 51);
padding-bottom: 5px;
padding-top: 5px; width:175px; margin-left:10px; margin-top:6px; padding-left:0px;">
		
			
																&nbsp; Category
		</div>
	<div  style="float:left; height:auto; display:none;">
												<table cellpadding="5" style=" font-size:12px; line-height:2.0;">
												<?php
												
												$xx=mysql_query("select * from `category` where `id`='$pid'");
												$resxx=mysql_fetch_array($xx);
												$yy=mysql_query("select * from `category` where `parent`='$resxx[id]' limit 0,10 ");
												while($resyy=mysql_fetch_array($yy))
												{


	$det=array();
				 $query1=mysql_query("select * from `category` where `parent`='$pid' limit 0,10");
				 while($result1=mysql_fetch_array($query1))
				 {
				 	$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$result1[id]|%' limit 0,10 ");
					while($r=mysql_fetch_array($q))

					{

					//echo $r['brand_name'];
if($r['brand_name']!=$yy['category_name'])
{
					$det[]=$r['brand_name'];
}				
					}

					}

					

			$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$pid|%' limit 0,10 ");

					while($r=mysql_fetch_array($q))

					{

					//echo $r['brand_name'];
if($r['brand_name']!=$yy['category_name'])
{
					$det[]=$r['brand_name'];
}
					

					}

				

					$value=array_unique($det);

				 

				 foreach($value as $v)

				 {
                                 
				 $qq=mysql_query("select `id` from `brand` where `brand_name`='$v' limit 0,10");

				 $rr=mysql_fetch_array($qq);
 
	?>
												         <tr>
														      <td style="background:none;">
                                                                                                                        <a href="productdetails.php?idval=<?php echo $result1['id'];?>&type=brand&bid=<?php echo $result1['brand_id']?>">
                                                                                                                        <?php echo $ressss['category_name'];?></a></td></tr>
															  <?php
															  }
															  }
															  ?>




												</table>

</div>
		

									
													<div class="leftmenu  colla" style="margin-top:0px; border-bottom:1px solid #cccccc; background:#ebebeb; cursor:pointer; display:none;">
																&nbsp; Brand
													</div>
													
													<div  style="float:left; height:auto;">
														 <table cellpadding="5" style=" font-size:12px;">
															<?php 

$sql1=mysql_query("select distinct(`brand_id`) from `product` where category_id like '%|$pid|%'")or die(mysql_error());



	while($result1=mysql_fetch_array($sql1))

	{
         if($result1[brand_id]!=0){  
	$sql2=mysql_query("select `brand_name` from `brand` where `id`='$result1[brand_id]' and `status`='1'")or die(mysql_error());

			$result2=mysql_fetch_array($sql2);
         
                        
			?>
                        <tr>
			<td class="para">
                            <a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $result1['brand_id']?>"><?php echo $result2['brand_name'];?></a>
																																																																																							  																	</td>																																																																																																					 																	</tr>
															   <?php
															   }
        }
															   ?>																																																				                                                          </table>	
																																																																	 
												</div>
												<div class="leftmenu" style="margin-top:0px; border-bottom:1px solid #cccccc;  cursor:pointer;  border-bottom: 1px dotted rgb(51, 51, 51); font-family: 'Source Sans Pro',sans-serif;
font-size: 15px;
color: rgb(51, 51, 51);
padding-bottom: 5px;
padding-top: 5px; width:175px; margin-left:10px; margin-top:6px; padding-left:0px; ">
												&nbsp; Price								
	</div>		
	<div style="float:left;">
	
	<?php
	$restotalpriceval=mysql_fetch_array($totalpriceval);
	$hh=$restotalpriceval['highestprice'];
	
	$ll=$restotalpriceval['lowestprice'];
	
	$finalpriceval=($hh-$ll)/5;
	
	?>
	
		
		<?php
		for ($i = 1; $i<=5; $i++)
		{
		$fromv=intval($ll);
		$to=$fromv+$finalpriceval;
		$ll=$to;
		
		?>
			
                <p  class="para">
                    <a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $_GET['bid']?>&low=<?php echo $fromv?>&high=<?php echo intval($to)?>">
                    Rs.<?php echo $fromv?>-Rs.<?php echo intval($to)?>
                    </a>
                </p>
                
		<?php
		}
		?>
                
		<p class="para" style="width:177px; ">
		<form action="#" method="post" style="padding-left:10px; padding:10px; border-top:1px solid #cccccc;  border-bottom:1px solid #cccccc; ">
			Rs.<input type="text" name="low_price" style="max-width:40px;"/>-Rs.<input type="text" name="high_price" style="max-width:40px;" />
		<input type="submit" name="submit" value="Go" />
		</form>										
            </p>
      </div>	
      <?php 
      $getparentt=mysql_query("select `id` from `product` where `brand_id`='$brandid'");
$resparentcntt=mysql_num_rows($getparentt);

if($resparentcntt>0){
      ?>
      									<div class="header" style="width:200px; height:650px; float:left;border-bottom:1px solid #cccccc; overflow:auto; overflow-x:hidden;">
												<?php
												$v=array();
												$pdetail=mysql_query("select DISTINCT (`varient_name`) from `product_varient` ");
												while($rdetails=mysql_fetch_array($pdetail))
												{
												$v[]=$rdetails['varient_name'];
												}
												foreach($v as $v2=>$v1)
												{
													?>

													<div class="leftmenu  colla" id="colla<?php echo $v2?>" style="margin-top:0px; border-bottom:1px solid #cccccc; cursor:pointer;  border-bottom: 1px dotted rgb(51, 51, 51); font-family: 'Source Sans Pro',sans-serif;
font-size: 15px;
color: rgb(51, 51, 51);
padding-bottom: 5px;
padding-top: 5px; width:175px; margin-left:10px; margin-top:6px; padding-left:0px; text-transform:capitalize;">

																&nbsp; <?php echo $v1?>
													</div>
							<div  style="float:left;">
														 <table style="width:100%;">
												 <?php
												 $countval=0;
												 $vr=array();
												 if(isset($_GET['bid']))
												 {
												
														$qwe=mysql_query("select * from `product` where `category_id` like '%|$pid|%' and `brand_id`='$_GET[bid]'") or die(mysql_error());
														 }
														 else
														 {

														  $qwe=mysql_query("select * from `product` where `category_id` like '%|$pid|%'") or die(mysql_error());

														 
														 }

												while($rwe=mysql_fetch_array($qwe))
												{
												$que=mysql_query("select `description` from product_varient WHERE  `product_id`='$rwe[id]' and  `varient_name`='$v1'")or die (mysql_error());
												$countval=mysql_num_rows($que);
												
												
												
												
while($row1 = mysql_fetch_array($que))
  {	
  $rr=strtolower($row1['description']);
  if(!(in_array($rr,$vr)))
  {
  
  $vr[]=$rr;
 // echo "<tr><td>$countval ggh</td></tr>";
  }
 // var_dump($vr);
   }	 
		 }
		 ?>		
		 <?php 
		 foreach($vr as $desc_val)
												{
												$countval=1;
		?>
		 <tr style="border-bottom:1px solid #cccccc; border-collapse:collapse; ">
					<td class="para" style="width:30px;">
					<!--<a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $_GET['bid']?>&desc=<?php echo $desc_val;?>&feature=<?php echo $v1;?>">-->
					<input type="checkbox" class="chk" onclick="return productdetail('<?php echo $_GET['idval']?>','brand','<?php echo $_GET['bid']?>','<?php echo $desc_val;?>','<?php echo $v1;?>');"/>
					<!--</a>-->
					</td>
		 			<td class="para" style="width:200px;" >
                                            <a href="productdetails.php?idval=<?php echo $_GET['idval']?>&type=brand&bid=<?php echo $_GET['bid']?>&desc=<?php echo $desc_val;?>&feature=<?php echo $v1;?>" style="text-transform:capitalize;">
                                                <?php echo $desc_val;?>&nbsp;
                                            </a>
                    </td>
		</tr> 
		 <?php
		}
												if($countval==0)
												{
												
												?>
												
												<div class="varientnull"  title="colla<?php echo $v2?>"></div>
												
												
												
												<?php
												}
		
		
		?>										  
</table>				 
							</div>					 
							<?php } ?>
										</div>
										<?php
										}
										?>
									
           </div> 
		   </div>
		   </div>
		   	<!-------------------banner bar start-------------------->  
		<?php
		$qindex=mysql_query("select * from `index_image` where `position`='content3_middleimg' and `category_id`='$bid'");
		//echo "select * from `index_image` where `position`='content3_middleimg' and `category_id`='$bid'";
		$no=mysql_num_rows($qindex);
		if($no>=1){
		?> 
	<div id="contentmiddlebox" style=" height:auto; width:780px; margin-bottom:5px; margin-left:57px;">
							<div id="main" role="main" style="width:auto; height:250px;">
      <!-- Start WOWSlider.com BODY section -->
                   <!-- <div id="wowslider-container1">
                    <div class="ws_images">-->
			
		<div id="banner" style="width:780px;height:250px; border:1px solid #ededed;">
		  
		    <div id="slider2" style="width:780px; height:250px;">
			<!--<img src="images/baner1.jpg" alt="" height="450" width="1040" />-->
					
			
			
		   <?php
		    $qindeximg=mysql_query("select * from `index_image` where `position`='content3_middleimg' and `category_id`='$bid' order by `priority`") or die(mysql_error());
		    while($rindeximg=mysql_fetch_array($qindeximg))
		    {
		    ?>
		    <img src="../admin_new/inventory_management/<?php echo $rindeximg['image'];?> " alt="" title="<?php echo $rindeximg['tittle'];?>" height="250" width="780"/>


		<?php
		    }
	    ?>
               	     
		  </div>
                
                
                    <!--<div class="ws_shadow"></div>
                    </div>
                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                    <script type="text/javascript" src="engine1/script.js"></script>
                    <!-- End WOWSlider.com BODY section -->
		</div>
		
      
   </div>

		<!-------------------banner bar end-------------------->  
		   
		        
 <div style="width:740px;  height:auto; float:left; margin-left:0px; margin-top:20px; ">
		
		<!--rightbar start-->
		<div id="pro">
		
				
				 		<div id="content5_topbox1" style=" width:740px; height:auto;">
						
							<p style=" margin-top:8px; margin-left:10px; font-size:14px; font-family:AsapRegular; color:#000000; width:200px; float:left;">
								<?php
								$count=mysql_num_rows($totalq);
								?>
								<?php echo $count?>  Products found
							</p>
							
												<div id="submenu-rightbox" style="width:40%;">
										<span class="text" style="font-weight:bold; float:left;">Sort By :</span>
												<select class="form" style="padding:4px; height:25px; width:212px;" name="selval" onchange="return getproduct(<?php echo $pid;?>,<?php echo $bid;?>,'<?php echo $type; ?>',this.value);">
														<option>
																Select
														</option>
														<option value="low">
																Price low to high
														</option>
														<option value="high">
																Price high to low
														</option>
														<option value="arrival">
																Price New arrival
														</option>
												</select>
										</div>
								
						</div>
						<div style="width:750px; height:750px; float:left; overflow: hidden;">
			<div style="width:780px; height:810px; float:left; overflow: scroll; ">
							  <ul>
							   <?php
							   while($res=mysql_fetch_array($totalq))
							   {
							   $product_description_res=substr($res['description'], 0, 50);
							   $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$res[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' and `status`='1' ");
							$rr1=mysql_fetch_array($qq1);
							$disc=$rr1['discount'];
							$finalval=$res['price']*(1-$disc/100);
														$qtystock=mysql_query("select sum(quantity) as quant from `stock` where `product_id`='$res[id]'");
														$resstock=mysql_fetch_array($qtystock);
														$totalproductval=$resstock['quant'];
							   ?>
							    <li class="itm hasOverlay unit size1of4 " style="list-style-type:none; margin-right:30px; width:26%; margin-left:15px;">
									<div class="content5smallbox imagecontainers imagecontainers2 newdiv" style="height:360px; margin-left:10px; text-align:center; width:175px; margin-top:20px; margin-right:20px;">
									<div>
								
								</div>
                                                                        <?php
                                                                        if($res['newarrival']==1)
                                                                        {
                                                                            ?>
                                                                      
                                                                        <div style="width: 65px; height: 82px; position: absolute; z-index:99; top:10px; background: url(images/special.png);">
							       
                                                                        </div>
                                                                        <?php
                                                                        }
                                                                        ?>
									<div id="newbox" style="width:100%; height:20px; text-align:center; border:0px;">
								<?php 
								$created=$res['created_ondate'];
							$month=date("m",strtotime($created));
							$current_month=date("m");
							if($month==$current_month)
							{
								?>
                                                                
														<!--<div style="width:50px; color:#000000; border:1px solid #ff6600; margin:auto;  height:15px; padding-bottom:3px;  font-family:AsapRegular;">
																	NEW
														</div>-->
                                                                                                               
														<?php } ?>
											</div>
							   				<div class="itm-overlay">
										 <!-- Could not find the End of this div even on original document-->
										 <div style="width:100%;  height:81px; float:left; position:relative; margin-left:23px; color:#333333;" class="itm-qlInsert">
										<div class="compare" style=" width:45px; font-size:10px; height:75px; float:left; background:none; font-family:Arial, Helvetica, sans-serif; font-size:10px;  ">
														<img src="../admin_new/inventory_management/<?php echo $res['image'];?>" style="width:40px; height:60px; padding-left:20px;"/><br/>
                                                                                                                <span style="margin-left:23px;">Compare</span>
													</div>
													<div class="addbutton" id="<?php echo $res['id'];?>">
													</div>	
														<div class="whislist" style=" width:22px; height:56px; font-size:10px; text-align:center; float:left; background:none; font-family:Arial, Helvetica, sans-serif; font-size:10px; margin-left:75px;">							
														<img src="images/star.png" width="22" height="21" style="margin-left:25px;"/><br/>
														<div style="width:60px; height:36px; float:left; padding:2px; text-align:center; background:#5B5B5B; color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:12px;  border-radius:3px; -moz-border-radius:3px; margin-top:3px; line-height:1.3;">
															Add to<br/> Compare
														</div>
													</div>
											</div>
							   					<div style="height:220px; width:100%; float:left; text-align:center; margin-top:40px; text-align:center;">

							   							 <a href="oneproduct.php?idvalue=<?php echo $res['id']?>&idvalue1=<?php echo $pid;?>&bid1=<?php echo $bid;?>">
	<img src="../admin_new/inventory_management/<?php echo $res['image'];?>"  style="width:120px; height:205px; max-height:205px;" alt="<?php echo $res['alternate_val']; ?>"/>  </a>
							   					</div>
<script type="text/javascript">
	jQuery(function($){ //on document.ready	
		var $i = jQuery.noConflict(); 
		$i('.imagecontainers').overlaycontent({ //initialize overlay on DIVs with class="imagecontainers"
			speed:1100,
			dir:'down',
			opacity:1 //opacity: 0 to 1
		})
		//var $i = jQuery.noConflict(); 

		$i('.imagecontainers2').overlaycontent2({ //initialize overlay on DIVs with class="imagecontainers"
			speed:1100,
			dir:'left',
			opacity:1 //opacity: 0 to 1
		})
	})
	</script>			
					   							<p style="height:auto; float:left; ">
															<div style="font-family:ProximaNova-Regular; font-size:12px; color:#333333; font-weight:bold; height:auto; float:left; text-align:center; width:100%; margin-top:15px; min-height:100px;">
															<div style="width:100%;height:auto; min-height:100px; ">
															<?php echo $res['brand_name'];?><br/>	
																<span style="font-weight:normal; color:rgb(0, 75, 145); "><?php echo substr($res['product_name'],0,45);?></span>
															
																<br />
																	<?php //echo substr($product_description_res,0 ,30);?> 
																<?php 
																if($disc)
											{					?>
																<strike style='font-size:14px; color:#FF0000; '>Rs.<?php echo number_format($res['price'],2)?></strike>&nbsp;&nbsp;</br>
                                                                                                                                <span style='font-size:14px;'>
																<?php
																echo 'Rs. '.number_format($finalval,2);
																}
																else
																{
																    ?>
                                                                                                                                </span>  
															<span style='font-size:14px;'> Rs. <?php echo number_format($res['price'],2);?></span>
															<?php
																}
																?>
																</div>
																<div class="itm-qlInsert" style="width:100%; height:25px; padding-top:4px; padding-bottom:2px; text-align:center; background:#ebebeb; color:#333333; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; float:left; position:inherit; bottom:0px;">
														Stock Available: <?php echo $totalproductval;?>
													</div>	
															</div>
														</p>
							 	</div>
							   <?php
							   }
							   ?>
							  </div>
							  </li>
							  </ul>
				 </div>
				 
				</div> 

</div>
</div>
<?php
}
else{

?>
<!--rightbar end-->
<div style="width:740px;  height:auto; float:left; margin-left:60px; ">
		
		<!--rightbar start-->
		<div id="pro">
		
				
				 		<div id="content5_topbox1" style=" width:780px; height:auto;">
						
							<p style=" margin-top:8px; margin-left:10px; font-size:14px; font-family:AsapRegular; color:#000000; width:200px; float:left;">
								<?php
								$count=mysql_num_rows($totalq);
								?>
								<?php echo $count?>  Products found
							</p>
							
												<div id="submenu-rightbox" style="width:40%;">
										<span class="text" style="font-weight:bold; float:left;">Sort By :</span>
												<select class="form" style="padding:4px; height:25px; width:212px;" name="selval" onchange="return getproduct(<?php echo $pid;?>,<?php echo $bid;?>,'<?php echo $type; ?>',this.value);">
														<option>
																Select
														</option>
														<option value="low">
																Price low to high
														</option>
														<option value="high">
																Price high to low
														</option>
														<option value="arrival">
																Price New arrival
														</option>
												</select>
										</div>
								
						</div>
						<div style="width:780px; height:auto; float:left;">
						<div style="width:780px; height:auto; float:left;">
			
							  <ul>
							   <?php
							   while($res=mysql_fetch_array($totalq))
							   {
							   $product_description_res=substr($res['description'], 0, 50);
							   $date=date("Y-m-d");
							$qq1=mysql_query("select `discount` from `promo_product` where `product_id`='$res[id]' and  `from_date` <= '$date'
and  `to_date` >= '$date' and `status`='1' ");
							$rr1=mysql_fetch_array($qq1);
							$disc=$rr1['discount'];
							$finalval=$res['price']*(1-$disc/100);
														$qtystock=mysql_query("select sum(quantity) as quant from `stock` where `product_id`='$res[id]'");
														$resstock=mysql_fetch_array($qtystock);
														$totalproductval=$resstock['quant'];
							   ?>
							    <li class="itm hasOverlay unit size1of4 " style="list-style-type:none; margin-right:30px; width:26%; margin-left:15px;">
									<div class="content5smallbox imagecontainers imagecontainers2 newdiv" style="height:360px; margin-left:10px; text-align:center; width:175px; margin-top:10px; margin-right:20px;">
									<div>
								
								</div>
                                                                        <?php
                                                                        if($res['newarrival']==1)
                                                                        {
                                                                            ?>
                                                                      
                                                                        <div style="width: 65px; height: 82px; position: absolute; z-index:99; top:10px; background: url(images/special.png);">
							       
                                                                        </div>
                                                                        <?php
                                                                        }
                                                                        ?>
									<div id="newbox" style="width:100%; height:20px; text-align:center; border:0px;">
								<?php 
								$created=$res['created_ondate'];
							$month=date("m",strtotime($created));
							$current_month=date("m");
							if($month==$current_month)
							{
								?>
                                                                
														<!--<div style="width:50px; color:#000000; border:1px solid #ff6600; margin:auto;  height:15px; padding-bottom:3px;  font-family:AsapRegular;">
																	NEW
														</div>-->
                                                                                                               
														<?php } ?>
											</div>
							   				<div class="itm-overlay">
										 <!-- Could not find the End of this div even on original document-->
										 <div style="width:100%;  height:81px; float:left; position:relative; margin-left:23px; color:#333333;" class="itm-qlInsert">
										<div class="compare" style=" width:45px; font-size:10px; height:75px; float:left; background:none; font-family:Arial, Helvetica, sans-serif; font-size:10px;  ">
														<img src="../admin_new/inventory_management/<?php echo $res['image'];?>" style="width:40px; height:60px; padding-left:20px;"/><br/>
                                                                                                                <span style="margin-left:23px;">Compare</span>
													</div>
													<div class="addbutton" id="<?php echo $res['id'];?>">
													</div>	
														<div class="whislist" style=" width:22px; height:56px; font-size:10px; text-align:center; float:left; background:none; font-family:Arial, Helvetica, sans-serif; font-size:10px; margin-left:75px;">							
														<img src="images/star.png" width="22" height="21" style="margin-left:25px;"/><br/>
														<div style="width:60px; height:36px; float:left; padding:2px; text-align:center; background:#5B5B5B; color:#FFFFFF; font-family:Arial, Helvetica, sans-serif; font-size:12px;  border-radius:3px; -moz-border-radius:3px; margin-top:3px; line-height:1.3;">
															Add to<br/> Compare
														</div>
													</div>
											</div>
							   					<div style="height:220px; width:100%; float:left; text-align:center; margin-top:40px; text-align:center;">

							   							 <a href="oneproduct.php?idvalue=<?php echo $res['id']?>&idvalue1=<?php echo $pid;?>&bid1=<?php echo $bid;?>">
	<img src="../admin_new/inventory_management/<?php echo $res['image'];?>"  style="width:120px; height:205px; max-height:205px;" alt="<?php echo $res['alternate_val']; ?>"/>  </a>
							   					</div>
<script type="text/javascript">
	jQuery(function($){ //on document.ready	
		var $i = jQuery.noConflict(); 
		$i('.imagecontainers').overlaycontent({ //initialize overlay on DIVs with class="imagecontainers"
			speed:1100,
			dir:'down',
			opacity:1 //opacity: 0 to 1
		})
		//var $i = jQuery.noConflict(); 

		$i('.imagecontainers2').overlaycontent2({ //initialize overlay on DIVs with class="imagecontainers"
			speed:1100,
			dir:'left',
			opacity:1 //opacity: 0 to 1
		})
	})
	</script>			
					   							<p style="height:auto; float:left; ">
															<div style="font-family:ProximaNova-Regular; font-size:12px; color:#333333; font-weight:bold; height:auto; float:left; text-align:center; width:100%; margin-top:15px; min-height:100px;">
															<div style="width:100%;height:auto; min-height:100px; ">
															<?php echo $res['brand_name'];?><br/>	
																<span style="font-weight:normal; color:rgb(0, 75, 145); "><?php echo substr($res['product_name'],0,45);?></span>
															
																<br />
																	<?php //echo substr($product_description_res,0 ,30);?> 
																<?php 
																if($disc)
											{					?>
																<strike style='font-size:14px; color:#FF0000; '>Rs.<?php echo number_format($res['price'],2)?></strike>&nbsp;&nbsp;</br>
                                                                                                                                <span style='font-size:14px;'>
																<?php
																echo 'Rs. '.number_format($finalval,2);
																}
																else
																{
																    ?>
                                                                                                                                </span>  
															<span style='font-size:14px;'> Rs. <?php echo number_format($res['price'],2);?></span>
															<?php
																}
																?>
																</div>
																<div class="itm-qlInsert" style="width:100%; height:25px; padding-top:4px; padding-bottom:2px; text-align:center; background:#ebebeb; color:#333333; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center; float:left; position:inherit; bottom:0px;">
														Stock Available: <?php echo $totalproductval;?>
													</div>	
															</div>
														</p>
							 	</div>
							   <?php
							   }
							   ?>
							  </div>
							  </li>
							  </ul>
			</div>
				 
				</div> 

</div>
</div>
<?php
}
?>
<!--rightbar end-->

				 <div id="content5_box1" style="float:left; height:auto;  width:740px; margin-top:0px;  margin-left:0px; margin-left:15px;">
						<?php
$q=mysql_query("select `type_name` from `appliedtype_to_page` where `pageid`=(select `id` from `page_details` where `pagename`='productdetails.php')")or die(mysql_error());
$r=mysql_fetch_array($q);
if($r['type_name']=="top_sellers")
{
include_once("../admin_new/inventory_management/top_sellers.php");
}
elseif($r['type_name']=="most_popular")
{
include_once("../admin_new/inventory_management/most_popular.php");
}
else{
}

?>			 </div>
  </div>
</div>
	   		</div>
		
<!--<div style="width:100%; height:auto; float:left; margin-top:40px;">-->
<div id="footer" style="margin-top:20px;">
	<?php include_once('bottombar.php');?>	
</div>
<!--</div>-->
	
</body>
</html>
