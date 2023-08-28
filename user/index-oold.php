<h1>HI BUYER</h1>
<?php

include('../db/db.php');
require('../db/auth_session.php');
//include '../db/dev_check.php';
// echo $_SESSION['type'];
?>
<link rel="stylesheet" href="../css/button.css">
<div>
    <a href="./my-purchases/">My Purchases</a>
    <a style="float:right;" href="../Login/logout.php">logout</a><br><br>
</div>
<?php
$sql = "SELECT * FROM `users` WHERE username='" . $_SESSION['username'] . "'  ";
$records = mysqli_query($con, $sql); // fetch data from database
while ($data = mysqli_fetch_array($records)) {
?>

    <div style="float: right;">
        <div>
            <b> Wallet Balance :- <?php echo $data['wallet_balance'] . " $";
                                    $bal = $data['wallet_balance']; ?></b>
        </div>
        <div>
        <b> Recharge Wallet :- <a href="https://wa.me/918104537999/?text=Hi I want to recharge my wallet My username is <?php echo $_SESSION['username'] ?> Plese Do It on *SOFTOWN.tech*"   target="_blank">Yes</a></b>
        </div>
    </div><br><br>
<?php
}
?>

<table style="width: 100%; text-align:center;">
    <thead>
        <tr>
            <th>Software Name</th>
            <th>Price</th>
            <th>Purchase Software</th>
        </tr>

    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM `products` WHERE soft_type='premium-plus'  ";
        $records = mysqli_query($con, $sql); // fetch data from database
        while ($data = mysqli_fetch_array($records)) {
            
        ?>
            
            <tr class="active-row" align="center">
                <td id="soft_name"><?php echo $data['soft_name']; ?></td>
                <td style="text-align:center ;"><?php echo $data['price'];
                                                $price = $data['price']; ?></td>
                <?php if ($bal >= $price) { 
                    $aname = $data['soft_name'];
                    $sqll = "select keyss from `$aname` where status = 'active'";
                    $resl = mysqli_query($con, $sqll);
                    if (mysqli_num_rows($resl) > 0) {
                        ?><form action="./shop/" method="post">
                        <td>
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input class="nor" type="submit" value="Buy">
                        </td>
                    </form><?php
                    }
                    else {
                        ?>
                        <td>
                            
                        <input class="nor" type="submit" value="Sold out" disabled>
                    </td>
                    <?php
                    }
                    ?>
                    
                <?php
                } else { ?>
                    <form action="./shop/" method="post">
                        <td>
                            <input type="submit" value="Buy" disabled>
                        </td>
                    </form>
                <?php
                } ?>

            </tr>
        <?php

        }
        ?>
        <?php
        $sql = "SELECT * FROM `products` WHERE soft_type='free'  ";
        $records = mysqli_query($con, $sql); // fetch data from database
        while ($data = mysqli_fetch_array($records)) {
            
            ?>
                
                <tr class="active-row" align="center">
                    <td id="soft_name"><?php echo $data['soft_name']; ?></td>
                    <td style="text-align:center ;"><?php echo $data['price'];
                                                    $price = $data['price']; ?></td>
                    <?php if ($bal >= $price) { 
                        $aname = $data['soft_name'];
                        $sqll = "select keyss from `$aname` where status = 'active'";
                        $resl = mysqli_query($con, $sqll);
                        if (mysqli_num_rows($resl) > 0) {
                            ?><form action="./shop/" method="post">
                            <td>
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input class="nor" type="submit" value="Buy">
                            </td>
                        </form><?php
                        }
                        else {
                            ?>
                            <td>
                                
                            <input class="nor" type="submit" value="Sold out" disabled>
                        </td>
                        <?php
                        }
                        ?>
                        
                    <?php
                    } else { ?>
                        <form action="./shop/" method="post">
                            <td>
                                <input type="submit" value="Buy" disabled>
                            </td>
                        </form>
                    <?php
                    } ?>
    
                </tr>
            <?php
    
            }
            ?>


    </tbody>
</table>