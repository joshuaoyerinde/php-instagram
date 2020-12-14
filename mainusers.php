<?php 
    session_start();
    require 'db.php';
    $id =  $_SESSION['id'];
    if(isset($_SESSION['id'])){
        $select = $conn->query("SELECT users_id, email_phone, name, username, bio, image FROM registration_tb WHERE users_id = '$id'");
        $fetch = $select->fetch_assoc();
    }else{
        header('Location:loginpage.php');
    }
    include 'navbar.php';
?>
<div class="container my-5">
<div class="row">
    <div class="col-md-9">
        <div class="row justify-content-center">
            <div class="col-6 col-md-4">
               <div class="container">
                   <div class="user-img">
                    <?php if(empty($fetch['image'])):?>
                        <img src="img/img_avatar1.png" class="rounded-circle mt-n2 mr-1" width="170px" height="175px" alt="">
                    <?php else:?>
                        <img src="<?php echo 'img/'.$fetch['image'];?>" class="rounded-circle mt-1 ml-2" width="160px" height="165px" alt="">
                    <?php endif ?>
                    </div>
               </div>
            </div>
            <div class="col-6 col-md-6 mt-n2">
                <div class="">
                    <div class="">
                        <span class="uu" style=""><?php echo $fetch['username']; ?></span>
                        <a href="editpage.php?id=<?php echo $fetch['users_id']?>" class="ml-4 btn btn-outline-secondary btn-md">Edit Profile</a>
                    </div>
                    <div class="mt-3">
                        <!-- <div class="line d-none d-lg-block"> -->
                            <div class="row">
                                <div class="d-none d-lg-block col-4 col-md-2">
                                    <span class="post"><?php echo $_SESSION['num'];?></span>&nbsp;Posts
                                </div>
                                <div class="d-none d-lg-block col-3 col-md-3">
                                    <span class="post">100</span>&nbsp;Followers
                                </div>
                                <div class="d-none d-lg-block col-4 col-md-2">
                                    <span class="post">30</span>&nbsp;Follow
                                </div>                               
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="mt-4">
                        <h6 class="users-name"><?php echo $fetch['name'];?></h6>
                        <div class="bio-users mt-n2"><?php echo $fetch['bio'];?>.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center mt-3">
    <div class="d-block d-lg-none col-2">
        <span class="post"><?php echo $_SESSION['num'];?></span>&nbsp;Posts
    </div>
    <div class="d-block d-lg-none col-4">
        <span class="post">100</span>&nbsp;Followers
    </div>
    <div class="d-block d-lg-none col-2 ">
        <span class="post">30</span>&nbsp;Follow
    </div>                               
</div>
    <div class="mt-5">
        <hr>
    </div>
    <!-- <div class="container"> -->
    <!-- Nav pills -->
        <ul class="nav justify-content-center nav-justified" role="tablist">
            <li class="nav-item">
            <a class="nav-link select-pill active" data-toggle="pill" href="#home"><div><i class="material-icons">	image</i></div>POSTS</a>
            </li>
            <li class="nav-item">
            <a class="nav-link select-pill" data-toggle="pill" href="#menu1"><div><i class="material-icons">bookmark_border</i></div>SAVED</a>
            </li>
            <li class="nav-item">
            <a class="nav-link select-pill" data-toggle="pill" href="#menu2"><div><i class="material-icons">center_focus_weak</i></div> POST HERE</a>
            </li>
        </ul>

    <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
            <!-- <h3>HOME</h3> -->
                <?php include 'displayposts.php';?>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
            <h3>Menu 1</h3>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <?php include 'postpage.php';?>
            </div>
        </div>
    <!-- </div> -->
</div>
