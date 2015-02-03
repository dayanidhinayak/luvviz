<?
$mSiteURL ="http://www.mapkart.com/";
$mSiteTitle = "MAPKART";

$_cost = 25;
$b_desc = "jagatjit";		

/*-- Site Currency*/
$mCurrency =  "INR";
$paypal_currency_code =  "INR";

$pre_set_promo =  "promo100%";
$business =  "akcmaplecomputer@gmail.com";

//$sandbox = "sandbox.";

$payaltest = true;

//$ip_address = $_SERVER['REMOTE_ADDR']; // customer IP address


$amount=$_SESSION['finalamt'];
$ORDER_ID=$_SESSION['billid'];
?>
<form method="post" name="frm_paypal" action="https://www.<?=$sandbox;?>paypal.com/cgi-bin/webscr" >
                   <input type="hidden" name="cmd" value="_ext-enter" />
                  <input type="hidden" name="redirect_cmd" value="_xclick" />
                  <input type="hidden" name="business" value="<?=$business;?>" />
                  <input type="hidden" name="return" value="http://www.mapkart.com/" />
				  
                  <input type="hidden" name="notify_url" value="<?=$mSiteURL;?>paypalipn.php" />
                  <input type="hidden" name="currency_code" value="<?=$paypal_currency_code;?>" />
                  <input type="hidden" name="item_name" value="<?= $mSiteTitle?> - <?= $b_desc?> " />
                  <input type="hidden" name="item_number" value="<?= $ORDER_ID?>" />
                  <input type="hidden" id="paypalcustom" name="custom" value="<?=$custom_key;?>" />
                  <input type="hidden" id="paypalamount" name="amount" value="<?=$amount;?>" />
                  <input type="hidden" name="no_shipping" value="0" />
                  <input type="hidden" name="shipping" value="0.00">
                  <input type="hidden" name="shipping2" value="0.00">
                  <input type="hidden" name="cancel_return" value="<?=$mSiteURL;?>cancell.html" />
                 
			</form>
            
            <script>	
			document.frm_paypal.submit();			
		
            </script>



 

