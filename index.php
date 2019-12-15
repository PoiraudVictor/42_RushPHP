<?php
    session_start();
    $_SESSION["test"] = "toto";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./main.css">
    <title>Le pote à Gonia</title>
</head>
<body>
    <nav class="header">
        <h1 class="logo">Le pote à Gonia</h1>
        <ul class="navbar-right">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./pages/signup.html">Signup</a></li>
            <li><a href="./pages/signin.html">Login</a></li>
            <li><a href="./pages/logout.php">Logout</a></li>
            <li><a href="./pages/modify.html">Modify account</a></li>
            <li><a href="./pages/panier.html">Panier</a></li>
        </ul>
    </nav>

    <section style="margin-top: 90px">
        <h1>hello</h1>
        <?php
            print_r($_SESSION);
        ?>
    </section>
    <section class="main-window">
        <div class="categories">
            <h2>Catégories</h2>
            <ul class="categories-list">
                <li>🥋 Polaires</li>
                <li>👕 T-shirts</li>
                <li>👚 Base layers</li>
            </ul>
        </div>
        <div class="products">
            <ul class="products-list">
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
                <li>
                    <img src="https://eu.patagonia.com/dis/dw/image/v2/ABBM_PRD/on/demandware.static/-/Sites-patagonia-master/default/dw615431e2/images/hi-res/25840_NENA.jpg?sw=750&sh=750&sm=fit&sfrm=png" alt="Polaire">
                    <p class="product-name">Produit 1</p>
                    <p class="product-price">180 €</p>
                </li>
            </ul>
        </div>
    </section>
    <script src="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css"></script>
</body>
</html>