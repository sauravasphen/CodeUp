<?php
  SESSION_start();

    if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id'])){

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
                  <a href="admin-agentview.php" >
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
            <a href="admin-viewcontact.php">
              <span class="ti-settings"></span>
              <span>New Queries</span>
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
          <!-- <span class="ti-search"></span>
          <input type="search" placeholder="Search"> -->
        </div>
        <div class="social-icons">
          <!-- <span class="ti-bell"></span>
          <span class="ti-comment"></span> -->
          <div class="">

          </div>
        </div>
      </header>
      <main>
        <h2 class="dash-title">Overview</h2>
        <section class="recent">
          <div class="activity-grid">
            <div class="activity-card">
              <h3>New Contacts</h3>
              <table>
                <thead>
                  <tr>
                    <th>ContactUs ID</th>
                    <th>Full Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Messaged Date</th>
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


                        $selectquery="SELECT *FROM Contactus";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_array($query)){
                          echo "
                          <tr>
                            <td> ".$res['contactus_id'] ."</td>
                            <td>".$res['F_name']."</td>
                            <td>".$res['company_name']."</td>
                            <td>".$res['Email']."</td>
                            <td>".$res['contact_num']."</td>
                            <td>".$res['subject']."</td>
                            <td>". $res['message']."</td>
                            <td>".$res['mgs_date']."</td>
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
