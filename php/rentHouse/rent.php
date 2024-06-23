<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icons  -->
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/all.css">
    <!-- main style folder  -->
    <link rel="stylesheet" href="../../css/rent-page/rent-page.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- start header  -->
        <header>
            <div class="logo-and-menu">
                <div class="burger">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="logo">
                    <a href="">explorent</a>

                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="">contact</a></li>
                    <li><a href="">show</a></li>
                    <li><a href="">contact</a></li>
                    <li><a href="">Login</a></li>
                    <li><a href="">SignUp</a></li>
                </ul>
            </nav>
        </header>
        <!-- end header  -->

        <!-- start dashboard  -->
        <div class="dashboard">
            <!-- start left side bar  -->
            <div class="left-side-bar">
                <div class="side-bar-content">
                    <nav>
                        <ul>
                            <li>
                                <a href="">
                                    <span class="icon"><i class="fa-solid fa-plus"></i></span>
                                    <span class="text">new house</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon"><i class="fa-brands fa-wpexplorer"></i></span>
                                    <span class="text">explore</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- end left side bar  -->

            <!-- start right side dashboard  -->
            <div class="right-side">
                <div class="add-home">
                    <h3 style="color: white;">ADD YOUR HOUSE NOW </h3>
                    <button class="add">
                        add
                    </button>
                </div>
                <div class="history-homes">
                    <div class="all-homes">

                    </div>
                    <div class="if-no-data">

                        <h4>No data inserted</h4>
                        <img src="../../img/download.png" alt="">
                    </div>
                </div>
            </div>
            <!-- end right side dashboard  -->
        </div>
        <!-- end dashboard  -->


        <!-- start formuler  -->

        
        <!-- end formuler  -->
    </div>
    <div class="form-section">
        <form id="house-form" action="addFunction.php" enctype="multipart/form-data" method="post">
            <div class="content-form">
                <div class="info-about-home">
                    <!-- Title Input  -->
                    <label for="house-title">Title:</label>
                    <input type="text" id="house-title" name="house-title" placeholder="Title">
    
                    <label for="house-description">Description:</label>
                    <textarea id="house-description" name="house-description" placeholder="Description"></textarea>
    
                    <!-- Number Input -->
                    <label for="house-price">Price per Month:</label>
                    <input type="number" id="house-price" name="house-price" placeholder="Prix">
    
                    <!-- Text Input -->
                    <label for="house-address">Address:</label>
                    <input type="text" id="house-address" name="house-address" placeholder="Address">
    
                    <!-- Text Input -->
                    <label for="house-city">City:</label>
                    <input type="text" id="house-city" name="house-city" placeholder="City">

                </div>

                <div>
                    <!-- Date Input -->
                    <label for="property-type">Available From:</label>
                    <select id="property-type" name="IsAvailable">
                        <option value="house" default>Available</option>
                        <option value="townhouse">Not Available</option>
                    </select>
    
                    <!-- File Input -->
                    <label for="house-image">Upload Image:</label>
                    <input type="file" id="house-image" name="images[]" accept="image/*">
    
                    <!-- Select Dropdown -->
                    <label for="property-type">Property Type:</label>
                    <select id="property-type" name="property-type">
                        <option value="house">House</option>
                        <option value="apartment">Apartment</option>
                        <option value="condo">Condo</option>
                        <option value="townhouse">Townhouse</option>
                    </select>
                
                </div>
            </div>
        <!-- Submit Button -->
            <div class="submit-button">
                <button type="submit" class="submit" name="submit">Add House</button>
                <button type="button" class="consel" onclick="displayForm()">Cansel</button>
            </div>
        </form>
    </div>

    <script src="../../js/rent.js"></script>
    <script src="../../js/validationsHouse.js"></script>
</body>
</html>