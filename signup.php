<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
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



<!-- signup form container -->

<div class="login-form-container">
   <div class="login-form">
   <h1>Sign Up</h1>
   <form method="post" action="login_form.php">
      
      <div class="input-box">
      <input type="text" name="name" placeholder="enter your name" required>
      <i class='bx bxs-user'></i>
    </div>

    <div class="input-box">
      <input type="email" name="email" placeholder="enter your email" required>
      <i class='bx bxs-envelope'></i>
    </div>

    <div class="input-box">
      <input type="password" name="password" placeholder="enter your password" required>
      <i class='bx bxs-lock-alt' ></i>
    </div>

      <input type="submit" value="signup" class="Btn" name="signup">

    </form> 
    <p>Already have an account ? <a href="login.php">Login</a></p>
</div>
</div>

<!-- signup form container -->

<!-- custome js file link -->
<script src="script.js"></script>

</body>
</html> 