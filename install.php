<?php
    if (!file_exists('db')) {
        mkdir('db');
    }
    if (!file_exists('db/users')) {
        touch('db/users');
        serialize('db/users');
    }
    if (!file_exists('db/products')) {
        touch('db/products');
        serialize('db/users');
    }
?>
