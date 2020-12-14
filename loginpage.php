<?php session_start(); ?>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 my-5 card-box">
                    <div class="card-body">
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-5 col-lg-5 col-xl-5"> 
                                <div class="card o-hidden border-1">
                                    <div class="card-body">
                                        <h3 class="card-title instagram text-center mt-2">Instagram</h3>
                                        <div class="text-center card-text mt-3">
                                           <div class="">
                                            Sign in to see photos and videos <br> from your friends.                 
                                           </div>
                                        </div>
                                        <div><hr></div>
                                        <form action="loginprocess.php" method="POST" novalidate autocomplete="off">
                                                <div class="text-center">Login here</div>
                                                <?php if(isset($_SESSION['msg'])):?>
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <i class="fa fa-warning"></i><span class="ml-2"><?php echo $_SESSION['msg']; unset($_SESSION['msg']);?></span>
                                                </div>
                                                <?php endif?>
                                                <div class="form-group row justify-content-center mt-3">
                                                    <div class="col-md-10 col-lg-10 mx-auto col-xl-10">
                                                        <input type="text" name="email" class="1-hidden input-width form-control" placeholder="email">
                                                    </div>
                                                    <div class="col-md-10 mx-auto mt-2">
                                                        <input type="password" name="password" class="input-width form-control" placeholder="password">
                                                    </div>
                                                    <div class="col-md-10 mx-auto mt-3">
                                                        <input type="submit" name="submit" value="Sign in" class="input-btn btn-block">
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                             Create an account?<a href="registrationpage.php"> Sign up</a>
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

<!-- links -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>