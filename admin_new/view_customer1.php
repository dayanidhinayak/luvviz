<?php
include_once('function.php');
if(!empty($_POST['checklist'])) {
    foreach($_POST['checklist'] as $check) {
            
mysql_query("UPDATE `review` SET `status` = '1' WHERE `id` = '$check'");
echo "UPDATE `review` SET `status` = '1' WHERE `id` = '$check'";

    }
}
header("location:view_customer.php");
?>
