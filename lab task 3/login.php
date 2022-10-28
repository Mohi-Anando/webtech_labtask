<!DOCTYPE html>
<html lang="en">


<head>
    <style>
        .error{color: red;}
    </style>

    <title>Log In Page</title>

    <link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>
<body>

    <?php
        $nameErr=$emailErr=$genderErr="";
        $name=$email=$gender="";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr="Please enter a name";
            }else{
                $name = $_POST["name"];
                if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
                    $nameErr="Only letters and whitespaces allowed";
                }
            }

            if(empty($_POST["email"])){
                $emailErr="Please enter a valid email address";
            }else{
                $email=$_POST["email"];

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Invalid email format";
                }
            }
            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
              } else {
                $gender = $_POST["gender"];
              }
        }


    ?>






    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        
    <div class="reg" style="margin:100px; ">
        
        <h2 style="color:red ;">Registation</h2>

            <div class="input-style">

                <label for="a">Name</label>
                <input type="text" name="name" placeholder="Enter your name" id="a" value="<?php echo $name;?>"/>
                <span class="error">* <?php echo $nameErr;?></span>

                <label for="b">Email</label>
                <input type="email" name="email" placeholder="Enter your email" id="b" value="<?php echo $email;?>"/>
                <span class="error">* <?php echo $emailErr;?></span>
  

                <label for="c">Phone</label>
                <input type="text" name="number" placeholder="+880112****" id="c"/>

                <label for="d">Password</label>
                <input type="text" name="password" placeholder="" id="d"/>

                <label for="e">Confirm Password</label>
                
                <input type="text" name="password" placeholder="" id="e"/>
                
            </div>

                <div class="gen">
                    <p style="color:#ecf0f1;">Gender</p>
                    <div class="option">

                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"><span style="color:#ecf0f1;">Female</span>
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">"><span style="color:#ecf0f1;">Male</span>
                    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">"><span style="color:#ecf0f1;">Others</span>  
                    <br><span class="error">* <?php echo $genderErr;?></span>


                    </div>
                


                <div class="register-page">
                    <input type="submit" value="Resgister" />
                </div>
                




            </div>

        </div>

    </form>
</body>
</html>