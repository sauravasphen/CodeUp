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


$sql ="INSERT INTO Admin(admin_id,f_name,Email,Password,contact_num)
VALUES(1111,'Saurav Majhi','saurav@gmail.com','67890','984155674');";
$sql.="INSERT INTO Admin(admin_id,f_name,Email,Password,contact_num)
VALUES(2222,'Nirdesh Pradhan','nirdesh@gmail.com','12345','9860102400');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
