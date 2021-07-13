<?php
  SESSION_start();
  $id = $_SESSION['company_id'];
  if (isset($_SESSION['company_name']) && isset($_SESSION['company_id'])){
      include('connection.php');

    if(isset($_POST['save'])){
      $company_name = $_POST['cname'];
      $email = $_POST['email'];
      $Phone_number = $_POST['Phone_number'];

     $sql = "UPDATE company SET company_name='$company_name', Email='$email', contact_num='$Phone_number' WHERE company_id='$id'";

      if(mysqli_query($conn,$sql)){
        header("location:companypanal.php");
      }
      else{
        echo mysqli_error($conn);
      }
    }
  }
    else{
      header("Location:companypanal.php?error=''");
      $error = '';
       exit();
    }
?>
