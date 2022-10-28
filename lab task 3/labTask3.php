<!DOCTYPE html>
<head>
    
    <title>Log in</title>
    
</head>
<body>
    <?php
        $usernameErr=""; $passwordErr="";
        
        $username=""; $password="";
        

        if($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            if(empty($_POST["username"]))
            {
                $usernameErr="username required" ;
            }
            else{
                $username = $_POST["username"];

                if(!preg_match("/^[a-zA-Z-' ]*$ _/",$username))
                {
                    $usernameErr="Can be content only a-z,A-Z,0-9,dash";
                }
                else{
                    $usernameErr="";
                }
            }

            if(empty($_POST["password"]))
            {
                $passwordErr="password required" ;
            }
            else{
                $password = $_POST ["password"];

                if(!preg_match("/^(?=.*?[A-Za-z])(?=.*?[$@#%]).{8,}$/",$_POST["password"]))
                {
                $passwordErr = "Password must contain  special character and  must 8 characters password";
                }
                else
                {
                    $passwordErr = "";
                } 
            }
        }
    ?>


    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="my_form">

    <div class="form" style="padding-left: 200px; padding-top: 200px;">
            <h2>Login Form</h2><br>

            <div class  = "username">
                <label for="username">Username</label>
                <input type="text" name="username">
                <span class="error"> *
                    <?php echo $usernameErr;?>
                </span>
                <br>
                <br>
            </div>

            <div class="password">
                <label for="password" >Password</label>
                <input type="password" name="password" style="padding-left:10px;">
                <span class="error"> *  
                     <?php echo $passwordErr;?> 
                     </   span>
            </div>
            <hr class="line">

            <div class="remember">
                <input type="checkbox">Remember me?
                <br>
            </div>

            <input type="submit" class="submit" value="submit">



</div>

</form>
</body>
</html>