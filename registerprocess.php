<?php

require 'db.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pass = password_hash($password , PASSWORD_DEFAULT);

    $insert = "INSERT INTO registration_tb(email_phone, name, username, password) VALUES('$email','$name','$username','$pass')";
    $query =$conn->query($insert);
    if($query){
        header('Location:loginpage.php');
        // echo "successful";
    }
    else{
        echo "not success";
    }

}



?>