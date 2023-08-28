<?php
include('../../links/css.php');
include('../../db/db.php');
require('../../db/auth_session.php');
include '../../db/dev_check.php';
?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>SOFTOWN.Tech - Your own Marketplace</title>
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="../" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                        <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li> -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown border-right">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline font-22"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="m-b-0 m-t-5">Notifications</h4>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications">
                                            <?php
                                            $sql = "SELECT * FROM `notification`   ";
                                            $records = mysqli_query($con, $sql); // fetch data from database
                                            while ($data = mysqli_fetch_array($records)) {

                                                echo '   <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle">
                                                    <i class="fa fa-link"></i>
                                                </span>
                                                <div class="mail-contnet">
                                                    <h5 class="message-title">' . $data['title'] . '</h5>
                                                    <span class="mail-desc">' . $data['description'] . '</span>
                                                </div>
                                            </a>';
                                            }
                                            ?>



                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                       <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <?php
                                            $sql = "SELECT * FROM `users` WHERE `username` = '" . $_SESSION['username'] . "'   ";
                    $records = mysqli_query($con, $sql); // fetch data from database
                    while ($data = mysqli_fetch_array($records)) { ?>
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://avatars.githubusercontent.com/u/41422704?v=4" alt="user" class="rounded-circle" width="40">
                                <span class="m-l-5 font-medium d-none d-sm-inline-block"><?php echo $_SESSION['username'];?> <i class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="https://avatars.githubusercontent.com/u/41422704?v=4" alt="user" class="rounded-circle" width="60">
                                    </div>

                                    <div class="m-l-10">
                                    <?php
                        
                                         echo '   <h4 class="m-b-0">'.$data['name'].'</h4>
                                         <p class=" m-b-0">'.$data['email'].'</p>';
                                            
                    
                    }
                                            ?>
                                        
                                    </div>
                                </div>
                                <div class="profile-dis scrollable">
                                    <a class="dropdown-item" href="../../view-profile/">
                                        <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                    <a class="dropdown-item" href="../wallet/">
                                        <i class="ti-wallet m-r-5 m-l-5"></i> My Wallet</a>
                                    <!-- <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="ti-email m-r-5 m-l-5"></i> Inbox</a> -->
                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="../../Login/logout.php">
                                        <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                </div>
                                <!-- <div class="p-l-30 p-10">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a>
                                </div> -->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Personal</span>
                        </li> -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="../../developer/" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="./" aria-expanded="false">
                                <i class="mdi mdi-tune"></i>
                                <span class="hide-menu">Manage Softwares </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="../wallet/" aria-expanded="false">
                                <i class="mdi mdi-wallet"></i>
                                <span class="hide-menu">My Wallet</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="../add-funds/" aria-expanded="false">
                                <i class="mdi mdi-keyboard-backspace"></i>
                                <span class="hide-menu">Add funds</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="../withdraw-funds/" aria-expanded="false">
                                <i class="mdi mdi-keyboard-tab"></i>
                                <span class="hide-menu">Withdraw funds</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="../upgrade-plan/" aria-expanded="false">
                                <i class="mdi mdi-arrow-up-bold"></i>
                                <span class="hide-menu">Upgrade Plan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="../../view-profile/" aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">View Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="../../showcase/?user=<?php echo $_SESSION['username'] ?>" aria-expanded="false">
                                <i class="mdi mdi-store"></i>
                                <span class="hide-menu">Marketplace</span>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Add Software</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="../">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Software</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->

            <div class="container-fluid">
                <?php
                if (($_SESSION["type"] == "Developer")) {
                    if (isset($_POST["submit-btn"]) && isset($_FILES['my_image'])) {
                        $product_price = $_POST['product-price'];
                        $product_name = $_POST['product-name'];
                        $short_desc = $_POST['short_desc'];
                        $long_desc = $_POST['long_desc'];
                        $os = $_POST['os'];
                        $product_link = $_POST['product_link'];
                        $username = $_SESSION["username"];
                        $soft_type = $_SESSION['acc_status'];
                        $query = "select * from products where soft_name='$product_name'";
                        $records = mysqli_query($con, $query); // fetch data from database
                        $rowcount = mysqli_num_rows($records);
                        if ($rowcount == 0) {
                            $add_product = "INSERT into `products` (Developer, soft_name, soft_type ,price,short_desc,long_desc,os,linkk) VALUES ('$username', '$product_name', '$soft_type','$product_price','$short_desc','$long_desc','$os','$product_link')";
                            $result   = mysqli_query($con, $add_product);
                            if (isset($_POST['req'])) {

                                $sql = "UPDATE `products` SET liscense='1' WHERE Developer='$username' AND soft_name='$product_name' ";
                                $result   = mysqli_query($con, $sql);
                            } else {
                                $test = 1;
                                // Alternate code
                            }
                            $query = "CREATE TABLE `$product_name` (`id` int(11) NOT NULL AUTO_INCREMENT , `keyss` text NOT NULL,`status` text NOT NULL DEFAULT 'active',`purchased_by` text NOT NULL, `rating` int(1) NOT NULL , PRIMARY KEY (ID)) ";
                            $result   = mysqli_query($con, $query);
                            $soft_array = explode("\r\n", $_POST["soft_keys"]);

                            $soft_keys = array_unique($soft_array);

                            $query = "INSERT INTO `$product_name` (keyss) VALUES ('" . implode("'),('", $soft_keys) . "')";

                            $statement = $con->prepare($query);

                            $statement->execute();
                            //  echo "<pre>";
                            // print_r($_FILES['my_image']);
                            // echo "</pre>";

                            $img_name = $_FILES['my_image']['name'];
                            $img_size = $_FILES['my_image']['size'];
                            $tmp_name = $_FILES['my_image']['tmp_name'];
                            $error = $_FILES['my_image']['error'];

                            if ($error === 0) {
                                if ($img_size > 125000) {
                                    $em = "Sorry, your image is too large.";
                                    echo "
                                <div class='alert alert-danger' role='alert'>
                                Sorry, your image is too large.
                              </div>
                    ";
                                    //header("Location: edit.php?error=$em");
                                } else {
                                    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                                    $img_ex_lc = strtolower($img_ex);

                                    $allowed_exs = array("jpg", "jpeg", "png");

                                    if (in_array($img_ex_lc, $allowed_exs)) {
                                        $new_img_name = uniqid("IMG-") . '.' . $img_ex_lc;
                                        $img_upload_path = '../../upload/' . $new_img_name;
                                        move_uploaded_file($tmp_name, $img_upload_path);

                                        // Insert into Database
                                        $sql = "UPDATE `products`SET `soft_image` = '" . $new_img_name . "' WHERE `soft_name` = '" . $product_name . "' and `Developer` = '" . $username . "' ";
                                        //UPDATE $db SET `hwid` = '".$hwid."' WHERE `keyy` = '".$key."'"
                                        mysqli_query($con, $sql);
                                        // header("Location: ../Pages/application.php");
                                    } else {

                                        $em = "You can't upload files of this type";
                                        echo "
                                <div class='alert alert-danger' role='alert'>
                                You can't upload files of this type
                              </div>
                    ";
                                        // header("Location: ../Pages/application.php?error=$em");
                                    }
                                }
                            } else {
                                $em = "unknown error occurred!";
                                // header("Location: ../Pages/application.php?error=$em");
                                 echo "
                                <div class='alert alert-danger' role='alert'>
                                unknown error occurred!
                              </div>
                    ";
                            }
                            echo "
                            <div class='alert alert-success' role='alert'>
                            Product Added Successfully
                          </div>
                ";
                        } else {
                            echo "
                            <div class='alert alert-warning' role='alert'>
                            Product With Same Name Aldready exists
                          </div>
                ";
                        }
                    }
                    // else {
                    //     echo "
                    //             <div class='text-large'>
                    //                                 <h3>Some Internal Error</h3><br/>
                    //             ";
                    // }
                ?>
                    <!-- <form method="post" name="add_product" enctype="multipart/form-data">
                        
                        <label for="name">Enter Name</label>
                        <input class="form-control" type="text" name="product-name" placeholder="e.g. Noisy01" id="product-name" required><br><br>
                        <label for="product-price">Enter price</label>
                        <input class="form-control" type="number" name="product-price" placeholder="e.g. 10" id="product-price" required><br><br>
                        <label for="short_desc">Short Description</label>
                        <input class="form-control" type="text" name="short_desc" placeholder="e.g. short description in about 30 words" id="short_desc" required><br><br>
                        <label for="long_desc">Long Description</label>
                        <input class="form-control" type="text" name="long_desc" placeholder="e.g. long description in about 100-150 words" id="long_desc" required><br><br>
                        <label  for="os">Supported OS</label>
                        <input class="form-control" type="text" name="os" placeholder="e.g. os (windows,linux,android etc)" id="os" required><br><br>
                        <label for="my_image">Software Display Image (only Jpeg , png supported) </label>
                        <input class="form-control" type="file" name="my_image" required><br><br>
                        <label for="req">Software require login credentials </label>
                        <input  type="checkbox" id="req" name="req"> Yes
                        <p>Enter Software keys here</p>
                        
                        <textarea name="soft_keys" id="soft_keys" rows="15" cols="50" disabled></textarea><br><br>
                        <button type="submit" name="submit-btn">Submit</button>
                    </form> -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Detail Form</h4>
                                    <h6 class="card-subtitle"> Enter the details of your software to add in the selling list </h6>
                                    <form class="m-t-30" method="post" name="add_product" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="name">Enter Name</label>
                                            <input class="form-control" type="text" name="product-name" placeholder="e.g. Noisy01" id="product-name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="product-price">Enter price</label>
                                            <input class="form-control" type="number" name="product-price" placeholder="e.g. 10" id="product-price" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="product-link">Enter Software Link</label>
                                            <input class="form-control" type="text" name="product_link" placeholder="e.g. www.xyz.com" id="product-link" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="short_desc">Short Description</label>
                                            <input class="form-control" type="text" name="short_desc" placeholder="e.g. short description in about 30 words" id="short_desc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="long_desc">Long Description</label>
                                            <input class="form-control" type="text" name="long_desc" placeholder="e.g. long description in about 100-150 words" id="long_desc" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="os">Supported OS</label>
                                            <input class="form-control" type="text" name="os" placeholder="e.g. os (windows,linux,android etc)" id="os" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="my_image">Software Display Image (only Jpeg , png supported) </label>
                                            <input class="form-control" type="file" name="my_image" required>
                                        </div>
                                        <div class="form-group ">
                                            <!-- <label for="req">Software require login credentials </label>
                                            <input type="checkbox" > Yes -->
                                            <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"  id="req" name="req">
                                            <label class="custom-control-label" for="req">Your software require login credential ?</label>
                                            <br>
                                            <span class="help-block"><small>Enter the credentials in the below box . 1 credential in 1 line.</small></span> </div>
                                            </div>
                                        

                                            <p>Enter Software keys here</p>

                                            <textarea name="soft_keys" id="soft_keys" rows="15" cols="50" disabled></textarea>
                                        </div>
                                        <button type="submit" name="submit-btn" class="btn btn-primary">Submit</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                    echo "not allowed to access";
                }
                ?>


            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by SOFTOWN.Tech . Designed and Developed by
                <a href="https://github.com/AdityaMathur25">Aditya</a> with ❤️.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.dark.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="../../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
</body>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    $(document).ready(function() {
        $('input').val('');
    });


    document.getElementById('req').addEventListener('click', function() {
        var textArea = document.getElementById('soft_keys')
        textArea.disabled = !textArea.disabled
    });
</script>

</html>