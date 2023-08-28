<?php
require('../../db/db.php');
include('../../db/auth_session.php');
$id = $_POST['id'];
$soft_name = $_POST['soft_name'];
echo $id;
$del = mysqli_query($con,"delete from products where id = '$id' ");
$sql = " DROP TABLE ".$soft_name ;
$delo = mysqli_query($con,$sql);
if($delo !== FALSE)
{
   echo("This table has been deleted.");
}else{
   echo("This table has not been deleted.");
}
header("Location: ../view-product/");
die();