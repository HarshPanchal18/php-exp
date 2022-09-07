<?php

include "config.php";

if(isset($_GET['id']))
{
    $userid = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `id`='$userid'";
    $result = $conn->query($sql);
   
    if($result == TRUE)
    {
        echo " Record Deleted";
        header('Location:view.php');
    }
    else
        echo "Error".$sql."<br>".$conn->error;
}
?>
