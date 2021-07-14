<?php
  SESSION_start();

  if (isset($_SESSION['agent_name']) && isset($_SESSION['agent_id'])){
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../CSS/agent-taskadd.css">
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <!-- <script src="aa.js" charset="utf-8"></script> -->
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
        <li >
            <a href="Agent-Dashboard.php">
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
        <li class="active">
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
        <div class="content">
          <div class="grid-container">
            <div class="grid-box add-user">
              <div class="adduser-title">
                Add Task
              </div>
              <form action="agent-taskaddhandel.php" method="post">
                <div class="adduser-details">
                 <div class="input-container">
                   <label for="">Company Name</label><br />
                   <select name="username">
                     <?php
                     $id = $_SESSION['agent_id'];
                     $selectquery="SELECT * FROM Company LEFT Join agent ON company.agent_id=agent.agent_id WHERE agent.agent_id='$id'";
                     $query=mysqli_query($conn,$selectquery);
                     while($res=mysqli_fetch_array($query)){
                       ?>
                     <option value="<?php echo $res['company_id'] ?>"><?php echo $res['company_username'] ?></option>
                   <?php } ?>
                   </select>
                   <!-- <input type="text" name="cname" placeholder="Company Name" required></input> -->
                 </div>
                <div class="input-container">
                  <label for="">Subject</label><br />
                  <select name="subject">
                    <option value="Modify Website">Modify Website</option>
                    <option value="Advertising/Boosting">Advertising/Boosting</option>
                    <option value="Product Shoot">Product Shoot</option>
                    <option value="Graphic Design">Graphic Design</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="input-container">
                  <label for="">Task</label><br />
                <input class="agent-input-field" name="task" required></input>
                </div>
              </div>
                <input type="submit" class="adduser-btn" name="adduser-btn" value="Add"></input>
              </form>
            </div>
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
