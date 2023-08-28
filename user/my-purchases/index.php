<?php
include('../../links/css.php');
include('../../db/db.php');
require('../../db/auth_session.php');
include '../../db/user_check.php';
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
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
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
                                    <img src="https://cdn-icons-png.flaticon.com/512/5556/5556468.png" alt="user" class="rounded-circle" width="40">
                                    <span class="m-l-5 font-medium d-none d-sm-inline-block"><?php echo $_SESSION['username']; ?> <i class="mdi mdi-chevron-down"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <span class="with-arrow">
                                        <span class="bg-primary"></span>
                                    </span>
                                    <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                        <div class="">
                                            <img src="https://cdn-icons-png.flaticon.com/512/5556/5556468.png" alt="user" class="rounded-circle" width="60">
                                        </div>

                                        <div class="m-l-10">
                                        <?php

                                        echo '   <h4 class="m-b-0">' . $data['name'] . '</h4>
                                         <p class=" m-b-0">' . $data['email'] . '</p>';
                                    }
                                        ?>

                                        </div>
                                    </div>
                                    <div class="profile-dis scrollable">
                                        <a class="dropdown-item" href="../../view-profile-user/">
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
                            <a class="sidebar-link waves-effect waves-dark" href="../" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="./" aria-expanded="false">
                                <i class="mdi mdi-clock-fast"></i>
                                <span class="hide-menu">Purchase History</span>
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
                            <a class="sidebar-link waves-effect waves-dark" href="../../view-profile-user/" aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">View Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="../../showcase/" aria-expanded="false">
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
                        <h4 class="page-title">My Purchase History</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="../">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">My Purchase History</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            <br>
            <?php
            if (isset($_POST["sub"])) {
                # code...
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
                                    echo "
                                <div class='alert alert-danger' role='alert'>
                                Sorry, please first set the mail then request the resend.
                              </div>
                    ";
                                } else {
                                    $receiver = $mail;
                                    $subject = "[Resend] Your Software Credentials";
                                    //echo 'your key : '  . $dataa['keyss'];
                                    $message = '<b>Your Credentials For Software : </b>' . $dataa['keyss'] . '<br> Download Link : ' . $data['linkk'];
                                    sendm($receiver, $subject, $message);
                                    echo "
                                    <div class='alert alert-primary' role='alert'>
                                    The credentials has been sended to your registered email id .
                                  </div>
                        ";
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
                                echo "
                                <div class='alert alert-danger' role='alert'>
                                Sorry, please first set the mail then request the resend.
                              </div>
                    ";
                            } else {
                                $receiver = $mail;
                                $subject = "[Resend] Your Software Download Link";
                                //echo 'your key : '  . $dataa['keyss'];
                                $message = '<b>Your Credentials For Software : no license required <br> Download Link : ' . $data['linkk'];
                                sendm($receiver, $subject, $message);
                                // echo 'resend mail suceed';
                                echo "
                                <div class='alert alert-primary' role='alert'>
                                The credentials has been sended to your registered email id .
                              </div>
                    ";
                            }
                        }
                        // echo ' <br>';
                        // echo 'download link : ' . $data['linkk'];
                    } else {
                        echo "
                        <div class='alert alert-danger' role='alert'>
                        There is some technical glitch please reach out to our support.
                      </div>
            ";
                    }
                }
            }


            ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div>
                    <?php
                    $sql = "SELECT * FROM `users` WHERE username='" . $_SESSION['username'] . "'  ";
                    $records = mysqli_query($con, $sql); // fetch data from database
                    while ($data = mysqli_fetch_array($records)) {
                    ?>
                        <h3>Current Balance :- ₹ <?php echo $data['wallet_balance']; ?></h3>
                    <?php
                    }
                    ?>

                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <table class="table table-striped data-table" style="width: 100%; text-align:center;">
                    <h3 style="text-align:center;">Recent Transactions</h3>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Resend Credentials</th>
                            <!-- <th>Rate Software</th> -->
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM `purchased_products` where buyer_name = '" . $_SESSION['username'] . "' ";
                        $records = mysqli_query($con, $sql); // fetch data from database
                        while ($data = mysqli_fetch_array($records)) {
                        ?>

                            <tr class="active-row" align="center">
                                <td id="soft_name"><?php $pname = $data['product_name'];
                                                    echo $data['product_name'];
                                                    $status = 2; ?></td>
                                <td>
                                    <form method="post" name="resend">
                                        <input type="hidden" name="idd" value="<?php echo $data['product_id']; ?>">
                                        <button type="submit" name="sub" class="btn waves-effect waves-light btn-outline-info">⬆️ Resend</button>
                                    </form>
                                </td>
                                <!-- <td><button type="button" class="btn waves-effect waves-light btn-outline-warning">❤️ Rate</button></td> -->

                            </tr>
                        <?php

                        }
                        ?>
                    </tbody>
                </table>
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

</html>