<?php
session_start();

if(isset($_SESSION[""])){
    header("location:");
    
}else{
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form>
            <h2>Login</h2>
            <span class="descrip">Lorem ipsum dolor sit amet ametutem aspsdsderiores eius.</span>
            <div class="email">
                <input type="text" id="email" required>
                <label for="email" class="placeholder">Email</label>
            </div>

            <div class="password">
                <input type="password" id="password" required>
                <label for="password" class="placeholder-password">Password</label>
            </div>
            <button class="submit">LOGIN</button>
            <span>Don't have account ? </span><a href="register.php" class="register">Sign Up</a>
        </form>

    </div>
    <script src="../js/main.js"></script>
</body>
</html>
