<?php

require 'db.php';

if (isset($_POST['badge_number']))
{
    extract($_POST);
    $password = crypt($password,'jfsalkgfjkvbskahftguaefsajgliu');
    $sql ="select * from users where badge_number ='$badge_number' and password='$password'";
    $results = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($results);
    if ($count == 1)
    {
        //success
        $user = mysqli_fetch_assoc($results);
        //sessions
        session_start();
        $_SESSION['user'] = $user;
        header('location:home.php');
    }

    else {
      $error = "wrong badge_number or password";
    }
}


/*$password = crypt('123456','jfsalkgfjkvbskahftguaefsajgliu');

$sql ="INSERT INTO `users`(`id`, `names`, `badge_number`, `email`, `password`) VALUES
                           (null,'Inspector Mwala','P001','mwala@gmail.com','$password')";

mysqli_query($conn, $sql) or die(mysqli_error($conn));*/
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card" style="margin-top: 60px">
                <div class="card-header text-center">
                    <strong>LOGIN</strong>
                </div>

                <div class="card-body">
                    <form action="login.php" method="post">

                        <div class="form-group">
                            <label for="badge_number">Badge_number:</label>
                            <input type="text" class="form-control" name="badge_number" id="badge_number" required>
                        </div>

                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" name="password" id="pwd" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Login</button>

                    </form>

                </div>

                <div class="card-footer">
                    <p class="text-danger text-center">
                        <?php
                        if (isset($error))
                            echo $error;
                        ?>
                    </p>
                </div>

            </div>

        </div>
    </div>
</div>


</body>
</html>