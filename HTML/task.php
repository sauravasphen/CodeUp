<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../JS/task.js" charset="utf-8"></script>
<link rel="stylesheet" href="../CSS/task.css">
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
                    <!-- <span><?php echo $_SESSION['admin_name']; ?></span> -->

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


    <div class="task">
        <h1>Create Task</h1>
        <button type="button" onclick="togglePopup()" class="create-btn" name="create">Create</button>
        <button type="button" class="edit-btn" name="Edit">Edit</button>

             <form class="task-form" id="popup-2"  action="index.html" method="post">
                 <fieldset class="form-content">
                     <legend>Task</legend><br>
                               <div class="task-label-div">
                                   <label for="subject">Subject:</label>
                               </div>
                               <div class="task-input-div">
                                   <textarea class="task-input-field" name="name"></textarea>
                               </div>
                               <div class="task-label-div">
                                   <label for="subject">Description:</label>
                               </div>
                               <div class="task-input-div">
                                   <textarea class="task-input-field" name="name"></textarea>
                               </div>
                               <input type="submit" class="task-btn" name="submit" value="Submit">
                               <button type="button" class="close-btn" onclick="togglePopup()" name="close">Close</button>
                 </fieldset>
             </form>
    </div>

</body>
</html>
