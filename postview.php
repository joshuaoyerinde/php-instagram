<?php
    require 'db.php';
    $ide = $_GET['id'];
    $s= $conn->query("SELECT post_id, post_text, imagepost, users_id, username, image FROM post_tb JOIN registration_tb USING(users_id) WHERE post_id='$ide'");
    $fetch= $s->fetch_assoc();
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
    <?php include 'navbar.php'?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7 col-md-7">
                                <img src="<?php echo 'postimg/'.$fetch['imagepost'];?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-5 col-md-5">
                                <div class="img-user">
                                    <img src="<?php echo 'img/'.$fetch['image'];?>" height="45px" class="rounded-circle" alt="">
                                    <span style="font-size: 18px;"><?php echo $fetch['username'];?></span>
                                </div>
                                <hr>
                                <div class="mt-3" style="font-size: 21px;">
                                <i class="material-icons">textsms</i>: <?php echo $fetch['post_text'];?>......
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
<!-- <div class="modal fade" id="mymodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="diplay-2">This is me</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               
                
            </div>
        </div>
    </div>
</div> -->