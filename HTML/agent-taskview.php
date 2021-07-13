<?php
  SESSION_start();
  if (isset($_SESSION['agent_name']) && isset($_SESSION['agent_id'])){
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
                    <th>Company Name</th>
                    <th>Subject</th>
                    <th>Task</th>
                    <th>Report</th>
                    <th>Status</th>
                    <th>Issued Date</th>
                    <th>Closed Date</th>
                    <th>UPDATE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                        $selectquery="SELECT *FROM Task Inner Join company ON task.company_id=company.company_id ORDER BY issued_date DESC";
                        $query=mysqli_query($conn,$selectquery);
                        while($res=mysqli_fetch_array($query)){
                          ?>
                          <tr>
                            <td><?php echo $res['task_id']; ?></td>
                            <td><?php echo $res['company_name']; ?></td>
                            <td><?php echo $res['subject']; ?></td>
                            <td><?php echo $res['task']; ?></td>
                            <td><?php echo $res['report']; ?></td>
                            <td>s<?php if ($res['status'] == 0) {echo "Pending";}
                            else { echo "Finished"; }?></td>
                            <td><?php echo $res['issued_date']; ?></td>
                            <td><?php echo $res['closed_date']; ?></td>
                            <td><a href="#" class="delete delete-btn" data-id="<?php echo $res['task_id']; ?>">UPDATE</a>
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
          <form action="agent_edit_task.php" method="POST">
              <input type="hidden" id="Deliting_id" name="Deliting_id">
              <div class="element">
                <label for="report">Report</label>
                <input type="text"  placeholder="Report" name="report" id="report" required="required">
              </div>
              <div class="element">
                <div class="account-type">
                  <input id="1" type='radio' name="status" class="status-radiobutton" value="0" checked>
                  <label for="1" class='status-label'>Pending</label>
                  <input id="2" type='radio' name="status" class="status-radiobutton" value="1">
                  <label for="2" class='status-label'>Completed</label>
                </div>
              </div>
              <input type="submit" class="modal-delete-btn" name="submit" value="Update">
              <!-- <button class="modal-delete-btn" name="submit">Submit</button> -->
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
