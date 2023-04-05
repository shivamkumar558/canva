
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>authentication</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="util.css">
</head>

<body>
   <?php include("log_reg_code.php") ?>

    <!-- header -->
    <?php include("main-header.php"); ?>

    <!-- main-area for login/signup -->
    <main>
        <div class="main-box flex">
            <div class="about-us flex">
                <h1>Known More About Us</h1>
                <a href="about.php" class="prime-btn">about us</a>
            </div>
             <div class="log-sign-hero flex"> <!--hero(easy tuts) -->
                <div class="form-box flex">
                    <div class="button-box ">
                        <div id="transition-btn"></div>
                        <button id="log-btn" type="submit" class="toggle-btn " onclick="login(),color_switch()">Login</button>
                        <button id="reg-btn" type="submit" class="toggle-btn " onclick="register()">Register</button>
                    </div>


                    <form id="login" action="" method="post">
                        <div class="input-box">
                            <span class="form-icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                            <input type="email" name="email" >
                            <label>E-mail</label>
                        </div>

                        <div class="input-box">
                            <span class="form-icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                            <input type="password" name="password">
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot flex">
                            <label><input type="checkbox" name="checkbox">Remember me</label>
                            <a href="#">Forgot password?</a>
                        </div>

                        <button type="submit" name="login_submit" class=" prime-btn form-btn">login</button>
                        <div class="register flex">
                            <p>Don't have account?
                                <button class="reg" onclick="register()">register</button>
                            </p>
                        </div>
                    </form>
                    <form id="register" action="#" method="post">
                        <div class="input-box">
                            <span class="form-icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                            <input type="text" required name="username">
                            <label>Create user ID</label>
                        </div>
                        <div class="input-box">
                            <span class="form-icon"><ion-icon name="mail-unread-outline"></ion-icon></span>
                            <input type="email" required name="email">
                            <label>E-mail</label>
                        </div>

                        <div class="input-box">
                            <span class="form-icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                            <input type="password" required name="password">
                            <label>Password</label>
                        </div>
                        <div class="remember-forgot flex">
                            <label><input type="checkbox" name="checkbox">term & condition?</label>
                            <a href="#">read</a>
                        </div>

                        <button type="submit" class="form-btn prime-btn" name="register_submit">Sign-Up</button>
                    </form>


                </div>

            </div>
        </div>
    </main>



    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("transition-btn")
        
        function register() {
            x.style.left ="-400px" ;
            y.style.left="-185px"
            z.style.left="110px";
        }
        function login()
        {
            x.style.left ="62px" ;
            y.style.left="580px" ;
            z.style.left="0px";
        }





    </script>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>