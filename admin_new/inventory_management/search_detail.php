<?php
ini_set('allow_url_include' , true);
include_once('../function.php');
?>
<html>
    <head></head>
    <body>
        <form name="f" method="post" action="order_detail.php">
        <table>
            <tr>
                <td> <input type="text" name="uname" /></td>
            </tr>
              <tr>
                <td> <input type="submit" name="submit" value="submit"/></td>
            </tr>
        </table>
       </form>
    </body>
</html>