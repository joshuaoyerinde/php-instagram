<?php
    session_start();
    require 'db.php';
    $id = $_SESSION['id'];
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $bio = $_POST['bio'];
        
        $img = $_FILES['imgfile']['name'];
        if(move_uploaded_file($_FILES['imgfile']['tmp_name'],"img/".$img)){
            $updaters="UPDATE registration_tb SET email_phone ='$email', name ='$name', username ='$username', phone ='$phone', bio='$bio', image='$img' WHERE users_id ='$id'";
            $query = $conn->query($updaters);
            echo 1;
            header('location:darshboard.php');
        }else{
            echo "not true";
        }
        
    }


?>