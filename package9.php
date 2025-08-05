<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package9</title>
    
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
       <h1>ODISHA</h1>
    </div>
 
    <section class="packages">
    <h1 class="heading-title">THINGS TO SEE & DO</h1>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/rajasthan1.avif" alt="">
            </div>
            <div class="content">
                <h3>ROURKELA</h3>
                <p>You should still visit Rourkela since it's the perfect combination of everything lovely. Temples, marketplaces, and other attractions abound in this metropolis.</p>
    
                <h4 hours style="font-size:18px;">1 - 2 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Vedavyas <br>Gayatri Temple <br> Khandadhar Waterfall <br>Maa Vaishno Devi Temple <h4>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan2.avif" alt="">
            </div>
            <div class="content">
                <h3>CUTTACK</h3>
                <p>Cuttack is one of the most popular tourist spots in Odisha because of its rich history and modern commercialisation. Cuttack has won over the hearts of shopaholics everywhere.</p>
                  <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Stone Revetment <br>Singhanath Temple <br>Maritime Museum <br>Paradeep Beach<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan3.avif" alt="">
            </div>
            <div class="content">
                <h3>PURI</h3>
                <p>Puriis perhaps one of the most famous tourist places in Odisha.Apart from the stunning beach, this place has religious significance, the famous Jaganath temple</p>
                  <h4 hours style="font-size:18px;">3 - 4 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                golden beach<br>swargadwar sea<br>alarnath temple <br>jagannatha temple<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan4.avif" alt="">
            </div>
            <div class="content">
                <h3>BHUBANESHWAR</h3>
                <p>Famously dubbed as the 'temple city of India', this place is one of the major Odisha tourist attractions.The numerous temples
                   present here have astonishingly intricate designs dating back to almost the 12-13th century.</p>
                  <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Lingaraj Temple<br>Rajarani Temple.<br>Nandankanan park <br>Udayagiri park<h4>
            </div>
        </div>
</section>

<div><a href="book.php" class="btn" style="display:flex;margin:auto;width:10%">book now</a></div>


    <!-- custome js file link -->
<script src="script.js"></script>
</body>
</html> 