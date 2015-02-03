<?php
include_once("../function.php");
$val=$_GET['q'];
//echo $val;
?>

<table>
<tr>
  <td>Page name</td>
  <td>Module name</td>
  <td>Position</td>
  <td>Priority</td>
</tr></table>
<?php
$q1=mysql_query("select `name` from `page_desc` where `id`='$val'");
$r1=mysql_fetch_array($q1);
//echo "select m.* from `module` m,`layout` l where l.`page_id`='$val' and m.`id`=l.`module_id`";
$q=mysql_query("select m.*,l.`position`,l.`priority` from `module` m,`layout` l where l.`page_id`='$val' and m.`id`=l.`module_id`");
while($r=mysql_fetch_array($q))
{
?>
<form name="form" method="post" action="submit_layout.php" >
<table>
<tr>
  <td><?php echo $r1['name'];?></td>
  <td><input type="text" name="m" value="<?php echo $r['name'];?>" readonly="" /></td>
  <td><select name="position" >
  
       <option value="<?php echo $r['position'];?>"><?php echo $r['position'];?></option>
	   <option value="top left">top left</option>
	   <option value="top middle">top middle</option>
	   <option value="top right">top right</option>
	   <option value="center left">center left</option>
	   <option value="center">center</option>
	   <option value="center right">center right</option>
	   <option value="bottom left">bottom left</option>
	   <option value="bottom middle">bottom middle</option>
	   <option value="bottom right">bottom right</option>
	   </select>
 </td><input type="hidden" name="page" value="<?php echo $val;?>" />
     <input type="hidden" name="module" value="<?php echo $r['id'];?>" />
  <td><input type="text" name="prior" value="<?php echo $r['priority'];?>"  /></td>
  <td><input type="submit" value="Update" name="submit" /></td>
  <td><a href="delete_module.php?pid=<?php echo $val;?>&mid=<?php echo $r['id'];?>"><input type="button" name="btn" value="Delete" /></a></td>
</tr></table></form>
<?php } ?>
<input type="button" name="btn1" value="Add more module" onclick="return add_module();" />

<div style="display:none" id="add_more">
<form name="form1" action="insert_module.php" method="post">
<table>
<tr>
  <td><input type="text" name="page1" value="<?php echo $r1['name'];?>" readonly="" /></td>
   <td><select name="add_module">
	 <?php 
	 
	 $q1=mysql_query("select * from `module`");
	 while($r1=mysql_fetch_array($q1))
	 {
	 ?>
	 <option value="<?php echo $r1['id'];?>"><?php echo $r1['name'];?></option>
	 <?php } ?>
	 </select>
	 </td>
	 <td><select name="position1" >
	     
	   <option value="top left">top left</option>
	   <option value="top middle">top middle</option>
	   <option value="top right">top right</option>
	   <option value="center left">center left</option>
	   <option value="center">center</option>
	   <option value="center right">center right</option>
	   <option value="bottom left">bottom left</option>
	   <option value="bottom middle">bottom middle</option>
	   <option value="bottom right">bottom right</option>
	   
	  
	    </select></td>
		<input type="hidden" name="page_id" value="<?php echo $val;?>" />
		<td><input type="text" name="priority"  /></td>
		<td><input type="submit" name="sub" value="Insert" /></td>
</tr>
</table>
</form>
</div>
