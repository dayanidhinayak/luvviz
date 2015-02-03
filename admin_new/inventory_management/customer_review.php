<?php
ini_set("display_errors",1);
include_once("../function.php");

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

<script>
function change(a)
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	if(xmlhttp.responseText==1)
	{
	alert("status succesfully updated");
	}

   // document.getElementById("id").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","upstatus.php?val="+a,true);

xmlhttp.send();
}
</script>
</head>

<body>
		
		
		<?php
		include_once('topbar.php');
		include_once("../menubar.php");?>
                <div id="container">

			
		  <div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
                            <div style="float:left; padding-left:1%;"><h3>Customers</h3>
                            </div>
			</div>

			<div class="box1" style="width:100%; margin-left:0px;">
				<table cellpadding="3" cellspacing="0" style="width:100%;">
					<tr>
						
						<th>Customer Name</th>
						<th>Product Name</th>
						<th>Review</th>
						<th>Rating</th>
						<th>Action</th>
                            		</tr>
<tbody id="details">
                                        <?php
                                        
                                           
                                       
                                        $qry_rev=mysql_query("SELECT r.`name` as name,r.`id` as id ,r.`review` as review, r.`rating` as rating,r.`status` as status, p.`product_name` as p_name FROM `review`r  , `product` p where r.`product_id`=p.`id` and r.`name`!='' order by r.`id` DESC")or die (mysql_error());
                                       
                                      while($res_rev=mysql_fetch_array($qry_rev))
                                            
                                            {
                                          
                                            
                                        ?>

                                        <tr>
                                            <td>
                                                <?php echo $res_rev['name'];?>
                                            </td>
                                            <td>
                                                <?php echo $res_rev['p_name'];?>
                                            </td>
                                            <td>
                                                <?php echo $res_rev['review'];?>
                                            </td>
                                            <td>
                                                <?php echo $res_rev['rating'];?>
                                            </td>

					     <td>
				       		 <a href="edit_review.php?id=<?php echo $res_rev['id'];?>" >
							<img src="../images/edit.gif"    />
						</a>
					    </td>

                                            <td>
                                                <a href="delete_review.php?id=<?php echo $res_rev['id'];?>" >
							<img src="../images/delete.gif"    />
						</a>
						<?php
						if($res_rev['status']==0)
						{
						?>
						<img src="../images/disabled.gif" onclick="return change(<?php echo $res_rev['id'];?>)" />
						<?php
						}
						else
						{
						?>
						<img src="../images/tick.png" onclick="return change(<?php echo $res_rev['id'];?>)" />
						<?php
						}
						?>
                                            </td>
                                            </tr>
                                        <?php
                                            }
                                            
                                        ?>
</tbody>

                                </table>
			</div>
		  </div>
		</div>
		
		<?php
		include_once("../footer.php");
		?>

</body>
</html>

