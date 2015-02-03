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
    <td><a href="autocode.php">Generate Authcode</a></td>
</tr>

<tr>
    <td><a href="account.php">PAY</a></td>
</tr>

<tr>
    <td><a href="../logout.php">LOGOUT</a></td>
</tr>
    </table>
    </form>
</body>
</html> 