<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Luvviz adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	tr{
	height:35px;
	 text-shadow: 0 1px 0 #FFFFFF;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>
<script type='text/javascript' src='jquery.min.js'></script>

<script>

$(function() {

$('.colla').next().hide();

$('.colla').click(function(){

	   if($(this).next().is(':hidden') )

	   $(this).next().show('slow');

	  else{

	   $(this).next().hide('slow');

	  }

  });

  

 });



</script>
<script>
function set_status(key)

{
//alert(key);
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
//document.getElementById('result').innerHTML=result;

	}
}
xmlhttp.open("GET","change_status.php?q="+key,true);

xmlhttp.send();




}

</script>
</head>

<body>

		
		
		<?php
		include_once('topbar.php');
		include_once('../menubar.php');?>
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<!--<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3><!--Catalog <img src="../images/separator1.png" /> Products</h3></div>
			
			</div>-->











<div style="width:50%; height:auto; float:left;">

<form name="form" action="insert_pc_status.php" method="post">

<input type="submit" name="submit" value="Submit" a  style="position:fixed; top:240px; left:400px; z-index:99;"/>
<?php
$q=mysql_query("select * from `category`");

				while($r=mysql_fetch_array($q))

				{
			?>

<ul>
<div class="colla">
<?php 
if($r['pc_status']=='0')
{
?>
                   <input type="checkbox" value="<?php echo $r['id'];?>" name="cat_id<?php echo $r['id'];?>" /><?php echo $r['category_name'];
				   }
				   else
				   {
				   ?>
				    <input type="checkbox" value="<?php echo $r['id'];?>" name="cat_id<?php echo $r['id'];?>" checked="checked" onclick="return set_status(this.value);" /><?php echo $r['category_name'];
					
					}
					?>
					</div>
					<div style="width:90%;float:left; margin-left:10%;">
<?php 
$q1=mysql_query("select `product_name` from `product` where `category_id` like '%|$r[id]|%'");
while($r1=mysql_fetch_array($q1))
{
?>
<li><?php echo $r1['product_name'];?></li>
<?php } ?>
</div>
</ul>
<?php } ?>

</form>
</div>
<div style="width:50%; height:auto; float:left;">
<h2>Alredy Added Categories</h2>
<?php
$q2=mysql_query("select * from `category` where `pc_status`='1'") or die(mysql_error());

				while($r2=mysql_fetch_array($q2))

				{
			?>
<ul><?php echo $r2['category_name'];?></ul>

<?php } ?>
</div>
</div></div>
		<?php
		include_once("../footer.php");
		?>
</body>
</html>
