<?php
    $conn = mysqli_connect("localhost","root","","db_medick") or die(mysqli_error($conn));
    if($conn)
    {
        echo "db connected successfully";
    }
    else
    {
        echo "connection error";
    }
?>