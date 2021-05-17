<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "CodeUp_db";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
echo "connection successfuly";

$F_name=$_POST['f_name'];
$company_name=$_POST['company_name'];
$email=$_POST['email'];
$contact_num=$_POST['contact_num'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql_contactus = "INSERT INTO Contactus(f_name,company_name,email,contact_num,subject,message)
VALUES('$f_name','$company_name','$email','$contact_num','$subject','$message');";

if (mysqli_query($conn, $sql_contactus)) {
    echo '<script>  alert("welldone");   </script>';
    // header("location:contactus.php"); Not Working
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
