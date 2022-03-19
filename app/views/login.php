<!--header-->
<?php require_once 'partials/header.php'?>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <div class="card shadow px-4 py-4">

                    <!-- show success message-->
                    <?php $this->flash('message','alert alert-success alert-dismissible fade show')?>

                    <h5 class="text-center mb-3">User Login</h5>
                    <form action="<?php echo BASEURL;?>/UserController/userLogin" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="email" name="email" value="<?php if (!empty($data['email'])): echo $data['email']; endif;?>" class="form-control" placeholder="Your Email" autofocus>
                                    <span class="text-danger">
                                        <?php if (!empty($data['emailError'])): echo $data['emailError']; endif;?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="password" name="password" value="<?php if (!empty($data['password'])): echo $data['password']; endif;?>" class="form-control" placeholder="Your password">
                                    <span class="text-danger">
                                        <?php if (!empty($data['passwordError'])): echo $data['passwordError']; endif;?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="submit" class="form-control btn- btn-success btn-sm" value="Login Now">
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