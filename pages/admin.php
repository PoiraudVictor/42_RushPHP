<?php
    session_start();
    if ($_POST["product_name"] && $_POST["image_url"] && $_POST["prix"] &&
    $_POST["cat_polaire"] && $_POST["cat_tshirt"] && $_POST["cat_baselayer"] && $_POST["submit"] && $_POST["submit"] === "OK")
    {
        $content = file_get_contents("../db/products");
        $products = unserialize($content);
        $flag = 0;
        if ($products !== false)
        {
            foreach ($products as $key => $value)
            {
                if ($value["id"] === $_POST["id"])
                    $flag = 1;
            }
        }
        if ($flag)
            echo "<p style='color: red'>ERROR</p>";
        else
        {
            $product["product_name"] = $_POST["product_name"];
            $product["id"] = random_int(0, 100);
            $product["image_url"] = $_POST["image_url"];
            $product["prix"] = $_POST["prix"];
            $product["cat_polaire"] = $_POST["cat_polaire"];
            $product["cat_tshirt"] = $_POST["cat_tshirt"];
            $product["cat_baselayer"] = $_POST["cat_baselayer"];
            $products[] = $product;
            file_put_contents("../db/products", serialize($products));
            header("Location: ../admin.html");
            exit();
        }
    }
    else
        echo "ERROR\n";
?>
