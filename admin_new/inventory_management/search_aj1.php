<?php
include_once('../function.php');
$inv=$_GET['q'];
?>

<?php
$id=1;
$query=mysql_query("select * from `product` where `id` ='$inv'");
while($res=mysql_fetch_array($query))
{
echo $res['product_name'];
}
?>

