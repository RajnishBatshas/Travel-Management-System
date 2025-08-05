<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>

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


  


<!-- login form container -->

<div class="login-form-container">

   <div class="login-form">
   <form method="post" action="login_form.php">
      <h1>login</h1>
    
    <div class="input-box">
      <input type="email" name="email" placeholder="enter your email" required>
      <i class='bx bxs-envelope'></i>
    </div>

    <div class="input-box">
      <input type="password" name="password" placeholder="enter your password" required>
      <i class='bx bxs-lock-alt' ></i>
    </div>

    <div class="remember-forgot">
      <label><input type="checkbox">Remember me</label>
      <a href="#">forgot password ? </a>
    </div>

      <input type="submit" value="login now" class="Btn" name="login">
    </form> 
      <p>Don't have an account ? <a href="signup.php">sign up</a></p>
     

   </div>
</div>

<!-- login form container -->

<!-- custome js file link -->
<script src="script.js"></script>

</body>
</html> 