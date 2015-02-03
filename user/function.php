<?php
ob_start();
session_start();
$con=mysql_connect("localhost","root","colourfade");
mysql_select_db("luvviz_cart",$con);
$val=$_SERVER["REQUEST_URI"];
//$path="http://localhost/mapkart/admin_new/";

$val=$_SERVER["REQUEST_URI"];
$ip=$_SERVER['REMOTE_ADDR'];
if(isset($_SESSION['user']))
{
mysql_query("insert into `page` set `userid`='$_SESSION[user]',`page_name`='$val',`ip`='$ip'");
}
else
{
mysql_query("insert into `page` set `userid`='anonymous',`page_name`='$val',`ip`='$ip'");
}

$que=mysql_query("select `limit` from `menulimit`");
$res=mysql_fetch_array($que);
$menulimitvalue=$res['limit'];


function getext($image)
{
$i=strrpos($image,'.');
$l=strlen($image)-$i;
$ext=substr($image,$i+1,$l);
$ext=strtolower($ext);
return $ext;
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

    $q=mysql_query("select * from `category` where `id`='$index' ");
    
   $arr=mysql_fetch_array($q);
    echo '<ul>';
        echo '<li>';
        if($arr['parent']==0)
			{
			$val=$arr['category_name'];
			?>
			<input type="radio" name="idval" value="<?php echo $arr['id']?>" ><?php echo $val?>
			<?php
			}
			
			else
			{
			$val=$arr['category_name'];
			//echo $val;
			?>
			<input type="radio" name="idval" value="<?php echo $arr['id']?>" ><?php echo $val?>
			<?php
			tree_view($arr['parent']);
			}
      
       
       echo "</li>";
   
    echo '</ul>';
}  
 

function tree_view1($index)
{

    $q=mysql_query("select * from `category` where `id`='$index' ");
    
   $arr=mysql_fetch_array($q);
    echo '<ul>';
	?>
      <li onclick="return getvalue(<?php echo $arr['id']?>)" >
		<?php
        if($arr['parent']==0)
			{
			$val=$arr['category_name'];
			echo $val;
			}
			
			else
			{
			$val=$arr['category_name'];
			echo $val;
			
			tree_view1($arr['parent']);
			}
      
       
       echo "</li>";
   
    echo '</ul>';
}  
$value="";	
$v=array();
function path($pid)

{

//echo "select * from `category` where `id`='$pid'";
$q1=mysql_query("select * from `category` where `id`='$pid'");
			$r1=mysql_fetch_array($q1);
			if($r1['parent']==0)
			
			{
		
			$value.=$r1['category_name'].">";
			$v=$r1['category_name'];
			
			
			//echo $value;
			}
			else
			{
			
			$value.=$r1['category_name'].">";
			//echo $value;
			$v=$r1['category_name'];
			//print_r($v);
			
			path($r1['parent']); 
			}
			//var_dump($v);
			
			echo '>'.$v;
			
}


if(!isset($_SESSION['billid']))
{
$que=mysql_query("select max(`bill_id`) as `bill_id` from `temp_billinfo`") or die(mysql_error());

$res=mysql_fetch_array($que);

//echo $res['bill_id'];

if($res['bill_id']=="")

{

$_SESSION['billid']=1;

//echo $_SESSION['billid'];

}

else

{

$billid=$res['bill_id']+1;

$_SESSION['billid']=$billid;

//echo $_SESSION['billid'];

}
}


function getparent1($id)
{
$qp=mysql_query("select * from `category` where `id`='$id'");
			$rp=mysql_fetch_array($qp);
			if($rp['parent']==0)
			
			{

			echo $rp['category_name'];
			}
			else
			{
			getparent1($rp['parent']);
			
			}
}


function valid_chk(){
if(!isset($_SESSION['id']))
{
header ('location:login.php');
}
}
?>
