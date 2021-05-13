<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/mainpage2.css">
    <script type="text/javascript">
      var vid = document.getElementById('video');
      vid.autoplay = true;
      vid.load();
    </script>
  </head>
  <body>
    <div class="container">
      <video src="../MEDIA/touch.mp4" id  ="video" autoplay loop></video>
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
          <p>Make your Brand Unique. <br>(Logo designing, digital content)</p>
        </div>
        <div class="image">
          <video src="../media/design.mp4" id="video" autoplay loop>
        </div>
      </div>
      <div class="box" id="box2">
        <div class="text">
          <p>Let clients know you're digital. <br>(Social media)</p>
        </div>
        <div class="image">
          <video src="../media/socialmedia.mp4" id="video" autoplay loop>
        </div>
      </div>
      <div class="box" id="box3">
        <div class="text">
          <p>Reach out to more people.<br> (Boosting)</p>
        </div>
        <div class="image">
          <video src="../media/sales.mp4" id="video" autoplay loop>
        </div>
      </div>
      <div class="box" id="box4">
        <div class="text">
          <p>Get yourself a daziling website!<br>(Website)</p>
        </div>
        <div class="image">
          <video src="../media/website.mp4" id="video" autoplay loop>
        </div>
      </div>
      <div class="box" id="box5" >
        <div class="text">
          <p> Get easy-breezy digital <br>management portal.<br>(Portal)</p>
        </div>
        <div class="image">
          <video src="../media/portal.mp4" id="video" autoplay loop>
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
