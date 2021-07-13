<?php
  session_start();
  $id=$_SESSION['admin_id'];
  if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id'])){
    include('connection.php');

    if(isset($_POST['save'])){
      $f_name = $_POST['fname'];
      $email = $_POST['email'];
      $Phone_number = $_POST['Phone_number'];

     $sql = "UPDATE admin SET f_name='$f_name', Email='$email', contact_num='$Phone_number' WHERE admin_id='$id'";

      if(mysqli_query($conn,$sql)){
        header("location:Admin-Dashboard.php");
      }
      else{
        echo mysqli_error($conn);
      }
    }
    if(isset($_POST['savechange'])){
    if(isset($_POST['cpw'])&&isset($_POST['npw'])&&isset($_POST['cpwd'])){

          $cpw=$_POST['cpw'];
          $npw=$_POST['npw'];
          $cpwd=$_POST['cpwd'];

            if($npw !== $cpwd){

                $error="The Confirmation Password does not match.";
                header("Location: admin.php?error=$error");

              }
              else{
                //hashing the password

                $sql1 = "SELECT Password
                        FROM admin
                        WHERE admin_id= '$id' AND Password= '$cpw ";

                $result= mysqli_query($conn,$sql1);

                    if(mysqli_num_rows($result)>= 1){

                      $result1= mysqli_query($conn,"UPDATE admin SET Password = '$cpwd' WHERE admin_id= '$id'");

                      if($result1){
                       echo $error = 'Your password has been updated successfully.';
                         header("Location: Admin-Dashboard.php?error=$error");
                      }


                    }
                    else{
                      echo  $error = ' Old Password does not match.';
                        header("Location: Admin-Daashboard.php?error=$error");
                    }
                }

    }
    else{
      header("Location: Admin-Dashboard.php?error=''");
      $error = '';
       exit();

    }
    }
  }
?>
