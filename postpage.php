<div class="row justify-content-center">
    <div class="col-12 col-md-7">
        <div class="card">
            <h6 class="card-text mt-2 text-center">POST Here</h6>
            <div class="card-body">
                <form action="postprocess.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group col-md-12 mx-auto">
                        <input type="file" multiple name="fileimage" class="form-control">
                    </div>
                    <div class="form-group col-md-12 mx-auto">
                                        <!-- <input type="file" class="form-control"> -->
                    <textarea name="textpost" id="" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                    <div class="">
                        <input type="submit" class="btn btn-white w-100 text-primary btn-block" name="submit" value="POST">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>