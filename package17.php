<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package17</title>
    
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
       <h1>DELHI</h1>
    </div>

    <section class="packages">
    <h1 class="heading-title">THINGS TO SEE & DO</h1>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/rajasthan1.avif" alt="">
            </div>
            <div class="content">
                <h3>BHARATPUR</h3>
                <p>Also known as the “Eastern Gate of Rajasthan”, Bharatpur is a paradise for bird-lovers. This off-beat destination is also home 
                  to the UNESCO World Heritage Site, Keoladeo National Park.</p>
    
                <h4 hours style="font-size:18px;">1 - 2 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Visit the Keoladeo National Park <br> Walk Around Band Baretha <br> Admire Ganga Mandir’s <h4>
                
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan2.avif" alt="">
            </div>
            <div class="content">
                <h3>JAIPUR</h3>
                <p>Fondly known as the ‘Pink City’ and now declared as a UNESCO World Heritage Site, Jaipur’s historic forts, majestic palaces 
                    and ancient temples make it a perfect royal getaway in the heart of Aravallis.</p>
                  <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Amer Fort <br>Hawa Mahal <br>Jantar Mantar<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan3.avif" alt="">
            </div>
            <div class="content">
                <h3>JODHPUR</h3>
                <p>Known for the magnificent Mehrangarh Fort, famous palaces and lakes, Jodhpur is a popular tourist destination, divided into the 
                    Old City and New City.The town is a lovely paradise for architects and travellers,</p>
                  <h4 hours style="font-size:18px;">3 - 4 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Mehrangarh Fort <br>Mandore Garden <br>Camel Safari<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan4.avif" alt="">
            </div>
            <div class="content">
                <h3>UDAIPUR</h3>
                <p>Snuggled along the banks of Lake Pichola with a gorgeous backdrop of the Aravalli Hills, Udaipur charms you with its age-hold 
                    heritage and culture mirrored in stately palaces, magnificent temples and sparkling lakes.</p>
                  <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                City Palace <br>Fateh Sagar Lake <br>Jag Mandir Palace<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan5.avif" alt="">
            </div>
            <div class="content">
                <h3>JAISALMER</h3>
                <p>Founded by the erstwhile Rajput ruler Rawal Jaisal, Jaisalmer sits in the heart of Thar desert and will take your breath away 
                    with its majestic forts, fascinating havelis, ancient Jain Temples and sparkling sand dunes.</p>
                <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Jaisalmer Fort <br>Maharaja's Palace <br>Gadisar Lake<h4>   
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan6.avif" alt="">
            </div>
            <div class="content">
                <h3>AJMER</h3>
                <p>A chaotic bustling city with rugged the Aravalli hills on one side, surrounding an expansive lake and the holy shrine of Khwaja 
                    Muin-ud-din Chishti at its heart, Ajmer is a significant cultural and historical centre in Rajasthan.</p>
                  <h4 hours style="font-size:18px;">30 - 40 minutes</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Ajmer Sharif Dargah <br>Ana Sagar Lake <br>Ajmer Jain Temple<h4>
            </div>
        </div>
</section>

<div><a href="book.php" class="btn" style="display:flex;margin:auto;width:10%">book now</a></div>

    <!-- custome js file link -->
<script src="script.js"></script>
</body>
</html> 