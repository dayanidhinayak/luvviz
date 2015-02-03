<?php

include_once('../function.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

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

	 text-shadow: 0 1px 0 #FFFFFF;

	 border-top:1px solid #CCCCCC;

	 	}

th{

background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);

text-align:left;

}

</style>



<script src="jquery-1.8.3.js"></script>

<script type="text/javascript">



function confirmation_selected() {

	var answer = confirm("Delete Selected Items?");

	if (answer){

		return true;

	}

	else{

		return false;

	}

}



</script>



<script>

$(document).ready (function () {

$('.btnDelete').click(function () {



var hdnvalue=$(this).parent().find("#hiddenvalue").val();



if(hdnvalue!="")

{

var msg=confirm("Are you sure You Want To Delete This Category??");



			 if(msg==true)



					  {



						$.ajax({

                    url: "delete_brand.php?id="+hdnvalue,

					success: function (data) {

					//alert(data);

					var str=data.split("|");

					var dt=str[0];

					var nxt=str[1];

					//alert(nxt);

					alert(dt);

					if(dt=="Products are not available in this category....")



				{

					$("#"+nxt).remove();

					return true;



				}

					

					

					}

					  

					

					

		});

		

		

		 }



					   else



					   {



					   return false;



					   



					   }

					   }

			







});

});

</script>



<script>

function display(val)

{



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

document.getElementById('ajaxvalue').innerHTML=result;

}

}

xmlhttp.open("GET","display_brand.php?q="+val,true);



xmlhttp.send();



}

</script>







<script>



function enable(id,status)



{



var x="ena"+id;



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



document.getElementById(x).innerHTML=result;







	}



}



xmlhttp.open("GET","enable_product.php?q="+id+"&status="+status,true);







xmlhttp.send();











}



</script>



<script type="text/javascript">



function confirmation_selected() {

	var answer = confirm("Delete Selected Items?");

	if (answer){

		return true;

	}

	else{

		return false;

	}

}



</script>

</head>



<body>

		<?php
		include_once("topbar.php");
		include_once("../menubar.php");
		?>

		

		<div id="container">

			

			

		  <div id="container_content" style="margin-top:30px; background:none; border:none;">

		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">

		<div style="float:left; padding-left:1%;"><h3>Catalog <img src="images/separator1.png" /> Brands </h3></div>

		

		<!--<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><img src="images/addnew.png" /><br/>Add new Values</div>-->

			<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="add_brand.php" ><img src="images/addnew.png" /></a><br/>Add new Brand </div>

			</div>

			

			<div style="width:100%; height:auto; float:left; margin-top:2%; font-family:Arial, Helvetica, sans-serif; font-size:13px;">

			<input type="button" name="button" value="Filter" id="filter" onclick="return getajax();" /> 

			<input type="button" name="button" value="Reset"  onclick="window.location.reload()"/> 

			

			</div>

			

			

			<div class="box1" style="width:100%; margin-left:0px;">

			<form name="form1" id="form1" method="post" action="selected_deletecat.php">

				<table cellpadding="10" cellspacing="0" style="width:100%;">

					<tr>

						<th><input type="checkbox"  /></th>

						<th>ID</th>

						

						<th>Name</th>

						
						<th>Displayed</th>

						<th>Action</th>

					</tr>

					<tr>

						<td>-</td>

						<td><input type="text" name="" style="width:50px; border:1px solid #efefef;" id="idval" /></td>

						

						<td><input type="text" name="" style="width:600px; border:1px solid #efefef;" id="nameval" /></td>

						

						<td align="center">&nbsp;</td>

						<td align="center">

						

					<select onchange="return display(this.value);">

							<option value="" ></option>

							<option value="1">Yes</option>

							<option value="0">No</option>

						</select></td>

						<td>-</td>

					</tr>

					<tbody id="ajaxvalue">

					<?php

					$slno=1;

					$query=mysql_query("select * from `brand`");

					while($result=mysql_fetch_array($query))

					{

					

					?>

					<tr id="<?php echo $result['id'];?>">

						<td><input type="checkbox"  name="product[]" value="<?php echo $result['id'];?>" /></td>

						<td><?php echo $slno?></td>

						

						<td><?php echo $result['brand_name'];?> &nbsp;&nbsp; <img src="<?php echo $result['icon'];?>" style="height:50px; width:50px;" /></td>

						

						<?php

						if($result['status']==1)

						{

						

						

						?>

						<td id="ena<?php echo $result['id'];?>"><img src="../images/tick.png" onclick="return enable(<?php echo $result['id'];?>,<?php echo $result['status']?>);" /></td>

						<?php

						}

						else

						{

						?>

						<td id="ena<?php echo $result['id'];?>"><img src="../images/disabled.gif" onclick="return enable(<?php echo $result['id'];?>,<?php echo $result['status']?>);"/></td>

						<?php

						}

						?>

						<td><a href="update_brand.php?id=<?php echo $result['id'];?>"><img src="../images/edit.gif" /></a> &nbsp;

						<img src="../images/delete.gif" class="btnDelete"  />&nbsp;

						<input type="hidden" name="hiddenvalue" id="hiddenvalue" value="<?php echo $result['id'];?>" />

						</td>

					</tr>

					<?php

					$slno++;

					}

					?>

				</tbody>	

				</table>

				

			

			</form>

			</div>

			

			

		  </div>

		</div>

		

		<?php
		include_once("../footer.php");
		?>



</body>

</html>
