<?php
  session_start();
  $id=$_SESSION['agent_id'];
  if (isset($_SESSION['agent_name']) && isset($_SESSION['agent_id'])){
    include('connection.php');

    if(isset($_POST['save'])){
      $f_name = $_POST['fname'];
      $email = $_POST['email'];
      $Phone_number = $_POST['Phone_number'];

     $sql = "UPDATE agent SET f_name='$f_name', Email='$email', contact_num='$Phone_number' WHERE agent_id='$id'";

      if(mysqli_query($conn,$sql)){
        header("location:Agent-Dashboard.php");
      }
      else{
        echo mysqli_error($conn);
      }
    }
    // password change
    if(isset($_POST['savechange'])){
    if(isset($_POST['cpw'])&&isset($_POST['npw'])&&isset($_POST['cpwd'])){
          $current=$_POST['cpw'];
          $new_pwd=$_POST['npw'];
          $confirm_pwd=$_POST['cpwd'];
                $result = mysqli_query($conn,"SELECT *from agent WHERE agent_id='" . $id . "'");
                $row=mysqli_fetch_array($result);
                if($current == $row["Password"] && $new_pwd===$confirm_pwd) {
                  mysqli_query($conn,"UPDATE agent set Password='" . $confirm_pwd . "' WHERE agent_id='" . $id . "'");
                  echo "<script>location.href='Admin-Dashboard.php';
                  window.alert('Changed');
                  </script>";
                }
                  else{
                         echo "<script>
                         location.href='Admin-Dashboard.php';
                         window.alert('Not Changed');
                         </script>";
                     }
                }
    }
  }
    else{
      header("Location: Admin-Dashboard.php?error=''");
      $error = '';
       exit();
    }
?>
