<?php
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
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
	 
	 	}
		tr th{
		background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
    color: #333333;
    font-size: 14px;
	font-family:Arial, Helvetica, sans-serif;
 
    line-height: 29px;
    margin: 0;
    padding: 0 0 0 10px;
	text-align:left;
    text-shadow: 0 1px 0 #FFFFFF;
		}

</style>
<script type="text/javascript" src="jquery.min.js"></script>
<script>
function productval(val)
{
$.ajax({url:"findproduct.php?cid="+val,
success:function(result){
$('#details').html(result);
}

});


}
</script>
</head>


<body>
    
		<?php 
		include_once("topbar.php");
		include_once('../menubar.php');?>
                <div id="container">
		
			
			<div id="container_content" style=" background:none; border:none;">
			


			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc; margin-top: 2%;">
                            <form name="form1" method="post" action="insert_topsell.php">
                                <div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
                            <input type="submit" name="submit" style="background:url('../images/addnew.png'); border:none; cursor: pointer; height:32px; width:32px;" value=""/><br/>Add </div>
                            <div id="container_left" style="width:100%;">
				  <div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">

<div style="height:auto; width:400px; float:left; margin-top: 20px; margin-left: 10px;">
Category Name
<select name="catname" id="catname" onchange="return productval(this.value);" >
<option value="">Select</option>
<?php
$que=mysql_query("select * from `category` where `status`='1' ORDER BY `priority`");
while($res=mysql_fetch_array($que))
{

?>
<option value="<?php echo $res['id'];?>"><?php echo $res['category_name'];?></option>
<?php
}
?>
</select>

</div>



<div style="height:auto; width:400px; float:left; margin-left:100px;">
<table>
<tr><td>&nbsp;</td><td>Product Name</td></tr>
<tbody id="details">
</tbody>
<tr><td colspan="3"></td></tr>
</table>

</div>

	
			  </div>
			  
			  <div style="width:100%;  float:left; "></div>
		</form>
		</div>
			
			</div></div>
		<?php
		include_once("../footer.php");
		?>
</body>
</html>