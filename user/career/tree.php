<?php
ob_start();
session_start();
if (!$_SESSION['name'])
header("location:../login.php");
$reg_table='register';
$mid=0;
?>
<?php
include_once('database.php');
echo "----". $uid=$_SESSION['name'];
$fet=mysql_query("select `name` from $reg_table where `userid`='$uid'");
 $res=mysql_fetch_array($fet);
 $res['name'];

 
if(isset($_REQUEST['mid']))
        {
	$mid=$_REQUEST['mid'];
       $id=$_GET['mid'];
	
	$fet1=mysql_query("select `name` from $reg_table where `mid`='$id'");
        $res1=mysql_fetch_array($fet1);
	
	$user1 = $res1['name'];
	}
	else{
		$mid=1;
		echo $user1 = $res['name'];
	    }
	
 ?>

<div id="container">
						<div id="container_content" style="height:300px;">
									<div class="header"> View Your Tree </div>
									        <table style="width:900px; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#333333; height:280px;">
            <tr align="center">
			<td colspan=16><?php echo $user1; ?></br><img src='images/tree1.png'/></td>
	    </tr>
            <tr align="center">
		<td colspan=8 style="width: 30px;"><?php $x=getdetails($mid*2); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*2)."'><img src='images/tree1.png' /></a>"; } else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=8 style="width: 30px;"><?php $x=getdetails($mid*2+1); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*2+1)."'><img src='images/tree1.png' /> </a>"; } else echo "<img src='images/tree0.png'/>";?></td>
	</tr>
            <tr align="center">
		<td colspan=4 style="width: 30px;"><?php $x=getdetails($mid*4); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*4)."'><img src='images/tree1.png' /></a>"; } else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=4 style="width: 30px;"><?php $x=getdetails($mid*4+1); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*4+1)."'><img src='images/tree1.png' /> </a>"; } else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=4><?php $x=getdetails($mid*4+2); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*4+2)."'><img src='images/tree1.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=4><?php $x=getdetails($mid*4+3); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*4+3)."'><img src='images/tree1.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
	    </tr>
            <tr align="center">
		<td colspan=2 style="width: 30px;"><?php $x=getdetails($mid*8); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8)."'><img src='images/tree1.png' /></a>"; } else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=2 style="width: 30px;"><?php $x=getdetails($mid*8+1); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+1)."'><img src='images/tree1.png' /> <a/>"; } else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=2><?php $x=getdetails($mid*8+2); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+2)."'><img src='images/tree1.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=2><?php $x=getdetails($mid*8+3); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+3)."'><img src='images/tree1.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=2 style="width: 30px;"><?php $x=getdetails($mid*8+4); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+4)."'><img src='images/tree1.png' /></a>"; } else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=2><?php $x=getdetails($mid*8+5); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+5)."'><img src='images/tree1.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td colspan=2 style="width: 30px;"><?php $x=getdetails($mid*8+6); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+6)."'><img src='images/tree1.png' /></a>"; }else echo "<img src='images/tree0.png'/>";?></td>
		<td style="width: 30px;" colspan=2><?php $x=getdetails($mid*8+7); if($x){ echo $x['name'].'/'.$x['userid']."<br/><a href='tree.php?mid=".($mid*8+7)."'><img src='images/tree1.png' /></a>"; } else echo "<img src='images/tree0.png'/>";?></td></tr>
        </table>
										
						
			</div>
</body>
</html> 