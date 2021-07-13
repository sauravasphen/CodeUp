<?php
  session_start();
  include("connection.php");
    if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id'])){
      $_SESSION['edit_id']=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="../css/Portal-Navigation.css">
    <link rel="stylesheet" href="../CSS/admin.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li>
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
        <li class="active">
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
         <div class="grid-box add-user">
           <div class="adduser-title">
             Edit User
           </div>
           <?php
            $id = $_GET['id'];
            $un = $_GET['un'];
            $fn = $_GET['fn'];
            $em = $_GET['em'];
            $cn = $_GET['cn'];
            ?>
           <form action="EditAgenthandle.php" method="get">
             <!-- <div class="account-type">
               <input id="1" type='radio' name="acc-type" class="acc-radiobutton" value="company" checked>
               <label for="1" class='acc-label'>Company</label>
               <input id="2" type='radio' name="acc-type" class="acc-radiobutton" value="agent">
               <label for="2" class='acc-label'>Agent</label>
               <input id="3" type='radio' name="acc-type" class="acc-radiobutton" value="admin">
               <label for="3" class='acc-label'>Admin</label>
             </div> -->
             <div class="adduser-details">
               <div class="input-container">
                 <label>ID: <?php echo $id ?></label>
               </div>
              <div class="input-container">
                <label for="">Username</label><br />
                <input type="text" name="username" value="<?php echo $un; ?>"></input>
              </div>
             <div class="input-container">
               <label for="">Name</label><br />
               <input type="text" name="name" value="<?php echo "$fn"; ?>"></input>
             </div>
             <div class="input-container">
               <label for="">Email ID</label><br />
               <input type="email" name="email" value="<?php echo "$em"; ?>"></input>
             </div>
             <div class="input-container">
               <label for="">Contact Number</label><br />
               <input type="text" name="contact_num" value="<?php echo "$cn"; ?>"></input>
             </div>
           </div>
             <input type="submit" class="adduser-btn" value="Edit"></input>
           </form>
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
