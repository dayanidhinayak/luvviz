<?php 
include_once('../function.php');
$name=$_POST['name'];
$priority=$_POST['priority'];

//echo $name;
foreach($_POST as $a=>$b)
{
//echo $a.'----->'.$b.'<br/>';

}
$metatitle=$_POST['metatitle'];
$metadescription=$_POST['metadescription'];
$metakeyword=$_POST['metakeyword'];
$barcode=$_POST['ref_id'];

$price=$_POST['price'];
$sprice=$_POST['sellingprice'];
$recurringprice=$_POST['recurringprice'];

$taxval=$_POST['taxvalue'];
$newarrival=$_POST['newarrival'];

$qty=$_POST['quantity'];

//$varient=$_POST['varient'];
$type=$_POST['type'];
$cat1=$_POST['cat_id'];
$related_pro=$_POST['related_prod'];

$dtime=$_POST['dtime'];
$brand=$_POST['brand_id'];

?>


<?php
//$collection=$_POST['collection_id'];

$date=date("Y-m-d H:i:s");

$image = $_FILES['prodct_img']['name'];

if($_POST['alt'])
{
$alt=$_POST['alt'];
}
else $alt=$name;

$file1=getexatfilename($image);

$ext1=getext($image);

 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

						{
	$folder="img/";

						 $filename = $folder . $image;
	 $copied = copy($_FILES['prodct_img']['tmp_name'], $filename);
	 }


		mysql_query("insert into `product` set `product_name`='$name',`price`='$sprice',`selling_price`='$price',`recurring_price`='$recurringprice',`type`='$type',`image`='$filename',`category_id`='$cat1',`brand_id`='$brand',`created_ondate`='$date',`status`='1',
		`alternate_val`='$alt',`releated_pro_id`='$related_pro',`tax_value`='$taxval',`deliverytimeperiod`='$dtime',`newarrival`='$newarrival',`metatitle`='$metatitle',`metadescription`='$metadescription',`metakeyword`='$metakeyword',`quantity`='$qty',`barcodeno`='$barcode',`priority`='$priority'")or die(mysql_error());
                
                
                $q=mysql_query("select `id` from `product` where `product_name`='$name'");
                $r=mysql_fetch_array($q);
                
                $insert_inventory=mysql_query("insert into `inventory` set `product_id`='$r[id]',`quantity`='$qty'");
?>
     <html>
    <head>
        <body>
            <table>
                <tr>
                    <td>
                        Company Address
                    </td>
                    <td>
                        Bhubaneswar
                    </td>
                </tr>
                <tr>
                    <td>Product Name</td>
                    <td><?php echo $name ?></td>
                </tr>
                 <tr>
                    <td>Product Price</td>
                    <td><?php echo $price ?></td>
                </tr>
                 <?php
                   $qqq=mysql_query("select `id` from `product` where `product_name`='$name'");
                $rrr=mysql_fetch_array($qqq);
                 ?>
                  <tr>
                    <td>Product Code</td>
                    <td><?php echo $barcode;?></td>
                </tr>
		<tr>
		    <td>image</td>
		    <td>
		    <img alt="testing" src="barcode.php?code=<?php echo $barcode;?>" />
		    </td>
		</tr>
                    <tr>
                    <td><input type="button" value="Print" onClick="window.print();"/></td>
                    
                </tr>
            </table>
        </body>
        
    </head>
</html>           


<?php

//mysql_query("insert into `stock` set `product_id`='$r[id]',`quantity`='$qty',`warehouse_id`='0',`type`='admin',`brand_id`='$brand'");			
			
$varient=$_POST['varient'];
$desc=$_POST['vname'];
$str="";
foreach($varient as $p => $q)
{
if($q!="")
{
$qd=strtolower($q);
$str="`varient_name`='$p',`description`='$qd'";
echo $str;
mysql_query("insert into `product_varient` set `product_id`='$r[id]',$str");
//echo $p."---------------------------------".$q."--------$desc[$p]";
$str="";
}
}
$msg="Successfully added";
header("location:add_desc_product.php?id=$r[id]");

?>
