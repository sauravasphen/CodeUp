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
  // password change
  if(isset($_POST['savechange'])){
  if(isset($_POST['cpw'])&&isset($_POST['npw'])&&isset($_POST['cpwd'])){
        $current=$_POST['cpw'];
        $new_pwd=$_POST['npw'];
        $confirm_pwd=$_POST['cpwd'];
              $result = mysqli_query($conn,"SELECT *from company WHERE company_id='" . $id . "'");
              $row=mysqli_fetch_array($result);
              if($current == $row["Password"] && $new_pwd===$confirm_pwd) {
                mysqli_query($conn,"UPDATE company set Password='" . $confirm_pwd . "' WHERE company_id='" . $id . "'");
                echo "<script>location.href='companypanal.php';
                window.alert('Changed');
                </script>";
              }
                else{
                       echo "<script>
                       location.href='companypanal.php';
                       window.alert('Not Changed');
                       </script>";
                   }
              }
  }
    else{
      header("Location:companypanal.php?error=''");
      $error = '';
       exit();
    }
?>
