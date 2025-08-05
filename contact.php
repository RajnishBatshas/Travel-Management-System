<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>
    
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
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here..">
        <label for="search-bar" class="fas fa-search"></label>
      </form>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->



     <!-- contact section starts -->
    
    <section class="contact">
        <div class="content">
            <h2>CONTACT</h2>
            <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Placeat, veniam?</P>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><b></b><i class="fa-solid fa-location-dot"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>choladhora , jorhat ,<br> assam , india </br>785001</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><b></b><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>000-234-5678</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><b></b><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>travelmint@gmail.com</p>
                    </div>
                </div>

            <h2 class="txt"><a href="#"><i class="fa-solid fa-user-plus"></i></a> connect with us </h2>
            <ul class="sci">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>

            </div>
            <div class="contactForm">
                <form>
                    <h2>Send message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="email" name="" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" value="send">
                    </div>
                </form>
            </div>

        </div>
    </section>
    



     <!-- contact section ends -->



    
<!-- swiper js link  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custome js file link -->
<script src="script.js"></script>
</body>
</html> 