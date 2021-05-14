<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <script type="text/javascript" src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/portal.css">
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


  </body>
</html>
