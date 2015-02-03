<?php
ini_set('allow_url_include' , true);
include_once("../function.php");
?>
<html>
<head>
<script>
	function getproduct(catid)
	{
	var xmlhttp;

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
	
		document.getElementById("catg").innerHTML=xmlhttp.responseText;
		
	    }
	  }
	xmlhttp.open("GET","subcategory.php?proval="+catid,true);
	xmlhttp.send();

	}
</script>
<script>
	function getpro(subcatid,cateid)
	{
	var xmlhttp;

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
	
		document.getElementById("pro").innerHTML=xmlhttp.responseText;
		
	    }
	  }
	xmlhttp.open("GET","productdetail.php?provals="+subcatid+'&catid='+cateid,true);
	xmlhttp.send();

	}
</script>
<script>
	function getquant(slno)
	{
            var quant=document.getElementById("qty"+slno).value;
           // alert(quant);
	var xmlhttp;

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
	
		
               if (xmlhttp.responseText==1)
		{
                    
                alert("invalid quantity");
                }
                
		
	    }
	  }
	xmlhttp.open("GET","checkquan.php?val="+slno+'&quantity='+quant,true);
	xmlhttp.send();

	}
</script>
<script src="jquery-1.9.1.min.js" type="text/javascript"></script>
<script>
	function check()
{
	var x=0;
 $('.chk').each(function(){
	if (this.checked) {
		x=1;
		return false;
	}
	
	});
 if (x==1) {
	return true;
	//code
 }
 else
 return false;
 }
	
</script>
</head>
<body>
	
	<form name="f" method="post" action="print.php">
<table>
<?php
$sqlcat=mysql_query("select * from `category` where `parent`='0'");
while($resscat=mysql_fetch_array($sqlcat)){
?>
<tr>
<td  onclick="return getproduct(<?php echo $resscat['id'];?>)" style="cursor: pointer;"><?php echo $resscat['category_name']; ?></td>
</tr>
<?php
}
?>
</table>
<table>
	<tr id="catg">
		<td></td>
	</tr>
    <tr>
<th>Slno</th>
<th></th>
<th>Product name</th>
<th>Size</th>
<th>Quantity</th>
<th>Price</th>
<th>Date</th>
<th>Quantity to print</th>
</tr>
    <tbody id="pro"></tbody>
   <tr>
	<td><input type="submit" name="submit" value="print" onclick="return check();"/></td>
   </tr> 
</table>

</form>


</body>
</html>
