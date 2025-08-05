<?php
session_start();
$conn = mysqli_connect('localhost','root','','travelmint');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    
    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custome css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

      <!-- header section starts -->

      <section class="header">
      <a href="home.php" class="logo"><b style="color:red;">t</b>ravelMint</a>

      <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="about.php">ABOUT</a>
            <a href="package.php">PACKAGE</a>
            <a href="contact.php">CONTACT</a>
            <a href="gallery.php">GALLERY</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <a href="login.php"><i class="fas fa-user"  id="login-btn"></i></a>
        <?php
        if(isset($_SESSION['name'])){
            $name=$_SESSION['name'];
            $query=mysqli_query($conn, "SELECT users.* FROM 'users' WHERE users.name='$name'");
            while($row=mysqli_fetch_array($query)){
                echo $row['name'];
            }
        }
        ?>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search for packages..">
        <label for="search-bar" class="fas fa-search"></label>
      </form>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->


    <!-- home section starts -->

    <section class="home">
    <video class="video-slide active" src="1.mp4" autoplay muted loop></video>
      <div class="content active">
        <h1>Wonderful.<br><span>Island</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="about.php">Read More</a>
      </div>
    </section>

    <!-- home section ends -->
	
    <!-- services section starts -->

    <section class="services">
        <h1 class="heading-title"> OUR SERVICES</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/adventure.png" alt=" ">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/tour-guide.png " alt=" ">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/trekking.png " alt=" ">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/camp-fire.png " alt=" ">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/off-road.png " alt=" ">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/camping.png " alt=" ">
                <h3>camping</h3>
            </div>
        </div>
    </section>


    <!-- services section ends -->

    <!-- home about section starts -->

    <section class="home-about">
        <div class="image">
            <img src="images/photo4.jpg" alt="">
        </div>

        <div class="content">
            <h3>ABOUT US</h3>
            <p>Our online travel company, has a profound understanding of Indian consumers travel needs and preferences. 
            It offers a wide range of holiday packages in India and across the world, catering to various segments of travellers. </p>
             <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <!-- home about section ends -->

    <!-- home package section starts -->

    <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>
        <div class="box-container">
            
            <div class="box">
                <div class="image">
                    <img src="images/photo1.avif" alt="">
                </div>
                <div class="content">
                    <h3>MAHARASHTRA</h3>
                    <p>A melting pot of cultures, set against the backdrop of Bollywood, Maharashtra prides itself in hosting extravagant 
                        Ganesh Chaturthi celebrations, exhibiting diverse tourist destinations and cultivating the best wines in the country.</p>
                    <a href="package16.php" class="btn">EXPLORE</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/photo2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>DELHI</h3>
                    <p>Delhi, the capital of India, is known for its rich culture, history,authentic food, fashion, and political hub. It is also famous 
                        for its street markets, spiritual sites, metro system, nightlife, and ayurvedic medicine, which is one of the main reasons behind its global popularity.</p>
                    <a href="package17.php" class="btn">EXPLORE</a>
</div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/photo3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>PUNJAB</h3>
                    <p>The state is known for its vibrant culture, drool-worthy delicacies, spiritual significance and historical relevance. 
                        Punjab has major attractions like the Golden Temple, The Jallianwala Bagh, Wagah Border and much more.</p>
                    <a href="package18.php" class="btn">EXPLORE</a>
                </div>
            </div>
        </div>
        <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
    </section>


    <!-- home package section ends -->

    <!-- home offer section starts -->

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>over 15+ packages all over india</p>
            <a href="package.php" class="btn">EXPLORE</a>
        </div>
    </section>

    <!-- home offer section ends -->
 
    <!-- footer section stars -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>QUICK LINKS</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i> book</a>`
        </div>
        <div class="box">
            <h3>EXTRA LINKS</h3>
            <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i> about us</a>
            <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>CONTACT INFO</h3>
            <a href="#"><i class="fas fa-phone"></i> +91 9876543210</a>
            <a href="#"><i class="fas fa-phone"></i> +91 1234567890</a>
            <a href="#"><i class="fas fa-envelope"></i> progyangoswami3@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> jorhat, assam, india - 785001 </a>
        </div>
        <div class="box">
            <h3>FOLLOW US</h3>
            <a href="#"><i class="fab fa-instagram"></i> INSTAGRAM</a>
            <a href="#"><i class="fab fa-facebook"></i> FACEBOOK</a>
            <a href="#"><i class="fab fa-twitter"></i> TWITTER</a>
        </div>
    </div>
    <div class="credit">CREATED BY <span> PROGYAN DEEP GOSWAMI</span> | ALL RIGHTS RESERVED!</div>
</section>


<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custome js file link -->
<script src="script.js"></script>
</body>
</html> 