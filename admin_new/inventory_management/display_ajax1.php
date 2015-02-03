<?php 
include_once('../function.php');
$id=$_GET['idval'];
//echo "select * from `promo_product` where `id`=$id'; ";

$query=mysql_query("select * from `promo_product` where `id`=$id' ");


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