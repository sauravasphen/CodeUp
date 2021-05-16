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


$sql ="INSERT INTO Agent(agent_username,f_name,Email,Password,contact_num)
VALUES('aniraj_a','Aniraj Khadgi A','aniraj.khadgi.a@gmail.com','ak456','9817485395');
INSERT INTO Agent(agent_username,f_name,Email,Password,contact_num)
VALUES('nirdesh_a','Nirdesh Pradhan A','nirdesh.pradhan.a@gmail.com','np456','9846575721');
INSERT INTO Agent(agent_username,f_name,Email,Password,contact_num)
VALUES('nischal_a','Nischal Thapa A','nischal.thapa.a@gmail.com','nt456','9847582934');
INSERT INTO Agent(agent_username,f_name,Email,Password,contact_num)
VALUES('saurabh_a','Saurabh Majhi A','saurabh.majhi.a@gmail.com','sm456','9847563624');";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
 ?>
