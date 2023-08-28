<h1>HI developer</h1>
<!-- <link rel="stylesheet" href="../css/style.css"> -->
<?php
include('../links/css.php');
include('../db/db.php');
require('../db/auth_session.php');
include '../db/dev_check.php';
?>

<div>
  <a href="./add-product/">Add Sofware</a>
  <a style="float:right;" href="../Login/logout.php">logout</a><br><br><br><br>
</div>
<?php
        $sql = "SELECT * FROM `users` WHERE username='" . $_SESSION['username'] . "'  ";
        $records = mysqli_query($con, $sql); // fetch data from database
        while ($data = mysqli_fetch_array($records)) {
        ?>
<div style="float: right;"> <b> Wallet Balance :- <?php echo $data['wallet_balance']; ?></b> </div><br><br>
<?php
        }
        ?>

<!-- <a style="text-align: right;" href="./add-product/">Add Sofware</a><br><br><br><br> -->
<table class="table table-striped data-table" style="width: 100%; text-align:center;">
  <thead>
    <tr>
      <th>Software Name</th>
      <th>Price</th>
      <th>Manage</th>
      <th>Remove App</th>
    </tr>

  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM `products` where developer = '" . $_SESSION['username'] . "' ";
    $records = mysqli_query($con, $sql); // fetch data from database
    while ($data = mysqli_fetch_array($records)) {
    ?>

      <tr class="active-row" align="center">
        <td id="soft_name"><?php echo $data['soft_name']; ?></td>
        <td style="text-align:center ;"><?php echo $data['price']; ?></td>
        <form action="./edit-product/" method="post">
          <td>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <input class="nor" type="submit" value="Edit">
          </td>
        </form>
        <!-- <td>
          <a href="delete.php?id=<?php echo $data['id']; ?>&app=<?php echo $data['app']; ?>">Delete</a>
        </td> -->
        <form action="./delete-product/" method="post">
          <td>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <input type="hidden" name="soft_name" value="<?php echo $data['soft_name']; ?>">
            <input class="nor" type="submit" value="delete">
          </td>
        </form>


      </tr>


    <?php

    }
    ?>
  </tbody>
</table>
<br>
<br>
<a href="../showcase/?user=<?php echo $_SESSION['username'] ?>">Showcase Link</a>