<?php
include_once("function.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Luvviz adminpanel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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


  <script src="js1/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js1/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js1/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
  
    <script src="js1/jquery-ui/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.draggable.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.ui.dialog.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.blind.min.js" type="text/javascript"></script>
    <script src="js1/jquery-ui/jquery.effects.explode.min.js" type="text/javascript"></script>
    <!-- jQuery dialog end here-->
    <script src="js1/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <!--Fancy Button-->
    <script src="js1/fancy-button/fancy-button.js" type="text/javascript"></script>
    <script src="js1/setup.js" type="text/javascript"></script>
    <!-- Load TinyMCE -->
    <script src="js1/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
           
           
            
        });
    </script>
    
<title>Untitled Document</title>
</head>

<body>

		<?php
		include_once('topbar.php');
		include_once('../menubar.php');?>
		<div id="container">
			
			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  <div style="margin-top:30px; background:none; border:none; width:700px; height:auto; float:left;">
<form name="form" action="insert_footer.php" method="post" >
<table>
<tr>
     <td>Page Name:</td>
      <td><input type="text" name="page"  /></td>
</tr>
<tr>
     <td>Heading:</td>
      <td><input type="text" name="head"  /></td>
</tr>
<tr>
     <td>Type</td>
      <td><select name="type">
	      <option value="1">Information</option>
		  <option value="2">Customer Service</option>
	  </select>
	  </td>
</tr>

<tr>
     <td>Content</td>
      <td><textarea class="tinymce" name="content" style="width:700px; height:350px; background:#ffffff; border:1px solid #c6c6c6;">
          </textarea>
      </td>
</tr>
<tr>
    <td> <input type="submit" value="Submit" name="submit"  /></td>
</tr>
</table>

</form>
</div>
 <div style="margin-top:30px; margin-left:160px; background:none; border:none; width:300px; height:auto; float:left;">
 <table style="border:1px solid #cccccc;">
 <tr><th>Name</th>
 <th>Type of the page</th>
 <th>Action</th>
 </tr>
 <?php
 $que=mysql_query("select * from `footer`")or die(mysql_error());
 while($res=mysql_fetch_array($que))
 {
 
 ?>
 <tr><td><?php echo $res['name'];?></td>
 
 <td><?php if($res['type']=='1')
 echo "Information";
 else
 echo "Customer Service";
 ?></td>
 <td><a href="edit_footer.php?id=<?php echo $res['id']?>">Edit</a>&nbsp;&nbsp;<a href="delete_footer.php?id=<?php echo $res['id']?>">Delete</a></td>
 </tr>
 <?php
 }
 ?>
 </table>
 
 </div>
</div>
</div>
		<?php
		include_once("../footer.php");
		?>
</body>
</html>
