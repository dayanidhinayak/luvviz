<?php
include_once('database.php');
?>
<html>
<head>
     <link rel="stylesheet" href="style.css" type="text/css" media="screen" >
</head>
<body style="background: #f0f0f0;">
   <div style="width: 100%; height: auto;  float: left;">
      <div style="width:500px; height: auto; margin: auto; background-color: #f2f7f6;">
		    <div id="container_content" style=" width:500px; height: auto;">
			<h1 class="header" style="margin-left: 1%;">Forgot Password</h1>
			<form name="myform" action="cpass.php" method="post">
			   <table style="width: 100%;">
			      <tr>
				 <td>User Id</td>
				 <td><input type="text" name="userid" value="" class="textbox" autofocus required></td>
			      </tr>
			      <tr>
				 <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
			      </tr>
			   </table>
			</form>
	 </div>
      </div>
   </div>
</body>
</html> 