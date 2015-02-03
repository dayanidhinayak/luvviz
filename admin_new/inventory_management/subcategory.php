<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
$catid=$_GET['proval'];
$sql1=mysql_query("select distinct(`brand_id`) from `product` where category_id like '%|$catid|%'")or die(mysql_error());
	while($result1=mysql_fetch_array($sql1))
	{
            
        $sql2=mysql_query("select * from `brand` where `id`='$result1[brand_id]' and `status`='1'")or die(mysql_error());

			$result2=mysql_fetch_array($sql2);
?>
<table>
<tr>
<td onclick="return getpro(<?php echo $result2['id'];?>,<?php echo $catid;?>)" style="cursor: pointer;"><?php echo $result2['brand_name'];?></td>
</tr>
</table>
<?php
}
?>