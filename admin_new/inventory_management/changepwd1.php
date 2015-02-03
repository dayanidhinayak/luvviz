<?php
include_once("../function.php");
$id=$_SESSION['user'];


$password = $_POST['cpwd'];
$newpassword = $_POST['npwd'];
$confirmnewpassword = $_POST['cnpwd'];

$result = mysql_query("SELECT `password` FROM  `login` WHERE user_name='$id'");

if(!$result)
        {
    
	       $a="The username entered does not exist!";
header("Location: changepwd.php?status=".$a);   

	    }
	    else
	        if($password != mysql_result($result, 0))
            {
	            $a="Entered an incorrect password";
header("Location: changepwd.php?status=".$a);   
                
	            }
                if($newpassword == $confirmnewpassword)
                {
                    
	        $sql = mysql_query("UPDATE `login` SET password = '$newpassword' WHERE user_name = '$id'");      
	           }
	     
	    if($sql)
        {
	        $a="Congratulations, password successfully changed!";
header("Location: changepwd.php?status=".$a);   
	    }
	    else
        {
	        $a="New password and confirm password must be the same!";
header("Location: changepwd.php?status=".$a);   
	    }
        
	  
	  ?>





