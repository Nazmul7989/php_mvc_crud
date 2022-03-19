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

    <title>PHP MVC Framework</title>
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
                <?php if (!$this->getSession('email')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASEURL;?>/UserController/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASEURL;?>/UserController/register">Register</a>
                </li>
                <?php endif; ?>
                <?php if ($this->getSession('email')): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo BASEURL;?>/UserController/profile">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo BASEURL;?>/UserController/logout">Logout</a>
                    </div>
                </li>
                <?php endif; ?>
            </ul>

        </div>
    </div>
</nav>

<!--navbar end-->
