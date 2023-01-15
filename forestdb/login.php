<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Login</header>
            <form action="#">
                <input type="text" placeholder=" email" id="email">
                <input type="password" placeholder=" password" id="password">
                <a href="#">Forgot password?</a>
                <input type="submit" class="button" value="Login" onclick="login()">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
            </div>
        </div>
        <div class="registration form">
            <header>Signup</header>
            <form action="#">
                <input type="text" placeholder="Enter your email">
                <input type="password" placeholder="Create a password">
                <input type="password" placeholder="Confirm your password">
                <input type="button" class="button" value="Signup">
                <!-- <a href="firstp.html" target="_blank">HOME</a> -->
            </form>
            <div class="signup">
                <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
            </div>
        </div>
    </div>
    <script>
        function login() {
            var email = document.getElementById("email").value;
            var password = document.getAnimations("password").value;
            if (email == "admin1@gmail.com" && password == "admin123") {
                window.location.assign("selectp.php");
                alert("login succesfully");
            } else {
                alert("invalid page");
                return;
            }


        }
    </script>
</body>

</html>