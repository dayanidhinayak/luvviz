<?php 
include_once('../function.php');
$id=$_GET['idval'];
$promo_code=$_GET['codeval'];
$priority=$_GET['priorityval'];
$from_date=$_GET['from'];
$to_date=$_GET['to'];
$status=$_GET['status'];
$cur_date=date("Y-m-d");
if(($from_date !="")&&($to_date!=""))
$cond="(`from_date` <= '" . $from_date . "') and (`to_date` >=  '" . $to_date . "')";
else if(($from_date !="")&&($to_date==""))
$cond="(`from_date` <= '" . $from_date . "') and (`to_date` >=  '" . $cur_date . "') ";
else if(($from_date =="")&&($to_date!=""))
$cond="(`to_date` >= '" . $to_date . "')and (`from_date` <= '" . $cur_date . "') ";
else
$cond="1=1";
//echo ("select * from `promo_product` where (`id` like '$id%') and (`promo_code` like '$promo_code%') and (`priority` like '$priority%') and $cond   ");
//echo "select * from `promo_product` where `id`=$id'; ";
 //echo("select * from `promo_product` where (`id` like '$id%') and (`promo_code` like '$promo_code%') and (`priority` like '$priority%')   ");
$query=mysql_query("select * from `promo_product` where (`id` like '$id%') and (`promo_code` like '$promo_code%') and (`priority` like '$priority%') and $cond   ")or die(mysql_error());


	while($row3=mysql_fetch_array($query))
					{
					
					?>
					<tr>
						<td><input type="checkbox" name="promo[]" value="<?php echo $row3['id'];?>" /></td>
						<td><?php echo $row3['id'];?></td>
						<td><img src="<?php echo $row3['image'];?>" style="width:30px; height:30px;" /></td>
						<td><?php echo $row3['promo_code']?></td>
						<td><?php echo $row3['priority']?></td>
						
						
						
						<td><?php echo $row3['from_date']?></td>
						<td><?php echo $row3['to_date']?></td>
						<?php
						if($row3['status']==1)
						{
						
						?>
						<td id="ena<?php echo $row3['id'];?>"><img src="../images/tick.png" onclick="return enable(<?php echo $row3['id'];?>,<?php echo $row3['status']?>);" /></td>
						
                        <?php
						}
						else
						{
						?>
						<td id="ena<?php echo $row3['id'];?>"><img src="../images/disabled.gif" onclick="return enable(<?php echo $row3['id'];?>,<?php echo $row3['status']?>);"/></td>
						<?php
						}
						?>
						
						
						</tr>
						<?php
						
						}
						?>