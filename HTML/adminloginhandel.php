<?php
SESSION_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CodeUp_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
$user=$_POST['username'];
$pass=$_POST['password'];

$sql="select *from Admin
      where admin_username='$user' and Password='$pass'";
      $result=mysqli_query($conn,$sql);

      if (mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        if($row['admin_username']===$user&& $row['Password']===$pass){
          $_SESSION['admin_name']=$row['f_name'];
          $_SESSION['admin_id']=$row['admin_id'];
          $_SESSION['contact_num']=$row['contact_num'];
          header("location:adminpanal.php");
          exit();
        }
      }
        else{
          // header("location:mainpage.php");
          echo "<script>location.href='mainpage.php';
          window.alert('incorrect username or password');
          </script>";
        exit();
      }
  ?>
