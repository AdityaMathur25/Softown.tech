<?php
/* at the top of 'check.php' */
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
    header('HTTP/1.0 403 Forbidden', TRUE, 403);

    /* choose the appropriate page to redirect users */
    die(header('location: ./'));
}
?>
<?php
include './message_sender.php';
if (isset($_POST["message-send"])) {
    # code...
    $location = $_POST['loc'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message_send = $_POST['message'];
    $receiver = '697jpr@gmail.com';
    $subject =  "Contact Form : ".$_POST['subject'] ?? "Response on Enquiry Form by " . $name;
    $message = 'Name : ' . $name . '<br>Email Id : ' . $email . '<br> Message : ' . $message_send;
    // $receiver,$subject,$message
    sendm($receiver, $subject, $message);
    // unset($receiver,$subject,$message);
    if ($location == 'index') {
        echo "<script type='text/javascript'>window.top.location='./';</script>";
        exit;
    } elseif ($location == 'about') {
        echo "<script type='text/javascript'>window.top.location='./about-us/';</script>";
        exit;
    }
}
?>