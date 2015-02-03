<?php 
include_once('../function.php');

$str="";
$catid="";

if(isset($_GET['idval']) && ($_GET['idval']!=""))
{
$idval=$_GET['idval'];
$str.="and `p`.`id`='$idval'";
}
if(isset($_GET['nameval']) && ($_GET['nameval']!=""))
{
$nameval=$_GET['nameval'];
$str.="and `p`.`product_name` like '%$nameval%' ";
}
if(isset($_GET['catval'])&& ($_GET['catval']!=""))
{
$catval=$_GET['catval'];
$q=mysql_query("select * from `category` where `category_name` like '%$catval%' and `parent`!=0");
$r1=mysql_fetch_array($q);
$catid.="'|".$r1['id']."|'";
while($r=mysql_fetch_array($q))
{
if($r['id']!=$r1['id'])
{
$catid.="or `p`.`category_id` like '|".$r['id']."|'";
}

}
$str.="and `p`.`category_id` like $catid";
}
if(isset($_GET['baseprice'])&& ($_GET['baseprice']!=""))
{
$baseprice=$_GET['baseprice'];
$str.="and `p`.`selling_price` > '$baseprice' ";
}
if(isset($_GET['finalprice'])&& ($_GET['finalprice']!=""))
{
$finalprice=$_GET['finalprice'];
$str.="and `p`.`price` > '$finalprice'";
}
if(isset($_GET['quantity'])&& ($_GET['quantity']!=""))
{
$quantity=$_GET['quantity'];
$str.="and `s`.`quantity` > '$quantity'";
}

//echo "select p.*,s.`quantity` from `product` p,`stock` s where `p`.`id`=`s`.`product_id`  $str";
$query=mysql_query("select p.*,s.`quantity` from `product` p,`stock` s where `p`.`id`=`s`.`product_id`  $str");




				
					while($res=mysql_fetch_array($query))
					{



$cat_name='';
					$brandname='';


				$catid=$res['category_id'];


					$val=explode("|",$catid);
				foreach($val as $v)
				{
				//echo $v.'/t';
				if($v!='')
				{
				$query1=mysql_query("select * from `category` where `id`='$v' and `parent`!=0");
				$res1=mysql_fetch_array($query1);
 
				if($res1['category_name']!='')
				{
				$cat_name.=$res1['category_name'].',';
				}
				$qq1=mysql_query("select `brand_name` from `brand` where `brand_name`='$res1[category_name]'");
				$rr1=mysql_fetch_array($qq1);
				if($rr1['brand_name']!='')
				{
				$brandname.=$rr1['brand_name'].',';
				}
				
				
				}
				}
				if($cat_name==',')
				{
				$cat_name="Not Categorised";
				}

				

?>
<tr>
						<td><input type="checkbox" name="product[]" value="<?php echo $res['id'];?>" /></td>
						<td><?php echo $res['id'];?></td>
						<td><img src="<?php echo $res['image'];?>" style="width:30px; height:30px;" /></td>
						<td><?php echo $res['product_name']?></td>
						<td><?php echo $cat_name;?></td>
						
						
						
						<td><?php echo $res['selling_price']?></td>
						<td><?php echo $res['price']?></td>
						<td><?php echo $res['quantity']?></td>
						<td><?php echo $brandname;?></td>


						<?php
						if($res['newarrival']==1)
						{
						
						?>
						<td id="dis<?php echo $res['id'];?>"><img src="../images/tick.png" onclick="return disable(<?php echo $res['id'];?>,<?php echo $res['newarrival']?>);" /></td>
						<?php
						}
						else
						{
						?>

						<td id="ena<?php echo $res['id'];?>"><img src="../images/disabled.gif" onclick="return disable(<?php echo $res['id'];?>,<?php echo $res['newarrival']?>);"/></td>
						<?php
						}
						?>


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




						<td><a href="edit_product.php?id=<?php echo $res['id'];?>"><img src="../images/edit.gif" /></a>&nbsp;
						
						<a href="delete_product.php?id=<?php echo $res['id'];?>" onclick="return confirmation('<?php echo $res['product_name']?>')">
							<img src="../images/delete.gif"    />
						</a>
						
						</td>
						</tr>
						<?php
						$slno++;
						}
						
						?>
