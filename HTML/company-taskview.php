<?php
  session_start();
$company_id=$_SESSION['company_id'];
  if (isset($_SESSION['company_name']) && isset($_SESSION['company_id'])){
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/admin-portal.css">
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
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
        <li class="active">
          <a href="company-taskview.php">
            <span class="ti-check-box"></span>
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
            <span class="ti-back-left"></span>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- ***************** Body ********************** -->
      <div class="content">
            <div class="activity-card">
              <center><h3>Tasks</h3></center>
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
                        $selectquery="SELECT *FROM Task where company_id='$company_id'";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_array($query)){
                          ?>
                          <tr>
                            <td><?php echo $res['task_id']; ?></td>
                            <td><?php echo $res['subject']; ?></td>
                            <td><?php echo $res['task']; ?></td>
                            <td><?php echo $res['report']; ?></td>
                            <td><?php if ($res['status'] == 0) {echo "Pending";}
                            else { echo "Finished"; }?></td>
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
  </body>
</html>

<?php

}
else{
  header("location:mainpage.php");
  exit();
}
?>
