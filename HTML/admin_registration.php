<?php
  SESSION_start();

  if (isset($_SESSION['admin_name']) && isset($_SESSION['contact_num'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/registrations.css">
    <script src="../JS/valid.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <div class="sidebar">
      <div class="sidebar-header">
        <h3 class="brand">
          <span class="ti-nlink"></span>
          <span>CodeUp</span>
        </h3>
      </div>
      <div class="sidebar-menu">
        <ul>
                <li>
                  <a href="adminpanal.php">
                      <span class="ti-user"></span>
                      <span><?php echo $_SESSION['admin_name']; ?></span>
                  </a>
                </li>
                <li>
                  <a href="admin-agentview.php">
                    <span class="ti-ticket"></span>
                    <span>Agent List</span>
                </a>
              </li>
              <li>
                <a href="admin-companyview.php">
                  <span class="ti-ticket"></span>
                  <span>Clients List</span>
              </a>
            </li>
              <li>
                <a href="admin-taskview.php">
                  <span class="ti-settings"></span>
                  <span>Task List</span>
              </a>
            </li>
            <li>
              <a href="admin_registration.php">
                <span class="ti-settings"></span>
                <span>Register</span>
            </a>
          </li>
          <li>
            <a href="admin-editprofile.php">
              <span class="ti-settings"></span>
              <span>Edit Profile</span>
          </a>
        </li>
            <li>
              <a href="logout.php">
                <span class="ti-shift-right-alt"></span>
                <span>LogOut</span>
            </a>
          </li>
        </ul>

      </div>
    </div>
    <div class="main-content">
      <header>
        <div class="search-wrap">
          <span class="ti-search"></span>
          <input type="search" placeholder="Search">
        </div>
        <div class="social-icons">
          <!-- <span class="ti-bell"></span>
          <span class="ti-comment"></span> -->
          <div class="">

          </div>
        </div>
      </header>

      <div class="reg-div">
            <div class="registration">
                  <h1>Create an Account</h1>
                  <form class="registration-form" action="registrationhandel.php" method="post">
                      <fieldset>
                          <legend>Registration Form</legend><br><br>
                          <div class="label-div">
                              <label for="id">Username</label>
                          </div>
                          <div class="input-div">
                              <input type="text" name="username" placeholder="Username" required>
                          </div>
                          <div class="label-div">
                              <label for="name">Name</label>
                          </div>
                          <div class="input-div">
                              <input type="text" name="name" placeholder="Name" required>
                          </div>
                          <div class="label-div">
                              <label for="email">Email</label>
                          </div>
                          <div class="input-div">
                              <input type="email" name="email" placeholder="Email" required>
                          </div>
                          <div class="label-div">
                              <label for="password">Password</label>
                          </div>
                          <div class="input-div">
                              <input type="password" name="password" placeholder="Password" required>
                          </div>
                          <div class="label-div">
                              <label for="contact">Contact Number</label>
                          </div>
                          <div class="input-div">
                              <input type="int" name="contact" required>
                          </div>
                          <div class="label-div">
                              <label for="account">Account Type</label>
                          </div>
                          <div class="input-div">
                              <select name="acc-type">
                                  <option value="agent">Agent</option>
                                  <option value="company">Company</option>
                                  <option value="admin">Admin</option>
                              </select>
                          </div>
                              <input type="submit" class="reg-btn" name="submit" value="Submit" onclick="valid()">
                      <fieldset>
                  </form>
            </div>
      </div>

</body>
</html>
<?php
}else{
  header("location:mainpage.php");
  exit();
}
?>
