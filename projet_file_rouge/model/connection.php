<?php

    $con=mysqli_connect('localhost','root','','systemgms');

    // Check connection
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>