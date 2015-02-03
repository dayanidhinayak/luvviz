<?php 
include_once('../function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>::Map Cart ::</title>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../menu.css" media="screen" />
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
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

<script>

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
</script>
</head>

<body>
<div id="topbar100">
			<div id="topbar">
				<div style="padding:0px 10px; float:right; margin-right:10px; margin-top:5px;">
					
				</div>
			</div>
		</div>
		<div id="menubar100">
			<div id="menubar">
				<div class="menubar-left">
				
				</div>
		  </div>
		</div>
		
		<?php include_once("../menubar.php");?>
<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" style="">
			
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
								Add Promotional Offer For Products<br/>
				</div>

<div style="float:left">
<form name="form" action="insert_promo_offer.php" method="post">
<table>

<tr>
     <td>Discount</td>
	 <td><input type="text" name="discount"  />%</td>
</tr>

<tr>
     <td>Procuct Id</td>
	 <td><input type="text" name="pid" id="pid" onblur="return product_name(this.value)"/></td>
	 <td>Or&nbsp;</td>
	 <td>Procuct Name</td>
	 <td><input type="text" name="pname" id="pname" onkeyup="return namess(this.value);" onblur="return product_id(this.value);" /></td>
        
</tr>
<tr>

      <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
 <td>&nbsp;</td>
     <td id="result">

</td>
</tr>
<tr>
     <td>From</td>
	 <td><input type="text" name="frm" id="frm" readonly=""/></td>
	 <td>To</td>
	 <td><input type="text" name="to" id="to" readonly=""/></td>
</tr>
<tr>
     <td colspan="2"><input type="submit" name="submit" value="submit" /></td>
</tr>
</table>
</form>
</div>
<div style="float:left">
<table>
<th>Existing Promotional Offers</th>
<tr>
     <td>Code</td>
	 <td>created</td>
	<td>View/Edit</td>
	 <td>Disable</td>
</tr>
<?php 
$dt=date("Y-m-d H-i-s");
//echo "select * from `promo_offer` where `status`='0' and `to_date` <= '$dt'";
$q=mysql_query("select * from `promo_product` where `status`='0' and `to_date` >= '$dt'");
while($r=mysql_fetch_array($q))
{
$date = date("Y-m-d",strtotime($r['created']));
?>
<tr>
     <td><?php echo $r['promo_code'];?></td>
	 <td><?php echo $date;?></td>
	<td><a href="view_promo_offer.php?id=<?php echo $r['id'];?>">View/Edit</a></td>
	 <td><a href="disable_promo_offer.php?id=<?php echo $r['id'];?>">Disable</a></td>
</tr>
<?php } ?>
</table>
</div>
</div>
			</div>
		</div>
		
		<div id="footer100">
			<div id="footer" class="font1">
				<span style="float:left; margin-left:30px;">
					All Rights Reserved @ Map Cart
				</span>
				<span style="float:right; margin-right:30px;">
					
				</span>
			</div>
		</div>
</body>

</html>
