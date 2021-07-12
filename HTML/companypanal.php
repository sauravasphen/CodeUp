<?php
  SESSION_start();

  if (isset($_SESSION['company_name']) && isset($_SESSION['company_id'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/admin.css">
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
      <li class="active">
        <a href="companypanal.php">
              <span class="ti-user"></span>
              <span><?php echo $_SESSION['company_name']; ?></span>
            </a>
        </li>
        <li>
          <a href="company-taskview.php">
            <span class="ti-check-box"></span>
            <span>Task List</span>
          </a>
        </li>
        <li>
          <a href="company-taskadd.php"
            <span class="ti-pin-alt"></span>
            <span>Add Task</span>
        </a>
      </li>
        <li>
          <a href="logout.php">
            <span class="ti-back-left"></span>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- ***************** Body ********************** -->
      <main class="content">
        <h2 class="dash-title">Overview</h2>

        <div class="dash-cards">
          <div class="card-single">
            <div class="card-body">
              <span class="ti-briefcase"></span>
              <div class="">
                <h5>Account balance</h5>
                <h4>$30,659.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>
          <div class="card-single">
            <div class="card-body">
              <span class="ti-reload"></span>
              <div class="">
                <h5>Pending</h5>
                <h4>$19,500.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>
          <div class="card-single">
            <div class="card-body">
              <span class="ti-checkbox"></span>
              <div class="">
                <h5>Processed</h5>
                <h4>$19,500.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>

        </div>
      </main>
    </div>
  </body>
</html>

<?php
}else{
  header("location:mainpage.php");
  exit();
}
?>
