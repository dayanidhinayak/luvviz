<?php
include_once('function.php');
?>
<html>
<head>
<title>MAPKART</title>
</head>
<body>
<form name="s" id="i" method="post" action="view_customer1.php">
<table>
<tr><td>Id</td>
<td>Product Name</td>
<td>User Name</td>
<td>Review</td>
</tr>

<?php

$query = mysql_query("select * from `review` where `status`='0'")or die(mysql_error());
               while($res=mysql_fetch_array($query)){
$id=$res['product_id'];
$idd=$res['id'];
$quer = mysql_query("select * from `product` where `id`='$id'")or die(mysql_error());
               while($r=mysql_fetch_array($quer)){

               ?>
<tr>
<td><input type="checkbox" name="checklist[]" id="i" value="<? echo $res['id'];?>"/></td>

               <td><?php echo $r['product_name'];?></td>
<td><?php echo $res['name']?></td>
                   <td><?php echo $res['review'];?></td>
                 
                 </tr>
                   <?php
		}	
                   }
                   ?>
<tr>
<td>
  <input type="submit" name="update" value="update">

</td>
</tr>


    </table>
   
</form>
</body>
</html>
