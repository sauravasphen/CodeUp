<?php
  SESSION_start();
  $task_id=$_GET['task_id'];
  $company_id=$_GET['company_id'];
  $subject=$_GET['subject'];
  $task=$_GET['task'];
  $report= $_GET['report'];
  $status=$_GET['status'];

  if (isset($_SESSION['agent_name']) && isset($_SESSION['agent_id'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/agent-taskadd.css">
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <!-- <script src="aa.js" charset="utf-8"></script> -->
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li>
            <a href="agentpanal.php">
              <span class="ti-user"></span>
              <span><?php echo $_SESSION['agent_name']; ?></span>
            </a>
        </li>
        <li>
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


        <!--Agent Task form -->

          <div class="agent-div">
            <div class="agent-form-div">
                  <form class="agent-form" action="agent-taskaddhandel.php" method="post">
                        <fieldset>
                              <legend>Update Form</legend>
                              <div class="agent-label-div">
                                  <label for="Cname">Task id:</label>
                              </div>
                              <div class="agent-input-div">
                                  <input type="text" name="task_id" value="<?php echo"$task_id" ?>" >
                              </div>

                              <div class="agent-label-div">
                                  <label for="subject">Subject:</label>
                              </div>
                              <div class="agent-input-div">
                                  <input type="text" name="subject" value="<?php echo"$subject" ?>">
                              </div>
                              <div class="agent-label-div">
                                  <label for="task">Task:</label>
                              </div>
                              <div class="agent-input-div">
                                  <input type="text" name="task" value="<?php echo"$task" ?>">
                              </div>
                              <div class="agent-label-div">
                                  <label for="report">Report:</label>
                              </div>
                              <div class="agent-input-div">
                                  <input type="text" name="report" value="<?php echo"$report" ?>">
                              </div>
                              <div class="agent-label-div">
                                  <label for="status">Status:</label>
                              </div>
                              <div class="agent-input-div">
                                  <input type="text" name="status" value="<?php echo"$status" ?>">
                              </div>
                              <input type="submit" class="add-btn" name="edit-btn" value="Update Task">
                        </fieldset>
                  </form>
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
