<?php
include_once("../function.php");
$pid=$_GET['id'];
$query=mysql_query("select `product_name` from `product` where `id`='$pid'");
$res=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LUVVIZ</title>
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
.box{
    width: 150px;
    height: 190px;
    float: left;
    border-right:1px solid #cccccc;
    margin-left: 10px;
    margin-top: 10px;
}
.img{
    width: 100px;
    height: 100px;
    float:left;
    margin-top: 15px;
    border-radius: 8px;
box-shadow: 0 10px 10px -10px #000000;
-moz-box-shadow: 0 10px 10px -10px #000000;
-webkit-box-shadow: 0 10px 10px -10px #000000;
margin-left: 25px;
border: 5px solid #cccccc;
}
</style>
<script src="jquery.min.js" type="text/javascript"></script>

<script language="javascript">
    row_no=0;
    function addRow(tbl,row){
    //row count
    row_no++;
	
    var tick = String(row_no);
    if (row_no<20){
    //Declaring text boxes
   
   //alert(textbox);
	var textbox3='<input type="file"  style="margin-left:10px;" size="18" maxlength="30" id=img'+tick+' name="img'+tick+'">';
	//alert(textbox3);
	var stop = '<input type="button" value="delete" onclick="deleteRow(this)" >';
	//alert(stop);
	var tbl = document.getElementById(tbl);
	//alert(document.getElementById(tbl));
    var rowIndex = document.getElementById(row).value;
	//alert(rowIndex);
    var newRow = tbl.insertRow(row_no);
    var newCell = newRow.insertCell(0);
    newCell.innerHTML = textbox3;
   
	
    var newCell = newRow.insertCell(1);
	newCell.innerHTML = stop;
    }
    }
	
	function deleteRow(r)
    {
    var i=r.parentNode.parentNode.rowIndex;
    document.getElementById('TableMain').deleteRow(i);
	row_no--;
    }
	</script>



<!--<script>
function addrow(name,id)
{
//alert(name);
document.getElementById('result').innerHTML='';
document.getElementById('pname').value=name;
document.getElementById('pid').value=id;
var prod_id=document.getElementById('pid').value;
//alert(prod_id);
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
//alert(result);
document.getElementById('div_details').innerHTML=result;

	}

}	

	xmlhttp.open("GET","image_aj.php?q="+prod_id,true);

xmlhttp.send();
}
</script>
-->
<script>
    function deletimage(val) {
	$.ajax({url:"ajax_deleteimage.php?id="+val,
	       success:function(results)
	       {
		alert(results);
		$('#img_'+val).remove();
	       }
	    
	});
    }
</script>
</head>
<body>

		
		<?php
		include_once('topbar.php');
		include_once('../menubar.php');?>
		<div id="container" style=" margin-top:10px; background:#ffffff;">
			<div id="container_content" style="margin-top:30px; background:none; border:none;">
			
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
								Add Image<br/>
				</div>
<div style="width:407px;float:left; padding:7px;" id="div1" >


<form name="form1" action="insert_images.php" method="post" enctype="multipart/form-data">
 <table style="font:Georgia, 'Times New Roman', Times, serif; size:12px; color:#666666;" cellspacing="12" width="400px" id="TableMain" >
			<tr><td>Product Name</td>
			   
			</tr>
<tr><td><div><?php echo $res['product_name'];?></div>
<input type="hidden" name="pid" id="pid" value="<?php echo $pid?>"/>

</td>
</tr>
<tr><td><input type="button" name="button" value="add" class="productbox1" onClick="addRow('TableMain','row1')"/></td></tr>
						

<tr><td><div id="row1"></div></td></tr>
    
	<tr><td><input type="submit" name="submit" value="Insert" /></td></tr>


</table>
</form>
</div>
<div style="width: 100%; height: auto; float: left;">
<div style="width:350px;float:left; margin-left:20px; height:auto; padding:7px;" id="div_details"  >


</div>

<div style="width:800px;float:left; margin-left:20px; height:200px; padding:7px; margin-top: 10px; background: #ccc; overflow: auto;" >
    <?php
$qimage=mysql_query("select * from `product_images` where `product_id`='$pid'") or die(mysql_error());
while($rimage=mysql_fetch_array($qimage))
{
?>
<div class="box" id="img_<?php echo $rimage['slno']?>">
    <div class="img">
	<img src="<?php echo $rimage['image'];?>" style="width: 90px; height: auto;"/>
    </div>
    <div style="width: 150px; height: 40px; float: left; margin-top: 20px;">
	<input type="button" value="Delete" onclick="return deletimage(<?php echo $rimage['slno'];?>);" />
    </div>
</div>
<?php
}
?>
</div>
</div>
</div>
			</div>
		</div>
		<?php
		include_once('../footer.php');
		?>
</body>
</html>
