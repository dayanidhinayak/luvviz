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
		    <div id="container_content" style="height: 0px;"></div>
                    <div style="text-align: center">ACCOUNT DETAILS</div>
                    <table align="center">
                        <th>Slno</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Pair</th>
			<th>Actual Amount</th>
			<th>Spill</th>
                       <!--<th>Status</th>-->
                        
                    <?php
                     $account=$_REQUEST['q'];
                    $fet=mysql_query("select * from `$account`");
                   while($res=mysql_fetch_array($fet))
                   {
		     $amount=$res['amount'];
		     $less=$amount*0.153;
		     $total=$amount-(10+$less);
                    ?>
                    <tr>
                        <td align="center"><?php echo $res['slno']; ?></td>
                        <td align="center"><?php echo $res['date']; ?></td>
                        <td align="center"><?php echo $res['amount']; ?></td>
                        <td align="center"><?php echo $res['points']; ?></td>
			<td align="center"><?php echo $total ?></td>
			<td align="center"><?php echo $res['brought']; ?></td>
                         <!-- <td><?php echo $res['status']; ?></td>-->
                    </tr>
                   
                    <?php }?>
            
                     </table>
</body>
</html> 