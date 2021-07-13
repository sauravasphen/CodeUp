<?php
  SESSION_start();
  if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id']) && isset($_SESSION['edit_id'])){
    include('connection.php');
    $id = $_SESSION['edit_id'];
      $sql ="DELETE FROM company WHERE company_id='$id'";
    if(mysqli_query($conn,$sql)){
      echo "<script>location.href='Admin-AgentView.php';
      </script>";
    }
    else {
      echo "Error: ".mysqli_error($conn);
    }
  }
  else{
   header("location:mainpage.php");
   exit();
 }
 ?>
