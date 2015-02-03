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
function edit_category(catid)
{

document.getElementById("editable"+catid).style.display="block";

}
</script>



<script>
function add_wh()
{
document.getElementById('insert').style.display="block";

}
</script>
<script type="text/javascript">
function search_invoice(key)
{
//alert(key);
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
xmlhttp.open("GET","search.php?q="+key,true);

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
									POS Details<br/>
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
</table>
<table width="1000" style="font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center;">
<th colspan="11"><input type="button" name="add_btn" value="Add New POS" onclick="return add_wh();"/></th>

<tr>
   <td width="159">Email Id</td>
      <td width="93" >Password</td>
     
 <td width="48">Vendor Name</td>
  <td width="126">Name</td>
<td width="91" >Phone Number</td>
<td width="85"  >Address</td>
 <td width="42"  >Country</td>
 <td width="81"  >State</td>
<td width="53"  >Zip</td>
<td width="85"  >Status</td>
<td width="89" >&nbsp;</td>
</tr>

</table>
















<form name="form" method="post" action="insert_pos.php">
<table style="width:960px;">
<tr style="display:none; width:960px; " id="insert">
	 <td ><input type="text" name="email2" style="width:170px"   /></td>
	 <td ><input type="password" name="pass" style="width:70px" /></td>

<td ><select name="vendor" style="width:70px;"  >
  <option value="0"><?php echo $_SESSION['user']?></option>
       <?php 
	 $que=mysql_query("select * from `vendor_detail` where `status`='0'");
	 while($rs=mysql_fetch_array($que))
	 {
	 ?>
       <option value="<?php echo $rs['slno'];?>"><?php echo $rs['name'];?></option>
       <?php } ?>
     </select></td>

	 <td width="90"><input type="text" name="name" style="width:90px" /></td>
	 <td width="100"><input type="text" name="phn" style="width:110px"/></td>
	 <td width="60"><textarea name="address" style="width:60px" > </textarea></td>
	 <td width="60"><input type="text" name="country" style="width:60px"/></td>
	 <td width="70"><input type="text" name="state" style="width:70px"/></td>
	 <td width="60"><input type="text" name="pin" style="width:60px"/></td>
     <input type="hidden" name="cid" value="<?php echo $r2['slno'];?>" />
	 <td colspan="2"><input type="submit" name="submit" value="Submit" style="margin-left:50px;"  /></td>
</tr>
</table>

</form>




<table style="width:960px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-align:center;">
  <tbody id="result">
    <?php 
//echo "select p.*,l.`password`,l.`user_name` from `pos_user_detail` p,`login` l where p.`slno`='$id' and l.`user_name`=p.`email` and `status`='2'";
$q=mysql_query("select p.*,l.`password`,l.`user_name` from `pos_user_detail` p,`login` l where l.`user_name`=p.`email` and l.`status`='2'");
while($r=mysql_fetch_array($q))
{
//echo "select `name` from `vendor_detail` where `slno`='$r[vendor_id]'";
$qq=mysql_query("select `name` from `vendor_detail` where `slno`='$r[vendor_id]'");
$rs=mysql_fetch_array($qq);
?>
    <tr style="display:none;" id="editable<?php echo $r['slno'];?>">
      <form name="form" action="update_pos_detail.php" method="post">
        <td width="130"><input type="text" name="email" value="<?php echo $r['email'];?>" /></td>
        <td><input type="password" name="pass2" value="<?php echo $r['password'];?>" /></td>
        <?php 
if($r1['status']==1 || $r1['status']==4)
{
$q2=mysql_query("select `slno` from `admin_detail` where `email`='$_SESSION[user]'");
$r2=mysql_fetch_array($q2);
?>
        <td><select name="select">
          <?php 
	 $que=mysql_query("select * from `vendor_detail` where `status`='0'");
	 while($rs=mysql_fetch_array($que))
	 {
	 ?>
          <option value="<?php echo $rs['slno'];?>"><?php echo $rs['name'];?></option>
          <?php } ?>
        </select>        </td>
        <?php } 
else
{
$q2=mysql_query("select `slno` from `vendor_detail` where `email`='$_SESSION[user]'");
$r2=mysql_fetch_array($q2);

?>
        <input type="hidden" name="vendor2" value="<?php echo $r2['slno'];?>" />
        <td width="70"> <input type="text" name="ven2" value="<?php echo $_SESSION['user']?>" readonly="" /></td>
        <?php } ?>
        <td   width="70" ><input type="text" name="name2" value="<?php echo $r['name'];?>" /></td>
        <td  width="70" ><input type="text" name="phn2" value="<?php echo $r['phone'];?>" /></td>
        <td  width="100" ><textarea name="textarea"> <?php echo $r['address'];?></textarea></td>
        <td width="100"><input type="text" name="country2" value="<?php echo $r['country'];?>" /></td>
        <td width="50"><input type="text" name="state2" value="<?php echo $r['state'];?>" /></td>
        <td width="30"><input type="text" name="pin2" value="<?php echo $r['pin'];?>" /></td>
        <td width="30"><input type="hidden" name="hdn" value="<?php echo $r['slno'];?>" /></td>
        <td width="30"><input type="submit" name="submit2" value="Update" /></td>
      </form>
    </tr>
    <tr>
      <td id="email" width="180"><?php echo $r['email'];?></td>
      <td><?php echo $r['password'];?></td>
      <td><?php echo $rs['name'];?></td>
      <td><?php echo $r['name'];?></td>
      <td><?php echo $r['phone'];?></td>
      <td><?php echo $r['address'];?></td>
      <td ><?php echo $r['country'];?></td>
      <td ><?php echo $r['state'];?></td>
      <td ><?php echo $r['pin'];?></td>
      <?php 
if($r['status']=='0')
{
?>
      <td><a href="disable_pos.php?id=<?php echo $r['slno'];?>">Disable</a></td>
      <?php }
else
{
 ?>
      <td><a href="enable_pos_action.php?id=<?php echo $r['slno'];?>">Enable</a></td>
      <?php 
}
?>
      <td><input type="hidden" name="uid" value="<?php echo $id;?>" />
          <input type="button" name="submit2" value="Edit" onclick="return edit_category(<?php echo $r['slno'];?>);" /></td>
      <!--<td colspan="2"><input type="submit" name="submit" value="Update" /></td>-->
    </tr>
    <?php } ?>
  </tbody>
  <tbody id="result">
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
