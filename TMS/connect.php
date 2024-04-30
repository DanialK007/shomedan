<?php
    // $HOSTNAME = 'localhost';
    // $USERNAME = 'root';
    // $PASSWORD = '';
    // $DATABASE = 'shomedan';

    $HOSTNAME = 'sql304.infinityfree.com';
    $USERNAME = 'if0_36451311';
    $PASSWORD = '27102003Dk';
    $DATABASE = 'if0_36451311_shomedan';

    $connection = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
    
    if($connection){
        echo '';
    } else{
        die(mysqli_error($connection));
    }
?>