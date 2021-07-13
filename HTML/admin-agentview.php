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
    <link rel="stylesheet" href="../CSS/admin.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
       <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
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
        <li class="active">
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
              <center><h3>Agents</h3></center>
              <table>
                <thead>
                  <tr>
                    <th>Agent ID</th>
                    <th>Username</th>
                    <th>Agent Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>EDIT</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        $selectquery="SELECT *FROM Agent";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_array($query)){
                          ?>
                          <tr>
                            <td><?php echo $res['agent_id']; ?></td>
                            <td><?php echo $res['agent_username']; ?></td>
                            <td><?php echo $res['f_name']; ?></td>
                            <td><?php echo $res['Email']; ?></td>
                            <td><?php echo $res['contact_num']; ?></td>
                            <td><a href="#" class="delete delete-btn" data-id="<?php echo $res['agent_id']; ?>"><button>Edit</button></a>
                            </span><td>
                          </tr>
                        <?php
                        }
                   ?>
                </tbody>
              </table>
            </div>
      </div>
    </div>
    <!-- modal starts here -->
      <div id="delete_model" class="modal">
          <i class="fas fa-times modal-close"></i>

          <div class="modal-cont">
          </div>

          <form action="delete_user.php" method="POST">
              <input type="hidden" id="Deliting_id" name="Deliting_id">
              <div class="element">
                <label for="Fullname"><b>Full Name</b></label>
                <input type="text"  placeholder="Fullname" name="fname" id="fname" required="required">
              </div>
              <div class="element">
                <label for="Email"><b>Email</b></label>
                <input type="email"  placeholder="Email" name="email" id="email"  required="required">
              </div>
              <div class="element">
                <label for="contact_num"><b>Contact Number</b></label>
                <input type="text"  placeholder="contact_num" name="contact_num" id="contact_num"   required="required">
              </div>
              <button class="modal-delete-btn" name="submit">Submit</button>
          </form>
      </div>

         <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

      <script>
          $(document).ready(function(){
            $("#delete_model").hide();
            $(".delete-btn").click(function(){
              $("#delete_model").toggle();
            });
            $(".modal-close").click(function(){
              $("#delete_model").hide();
            });
            $(document).on("click",".delete-btn", function(){
                      var Id = $(this).data("id");
                      $("#Deliting_id").val(Id);
                  });
          });
      </script>
  </body>
</html>
<?php
}else{
  header("location:mainpage.php");
  exit();
}
?>
