<?php
require 'config.php';
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn , "SELECT * FROM  tb_user WHERE email = '$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script> alert('email has already taken'); </script>";

    }
    else{
        if($password == $confirmpassword) {
            $query= "INSERT INTO tb_user VALUES('','email','password')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Scussesfully signed up'); </script>";
    
        }
        else{
            echo
            "<script> alert('password is wrong'); </script>";
    
        }
    }
       
}      
?>
<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<title>Login & Registration Form | CoderGirl</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css">
    <title>sigunup</title>
</head>

<body>
<form action="selectp.php" >
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email"  id ="email"name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" id ="password" name="password" required>

            <label for="confirmpassword"><b>confirm password</b></label>
            <input type="password" placeholder="confirm password" id = "confirmpassword" name="confirmpassword" required>

            <!-- <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label> -->

            <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

            <div class="clearfix">
                <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>

</body>

</html>