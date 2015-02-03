<?php
ini_set("display_errors",1);
include_once("../function.php");
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mapkart adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	tr{
	height:35px;
	 text-shadow: 0 1px 0 #FFFFFF;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>

</head>

<body>
		<div id="topbar">
			<div id="topbar_content">
				<div id="logo">
				</div>
				<div id="logoicon">
					<img src="images/order.png" style="float:left; margin-top:2px; margin-left:10px;" />
					<img src="images/customer.png" style="float:left;  margin-left:10px;"  />
					<img src="images/message.png" style="float:left; margin-top:2px;  margin-left:10px;" />
				</div>	
				
				<div id="searchbar">
					<table >
						<tr>
							<td style="border:1px solid #000000;">
							<input type="text" name="" style="width:200px; height:24px; float:left;" />
							
							<select style="float:left;padding:5px; height:30px;">
									<option name="">Everywhere</option>
							</select>
								
								<input type="submit" name="submit" value="" style="background:url(images/search.png); width:30px; height:30px; border:none; float:left;" />                            </td>
							
						</tr>
					</table>
				</div>
				
				<div id="selectbar">
					<select style="float:left;padding:5px; height:27px; background:#efefef; border:none; border-radius:2px; -moz-border-radius:2px;">
									<option name="">Quick Acce</option>
					</select>
				</div>
				
				<div id="topmenubar">
					<div class="topmenu">
						D Demo
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						My Preferences
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						<img src="images/logout.png" style="float:left; margin-right:5px;" />Logout
					</div>
					<div class="separator">
						<img src="images/separator.png" />
					</div>
					<div class="topmenu">
						View My Shop
					</div>
				</div>
			</div>
		</div>
		
		<?php include_once("../menubar.php");?>
                <div id="container">

			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
                            <div style="float:left; padding-left:1%;"><h3>Customers</h3>
                            </div>
			</div>

			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="3" cellspacing="0" style="width:80%;">
					<tr>
						
						<th>Product Name</th>
						<th>Quantity</th>
                        <th>Total Price</th>
                        
					
						
                            		</tr>
<tbody id="details">
                                        <?php
                                        
                                            
                                       
                                        $qry_ord=mysql_query("select t.`quantity` as quantity , t.`tot_price` as totprc, p.`product_name` as pname from `temp_billinfo` t, `product` p where t.`product_id`=p.`id` and t.`bill_id`='$id' and `cart_status`=1")or die (mysql_error());
                                       
                                      while($res_ord=mysql_fetch_array($qry_ord))
                                            
                                            {
                                          
                                            
                                        ?>

                                        <tr>
                                            
                                            <td>
                                                <?php echo $res_ord['pname'];?>
                                            </td>
                                            <td>
                                                <?php echo $res_ord['quantity'];?>
                                            </td>
                                            <td>
                                                <?php echo $res_ord['totprc'];?>
                                            </td>
                                            
                                            
                                            </tr>
                                            
                                        <?php
                                            }
                                            
                                        ?>
</tbody>

                                </table>
			</div>
		  </div>
		</div>
		
		<div id="footer">
			Map Cart Admin Panel<br/>
			<span style="color:#666666;">Load Time:0.081s</span>
		</div>

</body>
</html>

