<?php
require("connection.php");
session_start();
?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="util.css">
</head>

<body>
    <!-- header -->
    <?php include("main-header.php");?>

    <main class="flex">

        <div class="product-main ">
            <div class="product-flex-container ">
                <img class="product-flex-container-img" src="artistic.jpg" alt="">
                <div class="detail-box ">
                    <div class="product-title">
                        <h3>Product Name</h3>
                        <a href="artist-profile.html" class="flex">
                            by<h4>Artist Name</h4>
                        </a>
                        <a href="#" class="add-to-wishlist flex">
                            <span class="product-icon flex">
                                <ion-icon name="heart"></ion-icon>
                            </span>
                        </a>
                    </div>
                    <div class="product-more">
                        <div class="product-price flex">
                        <img src="rupee-indian.png" alt="">
                        <h4>100000</h4>
                        </div>
                        <span>
                            <h5>type of this art</h5>
                            <h5>resolution of this art</h5>
                        </span>
                    </div>
                    <div class="product-btn-container flex">
                        <div class="cart">
                            <a href="#" class="product-button flex">
                                <span class="product-icon flex">
                                    <ion-icon name="cart"></ion-icon>
                                </span>
                                cart
                            </a>
                        </div>
                        <div class="buy">
                            <a href="product-view.php" class="product-button flex">
                                <span class="product-icon flex">
                                    <ion-icon name="bag"></ion-icon>
                                </span>
                                Buy
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>