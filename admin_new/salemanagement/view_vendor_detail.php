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
function add_wh()
{
document.getElementById('insert').style.display="block";

}
</script>
<script type="text/javascript">
function search_invoice(key)
{

var res=document.getElementById('result');
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
res.innerHTML=result;

	}
}
xmlhttp.open("GET","search_vendor.php?q="+key,true);

xmlhttp.send();
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
									Vender Details<br/>
				</div>
<span style="padding-left:10px; padding-right:10px;">Filter Table</span><input type="text" name="search1" id="search1" onkeyup="search_invoice(this.value)" />
<?php 
if(isset($_GET['msg']))
{

$msg=$_GET['msg'];
}
else
{
$msg='';
}
?>
<table>
<tr><td style="font-size:18px;color:#CC0000;"><?php echo $msg;?></td></tr>
</table>
<table width="1000" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center;">
<th colspan="10"><input type="button" name="add_btn" value="Add New Vender" onclick="return add_wh();"/></th>
<tr>
   <td width="159">Email Id</td>
    <td width="93" >Password</td>
   <td width="48">Shop Name</td>
<td width="126">Phone Number</td>
<td width="91">Shop Address</td>
<td width="74" >Country</td>
<td width="59">State</td>
 <td  width="52">Zip</td>
<td  width="53" >Status</td>
<td>&nbsp;</td>
</tr>
</table>


<div style="display:none;" id="insert">
<form name="form" method="post" action="insert_vendor.php">

<table style="width:960px;">

<tr>
	 <td style="width:170px;" ><input type="text" name="email" style="width:170px;" /></td>
        
	 <td style="width:70px;" ><input type="password" name="pass" style="width:70px;"  /></td>
	 <td style="width:70px;" ><input type="text" name="name" style="width:70px;"  /></td>
	 <td style="width:90px;" ><input type="text" name="phn" style="width:90px;"  /></td>
	 <td style="width:90px;" ><textarea name="address" style="width:90px;" > </textarea></td>
	 <td style="width:60px;" ><input type="text" name="country" style="width:80px;"  /></td>
	 <td style="width:50px;" ><input type="text" name="pin" style="width:50px;"  /></td>
	 <td><input type="text" name="pin" style="width:60px" /></td>
         <input type="hidden" name="cid" value="<?php echo $r2['slno'];?>" />
	 <td colspan="2"><input type="submit" name="submit" value="Submit" style="margin-left:80px;"  /></td>
</tr>
</table>

</form>
</div>


<form name="form" action="update_vender_detail.php" method="post">
<table width="960" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center;">
<tbody id="result">
<?php 
$q=mysql_query("select p.*,l.`password`,l.`user_name` from `vendor_detail` p,`login` l where l.`user_name`=p.`email` and l.`status`='5'");
while($r=mysql_fetch_array($q))
//echo "select `name` from `vendor_detail` where `id`=$r[vendor_id]";
{
?>
<tr>
    
	<td width="130"><?php echo $r['email'];?></td>

	 <td width="50"><?php echo $r['password'];?></td>

	 <td width="73"><?php echo $r['name'];?></td>

	 

	 <td width="91"><?php echo $r['phone'];?></td>

	 <td width="76"><?php echo $r['address'];?></td>

	 <td width="71"><?php echo $r['country'];?></td>

	 <td width="59"><?php echo $r['state'];?></td>

	 <td width="45"><?php echo $r['pin'];?></td>

<?php 
if($r['status']=='0')
{
?>
<td width="41">Active</td>
<td width="147"><a href="disable_vendor.php?id=<?php echo $r['slno'];?>">Disable</a></td>
<?php }
else
{
 ?>
<td width="69">Disabled</td>
<td width="56"><a href="enable_vendor_action.php?id=<?php echo $r['slno'];?>">Enable</a></td>

<?php 
}
?>

    <input type="hidden" name="uid" value="<?php echo $id;?>" >
    <!--<td colspan="2"><input type="submit" name="submit" value="Update" /></td>-->
</tr>
<?php } ?>
</tbody>
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
