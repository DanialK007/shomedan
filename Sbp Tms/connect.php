<?php
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'shomedan';

    $connection = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
    
    if($connection){
        echo '';
    } else{
        die(mysqli_error($connection));
    }
?>