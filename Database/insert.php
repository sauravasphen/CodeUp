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
VALUES('saurav21','Saurav Majhi','saurav@gmail.com','67890','984155674');";
$sql.="INSERT INTO Admin(admin_username,f_name,Email,Password,contact_num)
VALUES('pradhan21','Nirdesh Pradhan','nirdesh@gmail.com','12345','9860102400');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql ="INSERT INTO Agent(agent_username,f_name,Email,Password,contact_num)
VALUES('aniraj','Aniraj Shahi','aniraj@gmail.com','67890','9841554554');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error adding agent: " . $sql . "<br>" . mysqli_error($conn);
}

$sql ="INSERT INTO Company(company_username,company_name,Email,Password,contact_num)
VALUES('nischal','Niscahl Thapa','nischal@gmail.com','00000','9841554554');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error adding company: " . $sql . "<br>" . mysqli_error($conn);
}

$sql ="INSERT INTO Task (company_id,subject,task,report,status,issued_date,closed_date)
VALUES('nischal','Boost FB','Please boost recent post','',1,'2021/05-13',CURRENT_DATE());";
$sql .="INSERT INTO Task (company_id,subject,task,report,status,issued_date,closed_date)
VALUES('nischal','Edit Website','Please add other products','',0,'2021/05-13',CURRENT_DATE());";



if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error adding company: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
 ?>
