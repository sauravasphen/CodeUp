<?php
  SESSION_start();

  if (isset($_SESSION['company_name']) && isset($_SESSION['company_id'])){

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../JS/task.js" charset="utf-8"></script>
    <link rel="stylesheet" href="../CSS/task.css">
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
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
        <li>
          <a href="company-taskview.php">
            <span class="ti-check-box"></span>
            <span>Task List</span>
          </a>
        </li>
        <li class="active">
          <a href="company-taskadd.php"
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
    <div class="task">
        <h1>Create Task</h1>
        <button type="button" onclick="togglePopup()" class="create-btn" name="create">Create</button>
        <button type="button" class="edit-btn" name="Edit">Edit</button>

             <form class="task-form" id="popup-2"  action="companytaskhandel.php" method="post">
                 <fieldset class="form-content">
                     <legend>Task</legend><br>
                               <div class="task-label-div">
                                   <label for="subject">Subject:</label>
                               </div>
                               <div class="task-input-div">
                                   <textarea class="task-input-field" name="subject"></textarea>
                               </div>
                               <div class="task-label-div">
                                   <label for="Task">Task:</label>
                               </div>
                               <div class="task-input-div">
                                   <textarea class="task-input-field" name="task"></textarea>
                               </div>
                               <input type="submit" class="task-btn" name="submit" value="Submit">
                               <button type="button" class="close-btn" onclick="togglePopup()" name="close">Close</button>
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
