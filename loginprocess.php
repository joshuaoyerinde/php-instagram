<?php 
    session_start();
    require 'db.php';
    if(isset($_POST['submit'])){
        $email = trim( $_POST['email']);
        $password = trim($_POST['password']);

        $select_db = $conn->query("SELECT users_id, email_phone, name, username, password FROM registration_tb WHERE email_phone = '$email'");
        $fetch = $select_db->fetch_assoc();
        // echo $fetch['email_phone'];
        if($fetch){
            $pass_hash = $fetch['password'];
            // echo $pass_hash;
            $verifypas = password_verify($password, $pass_hash);
            if( $verifypas){
                // echo 'success';
                $_SESSION['id'] = $fetch['users_id'];
                // $_SESSION['name'] = $fetch['name'];
                header('Location:darshboard.php');
            }else{
                header('Location:loginpage.php');
                $_SESSION['msg'] = 'email or password invalid';
            }
            
        }
    }else{
        $_SESSION['msg'] = 'input is empty';   
    }

?>