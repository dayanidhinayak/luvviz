<?php
ini_set("dispaly_errors",1);
include_once("function.php");

$email=$_SESSION['id'];
$sql=mysql_query("select * from `user_details` where `email`='$email'");
$res=mysql_fetch_array($sql);
valid_chk();

$status='';
if($_POST['submit'])
{
if(isset($_POST['currentpwd'],$_POST['newpwd'],$_POST['retypepwd']))
{
	if($_POST['currentpwd']=="")
	{
	$status="Current Password Cannot Be Blank.";
	
	}
	else if($_POST['newpwd']=="")
	{
	$status="New Password Cannot Be Blank.";
	
	}
	else if($_POST['currentpwd']!=$_SESSION["pass"])
	{
	$status="Current Password Is Not Valid.";
	
	}
	else if($_POST['newpwd']!=$_POST['retypepwd'])
	{
	$status="New Password & Confirm Password Are Not Identical.";
	}
	else
	{
	$que=mysql_query("UPDATE `user_details` SET `password`='$_POST[newpwd]' WHERE `email`='$_SESSION[id]' and `first_name`='$res[first_name]'");
	//echo "UPDATE `user_details` SET `password`='$_POST[newpwd]' WHERE `id`='$_SESSION[id]' and `first_name`='$res[first_name]'";
	if($que)
	{
	$status="Password Changed Successfully.";
	$_SESSION["pass"]=$_POST['newpwd'];
	}
	}
}
}
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
<style>
.tbox{
padding:2.5%; 
width:200px;
}
</style>
 
</head>

<body>
<?php
//echo $mess;
if(isset($_SESSION['id'])){
	

?>
<?php
include_once("menu4.php");
?>
		<div id="menuu">
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

<div style="width:100%; height:auto; float:left;">
     <div style="width:1040px; margin:auto;">

<div id="contentbar" style="margin-top:15px; height:auto;">
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
							  
							  if (in_array("changepassword.php", $x))
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
      
	  
        
         
		   <div class="orderbox"  style="width:735px; height:auto; margin-left:0%; padding-bottom:2%; ">
				 <h1> 
						Change Password</h1>
				 	<div class="box" style="width:735px;height:auto; margin-bottom:30px;">
				 		<div style="padding:10px; text-align:justify;">
<?php echo $status; ?>
<form name="ww" method="post" action="changepassword.php">
<table style="font-family:arial; height:240px; width:600px;">
<tr>
<td>Current Password</td>
<td><input type="password" name="currentpwd" class="tbox"/></td>
</tr>	
<tr>
<td>New Password</td>
<td><input type="password" name="newpwd" class="tbox" /></td>
</tr>
<tr>
<td>Re-Type New Password</td>
<td><input type="password" name="retypepwd"  class="tbox"/></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Change" /></td>
</tr>
					
</table>
</form>
						
				 		</div>
					</div>   
			  
			</div>
						
						</div>
						</div>
        
      
     
    
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
     </div>
</div>
  <?php include_once('bottombar.php');?>
</body>
</html>
