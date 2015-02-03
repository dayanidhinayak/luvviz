<?php
include_once('database.php');
?>
<html>
<body>
<?php
 $uid=$_SESSION['name'];

            $reg_table='register';
        $fet=mysql_query("select `name` from `$reg_table` where `userid`='$uid'");
 $res=mysql_fetch_array($fet);
if(isset($_REQUEST['mid']))
        {
	$mid=$_REQUEST['mid'];
	 $id=$_GET['mid'];
	
        
	 $fet1=mysql_query("select `name` from `$reg_table` where `mid`='$id'");
         $res1=mysql_fetch_array($fet1);
         $user1=$res1['name'];
	 $userid=$res1['userid'];
	 $fet2=mysql_query("select `name` from `login` where `username`='$userid'");
         $res2=mysql_fetch_array($fet2);
	 $stat=$res2['status'];
	 
	}
	else{
		$mid=1;
		$user1=$res['name'];
	    }
 ?>

<div id="container">
						<div id="container_content" style="height:300px;">
									<div class="header"> View Your Tree </div>
									        <table style="width:900px; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#333333; height:280px;">
            <tr align="center">
		<td colspan=16><?php echo $user1; ?></br><img src='images/tree1.png' /></td></tr>
            <tr align="center">
		<td colspan=8 style="width: 30px;">
		<?php $x=getdetails($mid*2);if($x){ $fet2=mysql_query("select * from `login` where `username`='$x[userid]'")or die(mysql_error());$res2=mysql_fetch_array($fet2);$stat=$res2['status'];if($stat==1){echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*2)."'><img src='images/tree2.png' /> </a>";} else{ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*2)."'><img src='images/tree2.png' /> </a>";}}else echo "<img src='images/tree0.png'/>";?></td>
	    </tr>
        </table>
										
						
			</div>
</body>
</html> 