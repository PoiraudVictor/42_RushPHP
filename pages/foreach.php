<?php
$content = file_get_contents('../db/products');
$products = unserialize($content);
if ($_POST['product_name'] && $_POST['submit'] && $_POST['submit'] === "OK") {
    foreach ($products as $key => $val) {
        if ($val['product_name'] == $_POST['product_name']) {
            unset($products[$key]);
            echo "<script type='text/javascript'>alert('bitch');</script>";
            echo "<script>window.location.href = './foreach.html';</script>";
        }
    }
}
else {
    echo "<script type='text/javascript'>alert('Erreur lors de la supression du produit');</script>";
    echo "<script>window.location.href = './foreach.html';</script>";
    exit();
}
echo "<script type='text/javascript'>alert('oups');</script>";
?>
