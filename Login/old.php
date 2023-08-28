
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Login</title>
            </head>

            <body>
                <?php
                session_start();
                 require('../db/db.php');
                $uip = $_SERVER['REMOTE_ADDR'];
                if (isset($_POST['username'])) {
                    $username = stripslashes($_REQUEST['username']);
                    $username = mysqli_real_escape_string($con, $username);
                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($con, $password);
                    // Check user is exist in the database
                    $query    = "SELECT * FROM `users` WHERE username='$username'
                                AND password='" . md5($password) . "'";
                    $result = mysqli_query($con, $query) or die(mysqli_connect_error());
                    $rows = mysqli_num_rows($result);
                    if ($rows == 1) {
                        $_SESSION['username'] = $username;
                        $ret = mysqli_query($con, "SELECT * FROM `users` WHERE userName='$username'  and password='" . md5($password) . "' and acc_type ='buyer'");
                        $num = mysqli_fetch_array($ret);
                        if ($num > 0){
                            $cat =  mysqli_query($con, "SELECT old_ip from users where username = '$username'");
                        $bat = mysqli_fetch_array($cat);
                        foreach ($bat as $bat) {
                            $mad = $bat;
                            //$_SESSION['acc_status'] = $bat['acc_status'];
                        } 
                        
                            $_SESSION['type'] = "buyer";
                            mysqli_query($con, "UPDATE users set old_ip='$uip',new_ip='$mad' where username = '$username' ");
                            header("Location: ../user/");
                        }  // Redirect to user dashboard page
                        else{
                            while($deta = mysqli_fetch_array($result)) {
                                //$email = $row['email'];
                                $_SESSION['acc_status'] = $deta['acc_status'];
                            }
                            $_SESSION['type'] = "Developer";
                           //
                            header("Location: ../developer/");
                        }
                        
    
                    } else {
                        echo "<div class='text-large'>
                            <h3>Incorrect Username/password.</h3><br/>
                            <p class='link'>Click here to <a href='login.php'  >Login</a> again.</p>
                            </div>";
                    }
                } else {
                ?>
                    <div class="box">
                        <a href="index.php">
                            <div class="ribbon-1"> Noisy.io </div>
                        </a>
                    </div>
                    <div class="login-card">
                        <header>
                            <p class="text-large">Sign In</p>
                            <p class="text-small">Log in to your account to continue.</p>
                        </header>
                        <div class="logo-image">
                            <img src="../images/logo.png" id="logo">
                        </div>
                        <section class="form-container">
                            <form method="post" name="login">
                                <div class="input-entity">
                                    <label for="user" class="text-small-bold text-small labels">USERNAME</label>
                                    <input type="text" name="username" placeholder="e.g. Noisy01" id="user">
                                    <img src="../images/user.png" class="icon">
                                </div>

                                <div class="input-entity">
                                    <div class="labels">
                                        <label for="pass" class="text-small-bold text-small">PASSWORD</label>
                                        <a href="#" class="text-small-bold text-small">Forgot Password ?</a>
                                    </div>
                                    <input type="password" name="password" placeholder="Password" id="pass">
                                    <img src="../images/lock.png" class="icon">
                                    <i id="icon" class="fa-duotone fa-eye"></i>
                                    <img src="../images/eye.png" id="eye" class="icon eye">

                                </div>

                                <button type="submit">Log In</button>
                            </form>
                            <div class="sign-up">
                                <p>Not registered ? <a class="create" href="../register/">Create an account</a></p>
                            </div>
                        </section>
                    </div>
                  

            </body>

            </html>
            <?php
                }
            ?>