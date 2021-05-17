<!-- /* code coming soon */ -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="../CSS/navigation.css">
  <link rel="stylesheet" type="text/css" href="../CSS/contactus.css">
  <script type="text/javascript" src="../JS/menu.js"></script>
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
              <input type='text' class='input-field' placeholder='Company ID' name="username" required >
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
  <div class="contact-section">
    <center>
    <h1>Contact Us</h1>
    <p>Have a question?<br><br>
    Thinking about collaboration?<br><br>
    Feel free to reach out for any reason -- email, call, or just fill out the form below and hit "send".<br><br>
    e-mail: info@codeup.com<br><br>
    phone: 01-5525285</p>
    <hr width = "75%">
    <div class="contact-form">
      <form class="" action="contactus_handle.php" method="post">
        <div class="input-container">
          <input class="input" type="text" name="f_name" required><br />
          <label>Full Name</label>
        </div>
        <div class="input-container">
          <input class="input" type="text" name="company_name" required><br>
          <label>Company Name</label>
        </div>
        <div class="input-container">
          <input class="input" type="Email" name="email" required><br>
          <label>Email ID</label>
        </div>
        <div class="input-container">
          <input class="input" type="text" name="contact_num" required><br>
          <label>Contact No</label>
        </div>
        <div class="input-container">
          <input class="input" type="text" name="subject" required><br>
          <label>Subject</label>
        </div>
        <div class="input-container">
          <textarea class="input" name="message" required></textarea><br>
          <label>Message</label>
        </div>
          <input type="submit" Value="Send" class="submit-btn">
      </form>

    </div>
  </center>
  </div>
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
</body>

</html>
