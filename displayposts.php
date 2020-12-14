<?php 
    // session_start();
    // require 'db.php';
    $get = $conn->query("SELECT * FROM file_tb JOIN post_tb USING(post_id) WHERE users_id = {$_SESSION['id']}");
    $f = $get->fetch_all(MYSQLI_ASSOC);
    $num = $get->num_rows;
    $_SESSION['num'] = $num;
    // echo json_encode($f);
    // $num = mysqli_num_rows($f);
    // echo $num
    // echo $num;
    // echo json_encode($f);
    // echo json_encode($f);
    // mysqli_insert_id()
?>
<div class="">
    <!-- <div class="row"> -->
        <!-- <div class="col-12"> -->
            <!-- <div class="card border-0" style="background-color: #FAFAFA;"> -->
                <!-- <div class="card-body"> -->
                    <div class="row mt-n4">
                        <?php foreach ($f as $v):
                                $images = $v['filename'];
                            ?>
                            <div class="col-4 col-md-4 col-xl-4 col-lg-4 mt-2">
                                <a href="postview.php?id=<?php echo $value['post_id'];?>" class="">
                                    <div class="post-image">
                                        <img src="<?php echo 'postimg/'.$images?>" data-toggle="modal" data-target="#mymodal<?php echo $v['file_id']; ?>" class="w-100 h-100 img" alt="">
                                    </div>
                                </a>
                                <div class="modal fade" id="<?php echo 'mymodal'.$v['file_id']; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="img-user">
                                                <?php if(empty($fetch['image'])): ?>
                                                <img  src="img/img_avatar1.png" width="80px" height="80px" id="preview" class="rounded-circle mr-4" alt="img"> 
                                                <?php else:?>
                                                <img  src="<?php echo 'img/'.$fetch['image'];?>" width="80px" height="80px" id="preview" class="rounded-circle mr-4" alt="img"> 
                                                <?php endif ?>
                                                <span style="font-size: 18px;"><?php echo $fetch['username'];?></span>
                                                </div>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    &#8942;
                                                </button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <div class="row">
                                                    <div class="col-md-8 col-lg-8 col-xl-8">
                                                        <img src="<?php echo 'postimg/'.$images?>" class="img-fluid img" alt="">
                                                    </div>
                                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                                    <div class="img-user mt-2 pl-2">
                                                        <?php if(empty($fetch['image'])): ?>
                                                            <img  src="img/img_avatar1.png" width="80px" height="80px" id="preview" class="rounded-circle mr-4" alt="img"> 
                                                        <?php else:?>
                                                            <img  src="<?php echo 'img/'.$fetch['image'];?>" width="80px" height="80px" id="preview" class="rounded-circle mr-4" alt="img"> 
                                                        <?php endif ?>
                                                        <span class="" style="font-size: 15px;"><?php echo $fetch['username'];?></span>
                                                    </div>
                                                       <div class="col-12"><h6><?php echo $v['post_text']?></h6></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <h6>Posts</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
</div>