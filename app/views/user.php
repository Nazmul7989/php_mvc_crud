<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP MVC CRUD</title>
</head>
<body>

    <form action="<?php echo BASEURL;?>/UserController/register" method="post">
        <input type="text" name="name" placeholder="Your name"><br><br>
        <input type="email" name="email" placeholder="Your Email"><br><br>
        <input type="password" name="password" placeholder="Your password"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>

