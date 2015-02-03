<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$id=$_GET['id'];
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
	 text-shadow: 0 1px 0 #FFFFFF;
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
			target:"frm",
			dateFormat:"%Y-%m-%d",
			cellColorScheme:"beige"

});

		new JsDatePick({
			useMode:2,
			target:"to",
			dateFormat:"%Y-%m-%d"

});
	};

</script>

<!--<script>

function product_name(id)
{

 //alert(id);
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
var result=xmlhttp.responseText;

document.getElementById("pname").value=result;
//alert('---'+result+'---');

	}
}
xmlhttp.open("GET","search_product_name.php?id="+id,true);

xmlhttp.send();



}
</script>
<script>

function product_id(id)
{

 //alert(id);
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function()
  {

  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
var result=xmlhttp.responseText;
//alert('---'+result+'---');
document.getElementById("pid").value=result;


	}
}
xmlhttp.open("GET","search_product_id.php?id="+id,true);

xmlhttp.send();



}
</script>

<script>

function namess(idd)
{

 var res=document.getElementById('result');
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

res.innerHTML=result;
//alert('---'+result+'---');

	}
}
xmlhttp.open("GET","search_name.php?id="+idd,true);

xmlhttp.send();



}

function set_value(pname)

{
alert(pname);
document.getElementById('pname').value=pname;

}
</script>-->

</head>

<body>
		<div id="topbar">
			<div id="topbar_content">
				<div id="logo">
				</div>
				<div id="logoicon">
					<img src="../images/order.png" style="float:left; margin-top:2px; margin-left:10px;" />
					<img src="../images/customer.png" style="float:left;  margin-left:10px;"  />
					<img src="../images/message.png" style="float:left; margin-top:2px;  margin-left:10px;" />
				</div>	
				
				<div id="searchbar">
					<table >
						<tr>
							<td style="border:1px solid #000000;">
							<input type="text" name="" style="width:200px; height:24px; float:left;" />
							
							<select style="float:left;padding:5px; height:30px;">
									<option name="">Everywhere</option>
							</select>
								
								<input type="submit" name="submit" value="" style="background:url(../images/search.png); width:30px; height:30px; border:none; float:left;" />                            </td>
							
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
						<img src="../images/separator.png" />
					</div>
					<div class="topmenu">
						My Preferences
					</div>
					<div class="separator">
						<img src="../images/separator.png" />
					</div>
					<div class="topmenu">
						<img src="../images/logout.png" style="float:left; margin-right:5px;" />Logout
					</div>
					<div class="separator">
						<img src="../images/separator.png" />
					</div>
					<div class="topmenu">
						View My Shop
					</div>
				</div>
			</div>
		</div>
		
		<?php 
		include_once($path.'/menubar.php');?>
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3>Payment <img src="../images/separator1.png" /> Cart Rules</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="#"><img src="../images/addnew.png" /></a><br/>Add New</div>
			
			</div>
			
			
			<div class="box1" style="width:100%; margin-left:0px;">
                     
					 
					 
					 
     
	 
	      <form name="form" action="update_promo_offer.php" method="post">
<table>
<?php 
$q=mysql_query("select * from `promo_product` where `id`='$id'");
$r=mysql_fetch_array($q);

?>
<tr>
     <td>Coupon Code</td>
	 <td><?php echo $r['promo_code'];?></td>
</tr>
<tr>
     <td>Discount</td>
	 <td><?php echo $r['discount'];?>%</td>
</tr>

<tr>
     <td>From</td>
	 <td><input type="text" name="frm" id="frm" readonly="" value="<?php echo $r['from_date'];?>"/></td>
	 <td>To</td>
	 <td><input type="text" name="to" id="to" readonly="" value="<?php echo $r['to_date'];?>"/></td>
</tr>
<tr>
     <input type="hidden" name="uid" value="<?php echo $id;?>" >
     <td colspan="2"><input type="submit" name="submit" value="Update" /></td>
</tr>
</table>
</form>
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
					 
		  </div>
			
		  </div>
		
		
		<div id="footer">
			Map Cart Admin Panel<br/>
			<span style="color:#666666;">Load Time:0.081s</span>
		</div>

</body>
</html>
