<?php 

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
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>
<script type="text/javascript">

function confirmation_selected() {
	var answer = confirm("Arte You Sure To Delete This Selected Item?");
	if (answer){
		return true;
	}
	else{
		return false;
	}
}

</script>

<script type="text/javascript">
function getajax()
{

var idval=document.getElementById('idval').value;

var nameval=document.getElementById('nameval').value;

var description=document.getElementById('description').value;

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
//zalert(result);
document.getElementById('ajaxvalue').innerHTML=result;
document.getElementById('idval').value="";
document.getElementById('nameval').value="";
document.getElementById('description').value="";

	}
}
xmlhttp.open("GET","find_empcat.php?idval="+idval+"&nameval="+nameval+"&description="+description,true);

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
xmlhttp.open("GET","display_ajaxmonitoring.php?q="+val,true);

xmlhttp.send();

}
</script>

<script>
function display_withattr(val)
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
document.getElementById('ajaxvalue_withattr').innerHTML=result;
}
}
xmlhttp.open("GET","display_ajaxattr.php?q="+val,true);

xmlhttp.send();

}
</script>

<script>
function display_withoutattr(val)
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
//alert(result);
document.getElementById('ajaxvalue_withoutattr').innerHTML=result;
}
}
xmlhttp.open("GET","display_ajaxwdoutattr.php?q="+val,true);

xmlhttp.send();

}
</script>


<script type="text/javascript">
function getajax_disable()
{

var idval=document.getElementById('idval').value;

var nameval=document.getElementById('nameval').value;

var description=document.getElementById('description').value;

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
document.getElementById('ajaxvalue_pdisable').innerHTML=result;
document.getElementById('idval').value="";
document.getElementById('nameval').value="";
document.getElementById('description').value="";

	}
}
xmlhttp.open("GET","find_disableproduct.php?idval="+idval+"&nameval="+nameval+"&description="+description,true);

xmlhttp.send();

}

</script>

<script type="text/javascript">
function getajax_wiothoutattr()
{

var idval=document.getElementById('idval').value;

var nameval=document.getElementById('nameval').value;

var description=document.getElementById('description').value;

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
document.getElementById('ajaxvalue_withoutattr').innerHTML=result;
document.getElementById('idval').value="";
document.getElementById('nameval').value="";
document.getElementById('description').value="";

	}
}
xmlhttp.open("GET","find_withoutattr.php?idval="+idval+"&nameval="+nameval+"&description="+description,true);

xmlhttp.send();

}

</script>


<script type="text/javascript">
function getajax_withattr()
{

var idval=document.getElementById('idval').value;

var nameval=document.getElementById('nameval').value;



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
document.getElementById('ajaxvalue_withattr').innerHTML=result;
document.getElementById('idval').value="";
document.getElementById('nameval').value="";


	}
}
xmlhttp.open("GET","find_withattr.php?idval="+idval+"&nameval="+nameval+"&description="+description,true);

xmlhttp.send();

}

</script>


</head>

<body>
		
		
		<?php
		include_once("topbar.php");
		include_once("../menubar.php");?>
		
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3>Catalog <img src="images/separator1.png" /> Monitoring</h3></div>
		
			
			</div>
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:20px;">
				List of empty categories:
			</div>
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="button" name="button" value="Filter" id="filter" onclick="return getajax();" /> 
			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			
			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						
						<th>ID</th>
						
						<th>Name</th>
						<th>Description</th>
						
						<th>Status</th>
						<th>Action</th>
					</tr>
					<tr>
						<td><input type="text" name="" style="width:70px; border:1px solid #efefef;" id="idval" /></td>
						<td><input type="text" name="" style="width:400px; border:1px solid #efefef;" id="nameval" /></td>
						<td><input type="text" name="" style="width:400px; border:1px solid #efefef;" id="description" /></td>
						
					
						<td>
						<select onchange="return display(this.value);">
							<option value="" ></option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select></td>
						<td>-</td>
					</tr>
					<tbody id="ajaxvalue">
					
					
	<?php
	$slno=1;
	$val="";
	$query=mysql_query("select distinct(`category_id`) from `product` where `status`='1'");
	$rr=mysql_fetch_array($query);
	$cid1=str_replace("|","",$rr['category_id']);
	$val.=$cid1;
	while($res=mysql_fetch_array($query))
	{
		$cid=str_replace("|","",$res['category_id']);
		$val.=$cid1."and `id`!='$cid'";
		//echo $val;
		
	}
		//echo "select * from `category` where `id`!='$cid'";
		$q1=mysql_query("select * from `category` where `id`!=$val and `parent`!=0");
		while($r1=mysql_fetch_array($q1))
		{
	
	
	
	
	?>
	<tr>
			<td><?php echo $slno?></td>
			<td><?php echo $r1['category_name'];?></td>
			<td>&nbsp;</td>
			<?php
			if($r1['status']==1)
			{
			
			?>
			<td><img src="../images/tick.png" /></td>
			<?php
			}
			else
			{
			?>
			<td><img src="../images/disabled.gif" /></td>
			<?php
			}
			?>
			<td><img src="../images/edit.gif" />&nbsp;
					<a href="delete_cat.php?id=<?php echo $r1['id'];?>" onclick="return confirmation_selected();"> <img src="../images/delete.gif"    /></a>
			</td>
	</tr>
	
	<?php
	$slno++;
	}
	
	
	?>
		</tbody>			
				</table>
			</div>
			
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:20px;">
				List of products with attributes and without available quantities for sale:
			</div>
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="button" name="button" value="Filter" id="filter" onclick="return getajax_withattr();" /> 
			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			
			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						
						<th>ID</th>
						
						<th>Product Name (Variant Name)</th>
						
						
						<th>Status</th>
						<th>Actions</th>
					</tr>
					<tr>
						<td><input type="text" name="" style="width:70px; border:1px solid #efefef;" id="idval" /></td>
						
						<td><input type="text" name="" style="width:700px; border:1px solid #efefef;" id="nameval" /></td>
						
					
						<td>
						<select onchange="return display_withattr(this.value);">
							<option value="" ></option>
							<option value="1">Yes</option>
							<option value="0">No</option>
						</select></td>
						<td>-</td>
					</tr>
					<tbody id="ajaxvalue_withattr">
					<?php
					$slno=1;
					$q11=mysql_query("SELECT p.* ,pv.`varient_name`
FROM  `product` p,  `product_varient` pv
WHERE p.`id` = pv.`product_id` 
AND p.`id` NOT 
IN (SELECT  `product_id` 
FROM  `stock` 
WHERE  `quantity` >0
)");
while($r11=mysql_fetch_array($q11))
{

?>

			
					
				<tr><td><?php echo $slno?></td>
				<td><?php echo $r11['product_name']?>&nbsp; &nbsp; <span style="font-weight: bold;"> (<?php echo $r11['varient_name'];?>)</span></td>
				<?php
			if($r11['status']==1)
			{
			?>
			
				<td><img src="../images/tick.png" /></td>
				<?php
				}
				else
				{
				?>
				<td><img src="../images/disabled.gif" /></td>
				<?php
				}
				?>
				<td><a href="edit_monitoring.php?id=<?php echo $r11['id'];?>"><img src="../images/edit.gif" /></a>&nbsp;
					<a href="delete_attr.php?id=<?php echo $r11['id'];?>" onclick="return confirmation_selected();"> <img src="../images/delete.gif"    /></a></td>
				</tr>
				<?php
				
				$slno++;
				}
				?>
				</tbody>	
				</table>
			</div>
			
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:20px;">
				List of products without attributes and without available quantities for sale:
			</div>
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="button" name="button" value="Filter" id="filter" onclick="return getajax_wiothoutattr();" /> 
			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			
			
			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						
						<th>ID</th>
						
						<th>Name</th>
						<th>Description</th>
						
						<th>Status</th>
						<th>Action</th>
					</tr>
					<tr>
						<td><input type="text" name="" style="width:70px; border:1px solid #efefef;" id="idval"/></td>
						<td><input type="text" name="" style="width:200px; border:1px solid #efefef;" id="nameval"/></td>
						<td><input type="text" name="" style="width:700px; border:1px solid #efefef;" id="description"/></td>
						
					
						<td>
						<select onchange="return display_withoutattr(this.value);">
							<option value="" ></option>
							<option value="1" >Yes</option>
							<option value="0" >No</option>
						</select></td>
						<td>-</td>
					</tr>
					<tbody id="ajaxvalue_withoutattr">
					
			<?php
					$slno=1;
					$s="";
				$que1=mysql_query("select distinct `product_id` from `product_varient`");
				$res1=mysql_fetch_array($que1);
				$s.=$res1['product_id'];
				while($res=mysql_fetch_array($que1))
				{
				if($res['product_id']!=$res1['product_id'])
				{
				$s.=" AND `id` !=".$res['product_id'];
				}
				}
			
					$q111=mysql_query("SELECT * FROM  `product` WHERE `id` != $s 
AND `id` NOT 
IN (SELECT  `product_id` 
FROM  `stock` 
WHERE  `quantity` >0
)");
while($r111=mysql_fetch_array($q111))
{

?>		
			
					<tr style="border-top:1px solid #999999;">
						<td><?php echo $slno;?></td>
						<td><?php echo $r111['product_name']?></td>
						<td><?php echo $r111['description']?></td>
						<?php
			if($r111['status']==1)
			{
			?>
			
				<td><img src="../images/tick.png" /></td>
				<?php
				}
				else
				{
				?>
				<td><img src="../images/disabled.gif" /></td>
				<?php
				}
				?>
						<td><img src="../images/edit.gif" />&nbsp;
					<a href="delete_attr.php?id=<?php echo $r11['id'];?>" onclick="return confirmation_selected();"> <img src="../images/delete.gif"    /></a></td>
					</tr>
					<?php
					}
					
					?>
					
					</tbody>
				</table>
			</div>
			
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:20px;">
				List of disabled products:
			</div>
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="button" name="button" value="Filter" id="filter" onclick="return getajax_disable();" /> 
			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			
			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						
						<th>ID</th>
						
						<th>Name</th>
						<th>Description</th>
						
						
						<th>Action</th>
					</tr>
					<tr>
						<td><input type="text" name="" style="width:70px; border:1px solid #efefef;" id="idval" /></td>
						<td><input type="text" name="" style="width:200px; border:1px solid #efefef;" id="nameval" /></td>
						<td><input type="text" name="" style="width:700px; border:1px solid #efefef;" id="description"/></td>
						
					
						
						<td>-</td>
					</tr>
					<tbody id="ajaxvalue_pdisable">
					<?php
					$slno=1;
					$qwe=mysql_query("select * from `product` where `status`=0");
					$con=mysql_num_rows($qwe);
					if($con==0)
					{
					?>
					<tr style="border-top:1px solid #999999;">
						<td align="center" colspan="5">No items found</td>
					</tr>
					<?php
					}
					else
					{
					while($rwe=mysql_fetch_array($qwe))
					{
					?>
					<tr>
					<td><?php echo $slno?></td>
					<td><?php echo $rwe['product_name']?></td>
					<td><?php echo $rwe['description']?></td>
					<td><img src="../images/edit.gif" />&nbsp;
					<a href="delete_product.php?id=<?php echo $rwe['id'];?>" onclick="return confirmation_selected();"> <img src="../images/delete.gif"    /></a></td></tr>
					
					<?php
					$slno++;
					}
					
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
