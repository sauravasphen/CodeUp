<?php
session_start();
$company_id=$_SESSION['c_id'];
if(isset($_POST['submit'])){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CodeUp_db";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

$subject=$_POST['subject'];
$desc=$_POST['desc'];

  $sql= "INSERT INTO Task(company_id,subject,task,issued_date)
  VALUES($company_id,'$subject','$desc',CURRENT_DATE())";


  if(mysqli_multi_query($conn,$sql)){
    echo"task added successfully";
    header("location:company-task.php");
  }
  else{
    echo "error:".$sql."<br>".mysqli_error($conn);
  }


mysqli_close($conn);
}
?>
