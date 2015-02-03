<?php include_once('database.php');?>
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
<div id="container" style="height:auto; width:100%;">
		    <div id="container_content" style="height:auto; width:960px; margin:auto;">
<?php
if(isset($_POST['submit']))
{
     $n=$_REQUEST['number'];
  
  
  for($x=1; $x<=$n;$n--){
  $result=uniqid();

 $ins="insert into authcode(code,status) values ('$result','0')";
   mysql_query($ins) or die(mysql_error());
 
         
              }

}

    ?>
     <h1 class="header" style="margin-left: 1%;">Generate Authcode</h1>
    <form name="autocode" action="" method="post">
     <table cellpadding="5" style="width:90%; height: 100px; font-family:arial; font-size:14px; color: #666;">
       
         <tr>
            <td>Number of authcodes to generate:</td>
         </tr>
         <tr>
                <td><input type="text" name="number" value="" style="width:500px;"></td>
                
                
      </tr>
         <tr>
            <td><input type="submit" name="submit" value="submit"></td>
         </tr>
     </table>
     </form>
     <table cellpadding="5" style="width:40%; font-family:arial; font-size:14px; color: #666; float:left;">
      <tr>
              <tr>
                <th>Available Authcodes</th>
              </tr>
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
      </tr>

     </table>
      <table cellpadding="5" style="width:40%; font-family:arial; font-size:14px; color: #666; float:left; margin-left:10%;">
      <tr>
              <tr>
                <th> Failed Authcodes </th>
              </tr>
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
      </tr>

     </table>
      
      
      
      <table cellpadding="5" style="width:90%; height: 100px; font-family:arial; font-size:25px; color: #666; border: none;">
         
     </table>
      
   
                                                </div>
</div>
</body>
</html> 
