<?php include_once('database.php');?>
<?php
if(isset($_POST['submit']))
{
			        $un=htmlentities($_REQUEST['uname']);
				$ps=htmlentities($_REQUEST['password']);
			    $fet=mysql_query("select * from login_ch where username='$un' and password='$ps'");
			   if( $res=mysql_fetch_array($fet)){
			    $pass=$res['password'];
                            $stat=$res['status'];
			    
			    if($pass==$ps){
				$_SESSION['name']=$un;
			if(isset($_SESSION['name']))
			{
			    if($stat=='1')
			    {
			    header("location:admin/home.php");
			    }
			    if($stat=='0')
			    {
			    header("location:user/home.php");
			    }
	                }
					    }
			else{
			    $err="Wrong Username or Password";
			     }
   
			                                      }
		         else{
			    $err="Wrong Username or Password";
			     }
							
}
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<script  type='text/javascript'>
function validate_carrer(){
var uname=document.getElementById('carrer_name').value;
var contact=document.getElementById('cont').value;
var emailid=document.getElementById('email').value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
if(uname==""){

		alert("Please Enter Your Name");

		return false;

	}
	if(contact==""){

		alert("Please Enter Your contactno");

		return false;

	}
	if(contact.length<10){

		alert("Please Enter 10 digit phonenumber");

		return false;

	}
	if(contact.length>10){

		alert("Please Enter 10 digit phonenumber");

		return false;

	}
	if(emailid==""){

		alert("Please Enter Your emailaddress");

		return false;

	}
	if(!emailid.match(format))

	{

	alert("You have entered an wrong email address!"); 
	return false;
    

	}

	
}
</script>
  <script  type='text/javascript'>

function numberonly()

{

	var contact=document.getElementById('cont').value;

	if(isNaN(contact)|| contact.indexOf(" ")!=-1)

	{

              			alert("Enter numeric value");

			return false;

                }

	 if (contact.length > 10)

			{

                			alert("enter 10 characters"); 

				return false;

          			 }



}

</script>
  <title>...:::LUVVIZ:::...</title>
</head>
<body style="background: #f0f0f0;">
<div id="top">
		<div id="top_bar">
			<div id="top1">
				<div id="top1_bar">
					<div id="top1_barleft">
						<div style="width:60px; height:auto; float:left;">
							<img src="logo.png" width="50" style="padding:4px; float:left;"/>
						</div>
						<div style="width:100px; height:auto; float:left;">
							<h5>Luvviz Career</h5>
						</div>
						
					</div>
					<div id="top1_barright">
						<h3 style="margin:0px; font-family:arial;margin-top:6px; font-size:16px; text-align:center; word-spacing:3px;">
							Only<span style="color:rgb(68, 121, 202);"> Freelancers</span><br/>
							<span style="margin-left:200px;">can <span style="color:rgb(68, 121, 202);"> Breath free</span></span>
							
						</h3>
					</div>
				</div>
				<div id="top1_bar1">
					<div id="top1_bar1left">
						<p class="text">
							Thia is a portal which deals with varieties of consumer goods merchandise, partnering with many Indian and International products. You are welcome to our company to become a member. Here you can learn a lot about Marketing and distribution of products with us. While learning about the marketing skills you can earn comission by referring products or different kind of services to others.
						</p>
						<h4>We deal with different products and services as under..</h4>
						<ul>
							<li>Clothing</li>
							<li>Footwear</li>
							<li>Watches</li>
							<li>Sunglasses</li>
							<li>Bags</li>
							<li>Shaving Kit</li>
							<li>Medicines</li>
							<li>Books</li>
							<li>Electronics</li>
							<li>Beauti kit</li>
							<li>Costume Software etc</li>
						</ul>
					</div>
					<div class="divider"></div>
					<div id="top1_bar1right">
						<div id="top1_bar1right_up">
						<?php
							 if(isset($err)){
								 echo "<h3 style='font-family:arial;color:red; margin-left:20px; margin-top:10px; font-size:14px; font-weight:normal;'>".$err."</h3>";
								 } 
						?>
							<form action="" name="frmlog" method="post">
								<table  class="table">
									  <tr>
										<td>Login</td>
										<td><input type="text" name="uname" class="textbox" required ></td>
									  </tr>
									   <tr>
											<td>Password</td>
										  <td><input type="password" name="password" class="textbox"></td>
									  </tr>
									  <tr>
										<td></td>
										<td>
										<input type="submit" name="submit" value="submit" class="button">
										<a href="password.php" style="font-family:arial; font-size:13px; color:rgb(68, 121, 202); margin-left:15px;">Forgot password</a>
										</td>
									  </tr>
									
									  
								</table>   
							</form>
						</div>	
						<div id="top1_bar1right_down">
							<h4 style="margin-left:16px; font-size:16px; margin-bottom:5px;">Contact Us</h4>
							<p class="text" style="padding-left:8px; margin-left:10px;">
								Phone:<span class="sp" style="margin-right:5px;">0674-2596030</span>/
									<span class="sp">9778003030</span><br/>
								Email Us:<span class="sp">career@luvviz.com</span>
							</p>
						</div>
						<div id="top1_bar1right_down1">
							<h4 style="margin-left:16px; font-size:16px; margin-bottom:5px;">Get details about your career</h4>
							<div class="divider1"></div>
							<div id="top1_bar1right_down2">
								<form action="mail.php" name="form_career" method="post" onsubmit="return validate_carrer();">
									<table  class="table" style="height:200px;">
											<tr>
												<td>Name</td>
												<td><input type="text" name="uname" class="textbox" id="carrer_name" required ></td>
											</tr>
										   <tr>
												<td>Contact no.</td>
											  <td><input type="text" name="contactno" class="textbox" id="cont" onkeyup="return numberonly();" required></td>
											</tr>
											<tr>
												<td>Email id</td>
											  <td><input type="text" name="emailid" class="textbox" id="email" required ></td>
											</tr>
											<tr>
												<td></td>
												<td>
												<input type="submit" name="carrer_submit" value="submit" class="button" >
												</td>
											</tr>
									</table>   
								</form>
							</div>	
						</div>
					</div>
					
				</div>
			</div>
			<div id="footer">
				<div id="footer_bar">
					

    Copyright &copy; 2014 luvviz All Right Reserved.


				</div>
			</div>
		</div>
</div>

    


</body>
</html> 