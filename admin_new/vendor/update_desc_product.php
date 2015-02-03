<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
	 
	 	}
		tr th{
		background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
    color: #333333;
    font-size: 14px;
	font-family:Arial, Helvetica, sans-serif;
 
    line-height: 29px;
    margin: 0;
    padding: 0 0 0 10px;
	text-align:left;
    text-shadow: 0 1px 0 #FFFFFF;
		}

</style>

<script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <!--jQuery Date Picker-->
    <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.progressbar.min.js" type="text/javascript"></script>
    <!-- jQuery dialog related-->
    <script src="js/jquery-ui/external/jquery.bgiframe-2.1.2.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.draggable.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.position.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.resizable.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.ui.dialog.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.blind.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui/jquery.effects.explode.min.js" type="text/javascript"></script>
    <!-- jQuery dialog end here-->
    <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <!--Fancy Button-->
    <script src="js/fancy-button/fancy-button.js" type="text/javascript"></script>
    <script src="js/setup.js" type="text/javascript"></script>


<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setupProgressbar('progress-bar');
            setDatePicker('date-picker');
            setupDialogBox('dialog', 'opener');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
</head>

<body>
		
		<?php
		//include_once("topbar.php");
		//include_once('../menubar.php');
			include_once('menuu.php');
		?>
		
		
		<div id="container">
		<form action="update_desc.php" method="post" enctype="multipart/form-data">
			
			<div id="container_content" style=" background:none; border:none;">
			
			<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><input type="submit" name="submit" style="background:url('../images/addnew.png'); border:none; height:32px; width:32px;" value=""/><br/>SAVE</div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;"><a href="edit_product.php?id=<?php echo $id;?>"><img  src="images/process1.png"/></a><br/>Back to list</div>
			
			<div id="container_left" style="width:100%;">
				  <div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">
				    <div class="orderheading">
						<img src="images/categories5.gif" style="float:left; margin-right:5px;" />
						Add description
					</div>
			<div style="float:left; margin-top:30px;" >
			<?php 
			$q=mysql_query("select * from `product` where `id`='$id'");
			$r=mysql_fetch_array($q);
			?>
			<table style="width:300px; float:left;">
			<tr>
			     <td>Name</td>
				 <td><?php echo $r['product_name'];?></td>
			</tr>
			<tr>
			     <td>Wholesale Price</td>
				 <td>Rs.<?php echo $r['selling_price'];?></td>
			</tr>
			<tr>
			     <td>Retail Price</td>
				 <td>Rs.<?php echo $r['price'];?></td>
			</tr>
			<tr>
			     <td>Recurring Price</td>
				 <td>Rs.<?php echo $r['recurring_price'];?></td>
			</tr>
			<?php 
			$cat_name='';
				$catid=$r['category_id'];
				$val=explode("|",$catid);
				
				foreach($val as $v)
				{
				//echo $v.'/t';
				if($v!='')
				{
				$q2=mysql_query("select * from `category` where `id`='$v' and `parent`=0");
				$res=mysql_fetch_array($q2);
				$cat_name.=$res['category_name'].',';
				}
				}
				if($cat_name==',')
				{
				$cat_name="Not Categorised";
				}
			
			?>
			<tr>
			     <td>Association</td>
				 <td><?php echo $cat_name;?></td>
			</tr>
			
			</table>
			<table style="width:300px; float:left; margin-left:150px;">
			<?php 
			$q1=mysql_query("select `quantity` from `stock` where `product_id`='$id'");
			$r1=mysql_fetch_array($q1);
			?>
			
			
			<tr>
			     <td >Quantity</td>
				 <td><?php echo $r1['quantity'];?></td>
			</tr>
			<tr>
			     <td>Image</td>
				 <td><img src="<?php echo $r['image'];?>" height="40" width="50"  /></td>
			</tr>
			<tr>
			     <td>Features</td>
				 <td>
				 <?php 
				 $q3=mysql_query("select * from `product_varient` where `product_id`='$id'");
				 while($r3=mysql_fetch_array($q3))
				 {
				 echo "$r3[varient_name]:$r3[description]<br/>";
				 }
				 ?>
				 </td>
			</tr>
			</table>
			</div>  
			 
  <div style="float:left;">
  <table>
   <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>
                                    Short Description</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="desc"><?php echo $r['description'];?></textarea>
                            </td>
                        </tr>
  
   <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>
                                    Long Description</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="ldesc"><?php echo $r['long_desc'];?></textarea>
                            </td>
							<td><input type="hidden" name="product_id" value="<?php echo $id;?>"  /></td>
                        </tr>
   
	 </table>
</div>
			   </form>
				
				
			</div>
			  <div id="container_right"></div>
			  <div style="width:100%;  float:left; "></div>
		</div>
		</div>	
			  </div></div>
		<?php include_once("footer.php");?>

</body>
</html>
