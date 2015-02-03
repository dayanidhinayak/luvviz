<div id="topbar-box">
								<div id="logo-box">
										<a href="index.htm"><img src="images/logo1.jpg" width="80"/></a>
								</div>
								<div id="headright-box">
										<div id="headlink">
												<div id="headright-box1">
												<?php include_once("topbar1.php"); ?>
												</div>	
												<div id="menu">
													<ul>
													<?php
										$rr=mysql_query("select * from `menulimit`");
										$roo=mysql_fetch_array($rr);
										$menulimitvalue=$roo['limit'];
										$res=mysql_query("select * from `category` where `status`='1' ORDER BY `priority`  limit 0,$menulimitvalue");
										while($row=mysql_fetch_array($res)){
										?>
									        <a href="category.php?idval=<?php echo $row['id'];?>"><li><?php echo $row['category_name'];?></li></a>
													<?php
													}
													?>
										<li>Contactus</li>
													</ul>	
												</div>
										</div>
								</div>
