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
    <link rel="stylesheet" href="../css/Admin-Portal.css">
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li class="active">
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
      <div class="content">
        <div class="grid-container">
          <div class="grid-box dash-profile">
            <h2 class="dash-box-header">Profile</h2>
            <img src="../MEDIA/profile.png" alt="profile" width="200px"><br />
            <?php
            $id = $_SESSION['agent_id'];
             $sql = "SELECT * FROM agent WHERE aagent_id = '$id'";
             $query = mysqli_query($conn, $sql);
             while ($res = mysqli_fetch_assoc($query)) {
            ?>
            <b>Username: </b><?php echo $res['agent_username']; ?><br>
            <b>Name: </b><?php echo $res['f_name']; ?><br>
            <b>Email ID: </b><?php echo $res['Email']; ?><br>
            <b>Contact No: </b><?php echo $res['contact_num']; ?><br>
            <?php
             }
           ?>
           <button class="button button1" onclick="openform()"> Change Information </button>
            <button class="button button2" onclick="changeform()"> Change Password </button>
          </div>

        <div class="dash-cards">
          <div class="card-single">
            <div class="card-body">
              <span class="ti-briefcase"></span>
              <div class="">
                <h5>Account balance</h5>
                <h4>$30,659.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>
          <div class="card-single">
            <div class="card-body">
              <span class="ti-reload"></span>
              <div class="">
                <h5>Pending</h5>
                <h4>$19,500.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
          </div>
          <div class="card-single">
            <div class="card-body">
              <span class="ti-checkbox"></span>
              <div class="">
                <h5>Processed</h5>
                <h4>$19,500.45</h4>
              </div>
            </div>
            <div class="card-footer">
              <a href="">View All</a>
            </div>
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

           $sql="SELECT * FROM agent WHERE agent_id = '$id'";
           $query = mysqli_query($conn,$sql);
           if (mysqli_num_rows($query) === 1) {
           $row =  mysqli_fetch_assoc($query);
           if($row['agent_id'] === $id){
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
}else{
  header("location:mainpage.php");
  exit();
}
?>
