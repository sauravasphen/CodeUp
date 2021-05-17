<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/mainpage.css">
    <script type="text/javascript" src="../JS/menu.js"></script>
    <script type="text/javascript">
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY>0);})
    </script>
    <script type="text/javascript" src="../JS/vanilla-tilt.js"></script>
  </head>
  <body>
    <header>
      <div class="nav-logo">
        <a href="mainpage.php">
          <img src="../MEDIA/logo.png" alt="logo">
          <span>CodeUp</span>
        </a>
      </div>
    </header>
    <div class="menu-bar" onclick="menuslide()">
      <img src="../MEDIA/menu.png">
    </div>
    <div id="menu" onclick="menuslide()">
      <ul>
        <li><a href="mainpage.php">Home</a></li>
        <li><a href="work.php">Our Work</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="#" onclick="Popup()">Client Portal</a></li>
      </ul>
    </div>
    <div class="popup" id="popup-1">
         <div class="login">
            <span onclick="Popup()" class="close">X</span>
            <div class="login-head">
                <h4>Login</h4>
            </div>
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button' onclick='user()' class='toggle-btn'>Agent</button>
                <button type='button' onclick='company()' class='toggle-btn'>Company</button>
                <button type='button' onclick='admin()' class='toggle-btn'>Admin</button>
            </div>
            <form id='user' class='input-group-user' method="post" action="agentloginhandel.php">
                <input type='text' class='input-field' placeholder='Agent ID' name="username" required >
                <input type='password'class='input-field' placeholder='Password' name="password" required>
                <button type='submit' class='submit-btn'>Sign In</button>
            </form>
            <form id='company' class='input-group-company' method="post" action="companyloginhandel.php">
                <input type='text' class='input-field' placeholder='Company Id' name="username" required >
                <input type='password' class='input-field' placeholder='Password' name="password" required>
                <button type='submit' class='submit-btn'>Sign In</button>
            </form>
            <form id='admin' class='input-group-admin' method="post" action="adminloginhandel.php">
                <input type='text' class='input-field' placeholder='Admin ID' name="username" required >
                <input type='password' class='input-field' placeholder='Password' name="password" required>
                <button type='submit' class='submit-btn'>Sign In</button>
            </form>
        </div>
    </div>


    <div class="container">
      <video src="../MEDIA/touch.mp4" autoplay loop></video>
      <div class="CodeUp">
        <p>It's time to get digital!</p>
        <h1>CodeUp</h1>
      </div>
      <div class="logo">
        <img src="../MEDIA/logo.png" alt="logo">
      </div>
    </div>
    </div>
    <div class="attract">
      <h1>Our Services</h1>
      <div class="box" id="box1">
        <div class="text">
          <h1>Make Your Brand Look Unique</h1>
          <p>Logo Design, Digital Content</p>
        </div>
        <div class="image">
          <video src="../media/design.mp4" autoplay loop>
        </div>
      </div>
      <div class="box" id="box2">
        <div class="text">
          <h1>Let Clients know you are Digital.</h1>
          <p>Social Media, Content Creation</p>
        </div>
        <div class="image">
          <video src="../media/socialmedia.mp4" autoplay loop>
        </div>
      </div>
      <div class="box" id="box3">
        <div class="text">
          <h1>Make more sales online.</h1>
          <p>Digital Advertising</p>
        </div>
        <div class="image">
          <video src="../media/sales.mp4" autoplay loop>
        </div>
      </div>
      <div class="box" id="box4">
        <div class="text">
          <h1>Get your dazling website now.</h1>
          <p>Web Design, Web Development</p>
        </div>
        <div class="image">
          <video src="../media/website.mp4" autoplay loop>
        </div>
      </div>
      <div class="box" id="box5">
        <div class="text">
          <h1>Know your Digital status painlessly.</h1>
          <p>Portal</p>
        </div>
        <div class="image">
          <video src="../media/portal.mp4" autoplay loop>
        </div>
      </div>
    </div>
    <div class="service-link">
      <a href="work.php">Check out our work!</a>
    </div>
    <!-- FOOTER -->
    <div class="footer">
      <div class="footer-idea">
        <a href="#">Have an idea?<br>Tell us about it.</a>
      </div>
      <div class="footer-email">
        <h3>info@codup.com</h3>
        <span>1261 Devkota Sadak Mid Baneshor<br>Kathmandu, Nepal</span>
      </div>
      <div class="footer-logo">
        <a href="mainpage.php"><img src="../MEDIA/logo.png" alt="logo"></a>
      </div>
      <div class="copyright">
        ©2021 COPYRIGHT<br>BY CODEUP
    </div>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelectorAll(".image"), {
        max: 10,
        speed:50,
        glare:true,
        "max-glare":1,
      });
  </script>
  </body>
</html>
