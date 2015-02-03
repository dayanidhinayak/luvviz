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
<title>Luvviz adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="jquery.min.js" charset="utf-8"></script>

 <link rel="stylesheet" href="../styles.css">
<script>

 function assignrelate(val)
 {
//alert(val);
  var el = document.getElementById('prname');
 document.getElementById('related_prod').value= document.getElementById('related_prod').value+val+'|';
var text=el.options[el.selectedIndex].text;
var comid=el.options[el.selectedIndex].value;
var inputtext='<div id="com'+comid+'" onclick="delcomb(this.id)">'+text+'</div>';

//var text = '<div id="com'+val+'" onclick="delcomb(val);">'+text+'</div>';
document.getElementById('related_text').innerHTML=document.getElementById('related_text').innerHTML+'\n'+inputtext;


//document.getElementById('related_text').innerHTML=document.getElementById('related_text').innerHTML+'\n'+text;
 }
 
 
 function delcomb(comid)
 {
 var delid=comid.split('com');
 var modid=delid[1]+'|'
 var text=$('#related_prod').val();
 var text_modified=text.replace(modid,'');
 $('#related_prod').val(text_modified);
 $('#'+comid).remove();
// alert(text_modified);
 }
</script>
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	
	tr td{
	width:10%;
	height:30px;
	}
	
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:center;
height:30px;
text-shadow: 0 1px 0 #FFFFFF;
}

.aditleftbox{
height:700px;
width:14%;
background:#FFFFFF;
border:1px #CCCCCC solid;
font-family:Arial, Helvetica, sans-serif;
color:#666666;
float:left;
}

.aditleftsmallbox{
height:20px;
width:92%;
border-bottom:1px #CCCCCC solid;
padding:4%;
font-size:13px;
}


</style>
<script>

var idval="";

var nameval='';

function getvalue(val,namevalue)

{

idval="|"+val+"|"+idval;
var nameval=document.getElementById('totalcat_val').innerHTML;
//alert(idval);
nameval="<div id='ass"+val+"' onclick='delass(this.id)'>"+namevalue+"</div>"+nameval;
document.getElementById('cat_id').value=idval;

//document.getElementById('totalcat_val').value=nameval;
document.getElementById('totalcat_val').innerHTML=nameval;
}


function delass(assid)
{
 var delid=assid.split('ass');
 var modid='|'+delid[1]+'|'
 var text=$('#cat_id').val();
 var text_modified=text.replace(modid,'');
 $('#cat_id').val(text_modified);
 $('#'+assid).remove();
 //alert(text_modified);
}

</script>

<script>
function taxcalculation(val)
{
var retailprice=document.getElementById('sellingprice').value;
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

document.getElementById("price_wdtax").value=result;
}

}
	

	xmlhttp.open("GET","taxcalculation.php?q="+val+"&q1="+retailprice,true);

xmlhttp.send();
}
  
</script>
<script>
function add_brand()
{
window.open("add_brand.php");
}
</script>

<!--<script type="text/javascript">
    $(function(){
	$('#add1').click(function () {
    var table = $('#s').closest('table');
    if (table.find('input:text').length < 7) {
       $('#s').append('<input type="text" id="current Name" value="" name="sz[]">');
    }
});
	
    });
</script>
<script type="text/javascript">
    $(function(){
	$('#add2').click(function () {
    var table = $('#qt').closest('table');
    if (table.find('input:text').length < 7) {
        $('#qt').append('<input type="text" id="current Name" value="" name="quan[]">');
    }
});
	
    });
</script>-->

<script src="jquery.min.js" type="text/javascript"></script>

<script language="javascript">
    
   
	
	
	</script>


</head>

<body>
		
		<?php
		include_once("topbar.php");
		include_once('../menubar.php');?>
		
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:100px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3 style=" margin-top: 0px;">Catalog <img src="images/separator1.png" /> Products <img src="images/separator1.png" /> Add New</h3></div>
		<form name="form1" method="post" action="insert_product.php" enctype="multipart/form-data">
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="product.php"><img  src="images/process1.png"/></a><br/>Back to list</div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><input type="submit" name="submit" id="submit" style="background:url('../images/save5.png'); border:none; height:32px; width:32px;" value="" /><br/>
		 Save</div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="../images/preview5.png" /><br/>Preview</div>
			<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="../images/delete5.png" /><br/>Delete this product </div>
			</div>
			<div class="box1" style="width:100%; margin-left:0px; background:#ebedf4; border-bottom: 1px solid #CCCCCC;">
					
					 <div id="v-nav">
                <ul>
					<li tab="tab_a" class="first current">information</li>
                    <li tab="tab_b" >Prices</li>
                    <li tab="tab_c">SEO</li>
                    <li tab="tab_d">Associations</li>
                    <li tab="tab_e" >Shipping</li>
					<li tab="tab_f" >Combinations</li>
					<!--<li tab="tab_g" >Quantities</li>-->
					<li tab="tab_h" >Image</li>
					<li tab="tab_i" >Features</li>
					<li tab="tab_j" >Customization</li>
					 <li tab="tab_k" class="last">Suppliers</li>
                </ul>

                <div style="display: block;" class="tab-content">
					<h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Product global information</h5>
                   <div style="width:80%; height:30px; float:left; text-align:center;   border-bottom: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC; margin-left:10px; margin-top:10px;">
							<h5 style="font-size:14px; background:none;"><span style="font-weight:bold; ">type:</span>
							<input type="radio" value="1" name="type" style="margin-right:8px; " />Product 
							<input type="radio" value="2" name="type" style="margin-right:8px; " /> Pack 
							<input type="radio" value="3" name="type" style="margin-right:8px; " />	Virtual Product (services, booking and downloadable products)</h5>
					</div>
					<div style="width:80%; height:380px; float:left; border-bottom:1px solid #CCCCCC; margin-left:2%; ">
						
							<table width="52%" border="0" height="150px;" style="float:left; text-align: left; line-height: 1.8; margin-left:40px; float:left; margin-top:4%; margin-left:4%;	 ">
						
  <tr>
    <td width="21%" >Name:</td>
    <td ><input type="text" name="name" style=" border:1px solid #CCCCCC;"/></td>
<td></td>
  </tr>
  
  <tr>
    <td >Reference:</td>
    <td><input type="text" name="ref_id" style=" border:1px solid #CCCCCC;"/></td>
	 <td width="42%"></td>
  </tr>
  <tr>
    <td >EAN13 or JAN:</td>
    <td><input type="text" name="" style=" border:1px solid #CCCCCC;" /></td>
	 <td style="font-size:11px;"> (Europe,Japan)</td>
  </tr>
  <tr>
    <td > UPC:</td>
    <td><input type="text" name="" style=" border:1px solid #CCCCCC;" /></td>
	 <td style="font-size:11px;">(US, Canada)</td>
  </tr>
 <tr>
    <td >Priority:</td>
    <td><input type="text" name="priority" style=" border:1px solid #CCCCCC;" /></td>
  </tr>
 
</table>

	
	
	
	<table width="200" border="0" height="300" style="float:left; line-height:2.0; text-align: left;  margin-left:15%; margin-top:4%; ">
  <tr>
    <td width="30%" style="font-weight:bold;" >Status:</td>
    <td width="70%"><input type="radio" style="margin-right:8px; " /> Pack</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" style="margin-right:8px; " /> Pack</td>
  </tr>
  <tr>
    <td style="font-weight:bold;">Visibility:</td>
    <td><select name="select">
      <option >Catagory only</option>
    </select>    </td>
  </tr>
  <tr>
    <td style="font-weight:bold;">Options:</td>
    <td><input type="checkbox"  />
      available for order</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="checkbox" />
      available for order</td>
  </tr>
  
  <tr>
    <td></td>
    <td><input type="checkbox" />
      online only (not sold in store)</td>
  </tr>
  
  <tr>
    <td style="font-weight:bold;">Condition:</td>
    <td><select name="select" style="width:80%;">
      <option >New</option>
    </select>     </td>
  </tr>
  
</table>
	 
	</div>
						
					<div style="height:200px; width:70%; float:left; margin-left:5%; margin-top:2%;">
					<!--<div style="float:left; width:20%; font-size:12px; text-align:right; font-style:italic;"><span style="font-family:Arial, Helvetica, sans-serif; font-weight:bold;">Short description:</span>

(appears in the product lists and on the top of the product page)</div>
					<div style="float:left; margin-top:-25px;">
					<textarea   id="jqte-test1" ><b>My contents are from <u><span style="color:rgb(153,0,255);">TEXTAREA</span></u></b> </textarea> 
					<input type="hidden" name="desc" id="desc" value="" />
					 <script >
					
$('#jqte-test1').jqte();

</script>
					</div>	
						-->
			</div>
		
			<div style="height:200px; width:70%; float:left; margin-left:5%; margin-top:2%;">
					<!--<div style="float:left; width:20%; font-size:12px; text-align:right; font-style:italic;"><span style="font-family:Arial, Helvetica, sans-serif; font-weight:bold;">Long description:</span>
</div>
					<div style="float:left; margin-top:-25px;"  >
					<textarea   id="jqte-test"  > <b>My contents are from <u><span style="color:rgb(153,0,255);">TEXTAREA</span></u></b>
					
					</textarea>
						<input type="hidden" name="ldesc" id="ldesc" value="" />
					<script >
					
$('#jqte-test').jqte();


</script>




					
					</div>	-->
						
			</div>
			<div  style="width:100%; height:auto; float:left;">
				<table style="width:70%;" align="center">
					 <tr>
    <td style="font-weight:bold; width:1%;">Tags:</td>
    <td><input type="text" name="" style="width:200px; border:1px solid #cccccc;" />  </td>
  </tr>
  <tr><td colspan="2" style="font-size:11px;">Tags separated by commas (e.g. dvd, dvd player, hifi)</td></tr>
				</table>
			</div>
			
			
		 
						
                </div>

                <div style="display: none;" class="tab-content">
                    <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Product price </h5>
                   <div class="headingbox">
				   		You must enter either the pre-tax retail price, or the retail price with tax. The input field will be automatically calculated. 
				   </div>
				   <div id="separation" style="width:100%; margin-left:0%;">
				   </div>
				   
				   <table style="width:40%; height:300px; margin-top:1%; text-align: left; ">
				   		<tr>
							<td>Pre-tax wholesale price:</td>
							<td><input type="text" name="price"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">The wholesale price at which you bought this product</span></td>
						</tr>
						<tr>
							<td>Pre-tax retail price:</td>
							<td><input type="text" name="sellingprice" id="sellingprice"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?>
							</td>
						</tr>
						<tr>
							<td>Recurring price:</td>
							<td><input type="text" name="recurringprice"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?>
							</td>
						</tr>

<tr>
    <td > NEW ARRIVALS:</td>
<td>
    <select style="float:left;padding:5px; height:30px;" name="newarrival">
									<option  value="1">enable</option>
<option  value="0">disable</option>
							</select>
  </tr>




						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">The pre-tax retail price to sell this product</span></td>
						</tr>
						<tr>
							<td>Tax rule:</td>
							<td><select name="taxvalue" onchange="return taxcalculation(this.value);">
							<option value="">Select</option>
								<option value="0">No Tax</option>
								<?php
								$qwe=mysql_query("select t.*,tx.`rate` from `tax_rule` t,`taxes` tx where `t`.`status`='1' and `t`.`tax_id`=`tx`.`slno`");
								while($res=mysql_fetch_array($qwe))
								{
								
								?>
								<option value="<?php echo $res['rate'];?>"><?php echo $res['name'];?></option>
								<?php
								}
								?>
								
							</select>
							 <input type="button" name="submit" value="create"  />
							</td>
						</tr>
						<tr>
							<td>Retail price with tax:</td>
							<td><input type="text" name="price_wdtax" id="price_wdtax"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?>
							</td>
						</tr>
						<tr>
							<td>Unit price:</td>
							<td><input type="text" name=""  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?> per<input type="text" name=""  style="width:100px; height:20px; border:1px solid #CCCCCC;" />or 0.00 \80 per with tax </td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; color:#7E7E7E;">e.g. per lb</span></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="color:#7E7E7E;"><input type="checkbox"  style="float:left; margin-right:5px;"/>Display "on sale" icon on product page and text on product listing</td>
						</tr>
						<tr>
							<td>Final retail price:</td>
							<td>0.00 &nbsp;&nbsp;<?php echo $rc['symbol'];?></td>
						</tr>
				   </table>
				   
				    <div id="separation" style="width:100%; margin-left:0%;">
				   </div>
				    <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Specific price </h5>
					
                   <div class="headingbox">
				   		You can set specific prices for clients belonging to different groups, different countries, etc. 
				   </div>
				   
				   <table cellpadding="5" cellspacing="0" style="width:100%; margin-top:2%; border:1px solid #CCCCCC; background:#FFFFFF;">
				   		<tr>
							<th>Rule</th>
							<th>Combination</th>
							<th>Currency</th>
							<th>Country</th>
							<th>Group</th>
							<th>Customer</th>
							<th>Fixed price</th>
							<th>Impact</th>
							<th>Period</th>
							<th>From (quantity)</th>
							<th>Action</th>
						</tr>
						<tr>
							<td colspan="11">No specific prices</td>
						</tr>
				   </table>

				   <div id="separation" style="width:100%; margin-left:0%;">
				   </div>
				    <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Priority management</h5>
					
                   <div class="headingbox">
				   		Sometimes one customer can fit into multiple specific price rules. Priorities allow you to define which rule applies to the customer. 
				   </div>
				   <table style="width:60%; margin-top:2%;">
				   		<tr>
							<td style="width:10%;">Priorities:</td>
							<td style="width:50%;">
							<select>
								<option value="">Shop</option>
							</select>
							
							<select>
								<option value="">Currency</option>
							</select>
							
							<select>
								<option value="">Country</option>
							</select>
							
							<select>
								<option value="">Group</option>
							</select>
							</td>
							
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><input type="checkbox" />Apply to all products</td>
						</tr>
				   </table>
                </div>

                <div style="display: none;" class="tab-content">
                     <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">SEO</h5>
					 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					  <table style="width:70%; margin-top:1%; text-align: left; ">

				   		<tr>
							<td style="width:15%;">Meta title:</td>
							<td style="width:55%;"><input type="text" name="metatitle"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">Product page title; leave blank to use product name</span></td>
						</tr>
						<tr>
							<td>Meta description:</td>
							<td><input type="text" name="metadescription"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">The pre-tax retail price to sell this product</span></td>
						</tr>
						<tr>
							<td>Meta keywords:</td>
							<td><input type="text" name="metakeyword"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?> 
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">Keywords for HTML header, separated by commas</span></td>
						</tr>
						<tr>
							<td>Friendly URL:</td>
							<td><input type="text" name="friendlyurl" value="test1"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?>
							</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td style="color:#7E7E7E; font-size:11px;"> <input type="button" name="submit" value="Generate"  />Friendly URL from product name.<br/>
							Product link will look like this: http://www.prestashop.com/demo/lang/8-test1.html</td>
						</tr>
						
						</table>
					 
                </div>

                <div style="display: none;" class="tab-content">
                   <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Associations</h5>
				   		<div id="separation" style="width:100%; margin-left:0%;">
				        </div>
							
							
						<table style="width:100%; ">
							<tr>
							<td style="margin-top:0px; width:20%;">Find a category: 
							</td>
							<td style="width:30%;"><input type="text" name="cat_id" id="cat_id"  style="width:150px; height:20px; border:1px solid #CCCCCC; float:left; display:none" /> <br />
							<div id="totalcat_val"  style="width:280px; height:60px; border:1px solid #CCCCCC; background:#FFFFFF; float:left;"></div>
							</td>
							

	 <td style="width:48%; text-align: left; padding-left: 2%;">

	 <ul><li onclick="return getvalue(0,Header);">Header</li></ul>

	 

	 <?php

	 $que=mysql_query("select * from `category`");

	 while($res=mysql_fetch_array($que))

	 {

	 tree_view1($res['id']);

	  }

	 ?>


	  

	 

	

	 

	 </td>

							</tr>
							
							<tr>
							<td>
							</td>
							<td style="color:#7E7E7E; font-size:11px;"> <input type="button" name="submit" value="Create New catagory"  />
							</td>
							</tr>
							
						
						</table>
						
						
						<div class="headingbox" style="margin-top:2%;">The default category is the category which is displayed by default.
					    </div>
		 <div id="separation" style="width:100%; margin-left:0%;">
		 </div>
			<table style="width:100%;">
							<tr>
							<td style="width:30%;">Associated categories:</td>
							<td style="width:100%;"><input type="text" name=""  style="width:150px; height:20px; border:1px solid #CCCCCC; float:left;" /> Begin typing the first letters of the product name, then select the product from the drop-down list </td>
							</tr>
							<tr>
							<td>
							</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">(Do not forget to save the product afterward)</span>
							</td>
							</tr>
							<tr>
							<td >Manufacturer:</td>
							<td>
							<select name="brand_id" />

	 <option value="">Select</option>

			<?php

			$que=mysql_query("select * from `brand`");

			while($res=mysql_fetch_array($que))

			{

			?>

			<option value="<?php echo $res['id'];?>"><?php echo $res['brand_name'];?></option>

			<?php

			}

			?>

			</select>
							 <input type="button" name="submit" value="Create New Manufaturer" onclick="return add_brand();"  />
							</td>
							
							
							</tr>
							</table>
										

                </div>
				
				 <div style="display: none;" class="tab-content">
                  		<h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Shipping</h5>
					 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					  <table style="width:75%; margin-top:1%; text-align: left; line-height: 2.0; ">
				   		<tr>
							<td style="width:20%;">Width (package):</td>
							<td style="width:55%;"><input type="text" name=""  style="width:100px; height:20px; border:1px solid #CCCCCC;" />cm 
							</td>
						</tr>
						
						<tr>

							<td>Height (package):</td>
							<td><input type="text" name=""  style="width:100px; height:20px; border:1px solid #CCCCCC;" />cm 
							</td>
						</tr>
						
						<tr>
							<td>Depth (package):</td>
							<td><input type="text" name=""  style="width:100px; height:20px; border:1px solid #CCCCCC;" />cm 
							</td>
						</tr>
						
						<tr>
							<td>Weight (package):</td>
							<td><input type="text" name="" value="test1"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />kg 
							</td>
						</tr>
						<tr>
							<td>Additional shipping cost <br/>(per quantity):</td>
							<td><input type="text" name="" value="0.00"  style="width:160px; height:20px; border:1px solid #CCCCCC;" />&nbsp;&nbsp;<?php echo $rc['symbol'];?> tax excl. 
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">Carrier tax will be applied.</span></td>
						</tr>
						<tr>
							<td>Carriers:</td>
							<td><select>
								<option value="">Demo Store</option>
							</select> 
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="color:#7E7E7E; font-size:11px;"> <input type="button" name="submit" value="Unselect All"  /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">If no carrier selected, all carriers could be used to ship this product.</span></td>
						</tr>
						</table>
                </div>
				
				 <div style="display: none;" class="tab-content">
                   <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Add or modify combinations for this product</h5>
					 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					 <div style="width:100%; height:auto; float:left; margin-top:1%;">
					 	or use the <input type="button" name="submit" value="Product combinations generator"  />in order to create automatically a set of combinations 
					 </div>
					 
					  <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					  <table style=" text-align: left;">
					 <tr>
					 	<td>Product Name</td>
						<td>
						<select id="prname" onchange="assignrelate(this.value);">
						<option value=""></option>
						<?php
						$query=mysql_query("select * from product order by  product_name");
						while($result=mysql_fetch_array($query))
						{
						echo "<option value='$result[id]'>$result[product_name]</option>";
						}
						?>
						</select>
						<input type="hidden" name="related_prod"  value="" id="related_prod" />
						<div id="related_text" style="width:600px; height:auto; float:left; border-radius:5px; background:#ffffff; border:1px solid #cccccc; margin-left:70px;"  ></div>
						</td>
						</tr>
					 
					 </table>
					  <table cellpadding="5" cellspacing="0" style="width:100%; text-align: center; margin-top:2%; border:1px solid #CCCCCC; background:#FFFFFF;">
				   		<tr>
							<th style="text-align: center;">Attributes </th>
							<th style="text-align: center;">Impact </th>
							<th style="text-align: center;">Weight </th>
							<th style="text-align: center;">Reference</th>
							<th style="text-align: center;">EAN13</th>
							<th style="text-align: center;">UPC</th>
							<th style="text-align: center;">Actions</th>
							
						</tr>
						<tr>
							<td align="center" colspan="7">No items found</td>
						</tr>
				   </table>
				    <div class="headingbox" style="margin-top:2%;">
				   		    The row in blue is the default combination.<br/>
    A default combination must be designated for each product.


				   </div>
                </div>
				
				
				 <!--<div style="display: none;" class="tab-content">
                   	<h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Available quantities for sale</h5>
					 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					     <div class="headingbox" style="margin-top:2%; ">
				   		   This interface allows you to manage the available quantities for sale of the current product and its combinations on the current shop.

You can choose whether or not to use the advanced stock management system for this product.

You can manually specify the quantities for the product/each product combination, or choose to automatically determine these quantities based on your stock (if advanced stock management is activated).

In this case, the quantities correspond to the quantitites of the real stock in the warehouses associated to the current shop or current group of shops.

For packs, if it has products that use advanced stock management, you have to specify a common warehouse for these products in the pack.

Also, please note that when a product has combinations, its default combination will be used in stock movements.


				   </div>
				  
					<h5 style="font-weight:bold; font-size:17px; background:none; margin-top:15%;">Available quantities for sale</h5>
					 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					
					
					 
					 <div style=" font-size:11px; color:#333333;"><input type="checkbox"/>I want to use the advanced stock management system for this product  <span style="font-size:12px;">- This requires you to enable advanced stock management.</span> 
					 </div> <br />
				    <div style=" font-size:11px; color:#333333;"><input type="radio"/>Available quantities for current product and its combinations are based on stock in the warehouses <span style="font-size:12px;"> - This requires you to enable advanced stock management globally or for this product. </span>
					 </div><br />
					  <div style=" font-size:11px; color:#333333;"><input  type="radio"/>I want to specify available quantities manually  
					 </div>
					
					  <table cellpadding="10" cellspacing="0"  style="width:100%;  margin-top:2%;  border:1px solid #CCCCCC; background:#FFFFFF;" >
				   		<tr>
							 <th>size<img src="../images/addnew.png" width="20"  /></th>
							<th>Quantity <!--<img src="../images/addnew.png" width="20"/>--></th>
							<!--<th style="width:80%">Designation</th>
							
							
						</tr>
					
					

						<tr style=" text-align: left;" >
						
							<td><input type="text" name="size" style=" width:12%;" /></td>
							<td><input type="text" name="quantity" style=" width:12%;" />&nbsp; Belkin Leather Folio for iPod nano - Black / Chocolate</td> 
						
						</tr>
				   </table>

					<table  style=" width:30%; margin-left:30%; font-size:11px; text-align: left;  ">
  <tr>
    <td><span style=" font-size:12px;">When out of stock:</span></td>
    <td><input type="radio" />Deny orders</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" />Allow orders</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="radio" />Default: <span style="font-style:italic">Deny orders</span> as set in Preferences </td>
  </tr>
</table>

 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
 <h5 style="font-weight:bold; font-size:17px; background:none;">Availability settings</h5>
 
 
 <table width="60%" border="0" height="180px;" style="float:left; text-align: left; margin-left:30%; padding-bottom: 10px; line-height: 1.7;">
						
  <tr>
    <td width="21%">Minimum quantity:</td>
    <td colspan="2"><input type="text" name=""  style=" border:1px solid #CCCCCC;" /></td>
	
  </tr>
   <tr>
   <td ></td>
    <td colspan="2" style="font-size:12px; font-style:italic;">The minimum quantity to buy this product (set to 1 to disable this feature)</td>
   
	 
  </tr>
  <tr>
    <td >Displayed text when in-stock:</td>
    <td><input type="text" name="" style=" border:1px solid #CCCCCC;" /></td>
	 <td ><img src="images/editimg1.jpg" /></td>
  </tr>
  <tr>
    <td  >Displayed text when allowed to be<br /> back-ordered:</td>
    <td><input type="text" name="" style=" border:1px solid #CCCCCC;" /></td>
	 <td style="font-size:11px;"> <img src="images/editimg1.jpg" /></td>
  </tr>
  <tr>
    <td > Available date:</td>
    <td colspan="2"><input type="text" name="" style=" border:1px solid #CCCCCC;" /><br />The available date when this product is out of stock</td>
	
  </tr>
</table>

	
                </div>-->
				
				
				 
				 
				 
				 
				 <div style="display: none;" class="tab-content">
                    <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Add a new image to this product</h5>
						 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					 
					 <table align="center" style="width:50%;">
					 	<tr>
							<td>File:</td>
							<td><input type="file" name="prodct_img"   /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">Format: JPG, GIF, PNG. Filesize: 8.00 MB max</span></td>
						</tr>
						<tr>
						<td>Alternate:</td>
						<td><input type="text" name="alt"/></td>
						</tr>
					 </table>
					 
					  <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					 
					 <!--<table cellpadding="5" cellspacing="0"  style="width:40%; margin-top:5%; background:#FFFFFF; border:1px solid #CCCCCC;">
					 	<tr>
							<th>Image</th>
							<th>Position</th>
							<th>Cover</th>
							<th>Action</th>
						</tr>
						<tr>
							<td><img src="images/23.jpg" width="60" height="60" /></td>
							<td>1</td>
							<td><img src="images/tick.png" /></td>
							<td><img src="images/delete.gif" /></td>
						</tr>
					 </table>-->
                </div>
				
				
				 <div style="display: none;" class="tab-content">
                    <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Assign features to this product:</h5>
					
					  <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					 	<table style="width:100%;">
						<tr>
							<td>You can specify a value for each relevant feature regarding this product, empty fields will not be displayed.
You can either create a specific value or select among existing pre-defined values you added previously.</td>
</tr>
						</table>
							<div id="separation" style="width:100%; margin-left:0%;">
				            </div>
								<table cellpadding="5" cellspacing="0" style="width:100%; height: 300px; line-height: 2.0; background:#FFFFFF; border:1px solid #CCCCCC; margin-top:2%;" >
									<tr>
										<th>Feature</th>
										<!--<th>Pre-defined value</th>-->
										<th>Customized value</th>
									</tr>
									<?php
									$i=1;
									$qwe=mysql_query("select * from `varient_table`");
									while($rwe=mysql_fetch_array($qwe))
									{
									$varname=strtolower($rwe['varient_name']);
									
									if($varname=="size"){
									}
									else{
									?>
									<tr>
										<td><input type="text" value="<?php echo $varname;?>" name="vname<?php echo $rwe['varient_name'];?>"  ></td>
										<?php 
										if($rwe['varient_name']=='colour')
										
										{
										?>
										
										<td><input type="text" name="varient[<?php echo $rwe['varient_name'];?>]"  id="name<?php echo $i;?>" class="color"  /></td>
										
										<?php 
										}
										else
										{
										?>
										<td>
								<input type="text" name="varient[<?php echo $rwe['varient_name'];?>]"/>
										</td>
										<?php } ?>
									</tr>
									<?php
									}
									$i++;									}
									?>
									
									
								</table>
                </div>
				
				
				 <div style="display: none;" class="tab-content">
                    <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Add or modify customizable properties</h5>
					<div id="separation" style="width:100%; margin-left:0%;">
				    </div>
					
					<table style="width:50%; margin-top:5%; ">
				   		<tr>
							<td style="width:20%;">File fields:</td>
							<td style="width:35%;"><input type="text" name=""  style="width:100px; height:20px; border:1px solid #CCCCCC;" /> 
							</td>
						</tr>
						<tr>
						<td></td>
						<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">Number of upload file fields displayed</span></td>
						</tr>
						
						<tr>
							<td>Text fields:</td>
							<td><input type="text" name=""  style="width:100px; height:20px; border:1px solid #CCCCCC;" />
							</td>
						</tr>
						<tr>
							<td>Delivery timeperiod:</td>
							<td><input type="text" name="dtime"  style="width:100px; height:20px; border:1px solid #CCCCCC;" />
							</td>
						</tr>
						
						
						<tr>
						<td></td>
						<td><span style="font-size:11px; font-style:italic; color:#7E7E7E;">Number of text fields displayed</span></td>
						</tr>
						</table>
                </div>
				
				
				 <div style="display: none;" class="tab-content">
                    <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Suppliers of the current product</h5>
					 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					     <div class="headingbox" style="margin-top:2%; ">
				   		   This interface allows you to specify the suppliers of the current product and eventually its combinations.<br /><br />
						   It is also possible to specify for each product/product combinations the supplier reference according to previously associated suppliers.<br /><br />
						   When using the advanced stock management (see Preferences/Products), the values you fill here (prices, references) will be used in the supply orders.
						   <br />
                   </div>
				<div>Please choose the suppliers associated with this product, and the default one.</div>
          <table cellpadding="5" cellspacing="0" align="center" style="width:50%; margin-top:2%; border:1px solid #CCCCCC; background:#FFFFFF;">
				   		<tr>
							<th >Selected </th>
							<th >	Supplier Name</th>
							<th>Default </th>
							
							
						</tr>
						<tr style="border-bottom:1px #CCCCCC solid;">
							<td ><input type="checkbox" name="" /></td>                   
							<td>AppleStore</td>
							<td><input type="radio" name="" /></td>
						</tr>
						
						<tr>
							<td ><input type="checkbox" name="" /></td>                   
							<td>Shure Online Storer</td>
							<td><input type="radio" name="" /></td>
						</tr>
				   </table>
				   
				    <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Product reference(s)</h5>
					 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					 <div style=" font-size:11px; margin-top:2%;">You can specify product reference(s) for each supplier associated.<br /><br />

Click "Save and Stay" after changing selected suppliers to display the associated product references.</div>

 <table cellpadding="5" cellspacing="0" style="width:100%; margin-top:2%; border:1px solid #CCCCCC; background:#FFFFFF;">
				   		<tr>
							<th >Quantity </th>
							<th style="width:80%">Applestore</th>
							
							
						</tr>
						<tr>
					<td align="left" colspan="2">
							
							 <table cellpadding="5" cellspacing="0" style="width:60%; margin-top:2%; border:1px solid #CCCCCC; background:#FFFFFF;">
				   		<tr>
							<th style="width:20%;">Product name</th>
							<th >Supplier reference</th>
							<th >Unit price tax excluded</th>
							<th >Unit price currency</th>
							
							
							
						</tr>
						<tr style="border-bottom:1px #CCCCCC solid;">
							<td style="font-size:11px;" >Belkin Leather Folio for iPod nano - Black / Chocolate</td>                   
							<td><input type="text" name=""  style="width:35%; border:1px #CCCCCC solid;"/></td>
							<td><input type="text" name="" style="width:35%; border:1px #CCCCCC solid;" /></td>
							<td><select ><option value="">euro</option></select></td>
							
						</tr>
						
						
				   </table>
					
					</td>
						</tr>
						
				   </table>
</form>
				  
            </div>
			
			
			
			
			
			<!-- Include JavaScript -->
        <script type="text/javascript" src="../jquery_002.js"></script>
        <script type="text/javascript" src="../jquery.js"></script>        
        

        <script type="text/javascript" src="../script.js"></script>

        <!-- Include Google Analytics Code -->
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-16380505-1");
                pageTracker._trackPageview();
            }
            catch (err) {
            } 
        </script>
		  </div>
		</div>
		</div>
		
		<?php
		include_once("../footer.php");
		?>

</body>
</html>
