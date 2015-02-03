<?php
ini_set("display_errors",1);
include_once("../function.php");

                                        $q=mysql_query("select * from `user_details` ORDER  BY `first_name` ASC")or die(mysql_error());
                                        while($r=mysql_fetch_array($q))
                                        {
                                            $name=$r['first_name'].$r['last_name'];
                                            if($name!=='')
                                            {
                                        ?>

                                        <tr>
                                            <td>
                                                <?php echo $name;?>
                                            </td>
                                            <td>
                                                <?php echo $r['email'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['contact'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['state'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['city'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['address'];?>
                                            </td>
                                            <td>
                                                <?php echo $r['joining_time'];?>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
