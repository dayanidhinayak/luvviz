<?php
ini_set("display_errors",1);
include_once("../function.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Luvviz adminpanel</title>
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
		
		<?php
		include_once('topbar.php');
		include_once("../menubar.php");?>
                <div id="container">

			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
                            <div style="float:left; padding-left:1%;"><h3>Customers</h3>
                            </div>
			</div>

			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="3" cellspacing="0" style="width:100%;">
					<tr>
						
						<th>User Name</th>
						<th>Email</th>
                        <th>Order Date</th>
                        <th>Contact</th>
                        <th>Bill ID</th>
					
						
                            		</tr>
<tbody id="details">
                                        <?php
                                        
                                            
                                       
                                        $qry_his=mysql_query("select u.`first_name` as fname, u.`last_name` as lname, u.`email` as email, u.`contact` as contact, o.`id` as billid, o.`order_ondate` as order_date from `user_details` u, `order_details` o where u.`email`=o.`user_id` group by `email`")or die (mysql_error());
                                       
                                      while($res_his=mysql_fetch_array($qry_his))
                                            
                                            {
                                          
                                            
                                        ?>

                                        <tr>
                                            <td>
                                                <?php echo $res_his['fname']." ".$res_his['lname'];?>
                                            </td>
                                            <td>
                                                <?php echo $res_his['email'];?>
                                            </td>
                                            <td>
                                                <?php echo $res_his['order_date'];?>
                                            </td>
                                            <td>
                                                <?php echo $res_his['contact'];?>
                                            </td>
                                            <td>
                                               <a href="order_his.php?id=<?php echo $res_his['billid'];?>"> <?php echo $res_his['billid'];?></a>
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
		
		<?php
		include_once("../footer.php");
		?>

</body>
</html>

