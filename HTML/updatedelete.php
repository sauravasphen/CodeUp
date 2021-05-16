<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CodeUp_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
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


if (isset($_POST['delete'])) {
  if($type==='admin'){
    $sql ="DELETE FROM Admin WHERE username='$username';";
    if (mysqli_multi_query($conn, $sql)) {
      echo '<script type="text/javascript">';
    echo ' alert("Record Deleted Successfully")';  //not showing an alert box.
    echo '</script>';
    header("location:admin-editprofile.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  }

  elseif ($type==='agent') {
    $sql ="DELETE FROM Agent WHERE a_username='$username';";
    if (mysqli_multi_query($conn, $sql)) {
      echo '<script type="text/javascript">';
    echo ' alert("Record Deleted Successfully")';  //not showing an alert box.
    echo '</script>';
    header("location:admin-editprofile.php");
    }
     else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  elseif ($type==='company') {
    $sql ="DELETE FROM Company  WHERE c_username='$username';";
    if (mysqli_multi_query($conn, $sql)) {
      echo '<script type="text/javascript">';
    echo ' alert("Record Deleted Successfully")';  //not showing an alert box.
    echo '</script>';
    header("location:admin-editprofile.php");
  }
     else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

if (isset($_POST['update'])) {
  if($type==='admin'){
    $sql ="UPDATE Admin
           SET f_name='$name',Email='$email',Password='$password',contact_num='$contact'
           WHERE username='$username';";
    if (mysqli_multi_query($conn, $sql)) {
      echo '<script type="text/javascript" >';
    echo ' alert("Record Deleted Successfully")';  //not showing an alert box.
    echo '</script>';
    header("location:admin-editprofile.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

  }

  elseif ($type==='agent') {
    $sql ="UPDATE Agent
            SET f_name='$name',Email='$email',Password='$password',contact_num='$contact'
    WHERE a_username='$username';";
    if (mysqli_multi_query($conn, $sql)) {
      echo '<script type="text/javascript">';
    echo ' alert("Record Deleted Successfully")';  //not showing an alert box.
    echo '</script>';
    header("location:admin-editprofile.php");
    }
     else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  elseif ($type==='company') {
    $sql ="UPDATE Company
          SET c_name='$name',Email='$email',Password='$password',contact_num='$contact'
          WHERE c_username='$username';";
    if (mysqli_multi_query($conn, $sql)) {
      echo '<script type="text/javascript">';
    echo ' alert("Record Deleted Successfully")';  //not showing an alert box.
    echo '</script>';
    header("location:admin-editprofile.php");
  }
     else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

mysqli_close($conn);
 ?>
