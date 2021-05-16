<?php
SESSION_start();

if(isset($_SESSION['company_id'])){

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
echo "connection successfuly";

$subject=$_POST['subject'];
$task=$_POST['task'];

// //   $name=$_SESSION['c_name'];
// //   $selectquery="SELECT c_name FROM Company WHERE c_name==='$name' ;";
// //   $query=mysqli_query($conn,$selectquery);
// //   $res=mysqli_fetch_assoc($query);
// //     if ($res['c_name']===$name) {
// //        $c_name=$res['c_name'];
// //     }
// //     else{
// //       echo "Error: " . $selectquery . "<br>" . mysqli_error($conn);
// //     }
// }

  $sql= "INSERT INTO Task(company_id,subject,task,status,issued_date)
  VALUES('$_SESSION['company_id']','$subject','$task',CURRENT_DATE());";
  $sql .= "INSERT INTO Task(company_id,subject,task,status,issued_date)
  VALUES('$_SESSION['company_id']','$subject','$task',CURRENT_DATE());";

  if(mysqli_multi_query($conn,$sql)){
    echo"task added successfully";
  }
  else{
    echo "error:".$sql."<br>".mysqli_error($conn);
  }


mysqli_close($conn);
}
?>
