<?php
$id=$_GET['val'];
echo $id;
$rrs1=mysql_query("select * from `product` where `category_id` LIKE '%|$id|'");
while($rroo=mysql_fetch_array($rrs1)){

?>


<tr>
<td><?php echo $rroo['product_name']; ?></td>
</tr>

<?php 
}
?>
