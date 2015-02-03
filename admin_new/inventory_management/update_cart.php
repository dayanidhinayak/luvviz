<?php 
	ini_set("display_error",1);
	include_once('function.php');
	
	$name=$_POST['promo_name'];
	$desc=$_POST['textarea'];
	$priority=$_POST['priority'];
	$status=$_POST['status'];
	$frm=$_POST['frm'];
	$to=$_POST['to'];
	$id=$_POST['hidden'];
	
	$sql=mysql_query("update `promo_product` set `promo_name`='$name', `description`='$desc',`status`='$status',
	`priority`='$priority', `from_date`='$frm', `to_date`='$to' where `id`='$id'")or die(mysql_error());
	
	if($sql)
	{
	$msg="Successfully Updated";
	}
	else
	{
	$msg="Updation failed";
	}
header("location:promo_offer1.php");
	?>