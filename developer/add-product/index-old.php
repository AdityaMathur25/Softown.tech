<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php
require('../../db/db.php');
include('../../db/auth_session.php');

if (($_SESSION["type"] == "Developer")) {
    if (isset($_POST["submit-btn"]) && isset($_FILES['my_image'])) {
        $product_price = $_POST['product-price'];
        $product_name = $_POST['product-name'];
        $short_desc = $_POST['short_desc'];
        $long_desc = $_POST['long_desc'];
        $os = $_POST['os'];
        $username = $_SESSION["username"];
        $soft_type = $_SESSION['acc_status'];
        $query = "select * from products where soft_name='$product_name'";
        $records = mysqli_query($con, $query); // fetch data from database
        $rowcount = mysqli_num_rows($records);
        if ($rowcount == 0) {
            $add_product = "INSERT into `products` (Developer, soft_name, soft_type ,price,short_desc,long_desc,os) VALUES ('$username', '$product_name', '$soft_type','$product_price','$short_desc','$long_desc','$os')";
            $result   = mysqli_query($con, $add_product);
            if (isset($_POST['req'])) {

                $sql = "UPDATE `products` SET liscense='1' WHERE Developer='$username' AND soft_name='$product_name' ";
                 $result   = mysqli_query($con, $sql);
            } else {
            
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
                    echo $em;
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
                        echo $em;
                        // header("Location: ../Pages/application.php?error=$em");
                    }
                }
            } else {
                $em = "unknown error occurred!";
                // header("Location: ../Pages/application.php?error=$em");
                echo $em;
            }
            echo "
                <div class='text-large'>
                                    <h3>Product Added Successfully.</h3><br/>
                ";
        } else {
            echo "
                <div class='text-large'>
                                    <h3>Product With Same Name Aldready Exists.</h3><br/>
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
    <form method="post" name="add_product" enctype="multipart/form-data">
        <label for="name">Enter Name</label>
        <input type="text" name="product-name" placeholder="e.g. Noisy01" id="product-name" required><br><br>
        <label for="product-price">Enter price</label>
        <input type="number" name="product-price" placeholder="e.g. 10" id="product-price" required><br><br>
        <label for="short_desc">Short Description</label>
        <input type="text" name="short_desc" placeholder="e.g. short description in about 30 words" id="short_desc" required><br><br>
        <label for="long_desc">Long Description</label>
        <input type="text" name="long_desc" placeholder="e.g. long description in about 100-150 words" id="long_desc" required><br><br>
        <label for="os">Supported OS</label>
        <input type="text" name="os" placeholder="e.g. os (windows,linux,android etc)" id="os" required><br><br>
        <label for="my_image">Software Display Image (only Jpeg , png supported) </label>
        <input type="file" name="my_image" required><br><br>
        <label for="req">Software require login credentials </label>
        <input type="checkbox" id="req" name="req"> Yes
        <p>Enter Software keys here</p>
        <!-- <label for="soft_keys">Enter Email List</label> -->
        <textarea name="soft_keys" id="soft_keys" rows="15" cols="50" disabled></textarea><br><br>
        <button type="submit" name="submit-btn">Submit</button>
    </form>
<?php
} else {
    echo "not allowed to access";
}
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    $(document).ready(function() {
        $('input').val('');
    });
    

document.getElementById('req').addEventListener( 'click', function(){
    var textArea = document.getElementById('soft_keys')
    textArea.disabled = !textArea.disabled
});
</script>