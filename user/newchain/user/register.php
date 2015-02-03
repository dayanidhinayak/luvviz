<?php
include_once('database.php');
$authcodeval=$_GET['auth'];
if (!$_SESSION['name'])
header("location:../login.php");
$refid=$_SESSION['name'];
?>
<html>
<head>
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
<body>

<div id="container">
						<div id="container_content" style="height:300px;">
								 <form name="register" action="registeraction.php" method="post" onsubmit="return validateForm()" >
									<input type="hidden" name="authcode" value="<?php echo $authcodeval; ?>"/>
								<table align="center">
								 <tr>
								 <td align="center"> Registration form</td></tr>
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
											<input type="text" name="userid" value="<?php echo $ui1?>" readonly>
								</td>
								 </tr>
									<tr>
								  <td> Reference id </td> 
								  <td><input type="text" name="referid" value="<?php echo $refid;?>" readonly></td>
								  </tr>
									 <tr>
								  <td> Down id
								  </td>
								  <td>
								  <select name="select" onChange="getposition(this.value)">
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
								  <td>  Password </td><td><input type="password" name="pass" value="" required></td>
									</tr>
									<tr>
									<td align="center"> Personal Details</td>                    <td align="center"> Provide your personal details. </td>
									</tr>
									<tr>
								   <td>Name 
								   </td>
								   <td><input type="text" name="uname" value="" required></td>    
								    </tr>
									<tr>
									<td>Sex: </td>
									<td><input type="text" name="sex" value="" required></td>    
									</tr>
									<tr>
									<td>DOB </td> <td><input type="text" name="dob" value="" placeholder="yyyy-mm-dd"></td>          
									<tr>
									<td>Father/Mother/Husband Name</td> <td><input type="text" name="father" value="" required></td>
									</tr>
									<tr>
									<td>Address</td> <td><input type="text" name="adder" value="" required></td>
									</tr>
									<tr>
									<td>City</td> <td><input type="text" name="city" value="" required></td>
									</tr>
									<tr>
									<td>State</td> <td><input type="text" name="state" value="" required></td>
									</tr>
									<tr>
									<td>Zip</td> <td><input type="text" name="zip" value=""></td>
									</tr>
									<tr>
									<td>Mobile no</td> <td><input type="text" name="mobile" value="" required></td>
									</tr>
									<tr>
									<td>Email</td> <td><input type="text" name="email" value="" required></td>
								   </tr>
								   <td align="center"> Nominee Details</td>                    <td align="center"> Provide your Nominee details. </td>
								   <tr>
								   
									<tr>
									<td>Nominee name </td> <td> <input type="text" name="nomi_name" value=""></td>
								   </tr>
								   
									<tr>
									<td>Nominee date of birth </td> <td> <input type="text" name="nomi_dob" value="" placeholder="yyyy-mm-dd"></td>
									</tr>
									<tr>
									<td>Relation</td> <td><input type="text" name="nomi_relation" value=""></td>
									</tr>
									<td align="center">Bank details</td>
									<td>&nbsp;  </td>
									</tr>
									<tr>
								   <td>Branch </td> <td><input type="text" name="branch" required></td>
								   </tr>
									<tr>
									<td>Account No </td> <td><input type="text" name="accno"  required></td>
									</tr>
									<tr>
									 <td>Account Holder Name</td> <td><input type="text" name="accname" required></td>
									 </tr>
									<tr>
									 <td>Bank</td> <td><input type="text" name="bank" required></td>
									 </tr>
									<tr>
									 <td>IFS Code</td> <td><input type="text" name="ifs" required></td>
									 </tr>
								   <tr>
								   <td align="center"> <input type="submit" name="submit" value="submit"></td>
								   </tr>								  
								</table>
								</form>
</div>
</div>


</body>
</html> 
