<?php 
include_once('../function.php');
$val=$_GET['val'];
$q=mysql_query("select COLUMN_NAME from information_schema.COLUMNS where TABLE_NAME='$val' and TABLE_SCHEMA='cake'") or die(mysql_error());
while($r=mysql_fetch_array($q))
{
?>
<tr>
<td><input type="checkbox" name="column[]" value="<?php echo $r['COLUMN_NAME'];?>"  /></td>
<td><?php echo $r['COLUMN_NAME'];?></td>
</tr>
<?php } ?>