<?php
include_once('database.php');
 $refid=$_SESSION['name'];
        if(isset($_POST['submit']))
        {
            $uid1=htmlentities($_REQUEST['userid'], ENT_QUOTES);
            $referid1=htmlentities($_REQUEST['referid'], ENT_QUOTES);
            $down=htmlentities($_REQUEST['select'], ENT_QUOTES);
            $pass1=htmlentities($_REQUEST['pass'], ENT_QUOTES);
            $uname1=htmlentities($_REQUEST['uname'], ENT_QUOTES);
            $sex1=htmlentities($_REQUEST['sex'], ENT_QUOTES);
            $dob1=htmlentities($_REQUEST['dob'], ENT_QUOTES);
            $fat1=htmlentities($_REQUEST['father'], ENT_QUOTES);
            $adder1=htmlentities($_REQUEST['adder'], ENT_QUOTES);
            $city1=htmlentities($_REQUEST['city'], ENT_QUOTES);
            $state1=htmlentities($_REQUEST['state'], ENT_QUOTES);
            $zip1=htmlentities($_REQUEST['zip'], ENT_QUOTES);
            $mob=htmlentities($_REQUEST['mobile'], ENT_QUOTES);
            $eml=htmlentities($_REQUEST['email'], ENT_QUOTES);
            $brnch=htmlentities($_REQUEST['branch'], ENT_QUOTES);
            
            $bankn=htmlentities($_REQUEST['bank'], ENT_QUOTES);
            $nmname=htmlentities($_REQUEST['nomi_name'], ENT_QUOTES);
            $nmrel=htmlentities($_REQUEST['nomi_relation'], ENT_QUOTES);
            $side=htmlentities($_REQUEST['side'], ENT_QUOTES);
            $authcod=htmlentities($_REQUEST['authcode'], ENT_QUOTES);
            
            $accnum=htmlentities($_REQUEST['accno'], ENT_QUOTES);
            $accnam=htmlentities($_REQUEST['accname'], ENT_QUOTES);
            $ifscod=htmlentities($_REQUEST['ifs'], ENT_QUOTES);
	    $pan=htmlentities($_REQUEST['pan'], ENT_QUOTES);
	    $date=date("Y-m-d");
		echo "$uid1===$referid1===$down===$side";
             if($uid1!="" && $referid1!="" && $down!="" && $side!="" )
	     {
             
              $query=mysql_query("select * from `register` where `userid`='$down'");
              $res2=mysql_fetch_array($query);
              $lft=$res2['left'];
              $rgt=$res2['right'];
              $md=$res2['mid'];
	      if(!$side=="")
	      {
		$loginuid=$uid1;
            mysql_query("insert into login_ch(`username`, `password`, `status`)VALUES ('$loginuid', '$pass1', '0')") or die(mysql_error()); 
     if($side=='L')
	{
            $mid=2*$md;
       $ins="INSERT INTO `register`( `userid`, `sid`, `did`, `mid`, `left`, `right`, `level`, `name`, `sex`, `dob`, `fathernm`,
                      `addre`, `city`, `state`, `zip`, `mobile`, `email`, `nname`, `relation`, `pass`, `bank`, `branch`, `accno`,`jod`, `accountname`, `ifscode`, `pan`, `status`)
           VALUES ('$uid1', ' $referid1', '$down', '$mid', '', '','', '$uname1', '$sex1', '$dob1', '$fat1', '$adder1', '$city1', '$state1', '$zip1', '$mob',
           '$eml', '$nmname', '$nmrel', '$pass1','$bankn', '$brnch', '$accnum' , '$date', '$accnam', '$ifscod', '$pan', '0')" ;
            mysql_query($ins) or die(mysql_error());
                mysql_query("update `register` set `left`='1' where mid='$md'") or die(mysql_error());
                $uid2="user".$uid1;
                $uid3="account".$uid1;
                mysql_query("CREATE TABLE `$uid2` (`down`INT(10), `left`INT(10), `right`INT(10))") or die(mysql_error());
                mysql_query("CREATE TABLE `$uid3` ( `slno` int(10) NOT NULL AUTO_INCREMENT,`date` date NOT NULL,`amount` float DEFAULT NULL,`brought` int(10) DEFAULT NULL, `points` int(10) DEFAULT NULL, PRIMARY KEY (`slno`))") or die(mysql_error());
               
                 $ref1d="user".$down;
                mysql_query("UPDATE  `$ref1d` SET  `left` =  '1' WHERE `down`= '$down'");
            
                 mysql_query("INSERT INTO `$uid2`(`down`,`left`,`right`) VALUES ('$uid1','0','0')") or die(mysql_error());
             $pos="L";
             
                update($md,$down,$uid1,$pos); 
        }
                
             //end of leftside  
                 else
		 {
            
                $mid=2*$md+1;
              $ins="INSERT INTO register( `userid`, `sid`, `did`, `mid`, `left`, `right`, `level`, `name`, `sex`, `dob`, `fathernm`,
                      `addre`, `city`, `state`, `zip`, `mobile`, `email`, `nname`, `relation`, `pass`, `bank`, `branch`, `accno`, `jod`, `accountname`, `ifscode`, `pan`, `status`)
           VALUES ('$uid1', ' $referid1', '$down', '$mid', '', '','', '$uname1', '$sex1', '$dob1', '$fat1', '$adder1', '$city1', '$state1', '$zip1', '$mob',
           '$eml', '$nmname', '$nmrel', '$pass1','$bankn', '$brnch', '$accnum' , '$date', '$accnam', '$ifscod', '$pan', '0')" ;
            mysql_query($ins);
	    
                  mysql_query("update `register` set `right`='1' where mid='$md'")or die(mysql_error());
                   $uid4="user".$uid1;
                $uid5="account".$uid1;
                   mysql_query("CREATE TABLE `$uid4` (`down`INT(10), `left`INT(10), `right`INT(10))") or die(mysql_error());
                 mysql_query("CREATE TABLE `$uid5` ( `slno` int(10) NOT NULL AUTO_INCREMENT,`date` date NOT NULL,`amount` float DEFAULT NULL,`brought` int(10) DEFAULT NULL, `points` int(10) DEFAULT NULL, PRIMARY KEY (`slno`))") or die(mysql_error());
               
                mysql_query("INSERT INTO `$uid4`(`down`,`left`,`right`) VALUES ('$uid1','0','0')") or die(mysql_error());
                $ref1="user".$down;
                 mysql_query("UPDATE  `$ref1` SET  `right` =  '1' WHERE `down`= '$down'");
               $pos="R";
                update($md,$down,$uid1,$pos); 
                }  
                }
	     }
	     mysql_query("UPDATE  authcode SET  `status` =  '2' where `code` = '$authcod'");
	     mysql_query("UPDATE  last SET  `id` =  '$uid1'");
	      $message="thankyou for registration"."\n"."your USERID=".$uid1."\n"." your password=".$pass1 ;
	       $subject="email verification";
	       $from="career@luvviz.com";
                mail($eml,$subject,$message,"From: $from\n");
              header("location:success.php?id=$uid1 & pass=$pass1");
	} 
 ?>
