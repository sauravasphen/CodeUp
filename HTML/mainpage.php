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
    <div id="menu">
      <div class="menu-section" onclick="menuslide()">
          <i class="fas fa-times"></i>
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="work.php">Our Work</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><button type="button" onclick="Popup()" class="portal-btn">Client Portal</button></li>
      </ul>
    </div>

    <div class="popup" id="popup-1">
         <div class="content">
            <span onclick="Popup()" class="close">X</span>
            <div class="login-head">
                <h4>Login</h4>
            </div>
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button'onclick='user()'class='toggle-btn' name="user">User</button>
                <button type='button'onclick='company()'class='toggle-btn' name="company">Company</button>
                <button type='button'onclick='admin()'class='toggle-btn' name="admin">Admin</button>
            </div>
            <form id='user' class='input-group-user'>
                <input type='text'class='input-field'placeholder='Email Id' name="username" required >
                <input type='password'class='input-field'placeholder='Enter Password' name="password" required>
                <button type='submit'class='submit-btn'>User</button>
            </form>
            <form id='company' class='input-group-company'>
                <input type='text'class='input-field'placeholder='Email Id' name="username" required >
                <input type='password'class='input-field'placeholder='Enter Password' name="password" required>
                <button type='submit'class='submit-btn'>Company</button>
            </form>
            <form id='admin' class='input-group-admin'>
                <input type='text'class='input-field'placeholder='Email Id' name="username" required >
                <input type='password'class='input-field'placeholder='Enter Password' name="password" required>
                <button type='submit'class='submit-btn'>Admin</button>
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
    <div class="attract">
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
