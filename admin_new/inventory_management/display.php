<?php 
include_once('function.php');
?>
<html>
<head>
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
<script type="text/javascript">
function deletekey(val)
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
        
    if(xmlhttp.responseText=='1')
    alert('Sucessfully Deleted');
    else 
    alert('Due to some Error this Action could not be perfermed');
    
    }
  }
xmlhttp.open("GET","delete.php?slno="+val,true);
xmlhttp.send();
}
</script>
<script type="text/javascript">
function getres(val)
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
        
    document.getElementById("result").innerHTML=xmlhttp.responseText;
    
    }
  }
xmlhttp.open("GET","getdis.php?name="+val,true);
xmlhttp.send();
}
</script>


</head>
<body>
    
		<?php 
		include_once("topbar.php");
		include_once('../menubar.php');?>
                <div id="container">
		
			
			<div id="container_content" style=" background:none; border:none;">
			    
			    <div style="width:100%; height:70px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;margin-top: 2%;">
			   <div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
                            <input type="submit" name="submit" style="background:url('../images/addnew.png'); border:none; height:32px; cursor: pointer; width:32px;" value=""/><br/>Add </div>
				 <div id="container_left" style="width:100%;">
				  <div class="orderbox" style="width:100%; margin-left:0%; padding-bottom:2%;">
<div style="float: left; padding: 1%; width:18%; ">
<?php


		$pp = mysql_query("SELECT DISTINCT c.`category_name`,c.`id` FROM category c,topseller t where `c`.`id`=`t`.`categoryid`")or die(mysql_error());
	    while($xx = mysql_fetch_array($pp))
		{
		$categoryid = $xx['category_name'];	
        $cat=	 $xx['id'];
?>

    
    <div onclick="getres(<?php echo $cat?>)"><?php echo($categoryid)?>  </div>
    
    


<?php }

?>
</div>
<div id="result" style="width:80%;float: left;">
    
</div>

				  </div>
				 </div>
			    </div>
			</div>
		</div>

		<?php
		include_once("../footer.php");
		?>

</body>
</html>