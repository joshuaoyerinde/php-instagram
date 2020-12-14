<?php
    session_start();
    require 'db.php';
    $userid = $_SESSION['id'];
    if(isset($_POST['submit'])){
        $text = $_POST['textpost'];
        $img= $_FILES['fileimage']['name'];
       
        $insert = $conn->query("INSERT INTO post_tb(post_text,users_id) VALUES ('$text','$userid')");
        $postid = mysqli_insert_id($conn);
        echo $postid;
        if( $insert){
            $imgrand = rand().$img;
            $move =  move_uploaded_file($_FILES['fileimage']['tmp_name'],"postimg/".$imgrand);
            if($move){
                $insert  = $conn->query("INSERT INTO file_tb(filename, post_id) VALUES('$imgrand','$postid')");
                if($insert){
                     echo "success";
                     header('Location:darshboard.php');
                }else{
                    echo "fail";
                }
            }else{
                    echo "Sorry, there was an error uploading your file";
                 }
        }
        
        // for ($i=0; $i<count($postimage); $i++) { 
        //     $tmpname =  $tmp[$i];
        //     $move = move_uploaded_file($tmpname,'postimg/'.$postimage[$i]);
        //     $insert  = $conn->query("INSERT INTO file_tb(filename, post_id) VALUES('$postimage','$postid')");
        //         if($insert){
        //             echo "success";
        //         }else{
        //             echo "Sorry, there was an error uploading your file";
        //         }
           
        // }
        
         
             
        // }
            
    }


?>