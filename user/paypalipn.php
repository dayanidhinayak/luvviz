<?php

$con=mysql_connect("localhost","root","colourfade")or die(mysql_error());
mysql_select_db("cake",$con)or die(mysql_error());

$req = 'cmd=_notify-validate';

// Read the post from PayPal system and add 'cmd'
$fullipnA = array();
foreach ($_POST as $key => $value)
{
	$fullipnA[$key] = $value;

	$encodedvalue = urlencode(stripslashes($value));
	$req .= "&$key=$encodedvalue";
}
$fullipn =Array2Str(" : ", "\n", $fullipnA);
sendMessage('jagatjit@krititech.in', "full IPN", $fullipn);


if (!$payaltest) 
{
	$url ='https://www.paypal.com/cgi-bin/webscr';	

}else{	

	$url ='https://www.sandbox.paypal.com/cgi-bin/webscr'; 	

}

$curl_result=$curl_err='';
$fp = curl_init();
curl_setopt($fp, CURLOPT_URL,$url);
curl_setopt($fp, CURLOPT_RETURNTRANSFER,1);
curl_setopt($fp, CURLOPT_POST, 1);
curl_setopt($fp, CURLOPT_POSTFIELDS, $req);
curl_setopt($fp, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded", "Content-Length: " . strlen($req)));
curl_setopt($fp, CURLOPT_HEADER , 0); 
curl_setopt($fp, CURLOPT_VERBOSE, 1);
curl_setopt($fp, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($fp, CURLOPT_TIMEOUT, 30);

$response = curl_exec($fp);
$curl_err = curl_error($fp);
curl_close($fp);


// Assign posted variables to local variables
$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$txn_type = $_POST['txn_type'];
$pending_reason = $_POST['pending_reason'];
$payment_type = $_POST['payment_type'];
$custom = $_POST['custom'];
$quantity = $_POST['quantity'];
$payer_id=$_POST['payer_id'];
$passw='buzz'.rand(9999,99999);

 

if (strcmp ($response, "VERIFIED") == 0)		
{

mysql_query("update `temp_billinfo` set `pay_status`='1' where `bill_id`='$item_number'");
mysql_query("update `order_details` set `status`='1' where `id`='$item_number'");
	
		
		
		
		

	}else // if (strcmp ($ret, "INVALID") == 0)
	{
		TransLog("Invalid Transaction - $ret");
	}
//}



function notifyClient($ObjCustomer)
{
	$name=$ObjCustomer['name']."  is down";
		
		$message = "Dear Client,\n\n";	
		
		$message .= "Your account is Activated"."\n\n";
		
		
		$message .= "If you have any questions or comments, contact us at contact@failsafe.us"."\n\n";
		$message .= "Cheers!"."\n";
		$message .= "Failsafe"."\n";
		
		$mail=explode(",",$ObjCustomer['email']);
		foreach ($mail as $ma => $m){
		
		mail($m, $name, $message);
		}	
			
		
	
}

function TransLog($ecode)
{
	global $fullipn, $extra_desc, $req, $response, $curl_err;
	
		
	$site_email = "jagatjit@krititech.in";
	
		
	
	// Mail admin
	if ($ecode == "Success")
	{		
			
				$message .= $fullipn;
		
		sendMessage($site_email, "New Purchase: $site_name", $message);			
	
	}else{
		
		// payment failed, notify admin and send information
		$message = $ecode."\n\n";
		$message .= $fullipn;
		$message .=  print_r($_POST, TRUE)."\n\n";
		$message .=  $req."\n\n";
		$message .=  "CURL response: ".$response."--CURL ERR:".$curl_err."\n\n";	
				 		
		sendMessage($site_email, "UNSUCCESSFUL IPN: $site_name", $message);	
			
	}
		
	
	
	
}

function sendMessage($site_email, $subject, $message)
	{  
	
	  				
		
		$header ="MIME-Version: 1.0\n"; 
		$header .= "Content-type: text/html; charset=iso-8859-1\n"; 
		$header .="From: BuzzCheck <contact@failsafe.us>\n";
		//$header .="Return-path: ". $remite."\n";
		$header .="X-Mailer: PHP/". phpversion()."\n";	
				
		mail($site_email, $subject, $message, $header);
		//mail("franco_zuna@hotmail.com", $subject, $message, $header);
		
		
		
    }


function recordLog ($ecode)
{
	global $fullipn, $ret;

	

	   
}
function givemePostData ($field){ 

	$val_ret = "";	  	
	foreach($_POST as $field_name => $val){ 
	   $asignation2 = "\$".$field_name."='" . $val . "';";  	  
	  if ($field_name == $field){		  
		  $val_ret = $val; 	  
	  }
	   
	}  	
	return $val_ret;
	   
}

function FailSql($s)
{		
	StopProcess();
	
}

function StopProcess()
{

	exit;
}
function Array2Str($kvsep, $entrysep, $a)
	{
		$str = "";
		foreach ($a as $k=>$v)
		{
			$str .= "{$k}{$kvsep}{$v}{$entrysep}";
		}
		return $str;
	}

?>
