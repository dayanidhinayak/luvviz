<?php
ini_set('allow_url_include' , true);
include_once("../function.php");

?>
<html>
    <head>
        <script type="text/javascript" src="jquery.min.js" charset="utf-8"></script>
        <script>
           $(document).ready(function(){
            var qnt=$("#qt").html();
            //alert(qnt); 
            window.print();
            });
        </script>
    </head>
    <body>
	<div style="width:970px; height: auto; float:left; ">
 <?php
 
 $checked=$_POST['checkval'];
 foreach($checked as $check)
 {
$quantval='quantval'.$check;
$quantity=$_POST[$quantval];
  $stocksql=mysql_query("select * from `stock` where `slno`='$check'");
while($resstocks=mysql_fetch_array($stocksql)){
$proname=mysql_query("select * from `product` where `id`='$resstocks[product_id]' ");
$resproname=mysql_fetch_array($proname);
   for ($j = 0; $j < $quantity; $j++) {
    
 ?>
     
   <div style="width:120px; height:240px; float: left; margin-top:1px; margin-left:1px; font-size:12px; text-align: center;">
      
            <table align="center" style="font-size:12px;">
		
<tr>
		    
		    <td>
		    <img alt="testing" src="barcode.php?text=<?php echo $resstocks['productcode'];?>" width="100" height="20"/>
		    <br/>
		   <span style="margin-left:5px;"><?php echo $resstocks['productcode'];?></span> 
		    </td>
</tr>
<tr>
<td><?php echo  $resproname['product_name'];?></td>
</tr>
<?php
$sqlvar=mysql_query("select * from `product_varient` where `product_id`='$resproname[id]' and `varient_name`='brand'");
$resvar=mysql_fetch_array($sqlvar);
?>

<tr>
    <td><?php echo $resvar['description'];?></td>
</tr>
<tr>
    <td>
	Rs.<?php echo  $resproname['price'];?>
    </td>
</tr>
<tr>
   <td>Size:<?php  echo $resstocks['size'];?></td>
</tr>

<tr style="display: none;">
   <td id="qt"><?php echo $quantity;?></td>
</tr>
<tr>
    <td style="border-top:1px  dashed #000; "><span style="font-weight:bold;">Luvviz,</span>
    <br/>
    Bhubaneswar-20
    </td>
</tr>
</table>
   </div>
    
   <?php
    }
 }
 
 }
 /*
 $stksl=mysql_query("select max(slno) as slno from `stock` ");
 $resstksl=mysql_fetch_array($stksl);
 //echo $resstksl['slno'];
 for($i=1;$i<$resstksl['slno'];$i++)
{
$val=$i;
$checkval='checkval'.$val;
$check=$_POST[$checkval]; 
echo $check;
$quantval='quantval'.$val;
$quantity=$_POST[$quantval];
 $stocksql=mysql_query("select * from `stock` where `slno`='$check'");
while($resstocks=mysql_fetch_array($stocksql)){
$proname=mysql_query("select * from `product` where `id`='$resstocks[product_id]' ");
$resproname=mysql_fetch_array($proname);
 //echo $quantity;

  for ($j = 0; $j < $quantity; $j++) {
    
 ?>
     
   <div style="width:120px; height:240px; float: left; margin-top:1px; margin-left:1px; font-size:12px; text-align: center;">
      
            <table align="center" style="font-size:12px;">
		
<tr>
		    
		    <td>
		    <img alt="testing" src="barcode.php?text=<?php echo $resstocks['productcode'];?>" width="100" height="20"/>
		    <br/>
		   <span style="margin-left:5px;"><?php echo $resstocks['productcode'];?></span> 
		    </td>
</tr>
<tr>
<td><?php echo  $resproname['product_name'];?></td>
</tr>
<?php
$sqlvar=mysql_query("select * from `product_varient` where `product_id`='$resproname[id]' and `varient_name`='brand'");
$resvar=mysql_fetch_array($sqlvar);
?>

<tr>
    <td><?php echo $resvar['description'];?></td>
</tr>
<tr>
    <td>
	Rs.<?php echo  $resproname['price'];?>
    </td>
</tr>
<tr>
   <td>Size:<?php  echo $resstocks['size'];?></td>
</tr>

<tr style="display: none;">
   <td id="qt"><?php echo $quantity;?></td>
</tr>
<tr>
    <td style="border-top:1px  dashed #000;">Luvviz,Plno-109,
    <br/>
    Bhimpur,BBSR-20
    </td>
</tr>
</table>
   </div>
    
   <?php
    }
}

  }*/
   ?> 
     </div>  
    </body>
</html>
