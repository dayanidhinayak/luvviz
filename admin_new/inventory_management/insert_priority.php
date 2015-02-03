<?php

include_once("function.php");

$list=$_GET['list'];



//echo $loc_id.'aaaaa';

//echo $id;

//echo $pos;

$str='';

//$pos1=$pos+1;

//echo $list;

$a=explode(",",$list);

foreach($a as $b)

{

//echo $b.'<br/>';



if($b!="")

{

$final=explode("--",$b);

foreach($final as $k)

{

//echo $k.'****'.$b.'<br/>';

}

//`posi`=$k[0] `id`=k[1]

//foreach($final as $s=>$s1)

//{

////echo $c.'<br/>';

//$str=$str."`$s`='$s1',";

//

//echo $str.'<br/>';

//$str='';

//}

$a=$final[1]+1;

//echo "update `category` set `priority`='$a' where `id`='$final[0]'";

$q=mysql_query("update `category` set `priority`='$a' where `id`='$final[0]'") or die(mysql_error());

//header("location:test.php");

}

}

?>
