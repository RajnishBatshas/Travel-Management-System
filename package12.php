<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package12</title>
    
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
        <input type="search" id="search-bar" placeholder="search for packages..">
        <label for="search-bar" class="fas fa-search"></label>
      </form>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->

    <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
       <h1>CHATTISGARH</h1>
    </div>

    <section class="packages">
    <h1 class="heading-title">THINGS TO SEE & DO</h1>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/rajasthan1.avif" alt="">
            </div>
            <div class="content">
                <h3>BHILAI</h3>
                <p>Bhilai is Chhattisgarh’s second-largest city, and its multiculturalism and diversity have earned it the nickname “Mini India.” 
                    It is famous for its tranquil atmosphere and beautiful, verdant landscape</p>
                <h4 hours style="font-size:18px;">1 - 2 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                St. Vincent Palloti <br>Rail Globe Chowk <br>Civic Center <br>Maitri Bagh <h4>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan2.avif" alt="">
            </div>
            <div class="content">
                <h3>RAIPUR</h3>
                <p>Raipur is the capital city of this state and is known for its rich cultural heritage and history. The city is famous for its 
                    ancient temples and other Chhattisgarh tourist attractions</p>
                  <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Mahant Ghasidas Memorial Museum <br>Vivekananda Sarovar <br>Swami Vivekananda Statue<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan3.avif" alt="">
            </div>
            <div class="content">
                <h3>RAIGARH</h3>
                <p>Raigarh is a rapidly developing city with several industrial units and power plants. The city is known for its religious significance and has several temples</p>
                  <h4 hours style="font-size:18px;">3 - 4 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Gomarda Wildlife Sanctuary <br>Ram Jharna Temple <br>Shri Shyam Mandir<h4>
            </div>
        </div>
</section>

<div><a href="book.php" class="btn" style="display:flex;margin:auto;width:10%">book now</a></div>

    <!-- custome js file link -->
<script src="script.js"></script>
</body>
</html> 