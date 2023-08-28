<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
</head>

<body>
    <?php
    require('../db/db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
//         if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }
        $acc_type = stripslashes($_REQUEST['acc_type']);
        $acc_type =  mysqli_real_escape_string($con, $acc_type);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email,acc_type, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$acc_type' ,'$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='register'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='register'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <form class="form-container" action="" method="post">
            <div class="entity">
                <label for="username">USERNAME</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <img src="../images/user.png" class="icon">
            </div>

            <div class="entity">
                <label for="email">EMAIL</label>
                <input type="email" name="email" id="email" placeholder="Email">
            </div>

            <div class="entity">
                <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password" placeholder="Enter Your Password">
                <img src="../images/lock.png" class="icon">
                <img src="../images/eye.png" id="eye1" class="icon eye">
            </div>

            <div class="entity shift-up">
                <label for="re-password">RE-ENTER PASSWORD</label>
                <input type="password" name="re-password" id="re-password" placeholder="Re-enter Password">
            </div>
            <div>
                <label for="acc_type">Account type</label>
                <input type="radio" name="acc_type" <?php if (isset($acc_type) && $acc_type == "Buyer")  ?> value="Buyer">Buyer
                <input type="radio" name="acc_type" <?php if (isset($acc_type) && $acc_type == "Developer")  ?> value="Developer">Developer
            </div>

            <input type="checkbox" name="agree" id="agree" class="agree">
            <label for="agree" id="agree">I agree to terms and conditions</label>

            <button type="submit">Register Now</button>
        </form>
</body>

</html>
<?php
    }
?>