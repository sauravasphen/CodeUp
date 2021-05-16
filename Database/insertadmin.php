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


$sql ="INSERT INTO Admin(admin_username,f_name,Email,Password,contact_num)
VALUES('aniraj','Aniraj Khadgi','aniraj.khadgi@gmail.com','ak123','9838459043');
INSERT INTO Admin(admin_username,f_name,Email,Password,contact_num)
VALUES('nirdesh','Nirdesh Pradhan','nirdesh.pradhan@gmail.com','np123','1860102400');
INSERT INTO Admin(admin_username,f_name,Email,Password,contact_num)
VALUES('nischal','Nischal Thapa','nischal.thapa@gmail.com','nt123','1482747567');
INSERT INTO Admin(admin_username,f_name,Email,Password,contact_num)
VALUES('saurabh','Saurabh Majhi','saurabh.majhi@gmail.com','sm123','1818714084');";
if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
