<?php
include_once("../function.php");
$val=$_GET['q'];

?>
 <div class="cat-content">
<div id="category" class="fleft list-column">
           <div class="menu">
              <p>Shop by category</p>
                 <ul>
				 <?php
				 $query=mysql_query("select * from `category` where `parent`='$val'");
				 while($result=mysql_fetch_array($query))
				 {
				 
				 ?>
				 <li><a href="detaildisplay.php?id=<?php echo $result['id'];?>" ><?php echo $result['category_name'];?></a></li>
				 <?php
				 }
				 ?>
				 
				 <li><a href="#" >more...</a></li>
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
					//var_dump($det);
					$value=array_unique($det);
				 //var_dump($val);
				 foreach($value as $v)
				 {
				 ?>
				 <li><a href="#" ><?php echo $v?></a></li>
				 <?php
				 }
				 ?>
				 
				 <li><a href="#" >more...</a></li></ul>
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
				 ?>
					 
					 <li><a href="#" ><?php echo $v1?></a></li>
					 
				<?php
				}
				?>
					 </ul>
           	    </div>
				
			</div>
		
		</div>