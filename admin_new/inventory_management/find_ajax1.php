<?php 
include_once('../function.php');

$str="";
$catid="";

if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and `p`.`id`='$idval'";
}
if(isset($_GET['codeval']) && ($_GET['codeval']!=""))
{
$nameval=$_GET['codeval'];
$str.="and `p`.`promo_code` like '$codeval%' ";
}
if(isset($_GET['priorityval'])&& ($_GET['priorityval']!=""))
{
$priority=$_GET['priorityval'];
$q=mysql_query("select * from `promo_product` where `priorityval` like '$priorityval%'");
$r1=mysql_fetch_array($q);
$catid.="'|".$r1['id']."|'";
while($r=mysql_fetch_array($q))
{
if($r['id']!=$r1['id'])
{
$id.="or `p`.`id` like '|".$r['id']."|'";
}

}
$str.="and `p`.`category_id` like $catid";
}
if(isset($_GET['from'])&& ($_GET['from']!=""))
{
$from=$_GET['from'];
$str.="and `p`.`from_date` > '$from' ";
}
if(isset($_GET['to'])&& ($_GET['to']!=""))
{
$to=$_GET['to'];
$str.="and `p`.`to_date` > '$to'";
}


//echo "select p.*,s.`from_date` from `promo_product` p,`stock` s where `p`.`id`=`s`.`product_id`  $str";
$query=mysql_query("select p.*,s.`from_date` from `promo_product` p where `p`.`id`=`s`.`product_id`  $str");


				
					while($res=mysql_fetch_array($query))
					{
				$id=$res['id'];
				$val=str_replace("|","",$id);
				$query1=mysql_query("select * from `promo_product` where `id`='$val'");
				$res1=mysql_fetch_array($query1);
?>
<tr>
						<td><input type="checkbox" name="product[]" value="<?php echo $res['id'];?>" /></td>
						<td><?php echo $res['id'];?></td>
						<td><img src="<?php echo $res['image'];?>" style="width:30px; height:30px;" /></td>
						<td><?php echo $res['promo_code']?></td>
						<td><?php echo $res['priority']?></td>
						
						
						
						<td><?php echo $res['from_date']?></td>
						<td><?php echo $res['to_date']?></td>
						
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
						
						</tr>
						<?php
						$slno++;
						}
						
						?>
