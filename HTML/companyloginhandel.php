<?php
SESSION_start();

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
$user=$_POST['username'];
$pass=$_POST['password'];

$sql="select *from Company
      where company_id='$user' and Password='$pass'";
      $result=mysqli_query($conn,$sql);

      if (mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        if($row['company_id']===$user&& $row['Password']===$pass){
          $_SESSION['c_name']=$row['c_name'];
          $_SESSION['C_username']=$row['company_id'];
          $_SESSION['C_contact_num']=$row['contact_num'];
          header("location:companypanal.php");
          exit();
        }
        else{
          header("location:mainpage.php");
          window.alert("incorrect username or password");
          exit();
        }
      }
      //
      // else{
      //   header("location:form.php?error=Incorrect Username or Password");
      //   exit();
      //     // echo "<script> alert('Invalid Username or Password')</script>";
      //     // echo "<script>window.location.href='http://localhost/loginform/form.php'</script>";
      // }
      else{
        header("location:mainpage.php");
        window.alert("not registered. go fuck ur self");
        exit();
      }
  ?>
