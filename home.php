<?php
require 'security.php';

if (isset($_POST['crime']))
{
    require 'db.php';
    extract($_POST);
    $today = date ('Y-m-d H:i:s');
    $left = "000-00-00";
    $sql = "INSERT INTO `suspects`(`id`, `names`, `identity`, `gender`, `date`, `crime`, `type`, `date_left`) VALUES
                                  (null,'$names','$identity','$gender','$today','$crime','$type','$left')";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $message = "Suspect Successfully Added";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

    <script src="bootstrap-4.2/js/jquery.min.js"></script>
    <script src="bootstrap-4.2/js/popper.min.js"></script>
    <script src="bootstrap-4.2/js/bootstrap.min.js"></script>

</head>
<body>

<?php require 'navbar.php'; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">

            <div class="card" style="margin-top: 15px">
                <div class="card-header text-center">
                    <strong>ADD SUSPECT</strong>
                </div>

                <div class="card-body">
                    <form action="home.php" method="post">

                        <div class="form-group">
                            <label for="names">Names:</label>
                            <input type="text" class="form-control" name="names" id="names" required>
                        </div>

                        <div class="form-group">
                            <label for="identity">ID / Passport Number:</label>
                            <input type="text" class="form-control" name="identity" id="identity" required>
                        </div>

                        <label>Select Gender:</label>
                        <div class="radio">
                            <label><input type="radio" checked value="Male" name="gender">Male</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" value="Female" name="gender">Female</label>
                        </div>
                        
                        <div class="for-group">
                            <label>Type Of Crime:</label>
                            <select name="type"  class="form-control">
                                <option value="traffic">Traffic</option>
                                <option value="theft">Theft</option>
                                <option value="rape">Rape</option>
                                <option value="murder">Murder</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Describe The Crime:</label>
                            <textarea name="crime" class="form-control" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Add Suspect</button>

                    </form>

                </div>

                <div class="card-footer">
                    <h5 class="text-center text-success">
                        <?php
                        if (isset($message))
                            echo $message;
                        ?>
                    </h5>
                </div>

            </div>

        </div>
    </div>
</div>


</body>
</html>
