<?php
ob_start();
session_start();
$con=mysql_connect("localhost","luvviz_luvviz","pass@1234");
mysql_select_db("luvviz_cart",$con);
$ipval=$_SERVER['SERVER_ADDR'];

$ip=$_SERVER['REMOTE_ADDR'];

//$path='192.168.2.105/subha/luviz/admin_new';

$val=$_SERVER["REQUEST_URI"];
if(isset($_SESSION['user']))
{
mysql_query("insert into `page` set `userid`='$_SESSION[user]',`page_name`='$val',`ip`='$ip'");
}
else
{
header("location:http://luvviz.com");

}



function getext($image)
{
$i=strrpos($image,'.');
$l=strlen($image)-$i;
$ext=substr($image,$i+1,$l);
$ext=strtolower($ext);
return $ext;
}

function getexatfilename($file)
{
$file=stripslashes($file);
return $file;
}

$val="";
function getparent($id){
	
	
	$rsSub = mysql_query("select * from `category` where `id`='$id'") or die(mysql_error());
	$rows_sub = mysql_fetch_array($rsSub);
	
			if($rows_sub['parent']==0)
			{
			$val=$rows_sub['category_name'];
			echo $val;
			}
			
			else
			{
			$val=$rows_sub['category_name'].">".$val;
			echo $val;
			getparent($rows_sub['parent']);
			}
		
		
		
	
	
	
	
}

function tree_view($index)
{
 $q_self=mysql_query("select * from `category` where `id`='$index'  limit 0,1 ");
            $r_self=mysql_fetch_array($q_self);
    $q=mysql_query("select * from `category` where `parent`='$index'  limit 0,1 ")or die(mysql_error());
    
   $arr=mysql_fetch_array($q);
  
    echo '<ul>';
        echo '<li>';
        if($arr['parent']==0)
			{
			$val=$r_self['category_name'];
           
			?>
			<input type="radio" name="idval" value="<?php echo $r_self['id']?>" ><?php echo $val?>
			<?php
			}
			
			else
			{
			$val=$r_self['category_name'];
			//echo $val;
			?>
			<input type="radio" name="idval" value="<?php echo $r_self['id']?>" ><?php echo $val?>
			<?php
			tree_view($arr['id']);
			}
      
       
       echo "</li>";
   
    echo '</ul>';
}  
 
/*

*/
function tree_view1($index)
{

    $q=mysql_query("select * from `category` where `id`='$index' ");
    
   $arr=mysql_fetch_array($q);
    echo '<ul>';
	?>
      <li>
		<?php
        if($arr['parent']==0)
			{
			$val=$arr['category_name'];
			?>
			<div onclick="return getvalue( <?php echo $arr['id']?>,'<?php echo $val?>')"><?php echo $val?></div>
			<?php
			}
			
			else
			{
			$val=$arr['category_name'];
			?>
			<div onclick="return getvalue(<?php echo $arr['id']?>,'<?php echo $val?>')"><?php echo $val?></div>
			<?php
			tree_view1($arr['parent']);
			}
      
       
       echo "</li>";
   
    echo '</ul>';
}  
	



?>
