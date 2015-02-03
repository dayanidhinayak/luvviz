<?php 

include_once('../function.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<title>::Map Cart ::</title>
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="../menu.css" media="screen" />

<script>
var idval="";
function getvalue(val)
{
idval="|"+val+"|"+idval;
//alert(idval);
document.getElementById('cat_id').value=idval;

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
									Add Product<br/>
				</div>
<form name="form" action="insert_product.php" method="post" enctype="multipart/form-data">

<table>


<tr>

     <td>Product Name</td>

	 <td><input type="text" name="name" id="name" /></td>

</tr>

<tr>

     <td>Description About Product</td>

	 <td><textarea name="desc"></textarea></td>

</tr>

<tr>

     <td>Product Price</td>

	 <td><input type="text" name="price" /></td>

</tr>

<tr>

     <td>Product Selling Price</td>

	 <td><input type="text" name="sellingprice" /></td>

</tr>

<tr>

     <td>Product Recurring Price</td>

	 <td><input type="text" name="recurringprice" /></td>

</tr>

<tr>

     <td>Product Quantity</td>

	 <td><input type="text" name="quantity" /></td>

</tr>

<tr>

     <td>Product Image</td>

	 <td><input type="file" name="prodct_img" /></td>

</tr>

<tr>

     <td>Assigned Category</td>

	 <td>
	<input type="text" name="cat_id" id="cat_id"  />
	 </td>
	 <td>
	 <ul><li onclick="return getvalue(0);">Header</li></ul>
	 
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

     <td>Assigned Brand</td>

	 <td><select name="brand_id" />
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
	 
	 
	 
	 </td>

</tr>
<tr>
<td>Assigned Collections</td>
<td>
<select name="collection_id" />
	 <option value="">Select</option>
			<?php
			$que=mysql_query("select * from `collection`");
			while($res=mysql_fetch_array($que))
			{
			?>
			<option value="<?php echo $res['id'];?>"><?php echo $res['name'];?></option>
			<?php
			}
			?>
			</select>


</td>
</tr>


<tr>

     <td>Varient</td>

	 <td><input type="checkbox" name="varient" id="varient" value="1" /></td>

</tr>





<tr><td colspan="2"><input type="submit" name="submit" value="Add" /></td></tr>

</table>

</form>
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
