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


$sql ="INSERT INTO Company(agent_id,company_username,company_name,Email,Password,contact_num)
VALUES('4','asphen.photos','Asphen Photography','asphen.photos@gmail.com','ap789','9841554554');
INSERT INTO Company(agent_id,company_username,company_name,Email,Password,contact_num)
VALUES('1','aniraj.resume','Aniraj Resume','aniraj.resume@gmail.com','ar789','9847465789');
INSERT INTO Company(agent_id,company_username,company_name,Email,Password,contact_num)
VALUES('2','curt.cobin','Curt Cobin','curt.cobin@gmail.com','cc789','9476536473');
INSERT INTO Company(agent_id,company_username,company_name,Email,Password,contact_num)
VALUES('3','cyberpunk','Cyberpunk 2077','cyberpunk@gmail.com','cp789','9822553461');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
