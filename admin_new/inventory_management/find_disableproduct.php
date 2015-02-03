<?php 
include_once('../function.php');
$slno=1;
$str="";

if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and `id`='$idval'";
}
if(isset($_GET['nameval']) && ($_GET['nameval']!=""))
{
$nameval=$_GET['nameval'];
$str.="and `product_name` like '$nameval%' ";
}

if(isset($_GET['description']) && ($_GET['description']!=""))
{
$description=$_GET['description'];
$str.="and `description` like '$description%' ";
}

//echo "select * from `product` where `status`='0' $str";
$query=mysql_query("select * from `product` where `status`='0' $str");
while($rwe=mysql_fetch_array($query))
					{
					?>
					<tr>
					<td><?php echo $slno?></td>
					<td><?php echo $rwe['product_name']?></td>
					<td><?php echo $rwe['description']?></td>
					<td><img src="../images/edit.gif" />&nbsp;
					<a href="delete_product.php?id=<?php echo $rwe['id'];?>" onclick="return confirmation_selected();"> <img src="../images/delete.gif"    /></a></td></tr>
					
					<?php
					$slno++;
					}
					
					
					?>
