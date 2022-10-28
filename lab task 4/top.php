<?php 
    session_start();
    if(isset($_SESSION['user']) || isset($_COOKIE['user'])){
        if(!isset($_SESSION['user'])){
            $_SESSION['user'] = json_decode(base64_decode($_COOKIE['user']), true);
        }
        header('Location:view_profile.php');
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="top.css">
    </head>

    <body>
     
        <div class="logo"  style="background-color: wheat;"><img src="image/logo.png" height="100px" width="200px">
            <div class="navigation">
                <div class="home"><a href="weclome.php">Home</a></div>
                <div class="home"><a href="login.php">Log In</a></div>
                <div class="home"><a href="resgistration.php">Registration</a></div>
            </div>
            </div>
      
    </body>
</html>