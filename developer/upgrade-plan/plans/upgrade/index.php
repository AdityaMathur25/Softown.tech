<?php

include('../../../../links/css.php');
include('../../../../db/db.php');
require('../../../../db/auth_session.php');
include '../../../../db/dev_check.php';
$op =  $_SESSION['username'];
$up = $_GET['upgrade'];
$sql = "SELECT * FROM `users` WHERE username='" . $_SESSION['username'] . "'  ";
                    $records = mysqli_query($con, $sql); // fetch data from database
                    while ($data = mysqli_fetch_array($records)) {
                        $bal = $data['wallet_balance'];
                        if ($data['acc_status'] == $upgradge) {
                           echo 'you aldready have this upgrade';
                           
                        }
                        else{
                            if ($up == 'gold') {
                                $price = 39;
                                if ($bal >= $price) {
                                    # code...
                                    echo 'your account is upgraded to '.$up;
                                }
                                else {
                                    echo 'your balance is less than the upgrade amount';
                                }
                            }
                            elseif ($up == 'platinum') {
                                # code...
                                $price = 79;
                                if ($bal >= $price) {
                                    # code...
                                    $sql = "UPDATE `users` SET `acc_status` = 'platinum' WHERE username='" . $_SESSION['username'] . "'  ";
                                    $records = mysqli_query($con, $sql);
                                    $curr = $bal - $price ; 
                                    $sql = "UPDATE `users` SET `wallet_balance` = $curr WHERE username='" . $_SESSION['username'] . "'  ";
                                    $records = mysqli_query($con, $sql);
                                    header('location: ./message/?message=OP&acc=platinum');
                                }
                                else {
                                    echo 'your balance is less than the upgrade amount';
                                }
                            }
                            echo $bal; 
                            
                        
                        }
                    
                    }
