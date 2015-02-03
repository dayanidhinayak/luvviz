<?php
include_once("function.php");
$val=$_GET['q'];
$q_cat_img=mysql_query("select img from `category` where `id`='$val'");
$r_cat_img=mysql_fetch_array($q_cat_img);
$cat_img=$r_cat_img['img'];
?>
<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">
 <div class="cat-content">
<div id="category" class="fleft list-column">
           <div class="menu">
              <p>Shop by category</p>
                 <ul>
				 <?php
				 $query=mysql_query("select * from `category` where `parent`='$val' ");
				 while($result=mysql_fetch_array($query))
				 {
				 
				 ?>
				 <li><a  style="color:#333333;" href="productdetails.php?idval=<?php echo $result['id'];?>&type=category&bid=0 "><?php echo $result['category_name'];?></a></li>
				 <?php
				 }
				 ?>
				 
				 <li><a href="#" style="color:#333333;">more...</a></li>
				 </ul>
            </div>
</div>
		


 <div id="brand" class="fleft list-column">
           <div class="menu">
              <p>Shop by brands</p>
                 <ul>
				 <?php
				 
				$det=array();
				 $query1=mysql_query("select * from `category` where `parent`='$val'");
				 while($result1=mysql_fetch_array($query1))
				 {
				
				 	$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$result1[id]|%' ");
					while($r=mysql_fetch_array($q))
					{
					//echo $r['brand_name'];
					$det[]=$r['brand_name'];
					
					}
					}
					
			$q=mysql_query("SELECT distinct(b.`brand_name`) FROM  `product` p,  `brand` b  WHERE  `p`.`brand_id` = `b`.`id` AND  `p`.`category_id` LIKE  '%|$val|%' ");
					while($r=mysql_fetch_array($q))
					{
					//echo $r['brand_name'];
					$det[]=$r['brand_name'];
					
					}
					
					
					//var_dump($det);
					$value=array_unique($det);
				 //var_dump($val);
				 foreach($value as $v)
				 {
				 $qq=mysql_query("select `id` from `brand` where `brand_name`='$v'");
				 $rr=mysql_fetch_array($qq);
				 ?>
				 <li><a style="color:#333333;" href="productdetails.php?idval=<?php echo $val;?>&type=brand&bid=<?php echo $rr['id']?>" ><?php echo $v?></a></li>
				 <?php
				 }
				 ?>
				 
				 <li><a href="#" style="color:#333333;">more...</a></li></ul>
            </div>
		</div>		
	
	
	
	
<div id="ocassion" class="fleft list-column last">
               <div class="menu  menu-last">
                  <p>shop by collection</p>
                     <ul>
					 <?php
				 
				$det1=array();
				 $query2=mysql_query("select * from `category` where `parent`='$val'");
				 while($result2=mysql_fetch_array($query2))
				 {
				
				 	$q1=mysql_query("SELECT distinct(c.`name`) FROM  `product` p,  `collection` c  WHERE  `p`.`collection_id` = `c`.`id` AND  `p`.`category_id` LIKE  '%|$result2[id]|%' ");
					
					while($r1=mysql_fetch_array($q1))
					{
					//echo $r['brand_name'];
					$det1[]=$r1['name'];
					
					}
					}
					//var_dump($det);
					$val1=array_unique($det1);
				 //var_dump($val);
				 foreach($val1 as $v1)
				 {
				 $qq1=mysql_query("select `id` from `collection` where `name`='$v1'");
				 $rr1=mysql_fetch_array($qq1);
				 ?>
					 
					 <li><a style="color:#333333;" href="index.php?page_id=3&id=<?php echo $rr1['id'];?>&parent=<?php echo $val?>&type=collection"  ><?php echo $v1?></a></li>
					 
				<?php
				}
				?>
					 </ul>
           	    </div>
				
			</div>
		<div style="width:150px; height:100px; float:right; margin-top:-100px; margin-right:40px;">
		<?php 
		if($cat_img=="")
		{
		?>
		<img src="images/logo.jpg" style="width:150px; height:auto;">
		<?php
		}
		else
		{
		?>
		
		<img style="width:150px; height:100px;" src="../admin_new/inventory_management/<?php echo $cat_img?>">
		<?php
		}
		?>
		</div>
		</div>
