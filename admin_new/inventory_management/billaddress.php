<?php
ini_set("display_errors",1);
include_once("../function.php");
$id=$_GET['id'];
 $q=mysql_query("select * from `order_details` where `id`='$id'");
$r=mysql_fetch_array($q);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
	 
	 	}
		tr th{
		background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
    color: #333333;
    font-size: 14px;
	font-family:Arial, Helvetica, sans-serif;
 
    line-height: 29px;
    margin: 0;
    padding: 0 0 0 10px;
	text-align:left;
    text-shadow: 0 1px 0 #FFFFFF;
		}

</style>
<script type="text/javascript" src="jquery.min.js" charset="utf-8"></script>    
</head>
<body>
    <?php
		include_once('topbar.php');
		include_once("../menubar.php");
                
               
    ?>
                
                <div class="orderbox" style="margin-top:10%;">
					<div class="orderheading">
						<img src="images/shipping.gif" style="float:left; margin-right:5px;" />
						Shipping Address
					</div>
					<div style="float:left; width:98%; padding:1%;">
					<table style="width:100%;">
						<tr>
                                                    <td>Name:</td>
                                                    <td><?php echo $r['shipping_name'];?></td>
                                                </tr>
                                                <tr>
                                                     <td>Address:</td>
                                                     <td><?php echo  $r['shipping_address'];?></td>
                                                </tr>
                                                <tr>
                                                     <td>City:</td>
                                                     <td><?php echo  $r['shipping_city'];?></td>
                                                </tr>
                                                 <tr>
                                                     <td>State:</td>
                                                     <td><?php echo  $r['shipping_state'];?></td>
                                                </tr>
                                                <tr>
                                                     <td>Pincode:</td>
                                                     <td><?php echo  $r['shipping_pin'];?></td>
                                                </tr>
                                                <tr>
                                                     <td>Country:</td>
                                                     <td><?php echo  $r['shipping_country'];?></td>
                                                </tr>
                                                 <tr>
                                                     <td>Contactno:</td>
                                                     <td><?php echo  $r['shipping_cont'];?></td>
                                                </tr>
                                                   
                                    
					
</tr>
</table>
                                        
                                        
</div>
				</div>
				
				
				</div>
                                
                                
                                 <div class="orderbox" style="margin-top:4%;">
					<div class="orderheading">
						<img src="images/shipping.gif" style="float:left; margin-right:5px;" />
						Luvviz Address
					</div>
					<div style="float:left; width:98%; padding:1%;">
					
                                         Luvviz,Plno-109,
                                        <br/>
                                     Bhimpur,BBSR-20
                                        
                                        </div>
				</div>
				
				
				</div>
                               
                
                
                <?php
		include_once("../footer.php");
		?>
</body>
</html>