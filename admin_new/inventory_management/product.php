<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$q_curency=mysql_query("select * from `currency`");
$rc=mysql_fetch_array($q_curency);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Luvviz adminpanel</title>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Scolling Up and Down with jQuery" />
        <meta name="keywords" content="jquery, scoll, move, up, down" />
<link rel="stylesheet" type="text/css" href="css1/style.css" media="screen"/>

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

function confirmation(val) {
	var answer = confirm("Delete Selected Item? Name:"+val);
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
xmlhttp.open("GET","enable_ajax.php?q="+id+"&status="+status,true);

xmlhttp.send();


}
</script>
<script>
function disable(id,newarrival)
{
var x="dis"+id;
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
xmlhttp.open("GET","disable_ajax.php?q="+id+"&newarrival="+newarrival,true);

xmlhttp.send();


}
</script>

<script type="text/javascript">
function getajax()
{

var idval=document.getElementById('idval').value;

var nameval=document.getElementById('nameval').value;

var catval=document.getElementById('catval').value;

var baseprice=document.getElementById('baseprice').value;

var finalprice=document.getElementById('finalprice').value;

var quantity=document.getElementById('quantity').value;




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
document.getElementById('catval').value="";
document.getElementById('baseprice').value="";
document.getElementById('finalprice').value="";
document.getElementById('quantity').value="";
	}
}
xmlhttp.open("GET","find_ajax.php?idval="+idval+"&nameval="+nameval+"&catval="+catval+"&baseprice="+baseprice+"&finalprice="+finalprice+"&quantity="+quantity,true);

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
xmlhttp.open("GET","display_ajax.php?q="+val,true);

xmlhttp.send();

}
</script>

</head>

<body>
		<?php
		include_once("topbar.php");
		include_once('../menubar.php');?>
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3>Catalog <img src="../images/separator1.png" /> Products</h3></div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
        <a href="addnewproduct.php"><img src="../images/addnew.png" /></a><br/>Add New</div>
			
			</div>
			
			
			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">
			<input type="button" name="button" value="Search" id="filter" onclick="return getajax();" /> 
			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 
			
			</div>
			<?php 
if(isset($_GET['msg']))
{

$msg=$_GET['msg'];
}
else
{
$msg='';
}
?>
<table>
												<tr>
														<td style="font-size:24px;color:#990033;"><?php echo $msg;?></td>
														
													</tr>
													</table>		
			<div class="box1" style="width:100%; margin-left:0px;">
			<form name="form1" id="form1" method="post" action="selected_delete.php">
				<table cellpadding="10" cellspacing="0" style="width:100%;">
					<tr>
						<th><input type="checkbox"  /></th>
						<th>ID</th>
						<th>Photo</th>
						<th>Name</th>
						
						<th>Category</th>
						<th>Base Price</th>
						<th>Final Price</th>
						<th>Quantity</th>
						<th>Brand Name</th>
						<th>New Arrival</th>
						<th>Displayed</th>
						
						<th>Action</th>
						<th>Stock product</th>
						
					</tr>
					<tr>
						<td>-</td>
						<td><input type="text" name="" style="width:50px; border:1px solid #efefef;" id="idval" /></td>
						<td>-</td>
						<td><input type="text" name="" style="width:200px; border:1px solid #efefef;" id="nameval" /></td>
						
						<td><input type="text" name="" style="width:100px; border:1px solid #efefef;"  id="catval"/></td>
						<td><input type="text" name="" style="width:150px; border:1px solid #efefef;"  id="baseprice"/></td>
						<td><input type="text" name="" style="width:100px; border:1px solid #efefef;"  id="finalprice"/></td>
						<td><input type="text" name="" style="width:100px; border:1px solid #efefef;"  id="quantity"/></td>
<td>-</td>
						<td>-</td>
						
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
				$sum=0;
				$slno=1;
				
				$query=mysql_query("select p.*,sum(s.quantity) as totalquantity from `product` p LEFT JOIN `stock` s ON `p`.`id`=`s`.`product_id` group by `p`.`id` order by `p`.`id` ");
					while($res=mysql_fetch_array($query))
					{
					
					$cat_name='';
					$brandname='';
				$catid=$res['category_id'];
				$val=explode("|",$catid);
				foreach($val as $v)
				{
				//echo $v.'/t';
				if($v!='')
				{
				$query1=mysql_query("select * from `category` where `id`='$v' and `parent`=0");
				$res1=mysql_fetch_array($query1);
				$cat_name.=$res1['category_name'].',';
				$qq1=mysql_query("select `brand_name` from `brand` where `brand_name`='$res1[category_name]'");
				$rr1=mysql_fetch_array($qq1);
				$brandname=$brandname.",".$rr1['brand_name'];
				
				}
				}
				if($cat_name==',')
				{
				$cat_name="Not Categorised";
				}
				?>
					<tr>
						<td><input type="checkbox" name="product[]" value="<?php echo $res['id'];?>" /></td>
						<td><?php echo $res['id'];?></td>
						<td><img src="<?php echo $res['image'];?>" style="width:30px; height:30px;" /></td>
						<td><?php echo $res['product_name']?></td>
						<td><?php echo $cat_name;?></td>
						<td><?php echo $rc['symbol'];?>. <?php echo $res['selling_price']?>&nbsp;&nbsp;</td>
						<td><?php echo $rc['symbol'];?>. <?php echo $res['price']?>&nbsp;&nbsp;</td>
						<td><?php echo $res['totalquantity'];?></td>
						
						<td><?php echo $brandname;?></td>
<?php
						if($res['newarrival']==1)
						{
						
						?>
						<td id="dis<?php echo $res['id'];?>"><img src="../images/tick.png" onclick="return disable(<?php echo $res['id'];?>,<?php echo $res['newarrival']?>);" /></td>
						<?php
						}
						else
						{
						?>
						<td id="dis<?php echo $res['id'];?>"><img src="../images/disabled.gif" onclick="return disable(<?php echo $res['id'];?>,<?php echo $res['newarrival']?>);"/></td>
						<?php
						}
						?>


						<?php
						if($res['status']==1)
						{
						
						?>
						<td id="ena<?php echo $res['id'];?>"><img src="../images/tick.png" onclick="return enable(<?php echo $res['id'];?>,<?php echo $res['status']?>);" /></td>
						<?php
						}
						else
						{
						?>
						<td id="ena<?php echo $res['id'];?>"><img src="../images/disabled.gif" onclick="return enable(<?php echo $res['id'];?>,<?php echo $res['status']?>);"/></td>
						<?php
						}
						?>
						<td><a href="edit_product.php?id=<?php echo $res['id'];?>"><img src="../images/edit.gif" /></a>&nbsp;
						
						<a href="delete_product.php?id=<?php echo $res['id'];?>" onclick="return confirmation('<?php echo $res['product_name']?>')">
							<img src="../images/delete.gif"    />
						</a>
						
						<a href="add_image.php?id=<?php echo $res['id'];?>">Add Image</a>
						
						</td>
						<td>
						<a href="addstock.php?id=<?php echo $res['id'];?>">
						<input type="button" name="button" value="add" />
						</a>
						</td>
						
						</tr>
						<?php
						$slno++;
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
		<div style="margin-bottom:10px; width:100%; height:auto; float:left;">
		<?php
		include_once("../footer.php");
		?>
		</div>
	<div style="display:none; margin-top:50px;" class="nav_up" id="nav_up"></div>
		<div style="display:none; margin-top:50px;" class="nav_down" id="nav_down"></div>
		<script src="jquery-1.3.2.js" type="text/javascript"></script>
<script src="scroll-startstop.events.jquery.js" type="text/javascript"></script>
	<script>
			$(function() {
				var $elem = $('#container');
				
				$('#nav_up').fadeIn('slow');
				$('#nav_down').fadeIn('slow');  
				
				$(window).bind('scrollstart', function(){
					$('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
				});
				$(window).bind('scrollstop', function(){
					$('#nav_up,#nav_down').stop().animate({'opacity':'1'});
				});
				
				$('#nav_down').click(
					function (e) {
						$('html, body').animate({scrollTop: $elem.height()}, 800);
					}
				);
				$('#nav_up').click(
					function (e) {
						$('html, body').animate({scrollTop: '0px'}, 800);
					}
				);
            });
        </script>
</body>
</html>
