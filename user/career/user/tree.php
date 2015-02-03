<?php
ob_start();
session_start();
include_once('database.php');
?>
<html>
<head>
 <link href="../style.css" type="text/css" rel="stylesheet" />
</head>
<body style="background:url(images/bg.png);">
 <?php
include_once("topbar1.php");
 ?>
<?php
 $uid=$_SESSION['name'];

        $reg_table='register';
        $fet=mysql_query("select * from `$reg_table` where `userid`='$uid'");
	$res=mysql_fetch_array($fet);
	

if(isset($_REQUEST['mid']))
        {
	$mid=$_REQUEST['mid'];
	 $id=$_GET['mid'];
	
        
	 $fet1=mysql_query("select * from `$reg_table` where `mid`='$id'");
         $res1=mysql_fetch_array($fet1);
         $user1=$res1['name'];
	 $usid=$res1['userid'];
	 $left=$res1['left'];
	 $ri=$res1['right'];
	}
	else{
		$mid=$res['mid'];
		$user1=$res['name'];
		$left=$res['left'];
		$usid=$res['userid'];
		$ri=$res['right'];
	    }
 ?>
 
<div id="content_bar">
		<div id="content_con">
			<div id="content_conbox" style="width:790px; margin-left:86px;">
				<div id="content_conbox_top" style="height:46px; width:777px;">
					<h1 class="header" style="margin-left:20px; font-family:arial; margin-top:13px; font-size:15px;">View Your Tree</h1>
				</div>
			<!--<div class="header"> View Your Tree </div>-->
<!--<div id="container">

						<div id="container_content" style="height:300px;">
									<div class="header"> View Your Tree </div>-->
			<div id="content_conbox_bottom" style="padding-bottom:20px; width:760px;">
									        <table style="width:717px;font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#333333; height:280px; margin-left:15px;">
            <tr align="center">
		<td colspan=16><?php echo "$user1/$uid"; ?></br><img src='images/tree.png' /></td></tr>
            <tr align="center">
		<td colspan=8 style="width: 30px;" ><?php $x=getdetails($mid*2); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*2)."'><img src='images/tree.png' /></a>"; } else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=8 style="width: 30px;"><?php $x=getdetails($mid*2+1); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*2+1)."'><img src='images/tree.png' /> </a>"; } else echo "<img src='images/tree0.png'/>";?></td> </tr>
            <tr align="center">
		<td colspan=4 style="width: 30px;"><?php $x=getdetails($mid*4); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*4)."'><img src='images/tree.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=4 style="width: 30px;"><?php $x=getdetails($mid*4+1); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*4+1)."'><img src='images/tree.png' /> </a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=4><?php $x=getdetails($mid*4+2); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*4+2)."'><img src='images/tree.png' /> </a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=4><?php $x=getdetails($mid*4+3); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*4+3)."'><img src='images/tree.png' /> </a>"; }else echo "<img src='images/tree0.png'/>";?></td></tr>
            <tr align="center">
		<td colspan=2 style="width: 30px;"><?php $x=getdetails($mid*8); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8)."'><img src='images/tree.png' /> </a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=2 style="width: 30px;"><?php $x=getdetails($mid*8+1); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+1)."'><img src='images/tree.png' /> <a/>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=2><?php $x=getdetails($mid*8+2); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+2)."'><img src='images/tree.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=2><?php $x=getdetails($mid*8+3); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+3)."'><img src='images/tree.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=2 style="width: 30px;"><?php $x=getdetails($mid*8+4); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+4)."'><img src='images/tree.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=2><?php $x=getdetails($mid*8+5); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+5)."'><img src='images/tree.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=2 style="width: 30px;"><?php $x=getdetails($mid*8+6); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+6)."'><img src='images/tree.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=2><?php $x=getdetails($mid*8+7); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+7)."'><img src='images/tree.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td></tr>
        </table>
		</div>
									
		</div>
			<div style="width:760px; height: auto; float: left;">
		 <table style="width:200px;font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#333333; height:auto; margin-left:50%;" align="center">
		  <tr>
		   <th>Left</th>
		   <th>Right</th>
		   <th>Spill</th>
		  </tr>
		  <tr>
		   <td align="center"><?php echo $left;?></td>
		   <td align="center"><?php echo $ri;?></td>
		   <?php
		   $fetch=mysql_query("select * from `$reg_table` where `sid`='$usid'");
		   $count1=mysql_numrows($fetch);
		   if($count1>2)
		   {
		   $count=$count1-2;
		   }else{ $count=0; }
		   ?>
		   <td align="center"><?php echo $count;?></td>
		  </tr>
		 </table>
		</div>	
	</div>
</div>	
			<!---</div>-->
			<?php
	include_once("footer.php");
	?>
</body>
</html> 