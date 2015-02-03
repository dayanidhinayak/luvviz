<?php 
include_once('../function.php');
$inv=$_GET['id'];

$q=mysql_query("select * from  `product` where `product_name` like '$inv%'") or die(mysql_error());

while($r=mysql_fetch_array($q))

{
echo "<span onclick='return set_value(&#39;$r[product_name]&#39;);'>$r[product_name]</span><br/>";

}

?>
