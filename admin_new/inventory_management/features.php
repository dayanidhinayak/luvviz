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
	 border-top:1px solid #CCCCCC;
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
document.getElementById('ajaxvalue').innerHTML=result;
document.getElementById('idval').value="";
document.getElementById('nameval').value="";

	}
}
xmlhttp.open("GET","variant_ajax.php?idval="+idval+"&nameval="+nameval,true);

xmlhttp.send();

}

</script>
<script type='text/javascript' src='../jquery-1.7.2.min.js'></script>

<script type="text/javascript">
$('.view').parent().parent().next().hide();
$(function(){
               $('.view').click(function(){
  				var netr=$(this).parent().parent().next();
				if(netr.is(':hidden') )
				{
           		netr.show();
				}
				else
				{
				netr.hide();
				}
			
  });
});

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
</head>

<body>
		
		<?php
		include_once("topbar.php");
		include_once("../menubar.php");
		?>
		
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3>Catalog <img src="images/separator1.png" /> Features</h3></div>
		
		
			<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="add_feature.php"><img src="images/addnew.png" /></a><br/>Add new Attributes </div>
			</div>
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="button" name="button" value="Filter" id="filter" onclick="return getajax();" /> 
			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			<div class="box1" style="width:100%; margin-left:0px;">
			<form name="form" id="form" method="post" action="delete_features.php">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						<th><input type="checkbox"  /></th>
						<th>ID</th>
						
						<th>Name</th>
						<th >Values </th>
						<th style="text-align:center;">Position</th>
						
						<th>Action</th>
					</tr>
					<tr>
						<td>-</td>
						<td><input type="text" name="" style="width:50px; border:1px solid #efefef;" id="idval" /></td>
						
						<td><input type="text" name="" style="width:600px; border:1px solid #efefef;" id="nameval" /></td>
						
						<td >-</td>
						<td align="center"><input type="text" name="" style="width:60px; border:1px solid #efefef;" /></td>
						
						<td>-</td>
					</tr>
					<tbody id="ajaxvalue">
					<?php 
					$q=mysql_query("select * from `varient_table`");
					while($r=mysql_fetch_array($q))
					{
					?>
					<tr id="cccc">
						<td><input type="checkbox" name="varient[]" value="<?php echo $r['id'];?>"  /></td>
						<td><?php echo $r['id'];?></td>
						
						<td><?php echo $r['varient_name'];?></td>
						<?php 
						$q1=mysql_query("select count(`product_id`) as `count` from `product_varient` where `varient_name`='$r[varient_name]'");
						$r1=mysql_fetch_array($q1);
						?>
						<td><?php echo $r1['count'];?></td>
						
						
						<td align="center"><img src="../images/down.gif" /></td>
						<td><a href="edit.php?ids=<?php echo $r['id']; ?>"><img src="../images/edit.gif" /></a>
						<a href="feature_delete.php?id1=<?php echo $r['id'];?>"><img src="../images/delete.gif" /></a>
						<img src="../images/more.png" class="view"/></td>
					</tr>
					<tr style="display:none;" class="products"><td colspan="6"><div class="box1" style="width:100%; margin-left:0px;">
					<form name="form1" id="form1" method="post" action="delete_product1.php">
					<table style="width:100%;">
					<tr>
						<th style="width:10%;"><input type="checkbox"  /></th>
						<th style="width:10%;">ID</th>
						
						<th style="width:60%;">Value</th>
						
						
						<th style="width:20%;">Actions</th>
					</tr>
					<?php
					$q2=mysql_query("select distinct(`product_id`) from `product_varient` where `varient_name`='$r[varient_name]'");
					while($r2=mysql_fetch_array($q2))
					{
					$q3=mysql_query("select `product_name` from `product` where `id`='$r2[product_id]'");
					$r3=mysql_fetch_array($q3);
					
					 ?>
					<tr>
					<td><input type="checkbox"  name="product[]" value="<?php echo $r2['product_id'];?>" /></td>
					<td><?php echo $r2['product_id'];?></td>
					<td><?php echo $r3['product_name'];?></td>
					<td><img src="../images/edit.gif" /><img src="../images/delete.gif" /></td>

					</tr>
					
					<?php } ?>
					<tr><td><input type="submit" name="submit" value="Delete Selected" onclick="return confirmation_selected();"/></td></tr>
					</table>
					</form>
					</div>
					</td></tr>
					<?php } ?>
						
							
					</tbody>	
					
				<tr><td><input type="submit" name="submit" value="Delete Selected" onclick="return confirmation_selected();"/></td></tr>	
				</table>
			</div>
		  </div>
		</div>
		
		<?php
		include_once("../footer.php");
		?>

</body>
</html>
