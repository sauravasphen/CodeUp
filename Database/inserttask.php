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


$sql ="INSERT INTO task(company_id,subject,task,report,status,issued_date)
VALUES('1','Website Edit','Please edit my Website.','',1,'2021-05-01');
INSERT INTO task(company_id,subject,task,report,status,issued_date)
VALUES('1','Add Photo','Please add my new photos.','',1,'2021-05-11');
INSERT INTO task(company_id,subject,task,report,status,issued_date, closed_date)
VALUES('1','Boost FB page','Please boost giveaway post','',0,'2021-05-01','2021-05-02');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
