<?php
include_once('function.php');
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$orderid=$_POST['orderid'];
$odate=$_POST['odate'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$pname=$_POST['pname'];
$pcode=$_POST['pcode'];
$qunty=$_POST['qunty'];
$reason=$_POST['reason'];
$opened=$_POST['opened'];
$fdeatils=$_POST['fdeatils'];
$q=mysql_query("insert into `returndetails` set `fname`='$fname',
                                              `lname`='$lname',
                                              `email`='$email',
                                              `phone`='$mobileno',
                                              `orderid`='$orderid',
                                              `odate`='$odate',
                                              `pname`='$pname',
                                              `pcode`='$pcode',
                                              `quanty`='$qunty',
                                              `reason`='$reason',
                                              `productisopened`='$opened',
                                              `otherdetails`='$fdeatils'") or die(mysql_error());
}
if($q)
{
    $msg="Successfully Submited Your Request.";
}
header("location:about.php?name=2&msg=$msg");
?>