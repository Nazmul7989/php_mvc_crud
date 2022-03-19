<!--header-->
<?php require_once 'partials/header.php'?>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-8">
            <div class="card shadow px-4 py-4">
                <div class="clearfix">
                    <h3 class="float-left">Edit Student</h3>
                    <a href="<?php echo BASEURL;?>/StudentController/index" class="float-right btn btn-success btn-sm">Back</a>
                </div>
                <hr>
                <form action="<?php echo BASEURL;?>/StudentController/updateStudent" method="post">
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="<?php echo $data['student']->name; ?>" class="form-control" placeholder="Your name" >
                                <span class="text-danger">
                                    <?php if (!empty($data['nameError'])): echo $data['nameError']; endif;?>
                                </span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="phone">Phone No</label>
                                <input type="text" name="phone" id="phone" value="<?php echo $data['student']->phone; ?>" class="form-control" placeholder="Your Phone No">
                                <span class="text-danger">
                                    <?php if (!empty($data['phoneError'])): echo $data['phoneError']; endif;?>
                                </span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="<?php echo $data['student']->email; ?>" class="form-control" placeholder="Your Email">
                                <span class="text-danger">
                                    <?php if (!empty($data['emailError'])): echo $data['emailError']; endif;?>
                                </span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-success btn-sm" value="Update Student">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!--footer-->
<?php require_once 'partials/footer.php'?>



