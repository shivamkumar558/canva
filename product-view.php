:<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="util.css">
    <title>Canva</title>
</head>

<body>
    <!-- header -->
    <?php include("main-header.php");?>
    <!-- product-view -->
    <main>
        <div class="main-product flex">
            <div class="main-product-item flex">
                <img src="img-3.jpg" id="main-product-item-img" alt="">
            </div>
        </div>
        <div class="main-product-views flex">
            <div class="view-1 views">
                <img src="cyberpunk-among-us-8k-gaming-ghmoma2djle33mtt.jpg" onclick="switch_img(this)" alt="">
            </div>
            <div class="view-2 views">
                <img src="img-2.jpg" onclick="switch_img(this)" alt="">
            </div>
            <div class="view-3 views">
                <img src="img-3.jpg" onclick="switch_img(this)" alt="">
            </div>
            <div class="view-4 views">
                <img src="artistic.jpg" onclick="switch_img(this)" alt="">
            </div>
        </div>
    </main>
    <!-- -------product_view_page---------  -->
    <section>
        <hr>
        <div class="product-header flex">
            <div class="left-product-header">
                <h1>MAKRI KA BACHA</h1>
                <div class="item-price flex">
                    <img class="rupee-icon" src="rupee-indian.png" alt="">
                    <h2>100000</h2>
                </div>
            </div>

            <div class="right-product-header flex">
                <div class="wishlist right-product-header-item ">
                    <a href="#" class="product-button flex">
                        <span class="product-icon flex">
                            <ion-icon name="heart"></ion-icon>
                        </span>
                        <!-- <h2>wishlist</h2> -->
                    </a>
                </div>
                <div class="cart right-product-header-item">
                    <a href="#" class="product-button flex">
                        <span class="product-icon flex">
                            <ion-icon name="cart"></ion-icon>
                        </span>
                        <!-- <h2>Add to cart</h2> -->
                    </a>
                </div>
                <div class="buy right-product-header-item">
                    <a href="#" class="product-button flex">
                        <span class="product-icon flex">
                            <ion-icon name="bag"></ion-icon>
                        </span>
                        Buy Now
                    </a>
                </div>

            </div>
        </div>
        <hr>
    </section>

    <!-- ------product-desc//artist-profile------ -->

    <section>
        <div class="detail-section flex">
            <div class="product-left flex">
                <h2>product description</h2>
                <table>
                    <tr>
                        <td>size:</td>
                        <td>10 x 15 x90 x9978</td>
                    </tr>
                    <tr>
                        <td>category:</td>
                        <td>digital art</td>
                    </tr>
                    <tr>
                        <td>created in: </td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <td>Artist:</td>
                        <td>artist name</td>
                    </tr>
                    <tr>
                        <td>medium:</td>
                        <td>digitalprint on paper</td>
                    </tr>
                    <tr>
                        <td>shipping:</td>
                        <td>domestic only</td>
                    </tr>
                </table>
            </div>
            <div class="artist-right ">
                <div class="artist-header-box ">
                    <div class="artist-profile flex">
                        <img id="artist-profile-pic" src="digital-exaple.jpg" alt="">
                    </div>
                    <div class="artist-detail">
                        <a href="artist-profile.html">
                            <h2>Artist Name</h2>
                        </a>
                        <span class="artist-residence">
                            city,state
                        </span>
                    </div>
                </div>
                <div class="artist-bio">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus optio voluptatum commodi
                        placeat aliquam repudiandae exercitationem perferendis hic ad aut unde quos repellat ex, laborum
                        libero dolore explicabo? Ea, placeat pariatur incidunt voluptas numquam vero unde doloremque!
                        Tenetur, culpa rem blanditiis distinctio alias neque magni minima voluptatem non, laudantium
                        quaerat voluptatibus repellat. Quia dolores voluptate rerum fuga ipsam laborum dolore.</p>
                </div>
                <div class="artist-footer  flex ">
                    <a href="artist-profile.html" class="prime-btn">View Profile</a>
                </div>

            </div>


        </div>
    </section>
<!-- product-deep-intro -->
    <section>
        <div class="more-detail flex">
            <h2>Product Name</h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto praesentium a ea quae cupiditate
                sequi molestias nulla porro amet. Aspernatur cum quos numquam ipsam quas error dicta odit beatae
                voluptas ipsum quod unde deserunt rerum reiciendis, explicabo eius placeat ducimus reprehenderit nulla
                maxime! Cum autem voluptates quod repellat ea officiis aliquid. Odio quis voluptatum dignissimos
                perspiciatis eius aperiam impedit nostrum eligendi illum tenetur beatae, veniam magni! Aliquid totam
                quasi molestiae! Eius aliquid ab necessitatibus nisi dolor blanditiis hic minima maxime aspernatur atque
                minus, dicta, ipsum rem, vero dolorem. In consequatur incidunt laboriosam neque hic ad corporis itaque
                ut earum id voluptatum, rem deserunt nobis, aperiam autem voluptates consequuntur illum amet beatae quod
                dicta? Incidunt dolor facilis odio, ipsa in consectetur molestias quam numquam reiciendis voluptas
                minima maxime? Et unde nobis dolorum architecto deserunt omnis culpa soluta alias veritatis nisi ex
                tempore, rerum quos possimus modi. Numquam, itaque quisquam! Tempora eius voluptate corporis sapiente,
                harum nobis repellendus perspiciatis possimus provident. Libero error assumenda odit sequi ipsum
                pariatur ad distinctio iste rem quam quia repellat minus mollitia aperiam eligendi nisi repudiandae
                quae, deleniti in consectetur beatae voluptatem accusamus impedit. Illum consequuntur laudantium
                suscipit alias quaerat ipsam voluptatum, tempore error rerum excepturi velit?
            </p>
        </div>
    </section>
<!-- -----------more arts from same artist-------------- -->
<section>
    <a href=""><h2>Similar Product</h2></a>
    <div class="more-from-slidebox flex">
        <div class="product-flex-container ">
            <img class="product-flex-container-img" src="img-1.jpg" alt="">
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
                        <a href="product-view.html" class="product-button flex">
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
</section>
<!-- -----------more similar product-------------- -->
<section>
    <a href=""><h2>More From Artist...</h2></a>
    <div class="more-from-slidebox flex ">
        <div class="product-flex-container ">
            <img class="product-flex-container-img" src="img-1.jpg" alt="">
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
                        <a href="product-view.html" class="product-button flex">
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
</section>



    <script>
        function switch_img(small_img) {
            var big_img = document.getElementById("main-product-item-img");
            big_img.src = small_img.src;
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
