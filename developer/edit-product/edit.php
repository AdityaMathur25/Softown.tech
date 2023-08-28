<?php
require('../../db/db.php');
include('../../db/auth_session.php');
include('../../db/dev_check.php');
$id = $_POST['id'];
if (isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $edit = mysqli_query($con, "update products set soft_name='$name' where id='$id'");
    $sqp = mysqli_query($con, "update products set price='$price' where id='$id'");
    header('location: ../');
}