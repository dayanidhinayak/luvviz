<?php
ini_set("dispaly_errors",1);
include_once("function.php");
$name=$_GET['q'];
//echo "select * from `product` where `product_name` like '$name%'";
$q=mysql_query("select * from `product` where `product_name` like '%$name%'");
$i=1;
while($r=mysql_fetch_array($q))
{
$id=$r['id'];
echo "<div style='width:100%; height:auto; min-height:60px; float:left; border-bottom:1px dotted #555; margin-bottom:0px;' id='span$i' class='change'>
<div style='width:210px; height:auto; float:left;'>
<img src='../admin_new/inventory_management/$r[image]' style='width:30px; height:40px; float:left; margin-left:5px; margin-top:5px;' /></div>
<a href='oneproduct.php?idvalue=$id' >
<div style='width:auto;  float:left; line-height:1.6; margin-left:5px;' id='spana$i' class='change' >$r[product_name]</div>
</a>
<div style='width:100%; height:auto; float:left; text-align:right; color:rgb(70, 122, 201);'> Rs.$r[price]</div>
</div>";
$i++;
}
?>
