<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- link css dynamically -->
    <link rel="stylesheet" href="<?php echo BASEURL ?> /assets/css/bootstrap.min.css">
<!--    --><?php //linkCss('/assets/css/bootstrap.min.css');?>
<!--    --><?php //linkCss('/assets/css/style.css');?>

    <title>Login</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="<?php echo BASEURL;?>">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BASEURL;?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASEURL;?>/UserController/index">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASEURL;?>/UserController/register">Register</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<!--navbar end-->

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-12">
            <h3>Welcome to this PHP MVC Framework</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda illum magni nostrum pariatur? A aspernatur assumenda modi repellat reprehenderit saepe sint! Amet consectetur est itaque natus neque quisquam quo similique.</p>
        </div>
    </div>
</div>

<!--  image file load-->
<!--    <img src="--><?php //echo BASEURL?><!--/assets/images/nature.jpg" alt="">-->

<!-- link js file dynamically  -->
<?php //linkJs('assets/js/jquery-3.5.1.min.js'); ?>
<?php //linkJs('assets/js/popper.min.js'); ?>
<?php //linkJs('assets/js/bootstrap.min.js'); ?>
<?php //linkJs('assets/js/custom.js'); ?>
<script src="<?php echo BASEURL ?> /assets/js/jquery-3.5.1.min.js"></script>
<script src="<?php echo BASEURL ?> /assets/js/popper.min.js"></script>
<script src="<?php echo BASEURL ?> /assets/js/bootstrap.min.js"></script>
<script src="<?php echo BASEURL ?> /assets/js/custom.js"></script>

</body>
</html>


