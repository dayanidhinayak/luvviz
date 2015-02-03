<?php 
include_once('../function.php');

$str="";
$catid="";

if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and `slno`='$idval'";
}
if(isset($_GET['nameval']) && ($_GET['nameval']!=""))
{
$nameval=$_GET['nameval'];
$str.="and `tax_name` like '$nameval%' ";
}
if(isset($_GET['priceval'])&& ($_GET['priceval']!=""))
{

$priceval=$_GET['priceval'];
$str.="and `rate` > $priceval";
}

$val=substr($str,3);
//echo "select p.*,s.`quantity` from `product` p,`stock` s where `p`.`id`=`s`.`product_id`  $str";
$query=mysql_query("select *  from `taxes` where  $val");


				
					while($res=mysql_fetch_array($query))
					{
				
?>
<tr>

						<td><input type="checkbox" name="product[]" value="<?php echo $res['slno'];?>" /></td>

						<td><?php echo $res['slno'];?></td>

						
						<td><?php echo $res['tax_name']?></td>

						<td><?php echo $res['rate']?>%</td>


						<?php

						if($res['status']==1)

						{

						

						?>

						<td id="ena<?php echo $res['slno'];?>"><img src="../images/tick.png" onclick="return enable(<?php echo $res['slno'];?>,<?php echo $res['status']?>);" /></td>

						<?php

						}

						else

						{

						?>

						<td id="ena<?php echo $res['slno'];?>"><img src="../images/disabled.gif" onclick="return enable(<?php echo $res['slno'];?>,<?php echo $res['status']?>);"/></td>

						<?php

						}

						?>

						<td><a href="edit_tax.php?id=<?php echo $res['slno'];?>"><img src="../images/edit.gif" /></a>&nbsp;

						

						<a href="delete_tax.php?id=<?php echo $res['slno'];?>" onclick="return confirmation('<?php echo $res['product_name']?>')">

							<img src="../images/delete.gif"    />

						</a>

						

						</td>

						</tr>

						<?php

						$slno++;

						}

						?>