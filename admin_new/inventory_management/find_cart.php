<?php 

include_once('../function.php');



$str="";

//$catid="";

if(isset($_GET['slnoval']) && ($_GET['slnoval']!=""))

{

$slnoval=$_GET['slnoval'];

$str.="and `o`.`slno`='$slnoval'";

}

if(isset($_GET['idval']) && ($_GET['idval']!=""))

{

$idval=$_GET['idval'];

$str.="and `o`.`id`='$idval'";

}

if(isset($_GET['nameval']) && ($_GET['nameval']!=""))

{

$nameval=$_GET['nameval'];

$str.="and `o`.`billing_name` like '$nameval%' ";

}

										
//if(isset($_GET['statusval'])&& ($_GET['statusval']!=""))
//
//{
//
//$finalprice=$_GET['statusval'];
//
//$str.="and `o`.`status` = '$finalprice'";
//
//}

if(isset($_GET['fromval'])&& ($_GET['fromval']!="") && isset($_GET['toval'])&& ($_GET['toval']!=""))

{

$from=$_GET['fromval'];

$to=$_GET['toval'];

$str.="and `o`.`order_ondate` between '$from' and '$to'";

}



$str1=substr($str,3); 

//echo $str1;

$qq="select o.* from `order_details` o where  $str1";

//echo $qq;

//echo "select p.*,s.`quantity` from `product` p,`stock` s where `p`.`id`=`s`.`product_id`  $str";

$query=mysql_query($qq) or die(mysql_error());





				

					while($r=mysql_fetch_array($query))

					{

					?>

					<tr>
						<td><?php echo $r['slno'];?></td>
						<td><?php echo $r['id'];?></td>
						
						<td><?php echo $r['billing_name'];?></td>
						
						<?php 
						$tot=0;
						
						$q1=mysql_query("select `quantity`,`tot_price`,`recurrent_price` from `temp_billinfo` where `bill_id`='$r[id]'") or die(mysql_error());
					while($r1=mysql_fetch_array($q1))
					{
																										 if($r1['quantity']>1)
																{
																				if($r1['recurrent_price']!="")
																				{
																				$price=$r1['recurrent_price'];
																				}
																				else
																				{
																				$price=$r1['tot_price'];
																				}
																}
																else
																{
																				$price=$r1['tot_price'];
																}
																$tot+=$price;	
																}
																
						?>
						<td  align="center"><?php echo $tot;?>	</td>
						
						
						<td align="center">My Carrier</td>
						<td><?php echo $r['order_ondate'];?></td>
						<td></td>
						<td><img src="images/details.gif" /><img src="images/delete.gif"/></td>
						
					</tr>

						<?php } ?>