<?php
include('../../db/db.php');
require('../../db/auth_session.php');
include '../../db/user_check.php';
$oid = $_POST['oid'];
$uname = $_POST['uname'];
$sql = "UPDATE `add_balance` SET `status`='failed' WHERE `order_id` = '$oid' and `username` = '$uname'";
$records = mysqli_query($con, $sql); // fetch data from database
header('location: ./');
exit;
?>