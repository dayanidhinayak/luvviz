<?php
ob_start();
session_start();
if (!$_SESSION['name'])
header("location:../login.php");
?>
<html>
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
</head>
<body>
<div id="box">
		<div id="box_bar">
	   	    <div class="box_top">
			<div class="box_con" style="width: auto;">
				<img src="pay.png" class="box_conimg" />
				<a href="autocode.php">Generate Authcode</a>
			</div>
			
			<div class="box_con wd">
				<img src="pay1.png" class="box_conimg"  />
				<a href="account.php">PAY</a>
			</div>
	    		
			<div class="box_con">
				<img src="gift.png" class="box_conimg"  />
				<a href="join.php">join Details</a>
			</div>
			<div class="box_con wd">
				<img src="join.png" class="box_conimg"  />
				<a href="prize.php">Prize Details</a>
			</div>
			
		    </div>
		    <div class="box_top">
			
			<div class="box_con">
				<img src="log.png" class="box_conimg"  />
				<a href="../logout.php">LOGOUT</a>
			</div>
		   </div>
		</div>
	</div>	 
   <!-- <form>
    <table align="center">
<tr>
    <td><a href="autocode.php">Generate Authcode</a></td>

    <td><a href="account.php">PAY</a></td>

    <td><a href="join.php">join Details</a></td>

    <td><a href="prize.php">Prize Details</a></td>

    <td><a href="../logout.php">LOGOUT</a></td>
</tr>
    </table>
    </form>-->
</body>
</html> 