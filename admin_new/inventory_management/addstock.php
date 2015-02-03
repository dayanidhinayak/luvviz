<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
$proid=$_GET['id'];
$q_stock=mysql_query("select * from `stock` where `product_id`='$proid'");
$rstock=mysql_fetch_array($q_stock);
$sze=$rstock['size'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>luviz adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="jquery.min.js" charset="utf-8"></script>

 <link rel="stylesheet" href="../styles.css">
 
<!--<script type="text/javascript">

var x=new Date().getTime();
alert(x);
document.getElementById('code').value=x;
</script>-->

<script language="javascript">

    row_no=0;
    function addRow(tbl,row){

 
    row_no++;
	
    var tick = String(row_no);
   
    if (row_no<20){
    //Declaring text boxes
   
  
	var textbox3='<input type="text"  style="margin-left:10px;" size="18" maxlength="30" id=sz'+tick+' name="sz'+tick+'">';
	var textbox='<input type="text"  style="margin-left:10px;" size="18" maxlength="30" id=qty'+tick+' name="qty'+tick+'">';
	var probox='<input type="text"  style="margin-left:10px;" size="18" maxlength="30" id=code'+tick+' name="code'+tick+'">';
	 
	var pricebox='<input type="text"  style="margin-left:10px;" size="18" maxlength="30" id=price'+tick+' name="price'+tick+'">';
	var stop = '<input type="button" value="delete" onclick="deleteRow(this)" >';
	
	var tbl = document.getElementById(tbl);
	
    var rowIndex = document.getElementById(row).value;
	
    var newRow = tbl.insertRow(row_no);
    var newCell = newRow.insertCell(0);
    newCell.innerHTML = textbox3;
   
   
    var newCell1 = newRow.insertCell(1);
    newCell1.innerHTML = textbox;	

     var newCell2 = newRow.insertCell(2);
    newCell2.innerHTML = probox;
    
    var newCell3 = newRow.insertCell(3);
    newCell3.innerHTML = pricebox;
   
    var newCell = newRow.insertCell(4);
	newCell.innerHTML = stop;
	var x=new Date().getTime();
	var y=x.toString();
	
	var z=y.substr(3,10);
	
	 document.getElementById('code'+tick).value=z;
    }
}
	
	function deleteRow(r)
    {
    var i=r.parentNode.parentNode.rowIndex;
    document.getElementById('TableMain').deleteRow(i);
	row_no--;
    }
	</script>
<style>
	.table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	.tr{
	height:35px;
	 text-shadow: 0 1px 0 #FFFFFF;
	 border-top:1px solid #CCCCCC;
	 	}
.th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>
</head>
<body>
   
    <?php
		include_once('topbar.php');
		include_once('../menubar.php');?>
    
    
    
 
	<form name="f" method="post" action="stock_insert.php">
	 <div class="box1" style="width:100%; height: auto; float:left; margin-top:20px;">
    <div style="width:95%; margin: auto; ">
    <table style="font-family:arial;" class="table">
	<tr >
	    <th class="th">size</th>
	    <th class="th">Quantity</th>
	</tr>
	<?php
	$stockdetail=mysql_query("select * from `stock` where `product_id`='$proid'");
while($resstockdetail=mysql_fetch_array($stockdetail)){
	?>
	<tr>
	    <td><?php echo $resstockdetail['size'];?></td>
	    <td><?php echo $resstockdetail['quantity'];?></td>
	</tr>
	<?php
}
	?>
    </table>
	</div>
	</div>
	 <div class="box1" style="width:100%; height: auto; float:left; margin-top:20px;">
    <div style="width:95%; margin: auto; ">
<table cellpadding="10" cellspacing="0"  style="width:100%;  margin-top:2%; font-family:arial;" id="TableMain">

			<input type="hidden" name="hidden_id" value="<?php echo $proid;?>"/>
				   		<tr>
							 <th>size<img src="../images/addnew.png" width="20" onClick="addRow('TableMain','row1')" /></th>
							<th>Quantity <!--<img src="../images/addnew.png" width="20"/>--></th>
							<th>productcode</th>
							<th>Price</th>
							
						</tr>
					<tr><td id="row1"></td></tr>

						<tr style=" text-align: left;">
						
						
						</tr>
						<tr>
						<td><input type="submit" name="submit" value="submit" /> </td>
						</tr>
						
				   </table>
				    </div>
    
  </div> 
</form>
    

		<?php
		include_once("../footer.php");
		?>

</body>
</html>
