<?php
include_once("../function.php");
//echo $_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<script language="javascript">
    row_no=0;
    function addRow(tbl,row){
    //row count
    row_no++;
    var tick = String(row_no);
    if (row_no<20){
    //Declaring text boxes
    var textbox ='<input type="text" style="margin-left:3px;" size="18" maxlength="30" id=com'+tick+' name="name'+tick+'">';
    var textbox2 = '<input type="text"  style="margin-left:10px;" size="18" maxlength="30" id=pos'+tick+' name="qty'+tick+'">';
	
	var stop = '<input type="button" value="delete" onclick="deleteRow(this)" >';
	var tbl = document.getElementById(tbl);
    var rowIndex = document.getElementById(row).value;
    var newRow = tbl.insertRow(row_no);
    var newCell = newRow.insertCell(0);
    newCell.innerHTML = textbox;
    var newCell = newRow.insertCell(1);
    newCell.innerHTML = textbox2;
	var newCell = newRow.insertCell(2);
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
<link rel="stylesheet" type="text/css" href="calendar.css" />

<script type="text/javascript" src="calendar_us.js">

</script>
</head>

<body>
<form name="form1" action="insert_po.php" method="post" enctype="multipart/form-data">

 <table style="font:Georgia, 'Times New Roman', Times, serif; size:12px; color:#666666;" cellspacing="12" width="400px" >
			<tr><td align="center" colspan="4"><strong>ADD PURCHASE ORDER</strong></td></tr>
			<tr>
			<th><center>Product Name</center></th>
    		<th><center>Quantity</center></th></tr>
      
	 
		  <div id="divv"></div>

<table>
 <table style="font:Georgia, 'Times New Roman', Times, serif; size:12px; color:#666666;" cellspacing="12" width="400px" id="TableMain">
			<tr id="row1"></tr>
<tr><td>Delivery date</td>
<td><input type="text" name="delivery" id="delivery" />
										<script language="JavaScript">
										     new tcal ({
									            'formname': 'form1',
												'controlname': 'delivery'
														});
										</script></td>
</tr>
			<tr><td><input type="button" name="Button" value="Add more" onClick="addRow('TableMain','row1')"></td>
		<td><input type="submit" name="submit" value="INSERT" /></td>

		</tr>
    </table>



</form>

</body>
</html>
