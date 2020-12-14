<?php
  // session_start();
  // require 'db.php';
  // $id = $_SESSION['id'];
  // $q = $conn->query("SELECT id, image FROM registration_tb WHERE id = '{$_SESSION['id']}'");
  // $f= $q->fetch_assoc();
?>
<nav class="card border-1 0-hidden fixed-top navbar-expand-md">
<div class="container">
    <ul class="nav justify-content-end">
    <ul class="nav mr-auto ml-3">
      <li class="nav-item">
        <a class="nav-link active brand" href="">Instagram</a>
      </li>
      <li class="nav-item mt-3">
      <div><a href="logout.php" class="btn btn-outline-secondary btn-sm">LogOut</a></div>
      </li>
    </ul>
      <li class="nav-item">
        <a class="nav-link active d-icons" href="darshboard.php"><i class="fa fa-home"></i></a>
      </li>
      <li class="nav-item mr-4">
        <a class="nav-link d-icons" href="#"><i class="fa fa-instagram"></i></a>
      </li>
      <li class="nav-item mt-2 mr-2">
        <div class="img-user">
          <?php if(empty($fetch['image'])):?>
              <img src="img/img_avatar1.png"  data-toggle="dropdown" alt="" height="40px" class="rounded-circle dropdown-toggle">
            <?php else:?>
              <img src="<?php echo 'img/'.$fetch['image'];?>"  data-toggle="dropdown" alt="" height="40px" class="rounded-circle dropdown-toggle">
              <?php endif ?>           
           <div class="dropdown-menu">
              <a class="dropdown-item" href="darshboard.php">Home</a>
              <a class="dropdown-item" href="#">Link 3</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Log-Out</a>
            </div>
          </div>
        <!-- </div> -->
      </li>
    </ul>
</div>

</nav>
<div class="text-white">
  lorem <br>
  dgjgj
</div>
<!-- <ul class="nav mt-5" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, reiciendis molestiae eveniet autem expedita quaerat porro deleniti blanditiis quae sunt ullam odio fuga dolores, 
      corrupti dolor, sapiente unde recusandae. Porro?</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Lorem ipsum dolor sit 
      amet consectetur adipisicing elit. Molestias consequuntur error doloremque officia magni voluptatum. Odit, iste. Voluptates, iste, laudantium officiis unde neque ea, veritatis aperiam repellat nobis incidunt itaque.</div>
</div> -->