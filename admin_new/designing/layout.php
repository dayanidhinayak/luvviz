<?php 
include_once("../function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../menu.css" media="screen" />
<script type="text/javascript">
function modules(key)
{
//alert(key);

//alert(res);
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
document.getElementById('modules').innerHTML=result;

	}
}
xmlhttp.open("GET","search_module.php?q="+key,true);

xmlhttp.send();


}
</script>
<script>
function add_module()
{
document.getElementById('add_more').style.display="block";
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
		<div id="menubar100">
			<div id="menubar">
				<div class="menubar-left">
				
				</div>
		  </div>
		</div>
		
		<?php include_once("../menubar.php");?>
<div id="container100" style=" margin-top:10px; background:#ffffff;">
			<div id="container" style="">
			
			 	<div class="about-cont" style=" font-weight:normal;">
				<div class="container1-top" style="  height:35px;  background:#efefef; font-size:20px; text-align:left; line-height:1.8; padding-left:10px; border-bottom: 1px solid rgb(196, 196, 196); background:url(../img/titlebar.png) repeat-x; border-radius:5px 5px 5px 5px; -moz-border-radius:5px 5px 5px 5px; margin-top:1%; width:99%;color: #3856a0;">
									Set Layout<br/>
				</div>

<table>
<tr>
    <td>Layout name</td>
	
</tr>
<tr>
   
	<td><select name="page" style="width:100px;" onchange="return modules(this.value);" >
	<option value="">select page</option>
	     <?php 
		 $q=mysql_query("select * from `page_desc`");
		 while($r=mysql_fetch_array($q))
         {		 
		 ?>
	   <option value="<?php echo $r['id'];?>"><?php echo $r['name'];?></option>
	   
	   <?php } ?>
	    </select>
	     </td>
	 <td id="modules"></td>
	
</tr>

</table>

</div>
</div>
</div>

</body>
</html>
