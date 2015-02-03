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
<script src="jquery.min.js"></script>
        <script>
            $(document).ready (function () {
			
			$('.res').hide();
                $('.btnAdd').click (function () {       
                    $('.buttons').append('<div class="div1" style="height:50px;  width:600px; float:left;"><input type="text" name="name[]" id="name" ><br /><input type="button" class="btnRemove" value="Remove"><br></div>'); 
					
					      // end append
					
					//$('div').addClass("div1 ui-state-default");
					
					$('div .btnRemove').last().click (function () { 
						$(this).parent().last().remove();    
					}); // end click
					
					
					
					
							
						
						
                }); // end click 
				
				        

            }); // end ready
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
									Add Varient<br/>
				</div>
<form name="form" action="insert_varient.php" method="post" enctype="multipart/form-data">





<div class="buttons"></div>



   <input type="button" class="btnAdd learnmore" value="Add NewVarient" style="border:none;">

	









<input type="submit" name="submit" value="Submit" />


<div style="float:left;">

<table>
     <th>Existing Variants</th>
<?php 
$q=mysql_query("select `varient_name` from `varient_table`");
while($r=mysql_fetch_array($q))
{
?>
<tr>
   <td><?php echo $r['varient_name'];?></td>
</tr>
<?php  } ?>
</table>

</div>


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
