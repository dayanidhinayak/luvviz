<style>
        #cssmenu,
#cssmenu ul,
#cssmenu li,
#cssmenu a {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  font-weight: normal;
  text-decoration: none;
  line-height: 1;
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
  position: relative;
}
#cssmenu a {
  line-height: 1.3;
}
#cssmenu {
  width: 220px;
}
#cssmenu > ul > li > a {
  padding-right: 40px;
  font-size: 25px;
  font-weight: bold;
  display: block;
  background: #bd0e36;
  background:#cdcdcd;
  background:none;
  color: #ffffff;
  text-transform: uppercase;
  position: relative;
}
#cssmenu > ul > li > a > span {
  background: #ed1144;
  padding:8px;
  display: block;
  font-size: 13px;
  font-weight: 300;
  background:#fff;
}
#cssmenu > ul > li > a:hover {
  text-decoration: none;
}
#cssmenu > ul > li.active {
  border-bottom: none;
}
#cssmenu > ul > li.active > a {
  color: #fff;
}
#cssmenu > ul > li.active > a span {
  background: #fff;
}
#cssmenu span.cnt {
  position: absolute;
  top: 8px;
  right: 180px;
  padding: 0;
  margin: 0;
  background: none;
  background:url(images/icon4.png)no-repeat;
  width:22px;
  height:20px;
}
#cssmenu ul ul {
  display: none;
}
#cssmenu ul ul li {
  border: 1px solid #e0e0e0;
  border-top: 0;
}
#cssmenu ul ul a {
  padding: 10px;
  display: block;
  color: #3d6998;
  font-size: 13px;
}
#cssmenu ul ul a:hover {
  color: #bd0e36;
}
#cssmenu ul ul li.odd {
  background: #f4f4f4;
}
#cssmenu ul ul li.even {
  background: #fff;
}
    
</style>
<div style="width:97%; height:auto30px; float:left;">
		<div style="width:1000px; height:auto; margin:auto; font-family:arial; word-spacing:5px;">
			<div id='cssmenu' style="height:30px; margin-left:410px; width:180px; margin-top:8px; position:absolute; z-index:99;">
        <ul>
           
            <li style="line-height:1;">
                <a href='#'>
                    <span style="color:#000;">
                  <?php
		   $sql=mysql_query("select * from `user_details` where `email`='$_SESSION[id]'");
		   $resuser=mysql_fetch_array($sql);
		   echo  "<span style='color:#000;'>Hi</span> <span style='color:#3d6998; text-align:right;'>".$resuser['first_name']."</span>";		   
		   ?>
                    </span>
                   
                </a>
              <ul>
                 <li><a href='changepassword.php'><span>Change password</span></a></li>
                 <li><a href='history_purchase.php'><span>History Purchase</span></a></li>
                 <li><a href='userlogout.php'><span>Logout</span></a></li>
              </ul>
            </li>
          
        </ul>
    </div>
		</div>
</div>