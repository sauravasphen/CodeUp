<?php
  SESSION_start();
  if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id'])){
    include('connection.php');
    $acc_type=$_POST['acc-type'];
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact_num=$_POST['contact_num'];
    if ($acc_type == "company") {
      $sql ="INSERT INTO company(company_username,company_name,Email,Password,contact_num)
      VALUES('$username','$name','$email','$password','$contact_num');";
    }
    elseif ($acc_type == "agent") {
      $sql ="INSERT INTO agent(agent_username,f_name,Email,Password,contact_num)
      VALUES('$username','$name','$email','$password','$contact_num');";
    }
    elseif ($acc_type == "admin") {
      $sql ="INSERT INTO admin(admin_username,f_name,Email,Password,contact_num)
      VALUES('$username','$name','$email','$password','$contact_num');";
    }
    if(mysqli_query($conn,$sql)){
      echo "<script>location.href='Admin-AddUser.php';
      window.alert('Data Added');
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
