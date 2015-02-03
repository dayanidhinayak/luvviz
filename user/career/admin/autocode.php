<?php
include_once('database.php');
mysql_query("delete from `authcode` where `status`='0'");
if(isset($_POST['submit']))
{
     $n=htmlentities($_REQUEST['number']);
  while($n>0){
  $result=uniqid();

 $ins="insert into authcode(code,status) values ('$result','0')";
   mysql_query($ins) or die(mysql_error());
         $n--;
              }

}
?>
<html>
<head>
<link href="../style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script>
     function del(c)
     {
	  //alert(c);
     $.ajax({url:"delete.php?co="+c,success:function(result){
                }});
     $("#delete").display="none";
     }
</script>
</head>
<body style="background:url(bg.png);">
			
<?php
include_once("topbar.php");
    ?>
	
	<div id="content_bar" style="height:auto;">
		<div id="content_con">
		
			<div id="content_conbox">
				<div id="content_conbox_top">
					<h1 class="header" style="margin-left:13px; font-family:arial; margin-top:9px; font-size:15px;">Generate Authcode</h1>
				</div>
				<div id="content_conbox_bottom">
				
					<form name="autocode" action="" method="post">
						<table cellpadding="5" class="table" style="width:500px; height: 150px; font-family:arial; font-size:14px; ">
					   
							<tr>
								<td>Number of authcodes to generate:</td>
								<td><input type="text" name="number" class="textbox"></td>	
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="submit" class="button" style="background:#27911d;"></td>
							<tr>
						</table>
					</form>
				</div>
			</div>
			<div id="content_conbox" style="width:330px; margin-top:10px;">
				<div id="content_conbox_left">
					<div class="content_conbox_con">Available Authcodes</div>
					<table cellpadding="5" class="table1">
					 
							  <?php
							   $fet="select * from authcode where status=0";
							   $qur=mysql_query($fet);
							  while( $res=mysql_fetch_array($qur))
							  {
							   $code=$res['code'];
							   ?>
						<tr>
							<td> <?php echo $code;?></td>
						</tr>
							  <?php } ?>
					 

					</table>
				</div>	 
			</div>
			<div id="content_conbox" style="width:330px; margin-left:20px; margin-top:10px; ">
				<div id="content_conbox_right">
					<div class="content_conbox_con">Failed Authcodes</div>
					<table cellpadding="5" class="table1">
						
							  <?php
							   $fet="select * from authcode where status=1";
							   $qur=mysql_query($fet);
							  while( $res=mysql_fetch_array($qur))
							  {
							   $code=$res['code'];
							   ?>
						<tr>
							  <td> <?php echo $code;?></td>
						</tr>
							  <?php } ?>
						

					</table>
				</div>	 
      
      
      
					  <!--<table cellpadding="5" style="width:90%; height: 100px; font-family:arial; font-size:25px; color: #666; border: none;">
						 
					 </table>-->
			</div>
		</div>
	</div>
      
   
                                               <!-- </div>
</div>-->
<div id="footer" style=" background:rgb(68, 121, 202); height:45px; margin-top:200px;">
				<div id="footer_bar" style=" background:none; height:35px;">
					

    Copyright &copy; 2014 luvviz All Right Reserved.


				</div>
</div>
</body>
</html> 
