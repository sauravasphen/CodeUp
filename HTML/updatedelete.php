<?php
session_start();

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


if (isset($_POST['delete'])) {
  if($type==='admin'){
    $sql ="DELETE FROM Admin WHERE admin_username='$username';";
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
    $sql ="DELETE FROM Agent WHERE agent_username='$username';";
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
    $sql ="DELETE FROM Company  WHERE company_username='$username';";
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
           WHERE admin_username='$username';";
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
    WHERE agent_username='$username';";
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
          SET company_name='$name',Email='$email',Password='$password',contact_num='$contact'
          WHERE company_username='$username';";
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
