<?php
// include('../phpmailer/src/Exception.php');
// include ('../phpmailer/src/Exception.php');
// include ('../phpmailer/src/PHPMailer.php');
// include ('../phpmailer/src/SMTP.php');
require '/phpmailer/src/Exception.php';
require '/phpmailer/src/PHPMailer.php';
require '/phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
function sendm  ($receiver,$subject,$message)
{
    # code...
    
    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true ;
    $mail->Username ='softown.tech@gmail.com';
    $mail->Password = 'dqevxtdgdfqlzrkb';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('softown.tech@gmail.com');
    $mail ->addAddress($receiver);
    $mail->isHTML(true);
    $mail->Subject=$subject;
    $mail->Body = $message;
    $mail->send();


}
    # code...
