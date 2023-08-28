<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location:../not-allowed/');
    exit;
}
echo "the product is added to the list"
?>
<button><a href="../add-product/">Go Back</a></button>