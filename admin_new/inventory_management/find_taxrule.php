<?php 
include_once('../function.php');

$str="";
$catid="";

if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and `id`='$idval'";
}
if(isset($_GET['nameval']) && ($_GET['nameval']!=""))
{
$nameval=$_GET['nameval'];
$str.="and `name` like '$nameval%' ";
}


$val=substr($str,3);
//echo "select p.*,s.`quantity` from `product` p,`stock` s where `p`.`id`=`s`.`product_id`  $str";
$query=mysql_query("select *  from `tax_rule` where  $val");


				
					while($res=mysql_fetch_array($query))
					{
				
?>

					<tr>

						<td><input type="checkbox" name="taxrule[]" value="<?php echo $res['id'];?>" /></td>

						<td><?php echo $res['id'];?></td>

						
						<td><?php echo $res['name']?></td>

						


						<?php

						if($res['status']==1)

						{

						

						?>

						<td id="ena<?php echo $res['id'];?>"><img src="../images/tick.png" onclick="return enable(<?php echo $res['id'];?>,<?php echo $res['status']?>);" /></td>

						<?php

						}

						else

						{

						?>

						<td id="ena<?php echo $res['id'];?>"><img src="../images/disabled.gif" onclick="return enable(<?php echo $res['id'];?>,<?php echo $res['status']?>);"/></td>

						<?php

						}

						?>

						<td><a href="edit_tax.php?id=<?php echo $res['id'];?>"><img src="../images/edit.gif" /></a>&nbsp;

						

						<a href="delete_taxrule.php?id=<?php echo $res['id'];?>" onclick="return confirmation('<?php echo $res['name']?>')">

							<img src="../images/delete.gif"    />

						</a>

						

						</td>

						</tr>

						<?php

						$slno++;

						}

						?>
