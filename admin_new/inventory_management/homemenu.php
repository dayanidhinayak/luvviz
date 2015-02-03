<?php
include_once("../function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>


<link rel="stylesheet" href="stylemenu.css" type="text/css" media="screen" />


<style>
	ul {
	width:200px;
	}
	li ul{
	line-height:1.5;
	width:220px;
	float:left;
	}
	
	li ul li{
	line-height:1.5;
	width:200px;
	float:left;
	}
</style>
</head>
<body>


<div style="width:100%; height:30px; margin:auto; background:#e4e1d0;">

						<ul id="nav">
						<?php
						$q=mysql_query("select * from `category` where `parent`='0' ");
						while($res=mysql_fetch_array($q))
						{
						?>

								

								<li>

									<a href="#"><?php echo $res['category_name'];?></a>

									<ul>
									<?php
									$q1=mysql_query("select * from `category` where `parent`='$res[id]'");
									while($r1=mysql_fetch_array($q1))
									{
									
									?>

										<li onkeyup="return getvalues(<?php echo $r1['id']?>);"><?php echo $r1['category_name'] . "&nbsp;" . "&nbsp;";?></li> 

										<?php
										}
										?>
										
										
									</ul>
									
								</li>
						<?php
							}
						?>

				</ul>

</div>



	



</body>
</html>
