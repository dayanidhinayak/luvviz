<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$q_curency=mysql_query("select * from `currency`");
$rc=mysql_fetch_array($q_curency);
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
<script type="text/javascript">

function confirmation() {
	var answer = confirm("Delete Selected Item?");
	if (answer){
		return true;
	}
	else{
		return false;
	}
}

</script>

<script type="text/javascript">

function confirmation_selected() {
	var answer = confirm("Delete Selected Items?");
	if (answer){
		return true;
	}
	else{
		return false;
	}
}

</script>
<script>
function enable(id,status)
{
var x="ena"+id;
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
document.getElementById(x).innerHTML=result;

	}
}
xmlhttp.open("GET","enable_ajax1.php?q="+id+"&status="+status,true);

xmlhttp.send();


}
</script>

<script type="text/javascript">
function getajax()
{

var idval=document.getElementById('idval').value;

var codeval=document.getElementById('codeval').value;

var priorityval=document.getElementById('priorityval').value;

var from=document.getElementById('from').value;

var to=document.getElementById('to').value;

var status=document.getElementById('status').value;




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
document.getElementById('codeval').value="";
document.getElementById('priorityval').value="";
document.getElementById('from').value="";
document.getElementById('to').value="";
document.getElementById('status').value="";

	}
}
//alert("find_category1.php?idval="+idval+"&codeval="+codeval+"&priorityval="+priorityval+"&from="+from+"&to="+to+"&status="+status);
xmlhttp.open("GET","find_category1.php?idval="+idval+"&codeval="+codeval+"&priorityval="+priorityval+"&from="+from+"&to="+to+"&status="+status,true);

xmlhttp.send();

}


</script>
<script>
function display(val)
{

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
document.getElementById('ajaxvalue').innerHTML=result;
}
}
xmlhttp.open("GET","display_ajax1.php?q="+val,true);

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
		<div style="float:left;"><h3>Payment <img src="../images/separator1.png" /> Cart Rules</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="addcart.php"><img src="../images/addnew.png" /></a><br/>Add New</div>
			
			</div>
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="submit" name="submit" value="Filter" id="filter" onclick="return getajax()" />
		<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			
			<div class="box1" style="width:100%; margin-left:0px;">
			<form name="form1" id="form1" method="post" action="selected_delete1.php">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						<th><input type="checkbox"  /></th>
						<th>ID</th>
						<th>Photo</th>
						<th>CODE</th>
						<th>Product Name</th>
						<th>Priority</th>
						<th>FROM</th>
						<th>TO</th>
						<th>STATUS</th>
						<th>Action</th>
						
					</tr>
                   

                    
                    <tr>
						<td>-</td>
						
						<td><input type="text" name="" style="width:50px; border:1px solid #efefef;" id="idval" /></td>
						<td>-</td>
						<td><input type="text" name="" style="width:200px; border:1px solid #efefef;" id="codeval" /></td>
						<td>-</td>
						<td><input type="text" name="" style="width:100px; border:1px solid #efefef;"  id="priorityval"/></td>
						<td><input type="text" name="" style="width:150px; border:1px solid #efefef;"  id="from"/></td>
						<td><input type="text" name="" style="width:100px; border:1px solid #efefef;"  id="to"/></td>
						
						
						
						<td id="status">
						<select onchange="return display(this.value) ;">
							<option value="" ></option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select></td>
						<td>-</td>
					
                    </tr>
                    	<tbody id="ajaxvalue">
			
                    <?php
$query3=mysql_query("select * from `promo_product`");
while($row3 = mysql_fetch_array($query3))
{

$q1=mysql_query("select `product_name`,`image` from `product` where `id`='$row3[product_id]'");
$r1=mysql_fetch_array($q1);

 ?>
					<tr>
						<td><input type="checkbox" name="promo[]" value="<?php echo $row3['id'];?>" /></td>
						<td><?php echo $row3['id'];?></td>
						<td><img src="<?php echo $r1['image'];?>" style="width:30px; height:30px;" /></td>
						<td><?php echo $row3['promo_code']?></td>
						<td><?php echo $r1['product_name']?></td>
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
                        
                        <td><a href="cart.php?id=<?php echo $row3['id'];?>"><img src="../images/edit.gif" /></a>&nbsp;
						
						<a href="delete_promo.php?id=<?php echo $row3['id'];?>" onclick="return confirmation()">
							<img src="../images/delete.gif"    />
						</a>
						
						</td>
                        
						
						
						</tr>
						<?php
						
						}
						?>
						</tbody>
                    
                    
                    
                        </table>
					
				
			</div>
			<div style="margin-top:10px;">
			<input type="submit" name="submit" value="Delete Selected" onclick="return confirmation_selected();" />
			</form>
			</div>	 
		 
					 
					 
		  </div>
			
		  </div>
		
		
		<?php
		include_once("../footer.php");
		?>

</body>
</html>
