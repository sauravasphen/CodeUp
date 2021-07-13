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
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li>
            <a href="Agent-Dashboard.php">
              <span class="ti-user"></span>
              <span><?php echo $_SESSION['agent_name']; ?></span>
            </a>
        </li>
      <li class="active">
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
            <div class="activity-card">
              <center><h3>Tasks</h3></center>
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
                    <th>EDIT</th>
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
                          ?>
                          <tr>
                            <td><?php echo $res['task_id']; ?></td>
                            <td><?php echo $res['company_id']; ?></td>
                            <td><?php echo $res['subject']; ?></td>
                            <td><?php echo $res['task']; ?></td>
                            <td><?php echo $res['report']; ?></td>
                            <td><?php if ($res['status'] == 0) {echo "Pending";}
                            else { echo "Finished"; }?></td>
                            <td><?php echo $res['issued_date']; ?></td>
                            <td><?php echo $res['closed_date']; ?></td>
                            <td><a href="#" class="delete delete-btn" data-id="<?php echo $res['task_id']; ?>"><button class="edit">Edit</button></a>
                            </span><td>
                          </tr>
                        <?php
                        }
                   ?>

                </tbody>
              </table>
            </div>

    </div>
    <!-- modal starts here -->
      <div id="delete_model" class="modal">
          <i class="fas fa-times modal-close"></i>

          <div class="modal-cont">
          </div>

          <form action="agent_edit_task.php" method="POST">
              <input type="hidden" id="Deliting_id" name="Deliting_id">
              <div class="element">
                <label for="report">Report<b></b></label>
                <input type="text"  placeholder="Report" name="report" id="report" required="required">
              </div>
              <div class="element">
                <div class="account-type">
                  <input id="1" type='radio' name="status" class="acc-radiobutton" value="0" checked>
                  <label for="1" class='acc-label'>Pending</label>
                  <input id="2" type='radio' name="status" class="acc-radiobutton" value="1">
                  <label for="2" class='acc-label'>Completed</label>
                </div>
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
