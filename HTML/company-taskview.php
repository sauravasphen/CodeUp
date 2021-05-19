<?php
  session_start();
$company_id=$_SESSION['company_id'];
  if (isset($_SESSION['company_name']) && isset($_SESSION['contact_num'])){

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
                <li><a href="companypanal.php">
                      <span class="ti-user"></span>
                      <span><?php echo $_SESSION['company_name']; ?></span>
                    </a>
                </li>
                <li>
                  <a href="company-taskview.php">
                    <span class="ti-clipboard"></span>
                    <span>Task List</span>
                </a>
              </li>
              <li>
                <a href="company-taskadd.php">
                  <span class="ti-pin-alt"></span>
                  <span>Add Task</span>
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
                        // echo "connection successfuly";

                        // $sql="SELECT * FROM Task";
                        //       $result=mysqli_query($conn,$sql);
                        //       $row=mysqli_fetch_assoc($result);
                        //       if($row['company_id']===$company_id){
                        //         $cmp_id=$row['company_id'];
                        //
                        //       }
                        //       else{
                        //         echo "error:".$sql."<br>".mysqli_error($conn);
                        //       }
                        // if($company_id===$cmp_id){
                        $selectquery="SELECT *FROM Task where company_id='$company_id'";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_array($query)){
                          ?>
                          <tr>
                            <td><?php echo $res['task_id']; ?></td>
                            <td><?php echo $res['subject']; ?></td>
                            <td><?php echo $res['task']; ?></td>
                            <td><?php echo $res['report']; ?></td>
                            <td><?php echo $res['status']; ?></td>
                            <td><?php echo $res['issued_date']; ?></td>
                            <td><?php echo $res['closed_date']; ?></td>
                          </tr>
                        <?php
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

}
else{
  header("location:mainpage.php");
  exit();
}
?>
