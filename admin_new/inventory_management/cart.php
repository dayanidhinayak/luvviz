<?php 
ini_set('allow_url_include' , true);
include_once('../function.php');
$q_curency=mysql_query("select * from `currency`");
$rc=mysql_fetch_array($q_curency);
$id=$_GET['id'];
?>
 
		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../style.css" type="text/css" media="screen"  />
<link href="../admin_002.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="jquery-te-1.3.3.min.js" charset="utf-8"></script>
<link type="text/css" rel="stylesheet" href="jquery-te-1.3.3.css" charset="utf-8" />
 <link rel="stylesheet" href="../styles.css"/>
<style>
	table{
	border-collapse:collapse;
	font-family:Arial, Helvetica, sans-serif;
	font-size:13px;
	color:#333333;
	
	}
	
	tr td{
	width:10%;
	height:30px;
	}
	
th{
background-image: -moz-linear-gradient(center top , #F9F9F9, #ECECEC);
text-align:left;
height:30px;
text-shadow: 0 1px 0 #FFFFFF;
}

.aditleftbox{
height:700px;
width:14%;
background:#FFFFFF;
border:1px #CCCCCC solid;
font-family:Arial, Helvetica, sans-serif;
color:#666666;
float:left;
}

.aditleftsmallbox{
height:20px;
width:92%;
border-bottom:1px #CCCCCC solid;
padding:4%;
font-size:13px;
}


</style>

<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"frm",
			dateFormat:"%Y-%m-%d",
			cellColorScheme:"beige"

});

		new JsDatePick({
			useMode:2,
			target:"to",
			dateFormat:"%Y-%m-%d"

});
	};

</script>
</head>

<body>

		<div id="topbar">
			<div id="topbar_content">
				<div id="logo">
				</div>
				<div id="logoicon">
                
					<img src="../images/order.png" style="float:left; margin-top:2px; margin-left:10px;" />
					<img src="../images/customer.png" style="float:left;  margin-left:10px;"  />
					<img src="images/message.png" style="float:left; margin-top:2px;  margin-left:10px;" />
				</div>	
				
				<div id="searchbar">
					<table >
						<tr>
							<td style="border:1px solid #000000;">
							<input type="text" name="" style="width:200px; height:24px; float:left;" />
							
							<select style="float:left;padding:5px; height:30px;">
									<option name="">Everywhere</option>
							</select>
								
								<input type="submit" name="submit" value="" style="background:url(images/search.png); width:30px; height:30px; border:none; float:left;" />                            </td>
							
						</tr>
					</table>
				</div>
				
				<div id="selectbar">
					<select style="float:left;padding:5px; height:27px; background:#efefef; border:none; border-radius:2px; -moz-border-radius:2px;">
									<option name="">Quick Acce</option>
					</select>
				</div>
				
				<div id="topmenubar">
					<div class="topmenu">
						D Demo
					</div>
					<div class="separator">
						<img src="../images/separator.png" />
					</div>
					<div class="topmenu">
						My Preferences
					</div>
					<div class="separator">
						<img src="../images/separator.png" />
					</div>
					<div class="topmenu">
						<img src="..images/logout.png" style="float:left; margin-right:5px;" />Logout
					</div>
					<div class="separator">
						<img src="../images/separator.png" />
					</div>
					<div class="topmenu">
						View My Shop
					</div>
				</div>
			</div>
		</div>
		<?php 
		include_once('../menubar.php');
		
		$sql=mysql_query("select * from `promo_product` where `id`='$id'")or die(mysql_error());
		$result=mysql_fetch_array($sql);
		 ?>
		
		<div id="container">
			
			<form name="form" action="update_cart.php" method="post" >
			
		<div id="container_content" style="margin-top:30px; background:none; border:none;">
		  	<div style="width:100%; height:100px; padding-bottom:20px;background:#efefef; border:1px solid #cccccc;">
		<div style="float:left;"><h3>Payment  <img src="../images/separator1.png" /> 	Cart Rules  </h3>
		</div>
		
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
        <a href="promo_offer1.php"><img  src="../images/process1.png" /></a><br/>Back to list</div>
		<div style="float:right; margin-right:10px; margin-top:20px; font-size:12px; font-family:Arial, Helvetica, sans-serif;  text-align:center;">
        <input type="submit" name="submit" style="background:url('images/save5.png'); border:none; height:32px; width:32px;" value=""/><br/>
		 Update
		
		    </div>
		  	<div class="box1" style="width:100%; margin-left:0px; background:#ebedf4; border-bottom: 1px solid #CCCCCC;">
					
					 <div id="v-nav">
                <ul>
					<li tab="tab_a" class="first current">information</li>
                    <li tab="tab_b" >Conditiond</li>
                    <li tab="tab_c">Actions</li>
                    
                </ul>
                
                <div style="display:block; " class="tab-content">
                  <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Cart rule information</h5>
				  <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
                     
                  <div id="div" style="width:100%; margin-left:0%;"> </div>
                  <table width="62%" border="0" height="150px;" style="float:left;  margin-left:15%;	 ">
                  
                    <tr>
                     <td width="15%" >Name:</td>
                      <td colspan="2"><input type="text" name="promo_name" style=" border:1px solid #CCCCCC; width:90%;" value="<?php echo $result['promo_name'];?>"/>
                          <br />
                          <span style="font-style:italic; font-size:11px; color:#666666;">Will be displayed in the cart summary as well as on the invoice.</span></td>
                    </tr>
                    <tr>
                      <td >Description: </td>
					  <td><textarea name="textarea" rows="9" cols="50" style=" border:1px solid #CCCCCC;"/>
					   <?php echo $result['description']; ?>
					  </textarea></td>
                      
                    </tr>
                    <tr>
                      <td >code</td>
                      <td><input type="text" name="code" style=" border:1px solid #CCCCCC;" value="<?php echo $result['promo_code']; ?>" />
					  
                        <!--  <input name="submit2" type="submit" value="(click to generate)" />
                          <br />
                        <span style="font-style:italic; font-size:11px; color:#666666;">Caution! The rule will automatically be applied if you leave this field blank.</span> </td>
                    </tr>
                    <tr>
                    <td>

                    <label>Partial use</label>
			<div class="margin-form">
			
				<td><input type="radio" name="partial_use" id="partial_use_on" value="1" checked="checked" />
				<label class="t" for="partial_use_on"> <img src="../images/edit8.gif" alt="Allowed" title="Allowed" style="cursor:pointer" /></label>
				
			<input type="radio" name="partial_use" id="partial_use_off" value="0"   />
				<label class="t" for="partial_use_off"> <img src="../images/edit9.gif" alt="Not allowed" title="Not allowed" style="cursor:pointer" /></label></td>
                    </td>
                    </tr>
                    <tr>
                      <td></td>
                      <td style="font-size:11px; font-style:italic; color:#666666;" >Only applicable if the voucher value is greater than the cart total.
                        If you do not allow partial use, the voucher value will be lowered to the total order amount, but if you do, a new voucher will be created with the remainder. </td>
                    </tr>-->
                  <tr>
                      <td >Priority</td>
                      <td><input type="text" name="priority"  style=" border:1px solid #CCCCCC;" 
					  value="<?php echo $result['priority']; ?>" /></td>
                    </tr>
                    <tr>
                      <td ></td>
                      <td style="font-size:11px; font-style:italic; color:#666666;" >Cart rules are applied to the cart by priority. A cart rule with priority of "1" will be processed before a cart rule with a priority of "2".</td>
                    </tr>
                    <tr>
                      <td>Status</td>
                      <td width="72%">
					  <?php if($result['status']==0)
							{ ?>
		
					  <input type="radio" name="status" values="0" checked="checked" />
                          <img src="images/edit8.gif" />
                        <input type="radio" name="status" value="1"/>
                      <img src="../images/edit9.gif" />
					  <?php 
						}
						else
						{
						?> 
						<input type="radio" name="status" values="0"  />
						 <img src="../images/edit8.gif" />
                        <input type="radio" name="status" value="1" checked="checked" />
						<?php 
							}
							?>
						
						</td>
						<input type="hidden" name="hidden" value="<?php echo $result['id']; ?>" />
                    </tr>
                    
                  </table>
				  <div id="separation" style="width:100%; margin-left:0%; margin-bottom:20px;">
				     </div>
                </div>
                 </form>
				
				
				<div style="display:none;" class="tab-content">
                     <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">SEO</h5>
					 <div id="separation" style="width:100%; margin-left:0%;">
				     </div>
					  <table width="85%" style="width:70%; margin-top:1%; ">
				   		<tr>
                      <td width="21%" >Limit to a single customer</td>
                      <td colspan="2"><input type="text" name="Input" style=" border:1px solid #CCCCCC; width:90%;"/>
                         </td>
                    </tr>
						<tr>
							<td>&nbsp;</td>
							<td style="font-size:11px; font-style:italic; color:#7E7E7E;">Optional, the cart rule will be available for everyone if you leave this field blank.</td>
						</tr>
							<tr>
							<td>Valid</td>
							<td>From<input type="text" name="frm"  id="frm"  style="width:100px; height:20px; border:1px solid #CCCCCC;" readonly=""/> to <input type="text" name="to"  id="to" style="width:40%;  border:1px solid #CCCCCC;" readonly="" />
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="font-size:11px; font-style:italic; color:#7E7E7E;">Default period is one month.</td>
						</tr>
						<tr>
							<td>Minimum amount</td>
							<td><input type="text" name=""  style=" width:40%; border:1px solid #CCCCCC;" /> 
							<select><option>EUR</option></select>
							<select><option>Tax included</option></select>
							<select><option>Shipping</option></select>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="font-size:11px; font-style:italic; color:#7E7E7E;">You can choose a minimum amount for the cart either with or without the taxes, and with or without shipping.</td>
						</tr>
						<tr>
							<td>Total available</td>
							<td><input type="text" name="" value="1"  style="width:40%;  border:1px solid #CCCCCC;" />
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="color:#7E7E7E; font-size:11px;">The cart rule will be applied to the first X customers only.</td>
						</tr>
						
						
						
						<tr>
							<td>Total available for each user</td>
							<td><input type="text" name="" value="1"  style="width:40%;  border:1px solid #CCCCCC;" />
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td style="color:#7E7E7E; font-size:11px;">A customer will only be able to use the cart rule X time(s).</td>
						</tr>
                        
						
				  </table>
				   <div id="separation" style="width:100%; margin-left:0%; margin-bottom:20px;">
				     </div>
					 
                </div>
				
				
	<div style="display:block; " class="tab-content">
                  <h5 style="font-weight:bold; font-size:17px; background:none; margin-top:0px;">Cart rule actions</h5>
				  <div id="separation" style="width:100%; margin-left:0%;">
	      </div>
                  <div id="div" style="width:100%; margin-left:0%;"> </div>
                  <table width="86%" border="0" height="150px;" style="float:left;  margin-left:10%;	 ">
                    
                    <tr>
                      <td width="26%">Free shipping</td>
                      <td width="74%"><input type="radio" />
                          <img src="../images/edit8.gif" />
                        <input type="radio" />
                      <img src="../images/edit9.gif" /> </td>
                    </tr>
                    
                    <tr>
                      <td>Apply a discount</td>
                      <td width="74%"><input type="radio" />
                          <img src="../images/edit8.gif" /> Percent (%) 
						  
                        <input type="radio" />
                          <img src="../images/edit8.gif" /> Amount <input type="radio" />
                      <img src="../images/edit9.gif" /> None</td>
                    </tr>
					
					
					<tr>
                      <td width="26%">Free shipping</td>
                      <td width="74%"><input type="radio" />
                          <img src="../images/edit8.gif" />
                        <input type="radio" />
                      <img src="../images/edit9.gif" /> </td>
                    </tr>
          </table>
		   <div id="separation" style="width:100%; margin-left:0%; margin-bottom:20px;">
				     </div>
                </div>			
				
				
				
				
				
				
                

			<!-- Include JavaScript -->
        <script type="text/javascript" src="jquery_002.js"></script>
        <script type="text/javascript" src="jquery.js"></script>        
        

        <script type="text/javascript" src="script.js"></script>

        <!-- Include Google Analytics Code -->
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-16380505-1");
                pageTracker._trackPageview();
            }
            catch (err) {
            } 
        </script>
		  </div>
		</div>
		</div>
		
		<div id="footer">
			Map Cart Admin Panel<br/>
			<span style="color:#666666;">Load Time:0.081s</span>
		</div>
   </div>
</body>
</html>
