<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Luvviz adminpanel</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	tr{
	height:35px;
	 text-shadow: 0 1px 0 #FFFFFF;
	 	}
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
}
</style>
<script type='text/javascript' src='jquery.min.js'></script>

</head>

<body>

		
		
		<?php
		include_once('topbar.php');
		include_once('../menubar.php');?>
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<!--<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3><!--Catalog <img src="../images/separator1.png" /> Products</h3></div>
			
			</div>-->


<div style="width:100%; height:auto; float:left;">
<h3>Alredy Added Categories</h3>
    <form method="post" action="prio_insert.php" >
        <table style="width:960px; height:auto; float:left;">
            <?php
            $q2=mysql_query("select * from `category` where `pc_status`='1' ORDER BY id") or die(mysql_error());
           $num_rows = mysql_num_rows($q2);
                                            while($r2=mysql_fetch_array($q2))
            
                                            {
                                    ?>
            <tr>
                <td>
                    <?php echo $r2['category_name'];?><input type="hidden" value="<?php echo $num_rows;?>" name="hdnval"/>
                </td>
                <td>
                    <input type="text" name="prio<?php echo $r2['id'];?>" value="<?php echo $r2['mpc_priority'];?>" style="width:150px; padding: 5px;height:25px; border: 1px solid #cccccc;"/>
                </td>
            </tr>
            
            <?php } ?>
            <tr>
                <td>
                    <input type="submit" value="Submit" style="width:70px; height: 30px; float:left; border-radius:5px;"/>
                </td>
            </tr>
        </table>
    </form>
</div>
</div>
                </div>
		  <?php
		include_once("../footer.php");
		?>
</body>
</html>
