<head>
<!--<link rel="stylesheet" type="text/css" href="alice-min.css" media="all">-->
<script type="text/javascript">
	function insert_news_mail()
	{
	var mail=document.getElementById('mail').value;
var mailformat =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if (!mail.match(mailformat)) {
			alert('Please provide a valid email address');
			}
else{
$.ajax({url:"insert_mail.php?q="+mail,
       success:function(results){
		alert(results);		
       }
});

}	
	}
	</script>
</head>
<body>
<!--<div id="content7" style="margin-top:0px;">-->

                                          <div id="footer-box">
                                              <div id="footer-content">
      						    <div id="footer-contentbox" style="margin-bottom: 10px;">
 							<div id="footerleftbox">
							  <!--<div class="content7box1" style=" width:270px; float:left; margin-left:0px;  margin-top:15px;">-->
								<div id="footer-leftcontent">
							<ul>
									<li class="list" style=" font-weight:bold; font-size:14px; margin-left:0px;  list-style-image:none; color:#2073b2; text-transform:uppercase; height:20px; font-family:arial;">
										Information</li>
									
									

									<?php 
									$q_info=mysql_query("select * from `footer` where `type`='1'");
									while($r_info=mysql_fetch_array($q_info))
									{
									?>
									<li class="list" style="list-style-image:none; margin-left:0px;" ><a href="about.php?name=<?php echo $r_info['id'];?>" ><?php echo $r_info['name'];?></a></li>
									<?php } ?>
									<!--<li class="list"><a href="about.php">About</a></li>
									<li class="list"><a href="delivery.php">Delivery</a></li>
									<li class="list"><a href="#">Terms and Conditions</a></li>
									<li class="list"><a href="privacy_policy.php">Privacy Policy</a></li>-->
									</ul>
									<div id="contect-botton" style="margin-top:10px; background:#2073b2; border:none;">
														Contact Us
									</div>
                                  
							<!--</ul>-->
							       </div>
                            
                            

                            
                            <!--<div class="content7box1" style="width:270px; float:left;   margin-left:30px;  margin-top:15px;">-->
						<div id="footer-rightcontent">
							<ul >
									<li class="list" style="font-weight:bold; font-size:14px; margin-left:0px;  list-style-image:none; text-transform:uppercase; height:22px; color:#2073b2; border-bottom:none;">
										Customer Service</li>
								
								    
									
									<?php 
									$q_csvc=mysql_query("select * from `footer` where `type`='2'");
									while($r_csvc=mysql_fetch_array($q_csvc))
									{
									?>
									<li class="list" style="list-style-image:none;"><a href="about.php?name=<?php echo $r_csvc['id'];?>" style="border-bottom:none;"><?php echo $r_csvc['name'];?></a></li>
									<?php } ?>
									<!--<li class="list"><a href="contact.php">Contact</a></li>
									<li class="list"><a href="return.php">Returns</a></li>
									<li class="list"><a href="sitemap.php">Sitemap</a></li>-->
									<li><a href="https://www.facebook.com/luvviz" target="_blank"><img src="images/f.png" width="40" ></a></li>
								     </ul>
									
							<!--</ul>-->
						</div>
						<div id="footer-middlecontent">
								<ul>
										<li class="list" style="font-weight:bold; font-size:14px; margin-left:0px;  list-style-image:none; text-transform:uppercase; height:22px; color:#2073b2; border-bottom:none; font-family:Arial, Helvetica, sans-serif;">
										Quick Links</li>
										<li>About Us</li>
										<li>Contact Us</li>
										<li>Help</li>
								</ul>
						</div>
					</div>
                            
                            
 			    <div id="footerrightbox">
                           
                            
					<!--<div class="content7box1" style="width:300px; float:left;  border:none;  margin-left:50px;  margin-top:15px;">
							<ul>
									<li class="list" style=" font-weight:bold; font-size:14px; list-style-image:none;  text-transform:uppercase; height:35px; color:rgb(76, 76, 76); ">Newsletter Signup</li>
									
							       
                            </ul>-->
						<div class="footerhead" style=" font-weight:bold; font-family:Arial, Helvetica, sans-serif; margin-top:0px; font-family: 'alex_brushregular'; font-size:24px; letter-spacing:3px; text-transform:capitalize; color: #2073B2;">
												About Luvviz... 
						</div>
						<p class="text" style="color:#bdbdbd; font-size:24px; margin-top:0px; margin-bottom:5px; font-family: 'alex_brushregular';">
												Luvviz is a young E-commerce business company in India.<br />
Luvviz committed to provide you, hassle free and perpetual services.
						</p>
						<div class="footerhead" style="margin-top:25px; display:none;">
												The Process of making
												<br />
												<br />
												
						</div>
							<!--<table style="width:100%; height:100px;">
								<tr>
									<td><input type="text" name="mail" id="mail" value="Your E-mail Address" class="newslettertextbox" /> </td>
								</tr>
								<tr>
									<td><input type="button" name="submit" value="" id="btn" style="width:150px; height:41px; background:url(images/newssignup.png); border:none;" onclick="return insert_news_mail();" /></td>
								</tr>
							</table>-->
			</div>
				 
					

                          </div>
                               </div>
			 



			<div id="footer2">
				 
				<div id="footer2-box">
								<div id="footer-logo" style="border-right:none;">
										<img src="images/footer_logo.png"  />
								</div>
								<div id="footer-link">
										<ul>
												<li style="list-style-type:none; color:#CCCCCC; text-align:right; float:right;">Copyright © 2014 <a href="http://luvviz.com" style="color:#93dbff; text-decoration:underline;">luvviz</a> All Right Reserved.</li>
										</ul>
								</div>
				</div>
			</div>
     </div>
</div>
 </div>
 
		<!--</div>-->	
</body>
