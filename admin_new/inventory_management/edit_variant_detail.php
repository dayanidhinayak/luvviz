<?php 

include_once('function.php');
$pid=$_GET['id'];
$vname=$_GET['vname'];
$vvalue=$_GET['vvalue'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />

<title></title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="css/layout.css" />
    <title>ColorPicker - jQuery plugin</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/colorpicker.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
   
    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>
<script type="text/javascript">
function xyz(val)
{

$(function(){$('#'+val).ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {

		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
  //alert($(this).ColorPickerSetColor(this.value));
	}
})
.bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
});});


}
</script>

      
</head>



<body>

<form name="form" action="update_productvarient.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="product_id" value="<?php echo $pid?>" />
<div class="buttons"></div>

 <div class="div1" style="height:50px;  width:600px; float:left; margin-top:20px;">

<?php
$q=mysql_query("select `varient_name`,`description` from `product_varient` where `product_id`='$pid' and `varient_name`='$vname' and `description`='$vvalue'");
$r=mysql_fetch_array($q);
?>
<input type="text" name="varient" value="<?php echo $r['varient_name'];?>" readonly="" />

<?php 

if($r['varient_name']=='colour')
{
?>
<input name="v_value" id="name<?php echo $pid;?>" class="color" style="background:#<?php echo $r['description'];?>" onclick="return xyz(&#39;'+'name'+<?php echo $pid;?>+'&#39;);" />
<?php 
}
else
{
?>
<input type="text" name="v_value" value="<?php echo $r['description'];?>" />
<?php } ?>
</div>

<input type="submit" name="submit" value="Submit" />



</form>

</body>

</html>
