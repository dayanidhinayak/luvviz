<?php 

include_once('function.php');
$pid=$_GET['id'];

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
//alert(val);
$(function(){$('#'+val).ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
});});


}
</script>
<script>
function getval(x,idval)
{
alert(x);
if(x=="colour")
{
document.getElementById(idval).innerHTML=
'<input name="name[]" id="name'+idval+'" class="color" onclick="return xyz(&#39;'+'name'+idval+'&#39;);">';
}
else
{
document.getElementById(idval).innerHTML=
'<input name="name[]" id="name'+idval+'" >';


}

}
</script>

        <script>
		var input=0;
		
            $(document).ready (function () {
	
			
			$('.res').hide();
                $('.btnAdd').click (function () {   
input++;    
                    $('.buttons').append('<div class="div1" style="height:50px;  width:600px; float:left; margin-top:20px;"><select name="varient[]" onchange="return getval(this.value,'+input+');"><option value="">Select</option><?php $query=mysql_query("select * from `varient_table`"); while($res=mysql_fetch_array($query)){echo "<option value=$res[varient_name]> $res[varient_name]</option>" ; }?></select><span id="'+input+'"></span><input type="button" class="btnRemove" value="Remove"></div>'); 
					
					
					      // end append
					
					//$('div').addClass("div1 ui-state-default");
					
					$('div .btnRemove').click (function () { 
						$(this).parent().remove();    
					}); // end click
					
					
					
					
							
						
						
                }); // end click 
				
				        

            }); // end ready
        </script>

</head>



<body>

<form name="form" action="insert_productvarient.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="product_id" value="<?php echo $pid?>" />
<div class="buttons"></div>

 <input type="button" class="btnAdd learnmore" value="Add NewVarient" style="border:none;">

<input type="submit" name="submit" value="Submit" />



</form>

</body>

</html>
