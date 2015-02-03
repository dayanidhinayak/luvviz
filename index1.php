<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
<title>Demo Template</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		 
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
		
<!-------------------banner script-------------------->		
	<link rel="stylesheet" type="text/css" href="css2/plusslider.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src='js2/jquery.plusslider.js'></script>
	<script type="text/javascript" src='js2/jquery.easing.1.3.js'></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#slider2').plusSlider({
			autoPlay: false,
			displayTime: 2000, // The amount of time the slide waits before automatically moving on to the next one. This requires 'autoPlay: true'
			sliderType: 'fader', // Choose whether the carousel is a 'slider' or a 'fader'
			width: 1040, // Overide the default CSS width
			height: 250 // Overide the default CSS width
		});

		$('#slider3').plusSlider({
			sliderEasing: 'easeInOutExpo', // Anything other than 'linear' and 'swing' requires the easing plugin
			fullWidth: true,
			autoPlay: false, 
			sliderType: 'slider' // Choose whether the carousel is a 'slider' or a 'fader'
		});

	});
	</script>
<!-------------------banner script-------------------->	
</head>
<body>
<div id="main-bar">
		<div id="main-box">
				<div id="topbar">
						<div id="topbar-box">
								<!-------------------topbar-------------------->	
								<div id="logo-box">
										<img src="images/logo1.jpg" width="80"  />
								</div>
								<div id="headright-box">
										<div id="headlink">
												<div id="headright-box1">
														<div id="toplink">
																<ul>
																		<li style="border-right:none; width:30%;">Shipping Card </li>
																		<li>Create Account </li>
																		<li>Shipping</li>
																		<li>Login</li>
																</ul>
														</div>
												</div>	
												<div id="menu">
														<ul>
																<li>Home</li>
																<li>Men</li>
																<li>Women</li>
																<li>About</li>
																<li>Customerserviscs</li>
																<li>Contact</li>
														</ul>
												</div>
										</div>
								</div>
									<!-------------------topbar end-------------------->
								
								<!-------------------banner bar-------------------->	
								<div id="banner">
										<div id="slider2" style="width:1040px;">
												<a href="#"><img src="images/baner.jpg" alt="" height="450" width="1040" /></a>
												<img src="images/baner1.jpg" alt="" height="450" width="1040" />
												<img src="images/baner2.jpg" alt="" height="450" width="1040" />		
										</div>
								</div>
								<!-------------------banner bar end-------------------->	
								<div id="content">
										<div id="content-left">
												<h1 class="head2">
														NEW & TRULY RICH
												</h1>
												<p class="text">
														Ekmatra brings to you its new imbuing classic collection with contemporary creativity.Our latest collection features a vibrant array of colours with a distinct sense of aesthetics.Keeping true to our values this handmade collection is for those who look beyond the mundane everyday apparel choices.
												</p>
										</div>
										<div id="content-right">
												<div class="product-box">
														<div class="product-content">
																<img src="images/1.jpg" style="width:100%;"/>
														</div>
														<div class="product-text">
																Narya Full Sleeves Solid Shirt
														</div>
														<div class="price">
																INR 1,499
														</div>
												</div>
												
												<div class="product-box">
														<div class="product-content">
																<img src="images/2.jpg" style="width:100%;"/>
														</div>
														<div class="product-text">
																Narya Full Sleeves Solid Shirt
														</div>
														<div class="price">
																INR 1,499
														</div>
												</div>
												
												<div class="product-box">
														<div class="product-content">
																<img src="images/3.jpg" style="width:100%;"/>
														</div>
														<div class="product-text">
																Narya Full Sleeves Solid Shirt
														</div>
														<div class="price">
																INR 1,499
														</div>
												</div>
												
												<div class="product-box">
														<div class="product-content">
																<img src="images/4.jpg" style="width:100%;"/>
														</div>
														<div class="product-text">
																Narya Full Sleeves Solid Shirt
														</div>
														<div class="price">
																INR 1,499
														</div>
												</div>
												<div class="product-box">
														<div class="product-content">
																<img src="images/1.jpg" style="width:100%;"/>
														</div>
														<div class="product-text">
																Narya Full Sleeves Solid Shirt
														</div>
														<div class="price">
																INR 1,499
														</div>
												</div>
										</div>
								</div>
								<div id="content2">
										<div id="ca-container" class="ca-container">
												<div class="ca-wrapper">
													<div class="ca-item ca-item-1" style="left:0px;">
															<div class="ca-item-main">
																		<div class="product-box2">
																				<div class="product-content2">
																						<img src="images/img1.jpg" style="width:100%;"/>
																				</div>
																				<div class="product-text2">
																						brings to you its new imbuing classic collection.</div>
																				<div class="price2">
																						INR 1,499
																				</div>
																		</div>
															</div>
													</div>

													<div class="ca-item ca-item-2" style="left:188px;">
														<div class="ca-item-main">
																	<div class="product-box2">
																			<div class="product-content2">
																					<img src="images/img2.jpg" style="width:100%;"/>
																			</div>
																			<div class="product-text2">
																					brings to you its new imbuing classic collection.</div>
																			<div class="price2">
																					INR 1,499
																			</div>
																	</div>
														</div>
												</div>

												<div class="ca-item ca-item-3" style="left:366px;">
														<div class="ca-item-main">
																	<div class="product-box2">
																			<div class="product-content2">
																					<img src="images/img3.jpg" style="width:100%;"/>
																			</div>
																			<div class="product-text2">
																					brings to you its new imbuing classic collection.</div>
																			<div class="price2">
																					INR 1,499
																			</div>
																	</div>
														</div>
												</div>

												<div class="ca-item ca-item-4" style="left:544px;">
														<div class="ca-item-main">
																	<div class="product-box2">
																			<div class="product-content2">
																					<img src="images/img3.jpg" style="width:100%;"/>
																			</div>
																			<div class="product-text2">
																					brings to you its new imbuing classic collection.</div>
																			<div class="price2">
																					INR 1,499
																			</div>
																	</div>
														</div>
												</div>

												<div class="ca-item ca-item-5" style="left:722px;">
														<div class="ca-item-main">
																	<div class="product-box2">
																			<div class="product-content2">
																					<img src="images/img1.jpg" style="width:100%;"/>
																			</div>
																			<div class="product-text2">
																					brings to you its new imbuing classic collection.</div>
																			<div class="price2">
																					INR 1,499
																			</div>
																	</div>
														</div>
												</div>

												<div class="ca-item ca-item-6" style="left:900px;">
														<div class="ca-item-main">
																	<div class="product-box2">
																			<div class="product-content2">
																					<img src="images/img1.jpg" style="width:100%;"/>
																			</div>
																			<div class="product-text2">
																					brings to you its new imbuing classic collection.</div>
																			<div class="price2">
																					INR 1,499
																			</div>
																	</div>
														</div>
												</div>
					
												<div class="ca-item ca-item-7" style="left:1078px;">
															<div class="ca-item-main">
																		<div class="product-box2">
																				<div class="product-content2">
																						<img src="images/img2.jpg" style="width:100%;"/>
																				</div>
																				<div class="product-text2">
																						brings to you its new imbuing classic collection.</div>
																				<div class="price2">
																						INR 1,499
																				</div>
																		</div>
															</div>
													</div>	
											</div>
									</div>
							</div>
									
									<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
									<!-- the jScrollPane script -->
											<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
									<script type="text/javascript">
										$('#ca-container').contentcarousel();
									</script>
								</div>
						</div>
				</div>
		</div>
</div>
<div id="footer">
		<div id="footer-box">
				<div id="footer-content">
						<div id="footer-contentbox">
								<div id="footerleftbox">
										<div id="footer-leftcontent">
												<div class="footerhead" style="color:#2073b2; font-weight:bold;">
														Need Help ?
												</div>
												<ul>
														<li>Log in</li>
														<li>Create Account</li>
														<li>Contact Us</li>
												</ul>
												<div id="contect-botton" style="margin-top:50px; background:#2073b2; border:none;">
														Contact Us
												</div>
										</div>
										<div id="footer-rightcontent">
												<div class="footerhead" style="color:#2073b2; font-weight:bold;">
														Menu
												</div>
												<ul>
														<li>Home</li>
														<li>men</li>
														<li>women</li>
														<li>About Us</li>
														<li>Customer Servics</li>
														<li>Shipping</li>
												</ul>
										</div>
								</div>
								<div id="footerrightbox">
										<div class="footerhead" style="color:#2073b2; font-weight:bold;">
												Payment Methods
										</div>
										<div style="width:500px; height:auto; float:left;">
												<h2 class="head2" style="color:#fff; margin-top:0px;">
														C.O.D											
												</h2>
										</div>
										<div class="footerhead" style="margin-top:25px;">
												The Process of making
												<br />
												<br />
												<img src="images/footer_process.png"  />
										</div>
								</div>
						</div>
				</div>
				<div id="footer2">
						<div id="footer2-box">
								<div id="footer-logo" style="border-right:none;">
										<p class="text" style="color:#fff;">
												Copyright reseved 2013
										</p>
								</div>
								<div id="footer-link">
										<p class="text" style="color:#fff; text-align:right;">
												Shopping
										</p>
								</div>
						</div>
				</div>
		</div>
</div>
</body>
</html>
