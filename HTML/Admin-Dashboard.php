<?php
  session_start();
  $id=$_SESSION['admin_id'];
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
         <li class="active">
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

     <!-- ***************** Body ********************** -->
     <div class="content">
       <div class="grid-container">
         <div class="grid-box dash-profile">
           <h2 class="dash-box-header">Profile</h2>
           <img src="../MEDIA/profile.png" alt="profile" width="200px"><br />
           <?php
           $id = $_SESSION['admin_id'];
            $sql = "SELECT * FROM admin WHERE admin_id = '$id'";
            $query = mysqli_query($conn, $sql);
            while ($res = mysqli_fetch_assoc($query)) {
           ?>
           <b>Username: </b><?php echo $res['admin_username']; ?><br>
           <b>Name: </b><?php echo $res['f_name']; ?><br>
           <b>Email ID: </b><?php echo $res['Email']; ?><br>
           <b>Contact No: </b><?php echo $res['contact_num']; ?><br>
           <?php
            }
          ?>
          <button class="button button1" onclick="openform()"> Change Information </button>
           <button class="button button2" onclick="changeform()"> Change Password </button>
         </div>
         <div class="grid-box dash-agents">
           <h2 class="dash-box-header"><span class="ti-user"></span>Agents</h2>
           <div class="dash-count"><?php
           $sql="SELECT *FROM Agent";
           $query=mysqli_query($conn,$sql);
           $count=mysqli_num_rows($query);
           echo "$count"; ?></div>
         </div>
         <div class="grid-box dash-companies">
            <h2 class="dash-box-header"><span class="ti-briefcase"></span>Companies</h2>
            <div class="dash-count"><?php
            $sql="SELECT *FROM company";
            $query=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($query);
            echo "$count"; ?></div>
           </div>
           <a href="Admin-NewQueries.php">
           <div class="grid-box dash-queries">
             <h2 class="dash-box-header"><span class="ti-email"></span>New Queries</h2>
             <div class="dash-count"><?php
             $sql="SELECT *FROM contactus";
             $query=mysqli_query($conn,$sql);
             $count=mysqli_num_rows($query);
             echo "$count"; ?></div>
           </div></a>
           <div class="grid-box dash-pending-task">
             <h2 class="dash-box-header"><span class="ti-check-box"></span>Pending Tasks</h2>
             <div class="dash-count"><?php
             $sql="SELECT *FROM task where status='0'";
             $query=mysqli_query($conn,$sql);
             $count=mysqli_num_rows($query);
             echo "$count"; ?></div>
           </div>
           <!-- .......................Query List............... -->
           <div class="grid-box dash-query-list">
             <h2 class="dash-box-header"><span class="ti-check-box"></span>Queries</h2>
             <?php
             $sql="SELECT *FROM contactus LIMIT 3";
             $query=mysqli_query($conn,$sql);
             while($res=mysqli_fetch_array($query)){
               ?>
               <div class="dash-query">
                 <div class="dash-query-info">
               <b><?php echo $res['subject']; ?></b><br>
               &nbsp; &nbsp;From <?php echo $res['company_name']; ?>
             </div>
               <div class="dash-query-date">
                 <?php echo $res['mgs_date']; ?>
               </div>
             </div>
             <?php } ?>
             <div class="viewtask-button">
             <a href="Admin-NewQueries.php">View Queries</a>
           </div>
           </div>
           <!-- ..........Task List........... -->
             <div class="grid-box dash-task-list">
               <h2 class="dash-box-header"><span class="ti-check-box"></span>Tasks</h2>
             <?php
             $sql="SELECT *FROM task NATURAL JOIN company ORDER BY task_id DESC LIMIT 3";
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
             <a href="Admin-TaskView.php">View Task</a>
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

              $sql="SELECT * FROM admin WHERE admin_id = '$id'";
              $query = mysqli_query($conn,$sql);
              if (mysqli_num_rows($query) === 1) {
              $row =  mysqli_fetch_assoc($query);
              if($row['admin_id'] === $id){
            ?>
            <form action="admin_handle.php" method="POST">

           <div class="header">
                 Change information
           </div>
           <hr><br>
          <div class="element">
            <label for="fname"><b>Full Name</b></label>
            <input type="text"  placeholder="Fullname" name="fname" id="fname" value="<?php echo $row["f_name"];   ?>"  required="required">
        </div>
    <div class="element">
      <label for="email"><b>Email</b></label>
        <input type="email"  placeholder="Email" name="email" id="email" value="<?php echo $row['Email']; ?>" required="required">
    </div>
    <div class="element">
      <label for="phone"><b>Phone number</b></label>
        <input type="text"  placeholder="Phone number" name="Phone_number" id="phone" value="<?php echo $row['contact_num']; ?>"  required="required">
    </div>
    <?php
              if(isset($_GET['error'])){ $error = $_GET['error'];
              ?>

             <p class="error"><?php echo $error ; ?></p>
            <?php } ?>
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
    <!-- change password -->
    <div class="popup-overlay"></div>
      <div class="popup2">
         <div class="popup2-close" onclick="closeForm1()">×</div>
        <div class="form">

          <form action="admin_handle.php " method="POST">
           <div class="header">
                 Change Password
           </div>
           <hr><br>

          <div class="element">
             <label for="cpw"><b>Current Password</b></label>
              <input type="password"  placeholder="current_password" name="cpw" id="cpw" required="required">
          </div>

          <div class="element">
            <label for="npw"><b>New Password</b></label>
              <input type="password"  placeholder="new_password" name="npw" id="npw" required="required">
          </div>

          <div class="element">
            <label for="cpwd"><b>Confirm Password</b></label>
              <input type="password"  placeholder="confirm_password" name="cpwd" id="cpwd" required="required">
          </div>
          <?php
                    if(isset($_GET['error'])){ $error = $_GET['error'];
                    ?>

                   <p class="error"><?php echo $error ; ?></p>
                  <?php } ?>

          <div class="element">
            <button type="submit" class="button3" name="savechange">Save changes</button>
          </div>
      </form>

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
}
  else{
   header("location:mainpage.php");
   exit();
 }
 ?>
