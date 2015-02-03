<?php
include_once('database.php');
 $refid=$_SESSION['name'];
        if(isset($_POST['submit']))
        {
            $uid1=htmlentities($_REQUEST['userid']);
            $referid1=htmlentities($_REQUEST['referid']);
            $down=htmlentities($_REQUEST['select']);
            $pass1=htmlentities($_REQUEST['pass']);
            $uname1=htmlentities($_REQUEST['uname']);
            $sex1=htmlentities($_REQUEST['sex']);
            $dob1=htmlentities($_REQUEST['dob']);
            $fat1=htmlentities($_REQUEST['father']);
            $adder1=htmlentities($_REQUEST['adder']);
            $city1=htmlentities($_REQUEST['city']);
            $state1=htmlentities($_REQUEST['state']);
            $zip1=htmlentities($_REQUEST['zip']);
            $mob=htmlentities($_REQUEST['mobile']);
            $eml=htmlentities($_REQUEST['email']);
            $brnch=htmlentities($_REQUEST['branch']);
            
            $bankn=htmlentities($_REQUEST['bank']);
            $nmname=htmlentities($_REQUEST['nomi_name']);
            $nmdob=htmlentities($_REQUEST['nomi_dob']);
            $nmrel=htmlentities($_REQUEST['nomi_relation']);
            $side=htmlentities($_REQUEST['side']);
            $authcod=htmlentities($_REQUEST['authcode']);
            
            $accnum=htmlentities($_REQUEST['accno']);
            $accnam=htmlentities($_REQUEST['accname']);
            $ifscod=htmlentities($_REQUEST['ifs']);
             
             
              $query=mysql_query("select * from `register` where `userid`='$down'");
              $res2=mysql_fetch_array($query);
              $lft=$res2['left'];
              $rgt=$res2['right'];
              $md=$res2['mid'];
	      if(!$side==""){
              
     if($side=='L')
	{
          
            $mid=2*$md;
       $ins="INSERT INTO `register`( `userid`, `sid`, `did`, `mid`, `left`, `right`, `level`, `name`, `sex`, `dob`, `fathernm`,
                      `addre`, `city`, `state`, `zip`, `mobile`, `email`, `nname`, `ndob`, `relation`, `pass`, `bank`, `branch`, `accno`, `accountname`, `ifscode`, `status`)
           VALUES ('$uid1', ' $referid1', '$down', '$mid', '', '','', '$uname1', '$sex1', '$dob1', '$fat1', '$adder1', '$city1', '$state1', '$zip1', '$mob',
           '$eml', '$nmname', '$nmdob', '$nmrel', '$pass1','$bankn', '$brnch', '$accnum', '$accnam', '$ifscod', '0')" ;
            mysql_query($ins) or die(mysql_error());
			 
$loginuid=$uid1;

            $ins1="insert into login_ch(`username`, `password`, `status`)VALUES ('$loginuid', '$pass1', '0')";
            mysql_query($ins1);
            
                mysql_query("update `register` set `left`='1' where mid='$md'") or die(mysql_error());
                
                
                $uid2="user".$uid1;
                $uid3="account".$uid1;
                mysql_query("CREATE TABLE `$uid2` (`down`INT(10), `left`INT(10), `right`INT(10))") or die(mysql_error());
                mysql_query("CREATE TABLE `$uid3` (`slno`INT(10) NOT NULL AUTO_INCREMENT, `date`TIMESTAMP, `amount`FLOAT(10), `status`INT(10),`points`INT(10),PRIMARY KEY (`slno`))") or die(mysql_error());
               
                 $ref1d="user".$down;
                mysql_query("UPDATE  `$ref1d` SET  `left` =  '1' WHERE `down`= '$down'");
               // echo    "UPDATE  `$ref1d` SET  `left` =  '1' WHERE `down`= '$down'";
                
                
                 mysql_query("INSERT INTO `$uid2`(`down`,`left`,`right`) VALUES ('$uid1','0','0')") or die(mysql_error());
                 
                
             mysql_query("UPDATE  last SET  `id` =  '$uid1'");
             
             $pos="L";
             
                update($md,$down,$uid1,$pos); 
        }
               
                

                
             //end of leftside  
                 
                 
                 else
		 {
            
                $mid=2*$md+1;
              $ins="INSERT INTO register( `userid`, `sid`, `did`, `mid`, `left`, `right`, `level`, `name`, `sex`, `dob`, `fathernm`,
                      `addre`, `city`, `state`, `zip`, `mobile`, `email`, `nname`, `ndob`, `relation`, `pass`, `bank`, `branch`, `accno`, `accountname`, `ifscode`, `status`)
           VALUES ('$uid1', ' $referid1', '$down', '$mid', '', '','', '$uname1', '$sex1', '$dob1', '$fat1', '$adder1', '$city1', '$state1', '$zip1', '$mob',
           '$eml', '$nmname', '$nmdob', '$nmrel', '$pass1','$bankn', '$brnch', '$accnum', '$accnam', '$ifscod', '0')" ;
            mysql_query($ins);
	    
$loginuid=$uid1;

            $ins1="insert into login_ch(`username`, `password`, `status`)VALUES ('$loginuid', '$pass1', '0')";
            mysql_query($ins1);
             
                  mysql_query("update `register` set `right`='1' where mid='$md'")or die(mysql_error());
                   $uid4="user".$uid1;
                $uid5="account".$uid1;
                   mysql_query("CREATE TABLE `$uid4` (`down`INT(10), `left`INT(10), `right`INT(10))") or die(mysql_error());
                 mysql_query("CREATE TABLE `$uid5` (`slno`INT(10) NOT NULL AUTO_INCREMENT, `date`TIMESTAMP, `amount`FLOAT(10), `status`INT(10),`points`INT(10),PRIMARY KEY (`slno`))") or die(mysql_error());
               
                mysql_query("INSERT INTO `$uid4`(`down`,`left`,`right`) VALUES ('$uid1','0','0')") or die(mysql_error());
                $ref1="user".$down;
                 mysql_query("UPDATE  `$ref1` SET  `right` =  '1' WHERE `down`= '$down'");
               
                 
             mysql_query("UPDATE  last SET  `id` =  '$uid1'");
           
               $pos="R";
                 
           
                update($md,$down,$uid1,$pos); 
               
                }
                
                    
                    
                 mysql_query("UPDATE  authcode SET  `status` =  '2' where `code` = '$authcod'");
               
                
header("location:create_new_user.php?id=$uid1 & pass=$pass1");
                }
	}
               
 ?>
