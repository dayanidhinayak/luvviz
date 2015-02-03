<?php
ob_start();
session_start();
include_once ("database.php");
if (!$_SESSION['name'])
header("location:../login.php");
?>
<?php include_once('database.php');?>
<html>
<head>
     <link rel="stylesheet" href="style.css" type="text/css" media="screen" >
        <style>
            table{
                border:1px solid #dedede;
                border-collapse:collapse;
            }
            tr td{
                border:1px solid #dedede;
                border-collapse:collapse;
                height: 30px;
            }
            tr th{
                border:1px solid #dedede;
                border-collapse:collapse;
                height: 35px;
                background: #efefef;
                color: #333;
            }
        </style>
</head>
<body>

<div id="container" style="height: auto; ">
		    <div id="container_content" style="height: 0px;">
			
		      </div>
		    <div style="text-align: center">MY ACCOUNT</div>
                        <table align="center">
                            <tr>
                                <td align="center">SLNO</td>
                                <td align="center">DATE</td>
                                <td align="center">POINTS</td>
                                <td align="center">AMOUNT</td>
                            </tr>
                            <tr>
                            <?php
				 
				 $i=$_SESSION['name'];
				 echo $id="account".$i;
                                $res=mysql_query("select * from `$id`") or die(mysql_error());
                                while($fetch=mysql_fetch_array($res))
                                  {
                            ?>
                            <td align="center"><?php echo $fetch['slno']; ?></td>
                            <td align="center"><?php echo $fetch['date']; ?></td>
                            <td align="center"><?php echo $fetch['points']; ?></td>
                            <td align="center"><?php echo $fetch['amount']; ?></td>
                            <?php  }?>
                            </tr>
                        </table>
		   
</div>
</body>
</html> 