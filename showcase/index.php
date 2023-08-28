<?php
include('../links/css.php');
include('../db/db.php');
// require('../db/auth_session.php');
// include '../db/dev_check.php';
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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>SOFTOWN.Tech - Your own Marketplace</title>
    <!-- Custom CSS -->
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<!-- <h1 style="text-align: center;">This is a showcase page </h1> -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->

    <?php
    $user = $_GET['user'] ?? 'not available';
    if ($user == 'not available') {
        

            $query = "select * from products";
            $records = mysqli_query($con, $query); // fetch data from database
            $rowcount = mysqli_num_rows($records);
            if ($rowcount == 0) {
                header("Location: ../not-allowed/");
            } else {
                $tab_menu = '';
                $tab_content = '';
                $i = 0;
                $product_query = "select * from products ";
                $product_result = mysqli_query($con, $product_query);
                while ($sub_row = mysqli_fetch_array($product_result)) {

                    $sql = "select * from products where `soft_name`=  '" . $sub_row["soft_name"] . "' ";
                    $res = mysqli_query($con,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {


                            $aname = $sub_row["soft_name"];
                            $sqll = "select keyss from `$aname` where status = 'active'";
                            $resl = mysqli_query($con, $sqll);
                            if (mysqli_num_rows($resl) > 0) {
                                # code...

                                $tab_content .= '

  <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="../upload/' . $images["soft_image"] . '"  data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                <form action="../user/shop/" method="post">
                <h4 class="card-title text-center"> ' . $sub_row["soft_name"] . '</h4>
                <p class="card-text text-center">' . $sub_row["short_desc"] . '</p>
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 6px;">
                <p class="card-text" style="margin-bottom: 0px;float:left;"> <b>Supported-OS : ' . $sub_row["os"] . ' </b></p>
                <p class="card-text" style="float:right;color: gold;"> Rating : 4/5 </p>
                </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div style="float:left">
                    <p style ="margin-bottom: 0px;" ><b> Price : ' . $sub_row["price"] . '</b></p>
                    </div>
                    <div class="btn-group text-center">
                    <input type="hidden" name="id" value=' . $sub_row["id"] . '>
                    
                    <button type="submit" class="btn btn-primary">Purchase</button>
                    </div>
                  </div>
                
                </form>
                 
                </div>
              </div>
            </div>
  ';
                            } else {
                                # code...
                                $tab_content .= '

                            <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="../upload/' . $images["soft_image"] . '"  data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                          <div class="card-body">
                                        
                                          <h4 class="card-title text-center"> ' . $sub_row["soft_name"] . '</h4>
                                          <p class="card-text text-center">' . $sub_row["short_desc"] . '</p>
                                          <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 6px;">
                                          <p class="card-text" style="margin-bottom: 0px;float:left;"> <b>Supported-OS : ' . $sub_row["os"] . ' </b></p>
                                          <p class="card-text" style="float:right;color: gold;"> Rating : 4/5 </p>
                                          </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                              <div style="float:left">
                                              <p style ="margin-bottom: 0px;" ><b> Price : ' . $sub_row["price"] . '</b></p>
                                              </div>
                                              <div class="btn-group text-center">
                                              <input type="hidden" name="id" value=' . $sub_row["id"] . '>
                                              
                                              <button type="submit" class="btn btn-primary" disabled>Sold Out</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                            ';
                            }
                        }
                    }
                }
                $tab_content .= '<div style="clear:both"></div></div>';
                $i++;
            }
    ?>

    <?php
        }
    
    
    else {
        $query = "select * from users where username = '$user' and acc_type = 'Developer'";
        $records = mysqli_query($con, $query); // fetch data from database
        $rowcount = mysqli_num_rows($records);
        if ($rowcount == 0) {
            header("Location: ../not-allowed/");
        } else {

            $query = "select * from products where Developer = '$user'";
            $records = mysqli_query($con, $query); // fetch data from database
            $rowcount = mysqli_num_rows($records);
            if ($rowcount == 0) {
                header("Location: ../not-allowed/");
            } else {
                $tab_menu = '';
                $tab_content = '';
                $i = 0;
                $product_query = "select * from products where Developer = '$user'";
                $product_result = mysqli_query($con, $product_query);
                while ($sub_row = mysqli_fetch_array($product_result)) {

                    $sql = "select * from products where `soft_name`=  '" . $sub_row["soft_name"] . "' ";
                    $res = mysqli_query($con,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($images = mysqli_fetch_assoc($res)) {


                            $aname = $sub_row["soft_name"];
                            $sqll = "select keyss from `$aname` where status = 'active'";
                            $resl = mysqli_query($con, $sqll);
                            if (mysqli_num_rows($resl) > 0) {
                                # code...

                                $tab_content .= '

  <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="../upload/' . $images["soft_image"] . '"  data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                <form action="../user/shop/" method="post">
                <h4 class="card-title text-center"> ' . $sub_row["soft_name"] . '</h4>
                <p class="card-text text-center">' . $sub_row["short_desc"] . '</p>
                <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 6px;">
                <p class="card-text" style="margin-bottom: 0px;float:left;"> <b>Supported-OS : ' . $sub_row["os"] . ' </b></p>
                <p class="card-text" style="float:right;color: gold;"> Rating : 4/5 </p>
                </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div style="float:left">
                    <p style ="margin-bottom: 0px;" ><b> Price : ' . $sub_row["price"] . '</b></p>
                    </div>
                    <div class="btn-group text-center">
                    <input type="hidden" name="id" value=' . $sub_row["id"] . '>
                    
                    <button type="submit" class="btn btn-primary">Purchase</button>
                    </div>
                  </div>
                
                </form>
                 
                </div>
              </div>
            </div>
  ';
                            } else {
                                # code...
                                $tab_content .= '

                            <div class="col-md-4">
                                        <div class="card mb-4 box-shadow">
                                          <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="../upload/' . $images["soft_image"] . '"  data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                                          <div class="card-body">
                                        
                                          <h4 class="card-title text-center"> ' . $sub_row["soft_name"] . '</h4>
                                          <p class="card-text text-center">' . $sub_row["short_desc"] . '</p>
                                          <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 6px;">
                                          <p class="card-text" style="margin-bottom: 0px;float:left;"> <b>Supported-OS : ' . $sub_row["os"] . ' </b></p>
                                          <p class="card-text" style="float:right;color: gold;"> Rating : 4/5 </p>
                                          </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                              <div style="float:left">
                                              <p style ="margin-bottom: 0px;" ><b> Price : ' . $sub_row["price"] . '</b></p>
                                              </div>
                                              <div class="btn-group text-center">
                                              <input type="hidden" name="id" value=' . $sub_row["id"] . '>
                                              
                                              <button type="submit" class="btn btn-primary" disabled>Sold Out</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                            ';
                            }
                        }
                    }
                }
                $tab_content .= '<div style="clear:both"></div></div>';
                $i++;
            }
    ?>

    <?php
        }
    }
    ?>
    <div style="text-align:center;background-color:#2962FF;padding:20px;">
        <h1 style="font-family: Century Gothic;">This is a showcase page </h1>
    </div>
    <div class="row p-2">
        <?php echo $tab_content; ?>

    </div>


</div>

</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
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
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/app.init.dark.js"></script>
<script src="../dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="../assets/libs/chartist/dist/chartist.min.js"></script>
<script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<!--c3 charts -->
<script src="../assets/extra-libs/c3/d3.min.js"></script>
<script src="../assets/extra-libs/c3/c3.min.js"></script>
<script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>