<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        text-align: center;
    }
</style>
<body>

    <?php
        session_start();
        echo "Bye Bye ".$_SESSION['uid'];
        unset($_SESSION['uid']);
    ?>
    <br>
    <a href="Login.php"> Login </a>

</body>
</html>