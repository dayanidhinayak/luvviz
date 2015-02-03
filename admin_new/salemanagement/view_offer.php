<?php 
include_once('function.php');

$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"frm",
			dateFormat:"%Y-%m-%d",
			cellColorScheme:"beige"

});

		new JsDatePick({
			useMode:2,
			target:"to",
			dateFormat:"%Y-%m-%d"

});
	};

</script>
</head>

<body>
<form name="form" action="update_offer.php" method="post">
<table>
<?php 
$q=mysql_query("select * from `promo_offer` where `id`='$id'");
$r=mysql_fetch_array($q);

?>
<tr>
     <td>Discount</td>
	 <td><?php echo $r['discount'];?>%</td>
</tr>
<tr>
     <td>Number</td>
	 <td><?php echo $r['number'];?></td>
</tr>
<tr>
     <td>From</td>
	 <td><input type="text" name="frm" id="frm" readonly="" value="<?php echo $r['from_date'];?>"/></td>
	 <td>To</td>
	 <td><input type="text" name="to" id="to" readonly="" value="<?php echo $r['to_date'];?>"/></td>
</tr>
<tr>
     <input type="hidden" name="uid" value="<?php echo $id;?>" >
     <td colspan="2"><input type="submit" name="submit" value="Update" /></td>
</tr>
</table>
</form>
</body>
</html>
