<?php
  SESSION_start();

  if (isset($_SESSION['admin_name']) && isset($_SESSION['a_contact_num'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/registration.css">
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
                      <span class="ti-user"></span>
                      <span><?php echo $_SESSION['admin_name']; ?></span>

                </li>
                <li>
                  <a href="admin-agentsview.php">
                    <span class="ti-ticket"></span>
                    <span>Agent List</span>
                </a>
              </li>
              <li>
                <a href="admin-clientview.php">
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
          <span class="ti-bell"></span>
          <span class="ti-comment"></span>
          <div class="">

          </div>
        </div>
      </header>

      <div class="reg-div">
            <div class="registration">
                  <h1>Update/Delete Data</h1>
                  <form class="registration-form" action="updatedelete.php" method="post">
                      <fieldset>
                          <legend>Update/Delete</legend><br><br>
                          <div class="label-div">
                              <label for="id">Usernmae</label>
                          </div>
                          <div class="input-div">
                              <input type="text" name="username" placeholder="username">
                          </div>
                          <div class="label-div">
                              <label for="name">Name</label>
                          </div>
                          <div class="input-div">
                              <input type="text" name="name" placeholder="Name">
                          </div>
                          <div class="label-div">
                              <label for="email">Email</label>
                          </div>
                          <div class="input-div">
                              <input type="email" name="email" placeholder="Email">
                          </div>
                          <div class="label-div">
                              <label for="password">Password</label>
                          </div>
                          <div class="input-div">
                              <input type="password" name="password" placeholder="Password">
                          </div>
                          <div class="label-div">
                              <label for="contact">Contact Number</label>
                          </div>
                          <div class="input-div">
                              <input type="tel" name="contact">
                          </div>
                          <div class="label-div">
                              <label for=account"">Account Type</label>
                          </div>
                          <div class="input-div">
                              <select id="country" name="acc-type">
                                  <option value="agent">Agent</option>
                                  <option value="company">Company</option>
                                  <option value="admin">Admin</option>
                              </select>
                          </div>
                              <input type="submit" class="reg-btn" name="update" value="UPDATE" >
                              <input type="submit" class="reg-btn" name="delete" value="DELETE" >
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
