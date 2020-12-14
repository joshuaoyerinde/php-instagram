<?php
    session_start();
    require 'db.php';
    $id = $_GET['id'];
    $sel = $conn->query("SELECT users_id, email_phone, name, username, phone, bio, image FROM registration_tb WHERE users_id='$id'");
    $fetch = $sel->fetch_assoc();
    // echo json_encode($fetch);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <?php  include 'navbar.php';?>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8 col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col-md-11 col-lg-11 col-xl-11">
                                <div class="card border-0">
                                    <div class="card-body">
                                       <form action="editpageprocess.php" method="POST" enctype="multipart/form-data">
                                        <div class="row form-group justify-content-center">
                                            <div class="col-md-8">
                                                <?php if(empty($fetch['image'])): ?>
                                                <img  src="img/img_avatar1.png" width="80px" height="80px" id="preview" class="rounded-circle mr-4" alt="img"> 
                                                <?php else:?>
                                                <img  src="<?php echo 'img/'.$fetch['image'];?>" width="80px" height="80px" id="preview" class="rounded-circle mr-4" alt="img"> 
                                                <?php endif ?>
                                                <h6><?php echo $fetch['username'];?></h6>
                                               <div class="upload-btn-wrapper">
                                                    <button class="btn-profile">Change Profile photo</button>
                                                    <input class="" name="imgfile" type="file" id="file" accept="image/*" onchange="showImage()"><br><br>
                                                </div>
                                                </div>
                                                <!-- for the edit name and bio -->
                                                <div class="col-md-8">  
                                                    <label for="" class="card-text">Name:</label>
                                                        <input type="text" value="<?php echo $fetch['name'];?>" name="name" class="w-100 input-edit">
                                                        <div>
                                                        Help people discover your account by using the name you're known by: either your full name, nickname, or business name.
                                                        </div><br>
                                                    </div>
                                                    <div class="col-md-8">  
                                                        <label for=""  class="card-text">Username:</label>
                                                        <input type="text" value="<?php echo $fetch['username'];?>" name="username" class="w-100 input-edit">
                                                        <div>
                                                        In most cases, you'll be able to change your username back to oyeejosh for another 14 days. Learn More
                                                        </div><br>
                                                    </div>
                                                    <div class="col-md-8">  
                                                        <label for="" class="card-text">Bio:</label>
                                                        <textarea name="bio" class="w-100 input-edit" cols="30" rows="3"><?php echo $fetch['bio'];?></textarea>
                                                    </div>
                                                    <div class="col-md-8">  
                                                        <label for=""  class="card-text">email:</label>
                                                        <input  type="text" value="<?php echo $fetch['email_phone'];?>" name="email"  class="w-100 input-edit">
                                                    </div>
                                                    <div class="col-md-8">  
                                                        <label for=""  class="card-text">phone:</label>
                                                        <input type="text" name="phone" value="<?php echo $fetch['phone'];?>" class="w-100 input-edit">
                                                        <div>
                                                            it cool to have you here.................
                                                        </div><br>
                                                    </div>
                                                    <div class="col-md-8">  
                                                        <input type="submit" name="submit" value="Submit" class="input-btn btn-block">
                                                    </div>
                                                <!-- for the edit name and bio -->
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="index.js"></script>
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js" ></script>
<!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>