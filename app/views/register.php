<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    <link rel="stylesheet" href="--><?php //echo BASEURL ?><!-- /assets/css/bootstrap.min.css">-->
    <!-- link css dynamically -->
    <?php linkCss('/assets/css/bootstrap.min.css');?>
    <?php linkCss('/assets/css/style.css');?>

    <title>Register</title>
</head>
<body>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-6">
            <div class="card shadow px-4 py-4">
                <h5 class="text-center mb-3">User Registration</h5>
                <form action="<?php echo BASEURL;?>/UserController/userRegister" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Your password">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="submit" class="form-control btn- btn-success btn-sm" value="Register Now">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!--  image file load-->
<!--    <img src="--><?php //echo BASEURL?><!--/assets/images/nature.jpg" alt="">-->

<!-- link js file dynamically  -->
<?php linkJs('assets/js/jquery-3.5.1.min.js'); ?>
<?php linkJs('assets/js/popper.min.js'); ?>
<?php linkJs('assets/js/bootstrap.min.js'); ?>
<?php linkJs('assets/js/custom.js'); ?>

</body>
</html>


