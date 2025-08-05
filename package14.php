<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>package14</title>
    
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
       <h1>TAMIL NADU</h1>
    </div>

    <section class="packages">
    <h1 class="heading-title">THINGS TO SEE & DO</h1>
    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/rajasthan1.avif" alt="">
            </div>
            <div class="content">
                <h3>OOTY</h3>
                <p>Officially called Ootacamund, the hill-town is better known by its nickname–Ooty. It is loved by Bollywood directors, 
                    honeymooners, families, and even backpackers, for its mountains, lakes, gardens, and waterfalls.</p>
                <h4 hours style="font-size:18px;">1 - 2 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Botanical Garden <br> Pykara Waterfalls <br> Doddabetta Peak <br>Ooty Lake <h4>     
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan2.avif" alt="">
            </div>
            <div class="content">
                <h3>RAMESHWARAM</h3>
                <p>Made famous by the epic Ramayana, Rameshwaram is a quaint beach town and a popular Hindu pilgrimage destination that also 
                    attracts nature lovers and adventure enthusiasts.</p>
                  <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Kalam National Memorial<br>Gandamadana Parvatham <br>Ramanathaswamy Temple <br>Pamban Bridge<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan3.avif" alt="">
            </div>
            <div class="content">
                <h3>KANYAKUMARI</h3>
                <p>The southernmost tip of India, Kanyakumari boasts of stunning natural beauty with pristine beaches and gushing waterfalls 
                    along with sacred temples, ancient forts and poignant memorials.</p>
                  <h4 hours style="font-size:18px;">3 - 4 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Vivekananda Rock Memorial <br>Kumari Amman Temple<br>Thiruvalluvar Statue <br>Sanguthurai Beach<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan4.avif" alt="">
            </div>
            <div class="content">
                <h3>CHENNAI</h3>
                <p>With large stretches of white sand, diverse ethnicities and ancient monuments enhancing its natural, cultural, artistic and 
                    culinary vibe, the modern city of Chennai </p>
                  <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Ashtalakshmi Temple <br>Marina Beach <br>Guindy National Park <br>Kapaleeswarar Temple<h4>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rajasthan5.avif" alt="">
            </div>
            <div class="content">
                <h3>COIMBATORE</h3>
                <p>Popularly called the Manchester of South India due to its booming textile industry, Coimbatore lies nestled within the Western 
                    Ghats. Big businesses, friendly crowd, botanical gardens, and cosmopolitan vibes</p>
                <h4 hours style="font-size:18px;">2 - 3 hours</h4>
                <h4 style="font-size:12px;color:red">suggested time</h4>
                <p>_________________________________</p>
                <h4 style="font-size:18px;color:red">ACTIVITIES</h4>
                <h4 style="font-size:12px;">
                Perur Pateeswarar Temple <br>Marudhamalai Hill Temple<br>Siruvani Waterfalls <br>Isha Yoga Center<h4>   
            </div>
        </div>
</section>

<div><a href="book.php" class="btn" style="display:flex;margin:auto;width:10%">book now</a></div>

    <!-- custome js file link -->
<script src="script.js"></script>
</body>
</html> 