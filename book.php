<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    
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
        <i class="fas fa-user" id="login-btn"></i>
      </div>

      <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search for packages..">
        <label for="search-bar" class="fas fa-search"></label>
      </form>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->



    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
       <h1>BOOK NOW</h1>
    </div>

    <!-- booking section starts -->

    <section class="booking">
        <h1 class="heading-title">BOOK YOUR TRIP !</h1>

        <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>NAME :</span>
                <input type="text" placeholder="ENTER YOUR NAME" name="name">
            </div>
            
            <div class="inputBox">
                <span>EMAIL :</span>
                <input type="email" placeholder="ENTER YOUR EMAIL" name="email">
            </div>

            <div class="flex">
            <div class="inputBox">
                <span>PHONE:</span>
                <input type="number" placeholder="ENTER YOUR NUMBER" name="phone">
            </div>
            
            <div class="inputBox">
                <span>ADDRESS :</span>
                <input type="text" placeholder="ENTER YOUR ADDRESS" name="address">
            </div>

            <div class="inputBox">
                <span>DESTINATION :</span>
                <input type="text" placeholder="ENTER YOUR DESTINATION" name="location">
            </div>

            <div class="inputBox">
                <span>HOW MANY :</span>
                <input type="number" placeholder="NUMBER OF PEOPLE" name="guests">
            </div>

            <div class="inputBox">
                <span>ARRIVAL :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>LEAVING :</span>
                <input type="date" name="leaving">
            </div>
        </div>

        <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>

    <!-- booking section starts -->