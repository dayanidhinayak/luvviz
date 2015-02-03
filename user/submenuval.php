<?php
include_once("function.php");
$val=$_GET['cnm'];
$q1=mysql_query("select * from `category` where `category_name`='$val'");
$r1=mysql_fetch_array($q1);
$q11=mysql_query("select * from `category` where `parent`='$r1[id]' limit 0,6");

										while($r11=mysql_fetch_array($q11))

										{

										$q_brand=mysql_query("select * from brand where `brand_name`='$r11[category_name]'");

				 $r_brand=mysql_fetch_array($q_brand);

				 $bid_temp=$r_brand['id'];


?>
<div>><a href="productdetails.php?idval=<?php echo $r11['id']?>&type=brand&bid=<?php echo $bid_temp; ?>" onMouseOver="return getdetails(<?php echo $r11['id'];?>,<?php echo $r1['id'];?>);" style="text-shadow:none; font-size:12px; font-family:AsapRegular; text-decoration:none; " > <?php echo $r11['category_name'];?> </a></div>

<?php
}
?>
