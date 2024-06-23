<?php
    session_start();
    if(isset($_SESSION[""])){

    }else{
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- popping font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- font awssome icons -->
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/start/main-page.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>

            <div class="logo">
                <a href="">explorent</a>
                
            </div>
            <nav>
                <ul>
                    <li><a href="">contact</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">SignUp</a></li>
                </ul>
            </nav>
        </header>

        <section id="hero-section">
            <div class="content">
                <h1>Welcome to Your New Home Away From Home!</h1>
                <p>Find your perfect home away from home with us, whether it's for a weekend getaway, business trip, or long-term stay. Our diverse selection of rental properties suits all tastes and budgets, ensuring a comfortable and enjoyable experience.</p>
                <div class="links">
                    <a href="#">Tenant</a>
                    <a href="rentHouse/rent.php">rent</a>
                </div>   
                <form action="">
                    <input type="text" placeholder="Search by city">
                </form>
            </div>


            <div class="search">
                <form action="">
                    <input type="text" placeholder="Search by city">
                </form>
            </div>
        </section>
    </div>

    <script src="../js/main.js"></script>
</body>
</html>
