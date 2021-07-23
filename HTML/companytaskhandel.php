<?php
session_start();
  if (isset($_SESSION['company_name']) && isset($_SESSION['company_id'])){
$company_id=$_SESSION['company_id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CodeUp_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$subject=$_POST['subject'];
$task=$_POST['task'];

  $sql= "INSERT INTO Task(company_id,subject,task,issued_date)
  VALUES($company_id,'$subject','$task',CURRENT_DATE())";


  if(mysqli_multi_query($conn,$sql)){
    echo"task added successfully";
    header("location:company-taskadd.php");

mysqli_close($conn);
}
}
else{
  header("location:mainpage.php");
  exit();
}
?>
