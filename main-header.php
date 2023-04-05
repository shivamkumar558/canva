
<section>
        <div class="header flex">
            <div class="left-side-header flex">
                <div class="logo-container">
                    <img class="website-logo" src="Artlogo.png" alt="logo">
                </div>
                <div class="webname">
                    <a href="index.html">
                        <h1>Canva</h1>
                    </a>
                </div>
            </div>
            <div class="right-side-header flex">
                <div class='nav'>
                    <ul class='flex nav-link'>
                        <li><a href="product.php">buy</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">contact</a></li>
                        <?php
                            if(isset($_SESSION['is_logged_in']))
                            {
                                echo "Welcome $_SESSION[username]";
                            }
                            else
                            {
                            echo"<li><a href='log-sign.php' class='header-login prime-btn '>login</a></li>";
                            }
                        ?>
                        
                    </ul>

                </div>
            </div>
        </div>


    </section>

