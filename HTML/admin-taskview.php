<?php
  session_start();
    if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id'])){
      include('connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/Portal-Navigation.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li>
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
          <a href="Admin-AgentView.php">
            <span class="ti-user"></span>
            <span>Agents</span>
          </a>
        </li>
        <li>
          <a href="Admin-CompanyView.php">
            <span class="ti-briefcase"></span>
            <span>Companies</span>
          </a>
        </li>
        <li class="active">
          <a href="Admin-TaskView.php">
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
      <div class="content">
            <div class="activity-card">
              <center><h3>Tasks</h3></center>
              <table>
                <thead>
                  <tr>
                    <th>Task ID</th>
                    <th>Company</th>
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
                        $selectquery="SELECT *FROM Task NATURAL JOIN company";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_array($query)){?>
                          <tr>
                            <td> <?php echo $res['task_id']?></td>
                            <td><?php echo $res['company_name']?></td>
                            <td><?php echo $res['subject']?></td>
                            <td><?php echo $res['task']?></td>
                            <td><?php echo $res['report']?></td>
                            <td><?php if ($res['status'] == 0) {echo "Pending";}
                            else { echo "Finished"; }?></td>
                            <td><?php echo  $res['issued_date']?></td>
                            <td><?php echo $res['closed_date']?></td>
                          </tr>
                        <?php } ?>
                </tbody>
              </table>
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
