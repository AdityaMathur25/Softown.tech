<?php
require('../../db/db.php');
include('../../db/auth_session.php');
include('../../db/dev_check.php');
$id = $_POST['id'];
$qry = mysqli_query($con, "select * from products where id='$id'"); // select query
$data = mysqli_fetch_array($qry); // fetch data
?>
<form method="post" action="../edit-product/edit.php">
    <label for="Name">Application Name </label>
    <input type="text" name="name" value="<?php $s_name = $data['soft_name'] ;echo $data['soft_name'] ;  ?>" placeholder="Enter Full Name" Required><br><br>
    <label for="version">Vesion </label>
    <input type="number" name="price" value="<?php echo $data['price'] ?>" placeholder="Enter Version" Required><br><br>
    <textarea cols=50 disabled>
    <?php
    $sql = "select keyss from `$s_name` where status = 'active'";
    $records = mysqli_query($con, $sql);
    // echo $sql;
     while ($dat = mysqli_fetch_array($records)) 
     {
        // echo "<td>" .$row['username']. "</td>";
        // echo "<td>" .$row['title']. "</td>";
        //echo "<td>" .$row['review']. "</td>";
         //echo $dat['keyss'];
         
        echo 'under process';
        // echo ("<td><a href=\"editreview.php?id=$row[id]\">
        //     <button>Edit Review</button></a></td>");

        // echo ("<td><a href=\"delete.php?id=$row[id]\">
        //     <button>Deleat Review</button></a></td>");
    }
    // if (!$check1_res) {
    //     trigger_error(mysqli_error($con), E_USER_ERROR);
    // }
    ?>
    </textarea>
    <input type="hidden" name="id" value="<?php echo $id?>">
    <input type="submit" name="update" value="Update"><br><br>
</form>