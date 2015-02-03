<?php
	  include_once('function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	
	<?php 
	$q=mysql_query("SELECT distinct `varient_name` from `product_varient` where `product_id`='12'");
	while($r=mysql_fetch_array($q))
	{
	?>
	<div>
	<?php echo $r['varient_name'];?>:
	<select name='color'>
            <option value="">--- Select ---</option>
			<?php
  // echo "SELECT `description` FROM `product_varient` WHERE `product_id`='12' and `varient_name`='$r[varient_name]'";             
 $list=mysql_query("SELECT `description` FROM `product_varient` WHERE `product_id`='12' and `varient_name`='$r[varient_name]'") or die(mysql_error());
			 while($row_list=mysql_fetch_array($list))
			 { 
			 
                ?>
					<option value="<?php echo $row_list['description']; ?>"><?php echo $row_list['description']; ?>
                    </option>
                <?php
                }
				?>
            </select>
	
	</div>
	<?php } ?>
	
</body>
</html>
