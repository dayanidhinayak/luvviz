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
<script type="text/javascript">
function getajax()
{

var idval=document.getElementById('idval').value;
//alert(idval);
var nameval=document.getElementById('nameval').value;

var totval=document.getElementById('totval').value;

var paymentval=document.getElementById('paymentval').value;

var statusval=document.getElementById('statusval').value;

var fromval=document.getElementById('fromval').value;

var toval=document.getElementById('toval').value;



if (window.XMLHttpRequest)

  {
  xmlhttp=new XMLHttpRequest();
  }
else
 {
 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
xmlhttp.onreadystatechange=function()
 {
 if (xmlhttp.readyState==4 && xmlhttp.status==200)
 {
var result=xmlhttp.responseText;
//alert(result);
document.getElementById('ajaxvalue').innerHTML=result;
document.getElementById('idval').value="";
document.getElementById('nameval').value="";
document.getElementById('totval').value="";
document.getElementById('paymentval').value="";
document.getElementById('statusval').value="";
document.getElementById('fromval').value="";
document.getElementById('toval').value="";
	}
}
xmlhttp.open("GET","find_order.php?idval="+idval+"&nameval="+nameval+"&totval="+totval+"&paymentval="+paymentval+"&statusval="+statusval+"&fromval="+fromval+"&toval="+toval,true);

xmlhttp.send();

}

</script>
<link rel="stylesheet" type="text/css" media="all" href="../salemanagement/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="../salemanagement/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"fromval",
			dateFormat:"%Y-%m-%d",
			cellColorScheme:"beige"

});

		new JsDatePick({
			useMode:2,
			target:"toval",
			dateFormat:"%Y-%m-%d"

});
	};

</script>
<script src="jquery.min.js"></script>
<script type="text/javascript">
	function pending(id) {
		$.ajax({url:"pendingclear.php?id="+id,
		       success:function(results){
			$('#deliver').val(results);
			window.location.reload(true);
		       }
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
		<div style="float:left; padding-left:1%;"><h3>Pending Orders</h3>
		</div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center; cursor: pointer;"><img src="images/addnew.png" /><br/>Add New</div>
			
			</div>
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			
			</div>
			
			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						
						<th>ID</th>
						<!--<th>Reference</th>-->
						<th>New</th>
						<th>Customer</th>
						<th>Total</th>
						<th>Payment</th>
						<th>Status</th>
						<th style="text-align:center;">Date</th>
						<th style="display: none;">PDF</th>
						
						<th>Actions</th>
					</tr>
					
					<tbody id="ajaxvalue">
					<?php 
					//echo "select `slno`,`id`,`billing_name`,`billing_phn`,`pay_type`,`status`,`order_ondate` from `order_details`";
					$q=mysql_query("select `slno`,`id`,`billing_name`,`billing_phn`,`pay_type`,`status`,`order_ondate` from `order_details` where `status`='0' order by `order_ondate` desc") or die(mysql_error());
while($r=mysql_fetch_array($q))
{
					
					?>
					<tr style="border-top:1px solid #CCCCCC;">
						
						<td><?php echo $r['id'];?></td>
						<!--<td>State Bank Of India</td>-->
						<td><a href="orderdetails.php?id=<?php echo $r['id'];?>"><img src="../images/note.png" /></a></td>
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
						
						<td><?php echo $tot;?></td>
						
						<td><?php echo $r['pay_type'];?></td>
						
						<td>
							<input type="button" name="submit" id="deliver" value="Pending" onclick="return pending(<?php echo $r['id'];?>);" style="cursor:pointer;background:#006633; color:#FFFFFF; border-radius:3px; -moz-border-radius:3px; border:none;" /></td>
						
						<td><?php echo $r['order_ondate'];?></td>
						<td style="display: none;">
						<img src="../images/tab-invoice.gif" /><br/>
						<img src="../images/delivery.gif" />
						</td>
						<td><a href="orderdetails.php?id=<?php echo $r['slno'];?>"><img src="../images/details.gif" /></a></td></tr>
						<?php } ?>
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
