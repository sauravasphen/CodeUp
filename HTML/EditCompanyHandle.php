<?php
  SESSION_start();
  if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id']) && isset($_SESSION['edit_id'])){
    include('connection.php');
    $id = $_SESSION['edit_id'];
    $username=$_GET['username'];
    $name=$_GET['name'];
    $email=$_GET['email'];
    // $password=$_GET['password'];
    $contact_num=$_GET['contact_num'];
      $sql ="UPDATE company SET company_username='$username',company_name='$name', email='$email',contact_num='$contact_num'
      WHERE company_id='$id'";
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
