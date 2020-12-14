<?php
    $servername ='localhost';
    $username = 'root';
    $password = '';
    $db = 'phpproject_db';

    $conn = new mysqli($servername,$username,$password,$db);
    if($conn->connect_error){
        die('unable to connect'.$conn->connect_error);
        // echo "not success";
    }
?>