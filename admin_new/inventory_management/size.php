<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
$q_curency=mysql_query("select * from `currency`");
$rc=mysql_fetch_array($q_curency);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>mapkart adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="jquery.min.js" charset="utf-8"></script>

 <link rel="stylesheet" href="../styles.css">
<script src="jquery.min.js" type="text/javascript"></script>

<script language="javascript">
    row_no=0;
    function addRow(tbl,row){

 
    row_no++;
	
    var tick = String(row_no);
    if (row_no<20){
    //Declaring text boxes
   
  
	var textbox3='<input type="text"  style="margin-left:10px;" size="18" maxlength="30" id=sz'+tick+' name="sz'+tick+'">';
	var textbox='<input type="text"  style="margin-left:10px;" size="18" maxlength="30" id=qty'+tick+' name="qty'+tick+'">';
	
	var stop = '<input type="button" value="delete" onclick="deleteRow(this)" >';
	
	var tbl = document.getElementById(tbl);
	
    var rowIndex = document.getElementById(row).value;
	
    var newRow = tbl.insertRow(row_no);
    var newCell = newRow.insertCell(0);
    newCell.innerHTML = textbox3;
   
   
    var newCell1 = newRow.insertCell(1);
    newCell1.innerHTML = textbox;	

   
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

</head>
<body>
<form name="f" method="post" action="size_insert.php">
<table cellpadding="10" cellspacing="0"  style="width:100%;  margin-top:2%;  border:1px solid #CCCCCC; background:#FFFFFF;" id="TableMain">
				   		<tr>
							 <th>size<img src="../images/addnew.png" width="20" onClick="addRow('TableMain','row1')" /></th>
							<th>Quantity <!--<img src="../images/addnew.png" width="20"/>--></th>
							<th style="width:80%">Designation</th>
							
							
						</tr>
					<tr><td id="row1"></td></tr>

						<tr style=" text-align: left;">
						
							
							<td  >&nbsp; Belkin Leather Folio for iPod nano - Black / Chocolate</td> 
						
						</tr>
						<tr>
						<td><input type="submit" name="submit" value="submit" /> </td>
						</tr>
				   </table>
</form>
</body>
</html>
