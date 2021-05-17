<?php
$servername="localhost";
$username="root";
$password="";
$dbname="CodeUp_db";

//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
//check connections
if(!$conn){
  die("connection failed:".mysqli_connect_error());
}


$sql ="INSERT INTO contactus(company_name,f_name,Email,contact_num,subject,message,mgs_date)
VALUES('Curt Cobin','Nirdesh','curtcobin@gmail.com','9818714084','Need Website','I want a wonderful website','2021-05-15');
";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
