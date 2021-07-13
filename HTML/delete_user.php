<?php
include('connection.php');
if (isset($_POST['delete'])) {
    $id =$_POST['Deliting_id'];
    $sql = "DELETE FROM contactus WHERE contactus_id={$id}";

    if (mysqli_query($conn, $sql)) {
     header("Location:Admin-NewQueries.php");
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
}
if (isset($_POST['submit'])) {
  $id =$_POST['Deliting_id'];
  $f_name=$_POST['fname'];
  $email=$_POST['email'];
  $contact_num=$_POST['contact_num'];
  $sql = "UPDATE agent SET f_name='$f_name', email='$email',contact_num='$contact_num' WHERE agent_id='$id'";
  if (mysqli_query($conn, $sql)) {
   header("Location:admin-agentview.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
mysqli_close($conn);

 ?>
