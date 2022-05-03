<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <title>Gossip</title>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            Gossip
            <div>Sign Up</div>
        </div>
        <form action="" id="myform">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <div>
                <span class="gender">Gender:</span><br>
                <input type="radio" name="gender" value="Male"> Male<br>
                <input type="radio" name="gender" value="Female"> Female<br>
            </div>
            <input type="Password" name="password" placeholder="Password"><br>
            <input type="password" name="password2" placeholder="Retype Password"><br>
            <input type="button" value="Sign Up" id="signup_button"><br>
        </form>
    </div>
    <script type="text/javascript" src="js/signup.js"></script>
</body>
</html>