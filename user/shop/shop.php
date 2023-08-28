<?php
//error_reporting(E_ERROR | E_PARSE);
require('../../db/db.php');
include('../../db/auth_session.php');
include('../../message_sender.php');
$user = $_POST['user'];
$id = $_POST['id'];
$soft_name = $_POST['soft_name'];
$soft_type = $_POST['soft_type'];
$price = $_POST['price'];
$dev = $_POST['dev'];
$down = $_POST['down'];

$sql = "SELECT * FROM `users` where username = '$user' ";
$result = mysqli_query($con, $sql);
while ($data = mysqli_fetch_array($result)) {
    $wal_ba = $data['wallet_balance'];
    if ($price > $wal_ba) {
        session_start();
        $_SESSION['message'] = 'Not enough balance in your account recharge your wallet from add funds ';
        header('location: ../user-message/');
    } else {
        $sql = "SELECT * FROM `purchased_products` where product_id = '$id' and buyer_name = '$user' ";
        $result = mysqli_query($con, $sql);
        $rowcount = mysqli_num_rows($result);
        //printf("Total rows in this table :  %d\n", $rowcount);
        if ($rowcount == 0) {
            $sql = "INSERT into `purchased_products` (product_id, product_name, buyer_name ,developer_name,price,product_group) VALUES ('$id', '$soft_name', '$user','$dev','$price','$soft_type')";
            $result = mysqli_query($con, $sql);
            if (!$result) {
                echo mysqli_error($conn);
                die();
            } else {
                $sql = "select * from `users` where username = '$dev'";
                $result = mysqli_query($con, $sql);
                while ($data = mysqli_fetch_array($result)) {
                    $d_bal = $data['wallet_balance'];
                    $current_balance_seller = $d_bal + $price;
                }

                echo "Query succesfully executed!";
                $sql = "select * from `users` where username = '$user'";
                $result = mysqli_query($con, $sql);
                while ($data = mysqli_fetch_array($result)) {
                    $bal = $data['wallet_balance'];
                    $current_balance_buyer = $bal - $price;

?><br><br><?php
                    echo $current_balance;
                    $sql = "update `users` set wallet_balance = '$current_balance_buyer' where username = '$user'";
                    $result = mysqli_query($con, $sql);
                    $sql = "update `users` set wallet_balance = '$current_balance_seller' where username = '$dev'";
                    $result = mysqli_query($con, $sql);
                    echo 'balance updated';
                    // echo 'ok';

                    $sqll = "SELECT * FROM products WHERE soft_name = '$soft_name' LIMIT 1";
                    $resulttt = mysqli_query($con, $sqll);
                    while ($data = mysqli_fetch_array($resulttt)) {
                        if ($data['liscense'] == '0') {

                            echo 'no key required';

                            $sql = "select email from `users` where username = '$user' LIMIT 1";
                            $res = mysqli_query($con, $sql);
                            while ($mess = mysqli_fetch_array($res)) {
                                $receiver = $mess['email'];
                                $subject = "Your Login Credentials For App " . $soft_name;
                                $message = "Hi sir thanks for purchasing " . $soft_name . " <br> Please download the software using this link  Download Link : " . $down . "<br><br>Softown.Tech is ONLY responsible for the installation part we do not own this software and will not provide any support for the same still if you face any issue report it out to our executives <a href='https://wa.me/918104537999/?text=Hi'>8104537999</a>";
                                sendm($receiver, $subject, $message);
                                session_start();
                                $_SESSION['keyy'] = $keyss;
                                $_SESSION['message'] = 'Item Purchased successfully Your Login credential is mailed to your registered email id ';
                                header('location: ../user-message/');
                            }
                        } else {
                            echo 'key required';

                            $sql = "select keyss from `$soft_name` where status = 'active' LIMIT 1";
                            $resultt = mysqli_query($con, $sql);
                            while ($dataa = mysqli_fetch_array($resultt)) {
                                $keyss = $dataa['keyss'];
                                $sql = "UPDATE `$soft_name` set status = 'sold' , purchased_by = '$user' where keyss = '$keyss' ";
                                $resultt = mysqli_query($con, $sql);
                                echo $keyss;
                                $sql = "select email from `users` where username = '$user' LIMIT 1";
                                $res = mysqli_query($con, $sql);
                                while ($mess = mysqli_fetch_array($res)) {
                                    $receiver = $mess['email'];
                                    $subject = "Your Login Credentials For App " . $soft_name;
                                    $message = "Hi sir thanks for purchasing " . $soft_name . " <br> Please download the software using this link  Download Link : " . $down . "<br>Your Login Key : <b>" . $keyss . "</b><br><br>Softown.Tech is ONLY responsible for the installation part we do not own this software and will not provide any support for the same still if you face any issue report it out to our executives <a href='https://wa.me/918104537999/?text=Hi'>8104537999</a>";
                                    sendm($receiver, $subject, $message);
                                    session_start();
                                    $_SESSION['keyy'] = $keyss;
                                    session_start();
                                    $_SESSION['message'] = 'Item Purchased successfully Your Login credential is mailed to your registered email id ';
                                    header('location: ../user-message/');
                                }
                            }
                        }
                    }
                }
            }
        } else {
            session_start();
            $_SESSION['message'] = 'Item Already Present In Your Purchases';
            header('location: ../user-message/');
        }
    }
}
