<?php
  SESSION_start();

  if (isset($_SESSION['company_name']) && isset($_SESSION['company_id'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../JS/task.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../CSS/admin-portal.css">
    <link rel="stylesheet" href="../css/Portal-Navigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li><a href="companypanal.php">
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
        <li class="active">
          <a href="company-taskadd.php">
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
    <!--Agent Task form -->
    <div class="content">
      <div class="grid-container">
        <div class="grid-box add-user">
          <div class="adduser-title">
            Add Task
          </div>
          <form action="companytaskhandel.php" method="post">
            <div class="adduser-details">
            <div class="input-container">
              <label for="">Task</label><br />
            <input class="agent-input-field" name="task"required></input>
            </div>
            <div class="input-container">
              <label for="">Subject</label><br />
              <select name="subject">
                <option value="Modify Website">Modify Website</option>
                <option value="Advertising/Boosting">Advertising/Boosting</option>
                <option value="Product Shoot">Product Shoot</option>
                <option value="Graphic Design">Graphic Design</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
            <br>
            <input type="submit" class="adduser-btn" value="Add"></input>
          </form>
        </div>
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
