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
            <span onclick="Popup()" class="close">X</span>
                <h4>Login</h4>
            <form class='login-form' method="post" action="PortalLogin.php">
              <div class='radio-div'>
                <input id="1" type='radio' name="acc-type" class="acc-radiobutton" value="company" checked>
                <label for="1" class='acc-label'>Company</label>
                <input id="2" type='radio' name="acc-type" class="acc-radiobutton" value="agent">
                <label for="2" class='acc-label'>Agent</label>
                <input id="3" type='radio' name="acc-type" class="acc-radiobutton" value="admin">
                <label for="3" class='acc-label'>Admin</label>
              </div>
              <div class="credential">
                <input type='text' class='input-field' placeholder='Username' name="username" required>
                <input type='password'class='input-field' placeholder='Password' name="password" required>
              </div>
              <button type='submit' class='submit-btn'>Sign In</button>
            </form>
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
          <h2>Make Your Brand Look Unique</h2>
          <p>Logo Design, Digital Content</p>
        </div>
        <div class="image">
          <video class="vid" src="../media/design.mp4" autoplay loop>
        </div>
      </div>
      <div class="box" id="box2">
        <div class="text">
          <h2>Let Clients know you are Digital.</h2>
          <p>Social Media, Content Creation</p>
        </div>
        <div class="image">
          <video class="vid" src="../media/socialmedia.mp4" autoplay loop>
        </div>
      </div>
      <div class="box" id="box3">
        <div class="text">
          <h2>Make more sales online.</h2>
          <p>Digital Advertising</p>
        </div>
        <div class="image">
          <video class="vid" src="../media/sales.mp4" autoplay loop>
        </div>
      </div>
      <div class="box" id="box4">
        <div class="text">
          <h2>Get your dazling website now.</h2>
          <p>Web Design, Web Development</p>
        </div>
        <div class="image">
          <video class="vid" src="../media/website.mp4" autoplay loop>
        </div>
      </div>
      <div class="box" id="box5">
        <div class="text">
          <h2>Know your Digital status painlessly.</h2>
          <p>Portal</p>
        </div>
        <div class="image">
          <video class="vid" src="../media/portal.mp4" autoplay loop>
        </div>
      </div>
    </div>
    <div class="service-link">
      <a href="work.php">Check out our work!</a>
    </div>
    <!-- FOOTER -->
    <div class="footer">
      <div class="footer-idea">
        <a href="contactus.php">Have an idea?<br>Tell us about it.</a>
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
      VanillaTilt.init(document.querySelectorAll(".vid"), {
        max: 10,
        speed:50,
        glare:true,
        "max-glare":1,
      });
  </script>
  </body>
</html>
