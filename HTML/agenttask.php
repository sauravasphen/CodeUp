<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/agenttask.css">
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
                      <span class="ti-user"></span>
                      <span><?php echo $_SESSION['admin_name']; ?></span>

                </li>
                <li>
                  <a href="admin-agentsview.php">
                    <span class="ti-ticket"></span>
                    <span>Agent List</span>
                </a>
              </li>
              <li>
                <a href="admin-clientview.php">
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
              <a href="">
                <span class="ti-settings"></span>
                <span>Register</span>
            </a>
          </li>
          <li>
            <a href="">
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
          <span class="ti-search"></span>
          <input type="search" placeholder="Search">
        </div>
        <div class="social-icons">
          <span class="ti-bell"></span>
          <span class="ti-comment"></span>
          <div class="">

          </div>
        </div>
      </header>



        <!--Agent Task form -->

          <div class="agent-div">
                <h1>Create Agent Task</h1>
                <div class="agent-form-div">
                      <form class="agent-form" action="index.html" method="post">
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
                                      <input type="text" name="report" required>
                                  </div>
                                  <div class="agent-label-div">
                                      <label for="status">Status:</label>
                                  </div>
                                  <div class="agent-input-div">
                                      <input type="text" name="status" required>
                                  </div>
                                  <input type="submit" class="agent-create-btn" name="agent-create-btn" value="Submit">
                                  <input type="button" class="add-btn" name="add-btn" value="Add Task">
                                  <input type="submit" class="close-btn" name="close-btn" value="Close Task">
                            </fieldset>
                      </form>
                </div>
          </div>
  </body>
</html>
