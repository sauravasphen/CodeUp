<?php
  SESSION_start();
  $id = $_SESSION['company_id'];
  if (isset($_SESSION['company_name']) && isset($_SESSION['company_id'])){
      include('connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/admin.css">
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
      <li class="active">
        <a href="companypanal.php">
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
        <li>
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
      <div class="grid-container">
        <div class="grid-box dash-profile">
          <h2 class="dash-box-header">Profile</h2>
          <img src="../MEDIA/profile.png" alt="profile" width="200px"><br />
          <?php

           $sql = "SELECT * FROM company WHERE company_id = '$id'";
           $query = mysqli_query($conn, $sql);
           while ($res = mysqli_fetch_assoc($query)) {
          ?>
          <b>Username: </b><?php echo $res['company_username']; ?><br>
          <b>Name: </b><?php echo $res['company_name']; ?><br>
          <b>Email ID: </b><?php echo $res['Email']; ?><br>
          <b>Contact No: </b><?php echo $res['contact_num']; ?><br>
          <?php
           }
         ?>
         <button class="button button1" onclick="openform()"> Change Information </button>
        </div>
        <div class="grid-box dash-companies">
           <h2 class="dash-box-header"><span class="ti-briefcase"></span>Company ID</h2>
           <div class="dash-count"><?php
           $sql="SELECT *FROM company WHERE company_id='$id'";
           $query = mysqli_query($conn, $sql);
           while ($res = mysqli_fetch_assoc($query)) {
             echo $res['company_id'];
           }
          ?></div>
          </div>
          <div class="grid-box dash-pending-task">
            <h2 class="dash-box-header"><span class="ti-check-box"></span>Pending Tasks</h2>
            <div class="dash-count"><?php
            $sql="SELECT *FROM task where status='0' AND company_id='$id' ";
            $query=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($query);
            echo "$count"; ?></div>
          </div>
          <!-- ..........Task List........... -->
            <div class="grid-box dash-task-list">
              <h2 class="dash-box-header"><span class="ti-check-box"></span>Tasks</h2>
            <?php
            $sql="SELECT *FROM task NATURAL JOIN company WHERE company_id='$id'ORDER BY task_id DESC LIMIT 3 ";
            $query=mysqli_query($conn,$sql);
            while($res=mysqli_fetch_array($query)){
              ?>
              <div class="dash-task">
                <div class="dash-task-info">
              <b><?php echo $res['subject']; ?></b><br>
              &nbsp; &nbsp;For <?php echo $res['company_name']; ?>
            </div>
              <div class="dash-task-date">
                <?php echo $res['issued_date']; ?>
              </div>
            </div>
            <?php } ?>
            <div class="viewtask-button">
            <a href="company-taskview.php">View Task</a>
          </div>
          </div>
        </div>
      </div>
      <!-- change information -->
      <div class="popup-overlay"></div>
     <div class="popup">
        <div class="popup-close" onclick="closeForm()">×</div>
       <div class="form">
         <?php

             $sql="SELECT * FROM company WHERE company_id = '$id'";
             $query = mysqli_query($conn,$sql);
             if (mysqli_num_rows($query) === 1) {
             $row =  mysqli_fetch_assoc($query);
             if($row['company_id'] === $id){
           ?>
           <form action="company_changeinfo_handle.php" method="POST">

          <div class="header">
                Change information
          </div>
          <hr><br>
         <div class="element">
           <label for="cname"><b>Company Name</b></label>
           <input type="text"  placeholder="comapny name" name="cname" id="cname" value="<?php echo $row["company_name"];   ?>"  required="required">
       </div>
   <div class="element">
     <label for="email"><b>Email</b></label>
       <input type="email"  placeholder="Email" name="email" id="email" value="<?php echo $row['Email']; ?>" required="required">
   </div>
   <div class="element">
     <label for="phone"><b>Phone number</b></label>
       <input type="text"  placeholder="Phone number" name="Phone_number" id="phone" value="<?php echo $row['contact_num']; ?>"  required="required">
   </div>
   <div class="element">
     <center><button type="submit" class="button2" name="save">Save changes</button></center>
   </div>
  </form>
   <?php
       }
     }
   ?>
   </div>
   </div>
   <script>
   function openform(){
   document.body.classList.add("showLoginForm");
   }
   function changeform(){
   document.body.classList.add("showchangeForm");
   }
   function closeForm(){
   document.body.classList.remove("showLoginForm");
   }
   function closeForm1(){
   document.body.classList.remove("showchangeForm");
   }
   </script>
  </body>
</html>

<?php
}else{
  header("location:mainpage.php");
  exit();
}
?>
