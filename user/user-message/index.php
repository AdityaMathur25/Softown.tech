<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <style>
    body {
  font-family: 'Roboto', Arial;
}

.alert {
  width: 100%;
  padding: 12px 16px;
  border-radius: 4px;
  border-style: solid;
  border-width: 1px;
  margin-bottom: 12px;
  font-size: 16px;
}

.alert.alert-success {
  background-color: rgba(227, 253, 235, 1);
  border-color: rgba(38, 179, 3, 1);
  color: rgba(60, 118, 61, 1);
}

.alert.alert-info {
  background-color: rgba(217, 237, 247, 1);
  color: rgba(49, 112, 143, 1);
  border-color: rgba(126, 182, 193, 1);
}


.alert.alert-warning {
  background-color: rgba(252, 248, 227, 1);
  border-color: rgba(177, 161, 129, 1);
  color: rgba(138, 109, 59, 1);
}

.alert.alert-danger {
  background-color: rgba(248, 215, 218, 1);
  border-color: rgba(220, 53, 69, 1);
  color: rgba(114, 28, 36,1);
}
  </style>
<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location:../');
    exit;
}

session_start();
$message = $_SESSION['message'] ??'no message to display';
$keyy = $_SESSION['keyy'] ?? '';
// echo $message;
if (isset($_SESSION['keyy'])) {
    echo '<br>';
   //echo 'Your Key :- '.$keyy;
    # code...
}
unset($_SESSION["message"]);
unset($_SESSION["keyy"]);
?>
 <div class="alert alert-success" role="alert"><?php echo $message ?></div>

<br>
<br>

<a href="../../user/" >Go back to dashboard</a>
<script src="https://cdn.tailwindcss.com"></script>