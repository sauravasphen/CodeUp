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
        <li class="active">
          <a href="Admin-CompanyView.php">
            <span class="ti-briefcase"></span>
            <span>Companies</span>
          </a>
        </li>
        <li>
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
              <center><h3>Company</h3></center>
              <table>
                <thead>
                  <tr>
                    <th>Company ID</th>
                    <th>Username</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>EDIT</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        $selectquery="SELECT *FROM Company";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_assoc($query)){
                          $id = $res['company_id'];
                          $un = $res['company_username'];
                          $fn = $res['company_name'];
                          $em = $res['Email'];
                          $cn = $res['contact_num'];
                          ?>
                          <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $un; ?></td>
                            <td><?php echo $fn; ?></td>
                            <td><?php echo $em; ?></td>
                            <td><?php echo $cn; ?></td>
                            <?php echo "<td><a href='Admin-EditCompany.php?id=".$id."&un=".$res["company_username"]."&fn=".$fn."&em=".$em."&cn=".$cn."'><button class='adduser-btn'style='background-colorgreen'>Edit</button></a>"; ?>
                              <!-- &nbsp/ <?php echo "<a href='DeleteCompanyHandle.php?id=".$id."'><button class='adduser-btn' style='background-color:red'>Delete</button></a> <td>"; ?> -->
                          </tr>
                        <?php
                        }
                   ?>
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
