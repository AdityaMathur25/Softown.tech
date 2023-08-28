<link rel="stylesheet" href="../../css/button.css">
<?php

echo ' ';
require('../../db/db.php');
include('../../db/auth_session.php');
$user = $_SESSION['username'];
$sql = "SELECT * FROM `purchased_products` WHERE buyer_name='$user'  ";
$records = mysqli_query($con, $sql); // fetch data from database
$rowcount = mysqli_num_rows($records);
if ($rowcount == 0) {
    echo 'No Purchases Till Now';
} else { ?>
    <table style="width: 100%; text-align:center;">
        <thead>
            <tr>
                <th>Software Name</th>
                <th>Price</th>
            </tr>

        </thead>
        <tbody>
            <?php
        while ($data = mysqli_fetch_array($records)) {
?>
        <tr class="active-row" align="center">
                <td id="soft_name"><?php echo $data['product_name']; ?></td>
                <td id="soft_price"><?php echo $data['price']; ?></td>
            </tr>
            <?php
        }
            ?>
        </tbody>
    </table>
<?php
}
?>