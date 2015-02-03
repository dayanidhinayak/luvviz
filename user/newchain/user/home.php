<?php
ob_start();
session_start();
if (!$_SESSION['name'])
header("location:../login.php");
?>
<html>
<head>
<body>
    <form>
    <table align="center">
<tr>
    <td><a href="create_new_user.php">Creat User</a></td>
</tr>

<tr>
    <td><a href="tree.php">Tree view</a></td>
</tr>
<tr>
    <td><a href="../logout.php">LOGOUT</a></td>
</tr>
<tr>
    <td><a href="useraccount.php">ACCOUNT</a></td>
</tr>
    </table>
    </form>
</body>
</html> 