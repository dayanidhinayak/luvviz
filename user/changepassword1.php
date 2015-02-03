<?php
include_once("function.php");
$id=$_SESSION['user_id'];


$password = $_POST['cpwd'];
$newpassword = $_POST['npwd'];
$confirmnewpassword = $_POST['cnpwd'];

$result = mysql_query("SELECT `password` FROM  `user_details` WHERE email='$id'");

if(!$result)
        {
    
	        echo "The username entered does not exist!";
	    }
	    else
	        if($password != mysql_result($result, 0))
            {
	            echo "Entered an incorrect password";
                
	            }
                if($newpassword == $confirmnewpassword)
                {
                    
	        $sql = mysql_query("UPDATE `user_details` SET password = '$newpassword' WHERE email = '$id'");      
	           }
	     
	    if($sql)
        {
	       echo "Congratulations, password successfully changed!";
           //echo "<script type='text/javascript'>alert('Congratulations, password successfully changed!')</script>";
	    }
	    else
        {
	        echo "New password and confirm password must be the same!";
            //echo "<script type='text/javascript'>alert('New password and confirm password must be the same!')</script>";
	    }
       header("location:changepassword.php");
        
	     
	  ?>





