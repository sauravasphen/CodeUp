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

$sql="select *from Agent
      where agent_username='$user' and Password='$pass'";
      $result=mysqli_query($conn,$sql);

      if (mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        if($row['agent_username']===$user&& $row['Password']===$pass){
          $_SESSION['agent_name']=$row['f_name'];
          $_SESSION['agent_id']=$row['agent_id'];
          $_SESSION['contact_num']=$row['contact_num'];
          header("location:agentpanal.php");
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
        window.alert("Not Registered.");
        exit();
      }
  ?>
