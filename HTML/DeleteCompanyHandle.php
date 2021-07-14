<?php
  SESSION_start();
  if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id']) && isset($_SESSION['edit_id'])){
    include('connection.php');
    $id = $_SESSION['edit_id'];
      $sql ="DELETE *FROM company INNER JOIN task  WHERE company.company_id=task.company_id AND company.company_id='$id'";
    if(mysqli_query($conn,$sql)){
      echo "<script>location.href='Admin-CompanyView.php';
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
