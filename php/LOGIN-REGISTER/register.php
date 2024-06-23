<?php
$errorMessage = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = @$_GET['email'];
        $password = @$_GET['password'];
        $confirm_pass = @$_GET['password_confirmed'];

        if (isset($email) && isset($password) && isset($confirm_pass)){
            require "../database.php";
    
            $check_email_query = $conn->prepare("SELECT * FROM user WHERE email = ? and password = ?");
            $check_email_query->execute([$email,$password]);
    
            if ($check_email_query->fetch()) {
                $errorMessage = "Email already exists in the database";
                $response =["message" => "the email is already exist"];
            } else {
    
                if ($password == $confirm_pass) {
    
                    $query = $conn->prepare("INSERT INTO user (email, password) VALUES (?, ?)");
                    $query->execute([$email,$password]);
                    if ($query->execute([$email,$password])) {
                        header("location:login.php");
                        exit();
                    } else {
                        $errorMessage = "Registration failed. Please try again later.";
                    }
                } else {
                    $errorMessage = "Password and confirm password do not match";
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login-reginger/register.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Task Management</title>
</head>
<body>
    <!-- REGISTER  -->
    <div class="container">
        <form method="POST">
            <h2>REGISTER</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, architecto?</p>
        <?php
        if ($errorMessage != "") {
            echo '<p class="alert alert-danger">' . $errorMessage . '</p>';
        }
        ?>
            <input type="text" name="username" placeholder="Username" data-type="username">
                <span></span>
            <input type="text" name="email" placeholder="email" data-type="email">
                <span></span>
            <input type="password" name="password" placeholder="password" data-type="password">
                <span></span>
            <input type="password" name="password_confirmed" placeholder="confirm password" data-type="confirmePass">
                <span></span>
            <button type="submit" class="submit" name="submit">Submit</button>
            <span>Forget the password ?</span></a>
            <a href="login.php" class="login">Login</a>
        </form>
    </div>
    <script src="../../js/validation.js"></script>
</body>
</html>
