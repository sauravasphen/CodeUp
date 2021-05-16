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
$sql_admin = "CREATE TABLE Admin (
    admin_id int(10) AUTO_INCREMENT PRIMARY KEY,
    admin_username VARCHAR(50) NOT NULL,
    f_name VARCHAR(50) NOT NULL,
    Email VARCHAR(40) NOT NULL Unique,
    Password CHAR(128),
    contact_num int(10) Unique
    )";


    if ($conn->query($sql_admin) === TRUE) {
        echo "1.  Admin table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $sql_agent = "CREATE TABLE Agent (
        agent_id int(10) AUTO_INCREMENT PRIMARY KEY,
        agent_username VARCHAR(50) NOT NULL,
        f_name VARCHAR(50) NOT NULL,
        Email VARCHAR(40) NOT NULL Unique,
        Password CHAR(128),
        contact_num int(10) Unique
        )";

    if ($conn->query($sql_agent) === TRUE) {
        echo "2. Agent table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $sql_company = "CREATE TABLE Company (
        company_id int(10) AUTO_INCREMENT  PRIMARY KEY,
        company_username VARCHAR(50) NOT NULL,
        company_name VARCHAR(50) NOT NULL,
        Email VARCHAR(40) NOT NULL Unique,
        Password CHAR(128),
        contact_num int(10) Unique,
        agent_id int(10),
        FOREIGN KEY(agent_id) REFERENCES Agent(agent_id)
        )";

    if ($conn->query($sql_company) === TRUE) {
        echo "3. Company table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $sql_task = "CREATE TABLE Task (
        task_id int(20) AUTO_INCREMENT PRIMARY KEY,
        company_id int(10),
        subject VARCHAR(50) NOT NULL,
        task VARCHAR(40) NOT NULL,
        report VARCHAR (90),
        status boolean default 0,
        issued_date date,
        closed_date date,
        FOREIGN KEY(company_id) REFERENCES Company(company_id)
        )";

    if ($conn->query($sql_task) === TRUE) {
        echo "4. Task table created successfully <br/>";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    // Contact Us table pending

    mysqli_close($conn);
     ?>
