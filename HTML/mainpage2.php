<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/mainpage2.css">
    <script type="text/javascript" src="../JS/menu.js"></script>
  </head>
  <body>
    <div class="nav-bar">
      <div class="nav-logo">
        <a href="mainpage2.php">
          <img src="../MEDIA/logo.png" alt="logo">
          <span>CodeUp</span>
        </a>
      </div>
      <div class="menu-bar" onclick="menuslide()">
        <img src="../MEDIA/menu.png">
      </div>
      <div id="menu" onclick="menuslide()">
        <ul>
    			<li><a href="#">Home</a></li>
    			<li><a href="#">Service</a></li>
    			<li><a href="#">Word</a></li>
    			<li><a href="#">About Us</a></li>
    			<li><a href="#">Contact Us</a></li>
    			<li><a href="#">Portal</a></li>
    		</ul>
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
          <h1>Get you dazling website now.</h1>
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
    <script type="text/javascript" src="../JS/vanilla-tilt.js"></script>
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
