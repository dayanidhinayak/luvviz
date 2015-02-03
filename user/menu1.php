<?php
include_once("function.php");
?>
<html>
<head>
<style>
 #nav ul{
    width:960px;
    margin:0;
	
   /* padding-top:5px;*/
    padding-bottom:5px;
height:35px;
    background: rgb(70, 122, 201);
    list-style: none;
}
#nav ul li{ float:left;color:#FFF;padding:15px;  height:20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight:bold; }
#nav ul li:hover{
background:#fff;
border-top-left-radius: 5px;
border-top-right-radius: 5px;
text-align: center;
padding:15px;

color:#000000;
margin-left: 0px;
margin-top:3px;
font-family: Arial, Helvetica, sans-serif; font-size: 12px;font-weight:bold;
}
#nav ul li a:hover{color:#000; font-size: 12px; font-weight:bold; font-family: Arial, Helvetica, sans-serif;}
#nav ul li a {display:block;font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight:bold;padding:5px 62px 0 0px; text-decoration:none; color:#fff;}

.submenu{
 width: 960px;
float:left;
 margin-top:-10px;
  background: #ffffff;
  box-shadow: 6px 6px 3px #888888;
  -moz-box-shadow: 6px 6px 3px #888888;
  -webkit-box-shadow: 6px 6px 3px #888888;
  border-bottom-left-radius: 7px;
  border-bottom-right-radius: 7px;
  border-left:1px solid #888;
  height:auto;
  padding-top:10px;
 padding-bottom:15px;	
}

.box3{
height:auto;width:130px; float:left;  margin-left:30px; padding-top: 7px; }

.ul3{ list-style:square; line-height:1.1;  font-size: 12px;font-family:Arial, Helvetica, sans-serif; padding:0px; margin:0px;
}

.li3{
 width:155px; font-size: 14px;}


</style>


<!--<script type="text/javascript" src="jquery-1.9.1.min.js"></script>-->
<!--<script type="text/javascript">
$(function(){
 var partidd='0';
 var partidd2='0';
 setInterval(function() {
 
 if(partidd!=partidd2)
 {      $('.submenu').hide();
        //$('#part'+partidd).slideDown();
        partidd2=partidd;
}
//$('#part'+idd).show();
}, 200);

var hide=1;
	$('.menusub').mouseover(function(){
  //alert($(this).attr('id'));      
var idd= $(this).attr('id');
 //setTimeout(function() {
 //$('.submenu').hide();
 partidd=idd;
 //alert(partidd+'----'+idd);
//$('#part'+idd).slideDown();
//$('#part'+idd).show();
//}, 200);



	});
     
        
        $('#mouseout2').mouseout(function(){
        	//alert(12)
		$('.submenu').mouseover(function(){
		 hide=0;
		  
		});
		if (hide==1) {
		  $('.submenu').hide();
		  partidd=0;
		}
		   hide=1;
	 	 });

 $('.mouseout').mouseover(function(){
        	//alert(12)
		
		  $('.submenu').hide();
		partidd=0;
	 	 });
	 	 

});

</script>-->
<style>
 .smallimgbox{
 width:50px;
 height: 50px;
 
 margin: auto;
 border-radius:8px;
 box-shadow: 0 10px 10px -10px #000000;
 -moz-box-shadow: 0 10px 10px -10px #000000;
 -webkit-box-shadow: 0 10px 10px -10px #000000;
 margin-left: 10px;
 border: 5px solid #cccccc;
}
.smallimg{

}
.smallimgbox:hover{


border-radius:5px;
-moz-border-radius:5px;
moz-box-shadow: 0 0 5px #ff6105;
-webkit-box-shadow: 0 0 5px#ff6105;
box-shadow: 0 0 5px #ff6105;

}
.li3:hover{
 text-decoration: underline;
}
</style>
<!--<script  type="text/javascript"
        src="jquery-1.4.2.min.js">
    </script>-->
  
<!--<script type="text/javascript">
   $(document).ready(function(){
       $(document).mousemove(function(e){
         
	  if (((e.pageX <= 1120) && (e.pageX >= 162)) && ((e.pageY <= 450) && (e.pageY >= 111)))
	  {
	   return false;
	  }
	   else
	   {
	   
	   $('.submenu').hide();
	   }
	 
	  
       });
    });
  </script>-->
</head>
<body>
  
  
  
<div style="width:960px; height: 5px; margin:auto; " class="mouseout">
 
</div>
<div>
 
<div id="topbar-box">
								<div id="logo-box">
										<a href="index.php"><img src="images/logo.png" width="100"  /></a>
								</div>
								<div id="headright-box">
										<div id="headlink">
												<div id="headright-box1">
												 <?php include_once("topbar1.php");?>
												</div>	
           <div id="menu" style="margin-top:30px; width:90%;">
													<ul>
														 <li><a href="career/login.php" style="text-decoration:none; color:#333;" target="_blank">Career</a></li>
        <!-- <div style="width:10px; height:38px; float:left;position:relative; z-index:1000;" class="mouseout" ></div>-->
		   <?php
		 $catname=array();
				//$q=mysql_query("select * from `category` where `parent`='0' and `status`='1' ORDER BY `priority`  limit 0,5");
$q=mysql_query("select * from `category` where `status`='1' ORDER BY `priority`  limit 0,$menulimitvalue");


						while($res=mysql_fetch_array($q))

						{
						
						$catname[]=$res['id'];

					
						$q_brand=mysql_query("select * from `brand` where `brand_name`='$res[category_name]' limit 0,10");
				 $r_brand=mysql_fetch_array($q_brand);
				
				 $bid_temp=$r_brand['id'];

				 

						?>

              <a href="productdetails.php?idval=<?php echo $res['id'];?>&type=brand&bid=<?php echo $bid_temp; ?>"> <li id="<?php echo $res['id']?>" class="menusub"><?php echo $res['category_name'];?></li></a>
		<li class='mouseout' style="width:12px; margin: 0px; padding: 0px; padding-top:20px; background:none;"></li>
				 <?php
				 //$i++;
				 }
				 ?>
			
				 				<!--<div style="width:15px;height:38px;  padding-top:0px; margin-top:0px; float:right;margin-right: 10px;" class="mouseout" ></div>-->
                             </ul>

                             
         </div>
         </div>
<div id="mouseout2" class="box2" style="width:100%; height:auto; float:left;  margin-top:0px; position:relative; z-index:1000;">
<div style="width:960px; height:0px; margin: auto;">

<?php
foreach($catname as $catid)
{
?>

<div id="part<?php echo $catid?>" class="submenu box2" chksame="aaa" style=" width:960px; height: auto;  display: none;">
<!--<div style="width:10px; height:100%;  float: left;  z-index:1000; position: absolute; " class="mouseout" >
 
</div>-->
<?php
$q1=mysql_query("select * from `category` where `parent`='$catid' limit 0,10 ");


										while($r1=mysql_fetch_array($q1))

										{

										$q_brand=mysql_query("select * from brand where `brand_name`='$r1[category_name]' limit 0,10");
				 $r_brand=mysql_fetch_array($q_brand);

				 $bid_temp=$r_brand['id'];
				 if($r1['id']==143 || $r1['id']==144)
				 {
				  $bid_temp='';
				 }
?>


 
<div  class="smallimgbox" style="display:none;">
  <a href="productdetails.php?idval=<?php echo $r1['id']?>&type=brand&bid=<?php echo $bid_temp; ?>" style="display:none;">
  <img chksame="aaa" src="../admin_new/inventory_management/<?php echo $r1['img']?>" width='50' height='50' class="smallimg"   style="width:50px; height: 50px; background: #ffffff; margin-top: 0px;"/></a>
 </div>
 <div style="width:155px; font-family:arial; font-size:13px; font-weight:bold; color:#0f5da6; padding-left: 13px; margin-top: 5px; cursor: pointer; display:none;">
	<a href="productdetails.php?idval=<?php echo $r1['id']?>&type=brand&bid=<?php echo $bid_temp; ?>"><?php echo $r1['category_name'];?></a>
</div>
 <div style="width:150px; height:auto; float:left; margin-top: 3px; margin-left: 10px;">
 <a chksame="aaa" href="productdetails.php?idval=<?php echo $r1['id']?>&type=brand&bid=<?php echo $bid_temp; ?>"  style="text-shadow:none; font-size:12px;  text-decoration:none; font-weight:bold;" ></a>
<ul class="ul3" chksame="aaa" style="display:none;">
<?php 
$det=array();
				 $query1=mysql_query("select * from `category` where `parent`='$r1[id]' limit 0,10");
				 
				
				 while($result1=mysql_fetch_array($query1))
				 {
				 	$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$result1[id]|%' limit 0,10 ");
					while($r=mysql_fetch_array($q))

					{

					
if($r['brand_name']!=$r1['category_name'])
{
					$det[]=$r['brand_name'];
}				
					}

					}

					

			$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$r1[id]|%' limit 0,10 ");

					while($r=mysql_fetch_array($q))

					{

					//echo $r['brand_name'];
if($r['brand_name']!=$r1['category_name'])
{
					$det[]=$r['brand_name'];
}
					

					}

					

					

					//var_dump($det);

					$value=array_unique($det);

				 //var_dump($val);

				 foreach($value as $v)

				 {

				 $qq=mysql_query("select `id` from `brand` where `brand_name`='$v' limit 0,10");

				 $rr=mysql_fetch_array($qq);

				 ?>
<li class="li3" chksame="aaa" style=" margin-left:18px; color:#0f5da6; "><a chksame="aaa"  href="productdetails.php?idval=<?php echo $r1['id'];?>&type=brand&bid=<?php echo $rr['id']?>" style="text-shadow:none; font-size:12px;  color:#0f5da6;  text-decoration:none;"><?php echo $v?></a></li>

<?php
}
?>
</ul>
</div>
<?php
}
?>


<div style="width:960px; height:23px;  float: left;  " class="mouseout">
 
</div>
 </div>

<!--<div style="width:10px; height:100%; float: left; margin-left: 950px; z-index:1000; position: absolute;" class="mouseout" >
 
</div>-->
<?php
}
?>

</div>

</div>

</div>
</div>
</body>
</html>

 
