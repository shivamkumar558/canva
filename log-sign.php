
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

<?php

require('connection.php');
if(isset($_POST['login_submit']))
{
    $email=$_POST['email'];   
    $password=$_POST['password'];

    $email_search="select * from user where email='$email'";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count)
    {

        if($email_search == $password)
        {
            echo "Login successful";
            header('location:index.php');
        }
        else
        {
            echo "password not valid";
        }
    }
}

if(isset($_POST['register_submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];   
    $password=$_POST['password'];

    $user_exist_query="select * from `user` where `email`=`$email` or `username`=`$username`";
    $result=mysqli_query($con,$user_exist_query);


    
    if($result)
    { 
        if(mysqli_num_rows($result)>0)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                #error for username already registered
                echo "<script> alert('username already taken'); window.location.href='log-sign.php';</script>";  
            }
            else
            {
                #error for email already registered
                echo "<script>
                alert(email already taken');
                window.location.href=log-sign.php;
          </script>"; 
            }
        }  
        else
        {
            $query="INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$username', '$eamil', '$password')";
            if(mysqli_query($con,$query))
            {
                echo "query inserted sucesulyy";
            }
            else
            {
                echo "not inserted";
            }
        }
    }
    else{
        echo "<script>
                    alert('Cannot run query');
                    window.location.href=log-sign.php;
              </script>";
    }
}


?>

    <!-- header -->
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
                <div class="nav">
                    <ul class="flex nav-link">
                        <li><a href="product-view.html">buy</a></li>
                        <li><a href="#">sale</a></li>
                        <li><a href="#">contact</a></li>
                        <li><a href="log-sign.php" class="header-login prime-btn ">login</a></li>
                    </ul>

                </div>
            </div>
        </div>


    </section>

    <!-- main-area for login/signup -->
    <main>
        <div class="main-box flex">
            <div class="about-us flex">
                <h1>Known More About Us</h1>
                <a href="about.html" class="prime-btn">about us</a>
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