<?php
  SESSION_start();

  if (isset($_SESSION['admin_name']) && isset($_SESSION['contact_num'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/admin.css">
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
          <span class="ti-bell"></span>
          <span class="ti-comment"></span>
          <div class="">

          </div>
        </div>
      </header>
      <main>
        <h2 class="dash-title">Overview</h2>

        <div class="dash-cards">
          <div class="card-single">
            <div class="card-body">
              <span class="ti-briefcase"></span>
              <div class="">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "CodeUp_db";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                      }
                      

                      $selectquery="SELECT *FROM Agent";
                      $query=mysqli_query($conn,$selectquery);
                      $agent_count=mysqli_num_rows($query);
                      ?>
                <h5>Number of Agents</h5>
                <h4><?php echo "$agent_count"; ?></h4>
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
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "CodeUp_db";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                      }
                      echo "connection successfuly";

                      $selectquery="SELECT *FROM Company";
                      $query=mysqli_query($conn,$selectquery);
                      $client_count=mysqli_num_rows($query);
                      ?>
                <h5>Number of Clients</h5>
                <h4><?php echo"$client_count";?></h4>
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
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "CodeUp_db";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                      }
                      echo "connection successfuly";

                      $selectquery="SELECT *FROM Task";
                      $query=mysqli_query($conn,$selectquery);
                      $task_count=mysqli_num_rows($query);
                      ?>
                <h5>Processed</h5>
                <h4><?php echo"$task_count";?></h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>

        </div>
        <section class="recent">
          <div class="activity-grid">
            <div class="activity-card">
              <h3>Recent Activities</h3>
              <table>
                <thead>
                  <tr>
                    <th>Projects</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Team</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>
              </table>
            </div>

          </div>

        </section>
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
