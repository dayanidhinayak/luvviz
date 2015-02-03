<?php
include_once('database.php');
ob_start();
//session_start();
if (!$_SESSION['name'])
header("location:../login.php");
ini_set('display_errors',0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	
	 <link href="../style.css" type="text/css" rel="stylesheet" />
	<style>
	#box{
width:100%;
height:auto;
float:left;
background:#ededed;
margin-top:50px;
padding-top:70px;
padding-left:200px;
border:1px solid #cdcdcd;
}
#box_bar{
width:1000px;
margin:auto;
}
.box_top{
width:1000px;
height:auto;
float:left;
margin-bottom:15px;
}
.box_con{
width:130px;
padding:20px;
float:left;
background:#333;
margin-right:30px;
margin-bottom:20px;
border-radius:4px;
padding-left:10px;
}
.wd{
width:155px;
}
.box_con a{
color:#fff;
text-decoration:none;
font-family:arial;
font-size:15px;
font-weight:bold;
}
.box_conimg{
float:left;
 width:20px;
 margin-right:10px;
}
	</style>
	<title>...:::LUVVIZ:::...</title>
    </head>
<body>
    <?php
     $id=$_SESSION['name'];
    $fet=mysql_query("select * from `register` where `userid`='$id'");
    $res=mysql_fetch_array($fet);
    $name=$res['name'];
    ?>
       <div id="box">
		<div id="box_bar">
			<div style="width:500px; height:auto; float:left;  margin-bottom:20px; co…4479CA; text-align:center; font-weight:bold;">
			Wel come &nbsp;<?php echo $name; ?>
			</div>
			<div style="width:1000px; height:auto; float:left;">
	   	    <div class="box_top">
			
			<div class="box_con">
				<img src="images/add1.png" class="box_conimg" />
				<a href="create_new_user.php">Creat User</a>
			</div>
			
			<div class="box_con wd">
				<img src="images/name.png" class="box_conimg"  />
				<a href="tree.php">Tree view</a>
			</div>
	    		
			<div class="box_con">
				<img src="images/account.png" class="box_conimg"  />
				<a href="useraccount.php">Account</a>
			</div>
			<div class="box_con wd">
				<img src="images/update.png" class="box_conimg"  />
				<a href="update.php">Update</a>
			</div>
			
		    </div>
		    <div class="box_con">
				<img src="images/gift.png" class="box_conimg" style="width:18px;" />
				<a href="prize.php">Gift</a>
			</div>
			<div class="box_con">
				<img src="images/log.png" class="box_conimg" style="width:18px;" />
				<a href="../logout.php">Logout</a>
			</div>
		   </div>
		   </div>
		</div>
	</div>	 
    <!--<form>
    <table align="center">
<tr>
    <td><a href="create_new_user.php">Creat User</a></td>

    <td><a href="tree.php">Tree view</a></td>

    <td><a href="../logout.php">LOGOUT</a></td>

    <td><a href="useraccount.php">ACCOUNT</a></td>

    <td><a href="update.php">update</a></td>

    <td><a href="paymentstatus.php">payment status</a></td>

    <td><a href="prize.php">gift</a></td>
</tr>
    </table>
    </form>-->
</body>
</html> 