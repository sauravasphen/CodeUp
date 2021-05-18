<?php
  SESSION_start();

  if (isset($_SESSION['agent_name']) && isset($_SESSION['contact_num'])){

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
                  <a href="agentpanal.php">
                    <span class="ti-user"></span>
                    <span><?php echo $_SESSION['agent_name']; ?></span>
                  </a>
                </li>
                <li>
                  <a href="agent-taskview.php">
                    <span class="ti-clipboard"></span>
                    <span>Task List</span>
                </a>
              </li>
              <li>
                <a href="agent-taskadd.php">
                  <span class="ti-pin-alt"></span>
                  <span>Add Task</span>
              </a>
            </li>
            <li>
              <a href="">
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
        <section class="recent">
          <div class="activity-grid">
            <div class="activity-card">
              <h3>Tasks</h3>
              <table>
                <thead>
                  <tr>
                    <th>Task ID</th>
                    <th>Company ID</th>
                    <th>Subject</th>
                    <th>Task</th>
                    <th>Report</th>
                    <th>Status</th>
                    <th>Issued Date</th>
                    <th>Closed Date</th>
                    <th colspan="2">Operation</th>
                  </tr>
                </thead>
                <tbody>
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
                        while($res=mysqli_fetch_array($query)){
                          echo "
                          <tr>
                            <td> ".$res['task_id'] ."</td>
                            <td>".$res['company_id']."</td>
                            <td>".$res['subject']."</td>
                            <td>".$res['task']."</td>
                            <td>".$res['report']."</td>
                            <td>".$res['status']."</td>
                            <td>". $res['issued_date']."</td>
                            <td>".$res['closed_date']."</td>
                            <td> <a href='agent-editprofile.php? task_id=$res[task_id] & company_id= $res[company_id] & subject=$res[subject] & task=$res[task] & report= $res[report] &  status=$res[status]'>EDIT/UPDATE</td>
                          </tr>
                          ";
                        }

                   ?>
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
