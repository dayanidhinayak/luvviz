<?php
include_once("function.php");
$pid=$_GET['idvalue'];
if(isset($_GET['msg']))
   {
$msg=$_GET['msg'];
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title><!-- Insert your title here --></title>
 <script type="text/javascript" language="javascript" src="ratingsys.js"></script>


<style type="text/css">
    #rateStatus{float:left; clear:both; width:100%; height:20px;}
    #rateMe{float:left; clear:both; width:100%; height:auto; padding:0px; margin:0px;}
    #rateMe li{float:left;list-style:none;}
    #rateMe li a:hover,
    #rateMe .on{background:url(star_on.png) no-repeat;}
    #rateMe a{float:left;background:url(star_off.png) no-repeat;width:20px; height:20px;}
    #ratingSaved{display:none;}
    .saved{color:red; }
    tr{
        width:100%;
        height: 25px;
    }
</style>
</head>
<body>
    <div style="width:900px; height:auto; float:left; margin-left: -10px;">
    
    <?php
    $q=mysql_query("select * from `review` where `product_id`='$pid' and `status`='1'");
    $count=mysql_num_rows($q);
    if($count==0)
    {
    ?>
    
    <div style="width:880px; height: auto; padding:10px; float:left; border:1px solid #eee; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#333333; margin-bottom: 15px;">
    There are no reviews for this product.
        </div>
        <?php
        }
        else
        {
        if($msg==1)
        {
         ?>
         <div style="width:880px; height: auto; padding:10px; float:left; border:1px solid #eee; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#333333; margin-bottom: 15px;">
    Successfully Review Submited.
        </div>
         
     <?php
        }
     while($r=mysql_fetch_array($q))
    {
    
    
    ?>
        <div style="width:880px; height: auto; padding:10px; float:left; border-bottom:1px solid #eee; line-height: 1.6; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#333333; margin-bottom: 15px;">
        <div><span style="font-size:14px; font-weight:bold;"><?php echo $r['name'];?> </span>  (<?php echo $r['date'];?>)</div>
        
        <div>Rating
        <?php 
        if($r['rating']=='1')
        {
        ?>
        <img src="star_on.png" />
        <?php
        }
        if($r['rating']=='2')
        {
        ?>
        <img src="star_on.png" /><img src="star_on.png" />
         <?php
        }
        if($r['rating']=='3')
        {
        ?>
        <img src="star_on.png" /><img src="star_on.png" /><img src="star_on.png" />
        <?php
        }
        if($r['rating']=='4')
        {
        ?>
        <img src="star_on.png" /><img src="star_on.png" /><img src="star_on.png" /><img src="star_on.png" />
        <?php
        }
         if($r['rating']=='5')
        {
        ?>
        <img src="star_on.png" /><img src="star_on.png" /><img src="star_on.png" /><img src="star_on.png" /><img src="star_on.png" />
        <?php
        }
        ?>
        </div>
        <div>
            <?php echo $r['review'];?>
            </div>
        </div>
            <?php
            }
            }
            ?>
        </div>
        <form action="insert_review.php" method="post" >
        <table style="width:900px; height:auto; float:left; margin-top: 15px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#00257b;">
            <tr>
                <th style="font-size: 16px;">
                    Write a review
                </th>
            </tr>
            <tr>
                <td>
                    Your Name:
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="name" style="width:150px; height: 30px;background: #F8F8F8; border: 1px solid #CCC; padding: 3px;" required/>
                </td>
            </tr>
            <tr>
                <td>
                    Your Review:
                </td>
            </tr>
            <tr>
                <td>
                    <textarea onFocus="this.value=''" style="width:870px; height: 150px;background: #F8F8F8; border: 1px solid #CCC; padding: 3px;" name="review" >
                        
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                    Rating:
                </td>
            </tr>
            <tr  style="margin-bottom: 10px;">
                <td>
                    <span id="rateStatus"></span>
                    <span id="ratingSaved">Rating Saved!</span>
                    <div id="rateMe" title="Rate Me...">
                        <a onclick="rateIt(this)" id="_1" title="1" onmouseover="rating(this)" onmouseout="off(this)"></a>
                        <a onclick="rateIt(this)" id="_2" title="2" onmouseover="rating(this)" onmouseout="off(this)"></a>
                        <a onclick="rateIt(this)" id="_3" title="3" onmouseover="rating(this)" onmouseout="off(this)"></a>
                        <a onclick="rateIt(this)" id="_4" title="4" onmouseover="rating(this)" onmouseout="off(this)"></a>
                        <a onclick="rateIt(this)" id="_5" title="5" onmouseover="rating(this)" onmouseout="off(this)"></a>
                    </div>
                    <input type="hidden" name="rating" id="hdn" />
                    <input type="hidden" name="hidden" value="<?php echo $_GET['idvalue'];?>" />
                </td>
            </tr>
            <tr>
<td><img src="captcha.php" id="captcha" style="width:150px; height:50px;" /><a href="#" onclick="
    document.getElementById('captcha').src='captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();"
    id="change-image"><img src="refresh.png"/></a>
    
    </td>
</tr>
<tr>
<td><input type="text" name="captcha" id="captcha-form" autocomplete="off"  style="width:150px; height: 30px;background: #F8F8F8; border: 1px solid #CCC; padding: 3px;" required />
    <?php
    if(isset($_GET['msg'])){
        ?>
<input type="text"  style=" color: red; font-size: 14px;width:300px; height: 30px;border:none; padding: 3px;" value="<?php if($_GET['msg']==0) echo 'Please Verify Your Captcha';?>"/>
<?php
    }
    ?>
</td>

</tr>
            <tr>
                <td style="width:870px; height:50px; float:left; border:1px solid #eee; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color:#00257b;">
                    <input type="submit" value="Submit" style=" margin-top: 15px; margin-left: 10px;padding: 4px 14px 7px;border:none; text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);
border-radius: 4px 4px 4px 4px;box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);font-size: 13px; background: -moz-linear-gradient(center top , rgb(56, 129, 167), rgb(36, 90, 119)) repeat scroll 0% 0% transparent; background: -webkit-gradient(linear, center top, center bottom, from(rgb(56, 129, 167)), to(rgb(36, 90, 119)));color:#FFFFFF;"/>
                </td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>
