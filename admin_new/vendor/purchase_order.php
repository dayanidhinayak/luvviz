<?php
include_once("../function.php");
//echo $_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="menu1.css" />

<script type="text/javascript" src="cssverticalmenu.js">

/***********************************************

* CSS Vertical List Menu- by JavaScript Kit (www.javascriptkit.com)
* Menu interface credits: http://www.dynamicdrive.com/style/csslibrary/item/glossy-vertical-menu/ 
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more

***********************************************/

</script>
<link rel="stylesheet" type="text/css" href="calendar.css" />

<script type="text/javascript" src="calendar_us.js">

</script>
<script src="jquery.min.js" type="text/javascript"></script>
<script>

$(function(){
var inputs=0;
var add = 0;
		$("#div1 .productbox1").click(function () {
	
		
		
		var namea=$('#div1').find('#pname').val();
		
		var pro_id=$('#div1').find('#pid').val();
		var name=namea.replace(/ /g,'');
		
		
		
		
		alert(name);
		var qty=$('#div1').find('#qty').val();
		alert(qty);
		var a="amt";
		add=(add-0)+(qty-0);
		inputs++;
var t1='remove.png';
		
		var productid=$(this).find('span').html();
		$.ajax({
                   
                    url: 'insert_ajax.php?productid='+productid,
					 
                    
					
					
					
				
                });
				
		//alert(add);
		if(!document.getElementById(name))
			{
				$("#myTable").append("<tr id='"+name+"'><td style='width:150px;'><input type='text' name='product_name[]' class='product' value='"+namea+"' style='border:none;' readonly=''/><input type='hidden' name='prod_id[]' class='productid' value='"+pro_id+"'></td><td style='width:90px;' class='"+a+"'><input type='text' name='quantity[]' class='quantity' value='"+qty+"' style='border:none;' readonly='' /></td><td><img src='"+t1+"' onclick='return deleteprod("+productid+",&apos;"+name+"&apos;);' /></td></tr>");
				
			}
			else
			{
			
			var qtyy=$('#'+name+' .quantity').val();
			alert(qtyy);
			var qty1=(qtyy-0)+(qty-0);
			alert(qty1);
			
			
			
			
			$('#'+name+' .quantity').val(qty1);
			
			
		
			
			
			}
				
			 $("#para").html(add);	
				
			});	

});



</script>

<script>
function deleteprod(pid,pname)
{
 $('#'+pname).remove();

$.ajax({
  url: 'delete_ajax.php?productid='+pid,
   success: function (data) {
   //alert(data);
                        
                    },
 });
}

</script>

<script type="text/javascript">
function search_inv(key)
{

var res=document.getElementById('result');
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
res.innerHTML=result;

	}

}	

	xmlhttp.open("GET","search_aj.php?q="+key,true);

xmlhttp.send();
}
</script>
<script>
function addRow(id,name)
{
document.getElementById('pid').value=id;
document.getElementById('pname').value=name;
}
</script>

<script type="text/javascript">
function search_inv1(key)
{

var res=document.getElementById('pname');
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
res.value=result;

	}

}	

	xmlhttp.open("GET","search_aj1.php?q="+key,true);

xmlhttp.send();
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
		
		
		<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" style="">
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Create purchase Order<br/>
				</div>
	  		  	<div style="width:250px; float:left; margin-top:20px;">
					<?php include_once('menubar1.php')?>
			</div>
			
			<div style="width:680px;  margin-top:20px; float:left; margin-left:20px;">
<div style="width:407px;float:left; padding:7px;" id="div1" >



 <table style="font:Georgia, 'Times New Roman', Times, serif; size:12px; color:#666666;" cellspacing="12" width="400px" >
			<tr><td>Product Name</td>
			    <td>Quantity</td>
			</tr>
<tr><td><input type="text" name="pname" id="pname" onkeyup="search_inv(this.value)" />
<div id="result">

</div>
Or Product Id
<input type="text" name="pid" id="pid" onkeyup="search_inv1(this.value)" />

</td>
<td><input type="text" name="qty" id="qty" /></td></tr>
<tr><td colspan="2"><input type="button" name="submit" value="add" class="productbox1" /></td></tr>
						


    </table>
</div>


<div style="width:407px;float:left; padding:7px; margin-left:100px;">
<form name="form1" action="insert_po.php" method="post" enctype="multipart/form-data">
						<table width="100%" style="font-family:Arial, Helvetica, sans-serif;  font-size:13px; color:#333333;" >

						<tr>
									<td>Product Name </td>
									<td>Quantity</td>
									
								</tr>
							<tbody id="myTable">
							
							</tbody>
							
							
							<tr>
								<td colspan="2"><strong>Total Quantity Ordered</strong></td>
								<td id="para">&nbsp;</td>
							</tr>
<tr><td>Expected Delivery date</td>
<td><input type="text" name="delivery" id="delivery" />
										<script language="JavaScript">
										     new tcal ({
									            'formname': 'form1',
												'controlname': 'delivery'
														});
										</script></td>
</tr>

<tr><td colspan="3"><input type="submit" name="submit" value="done" /></td></tr>



</form>
</table>
</div>
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
