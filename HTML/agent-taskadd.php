<?php
  SESSION_start();

  if (isset($_SESSION['agent_name']) && isset($_SESSION['agent_id'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/agent-taskadd.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <!-- <script src="aa.js" charset="utf-8"></script> -->
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
                    <a href="agentpanal.php">
                      <span class="ti-user"></span>
                      <span><?php echo $_SESSION['agent_name']; ?></span>
                    </a>
                </li>
                <li>
                  <a href="agent-taskview.php">
                    <span class="ti-clipboard"></span>
                    <span>Task List</span>
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



        <!--Agent Task form -->

          <div class="agent-div">
                <h1>Create Agent Task</h1>
                <div class="agent-form-div">
                      <form class="agent-form" action="agent-taskaddhandel.php" method="post">
                            <fieldset>
                                  <legend>Agent Form</legend>
                                  <div class="agent-label-div">
                                      <label for="Cname">Company Name:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <input type="text" name="cname" placeholder="Company Name" required>
                                  </div>
                                  <div class="agent-label-div">
                                      <label for="subject">Subject:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <textarea class="agent-input-field" name="subject"></textarea>
                                  </div>
                                  <div class="agent-label-div">
                                      <label for="task">Task:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <textarea class="agent-input-field" name="task"></textarea>
                                  </div>
                                  <div class="agent-label-div">
                                      <label for="report">Report:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <input type="text" name="report">
                                  </div>
                                  <div class="agent-label-div">
                                      <label for="status">Status:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <input type="text" name="status">
                                  </div>
                                  <input type="submit" class="agent-create-btn" name="agent-create-btn" value="Submit">
                            </fieldset>
                      </form>
                </div>
                  <!-- update form -->

                <div class="agent-form-div">
                      <form class="update-form" action="agent-taskaddhandel.php" method="post">
                            <fieldset>
                                  <legend>Update Form</legend>
                                  <div class="agent-label-div">
                                      <label for="Cname">Task Id:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <input type="text" name="task-id" placeholder="Task id" required>
                                  </div>
                                  <div class="agent-label-div">
                                      <label for="report">Report:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <input type="text" name="report" required>
                                  </div>
                                  <div class="agent-label-div">
                                      <label for="status">Status:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <input type="text" name="status" required>
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
