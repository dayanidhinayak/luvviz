<?php
include_once("function.php");
$pid=$_GET['productid'];
$que=mysql_query("select p.*,c.`category_name` from `product` p,`category` c where `p`.`id`='$pid' and `c`.`id`=`p`.`category_id`");
//echo "select p.*,c.`category_name` from `product` p,`category` c where `id`='$pid' and `c`.`id`=`p`.`category_id`";
$res=mysql_fetch_array($que);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<title></title>

</head>



<body>

<form name="form" action="edit_product.php" method="post" enctype="multipart/form-data">

<table>

<th colspan="2">Edit Product</th>



<tr>

     <td>Product Name<input type="hidden" name="pid" value="<?php echo $pid?>"  /></td>

	 <td><input type="text" name="name"  value="<?php echo $res['product_name'];  ?>"/></td>

</tr>

<tr>

     <td>Description About Product</td>

	 <td><textarea name="desc"><?php echo $res['description'];  ?></textarea></td>

</tr>

<tr>

     <td>Product Price</td>

	 <td><input type="text" name="price" value="<?php echo $res['price'];  ?>" /></td>

</tr>

<tr>

     <td>Product Selling Price</td>

	 <td><input type="text" name="sellingprice" value="<?php echo $res['selling_price'];  ?>" /></td>

</tr>

<tr>

     <td>Product Image</td>

	 <td><input type="file" name="prodct_img" /></td>
	 <td><img src="<?php echo $res['image'];?>"  height="50px" width="50px" /></td>

</tr>

<tr>

     <td>Assigned Category</td>

	 <td><select name="cat_id" />
	  <option value="<?php echo $res['category_name'];?>"><?php echo $res['category_name'];?></option>
	
			<?php
			$que=mysql_query("select * from `category` where `category_name`!='$res[category_name]'");
			while($res=mysql_fetch_array($que))
			{
			?>
			<option value="<?php echo $res['id'];?>"><?php echo $res['category_name'];?></option>
			<?php
			}
			?>
			</select>
	 
	 
	 
	 </td>

</tr>

<tr><td colspan="2"><input type="submit" name="submit" value="Update" /></td></tr>

</table>

</form>

</body>

</html>

