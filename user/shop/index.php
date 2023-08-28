<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(error_reporting() & ~E_NOTICE);
include('../../db/db.php');
require('../../db/auth_session.php');
require('../../db/user_check.php');
include('../../links/css.php');
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" /> -->
    <link rel="icon" href="../images/logo.ico">
    <!-- <link rel="stylesheet" href="../../css/dataTables.bootstrap5.min.css" />-->
    <link rel="stylesheet" href="../../css/style.css" /> 
    
</head>
<nav class="navbar bg-dark" style="padding-bottom: 0px; padding-top: 0px;">
    <div class="container" style="margin-left: 1%;">
        <a class="navbar-brand" href="../">
            <div>

                <img src="../../upload/soft.png" alt="Bootstrap" width="60" height="48">
                <span>
                    SOFTOWN.TECH
                </span>

            </div>

        </a>
        <div class="row d-flex justify-content-center">
            <div class="col-md-12" style="color: white;">
                <?php

                $sql = "SELECT * FROM `users` WHERE username='" . $_SESSION['username'] . "'  ";
                $records = mysqli_query($con, $sql); // fetch data from database
                while ($data = mysqli_fetch_array($records)) {

                ?>
                    Wallet balance : <?php echo  $data['wallet_balance'] . " $";
                                    } ?>
            </div>
        </div>
    </div>
    </div>

</nav>

<?php
require('../../db/db.php');
include('../../db/auth_session.php');

$username = $_SESSION['username'];
$id = $_POST['id'];
$sql = "SELECT * FROM `products` where id = '$id' ";
$records = mysqli_query($con, $sql); // fetch data from database
while ($data = mysqli_fetch_array($records)) {
?>


    <div class="row">

        <div class="col-md-6">
           <?php echo ' <img style="width:60%;align-self: center;" src="../../upload/' . $data["soft_image"] . '" class="mx-auto d-block img-fluid hover-shadow" /> '?>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <form action="./shop.php" method="post" style="margin-left: 20px;">
                <h3 class="align-middle">Application name :- <?php echo $data['soft_name']; ?> </h3>
                <h3>Current Price :- <?php echo $data['price']; ?> </h3>
                <h3>Application Developer :- <?php echo $data['Developer']; ?> </h3>
                <input type="hidden" name="user" value="<?php echo $username; ?>">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input type="hidden" name="soft_name" value="<?php echo $data['soft_name']; ?>">
                <input type="hidden" name="price" value="<?php echo $data['price']; ?>">
                <input type="hidden" name="soft_type" value="<?php echo $data['soft_type']; ?>">
                <input type="hidden" name="dev" value="<?php echo $data['Developer']; ?>">
                <input type="hidden" name="down" value="<?php echo $data['linkk']; ?>">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <input type="submit" class="btn btn-primary btn-lg " value="Purchase">
                    </div>

                </div>

            </form>
        </div>
    </div>

        <div style="text-align: center;">
            <h3>About Software</h3>
        </div>
        <div class="row">
        <div class="col-md-3"></div>
        <div style="text-align: center;" class="col-md-6 d-flex align-items-center">
            <br>
            <?php echo $data['long_desc']; ?>
        </div>
    </div>
</div>
<?php
}
?>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="../js/jquery-3.5.1.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap5.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/my.js"></script>
<script src="../js/pg_redirect.js"></script>