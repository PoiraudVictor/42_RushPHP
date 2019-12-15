<?php
$path = '../db/products'
foreach ($path as $key => $val) {
    if ($key == 'product' && $val == $_POST['product']) {
        unset($path[$key]);
    }
}
?>
