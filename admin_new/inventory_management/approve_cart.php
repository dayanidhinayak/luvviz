<?php 
include_once('../function.php');
$bill_id=$_POST['bill_id'];
$q1=mysql_query("select t.`quantity`,t.`tot_price`,t.`product_id` from `temp_billinfo` t where t.`bill_id`='$billid' ");
while($r1=mysql_fetch_array($q1))
{


}
?>