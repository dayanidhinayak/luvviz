<?php
if(!$_POST['uname']){
    header("location:search_detail.php");
}else{
 ini_set('allow_url_include' , true);
include_once('../function.php');
 
?>
<table style="width:600px;">
    <tr>
        <th style="text-align: left;">Order id</th>
        <th style="text-align: left;">Date</th>
        <th style="text-align: left;">Product name</th>
        <th style="text-align: left;">Size</th>
        <th style="text-align: left;">Total Price</th>
        <th style="text-align: left;">Status</th>
    </tr>
  <?php
 
  $x=$_POST['uname'];
$sql=mysql_query("select * from `order_details` where `user_id`='$x' or `billing_phn`='$x'");
while($res=mysql_fetch_array($sql)){
//echo $res['billing_phn']; 
$sqlbill=mysql_query("select * from `temp_billinfo` where `bill_id`='$res[id]'");
while($resbill=mysql_fetch_array($sqlbill)){
    
  ?>
    <tr>
        <td><?php echo $res['id'];?></td>
        <td>
            <?php echo $res['order_ondate'];?>
        </td>
        <td>
           <?php echo $resbill['productname'];?>
        </td>
        <td>
            <?php echo $resbill['description'];?>
        </td>
         <td>
            <?php echo $resbill['tot_price'];?>
        </td>
         <td>
            <?php
            if($res['status']==0){
                echo "pending";
            }
                else{
                    echo "dispatch";
                }
                
            ?>
            
         </td>
    </tr>
    <?php
}
}

?>

</table>
<?php
 }
 ?>