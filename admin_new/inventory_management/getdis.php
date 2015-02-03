<?php 
include_once('function.php');
?>
<html>
<head>




</head>
<body>
<form action="updatetopseller.php" name="q" method="post">
<table style="width: 100%;">

<?php
 $abc=$_GET['name'];
   

   $sSql = mysql_query("SELECT * FROM  topseller where `categoryid`='$abc' ");
   
	
	while($zz = mysql_fetch_array($sSql))
		{    
			$productid = $zz['productid'];
            $prt=$zz['priotity'];
            $slno=$zz['slno'];
            
  
			$sql = mysql_query("SELECT `product_name` FROM  product where `id`='$productid'");
            $z = mysql_fetch_array($sql);	
			$pid = $z['product_name'];
            
	                 
		?>
  <tr>
        
      <td><?php echo($pid)?></td>
      <td><input type="text" name="<?php echo $slno;?>" value="<?php echo($prt);?>" style="width:200px; border:1px solid #cccccc;"/></td>
       <td onclick="deletekey(<?php echo $slno;?> )"><img src="../images/delete.gif"    /> </a></td>
      
   </tr>
      <?php
      }
      ?>
      <tr><td><input type="submit" name="submit" value="update"/></td></tr>
      
   </table>
   </form>
   </body>
   </html> 