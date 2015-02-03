<?php
include_once("function.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
 .test{
width:22px; 
height:22px; 
float:right;
margin-top: -15px;

}
.test ul {
    font-family:Arial, Helvetica, sans-serif;
    font-size: 14px;
    margin: 0;
    padding: 0;
    list-style: none;
    color:#333333;
    width:30px;
   height:30px;
   padding:10px;
float:right;
}
.test ul li {
    display: block;
    position: relative;
    float:left;
    margin-left:0px;
}
.test li ul {
    display: none;
	width:170px;
	margin-left:0px;
	
}
.test ul li a {
    display: block;
    text-decoration: none;
    color: #333333;
    padding:10px;
     margin-left:0px;
	padding-left:10px;
	padding-right:22px;
    background: #ffffff;
}
.test ul li a:hover {
background:#64B2FF;
}
.test li:hover ul {
    display: block;
    position: absolute;
    z-index: 100000000000;
    border-bottom: none;
	margin-left:-110px;
	margin-top:0px;
	padding-top:7px;
    padding-left: 0;
}
.test li:hover li {
    float: none;
    font-size: 14px;
    border-bottom: 1px solid #cccccc;
}

.test li:hover li a {
    float: none;
    font-size: 12px;
}

.test li:hover a {
    background: -webkit-gradient(linear,left top,left bottom,from(#f5f5f5),to(#e8e8e8));}
.test li:hover li a:hover {
    background: #efefef;
     border-bottom: none;
}
.whitebox{
width:20px;
height:20px;
float:left;

}
</style>
 <script src="jquery-1.9.1.min.js">
 
 </script>
<script type="text/javascript">
jq162 = jQuery.noConflict(true);

jq162(function() {

var i=0;
jq162('#search_que').on("keyup ",function(event) {
var key=jq162(this).val();
 var keyCode = ('which' in event) ? event.which : event.keyCode;
//alert(keyCode);



if(keyCode==40 && key!='')
{


//alert(idval);

i=(i-0)+1;
if(i>0)
{
var j=i-1;
//alert(j);
var spid="span"+j;
document.getElementById(spid).style.color='#5D5D5D';
document.getElementById(spid).style.background='#ffffff';
}
var idval="span"+i;
var idval1="spana"+i;
document.getElementById(idval).style.color='#ff6105';
document.getElementById(idval).style.background='#cccccc';

document.getElementById('search_que').value=document.getElementById(idval1).innerHTML;
}
else if(keyCode==38 && key!='')
{

//alert(idval);

i=i-1;
if(i>-1)
{
var j=(i-0)+1;
var spid="span"+j;
var idval1="spana"+j;
document.getElementById(spid).style.color='#5D5D5D';
document.getElementById(spid).style.background='#ffffff';
}
var idval="span"+i;
var idval1="spana"+i;
document.getElementById(idval).style.color='#ff6105';
document.getElementById(idval).style.background='#cccccc';

document.getElementById('search_que').value=document.getElementById(idval1).innerHTML;



}
else
{

if( key.length<=1)
{
 document.getElementById('serach_content').innerHTML='';

}
else
{
jq162.ajax({
  url: "searchresult.php?q="+key,

}).done(function(data) {
//alert(data);

 document.getElementById('serach_content').innerHTML=data;
 
});
}
}

});
});

 jq162(document).ready(function() {
  jq162('div').bind('click', function(){
   
   var id=jq162(this).attr('class');
    if (id=="undefined" || id=="detailcart" || id=='detailsval') {
     return false;
    
     }
     else
     jq162('#detailcart').hide();
     
    });

 	 jq162("#cartsynops").load("cartsynop.php");
   
   jq162.ajaxSetup({ cache: false });
   
   var bodyid='';
   jq162('div').click(function(){
   
  bodyid=bodyid+jq162(this).attr('class');
   //alert(bodyid);
   var n=bodyid.split("change");
  var aralen=n.length;
  if(aralen==1)
  {
  jq162('.change').hide();
  
  }
  
   });
});



</script>
<style>
.change{
font-size:12px;
color:#5D5D5D;
}
.change:hover{
color:#ff6105;
text-decoration:none;
background:#cccccc;
}
</style>


</head>

<body onload="document.getElementById('search_que').value='';" >
<div id="topbar"> 
			<div id="topbarbox" style=" position:relative;">
			
			  
						<div id="logo">
                                                 <a href="index.php"><img src="images/logo.jpg" /></a>
                                                 <img src="images/tagline1.jpg">
                                               
                                                </div>
                                                
                                                <div id="toprightbar">
                                                    <div style="width:550px; height:60px; float: left; margin-top: 20px; ">
                                                      <div id="cartsynops" class="detailcart" style="width:200px; height: auto; float: left; margin-left: 0px;  font-size:14px;   ">
                                                        <img src="images/shbag.png" style="float: left; margin-top: -15px; margin-right: 5px;">   Shopping Cart<br/>
                                                         <span style="color:#ff6105; font-size:12px;">0 item(s) - Rs.0</span><img src="down.png" style="margin-left: 5px;">

                                                       </div>
                                                       <div style="width:270px; height: 20px; float:left;  margin-left:225px;border:1px solid #cccccc; margin-top:-33px; ">
                                                        <form action="search_product.php" method="post">
                                                        <input type="submit" name="submit" value="" style="background:url(images/search.png) no-repeat; width:20px; height: 13px; border: none; border-right:1px solid #cccccc; margin-left:5px; " >
                                                          <input type="text" autocomplete="off" name="search" id="search_que" style="width:230px; height: 20px; padding: 5px;  border:none;">
                                                        </form>
                                                       </div>
                                                       <div style="width:270px;  max-height:300px; overflow:auto;  margin:auto; border-left:1px solid #B5B5B5; border-right:1px solid #B5B5B5; border-bottom:1px solid #cccccc; position:absolute; z-index:9999; top:43px; left:685px;  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#efefef), to(#ffffff));  background: -webkit-linear-gradient(top, #efefef, #ffffff);  background: -moz-linear-gradient(top, #efefef, #ffffff);  background: -ms-linear-gradient(top, #efefef, #ffffff);  background: -o-linear-gradient(top, #efefef, #ffffff); " id="serach_content">
		
                                                       </div>
                                                       <?php 
			if(!isset($_SESSION['user_id']))
			{


				?>
                                                       <div style="float:left;width:280px; margin-left: 220px; margin-top: -10px;">
                                                       <p class="text" style="margin-top: 10px; color: rgb(153, 153, 153);  font-size:12px;">
                                                          Welcome visitor you can <span style="color:#ff6105; "><a href="login.php">login</a></span> or <a href="register.php"><span style="color:#ff6105; ">create an account</span></a>
                                                       </p>
                                                    </div>
                                                        <?php
			  }
			  else
			  {
			  $qq=mysql_query("select `first_name` from `user_details` where `email`='$_SESSION[user_id]'");
			  $rr=mysql_fetch_array($qq);
			  ?>
                           <div style="float:left;width:250px; margin-left: 220px; margin-top: -10px;">
                                                       <p class="text" style="float:right; text-align:right;margin-top: 5px; margin-right:10px; color: rgb(153, 153, 153);  font-size:12px;">
                                                          Welcome <span style="font-weight:bold;"><?php echo substr($rr['first_name'],0,10);?>&nbsp;&nbsp;&nbsp;</span>
							  <span style="color:#ff6105; "><a href="logout.php">logout</a></span>
		
                                                       </p>
                                                      
                                                    </div>
                                                     <div class="test" style="float:left; margin-top:-4px;">
		
		<ul>
			<li><img src="settings.png"  style="float:left; margin-left:17px; margin-top:-10px;"/>
				<ul>
					<li style="border-top: 1px solid #cccccc;"><a href="profile.php"><img src="images/profileedit.png" style="margin-right: 5px;">Profile edit</a>
					</li>
					<li><a href="wallet.php"><img src="images/wallet.png" style="margin-right: 5px;">Wallet</a>
					</li>
					<li><a href="history_purchase.php"><img src="images/orderhistory.png" style="margin-right: 5px;">History Of Purchase</a>
					</li>
					<li><a href="changepassword.php"><img src="images/change_password.png" style="margin-right: 5px;">Password Change</a>
					</li>
				</ul>
			</li>
		</ul>
		<div style="width:30px; height:50px; float:right;">
			<a href="mydesk.php"><img src="img/<?php echo $img?>" width="30" height="30" style="border:2px solid #efefef; margin-top:10px;"/></a>
		</div>
	</div>
			   <?php
			  }
			  ?>
                                                    </div>
                                                    
                                                    <div style="width:375px; height: auto; float: left; margin-left: 145px;">
                                                        <div class="topmenu1">
                                                             <a href="index.php">Home</a>
                                                        </div>
                                                        <div class="topmenu1">
                                                             <a href="about.php?name=10">About Us</a>
                                                        </div>
                                                        <div class="topmenu1">
                                                            <a href="about.php?name=5">Privacy policy</a>
                                                        </div>
                                                        <div class="topmenu1">
                                                             <a href="about.php?name=2">Return</a>
                                                        </div>
                                                        <div class="topmenu1" style="border-right:none; padding-right: none;">
                                                             <a href="about.php?name=7">Shipping</a>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
						

			</div>
</div>

</body>
</html>
