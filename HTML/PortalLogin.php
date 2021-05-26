<?php
SESSION_start();

$dbname = "CodeUp_db";

// Create connection
$conn = mysqli_connect("localhost", "root", "", $dbname);
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
$username=$_POST['username'];
$password=$_POST['password'];
$acc_type=$_POST['acc-type'];

if ($acc_type == 'company') {
  $sql = "select * from company where company_username='$username' and password='$password'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    if($row['company_username']===$username && $row['Password']===$password){
      $_SESSION['company_id']=$row['company_id'];
      $_SESSION['company_name']=$row['company_name'];
      header("location:companypanal.php");
      exit();
    }
  }
  else{
   header("location:mainpage.php");
   exit();
  }
}
elseif ($acc_type == 'agent') {
  $sql = "select * from agent where agent_username='$username' and password='$password'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    if($row['agent_username']===$username && $row['Password']===$password){
      $_SESSION['agent_id']=$row['agent_id'];
      $_SESSION['agent_name']=$row['f_name'];
      header("location:agentpanal.php");
      exit();
    }
  }
  else{
   header("location:mainpage.php");
   exit();
  }
}
elseif ($acc_type == 'admin') {
  $sql = "select * from admin where admin_username='$username' and password='$password'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)===1){
    $row=mysqli_fetch_assoc($result);
    if($row['admin_username']===$username && $row['Password']===$password){
      $_SESSION['admin_id']=$row['admin_id'];
      $_SESSION['admin_name']=$row['f_name'];
      header("location:adminpanal.php");
      exit();
    }
  }
  else{
   header("location:mainpage.php");
   exit();
  }
}
  ?>
