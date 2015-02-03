<?php
ini_set("dispaly_errors",1);
include_once("function.php");

$fname=$_POST['fname'];
    $lname=$_POST['lname'];
	$email=$_POST['email'];
    $contact=$_POST['contact'];
    $country=$_POST['country'];
    $state=$_POST['state'];
 $city=$_POST['city'];
 $pin=$_POST['pin'];
 $address=$_POST['address'];
 $deliverydate=$_POST['deliverydate'];
mysql_query("UPDATE `user_details` SET `first_name`='$fname',`last_name`='$lname', `email`='$email', `contact`='$contact', `country`='$country', `state`='$state', `city`='$city', `pin`='$pin', `address`='$address', `deliverydate`='$deliverydate'
WHERE `email`='$email'");
echo "UPDATE `user_details` SET `first_name`='$fname',`last_name`='$lname', `email`='$email', `contact`='$contact', `country`='$country', `state`='$state', `city`='$city', `pin`='$pin', `address`='$address', `deliverydate`='$deliverydate'
WHERE `email`='$email'";
header("location:profile.php");

?>
