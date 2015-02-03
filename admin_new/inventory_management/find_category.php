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
$str.="and `category_name` like '$nameval%' ";
}


//echo "select p.*,s.`quantity` from `product` p,`stock` s where `p`.`id`=`s`.`product_id`  $str";
$query=mysql_query("select * from `category`  where `parent`!='0'  $str");


				
					
				while($result=mysql_fetch_array($query))
					{
					
					?>
					<tr id="<?php echo $result['id'];?>">
						<td><input type="checkbox"  /></td>
						<td><?php echo $slno?></td>
						
						<td><?php echo $result['category_name'];?></td>
						<td  align="center"><?php echo $result['description'];?></td>
						<?php
						if($result['status']==1)
						{
						
						
						?>
						<td><img src="../images/tick.png" /></td>
						<?php
						}
						else
						{
						?>
						<td><img src="../images/disabled.gif" /></td>
						<?php
						}
						?>
						<td><img src="../images/edit.gif" /> &nbsp;
						<img src="../images/delete.gif" class="btnDelete"  />&nbsp;
						<input type="hidden" name="hiddenvalue" id="hiddenvalue" value="<?php echo $result['id'];?>" />
						</td>
					</tr>
					<?php
					$slno++;
					}
					?>
