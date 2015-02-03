<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');

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
	 border-top:1px solid #CCCCCC;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>
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

<script type="text/javascript">
function getajax()
{
var slnoval=document.getElementById('slnoval').value;

var idval=document.getElementById('idval').value;

var nameval=document.getElementById('nameval').value;

var fromval=document.getElementById('fromval').value;

var toval=document.getElementById('toval').value;
//var statusval=document.getElementById('statusval').value;


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

document.getElementById('slnoval').value="";
document.getElementById('idval').value="";
//document.getElementById('statusval').value="";
document.getElementById('nameval').value="";
document.getElementById('fromval').value="";
document.getElementById('toval').value="";
	}
}
xmlhttp.open("GET","find_cart.php?slnoval="+slnoval+"&idval="+idval+"&nameval="+nameval+"&fromval="+fromval+"&toval="+toval,true);

xmlhttp.send();

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
		<div style="float:left;"><h3>Customers <img src="images/separator1.png" />Shopping Carts </h3></div>
		
		
			</div>
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="button" name="button" value="Filter" id="filter" onclick="return getajax();" /> 
			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			
			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						
						<th>ID</th>
						
						<th>Order ID </th>
						<th>Customer </th>
						<th style="text-align:center;">Total </th>
						<th style="text-align:center;">Carrier </th>
						<th style="text-align:center;">Date  </th>
						<th style="text-align:center;">Online  </th>
						<th style="text-align:center;">Actions </th>
						
						
					</tr>
					<tr>
						<td><input type="text" name="slnoval" id="slnoval" style="width:60px; border:1px solid #efefef;" /></td>
						<td><input type="text" name="idval" id="idval" style="width:60px; border:1px solid #efefef;" /></td>
						
						<td><input type="text" name="nameval" id="nameval" style="width:350px; border:1px solid #efefef;" /></td>
						
						<td >--</td>
						<td align="center"><input type="text" name="" style="width:60px; border:1px solid #efefef;" /></td>
						
						<td>From <input type="text" name="fromval" id="fromval" style="width:60px; border:1px solid #efefef;" /><br  />
						     &nbsp;&nbsp;&nbsp;&nbsp;To <input type="text" name="toval" id="toval" style="width:60px; border:1px solid #efefef;" />   </td>
							 <td> <select>
							 <option value="">
							 YES
							 </option>
							 <option value="">
							NO
							 </option>
							 </select> </td>
							 <td >--</td>
					</tr>
					<tbody id="ajaxvalue">
					<?php 
					//echo "select `slno`,`id`,`billing_name`,`billing_phn`,`pay_type`,`status`,`order_ondate` from `order_details`";
					$q=mysql_query("select `slno`,`id`,`billing_name`,`billing_phn`,`pay_type`,`status`,`order_ondate` from `order_details`") or die(mysql_error());
while($r=mysql_fetch_array($q))
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
						<td><a href="orderdetails.php?id=<?php echo $r['slno'];?>"><img src="images/details.gif" /></a><img src="images/delete.gif"/></td>
						
					</tr>
					<?php } ?></tbody>
				</table>
			</div>
		  </div>
		</div>
		
		<?php
		include_once("../footer.php");
		?>

</body>
</html>
