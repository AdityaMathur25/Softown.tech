<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="icon" href="../images/logo.ico">
    <!-- <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/style.css" /> -->
    
</head>
<?php
//C:\xampp\htdocs\softown.tech\links
require('../db/db.php');
include('../links/css.php');
$user = $_GET['user'] ?? 'not available';
if ($user == 'not available') {
    header("Location: ../not-allowed/");
} else {
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
<div style="text-align:center;background-color:grey;padding:20px;">
    <h1>This is a showcase page </h1>
</div>
<div class="row p-2">
    <?php echo $tab_content; ?>

</div>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="../js/jquery-3.5.1.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap5.min.js"></script>
<script src="../js/script.js"></script>
<script src="../js/my.js"></script>
<script src="../js/pg_redirect.js"></script>