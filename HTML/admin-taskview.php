<?php
  session_start();

    if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id'])){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/Portal-Navigation.css">
    <link rel="stylesheet" href="../CSS/admin.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li class="active">
          <a href="Admin-Dashboard.php">
            <span class="ti-panel"></span>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Admin-NewQueries.php">
            <span class="ti-email"></span>
            <span>New Queries</span>
          </a>
        </li>
        <li>
          <a href="admin-agentview.php">
            <span class="ti-user"></span>
            <span>Agents</span>
          </a>
        </li>
        <li>
          <a href="admin-companyview.php">
            <span class="ti-briefcase"></span>
            <span>Companies</span>
          </a>
        </li>
        <li>
          <a href="admin-taskview.php">
            <span class="ti-check-box"></span>
            <span>Tasks</span>
          </a>
        </li>
        <li>
          <a href="Admin-AddUser.php">
            <span class="ti-plus"></span>
            <span>Add User</span>
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
