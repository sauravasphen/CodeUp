<?php
SESSION_start();

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

$username=$_POST['username'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$type=$_POST['acc-type'];

if($type==='admin'){
  $sql ="INSERT INTO Admin(admin_username,f_name,Email,Password,contact_num)
  VALUES('$username','$name','$email','$password','$contact');";

  if (mysqli_multi_query($conn, $sql)) {
    echo '<script type="text/javascript">';
  echo ' alert("New records added successfully")';  //not showing an alert box.
  echo '</script>';
  header("location:admin_registration.php");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

}

elseif ($type==='agent') {
  $sql ="INSERT INTO Agent(agent_username,f_name,Email,Password,contact_num)
  VALUES('$username','$name','$email','$password','$contact');";
  if (mysqli_multi_query($conn, $sql)) {
    echo '<script type="text/javascript">';
  echo ' alert("New records added successfully")';  //not showing an alert box.
  echo '</script>';
  header("location:admin_registration.php");
  }
   else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

elseif ($type==='company') {
  $sql ="INSERT INTO Company(company_username,company_name,Email,Password,contact_num)
  VALUES('$username','$name','$email','$password','$contact');";
  if (mysqli_multi_query($conn, $sql)) {
    echo '<script type="text/javascript">';
  echo ' alert("New records added successfully")';  //not showing an alert box.
  echo '</script>';
  header("location:admin_registration.php");
}
   else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
