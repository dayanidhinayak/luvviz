<?php
include_once('database.php');
$authcodeval=$_GET['auth'];
if (!$_SESSION['name'])
header("location:../login.php");
$refid=$_SESSION['name'];
$fet="select * from `authcode` where `code`='$authcodeval'";
$query=mysql_query($fet);
$res=mysql_fetch_array($query);
if($res['status']==0){
    $updt="UPDATE authcode SET `status` = '1' WHERE `code` = '$authcodeval'";
    mysql_query($updt);
?>
<html>
<head>
<link href="../style.css" type="text/css" rel="stylesheet" />
 <script>
 function getposition(userid)
 {

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {

    if(xmlhttp.responseText)
    {
     
      document.getElementById("position").innerHTML=xmlhttp.responseText;
    }
    }
  }

xmlhttp.open("GET","position.php?user="+userid,true);
xmlhttp.send();
}

//-------- form valdation-------- //

function validateForm()
{
 var phone = document.forms["register"]["mobile"].value;
    
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
  if(phone.match(phoneno))  
     {           
     }  
   else  
     {  
       alert("Not a valid Phone Number");  
       return false;  
     }  
 	
	
var x=document.forms["register"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Please Enter a Valid Email Address");
  return false;
  }
}
 </script>
</head>
<body style="background:url(images/bg.png);">
 <?php
include_once("topbar1.php");
 ?>

	<div id="content_bar" style="height:auto;">
		<div id="content_con">
			<div id="content_conbox" style="margin-left:140px;  background: #fff;
    border:1px solid #cdcdcd;
    border-bottom-left-radius:3px;
    border-bottom-right-radius: 3px;
     box-shadow: 0 0 3px #999;">
								 <form name="register" action="registeraction.php" method="post" onsubmit="return validateForm()" >
									<input type="hidden" name="authcode" value="<?php echo $authcodeval; ?>"/>
								<table align="center" cellpadding="0" cellspacing="10">
								<tbody style="border:1px solid #ededed;" >
								 <tr>
								 <td>
								 <h3 style="border-bottom:1px solid #ededed; width:300px; height:30px; font-size:17px; color:#298F1E; font-weight:normal;">
								 Registration form
								 </h3>
								 </td>
								 </tr>
								 <tr><?php
								  $fet="select max(userid) as id from `register`";
											$qur=mysql_query($fet);
											$res=mysql_fetch_array($qur);
											$ui=$res['id'];
										   $ui1=$ui+1;
											?>
								  <td> 
								  			User id
								</td>
								<td>
											<input type="text" name="userid" value="<?php echo $ui1?>" readonly class="textbox">
								</td>
								 </tr>
									<tr>
								  <td> Reference id </td> 
								  <td><input type="text" name="referid" value="<?php echo $refid;?>" readonly class="textbox"></td>
								  </tr>
									 <tr>
								  <td> Down id
								  </td>
								  <td>
								  <select name="select" onChange="getposition(this.value)" class="textbox">
								   <option value="0">select</option> 
								  <?php
									  $uid1="user".$refid;
									  $qmax=mysql_query("select max(mid) as mmid from `register`");
									  $rmax=mysql_fetch_array($qmax);
									  $maxmid=$rmax['mmid'];
									  
									  $cmid=$_SESSION['mid'];
									  //while($cmid<=$maxmid)
									 // {
								$query=mysql_query("select * from `$uid1` where `left` != 1 or `right`!= 1") or die(mysql_error());
								// $query=mysql_query("select * from `register` where (`left` != 1 or `right`!= 1) and mid='$cmid' ") ;
								while($res1=mysql_fetch_array($query))
								{
								
								 ?>
								<option value="<?php echo $res1['down']; ?>"><?php echo $res1['down']; ?></option>
								<?php
								//$cmd++;
								 }
								?>
									</select>
								 </td>
								  </tr>
                                                                        
   <tr>
     <td id="position"></td>
    </tr>
									<tr>
								  <td>  Password </td><td><input type="password" name="pass" value="" required class="textbox"></td>
									</tr>
									</tbody>
									<tbody style="line-height:3;">
									<tr>
									<td>
										<h3 style="border-bottom:1px solid #ededed; width:300px; height:43px; font-size:17px; color:#298F1E; font-weight:normal;">
											Personal Details
										</h3>
									
									</td>                     <!--<td align="center"> Provide your personal details. </td>-->
									</tr>
									<tr>
								   <td>Name 
								   </td>
								   <td><input type="text" name="uname" value="" required class="textbox"></td>    
								    </tr>
									<tr>
									<td>Sex: </td>
									<td><input type="text" name="sex" value="" required class="textbox"></td>    
									</tr>
									<tr>
									<td>DOB </td> <td><input type="text" name="dob" value="" placeholder="yyyy-mm-dd" class="textbox"></td>          
									<tr>
									<td>Father/Mother/Husband Name</td> <td><input type="text" name="father" value="" required class="textbox"></td>
									</tr>
									<tr>
									<td>Address</td> <td><input type="text" name="adder" value="" required class="textbox"></td>
									</tr>
									<tr>
									<td>City</td> <td><input type="text" name="city" value="" required class="textbox"></td>
									</tr>
									<tr>
									<td>State</td> <td><input type="text" name="state" value="" required class="textbox"></td>
									</tr>
									<tr>
									<td>Zip</td> <td><input type="text" name="zip" value="" class="textbox"></td>
									</tr>
									<tr>
									<td>Mobile no</td> <td><input type="text" name="mobile" value="" required class="textbox"></td>
									</tr>
									<tr>
									<td>Email</td> <td><input type="text" name="email" value="" required class="textbox"></td>
								   </tr>
								   </tbody>
								   <tbody style="line-height:3;">
								   <td>
										<h3 style="border-bottom:1px solid #ededed; width:300px; height:43px; font-size:17px; color:#298F1E; font-weight:normal;">
											Nominee Details
										</h3>
											
								   </td>                    <!--<td align="center"> Provide your Nominee details. </td>-->
								   <tr>
								   
									<tr>
									<td>Nominee name </td> <td> <input type="text" name="nomi_name" value="" class="textbox"></td>
								   </tr>
									<tr>
									<td>Relation</td> <td><input type="text" name="nomi_relation" value="" class="textbox"></td>
									</tr>
									</tbody>
									<tbody style="line-height:3;">
									<td>
										<h3 style="border-bottom:1px solid #ededed; width:300px; height:43px; font-size:17px; color:#298F1E; font-weight:normal;">
											Bank details
										</h3>
										
									</td>
									<td>&nbsp;  </td>
									</tr>
									 <tr>
									 <td>Bank</td> <td><input type="text" name="bank"  class="textbox"></td>
									 </tr>
									<tr>
									<td>Branch </td> <td><input type="text" name="branch"  class="textbox"></td>
									</tr>
									<tr>
									<td>Account No </td> <td><input type="text" name="accno"   class="textbox"></td>
									</tr>
									<tr>
									 <td>Account Holder Name</td> <td><input type="text" name="accname"  class="textbox"></td>
									 </tr>
									<tr>
									 <td>IFS Code</td> <td><input type="text" name="ifs"  class="textbox"></td>
									 </tr>
									<tr>
									 <td>PAN card</td> <td><input type="text" name="pan"  class="textbox"></td>
									 </tr>
								   <tr>
								   <td></td>
								   <td> <input type="submit" name="submit" value="submit" class="button"></td>
								   </tr>
									</tbody>								   
								</table>
								</form>
			</div>
		</div>
	</div>
<?php
	include_once("footer.php");
	?>
</body>
</html> <?php }else{ header('location:home.php');}?>
