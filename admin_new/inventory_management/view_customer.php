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


<script src="jquery-1.9.1.min.js">
 
 </script>
<script>
function sortname()
{


$.ajax({
  url: "viewcustomer2.php"

}).done(function(val) {
 $('#details').html(val);
});
}
</script>
<script>
function sortdate()
{


$.ajax({
  url: "viewcustomer3.php"

}).done(function(val) {
 $('#details').html(val);
});
}
</script>
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
<td><input type="button" name="sortbyname" value="sortbyname" onclick="sortname();"></td>
<td><input type="button" name="sortbydate" value="sortbydate" onclick="sortdate();"></td>
			
			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="10" cellspacing="0" style="width:auto; float:left;">
					<tr>
						<th>Anonymous User</th>
					</tr>
					
<!--<tbody id="details">-->
                                        <?php
                                        $q=mysql_query("select * from order_details where user_id NOT IN(select email from user_details)");
                                        while($rord=mysql_fetch_array($q))
                                        {
										
                                        ?>

                                       <tr>
									   <td>
									   <a href="customer_detail1.php?id=<?php echo $rord[id];?>" style="text-decoration:none; color:#333;">
									   <?php echo $rord['user_id'];?>
									   </a>
									   </td>
									   </tr>
                                        <?php
                                          
                                        }
										
                                        ?>
<!--</tbody>-->

                                </table>
								<table cellpadding="10" cellspacing="0" style="width:900px;">
								<tr>
						
						<th>Name</th>
						<th>Emailid</th>
						<th>ContactNo.</th>
						<th>State</th>
						<th>City</th>
                        <th>Address</th>
						<th style="text-align:center;">Joining Date</th>
					</tr>
					<?php
					 $quser=mysql_query("select * from user_details");
                                        while($r=mysql_fetch_array($quser))
                                        {
										
                                            $name=$r['first_name'].$r['last_name'];
                                            if($name!=='')
                                           {
					?>
					
					
					 <tr>
                                            <td>
                                                <?php echo $name;?>
                                            </td>
                                            <td>
                                               <a href="customer_detail.php?email=<?php echo $r[email];?>" style="text-decoration:none; color:#333;"> <?php echo $r['email'];?></a>
                                            </td>
                                            <td>
                                                <?php echo $r['contact'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['state'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['city'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['address'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['joining_time'];?>
                                            </td>
                                        </tr>
										<?php
										}
										}
										?>
								</table>
			</div>
		  </div>
		</div>
		
		<?php
		include_once("../footer.php");
		?>

</body>
</html>

