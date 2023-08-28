<?php
include('../../db/db.php');
require('../../db/auth_session.php');
include '../../db/user_check.php';
include '../../message_sender.php';
$product_id = $_POST['idd'];
$sql = "SELECT * FROM `products` where id = '$product_id' ";
$records = mysqli_query($con, $sql); // fetch data from database
while ($data = mysqli_fetch_array($records)) {
    $soft = $data['soft_name'];
    if ($data['license'] == 0) {
        # code...
        $sqql = "SELECT * FROM $soft where purchased_by = '" . $_SESSION['username'] . "'  ";
        $recordss = mysqli_query($con, $sqql); // fetch data from database
        while ($dataa = mysqli_fetch_array($recordss)) {
            $s1 = "SELECT * FROM users where username = '" . $_SESSION['username'] . "' ";
            $r1 = mysqli_query($con, $s1); // fetch data from database
            while ($daat = mysqli_fetch_array($r1)) {
                $mail = $daat['email'];
                // echo $mail;
                if ($mail == NULL) {
                    # code...
                   echo 'your mail is not set';
                } else {
                    $receiver = $mail;
                    $subject = "[Resend] Your Software Credentials"; 
                    //echo 'your key : '  . $dataa['keyss'];
                    $message = '<b>Your Credentials For Software : </b>'.$dataa['keyss'].'<br> Download Link : '. $data['linkk'];
                    sendm($receiver, $subject, $message);
                }
            }
           
        }
        
    } else if ($data['license'] == 1) {
        # code...
        $s1 = "SELECT * FROM users where username = '" . $_SESSION['username'] . "' ";
            $r1 = mysqli_query($con, $s1); // fetch data from database
            while ($daat = mysqli_fetch_array($r1)) {
                $mail = $daat['email'];
               // echo $mail;
                if ($mail == NULL) {
                    # code...
                    echo 'your mail is not set';
                } else {
                    $receiver = $mail;
                    $subject = "[Resend] Your Software Download Link"; 
                    //echo 'your key : '  . $dataa['keyss'];
                    $message = '<b>Your Credentials For Software : no license required <br> Download Link : '. $data['linkk'];
                    sendm($receiver, $subject, $message);
                }
            }
        // echo ' <br>';
        // echo 'download link : ' . $data['linkk'];
    }
    else {
        echo 'error';
    }
}

// $receiver = $_POST['mail'];
