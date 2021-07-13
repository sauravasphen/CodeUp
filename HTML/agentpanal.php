<?php
  SESSION_start();

  if (isset($_SESSION['agent_name']) && isset($_SESSION['agent_id'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../css/Admin-Portal.css">
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li class="active">
            <a href="agentpanal.php">
              <span class="ti-user"></span>
              <span><?php echo $_SESSION['agent_name']; ?></span>
            </a>
        </li>
        <li>
          <a href="agent-taskview.php">
            <span class="ti-check-box"></span>
            <span>Tasks</span>
          </a>
        </li>
        <li>
          <a href="agent-taskadd.php">
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
      <div class="content">
        <div class="grid-container">
          <div class="grid-box dash-profile">
            <h2 class="dash-box-header">Profile</h2>
            <img src="../MEDIA/profile.png" alt="profile" width="200px"><br />
            <?php
            $id = $_SESSION['admin_id'];
             $sql = "SELECT * FROM agent WHERE aagent_id = '$id'";
             $query = mysqli_query($conn, $sql);
             while ($res = mysqli_fetch_assoc($query)) {
            ?>
            <b>Username: </b><?php echo $res['admin_username']; ?><br>
            <b>Name: </b><?php echo $res['f_name']; ?><br>
            <b>Email ID: </b><?php echo $res['Email']; ?><br>
            <b>Contact No: </b><?php echo $res['contact_num']; ?><br>
            <?php
             }
           ?>
           <button class="button button1" onclick="openform()"> Change Information </button>
            <button class="button button2" onclick="changeform()"> Change Password </button>
          </div>

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
