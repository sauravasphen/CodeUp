<?php
  SESSION_start();
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
           <a href="Admin-AgentList.php">
             <span class="ti-user"></span>
             <span>Agents</span>
           </a>
         </li>
         <li>
           <a href="Admin-CompanyList.php">
             <span class="ti-briefcase"></span>
             <span>Companies</span>
           </a>
         </li>
         <li>
           <a href="Admin-TaskList.php">
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
       <div class="box">
         <div class="profile" id="flex-item">
           <h2>Profile</h2>
           <?php
           $id = $_SESSION['admin_id'];
            $sql = "SELECT * FROM admin WHERE admin_id = '$id'";
            $query = mysqli_query($conn, $sql);
            while ($res = mysqli_fetch_assoc($query)) {
           ?>
           <b>Username: </b><?php echo $res['admin_username']; ?><br>
           <b>Name: </b><?php echo $res['f_name']; ?><br>
           <b>Email ID: </b><?php echo $res['Email']; ?><br>
           <b>Contact No: </b><?php echo $res['contact_num']; ?>
           <?php
            }
          ?>
         </div>
         <div class="data1" id="flex-item">
           <h3>Number of Agents<br />
           <?php
           $sql="SELECT *FROM Agent";
           $query=mysqli_query($conn,$sql);
           $count=mysqli_num_rows($query);
            ?>
            <?php echo "$count"; ?></h3>
            <hr width='70%'>
            <h3>Number of Companies<br />
            <?php
            $sql="SELECT *FROM company";
            $query=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($query);
             ?>
             <?php echo "$count"; ?></h3>
             <hr width='70%'>
             <h3>New Queries<br />
             <?php
             $sql="SELECT *FROM contactus";
             $query=mysqli_query($conn,$sql);
             $count=mysqli_num_rows($query);
              ?>
              <?php echo "$count"; ?></h3>
         </div>
       </div>
     </div>
   </body>
 </html>
 <?php
  }
  else{
   header("location:mainpage.php");
   exit();
 }
 ?>
