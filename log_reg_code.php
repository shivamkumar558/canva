<?php
require("connection.php");
session_start();
if(isset($_POST['register_submit']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $user_exist_query="select * from `user` where `USERNAME`='$_POST[username]' OR `email` = '$_POST[email]' ";
    
    $result=mysqli_query($con,$user_exist_query);


    
    if($result)
    { 
        if(mysqli_num_rows($result)>0)
        {
            echo"ashgdiuygasyuvcfduytavcstyudcvautvsuydtvauyvsiuyvai";
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
            echo"mkodule 3 done";
            $query="INSERT INTO `user` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
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
if(isset($_POST['login_submit']))
{

    $query="select * from user where `email`='$_POST[email]'";
    $result = mysqli_query($con,$query);


    if($result)
    {

        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($_POST['password']==$result_fetch['password'])
            {
                $_SESSION['is_logged_in']=true;
                $_SESSION['username']=$result_fetch['username']; //details fetched for nav dropdown
                $_SESSION['email']=$result_fetch['email'];          //
                // $_SESSION['image']=$result_fetch['profile-pic'];      //
                header("location:index.php");

            }
            else
            {
                echo"<script>alert('incorrect password');</script>";
            }
        }
        else
        {
            echo"<script>alert('incorrect eamil or password');</script>";
        }
       
    }
}


?>

