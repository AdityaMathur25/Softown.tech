<?php
    /* at the top of 'check.php' */
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );

        /* choose the appropriate page to redirect users */
        die( header( 'location: ./' ) );

    }
?>
<?php 
                                include './message_sender.php';
                                if (isset($_POST["message-send"])) {
                                    # code...
                                    $location = $_POST['loc'];
                                    $receiver = $_POST['mail'];
                                    $subject = "Thank You Letter From Softown";
                                    $message = "<b>Thank you for subscribing to our new letter</b><br> <img src='http://softown.tech/img/gmimg.png' ></img>";
                                    // $receiver,$subject,$message
                                    sendm($receiver,$subject,$message);
                                    // unset($receiver,$subject,$message);
                                    if ($location == 'index') {
                                        echo "<script type='text/javascript'>window.top.location='./';</script>"; exit;
                                    }
                                    
                                    elseif ($location == 'about') {
                                        echo "<script type='text/javascript'>window.top.location='./about-us/';</script>"; exit;
                                    }
                                    

                                }
?>