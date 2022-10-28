<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>

    <style>
        .error
        {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $currPass = "mohi"; $newPass = $rNewPass = "";
    $passErr1 = ""; $passErr2 = ""; $passErr3 = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    if(empty($_POST["currPass"]))
    {
        $passErr1 = "Current password required";
    }
    else
    {
        if($currPass != $_POST["currPass"])
        {
            $passErr2 = "Invalid current Password";
        }
        else 
        {
            if($_POST["rNewPass"] == $_POST["newPass"])
            {
                echo "Password change succesfully";
            
            $currPass = $_POST ["rNewPass"];
            $passErr3 = "";
            }

            else
            {
                echo  "password not match";
            }

        }
    }
}
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" >

     <h1> Change Password </h1>
     
     <div class = "form1">
        <label for="">Current Password</label>
        <input type="password" name = "currPass"><br>

        <span class = "error">
            <?php
            if ($passErr1)
            {
                echo $passErr1;
            }

            else
            {
                echo $passErr2;
            }
            ?>
        </span>

        <label for="">New Password</label>
        <input type="password" name = "newPass"><br>

        <span class = "error">
            <?php
            if ($passErr3)
            {
                echo $passErr3;
            }
            ?>
        </span>

        <label for="">Retype New Password</label>
        <input type="password" name = "rNewPass"><br>

        <span class = "error">
            <?php
            if ($passErr3)
            {
                echo $passErr3;
            }
            ?>
        </span>
        <br>
      

        <input type="submit" value = "submit">
     </div>
    </form>

   <?php
   echo $newPass;
   ?>
</body>
</html>