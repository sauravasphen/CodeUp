<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <script type="text/javascript" src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/nav.css">
    <script src="../JS/menu.js" charset="utf-8"></script>
  </head>
  <body>
    <!-- Navigation part -->
    <div class="menu-section" onclick="menuslide()">
        <i class="fas fa-bars"></i>
    </div>
    <div id="menu">
      <div class="menu-section" onclick="menuslide()">
          <i class="fas fa-times"></i>
      </div>
        <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#About Us">About Us</a></li>
            <li><a href="#Service">Service</a></li>
            <li><a href="#Work">Work</a></li>
            <li><a href="#Contact Us">Contact Us</a></li>
            <li><button type="button" onclick="Popup()" class="portal-btn">Client Portal</button></li>
        </ul>
    </div>

    <div class="popup" id="popup-1">
         <div class="content">
            <i onclick="Popup()" class="fas fa-times"></i>
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                <button type='button'onclick='register()'class='toggle-btn'>Sign Up</button>
            </div>
            <form id='login' class='input-group-login'>
                <input type='text'class='input-field'placeholder='Email Id' required >
                <input type='password'class='input-field'placeholder='Enter Password' required>
                <input type='checkbox'class='check-box'><span>Remember Password</span>
                <button type='submit'class='submit-btn'>Log in</button>
            </form>
            <form id='register' class='input-group-register'>
                <input type='text' class='input-field' placeholder='First Name' required>
                <input type='text' class='input-field' placeholder='Last Name' required>
                <input type='email' class='input-field' placeholder='Email Id' required>
                <input type='password' class='input-field' placeholder='Enter Password' required>
                <input type='password' class='input-field' placeholder='Confirm Password' required>
                <button type='submit'class='submit-btn'>Sign Up</button>
                <p>Or</p>
                <button type="button" class="google-btn">Sign In with Google</button>
            </form>
        </div>
    </div>


  </body>
</html>
