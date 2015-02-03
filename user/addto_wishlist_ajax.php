<?php 
ini_set('display_errors','1');
include_once('function.php');
$pid=$_GET['product_id'];



if(!isset($_SESSION['product_id']))
{
$_SESSION['product_id']=$pid;
//echo $_SESSION['product_id'];
echo "1st iten added to whistlist";
}
else
{

$p_id=$_SESSION['product_id'];
//echo $p_id;
$val=explode("|",$p_id);
//print_r($val);
if (!in_array($pid, $val))
 {
 $result = count($val);
			 if($result<=4)
			 {
			$id=$p_id."|".$pid;
			$_SESSION['product_id']=$id;
			//echo $_SESSION['product_id'];
			echo "successfuly added to wishlist";
			}
			else
			
			{
			echo "You can Add maximux 4 items to your wishlist..";
			}
}

else
{
echo "already exists in wishlist...";
}

}


?>
