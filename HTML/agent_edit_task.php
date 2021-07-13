<?php
include('connection.php');
  $id =$_POST['Deliting_id'];
  $report=$_POST['report'];
  $status=$_POST['status'];
  $sql = "UPDATE task SET report='$report', status='$status', closed_date=CURRENT_DATE() WHERE task_id='$id'";
  if (mysqli_query($conn, $sql)) {
   header("Location:agent-taskview.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
mysqli_close($conn);

 ?>
