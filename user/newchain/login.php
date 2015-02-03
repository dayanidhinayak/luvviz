<?php
session_start();
include_once('database.php');

if(isset($_POST['submit']))
{
			        $un=$_REQUEST['uname'];
				$ps=$_REQUEST['password'];
			    $fet=mysql_query("select * from login_ch where username='$un' and password='$ps'");
		
			   if( $res=mysql_fetch_array($fet)){
		    
			    
			    $pass=$res['password'];
                            $stat=$res['status'];
			    
			    if($pass==$ps){
				$_SESSION['name']=$un;
			if(isset($_SESSION['name']))
			{
			    if($stat=='1')
			    {
			    header("location:admin/home.php");
			    }
			    if($stat=='0')
			    {
			    header("location:user/home.php");
			    }
	                }
					    }
			else{
			    $err="Wrong Username or Password";
			     }
   
			                                      }
		         else{
			    $err="Wrong Username or Password";
			     }
							
}
?>
<html>
<head>
<body>
    <form action="" name="frmlog" method="post">
	<table align="center">
		  <tr>
		    <td> login</td>
		  <tr>
		    <td><input type="text" name="uname"></td>
		  </tr>
		   <tr>
		      <td><input type="password" name="password"></td>
		     </tr>
		  <tr>
		     <td><input type="submit" name="submit" value="submit"></td>
		  </tr>
		     <tr>
			 <td><?php echo $err; ?> </td>
		     </tr> 
		    </tr>
		  
           </table>   
    </form>


</body>
</html> 