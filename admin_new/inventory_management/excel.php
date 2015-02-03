<?php 
//ini_set("display_errors", 1);
include_once('../function.php');

$table=$_POST['tb_name'];
include 'excel_xml.php';
$excel = new excel_xml();
echo "asdfgghh";

$header_style = array(
    'bold'       => 1,
    'size'       => '12',
    'color'      => '#FFFFFF',
    'bgcolor'    => '#4F81BD'
);
foreach($_POST['column'] as $check) {


$excel->add_style('header', $header_style);

$excel->add_row(array("$check"));
//echo "select `$check` from `$table`";
$q=mysql_query("select `$check` from `$table`") or die(mysql_query());
$r=mysql_fetch_array($q);

$excel->add_row(array(
    $r["$check"]
));
}
$excel->create_worksheet("$table");


$xml = $excel->generate();	
$excel->download('Download.xls');
?>